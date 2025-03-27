<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormulationAliment extends Model
{
    protected $fillable = [
        'aliment_id',
        'formulation_id'
    ];

    public function aliment(){
        return $this->belongsTo(Aliment::class);
    }

    public function formulation(){
        return $this->belongsTo(Formulation::class);
    }
}
