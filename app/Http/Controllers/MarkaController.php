<?php

namespace App\Http\Controllers;

use App\Models\MarkaModel;
use Illuminate\Http\Request;

class MarkaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('marka.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marka.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nev' => 'required',
            'orszagID' => 'required|integer',
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
