<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nutriment extends Model
{
    protected $fillable = [
        'titre'
    ];

    public function nutriments(){
        $this->belongsTo(CompositionNutritive::class, 'nutriment_id');
    }
}
