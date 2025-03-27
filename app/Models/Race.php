<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $fillable = [
        'titre',
        'desc',
    ];

    public function animaux(){
        return $this->hasMany(Animal::class);
    }
}
