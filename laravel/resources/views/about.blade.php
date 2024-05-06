<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Primi-Passi</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



</head>

<body>
    <header>
        <ul class="nav justify-content-center bg-dark gap-4 py-1 fs-4">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('front-home') }}" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('front-about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('front-boolean') }}">Boolean</a>
            </li>
        </ul>
    </header>
    
    <main>
        <h1 class="text-center pt-5">{{$message}}</h1>

    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>