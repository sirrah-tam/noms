<header>
  <nav>
    <ul class="flex justify-between">
      <li>
        <a href="/" aria-label="Noms home" class="btn btn--home">
          <span class="fas fa-home pr-3" aria-hidden="true"></span>
          Noms
        </a>
      </li>
      @auth
        <li class="mx-5">
          <a class="btn" href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      @endauth
    </ul>
  </nav>
</header>