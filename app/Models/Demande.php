<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $fillable = [
        "demandeur_nom",
        "demandeur_adresse",
        "demandeur_telephone",
        "demandeur_email",
        "demandeur_entreprise",
        "exportateur_nom",
        "exportateur_adresse",
        "exportateur_telephone",
        "exportateur_email",
        "exportateur_passport",
        "receveur_nom",
        "receveur_adresse",
        "receveur_telephone",
        "receveur_email",
        "receveur_pays",
        "type_expedition",
        "assurance",
        "douane",
        "description",
    ];
}
