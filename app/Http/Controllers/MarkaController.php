<?php

namespace App\Http\Controllers;

use App\Models\MarkaModel;
use App\Models\OrszagModel;
use Illuminate\Http\Request;

class MarkaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marka = MarkaModel::with('orszag')->get();
        return view('marka.index', compact('marka'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orszag = OrszagModel::all();
        return view('marka.create', compact('orszag'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nev' => 'required',
            'orszagID' => 'required|exists:orszag,id',
        ]);

        $marka = new MarkaModel();
        $marka->nev = $request->nev;
        $marka->orszagID = $request->orszagID;
        $marka->timestamps = false;
        $marka->save();

        return redirect()->route('marka.index')->with('success', 'Márka sikeresen létrehozva.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $marka = MarkaModel::with('orszag')->findOrFail($id);
        return view('marka.show', compact('marka'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $marka = MarkaModel::findOrFail($id);
        $orszag = OrszagModel::all();
        return view('marka.edit', compact('marka', 'orszag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nev' => 'required',
            'orszagID' => 'required|exists:orszag,id',
        ]);

        $marka = MarkaModel::findOrFail($id);
        $marka->update($request->only(['nev', 'orszagID']));

        return redirect()->route('marka.index')->with('success', 'Márka sikeresen módosítva.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $marka = MarkaModel::findOrFail($id);
        $marka->delete();

        return redirect()->route('marka.index')->with('success', 'Márka sikeresen törölve.');
    }
}
