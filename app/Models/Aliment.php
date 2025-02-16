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

    public function aliments(){
        $this->belongsTo(FormulationAliment::class, 'aliment_id');
    }

    public function composition_nutritive_aliments(){
        $this->hasMany(CompositionNutritive::class, 'aliment_id');
    }
}
