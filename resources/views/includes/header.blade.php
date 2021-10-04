<header>
    <div class="container py-2">
        <div class="row justify-content-around align-items-center">
            <div id="logo">
                <img src="{{ asset('img/dc-logo.png') }}" alt="Logo" />
            </div>
            <nav>
                <ul>
                    <li>
                        <a class="{{ request()->routeIs('characters') ? 'active' : '' }} font-weight-bold "
                            href="#">CHARACTERS</a>
                    </li>
                    <li>
                        <a class="{{ request()->routeIs('comics') ? 'active' : '' }} font-weight-bold"
                            href="{{ route('comics') }}">COMICS</a>
                    </li>
                    <li>
                        <a class="{{ request()->routeIs('movies') ? 'active' : '' }} font-weight-bold"
                            href="{{ route('movies') }}">MOVIES</a>
                    </li>
                    <li>
                        <a class="{{ request()->routeIs('tv') ? 'active' : '' }} font-weight-bold" href="#">TV</a>
                    </li>
                    <li>
                        <a class="{{ request()->routeIs('games') ? 'active' : '' }} font-weight-bold"
                            href="#">GAMES</a>
                    </li>
                    <li>
                        <a class="{{ request()->routeIs('collectibles') ? 'active' : '' }} font-weight-bold"
                            href="#">COLLECTIBLES</a>
                    </li>
                    <li>
                        <a class="{{ request()->routeIs('videos') ? 'active' : '' }} font-weight-bold"
                            href="#">VIDEOS</a>
                    </li>
                    <li>
                        <a class="{{ request()->routeIs('fans') ? 'active' : '' }} font-weight-bold" href="#">FANS</a>
                    </li>
                    <li>
                        <a class="{{ request()->routeIs('news') ? 'active' : '' }} font-weight-bold"
                            href="#">NEWS</a>
                    </li>
                    <li>
                        <a class="{{ request()->routeIs('shop') ? 'active' : '' }} font-weight-bold"
                            href="#">SHOP</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
