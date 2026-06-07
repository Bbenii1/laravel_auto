@extends('layout')
@section('content')
<h1>{{ $orszag->nev }} részletei</h1>

<p>Rövid név: {{ $orszag->rovid_nev }}</p>

<a href="{{ route('orszag.edit', $orszag->id) }}">Szerkesztés</a>
<a href="{{ route('orszag.index') }}">Vissza</a>
@endsection
