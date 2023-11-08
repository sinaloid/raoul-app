<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleComiteOrganisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle'
    ];


    public function comiteOrganisations(){

        return $this->belongsTo(ComiteOrganisation::class);
    }
}
