<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">DeliveBoo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- RIVEDERE IL RESPONSIVE -->
      @if (Route::has('login'))
          <div class="top-right links navbar-nav mr-auto">
              @auth
                  <a href="{{ url('/home') }}" class="nav-link">Home</a>
              @else
                  <a href="{{ route('login') }}" class="nav-link">Login</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="nav-link">Register</a>
                  @endif
              @endauth
          </div>
      @endif

  </div>
  </nav>

</header>
