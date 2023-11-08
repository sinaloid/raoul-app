<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_invite_id',
        'ressource_personne_id',
    ];

    public function ressourcePersonne(){

        return $this->hasOne(RessourcePersonne::class);
    }

    public function roleInvite(){

        return $this->hasOne(RoleInvite::class);
    }
}
