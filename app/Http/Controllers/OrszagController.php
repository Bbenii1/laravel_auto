<?php

namespace App\Http\Controllers;

use App\Models\OrszagModel;
use Illuminate\Http\Request;

class OrszagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orszag = OrszagModel::all();
        return view('orszag.index', compact('orszag'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orszag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nev' => 'required',
            'rovid_nev' => 'required|string',
        ]);

        $orszag = new OrszagModel();
        $orszag->nev = $request->nev;
        $orszag->rovid_nev = $request->rovid_nev;
        $orszag->timestamps = false;
        $orszag->save();

        return redirect()->route('orszag.index')->with('success', 'Ország sikeresen létrehozva.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orszag = OrszagModel::findOrFail($id);
        return view('orszag.show', compact('orszag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $orszag = OrszagModel::findOrFail($id);
        return view('orszag.edit', compact('orszag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nev' => 'required',
            'rovid_nev' => 'required|string',
        ]);

        $orszag = OrszagModel::findOrFail($id);
        $orszag->update($request->only(['nev', 'rovid_nev']));

        return redirect()->route('orszag.index')->with('success', 'Ország sikeresen módosítva.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $orszag = OrszagModel::findOrFail($id);
        $orszag->delete();

        return redirect()->route('orszag.index')->with('success', 'Ország sikeresen törölve.');
    }
}
