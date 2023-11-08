<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'edition_id'
    ];

    public function edition(){
        return $this->hasOne(Edition::class);
    }
}
