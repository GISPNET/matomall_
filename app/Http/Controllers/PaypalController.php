<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\PaymentExecution;
use PayPal\Exception\PayPalConnectionException;

class PaypalController extends Controller
{
    public function redirecionarPagamento()
    {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                config('paypal.client_id'),
                config('paypal.secret')
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal('10'); // Valor total do pagamento

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setDescription('Descrição do pagamento');

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('paypal.retorno'))
            ->setCancelUrl(route('paypal.cancelamento'));

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions([$transaction])
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($apiContext);
            $approvalUrl = $payment->getApprovalLink();
            return redirect()->to($approvalUrl);
        } catch (PayPalConnectionException $ex) {
            return redirect()->back()->with('error', 'Erro ao processar o pagamento.');
        }
    }

    public function retorno(Request $request)
    {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                config('paypal.client_id'),
                config('paypal.secret')
            )
        );

        $paymentId = "12";
        $payerId = "1";

        $payment = Payment::get($paymentId, $apiContext);
        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        try {
            $result = $payment->execute($execution, $apiContext);
            // Lógica adicional após o pagamento ser concluído com sucesso
            return redirect()->route('home')->with('success', 'Pagamento concluído com sucesso.');
        } catch (PayPalConnectionException $ex) {
            // Lida com exceções de conexão com o PayPal
            return redirect()->back()->with('error', 'Erro ao processar o pagamento.');
        }
    }

    public function cancelamento()
    {
        // Lógica adicional para lidar com o cancelamento do pagamento
        return redirect()->route('home')->with('error', 'Pagamento cancelado.');
    }
}
