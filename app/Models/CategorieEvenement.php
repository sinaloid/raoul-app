<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieEvenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle'
    ];
    public function detailEvenements(){

        return $this->belongsTo(DetailEvenement::class);
    }
}
