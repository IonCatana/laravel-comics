@extends('layouts.default')

@section('pageTitle', 'Characters')

@section('content')
    <div class="main-content">

        @include('partials.jumbotron')

        <div class="container">

            @foreach ($data as $item)
                <div class="cards">

                    <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">

                    <h4>{{ $item['title'] }}</h4>

                </div>
            @endforeach

        </div>

        <div class="load-more">
            <button>LOAD MORE</button>
        </div>

    </div>
    @include('partials.blueSection')
@endsection
