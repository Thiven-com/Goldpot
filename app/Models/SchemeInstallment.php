<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchemeInstallment extends Model
{
    protected $guarded = [];

    protected $casts = [
        'due_date' => 'date',
        'paid_date' => 'date'
    ];

    public function member()
    {
        return $this->belongsTo(
            SchemeMember::class,
            'scheme_member_id'
        );
    }

    public function payment()
    {
        return $this->hasOne(
            SchemePayment::class,
            'scheme_installment_id'
        );
    }
}
