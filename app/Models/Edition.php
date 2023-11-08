<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    use HasFactory;

    protected $fillable = [
        'annee',
    ];

    public function themes(){
        return $this->belongsTo(Theme::class);
    }

    public function partenaires(){
        return $this->belongsTo(Partenaire::class);
    }

    public function foires(){
        return $this->belongsTo(Foire::class);
    }
    public function bilanEditions(){
        return $this->belongsTo(BilanEdition::class);
    }
    public function detailEditions(){
        return $this->belongsTo(DetailEdition::class);
    }


    public function ressourcePersonnes(){

        return $this->belongsTo(RessourcePersonne::class);
    }

    public function films(){

        return $this->belongsTo(Film::class);
    }

    public function photos(){

        return $this->belongsTo(Photo::class);
    }

    public function evenements(){

        return $this->belongsTo(Evenement::class);
    }
}
