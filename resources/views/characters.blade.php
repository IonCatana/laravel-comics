{{-- estendo il layout di default per questa pagina --}}
@extends('layouts.default')

{{-- al titolo da dare a questa pagina specifica assegno "Characters" --}}
@section('pageTitle', 'Characters')

{{-- aggiungo qui tutto il contenuto --}}
@section('content')

    <div class="main-content">

        {{-- icludo il jumotron dinamicamente --}}
        @include('partials.jumbotron')

        {{-- utilizzo javascript per creare una funzione che indirizzi l'utente alla pagina corrispondente al fumetto cliccato --}}
        <script type="text/javascript">
            function myhref(web) {
                window.location.href = web;
            }
        </script>

        <div class="container">

            {{-- ciclo i dati per popolare dinamicamente le cards presenti nella pagina --}}
            @foreach ($data as $key => $item)
                {{-- utilizzo onlick sul div in modo da richiamare la funzione dedicata al redirect della pagina --}}
                {{-- con route() definisco il link da passare tenendo 'fumetto' come base e aggiungo l'indice del fumetto selezionato nella pagina seguente --}}
                <div class="cards" onclick="myhref( '{{ route('fumetto', ['index_fumetto' => $key]) }}' );">

                    {{-- utilizzo la funzione asset() perché le immagini sono nella cartella public --}}
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
    
@endsection
