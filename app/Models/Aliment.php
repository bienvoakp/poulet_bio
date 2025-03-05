<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aliment extends Model
{
    protected $fillable = [
        'titre',
        'desc',
        'disponible', 
        'motif_si_disponible',
        'energie'
    ];

    public function formulations(){
        $this->hasMany(FormulationAliment::class, 'aliment_id');
    }

    public function composition_nutritives(){
        $this->hasMany(CompositionNutritive::class, 'aliment_id');
    }
}
