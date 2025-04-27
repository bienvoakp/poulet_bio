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
        'energie',
        'animal_id'
    ];

    public function composition_nutritives(){
        return $this->hasMany(CompositionNutritive::class, 'niveau_maturite_id');
    }
    public function animal(){
        return $this->belongsTo(Animal::class, 'animal_id');
    }
}
