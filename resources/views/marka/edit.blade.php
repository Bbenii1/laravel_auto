@extends('layout')
@section('content')
<h1>Márka szerkesztése</h1>

 <a href="{{ route('marka.index') }}">Vissza</a>

@error('nev')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('orszagID')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<form action="{{ route('marka.update', $marka->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nev">Márka:</label>
    <input type="text" id="nev" name="nev" value="{{ old('nev', $marka->nev) }}" required>

    <label for="orszagID">Ország:</label>
    <select id="orszagID" name="orszagID" required>
        <option value="">Válassz országot</option>
        @foreach($orszag as $o)
            <option value="{{ $o->id }}" @selected(old('orszagID', $marka->orszagID) == $o->id)>
                {{ $o->nev }} ({{ $o->rovid_nev }})
            </option>
        @endforeach
    </select>

    <div class="form-actions">
        <input type="submit" value="Mentés">
        <input type="reset" value="Reset">
    </div>
</form>



@endsection
