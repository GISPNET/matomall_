<?php

namespace App\Http\Controllers\Paymant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayPalPaymentController extends Controller
{
    public function execute(){
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                config('paypal.client_id'),
                config('paypal.secret')
            )
        );
    }
}
