<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- assets con vite --}}
    @vite('resources/js/app.js')
    {{-- assets con vite --}}
    <title>Movies</title>
</head>

<body>
    @foreach ($movies as $movie)
        <div class="card my-3" style="width: 50rem;">
            <div class="card-body">
                <h3 class="card-title">{{ $movie['id'] }} </h3>
                <h2 class="card-title">Titolo: {{ $movie['title'] }}</h2>
                <h3 class="card-title">Titolo originale: {{ $movie['original_title'] }}</h3>
                <p class="card-text">Nazionalità: {{ $movie['nationality'] }}</p>
                <p class="card-text">Anno: {{ \Carbon\Carbon::parse($movie['date'])->format('Y') }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach
</body>

</html>
