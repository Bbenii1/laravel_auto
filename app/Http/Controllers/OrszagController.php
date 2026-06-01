<?php

namespace App\Http\Controllers;

use App\Models\OrszagModel;
use App\Models\OrszagModell;
use Illuminate\Http\Request;

class OrszagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('orszag.index');
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
        ]);

        $orszag = new OrszagModel();
        $orszag->nev = $request->nev;
        $orszag->timestamps = false;
        $orszag->save();

        return redirect()->route('orszag.index')->with('success', 'Ország sikeresen létrehozva.');
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
