<header>
  <nav>
    <ul class="flex">
      <li>
        <a href="/" aria-label="Noms home" class="btn btn--home">
          <span class="fas fa-home pr-3" aria-hidden="true"></span>
          Noms
        </a>
      </li>
      @auth
        <li class="mx-5">
          <a href="/meals" class="btn"><span class="fas fa-utensils pr-3" aria-hidden="true"></span>Meals</a>
        </li>
        <li class="mx-5">
          <a href="/food" class="btn"><span class="fas fa-list-ul pr-3" aria-hidden="true"></span>Pantry</a>
        </li>
      @endauth
      @auth
        <li class="mx-5 ml-auto">
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