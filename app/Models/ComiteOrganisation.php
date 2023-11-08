<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComiteOrganisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_comite_organisation_id',
        'ressource_personne_id',
    ];

    public function ressourcePersonne(){

        return $this->hasOne(RessourcePersonne::class);
    }

    public function roleComiteOrganisation(){

        return $this->hasOne(RoleComiteOrganisation::class);
    }
}
