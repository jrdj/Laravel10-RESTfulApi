<?php

namespace App\Models;

use Faker\Provider\ar_EG\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $guarded = [];
    use HasFactory;

    protected $attributes = [
        'mode_of_payment_id' => 1,
        'payment_status_id' => 1,
        'courier_id' => 1,
    ];

    public function mode_of_payment()
    {
        return $this->belongsTo(mode_of_payment::class);
    }

    public function payment_status()
    {
        return $this->belongsTo(Payment_status::class);
    }

    public function courier()
    {
        return $this->belongsTo(courier::class);
    }
}


