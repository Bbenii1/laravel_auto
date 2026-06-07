@extends('layout')
@section('content')
<h1>Autómárkák</h1>

<a href="{{ route('marka.create') }}">Márka hozzáadása</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<ul class="item-list">
    @foreach($marka as $m)
        <li>
            <div>
                <strong>{{ $m->nev }}</strong>
                <span>{{ $m->orszag ? $m->orszag->nev : 'Nincs orszag' }}</span>
            </div>
            <div class="actions">
                <a href="{{ route('marka.edit', $m->id) }}" class="button">Szerkesztés</a>
                <a href="{{ route('marka.show', $m->id) }}" class="button">Megtekintés</a>
                <form action="{{ route('marka.destroy', $m->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Biztosan törölni szeretnéd ezt a márkát?')">Törlés</button>
                </form>
            </div>
        </li>
    @endforeach
</ul>
@endsection
