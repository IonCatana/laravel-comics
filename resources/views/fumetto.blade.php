{{-- estendo il layout di default per questa pagina --}}
@extends('layouts.default')

{{-- al titolo da dare a questa pagina specifica assegno "fumetto" --}}
@section('pageTitle', $array_indice['title'])

@section('content')
    <div class="img-hero">
        <img src="{{ $array_indice['thumb'] }}" alt="{{ $array_indice['title'] }}">
    </div>

    <h2>
        {{ $array_indice['title'] }}
    </h2>

    <span>{{ $array_indice['price'] }}</span>

    <p>{{ $array_indice['description'] }}</p>

@endsection
