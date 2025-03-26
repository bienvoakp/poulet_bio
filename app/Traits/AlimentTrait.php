<?php

namespace App\Traits;


trait AlimentTrait
{
    public function energie_label()
    {
        return $this->energie . ' Kcal';
    }

    public function is_disponible()
    {
        return $this->disponible ? 'Oui' : 'Non';
    }
}
