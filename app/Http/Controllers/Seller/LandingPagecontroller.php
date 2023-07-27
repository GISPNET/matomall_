<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPagecontroller extends Controller
{
    public function index(){
        return view('landing.default');
    }
}
