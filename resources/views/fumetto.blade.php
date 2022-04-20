{{-- estendo il layout di default per questa pagina --}}
@extends('layouts.default')

{{-- al titolo da dare a questa pagina specifica assegno il titolo presente nell'array passato da Route --}}
@section('pageTitle', $array_indice['title'])

@section('content')
    <div class="fumetto">

        {{-- includo il jumbotron dinamicamente --}}
        @include('partials.jumbotron')

        <div class="blue-line"></div>

        <div class="img-hero">
            <img src="{{ $array_indice['thumb'] }}" alt="{{ $array_indice['title'] }}">
        </div>

        <div class="text-fumetto">

            <h2>{{ $array_indice['title'] }}</h2>

            <span>{{ $array_indice['price'] }}</span>

            <p>{{ $array_indice['description'] }}</p>
        </div>

    </div>

@endsection
