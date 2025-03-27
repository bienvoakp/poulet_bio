<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Animal\StoreAnimalRequest;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $animals = Animal::with('race')->paginate(10);

        return view("admin.animal.index", [
            'animals' =>$animals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.animal.create", ['animal' => new Animal()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalRequest $request)
    {
        $validated = $request->validated();

        $animal = Animal::create($validated);

        return redirect()->route('animaux.index')->with('success', 'U animal créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
