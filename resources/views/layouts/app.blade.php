<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title', 'Comic Archive')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header>
        <h1>Archivio Fumetti</h1>
        <nav>
            <a href="{{ route('comics.index') }}">Home</a>
            <a href="{{ route('comics.create') }}">Aggiungi Fumetto</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Comic Archive</p>
    </footer>

</body>
</html>
