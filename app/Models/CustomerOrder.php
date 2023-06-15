<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    use HasFactory;

    protected $table="customer_orders";

    protected $fillable = [
        'reference',
        'state',
        'exchange_rate',
        'parent_payment',
        'payment_mode',
        'items',
        'store_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function stores(){
        return $this->belongsToMany(Store::class,'order_store');
    }
}
