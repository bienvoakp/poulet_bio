<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Aliment\StoreAlimentRequest;
use App\Models\Aliment;
use Illuminate\Http\Request;

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

    $aliment = Aliment::create($validated);

    return redirect()->route('aliments.index')->with('success', 'Aliment créé avec succès');
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
