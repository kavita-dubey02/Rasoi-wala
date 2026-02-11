<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chef_bank extends Model
{
     use HasFactory;

    protected $table = 'chef_banks'; // 👈 important

    protected $fillable = [
        'user_id',
        'account_holder_name',
        'account_number',
        'ifsc_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
