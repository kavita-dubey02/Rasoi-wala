<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chef_profile extends Model
{
   use HasFactory;

    protected $table = 'chef_profiles'; 
    protected $fillable = [
        'user_id',
        'current_building',
        'current_street',
        'current_city',
        'current_state',
        'current_pincode',
        'permanent_building',
        'permanent_street',
        'permanent_city',
        'permanent_state',
        'permanent_pincode',
    
  // Professional
    'price_per_hour',
    'experience_year',
    'bio',
    'speciality',
    'rating',
    'total_reviews',
    'is_available',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
