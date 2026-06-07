@extends('layout')
@section('content')
<h1>{{ $marka->nev }} részletei</h1>

<p>Orszag: {{ $marka->orszag ? $marka->orszag->nev : 'Nincs orszag' }}</p>

<a href="{{ route('marka.edit', $marka->id) }}">Szerkesztés</a>
<a href="{{ route('marka.index') }}">Vissza</a>
@endsection
