<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'lien_logo',
        'nom',
        'edition_id'
        
    ];

    public function edition(){
        return $this->hasOne(Edition::class);
    }
}
