<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($reference){
        $order=\App\Models\OrderUser::where('reference','=',$reference)->first();
        return view('web.invoice',compact(['order']))->with('payment-success','Pedido feito com sucesso');
    }
}
