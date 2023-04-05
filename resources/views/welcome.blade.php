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
        <!-- Contenuto -->
        <div class="content">
            <!-- Jumbotron -->
            <div class="jumbotron">
                <!-- Immagine -->
                <img class="jumbotron__img" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron">
            </div>
            <!-- Serie -->
            <div class="current-series">
                <!-- Container -->
                <div class="container">
                    <!-- Titolo -->
                    <h2 class="current-series__title">
                        Current Series
                    </h2>
                    <!-- Lista -->
                    <ul class="current-series__list">
                        {{-- Ciclo --}}
                        @foreach ($comics as $comic)
                            {{-- Elemento della lista --}}
                            <li class="current-series__list-item">
                                <!-- Carta -->
                                <div class="card">
                                    <!-- Immagine della carta-->
                                    <div class="card__img">
                                        <!-- Immagine -->
                                        <img class="card__img--img" src="{{ Vite::asset('resources/img/prova.jpg') }}" alt="{{ $comic["title"] }}">
                                    </div>
                                    <!-- Titolo della carta -->
                                    <div class="card__title">
                                        <!-- Titolo -->
                                        <h3 class="card__title--title">
                                            {{ $comic["title"] }}
                                        </h3>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <!-- Bottone -->
                    <div class="current-series__button">
                        <!-- Bottone effettivo -->
                        <button class="current-series__button--btn">
                            Load more
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Discover -->
        <div class="discover">
            <!-- Container -->
            <div class="container">
                <!-- Lista -->
                <ul class="discover__list">
                    <!-- Elemento della lista -->
                    <li class="discover__list-item">
                        <!-- Immagine -->
                        <div class="discover__list-item--img">
                            <!-- Immagine -->
                            <img class="discover__list-item--img__img" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital Comics">
                        </div>
                        <!-- Descrizione -->
                        <div class="discover__list-item--description">
                            Digital Comics
                        </div>
                    </li>
                    <!-- Elemento della lista -->
                    <li class="discover__list-item">
                        <!-- Immagine -->
                        <div class="discover__list-item--img">
                            <!-- Immagine -->
                            <img class="discover__list-item--img__img" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="DC Merchandise">
                        </div>
                        <!-- Descrizione -->
                        <div class="discover__list-item--description">
                            DC Merchandise
                        </div>
                    </li>
                    <!-- Elemento della lista -->
                    <li class="discover__list-item">
                        <!-- Immagine -->
                        <div class="discover__list-item--img">
                            <!-- Immagine -->
                            <img class="discover__list-item--img__img" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Subscription">
                        </div>
                        <!-- Descrizione -->
                        <div class="discover__list-item--description">
                            Subscription
                        </div>
                    </li>
                    <!-- Elemento della lista -->
                    <li class="discover__list-item">
                        <!-- Immagine -->
                        <div class="discover__list-item--img">
                            <!-- Immagine -->
                            <img class="discover__list-item--img__img" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Comic Shop Locator">
                        </div>
                        <!-- Descrizione -->
                        <div class="discover__list-item--description">
                            Comic Shop Locator
                        </div>
                    </li>
                    <!-- Elemento della lista -->
                    <li class="discover__list-item">
                        <!-- Immagine -->
                        <div class="discover__list-item--img">
                            <!-- Immagine -->
                            <img class="discover__list-item--img__img" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="DC Power Visa">
                        </div>
                        <!-- Descrizione -->
                        <div class="discover__list-item--description">
                            DC Power Visa
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    @endsection
</body>
</html>