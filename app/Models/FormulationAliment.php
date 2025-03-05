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
        $this->belongsTo(Aliment::class);
    }

    public function formulation(){
        $this->belongsTo(Formulation::class);
    }
}
