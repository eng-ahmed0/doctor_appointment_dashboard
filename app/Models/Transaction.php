<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'id',
        'amount',
        'payment_gateway_detail_id',
    ];

    public function paymentGatewayDetail()
    {
        return $this->belongsTo(PaymentGatewayDetail::class);
    }
}
