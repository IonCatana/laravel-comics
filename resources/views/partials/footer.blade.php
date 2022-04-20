<footer>

    <div class="top-footer">
        <div class="container">

            <div class="left-footer">
                <nav>
                    <ul>
                        {{-- ciclo le colonne per creare le sezioni dinamicamente --}}
                        @foreach ($colonne as $item)
                            {{-- il primo ciclo è solo per i titoli delle sezioni --}}
                            <li>
                                <h5>{{ $item['titolo'] }}</h5>

                                {{-- il secondo ciclo serve a popolare i links delle sezioni --}}
                                @foreach ($item['links'] as $under_item)
                                    <a href="{{ $under_item['url'] }}">{{ $under_item['nome'] }}</a>
                                @endforeach

                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            {{-- inserisco il logo usando la funzione asset() perchè si trova nella cartella public --}}
            <div class="right-footer">
                <img src="{{ asset('img/dc-logo-bg.png') }}" alt="logo dc">
            </div>

        </div>
    </div>

    <div class="bottom-footer">

        <div class="container">

            <div class="sign-up">
                <button>SIGN-UP NOW!</button>
            </div>

            <div class="social-media">

                <h3>FOLLOW US</h3>

                <ul>
                    {{-- ciclo le immagini da associare ai social media --}}
                    @foreach ($socials as $item)
                        <li>
                            <img src="{{ asset($item['sito']) }}" alt="social media">
                        </li>
                    @endforeach
                </ul>

            </div>

        </div>

    </div>

</footer>
