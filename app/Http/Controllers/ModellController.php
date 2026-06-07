<?php

namespace App\Http\Controllers;

use App\Models\HajtasModel;
use App\Models\MarkaModel;
use App\Models\ModellModel;
use App\Models\UzemanyagModel;
use Illuminate\Http\Request;

class ModellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modell = ModellModel::with(['marka', 'hajtas', 'uzemanyag'])->get();
        return view('modell.index', compact('modell'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marka = MarkaModel::all();
        $hajtas = HajtasModel::all();
        $uzemanyag = UzemanyagModel::all();
        return view('modell.create', compact('marka', 'hajtas', 'uzemanyag'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nev' => 'required',
            'evjarat' => 'required|integer',
            'markaID' => 'required|exists:marka,id',
            'hajtasID' => 'required|exists:hajtas,id',
            'uzemanyagID' => 'required|exists:uzemanyag,id',
        ]);

        $modell = new ModellModel();
        $modell->nev = $request->nev;
        $modell->evjarat = $request->evjarat;
        $modell->markaID = $request->markaID;
        $modell->hajtasID = $request->hajtasID;
        $modell->uzemanyagID = $request->uzemanyagID;
        $modell->timestamps = false;
        $modell->save();

        return redirect()->route('modell.index')->with('success', 'Modell sikeresen létrehozva.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $modell = ModellModel::with(['marka', 'hajtas', 'uzemanyag'])->findOrFail($id);
        return view('modell.show', compact('modell'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $modell = ModellModel::findOrFail($id);
        $marka = MarkaModel::all();
        $hajtas = HajtasModel::all();
        $uzemanyag = UzemanyagModel::all();
        return view('modell.edit', compact('modell', 'marka', 'hajtas', 'uzemanyag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nev' => 'required',
            'evjarat' => 'required|integer',
            'markaID' => 'required|exists:marka,id',
            'hajtasID' => 'required|exists:hajtas,id',
            'uzemanyagID' => 'required|exists:uzemanyag,id',
        ]);

        $modell = ModellModel::findOrFail($id);
        $modell->update($request->only(['nev', 'evjarat', 'markaID', 'hajtasID', 'uzemanyagID']));

        return redirect()->route('modell.index')->with('success', 'Modell sikeresen módosítva.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $modell = ModellModel::findOrFail($id);
        $modell->delete();

        return redirect()->route('modell.index')->with('success', 'Modell sikeresen törölve.');
    }
}
