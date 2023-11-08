<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmSelectionne extends Model
{
    use HasFactory;

    protected $fillable = [
        'film_id'
    ];

    public function film(){

        return $this->hasOne(Film::class);
    }

    public function laureat(){

        return $this->hasOne(Laureat::class);
    }
}
