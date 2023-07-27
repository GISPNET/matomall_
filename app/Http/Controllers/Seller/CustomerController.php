<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.seller');
    }
    public function index()
    {
        $orders = Auth::user()->store->orders;

        $uniqueCustomerIds = [];

        foreach ($orders as $order) {
            if (!in_array($order->user_id, $uniqueCustomerIds)) {
                $uniqueCustomerIds[] = $order->user_id;
            }
        }

        $uniqueCustomers = User::whereIn('id', $uniqueCustomerIds)->paginate(10);

        return view('sellers.customers.all-customers', compact('uniqueCustomers'));
    }
}
