<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieFilm extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle'
    ];
    public function films(){

        return $this->belongsTo(Film::class);
    }
}
