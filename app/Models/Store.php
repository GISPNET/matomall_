<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Store extends Model
{
    use HasFactory;

    protected $table="stores";

    protected $fillable = [
        'name', 'description', 'phone', 'mobile_phone', 'slug','_token','logo'
    ];
    /**
     * Get all of the comments for the Store
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
