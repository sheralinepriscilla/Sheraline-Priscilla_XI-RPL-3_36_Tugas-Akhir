<nav class="navbar navbar-expand-lg bg-secondary text-uppercase top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href={{ url ('/') }}>BELI BUNGA DONG</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-2 px-0 px-lg-3 rounded js-scroll-trigger" href={{ url('bunga') }}>Bunga</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
               
              <a class="nav-link py-2 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>
              
              </li>
        </ul>
      </div>
    </div>
  </nav>