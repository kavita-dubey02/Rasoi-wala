<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChefDish extends Model
{
   protected $fillable = [
    'chef_id',
    'dish_id',
];

public function chef()
{
    return $this->belongsTo(User::class, 'chef_id');
}

public function dish()
{
    return $this->belongsTo(Dish::class);
}

}
