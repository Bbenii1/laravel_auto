@extends('layout')
@section('content')
<h1>Modell szerkesztése</h1>

<a href="{{ route('modell.index') }}">Vissza</a>

@error('nev')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('evjarat')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('markaID')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('hajtasID')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('uzemanyagID')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<form action="{{ route('modell.update', $modell->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nev">Modell:</label>
    <input type="text" id="nev" name="nev" value="{{ old('nev', $modell->nev) }}" required>

    <label for="evjarat">Évjárat:</label>
    <input type="number" id="evjarat" name="evjarat" value="{{ old('evjarat', $modell->evjarat) }}" required>

    <label for="markaID">Márka:</label>
    <select id="markaID" name="markaID" required>
        <option value="">Válassz márkát</option>
        @foreach($marka as $m)
            <option value="{{ $m->id }}" @selected(old('markaID', $modell->markaID) == $m->id)>
                {{ $m->nev }}
            </option>
        @endforeach
    </select>

    <label for="hajtasID">Hajtás:</label>
    <select id="hajtasID" name="hajtasID" required>
        <option value="">Válassz hajtást</option>
        @foreach($hajtas as $h)
            <option value="{{ $h->id }}" @selected(old('hajtasID', $modell->hajtasID) == $h->id)>
                {{ $h->nev }}
            </option>
        @endforeach
    </select>

    <label for="uzemanyagID">Üzemanyag:</label>
    <select id="uzemanyagID" name="uzemanyagID" required>
        <option value="">Válassz üzemanyagot</option>
        @foreach($uzemanyag as $u)
            <option value="{{ $u->id }}" @selected(old('uzemanyagID', $modell->uzemanyagID) == $u->id)>
                {{ $u->nev }}
            </option>
        @endforeach
    </select>

    <div class="form-actions">
        <input type="submit" value="Mentés">
        <input type="reset" value="Reset">
    </div>
</form>
@endsection
