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
            <div class="cont_description">
                <h2>{{ $array_indice['title'] }}</h2>
                <div class="bg_green">
                    <div class="col-70">
                        <span><span class="price">U.S Price: </span>{{ $array_indice['price'] }}</span> <span
                            class="available">AVAILABLE </span>
                    </div>
                    <div class="col-30">
                        <span>Check Availability <i class="fas fa-sort-down"></i></span>
                    </div>

                </div>


                <p>{{ $array_indice['description'] }}</p>
            </div>

            <div class="advertisement">
                <p>Advertisement</p>
                <img src="{{ asset('../img/adv.jpg') }}" alt="">
            </div>
        </div>
        <div class="bg_ligth_grey">
            <div class="contain_talent_specs">
                <div class="talent">
                    <div class="border_bottom">
                        <h3>Talent</h3>
                    </div>
                    <div class="flex">
                        <div class="artist">
                            <h5>Art by:</h5>
                        </div>
                        <div class="artists">
                            @foreach ($array_indice['artists'] as $item)
                                <span>{{ $item }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex">
                        <div class="artist">
                            <h5>Written by:</h5>
                        </div>
                        <div class="artists">
                            @foreach ($array_indice['writers'] as $item)
                                <span>{{ $item }}</span>
                            @endforeach
                        </div>
                    </div>

                </div>

                <div class="specs">
                    <div class="border_bottom">
                        <h3>Specs</h3>
                    </div>
                    <div class="flex">
                        <div class="artist">
                            <h5>Series:</h5>
                        </div>
                        <div class="artists">
                            <span>{{ $array_indice['series'] }}</span>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="artist">
                            <h5>U.S. Price:</h5>
                        </div>
                        <div class="artists">
                            <span>{{ $array_indice['price'] }}</span>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="artist">
                            <h5>On Sale Date:</h5>
                        </div>
                        <div class="artists">
                            <span>{{ $array_indice['sale_date'] }}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
