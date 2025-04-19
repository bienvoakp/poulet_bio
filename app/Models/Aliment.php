<?php

namespace App\Models;

use App\Traits\AlimentTrait;
use Illuminate\Database\Eloquent\Model;

class Aliment extends Model
{
    use AlimentTrait;

    protected $fillable = [
        'titre',
        'desc',
        'disponible',
        'motif_si_disponible',
        'energie'
    ];

    public function formulations()
    {
        return $this->hasMany(FormulationAliment::class, 'aliment_id');
    }

    public function composition_nutritives()
    {
        return $this->hasMany(CompositionNutritiveAliment::class, 'aliment_id');
    }
}
