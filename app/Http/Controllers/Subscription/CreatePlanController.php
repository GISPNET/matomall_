<?php

namespace App\Http\Controllers\Subscription;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use URL;
use Session;
use Redirect;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Plan;
use PayPal\Api\Payer;
use PayPal\Api\ShippingAddress;
use PayPal\Api\Agreement;
use PayPal\Api\AgreementStateDescriptor;
use PayPal\Api\AgreementDetails;
use PayPal\Api\AgreementExecutionDetails;
use PayPal\Exception\PayPalConnectionException;
use App\Http\Controllers\Controller;

class CreatePlanController extends Controller
{
    private $_api_context;

    public function __construct()
    {
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function createBillingPlan(Request $request)
    {
        $plan = new Plan();
        $plan->setName('Plano Mensal')
            ->setDescription('Assinatura mensal')
            ->setType('INFINITE');

        $paymentDefinition = new \PayPal\Api\PaymentDefinition();
        $paymentDefinition->setName('Pagamento Mensal')
            ->setType('REGULAR')
            ->setFrequency('Month')
            ->setFrequencyInterval('1')
            ->setCycles('0')
            ->setAmount(new \PayPal\Api\Currency([
                'value' => '29.99',
                'currency' => 'BRL'
            ]));

        $merchantPreferences = new \PayPal\Api\MerchantPreferences();
        $merchantPreferences->setReturnUrl(URL::route('payment.execute'))
            ->setCancelUrl(URL::route('payment.cancel'))
            ->setAutoBillAmount('yes')
            ->setInitialFailAmountAction('CONTINUE')
            ->setMaxFailAttempts('2');

        $plan->setPaymentDefinitions([$paymentDefinition]);
        $plan->setMerchantPreferences($merchantPreferences);

        try {
            $plan = $plan->create($this->_api_context);

            // Ative o plano
            $patch = new \PayPal\Api\Patch();
            $value = new \PayPal\Api\PatchValue();
            $value->set('state', 'ACTIVE');
            $patch->setOp('replace')
                ->setPath('/')
                ->setValue($value);

            $patchRequest = new \PayPal\Api\PatchRequest();
            $patchRequest->addPatch($patch);

            $plan->update($patchRequest, $this->_api_context);

            return $plan->getId();
        } catch (PayPalConnectionException $ex) {
            return null;
        }
    }

    public function createSubscription(Request $request)
    {
        $planId = $request->input('plan_id');

        $agreement = new Agreement();
        $agreement->setName('Assinatura Mensal')
            ->setDescription('Assinatura mensal')
            ->setStartDate(gmdate("Y-m-d\TH:i:s\Z", strtotime("+1 month")))
            ->setPlan(new Plan(['id' => $planId]));

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $agreement->setPayer($payer);

        try {
            $agreement = $agreement->create($this->_api_context);

            $approvalUrl = $agreement->getApprovalLink();

            return Redirect::away($approvalUrl);
        } catch (PayPalConnectionException $ex) {
            return null;
        }
    }

    public function executeSubscription(Request $request)
    {
        $token = $request->input('token');
        $agreement = new Agreement();
        try {
            $agreement->execute($token, $this->_api_context);

            $agreementDetails = Agreement::get($agreement->getId(), $this->_api_context);

            $agreementState = $agreementDetails->getState();

            if ($agreementState == 'Active') {
                // Assinatura ativada com sucesso
                // Faça o que for necessário

                return 'Assinatura ativada com sucesso!';
            } else {
                // Falha ao ativar a assinatura
                // Faça o que for necessário

                return 'Falha ao ativar a assinatura.';
            }
        } catch (PayPalConnectionException $ex) {
            return null;
        }
    }

    public function cancelSubscription(Request $request)
    {
        $token = $request->input('token');
        $agreement = new Agreement();
        try {
            $agreement->execute($token, $this->_api_context);

            $agreementState = $agreement->getState();

            if ($agreementState == 'Cancelled') {
                // Assinatura cancelada com sucesso
                // Faça o que for necessário

                return 'Assinatura cancelada com sucesso!';
            } else {
                // Falha ao cancelar a assinatura
                // Faça o que for necessário

                return 'Falha ao cancelar a assinatura.';
            }
        } catch (PayPalConnectionException $ex) {
            return null;
        }
    }
}
