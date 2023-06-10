<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index($reference){
        $order=\App\Models\CustomerOrder::where('reference','=',$reference)->first();
        return view('web.invoice',compact(['order']));
    }
}
