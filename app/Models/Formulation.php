<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulation extends Model
{
    protected $fillable = [
        'titre',
        'favoris'
    ];

    public function formulation(){
        $this->belongsTo(FormulationAliment::class, 'formulation');
    }
}
