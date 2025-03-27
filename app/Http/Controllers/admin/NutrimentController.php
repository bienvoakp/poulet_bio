<?php

namespace App\Http\Controllers\admin;

use App\Models\Nutriment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Nutriment\StoreNutrimentRequest;
use App\Http\Requests\Nutriment\UpdateNutrimentRequest;

class NutrimentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nutriments = Nutriment::query()->paginate(10);
        return view('admin.nutriment.index', [
            'nutriments' => $nutriments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.nutriment.create', ['nutriment' => new Nutriment()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNutrimentRequest $request)
    {
        $validated = $request->validated();

        $nutriment = Nutriment::create($validated);

        return redirect()->route('nutriments.index')->with('success', 'Un nouveau nutriment créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nutriment = Nutriment::findOrFail($id);

        return view('admin.nutriment.show', [
            'nutriment' => $nutriment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nutriment = Nutriment::findOrFail($id);

        return view('admin.nutriment.edit', [
            'nutriment' => $nutriment
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNutrimentRequest $request, string $id)
    {
        $nutriment = Nutriment::findOrFail($id);

        $validated = $request->validated();

        $nutriment->update($validated);

        return redirect()->route('nutriments.index')->with('success', 'Nutriment modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nutriment = Nutriment::findOrFail($id);

        $nutriment->delete();

        return redirect()->route('nutriments.index')->with('success', 'Nutriment supprimé avec succès');
    }
}
