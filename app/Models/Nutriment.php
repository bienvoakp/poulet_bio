<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nutriment extends Model
{
    protected $fillable = [
        'titre'
    ];

    public function composition_nutritives(){
        $this->hasMany(CompositionNutritive::class, 'nutriment_id');
    }
}
