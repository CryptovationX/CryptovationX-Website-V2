<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.0/socket.io.js"></script>

<nav>
    <div class="row controller fixed-top">
        <div class="nav_padding">
        <span class="far fa-clock"></span>&nbsp; <span id="clock">@{{ date }} | @{{ time }}</span>
        <span id="order">
            <span>Bitcoin $@{{Math.round(orderbooks['Binance.com'].btcusd.bid*10000)/10000}} &nbsp; | &nbsp;</span>
            <span>Ethereum $@{{Math.round(orderbooks['Binance.com'].ethusd.bid*10000)/10000}} &nbsp; | &nbsp;</span>
            <span>Ripple $@{{Math.round(orderbooks['Binance.com'].xrpusd.bid*10000)/10000}}</span>
        </span>
        </div>
    </div>
</nav>
{{-- <div id="particles-js2"></div> --}}
<nav id="particles-js3" class="navbar  navbar-default fixed-top navbar-expand-lg">
    <div class="container phone_container" style="max-width:1920;">
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
            <a href="/signoutt">Logout</a>
            </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link mr10 ml10 nav-front {{ Request::is('profile') ? "active" : "" }}" href="/profile">Profile <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link mr10 ml10 nav-front {{ Request::is('balance') ? "active" : "" }}" href="/balance">Wallet <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">

            <a class="nav-link mr10 ml10 nav-front" href=""
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

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.0/socket.io.js"></script>
<script>
    

      // Liveprice
      var socket = io.connect('https://socketliveprice.cryptovationx.io:8443', {
        secure: true
    });

    new Vue({
        el: '#order',

        data: {

            orderbooks: {},

        },

        mounted: function () {

            socket.on('orderbooks-channel:App\\Events\\OrderbookOmit', function (data) {

                this.orderbooks = JSON.parse(data.orderbooks);
                // console.log(this.orderbooks);

            }.bind(this));
        },

    });
    
    // Clock
    var clock = new Vue({
    el: '#clock',
    data: {
        time: '',
        date: ''
    }
});
var timerID = setInterval(updateTime, 1000);
    updateTime();
    function updateTime() {
        var cd = new Date();
        clock.time = zeroPadding(cd.getHours(), 2) + ':' + zeroPadding(cd.getMinutes(), 2) + ':' + zeroPadding(cd.getSeconds(), 2);
        clock.date = zeroPadding(cd.getFullYear(), 4) + '-' + zeroPadding(cd.getMonth()+1, 2) + '-' + zeroPadding(cd.getDate(), 2) + ' ';
    };

    function zeroPadding(num, digit) {
        var zero = '';
        for(var i = 0; i < digit; i++) {
            zero += '0';
        }
        return (zero + num).slice(-digit);
    }
</script>