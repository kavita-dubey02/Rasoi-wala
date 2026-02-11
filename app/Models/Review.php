<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
    'booking_id',
    'user_id',
    'chef_id',
    'rating',
    'review',
];

public function booking()
{
    return $this->belongsTo(Booking::class);
}

public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

public function chef()
{
    return $this->belongsTo(User::class, 'chef_id');
}

}
