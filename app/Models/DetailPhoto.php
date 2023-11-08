<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_photo',
        'edition_id'
    ];

    public function photo(){

        return $this->hasOne(Photo::class);
    }
}
