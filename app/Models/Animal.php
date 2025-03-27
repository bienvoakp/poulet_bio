<?php

namespace App\Models;

use App\Models\Race;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'race_id',
        'titre',
        'desc'
    ];

    public function race(){
        return $this->belongsTo(Race::class);
    }
}
