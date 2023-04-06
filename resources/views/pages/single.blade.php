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
                {{-- Container --}}
                <div class="container">
                    {{-- Informazioni del fumetto --}}
                    <div class="comic-info">
                        {{-- Testo --}}
                        <div class="comic-info__text">
                            {{-- Titolo --}}
                            <h1 class="comic-info__title">
                                {{ $comics[0]["title"] }}
                            </h1>
                            {{-- Stock --}}
                            <div class="comic-info__stock">
                                {{-- Prezzo --}}
                                <h2 class="comic-info__price">
                                    U.S. Price: <span class="price">{{ $comics[0]["price"] }}</span>
                                </h2>
                                {{-- Disponibilità --}}
                                <h2 class="comic-info__availability">Available</h2>
                                {{-- Controllo della disponibilità --}}
                                <h2 class="comic-info__check-availability">
                                    Check Availability
                                </h2>
                            </div>
                            {{-- Descrizione --}}
                            <p class="comic-info__description">
                                {{ $comics[0]["description"] }}
                            </p>
                        </div>
                        {{-- Pubblicità --}}
                        <div class="adv">
                            {{-- Testo --}}
                            <h3 class="adv__title">Advertisement</h3>
                            {{-- Immagine --}}
                            <img class="adv__img" src="{{ Vite::asset("resources/img/advs.jpg") }}" alt="Adv">
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fondo --}}
            <div class="single-bottom">

            </div>
        </div>
    @endsection
</body>
</html>