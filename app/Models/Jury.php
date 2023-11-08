<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jury extends Model
{
    use HasFactory;

    protected $fillable = [
        'ressource_personne_id',
    ];

    public function ressourcePersonne(){

        return $this->hasOne(RessourcePersonne::class);
    }

}
