<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompositionNutritiveAliment extends Model
{
    protected $fillable = [
        'proportion',
        'aliment_id',
        'nutriment_id'

    ];

    public function aliment()
    {
        $this->belongsTo(Aliment::class, 'aliment_id');
    }

    public function nutriment()
    {
        $this->belongsTo(Nutriment::class, 'nutriment_id');
    }
}
