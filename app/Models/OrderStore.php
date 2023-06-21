<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStore extends Model
{
    use HasFactory;

    protected $table = 'order_store';

    public function getTotalSalesChartData()
    {
        $storeId = 1; // Substitua pelo ID correto da loja

        $salesData = OrderStore::join('order_user', 'order_store.order_user_id', '=', 'order_user.id')
            ->selectRaw('SUM(order_store.items->>"$.total") as total_sales, MONTH(order_user.created_at) as month')
            ->where('order_store.store_id', '=', $storeId)
            ->groupBy('month')
            ->pluck('total_sales', 'month')
            ->toArray();

        return $salesData;
    }
}
