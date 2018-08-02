@extends('layouts.app_nologo')
@include("layouts.balance_navbar")
@section('title', 'Balance') 

@section('content')
 <div class="bg c_margin">
    <div class="container">
    {{-- navbar --}}
    {{-- <div class="row">
    <div class="dropdown" style="margin-left:auto">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Firstname
            </button>
            <div class="dropdown_menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" href="#">Profile</a>
              <button class="dropdown-item" href="#">Balance</a>
              <button class="dropdown-item" href="#">Logout</a>
            </div>
            </div>
            <div class="dropdown show" style="margin-left:auto">
                <a class="btn btn-secondary_new dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   @Username
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item {{ Request::is('profile') ? "active" : "" }}" href="/profile">Profile</a>
                  <a class="dropdown-item {{ Request::is('balance') ? "active" : "" }}" href="/balance">Balance</a>
                  <a class="dropdown-item {{ Request::is('logout') ? "active" : "" }}" href="/logout">Logout</a>
                </div>
            </div>
    </div> --}}
    {{-- Live Price --}}
    <div class="row ticker_margin col-12 liveprice">
        <span id="controller" >
            <span id="clock">@{{ date }} | @{{ time }} &nbsp; &nbsp; &nbsp; &nbsp;</span>
            <span id="order">
                <span>Live Price</span> : 
                <span>Bitcoin $@{{Math.round(orderbooks.Binance.btcusd.bid*10000)/10000}} &nbsp; | &nbsp;</span>
                <span>Ethereum $@{{Math.round(orderbooks.Binance.ethusd.bid*10000)/10000}} &nbsp; | &nbsp;</span>
                <span>Ripple $@{{Math.round(orderbooks.Binance.xrpusd.bid*10000)/10000}}</span>
            </span>
        </span>
    </div>
    {{-- Announcement --}}
    <div class="row">
        <div class="col-12 announcement_row">
            <!-- Trigger/Open The Modal -->
            <span id="announcement_myBtn"><i class="fas fa-bullhorn"></i>&nbsp; Announcing the launch of Arbot (2.0 beta)</span>
        </div>
        <!-- The Modal -->
        <div id="announcement_myModal" class="announcement_modal">

        <!-- Modal content -->
        <div class="announcement_modal-content">
            <div class="announcement_close">&times;</div>
            <div class="col-12 center"><h3>Arbot Terminal</h3></div>
            <img src="https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/Arbot44.png" alt="" class="announcement_img">
            <div class="col-12 center"><p>Arbot team has research and develop 7 cryptocurrency arbitrage strategies. They also develop arbitrage trading terminal to serve crypto fund around the world.</p></div>
            <div class="col-12 center"><a href="https://arbot.cryptovation.co/" target="_blank">See more</a></div>            
        </div>

        </div>
    </div>
    {{-- Greeting --}}
    <div class="row normal_font">
        <div class="col-3 title_margin_top center">Welcome</div>
        <div class="col-6 title_margin_top left">{{ $profile->lastname." ".$profile->firstname }}</div>
        <div class="col-3 title_margin_top center">
            <div class="verify_box center">Verified</div>
        </div>
    </div>

    {{-- ETH wallet --}}
    <div class="row small_font margin_top">
        <div class="col-3 center">
            <div class="eth_tooltip" style="margin-left:2%">ETH wallet</div>
        </div>
        <div class="col-9">{{ $profile->address}}</div>
    </div>

    <hr> <br><br>

    <!-- The Balance Modal -->
    <div id="balance_myModal" class="balance_modal">

    <!-- Modal content -->
    <div class="balance_modal-content">
      <span class="balance_close">&times;</span>
      <img src="https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/Table+of+feature+accessibility.png" alt="Table of feature accessibility" class="balance_table_pic">
    </div>
  
    </div>
  
    {{-- Only display on phone --}}
    <span class="balance_phone_text">Touch "CXA Tokens" to see the application of CXA</span>
    {{-- Balance --}}
    <div class="container balance_container text-center">
        <div class="balance_border balance_tooltip light">
            <div class="balance_padding normal_font">
                <div class="header_copy center"><b>Balance</b></div> <br>
                <div class="center">0</div> <br>
                <div class="calendar_events ce_title center" id="balance_myBtn"><span class="token_application">CXA Tokens</span></div>
                {{-- Tooltip text --}}
                <span class="balance_tooltiptext">Click "CXA Tokens" to see the application of CXA</span>
            </div>
        </div>
    </div>
    <br><br><br>
    {{-- Transaction history --}}
    <div class="container transaction_container text-center">
        <div class="calendar light left">
            <div class="calendar_header">
            <p class="header_copy"> Transaction history</p>
            </div>
            {{--<div class="calendar_plan">
                <div class="cl_plan">
                <div class="cl_title">Today</div>
                <div class="cl_copy">22nd  April  2018</div>
                <div class="cl_add">
                <i class="fas fa-plus"></i>
                </div>
            </div>
            </div> --}}
            <div class="calendar_events">
            {{-- <p class="ce_title">Upcoming Events</p> --}}
                <div class="event_item" style="color: black;">
                    <div class="row center">
                        <div class="col-3">
                            <div class="ei_Copy">2018-06-29</div>
                        </div>
                        <div class="col-3">
                            <div class="ei_Copy left">Deposit</div>
                        </div>
                        <div class="col-1" style="margin-left:-5%">
                                <div class="ei_Copy">3000</div>
                        </div>
                        <div class="col-1" style="margin-left:8%">
                            <div class="ei_Copy">CXA</div>
                        </div>
                        <div class="col-3 center">
                            <div class="correct" style="margin-left:8%">Completed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <br><br><br>
    @include("partials.footer")
     </div>
</div>
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


    // Modal announcement
    // Get the modal
    var announcement_modal = document.getElementById('announcement_myModal');

    // Get the button that opens the modal
    var announcement_btn = document.getElementById("announcement_myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("announcement_close")[0];

    // When the user clicks the button, open the modal 
    announcement_btn.onclick = function() {
        announcement_modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        announcement_modal.style.display = "none";
    }

    // Balance Modal
    var modal = document.getElementById('balance_myModal');
    var btn = document.getElementById("balance_myBtn");
    var span = document.getElementsByClassName("balance_close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    
</script>
@endsection