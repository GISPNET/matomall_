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
        $store = Auth::user()->store;

        $orders = $store->orders;

        $uniqueCustomerIds = [];

        foreach ($orders as $order) {

            if (!in_array($order->user_id, $uniqueCustomerIds)) {

                $uniqueCustomerIds[] = $order->user_id;
            }
        }

        $uniqueCustomers = User::whereIn('id', $uniqueCustomerIds)->paginate(10);

        foreach ($uniqueCustomers as $customer) {
            $customer->totalSpent = 0;
            $customer->totalOrders = 0;
            $customer->lastOrderDate = null;
            $customer->lastAccessDate = $customer->last_login_at;

            foreach ($orders as $order) {
                if ($order->user_id === $customer->id) {
                    $customer->totalOrders++;

                    foreach (json_decode($order->items) as $item) {
                        $customer->totalSpent += $item->total;
                    }

                    if (!$customer->lastOrderDate || $order->created_at > $customer->lastOrderDate) {
                        $customer->lastOrderDate = $order->created_at;
                    }
                }
            }
        }

        return view('sellers.customers.all-customers', compact('uniqueCustomers'));
    }
}
