<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RessourcePersonne extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'edition_id'
    ];

    public function edition(){

        return $this->hasOne(Edition::class);
    }

    public function acteur(){

        return $this->hasOne(Acteur::class);
    }

    public function jury(){

        return $this->hasOne(Jury::class);
    }

    public function comiteOrganisation(){

        return $this->hasOne(ComiteOrganisation::class);
    }

    public function invite(){

        return $this->hasOne(Invite::class);
    }
}
