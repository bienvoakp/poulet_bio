<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'race_id',
        'titre',
        'desc'
    ];

    public function races(){
        $this->belongsTo(Race::class, 'race_id');
    }
}
