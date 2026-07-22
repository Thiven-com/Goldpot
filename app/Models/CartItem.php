<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        'user_id',
        'session_id',
        'product_variant_id',
        'quantity',
        'unit_price'
    ];
    public function variant()
    {
        return $this->belongsTo(ProductVariant::class, 'product_variant_id')
            ->with(['product:id,title,slug', 'attributeValues.attribute']);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
