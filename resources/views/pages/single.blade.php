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
                {{-- Container --}}
                <div class="container">
                    {{-- Informazioni aggiuntive del fumetto --}}
                    <div class="comic-more-info">
                        {{-- Talenti --}}
                        <div class="talent">
                            {{-- Titolo --}}
                            <h2 class="comic-more-info__title">
                                Talent
                            </h2>
                            {{-- Lista --}}
                            <div class="box-list">
                                {{-- Titolo della lista --}}
                                <h3 class="box-list__title">Art by:</h3>
                                {{-- Lista --}}
                                <ul class="list">
                                    {{-- Ciclo --}}
                                    @foreach ($comics[0]["artists"] as $artist)
                                        {{-- Artista --}}
                                        <li class="list-item">
                                            {{ $artist }}  
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            {{-- Lista --}}
                            <div class="box-list">
                                {{-- Titolo della lista --}}
                                <h3 class="box-list__title">Written by:</h3>
                                {{-- Lista --}}
                                <ul class="list">
                                    {{-- Ciclo --}}
                                    @foreach ($comics[0]["writers"] as $writer)
                                        {{-- Scrittore --}}
                                        <li class="list-item">
                                            {{ $writer }}  
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        {{-- Specifiche --}}
                        <div class="specs">
                            {{-- Titolo --}}
                            <h2 class="comic-more-info__title">
                                Specs
                            </h2>
                            {{-- Lista --}}
                            <div class="box-list">
                                {{-- Titolo della lista --}}
                                <h3 class="box-list__title">Series:</h3>
                                {{-- Lista --}}
                                <ul class="list">
                                    {{-- Artista --}}
                                    <li class="list-item">
                                        {{ $comics[0]["series"] }}  
                                    </li>
                                </ul>
                            </div>
                            {{-- Lista --}}
                            <div class="box-list">
                                {{-- Titolo della lista --}}
                                <h3 class="box-list__title">U.S. Price:</h3>
                                {{-- Lista --}}
                                <ul class="list">
                                    {{-- Artista --}}
                                    <li class="list-item">
                                        {{ $comics[0]["price"] }}  
                                    </li>
                                </ul>
                            </div>
                            {{-- Lista --}}
                            <div class="box-list">
                                {{-- Titolo della lista --}}
                                <h3 class="box-list__title">On Sale Date:</h3>
                                {{-- Lista --}}
                                <ul class="list">
                                    {{-- Artista --}}
                                    <li class="list-item">
                                        {{ $comics[0]["sale_date"] }}  
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- Discover --}}
                    <div class="discover">
                        {{-- Lista --}}
                        <ul class="list">
                            {{-- Elemento della lista --}}
                            <li class="list-item">
                                {{-- Titolo --}}
                                <h4 class="discover__title">
                                    Digital Comics
                                </h4>
                                {{-- Immagine --}}
                                <img class="discover__img" src="{{ Vite::asset("resources/img/buy-comics-digital-comics.png") }}" alt="">
                            </li>
                            {{-- Elemento della lista --}}
                            <li class="list-item">
                                {{-- Titolo --}}
                                <h4 class="discover__title">
                                    Shop DC
                                </h4>
                                {{-- Immagine --}}
                                <img class="discover__img" src="{{ Vite::asset("resources/img/buy-comics-subscriptions.png") }}" alt="">
                            </li>
                            {{-- Elemento della lista --}}
                            <li class="list-item">
                                {{-- Titolo --}}
                                <h4 class="discover__title">
                                    Comic Shop Locator
                                </h4>
                                {{-- Immagine --}}
                                <img class="discover__img" src="{{ Vite::asset("resources/img/buy-comics-shop-locator.png") }}" alt="">
                            </li>
                            {{-- Elemento della lista --}}
                            <li class="list-item">
                                {{-- Titolo --}}
                                <h4 class="discover__title">
                                    Subscription
                                </h4>
                                {{-- Immagine --}}
                                <img class="discover__img" src="{{ Vite::asset("resources/img/buy-comics-merchandise.png") }}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>