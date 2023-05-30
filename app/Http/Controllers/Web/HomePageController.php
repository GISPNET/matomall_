<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $products = \App\Models\Product::all();
        return view('web.homepage', compact(['products']));
    }
}
