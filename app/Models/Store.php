<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;


class Store extends Model
{
    use HasFactory;

    use HasSlug;

    protected $table="stores";

    protected $fillable = [
        'name', 'description', 'phone', 'mobile_phone', 'slug','logo'
    ];
    /**
     * Get all of the comments for the Store
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(OrderUser::class,'order_store');
    }

    public function seller()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
