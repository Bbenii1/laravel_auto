<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutóDB</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Főoldal</a></li>
                <li><a href="{{ route('marka.index') }}">Márkák</a></li>
                <li><a href="{{ route('modell.index') }}">Modellek</a></li>
                <li><a href="{{ route('orszag.index') }}">Országok</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2026 AutóDB. Minden jog fenntartva.</p>
    </footer>
</body>
</html>
