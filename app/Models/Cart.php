<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'total',
        'status'
    ];
      public function film_cart(){
        return $this->hasMany(Filmcart::class, 'cart_id', 'id');

    }
}