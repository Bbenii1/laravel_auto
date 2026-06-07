@extends('layout')
@section('content')
<h1>Modellek</h1>

<a href="{{ route('modell.create') }}">Modell hozzáadása</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<ul class="item-list">
    @foreach($modell as $m)
        <li>
            <div>
                <strong>{{ $m->nev }}</strong>
                <span>
                    {{ $m->evjarat }} |
                    {{ $m->marka ? $m->marka->nev : 'Nincs márka' }} |
                    {{ $m->hajtas ? $m->hajtas->nev : 'Nincs hajtás' }} |
                    {{ $m->uzemanyag ? $m->uzemanyag->nev : 'Nincs üzemanyag' }}
                </span>
            </div>
            <div class="actions">
                <a href="{{ route('modell.edit', $m->id) }}" class="button">Szerkesztés</a>
                <a href="{{ route('modell.show', $m->id) }}" class="button">Megtekintés</a>
                <form action="{{ route('modell.destroy', $m->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Biztosan törölni szeretnéd ezt a modellt?')">Törlés</button>
                </form>
            </div>
        </li>
    @endforeach
</ul>
@endsection
