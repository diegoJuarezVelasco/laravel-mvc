<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{url('css/site.css')}}">
</head>

<body>
    <div class="relative p-4 nav-container">
        <nav class="navbar">
            <a href="{{route('home.index')}}">Home</a>
            <a href="{{route('guitars.index')}}">Guitars</a>
            <a href="{{route('home.about')}}">About</a>
            <a href="{{route('home.contact')}}">Contact</a>
        </nav>
    </div>
    <div class="content">
        @yield('content')


    </div>
</body>

</html>
