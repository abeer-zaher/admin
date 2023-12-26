<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filmcart extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'quentity',
        'price',
        'subtotal',
        'cart_id'
    ];
     public function cart(){
        return $this->belongsTo(Cart::class, 'cart_id', 'id');

    }
}
