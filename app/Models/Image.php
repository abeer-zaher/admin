<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $primaryKey = 'film_id';
    protected $fillable = [
        'film_id',
        'path'
    ];
    public function film(){
        return $this->belongsTo(Film::class, 'film_id', 'id');

    }
}
