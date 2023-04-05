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
    {{-- Layout --}}
    @extends('layouts.app')
    {{-- Contenuto --}}
    @section('content')
        {{-- Single --}}
        <div class="single">
            {{-- Cima --}}
            <div class="single-top">
                {{-- Container --}}
                <div class="container">
                    {{-- Immagine --}}
                    <div class="single-top__img">
                        {{-- Immagine --}}
                        <img class="single-top__img--img" src="{{ Vite::asset("resources/img/prova.jpg") }}" alt="{{ $comics[0]["title"] }}">
                    </div>
                </div>
            </div>
            {{-- Centro --}}
            <div class="single-center">

            </div>
            {{-- Fondo --}}
            <div class="single-bottom">

            </div>
        </div>
    @endsection
</body>
</html>