<footer>

    <div class="top-footer">
        <div class="container">

            <div class="left-footer">
                <nav>
                    <ul>
                        @foreach ($colonne as $item)
                            <li>
                                <h5>{{ $item['titolo'] }}</h5>

                                @foreach ($item['links'] as $under_item)
                                    <a href="{{ $under_item['url'] }}">{{ $under_item['nome'] }}</a>
                                @endforeach

                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>

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
