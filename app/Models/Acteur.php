<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_acteur_id',
        'ressource_personne_id',
    ];

    public function ressourcePersonne(){

        return $this->hasOne(RessourcePersonne::class);
    }

    public function roleActeur(){

        return $this->hasOne(RoleActeur::class);
    }
}
