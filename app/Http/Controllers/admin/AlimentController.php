<?php

namespace App\Http\Controllers\admin;

use App\Models\Aliment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Aliment\StoreAlimentRequest;
use App\Http\Requests\Aliment\UpdateAlimentRequest;
use App\Models\CompositionNutritiveAliment;

class AlimentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.aliment.index', [
            'aliments' => Aliment::query()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.aliment.create', ['aliment' => new Aliment()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlimentRequest $request)
    {
        $validated = $request->validated();

        // dd($request->all());

        $aliment = Aliment::create($validated);
        $aliment->composition_nutritives()->createMany($request->composition_nutritives ?? []);


        return redirect()->route('aliments.index')->with('success', 'Aliment créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aliment = Aliment::findOrFail($id);

        return view('admin.aliment.show', [
            'aliment' => $aliment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aliment = Aliment::findOrFail($id);

        return view('admin.aliment.edit', [
            'aliment' => $aliment
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlimentRequest $request, string $id)
    {
        $aliment = Aliment::findOrFail($id);

        $validated = $request->validated();

        $aliment->update($validated);

        // Update existing composition nutritives
        $compositions = collect($request->composition_nutritives ?? []);

        $compositions->filter(fn($data) => !empty($data['id']))
            ->each(fn($data) => CompositionNutritiveAliment::find($data['id'])?->update($data));

        // Delete removed composition nutritives
        $aliment->composition_nutritives()
            ->whereNotIn('id', $compositions->pluck('id')->filter())
            ->delete();

        // Create new composition nutritives
        $aliment->composition_nutritives()->createMany(
            $compositions->filter(fn($data) => empty($data['id']))->all()
        );


        return redirect()->route('aliments.index')->with('success', 'Aliment modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aliment = Aliment::findOrFail($id);

        $aliment->delete();

        return redirect()->route('aliments.index')->with('success', 'Aliment supprimé avec succès');
    }
}
