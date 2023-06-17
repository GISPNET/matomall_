<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //$this->middleware('auth.seller');
    }
    public function index()
    {
       $orders =Auth::user()->store->orders()->paginate(10);
       return view('sellers.orders', compact(['orders']));
    }
    public function show($id)
    {
       $order=\App\Models\CustomerOrder::find($id);
       return view('sellers.order-details', compact(['order']));
    }
}
