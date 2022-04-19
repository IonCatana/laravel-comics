@extends('layouts.default')

@section('pageTitle', 'Characters')

@section('content')
    <div class="main-content">

        @include('partials.jumbotron')

        <div class="container">

            @foreach ($data as $item)
                <div class="cards">

                    <img src="{{ asset($item['thumb']) }}" alt="{{ $item['title'] }}">

                    <h4>{{ $item['title'] }}</h4>

                </div>
            @endforeach

        </div>

        <div class="load-more">
            <button>LOAD MORE</button>
        </div>

    </div>
    @include('partials.blueSection')
    <div class="info">
        <div class="container">
            <ul>

                @foreach ($infos as $item)
                    <li>
                        <img src="{{ $item['img'] }}" alt="{{ $item['text'] }}">
                        <a href="{{ $item['url'] }}">{{ $item['text'] }}</a>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
@endsection
