<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<nav id="home" class="navbar  navbar-default fixed-top navbar-shadow navbar-expand-lg navbar-shadow background-white">
    <div class="container">
        <a class="navbar-brand-mat" href="#">
            <img src="images/Token.png" class="img-fluid" alt="Responsive image" height="40px" width="40px">
        </a>
    
    <div class="hamdropdown">
        <div onclick="myFunction()" class="hambtn">
        <div class="hamline"></div>
        <div class="hamline"></div>
        <div class="hamline"></div>
        </div>
            <div id="myDropdown" class="hamdropdown-content" style="right:0">
            <a href="https://cryptovationx.io/">Home</a>
            <a href="https://cryptovationx.io/whitepaper.pdf">White Paper</a>
            <a href="https://cryptovationx.io/#timeline">Blog</a>
            <a href="https://cryptovationx.io/#team">Team</a> <hr>
            <a class="{{ Request::is('profile') ? "active" : "" }}" href="/profile">Profile</a>
            <a class="{{ Request::is('balance') ? "active" : "" }}" href="/balance">Balance</a>
            <a class="{{ Request::is('logout') ? "active" : "" }}" href="/logout">Logout</a>
            </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link mr10 ml10 nav-front" href="https://cryptovationx.io/" target="_blank">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link mr10 ml10 nav-front" href="https://cryptovationx.io/whitepaper.pdf" target="_blank">White Paper <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link mr10 ml10 nav-front" href="https://cryptovationx.io/#timeline" target="_blank">Blog <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link mr10 ml10 nav-front" href="https://cryptovationx.io/#team" target="_blank">Team <span class="sr-only">(current)</span></a>
        </li>
        <li class="dropdown show nav-item active" >
            <div class="dropdown show" style="margin-top: 20%;">
            <a class="btn_new btn-secondary_new dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Username
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item {{ Request::is('profile') ? "active" : "" }}" href="/profile">Profile</a>
            <a class="dropdown-item {{ Request::is('balance') ? "active" : "" }}" href="/balance">Balance</a>
            <a class="dropdown-item {{ Request::is('logout') ? "active" : "" }}" href="/logout">Logout</a>
            </div>
            </div>
        </li>
    </div>
    </div>
</nav>