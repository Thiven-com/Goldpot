<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchemePayment extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'scheme_member_id',
        'installment_no',
        'scheme_installment_id',
        'amount',
        'payment_method',
        'gateway',
        'transaction_no',
        'gateway_response',
        'gateway_order_id',
        'gateway',
        'status',
        'paid_at'

    ];

    protected $casts = [
        'gateway_response' => 'array',
        'paid_at' => 'datetime'
    ];

    public function member()
    {
        return $this->belongsTo(
            SchemeMember::class
        );
    }

    public function installment()
    {
        return $this->belongsTo(
            SchemeInstallment::class
        );
    }
}
