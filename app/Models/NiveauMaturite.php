<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NiveauMaturite extends Model
{
    protected $fillable = [
        'titre',
        'poids_min',
        'poids_max',
        'age_min',
        'age_max',
        'energie'
    ];

    public function composition_nutritives(){
        $this->hasMany(CompositionNutritive::class, 'niveau_maturite_id');
    }
}
