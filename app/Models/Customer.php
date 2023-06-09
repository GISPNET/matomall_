<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->hasMany(UserOrder::class);
    }
    public function billing_address()
    {
        return $this->hasOne(Billing_Address::class);
    }
    public function shipping_address()
    {
        return $this->hasOne(Shipping_Address::class);
    }
}
