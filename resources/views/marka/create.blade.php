<h1>Márka hozzáadása</h1>

<form action="{{ route('marka.store') }} " method="POST">
    @csrf
    <label for="nev">Márka:</label>
    <input type="text" id="nev" name="nev" required><br><br>

    <label for="orszagID">Ország ID:</label>
    <input type="number" id="orszagID" name="orszagID" required><br><br>

    <input type="submit" value="Hozzáadás">
</form>