<!DOCTYPE html>
<html lang="en">

<head>
    @include('page.script') 
    
    @include('page.meta')
</head>

<body class="background-white">
    @include('layouts.navbar') 

    @yield('content')
    @include('layout.footer')
    <a href="https://goo.gl/fUaBMR" target="_blank">
        <i id="telegram" class="fab fa-telegram-plane fix-contact"></i>
    </a>


</body>

</html>