<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChefPayment extends Model
{
     protected $table = 'chef_payments'; 
     protected $fillable = [
        'user_id',
        'razorpay_payment_id',
        'razorpay_order_id',
        'amount',
        'status'
    ];
}
