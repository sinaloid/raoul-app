<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailEvenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'lieu',
        'date',
        'image_evenement',
        'categorie_evenement_id',
        'evenement_id',
        'lieu_evenement_id',
    ];

    public function evenement(){

        return $this->hasOne(Evenement::class);
    }

    public function lieuEvenement(){

        return $this->hasOne(LieuEvenement::class);
    }

    public function categorieEvenement(){

        return $this->hasOne(CategorieEvenement::class);
    }
}
