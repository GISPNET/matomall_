<?php

namespace App\Http\Controllers\Auth\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerAuthController extends Controller
{
    public function index(){
        return view('auth.customer.register');
    }
}
