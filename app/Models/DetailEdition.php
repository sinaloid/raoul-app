<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailEdition extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'lieu',
        'date',
        'image_evenement',
        'edition_id'
    ];

    public function edition(){
        return $this->hasOne(Edition::class);
    }
}
