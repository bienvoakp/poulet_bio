<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Nutriment\StoreNutrimentRequest;
use App\Models\Nutriment;
use Illuminate\Http\Request;

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
