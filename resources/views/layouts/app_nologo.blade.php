<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("partials.head")
    <title>CryptovationX | @yield('title')</title>
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


</body>

</html>