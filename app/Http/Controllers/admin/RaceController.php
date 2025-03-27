<?php

namespace App\Http\Controllers\admin;

use App\Models\Race;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Race\StoreRaceRequest;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $races = Race::with('animaux')->paginate(10);
        return view('admin.race.index', [
            'races' => $races
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.race.create', ['race' => new Race()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRaceRequest $request)
    {
        $validated = $request->validated();

        $race = Race::create($validated);

        return redirect()->route('races.index')->with('success', 'Race créé avec succès');
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
