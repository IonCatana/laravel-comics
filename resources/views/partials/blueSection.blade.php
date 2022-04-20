<div class="info">
    <div class="container">
        <ul>

            {{-- ciclo gli elementi dell'array info --}}
            @foreach ($infos as $item)
                <li>
                    {{-- se l'immagine ciclata è l'ultima --}}
                    @if ($loop->last)
                        {{-- aggiungo una classe "smaller" per renderla più piccola --}}
                        <img class="smaller" src="{{ asset($item['img']) }}" alt="{{ $item['text'] }}">
                    @else
                        {{-- altrimenti non aggiungo nessuna classe --}}
                        <img src="{{ asset($item['img']) }}" alt="{{ $item['text'] }}">
                    @endif
                    <a href="{{ asset($item['url']) }}">{{ $item['text'] }}</a>
                </li>
            @endforeach

        </ul>
    </div>
</div>
