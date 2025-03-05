<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulation extends Model
{
    protected $fillable = [
        'titre',
        'favoris'
    ];

    public function formulation_aliment(){
        $this->hasMany(FormulationAliment::class, 'formulation_id');
    }
}
