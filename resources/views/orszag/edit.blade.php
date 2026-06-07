@extends('layout')
@section('content')
<h1>Ország szerkesztése</h1>

<a href="{{ route('orszag.index') }}">Vissza</a>

@error('nev')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('rovid_nev')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<form action="{{ route('orszag.update', $orszag->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nev">Ország neve:</label>
    <input type="text" id="nev" name="nev" value="{{ old('nev', $orszag->nev) }}" required>

    <label for="rovid_nev">Rövid név:</label>
    <input type="text" id="rovid_nev" name="rovid_nev" value="{{ old('rovid_nev', $orszag->rovid_nev) }}" required>

    <div class="form-actions">
        <input type="submit" value="Mentés">
        <input type="reset" value="Reset">
    </div>
</form>
@endsection
