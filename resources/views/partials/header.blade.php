<header class="container">

    {{-- richiamo l'img del logo dalla cartella public utilizzando la funzione asset() --}}
    <div class="left-header">
        <img src="{{ asset('../img/dc-logo.png') }}" alt="logo DC">
    </div>

    <div class="right-header">

        <nav>
            <ul>
                {{-- usando gli operatori ternari assegno la classe active se il nome della route corrisponde a quello della pagina selezionata --}}
                {{-- su href imposto la stessa route presente nel nome assegnato --}}
                <li>
                    <a class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}"
                        href="{{ route('home') }}">Characters</a>

                </li>

                <li>
                    <a class="{{ Request::route()->getName() == 'comics' ? 'active' : '' }}"
                        href="{{ route('comics') }}">comics</a>
                </li>

                <li>
                    <a class="{{ Request::route()->getName() == 'movies' ? 'active' : '' }}"
                        href="{{ route('movies') }}">movies</a>
                </li>

                <li>
                    <a class="{{ Request::route()->getName() == 'tv' ? 'active' : '' }}"
                        href="{{ route('tv') }}">tv</a>
                </li>

                <li>
                    <a class="{{ Request::route()->getName() == 'games' ? 'active' : '' }}"
                        href="{{ route('games') }}">games</a>
                </li>

                <li>
                    <a class="{{ Request::route()->getName() == 'collectibles' ? 'active' : '' }}"
                        href="{{ route('collectibles') }}">collectibles</a>
                </li>

                <li>
                    <a class="{{ Request::route()->getName() == 'videos' ? 'active' : '' }}"
                        href="{{ route('videos') }}">videos</a>
                </li>

                <li>
                    <a class="{{ Request::route()->getName() == 'fans' ? 'active' : '' }}"
                        href="{{ route('fans') }}">fans</a>
                </li>

                <li>
                    <a class="{{ Request::route()->getName() == 'news' ? 'active' : '' }}"
                        href="{{ route('news') }}">news</a>
                </li>

                <li>
                    <a class="{{ Request::route()->getName() == 'shop' ? 'active' : '' }}"
                        href="{{ route('shop') }}">shop</a>
                </li>

            </ul>
        </nav>

    </div>

</header>
