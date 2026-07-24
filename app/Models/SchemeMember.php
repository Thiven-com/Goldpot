<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchemeMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'scheme_id',
        'customer_id',
        'member_no',

        'monthly_amount',
        'installments',

        'bonus_amount',
        'bonus_type',

        'joining_fee',

        'paid_amount',
        'wallet_credited',
        'paid_installments',

        'joining_date',
        'next_due_date',
        'completion_date',

        'status',
    ];

    protected $casts = [
        'monthly_amount' => 'decimal:2',
        'bonus_amount' => 'decimal:2',
        'joining_fee' => 'decimal:2',
        'paid_amount' => 'decimal:2',
        'wallet_credited' => 'decimal:2',

        'joining_date' => 'date',
        'next_due_date' => 'date',
        'completion_date' => 'date',
    ];

    /**
     * Scheme
     */
    public function scheme()
    {
        return $this->belongsTo(Scheme::class);
    }

    /**
     * Customer
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Installments
     */
    public function installments()
    {
        return $this->hasMany(SchemeInstallment::class);
    }

    /**
     * Payments
     */
    public function payments()
    {
        return $this->hasMany(SchemePayment::class);
    }

    /**
     * Check whether scheme is completed
     */
    public function isCompleted()
    {
        return $this->paid_installments >= $this->installments;
    }

    /**
     * Remaining Installments
     */
    public function remainingInstallments()
    {
        return $this->installments - $this->paid_installments;
    }

    /**
     * Remaining Amount
     */
    public function remainingAmount()
    {
        return ($this->installments * $this->monthly_amount) - $this->paid_amount;
    }
}