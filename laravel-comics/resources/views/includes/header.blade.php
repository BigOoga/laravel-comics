<header>
    <div id="logo">
      <img src="{{ asset('img/dc-logo.png') }}" alt="Logo" />
    </div>
    <nav>
      <ul>
        <li>
          <a  class="{{ request()->routeIs('characters') ? 'active' : ''}}" href="#" class="font-weight-bold">
            CHARACTERS
         </a>
        </li>
        <li>
          <a class="{{ request()->routeIs('comics') ? 'active' : ''}}" href="{{ route('comics') }}" class="font-weight-bold">
           COMICS
         </a>
        </li>
        <li>
          <a class="{{ request()->routeIs('movies') ? 'active' : ''}}" href="{{ route('movies') }}" class="font-weight-bold">
            MOVIES
         </a>
        </li>
        <li>
          <a class="{{ request()->routeIs('tv') ? 'active' : ''}}" href="#" class="font-weight-bold">
           TV
         </a>
        </li>
        <li>
          <a class="{{ request()->routeIs('games') ? 'active' : ''}}" href="#" class="font-weight-bold">
            GAMES
         </a>
        </li>
        <li>
          <a class="{{ request()->routeIs('collectibles') ? 'active' : ''}}" href="#" class="font-weight-bold">
           COLLECTIBLES
         </a>
        </li>
        <li>
          <a class="{{ request()->routeIs('videos') ? 'active' : ''}}" href="#" class="font-weight-bold">
            VIDEOS
         </a>
        </li>
        <li>
          <a class="{{ request()->routeIs('fans') ? 'active' : ''}}" href="#" class="font-weight-bold">
            FANS
         </a>
        </li>
        <li>
          <a class="{{ request()->routeIs('news') ? 'active' : ''}}" href="#" class="font-weight-bold">
            NEWS
         </a>
        </li>
        <li>
          <a class="{{ request()->routeIs('shop') ? 'active' : ''}}" href="#" class="font-weight-bold">
            SHOP
         </a>
        </li>
      </ul>
    </nav>
  </header>