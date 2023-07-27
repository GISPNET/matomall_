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
        // Obter a loja do vendedor autenticado
        $store = Auth::user()->store;

        // Obter os pedidos feitos na loja do vendedor autenticado
        $orders = $store->orders;

        // Criar um array para armazenar os IDs de clientes únicos que fizeram pedidos na loja
        $uniqueCustomerIds = [];

        foreach ($orders as $order) {
            // Verificar se o ID do cliente já existe no array de IDs únicos
            if (!in_array($order->user_id, $uniqueCustomerIds)) {
                // Se o ID do cliente não existe, adicioná-lo ao array
                $uniqueCustomerIds[] = $order->user_id;
            }
        }

        // Obter os registros de clientes usando os IDs únicos
        $uniqueCustomers = User::whereIn('id', $uniqueCustomerIds)->paginate(10);

        // Calcular o total gasto, número de pedidos, data do último pedido e data do último acesso para cada cliente na loja
        foreach ($uniqueCustomers as $customer) {
            $customer->totalSpent = 0;
            $customer->totalOrders = 0;
            $customer->lastOrderDate = null;
            $customer->lastAccessDate = $customer->last_login_at; // Supondo que a coluna que armazena a data do último acesso do cliente seja 'last_login_at'

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

        // Passar os dados para a view 'sellers.customers.all-customers'
        return view('sellers.customers.all-customers', compact('uniqueCustomers'));
    }
}
