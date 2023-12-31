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
        $this->middleware('auth.seller');
    }
    public function index()
    {
       $orders =Auth::user()->store->orders()->latest()->paginate(10);
       return view('sellers.orders.all-orders', compact(['orders']));
    }

    public function pending_orders()
    {
    $user = Auth::user();
    $storeId = $user->store->id;

    $orders = $user->store->orders()->where('order_status',1)->latest()->paginate(10);

    return view('sellers.orders.pending_orders', compact('orders'));
   }
   public function completed_orders()
    {
    $user = Auth::user();
    $storeId = $user->store->id;

    $orders = $user->store->orders()->where('order_status',3)->latest()->paginate(10);

    return view('sellers.orders.completed_orders', compact('orders'));
   }
    public function show($id)
    {
       $order=\App\Models\OrderUser::find($id);
       return view('sellers.orders.order-details', compact(['order']));
    }

    public function update(Request $request, $id)
    {
       $data=$request->only('order_status');

       $order = \App\Models\OrderUser::find($id);

        if ($order) {
            $order->update($data);
            return redirect()->route('seller.orders.show', $order->id);
        } else {
            dd("PEdido nao existe");
        }
    }
}
