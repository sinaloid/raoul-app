<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleInvite extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle'
    ];


    public function invites(){

        return $this->belongsTo(Invite::class);
    }
}
