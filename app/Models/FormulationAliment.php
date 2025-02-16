<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormulationAliment extends Model
{
    protected $fillable = [
        'aliment_id',
        'formulation_id'
    ];

    public function compositions_aliments(){
        $this->hasMany(Aliment::class, 'aliment_id');
    }

    public function formulation_alimentaire(){
        $this->hasMany(Formulation::class, 'formulation_id');
    }
}
