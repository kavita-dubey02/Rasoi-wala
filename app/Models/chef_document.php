<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chef_document extends Model
{
   use HasFactory;

    protected $table = 'chef_documents'; // 👈 important

    protected $fillable = [
        'user_id',
        'aadhaar_front',
        'aadhaar_back',
        'pancard',
        'address_proof',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
