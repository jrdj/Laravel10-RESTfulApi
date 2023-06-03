<?php

namespace App\Models;

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
}


