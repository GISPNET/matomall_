<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    use HasSlug;

    protected $table = "products";

    protected $fillable = [
        'name', 'description', 'body', 'price', 'slug', 'regular_price', 'sale_price', 'shipping_type', 'delivery', 'product_id_type', 'product_id', 'expiry_date_of_product','category_id','brand_id','tag_id'
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
    public function photos()
    {
        return $this->hasMany(ProductImage::class);
    }
}
