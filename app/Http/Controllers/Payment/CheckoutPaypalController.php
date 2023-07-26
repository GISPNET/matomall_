<?php

namespace App\Http\Controllers\Payment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use URL;
use Session;
use Redirect;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Currency;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payout;
use PayPal\Api\PayoutItem;
use PayPal\Api\PayoutSenderBatchHeader;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Api\Payer;
use App\Http\Controllers\Controller;

class CheckoutPaypalController extends Controller
{
    private $_api_context;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /** configurar o contexto da API do PayPal **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }
    /**
     * Store payment details with PayPal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postPaymentWithpaypal(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $carts = session()->get('cart');
        $items = [];

        foreach ($carts as $cart) {
            $item = new Item();
            $item->setName($cart['name'])
                ->setCurrency('BRL')
                ->setQuantity($cart['amount'])
                ->setPrice($cart['price']);
            $items[] = $item;
        }

        $item_list = new ItemList();
        $item_list->setItems($items);

        $amount = new Amount();
        $amount->setCurrency('BRL')
            ->setTotal(0);

        foreach ($carts as $cart) {
            $itemTotal = $cart['amount'] * $cart['price'];
            $amount->setTotal($amount->getTotal() + $itemTotal);
        }

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('payment.status'))
            ->setCancelUrl(URL::route('payment.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error', 'Connection timeout');
                return Redirect::route('addmoney.paywithpaypal');
            } else {
                \Session::put('error', 'Some error occurred, sorry for the inconvenience');
                return Redirect::route('addmoney.paywithpaypal');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        /** adicionar ID de pagamento à sessão**/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {
            /** redirecionar para o PayPal **/
            return Redirect::away($redirect_url);
        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::route('addmoney.paywithpaypal');
    }

    public function getPaymentStatus(Request $request)
    {
        $user = Auth::user();

        $carts = session()->get('cart');
        $items = [];

        foreach ($carts as $cart) {
            $item = [
                'name' => $cart['name'],
                'produto_image' => $cart['image'],
                'quantity' => $cart['amount'],
                'slug' => $cart['slug'],
                'price' => $cart['price'],
                'total' => $cart['amount'] * $cart['price'],
                'store_id' => $cart['store_id']
            ];

            $items[] = $item;
        }

        $stores = array_unique(array_column($items, 'store_id'));
        /** Obtenha o ID de pagamento da sessão antes de limpá-la **/
        $payment_id = Session::get('paypal_payment_id');

        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            \Session::put('error', 'Payment failed');
            return redirect()->route('checkout.index');
        }

        $payment = Payment::get($payment_id, $this->_api_context);

        /** Crie o objeto PaymentExecution com ID do pagador para executar o pagamento **/
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));

        /** Executar o pagamento **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {
            $transactions = $result->getTransactions();
            if (!empty($transactions)) {
                $transaction = $transactions[0];
                $relatedResources = $transaction->getRelatedResources();
                if (!empty($relatedResources)) {
                    $sale = $relatedResources[0]->getSale();
                    if (!empty($sale)) {
                        // Salvar as informações no array $customerOrder
                        $customerOrder = [
                            'reference' => $sale->getId(),
                            'state' => $sale->getState(),
                            'exchange_rate' => $sale->getExchangeRate(),
                            'parent_payment' => $sale->getParentPayment(),
                            'payment_mode' => $sale->getPaymentMode(),
                            'items' => json_encode($items),
                            'order_status' => 1,
                        ];

                        // Salvar as informações no banco de dados ou fazer o que for necessário
                        $order = $user->orders()->create($customerOrder);

                        $order->stores()->sync($stores);
                        /** Limpe o ID de pagamento da sessão **/
                        Session::forget('paypal_payment_id');

                        session()->forget('cart');

                        // Realizar pagamentos para as contas PayPal das lojas
                        $this->sendPaymentsToStores($order, $stores);

                        return redirect()->route('customer.invoice.index', $order->reference);
                    }
                }
            }
        }

        \Session::put('error', 'Payment failed');

        /** Limpe o ID de pagamento da sessão **/
        Session::forget('paypal_payment_id');

        /** Limpar a sessão do carrinho **/
        Session::forget('cart');

        return Redirect::route('addmoney.paywithpaypal');
    }

    /**
     * Send payments to the PayPal accounts of the stores.
     *
     * @param  \App\Models\Order  $order
     * @param  array  $storeIds
     * @return void
     */
    private function sendPaymentsToStores($order, $storeIds)
    {
        foreach ($storeIds as $storeId) {
            $store = \App\Models\Store::findOrFail($storeId);
            $storePaypalEmail = $store->paypal_email;
            $amount = $this->calculateStorePaymentAmount($order, $storeId);

            dd($storePaypalEmail);

            $payoutItem = new PayoutItem();
            $payoutItem->setRecipientType('EMAIL')
                ->setReceiver($storePaypalEmail)
                ->setAmount(new Currency('{
                    "value": "' . $amount . '",
                    "currency": "BRL"
                }'));

            $senderBatchHeader = new PayoutSenderBatchHeader();
            $senderBatchHeader->setSenderBatchId(uniqid())
                ->setEmailSubject('Pagamento para o pedido: ' . $order->reference);

            $payout = new Payout();
            $payout->setSenderBatchHeader($senderBatchHeader)
                ->addItem($payoutItem);

            try {
                $payout->create(null, $this->_api_context);
            } catch (\PayPal\Exception\PPConnectionException $ex) {
                \Session::put('error', 'Falha no pagamento');
                return;
            }
        }
    }


    /**
     * Calculate the payment amount for a store based on the order items.
     *
     * @param  \App\Models\Order  $order
     * @param  int  $storeId
     * @return float
     */
    private function calculateStorePaymentAmount($order, $storeId)
    {
        $items = json_decode($order->items, true);
        $storeItems = array_filter($items, function ($item) use ($storeId) {
            return $item['store_id'] == $storeId;
        });

        $totalAmount = 0;

        foreach ($storeItems as $item) {
            $totalAmount += $item['total'];
        }

        return $totalAmount;
    }
}
