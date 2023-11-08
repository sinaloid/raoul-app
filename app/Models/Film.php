<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'auteur',
        'duree',
        'date_sortie',
        'description',
        'lien_extrait_film',
        'image_film',
        'categorie_film_id'
    ];

    public function edition(){

        return $this->hasOne(Edition::class);
    }

    public function filmSelectionne(){

        return $this->hasOne(FilmSelectionne::class);
    }

    public function categorieFilm(){

        return $this->hasOne(CategorieFilm::class);
    }
}
