<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("partials.head")
    <title>CryptovationX | @yield('title')</title>
</head>

<body>
    @include("partials.scripts")

        <div style="background-color:ghostwhite; height:100vh">
            @yield("content") 
        </div>

</body>

</html>