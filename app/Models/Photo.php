<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_photo',
        'edition_id'
    ];

    public function edition(){

        return $this->hasOne(Edition::class);
    }

    public function detailPhotos(){

        return $this->belongsTo(DetailPhoto::class);
    }
}
