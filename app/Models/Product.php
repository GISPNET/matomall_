<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        'name', 'description', 'body', 'price', 'slug','store_id'
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
    public function photos()
    {
        return $this->hasMany(ProductImage::class);
    }
}
