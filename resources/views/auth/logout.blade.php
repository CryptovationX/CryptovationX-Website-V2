@extends('layouts.app') 
@extends("layouts.navbar")
@section('title', 'Logout') 
    @section('content')
        
        <div class="container bg c_margin">
            <p class="redirect_font redirect_padding center">We've securely logged you out.</p>

            <div id='timeCounterHolder'>
                    <div id='row'>
                        <h4 id='displayTimer' class="redirecting_font" style="text-align:center;margin-bottom: 100px;"></p>
                    </div>            
            </div>
            @include("partials.footer")
        </div>
                
                <script>
                var count = 5;
                /* Website to redirect */
                var url = "https://cryptovationx.io/";
                /* Call function at specific intervals */
                var countdown = setInterval(function() { 
                    /* Display Countdown with txt */
                    $('#displayTimer').text("Redirecting to CryptovationX.co in: " + count-- + " seconds");
                    /* If count is smaller than 0 ...*/
                    if (count < 0) {
                        $('#displayTimer').text("Redirecting now....");
                        /* Clear timer set with setInterval */
                        clearInterval(countdown);
                        /* Redirect */
                        $(location).attr("href", url);
                   } 
                    // milliseconds
                }, 1000);
                </script>
        </div>
    @endsection