<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
    public function variant()
    {
        return $this->hasOne(ProductVariant::class)->oldest();
    }

    public function subcategories()
    {
        return $this->belongsToMany(Category::class,'product_id', 'category_id');
    }
    public function media()
    {
        return $this->hasMany(ProductMedia::class)->orderBy('sort_order');
    }

    public function primaryMedia()
    {
        return $this->hasOne(ProductMedia::class)->where('is_primary', true)->ofMany('id', 'min');
    }
     public function images()
    {
        return $this->hasMany(ProductMedia::class)->orderBy('sort_order');
    }

}
