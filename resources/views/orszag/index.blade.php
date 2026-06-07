@extends('layout')
@section('content')
<h1>Országok</h1>

<a href="{{ route('orszag.create') }}">Új ország hozzáadása</a>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<ul class="item-list">
    @foreach($orszag as $o)
        <li>
            <div>
                <strong>{{ $o->nev }}</strong>
                <span>{{ $o->rovid_nev }}</span>
            </div>
            <div class="actions">
                <a href="{{ route('orszag.edit', $o->id) }}" class="button">Szerkesztés</a>
                <a href="{{ route('orszag.show', $o->id) }}" class="button">Megtekintés</a>
                <form action="{{ route('orszag.destroy', $o->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Biztosan törölni szeretned ezt az országot?')">Törlés</button>
                </form>
            </div>
        </li>
    @endforeach
</ul>
@endsection
