<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nutriment extends Model
{
    protected $fillable = [
        'titre',
        'desc'
    ];

    public function composition_nutritives(){
        return $this->hasMany(CompositionNutritive::class, 'nutriment_id');
    }
}
