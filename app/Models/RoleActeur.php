<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleActeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle'
    ];


    public function acteurs(){

        return $this->belongsTo(Acteur::class);
    }
}
