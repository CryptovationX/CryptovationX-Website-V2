<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("partials.head")
    <title>CryptovationX | @yield('title')</title>
</head>

<body>
    @include("partials.scripts")

        <div id="particles-js"></div>
    

            <a target="_blank"><img src="{{ asset('images/fulltoplogo.png') }}" class="logo"></a>


            <p class="logofont">"The Best Friend for Crypto Investors"</p>


                @yield("content") 
    <script>
    window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
    ]); ?>
    
    </script>

</body>

</html>