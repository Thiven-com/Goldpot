<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Scheme extends Model
{
    protected $fillable = [

        'title',
        'slug',
        'scheme_code',

        'monthly_amount',
        'installments',

        'bonus_amount',
        'bonus_type',

        'joining_fee',
        'maturity_amount',

        'image',

        'short_description',
        'description',
        'terms_conditions',

        'is_online',
        'status',

    ];

    protected $casts = [

        'monthly_amount' => 'decimal:2',
        'bonus_amount' => 'decimal:2',
        'joining_fee' => 'decimal:2',
        'maturity_amount' => 'decimal:2',

        'is_online' => 'boolean',

    ];

    public function members(): HasMany
    {
        return $this->hasMany(SchemeMember::class);
    }

    /**
     * Total amount customer pays
     */
    public function getTotalAmountAttribute()
    {
        return $this->monthly_amount * $this->installments;
    }

    /**
     * Final maturity value
     */
    public function getFinalValueAttribute()
    {
        if ($this->bonus_type == 'fixed') {

            return $this->total_amount + $this->bonus_amount;
        }

        return $this->total_amount +
            (($this->total_amount * $this->bonus_amount) / 100);
    }
}