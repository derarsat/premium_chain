<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Premium Chain -  @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="relative">
    <header class="fixed w-screen top-0 z-30 bg-black bg-opacity-50 " id="header" style="mix-blend-mode: lighten;backdrop-filter: blur(10px)">
        <div class="container py-4">
            <a href="/">
                <img class="w-44 mx-auto mb-4" src="{{asset('/premium-chain.png')}}" alt="Premium Chain">
            </a>
            <div class=" border-t border-white ">
                <ul class="flex items-center justify-center gap-4 pt-4 text-white">
                    <li><a href="{{route('front.about')}}">About</a></li>
                    <li><a href="{{route('front.about')}}">Divisions</a></li>
                    <li><a href="{{route('front-brands.index')}}">Brands</a></li>
                    <li><a href="">Locations </a></li>
                    <li><a href="{{route('stay-connected')}}">Stay Connected</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="font-sans">
        @yield('content')
    </main>
</body>

</html>
