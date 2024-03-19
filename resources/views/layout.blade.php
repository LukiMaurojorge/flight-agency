<!DOCTYPE html>
<html lang="en">

<head class="head">
    @include('head')
    @vite(['resources/js/airline.js'])
</head>

<header>
    @include('header')
</header>

<body class="h-screen overflow-hidden">
    @yield('content')
</body>

</html>