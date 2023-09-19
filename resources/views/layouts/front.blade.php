<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Premium Chain - @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="relative">
<header class="lg:fixed hidden lg:block w-screen top-0 z-30 bg-black bg-opacity-50 " id="header"
        style="mix-blend-mode: lighten;backdrop-filter: blur(10px)">
    <div class="container py-4">
        <a href="/">
            <img class="w-44 mx-auto mb-4" src="{{asset('/premium-chain.png')}}" alt="Premium Chain">
        </a>
        <div class=" border-t border-white ">
            <ul class="flex items-center justify-center gap-4 pt-4 text-white">
                <li><a href="{{route('front.about')}}">About</a></li>
                <li><a href="{{route('front.about')}}">Divisions</a></li>
                <li><a href="{{route('front-brands.index')}}">Brands</a></li>
                <li><a href="/#locations">Locations </a></li>
                <li><a href="{{route('stay-connected')}}">Stay Connected</a></li>
            </ul>
        </div>
    </div>
</header>
<header class="block lg:hidden bg-black text-white p-4 flex items-center justify-between">
    <a href="/">
        <img class="w-[7rem] " src="{{asset('/premium-chain.png')}}" alt="Premium Chain">

    </a>
    <button
        type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example"
        aria-controls="drawer-example">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"/>
        </svg>

    </button>

    <div id="drawer-example"
         class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
         tabindex="-1" aria-labelledby="drawer-label">
        <h5 id="drawer-label"
            class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400">

            <a href="/"> Premium Chain</a>
        </h5>
        <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 right-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <ul class="flex items-start flex-col text-black gap-4 pt-4">
            <li><a href="{{route('front.about')}}">About</a></li>
            <li><a href="{{route('front.about')}}">Divisions</a></li>
            <li><a href="{{route('front-brands.index')}}">Brands</a></li>
            <li><a href="/#locations">Locations </a></li>
            <li><a href="{{route('stay-connected')}}">Stay Connected</a></li>
        </ul>
    </div>
</header>
<main class="font-sans">
    @yield('content')
</main>
<x-front-footer/>
</body>

</html>
