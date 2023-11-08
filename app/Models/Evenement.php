<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'edition_id'
    ];

    public function edition(){

        return $this->hasOne(Edition::class);
    }
    
    public function detailEvenements(){

        return $this->belongsTo(DetailEvenement::class);
    }
}
