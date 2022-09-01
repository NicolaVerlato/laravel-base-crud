<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('comics.index') }}">Prodotti</a>
            </li>
            <li>
                <a href="{{ route('comics.create') }}">Aggiungi il tuo fumetto</a>
            </li>
        </ul>
    </header>
    <main>
        <div class="container">
            @yield('main_content')
        </div>
    </main>
</body>
</html>