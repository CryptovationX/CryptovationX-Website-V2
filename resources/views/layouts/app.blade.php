<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("partials.head")
    <title>CryptovationX | @yield('title')</title>
</head>

<body class="royal_preloader background-white" data-spy="scroll" data-target=".navbar" data-offset="70">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZ5ZCBM"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
        <div id="royal_preloader"></div>
        
    @include("partials.scripts")

        <div id="particles-js"></div>
    

            <a target="_blank"><img src="{{ asset('images/fulltoplogo.png') }}" class="logo"></a>


            <p class="logofont">"The Best Friend for Crypto Investors"</p>


                @yield("content") 
                @yield("footer")
    <script>
    window.Laravel = <?php echo json_encode([
                        'csrfToken' => csrf_token(),
                    ]); ?>
    
    </script>
</body>

</html>