<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembreBureau extends Model
{
    protected $fillable = [
        'role',
        'nom_prenom',
        'telephone',
        'email'
    ];
    
    use HasFactory;
}
