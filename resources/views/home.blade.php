<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Model & Controller</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-red">
    <h1 class="text-center my-4">My Laravel Films</h1>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-6">
                <div class="card m-3">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->getTitle($movie)}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Original title: {{$movie->original_title}}</h6>
                        <div class="card-text">Production country: {{$movie->nationality}}</div>
                        <div>Release date: {{$movie->date}}</div>
                        <div>Avg_Vote: {{$movie->vote}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
        
</body>

</html>