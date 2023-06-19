<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class OrderUser extends Model
{
    use HasFactory;

    protected $table="order_user";

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
    public function stores()
    {
        return $this->belongsToMany(Store::class,'order_store');
    }
}
