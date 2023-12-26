<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [

        'name',
        'description',
        'dateshow',
        'director',
        'prodcompany',
        'cast',
        'price',
        'photo'

    ];
    public function geners(){
        return $this->belongsToMany(Gener::class);
     }

       public function images(){
        return $this->hasMany(Image::class, 'film_id', 'id');

    }
}
