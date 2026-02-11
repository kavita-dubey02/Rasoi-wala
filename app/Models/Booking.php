<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
    'booking_code',
    'user_id',
    'chef_id',
    'event_type_id',
    'address_id',
    'event_date',
    'start_time',
    'total_hours',
    'members',
    'price_per_hour',
    'total_amount',
    'status',
    'cancel_reason',
];

public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

public function chef()
{
    return $this->belongsTo(User::class, 'chef_id');
}

public function eventType()
{
    return $this->belongsTo(EventType::class);
}

public function address()
{
    return $this->belongsTo(Address::class);
}

}
