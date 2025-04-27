<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NiveauMaturite\StoreNiveauMaturiteRequest;
use App\Http\Requests\NiveauMaturite\UpdateNiveauMaturiteRequest;
use App\Models\Animal;
use App\Models\CompositionNutritive;
use App\Models\NiveauMaturite;

class NiveauMaturiteController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(Animal $animaux)
    {
        return view('admin.animal.niveau_maturite.create', compact('animaux'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNiveauMaturiteRequest $request, Animal $animaux)
    {
        $niveau_maturite = NiveauMaturite::create([
            'animal_id' => $animaux->id,
            ...$request->validated()
        ]);

        $niveau_maturite->composition_nutritives()->createMany($request->composition_nutritives ?? []);

        return redirect()->route('animaux.show', ['animaux' => $animaux->id]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NiveauMaturite $niveau_maturite)
    {
        $animaux = $niveau_maturite->animal;
        return view('admin.animal.niveau_maturite.edit', compact('animaux', 'niveau_maturite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNiveauMaturiteRequest $request, NiveauMaturite $niveau_maturite)
    {
        $animaux = $niveau_maturite->animal;
        $niveau_maturite->update([
            ...$request->validated()
        ]);

        // Update existing composition nutritives
        $compositions = collect($request->composition_nutritives ?? []);

        $compositions->filter(fn($data) => !empty($data['id']))
            ->each(fn($data) => CompositionNutritive::find($data['id'])?->update($data));

        // Delete removed composition nutritives
        $niveau_maturite->composition_nutritives()
            ->whereNotIn('id', $compositions->pluck('id')->filter())
            ->delete();

        // Create new composition nutritives
        $niveau_maturite->composition_nutritives()->createMany(
            $compositions->filter(fn($data) => empty($data['id']))->all()
        );

        return redirect()->route('animaux.show', ['animaux' => $animaux->id]);
    }
}
