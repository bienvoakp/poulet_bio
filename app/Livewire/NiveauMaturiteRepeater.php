<?php

namespace App\Livewire;

use App\Models\Aliment;
use App\Models\CompositionNutritive;
use App\Models\NiveauMaturite;
use Livewire\Component;

class NiveauMaturiteRepeater extends Component
{
    public ?NiveauMaturite $niveau_maturite=null;

    PUBLIC $composition_nutritives = [];

    public function mount()
    {
        $current_data = $this->niveau_maturite?->composition_nutritives->map(function (CompositionNutritive $data) {
            return [
                "id" => $data->id,
                "proportion" => $data->proportion,
                "nutriment_id" => $data->nutriment_id,
            ];
        })->all();
        $this->composition_nutritives = array_merge($this->composition_nutritives, $current_data ?? []);
    }

    public function add()
    {
        $this->composition_nutritives[] = [];
    }

    public function remove(int $index)
    {
        unset($this->composition_nutritives[$index]);
    }

    public function render()
    {
        return view('livewire.composition-aliment-repeater');
    }
}
