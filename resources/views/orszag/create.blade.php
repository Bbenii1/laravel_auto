<h1>Új ország</h1>

<form action="{{ route('orszag.store') }} " method="POST">
    @csrf
    <label for="nev">Ország neve:</label>
    <input type="text" id="nev" name="nev" required><br><br>

    <input type="submit" value="Hozzáadás">
</form>