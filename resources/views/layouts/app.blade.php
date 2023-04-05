<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <!-- Header -->
    @include("partials.header")
    <!-- Main -->
    <main class="main-content">
        {{-- Content --}}
        <div class="page">
            <!-- Jumbotron -->
            <div class="jumbotron">
                <!-- Immagine -->
                <img class="jumbotron__img" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron">
            </div>
            {{-- Contenuto --}}
            @yield("content")
        </div>
    </main>
    <!-- Footer -->
    @include("partials.footer")
</body>

</html>