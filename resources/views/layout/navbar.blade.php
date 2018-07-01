<nav id="home" class="navbar navbar-default navbar-dark fixed-top navbar-shadow navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand-mat" href="#">
      <img src="https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/logos/Token3.png" class="img-fluid" alt="Responsive image" height="40px" width="40px">
    </a>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-top-toggle" aria-controls="navbar-top-toggle" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbar-top-toggle">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link mr10 ml10 nav-front" href="/">Home
            <span class="sr-only" style="#fff">(current)</span>
          </a>
        </li>
        <li class="nav-item active">
        <a class="nav-link mr10 ml10 nav-front" href="{{ asset('whitepaper.pdf') }}" target="_blank" >White Paper
            <span class="sr-only" style="#fff">(current)</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link mr10 ml10 nav-front" href="#blog">Blog
            <span class="sr-only" style="#fff">(current)</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link mr10 ml10 nav-front" href="#team">Team
            <span class="sr-only" style="#fff">(current)</span>
          </a>
        </li>

        @guest
            <li class="nav-item">
                <a class="nav-link mr10 ml10 nav-front" href="{{ route('login') }}">{{ __('Login') }} <span class="sr-only" style="#fff">(current)</span></a>
            </li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link mr10 ml10 nav-front dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('signout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest

    </div>
  </div>
</nav>