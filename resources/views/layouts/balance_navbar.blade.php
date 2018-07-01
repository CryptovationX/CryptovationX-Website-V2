<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<nav id="home" class="navbar  navbar-default fixed-top navbar-shadow navbar-expand-lg navbar-shadow background-white">
    <div class="container">
        <a class="navbar-brand-mat" href="#">
            {{-- <img src="images/Token.png" class="img-fluid" alt="Responsive image" height="40px" width="40px"> --}}
        </a>
    
    <div class="hamdropdown">
        <div onclick="myFunction()" class="hambtn">
        <div class="hamline"></div>
        <div class="hamline"></div>
        <div class="hamline"></div>
        </div>
            <div id="myDropdown" class="hamdropdown-content" style="right:0">

            <a class="{{ Request::is('profile') ? "active" : "" }}" href="/profile">Profile</a>
            <a class="{{ Request::is('balance') ? "active" : "" }}" href="/balance">Fund</a>
            <a class="nav-link mr10 ml10 nav-front" href="{{ route('logout') }}"
                          onclick="event.preventDefault();x
                               document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
            </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link mr10 ml10 nav-front {{ Request::is('profile') ? "active" : "" }}" href="/profile" target="_blank">Profile <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link mr10 ml10 nav-front {{ Request::is('balance') ? "active" : "" }}" href="/balance" target="_blank">Fund <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">

            <a class="nav-link mr10 ml10 nav-front" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
    
                        <form id="logout-form" action="{{ route('signout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

        </li>
        
    </div>
    </div>
</nav>