<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use PayPal\Api\Order;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'shipping_address',
        'billing_address',
        'alternative_phone',
        'gender',
        'date_of_birth',
        'facebook',
        'instagram',
        'twitter',
        'profile_picture',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */


    public function seller()
    {
        return $this->hasOne(Seller::class);
    }

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function customerorder()
    {
        return $this->hasMany(CustomerOrder::class, 'user_id');
    }
    public function store()
    {
    	return $this->hasOne(Store::class);
    }
}
