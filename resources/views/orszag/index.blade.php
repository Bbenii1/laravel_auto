<h1>Országok</h1>

<a href="{{ route('orszag.create') }}">Új ország hozzáadása</a>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif