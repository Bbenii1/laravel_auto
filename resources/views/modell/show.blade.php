@extends('layout')
@section('content')
<h1>{{ $modell->nev }} részletei</h1>

<p>Évjárat: {{ $modell->evjarat }}</p>
<p>Márka: {{ $modell->marka ? $modell->marka->nev : 'Nincs márka' }}</p>
<p>Hajtás: {{ $modell->hajtas ? $modell->hajtas->nev : 'Nincs hajtás' }}</p>
<p>Üzemanyag: {{ $modell->uzemanyag ? $modell->uzemanyag->nev : 'Nincs üzemanyag' }}</p>

<a href="{{ route('modell.edit', $modell->id) }}">Szerkesztés</a>
<a href="{{ route('modell.index') }}">Vissza</a>
@endsection
