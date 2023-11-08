<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laureat extends Model
{
    use HasFactory;

    protected $fillable = [
        'film_selectionne_id',
        'mention_id',
    ];

    public function filmSelectionne(){

        return $this->hasOne(FilmSelectionne::class);
    }

    public function mention(){

        return $this->hasOne(Mention::class);
    }
}
