<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompositionNutritive extends Model
{
    protected $fillable = [
        'proportion',
        'niveau_maturite_id',
        'nutriment_id'
    ];

    public function niveau_maturite(){
        $this->belongsTo(NiveauMaturite::class, 'niveau_maturite_id');
    }

    public function nutriment(){
        $this->belongsTo(Nutriment::class, 'nutriment_id');
    }

}
