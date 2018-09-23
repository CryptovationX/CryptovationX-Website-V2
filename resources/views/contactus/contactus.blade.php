<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("partials.head")
    <title>CryptovationX | @yield('title')</title>
    @yield('style')
</head>

<body class="royal_preloader " data-spy="scroll" data-target=".navbar" data-offset="70">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZ5ZCBM" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="royal_preloader"></div>



    <div id="particles-js"></div>

    @include("layouts.balance_navbar")

    @yield("content")

    @include("partials.scripts")

    <br><br><br><br><br>

    <div class="bg c_margin">
        <div class="container">
            <div class="row">
                <div class="col-12 announcement_row">
                    <!-- Trigger/Open The Modal -->
                    <span id="announcement_myBtn"><i class="fas fa-bullhorn"></i>&nbsp; Announcing the Arbot (2.0 beta)</span>
                    
                </div>
                <!-- The Modal -->

                
            </div>
            <!-- The Balance Modal -->
            <div id="balance_myModal" class="balance_modal">
                <!-- Modal content -->

            </div>
        </div>
    </div>

    @include("partials.footer")


</body>

</html>