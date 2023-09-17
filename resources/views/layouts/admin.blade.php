<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>{{ config("app.name", "Laravel") }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com"/>
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat"
        rel="stylesheet"
    />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
</head>
<body>
<nav class="bg-white border-b-2 border-gray-200">
    <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
    >
        <a
            href="{{ route('admin.index') }}"
            class="font-bold italic text-lg text-indigo-600"
        >
            PREMIUM CHAIN
        </a>
        <div class="flex items-center gap-3">
            <div class="flex items-center gap-4 text-gray-600 font-medium">
                <a href="{{ route('brands.index') }}">Brands</a>
            </div>
            <div class="flex items-center gap-4 text-gray-600 font-medium">
                <a href="{{ route('admin.settings-admin') }}"> Settings</a>
            </div>
            <div class="flex items-center gap-4 text-gray-600 font-medium">
                <a href="{{ route('admin.contacts') }}">Contact Messages</a>
            </div>
        </div>
    </div>
</nav>
<main class="p-4 max-w-screen-xl mx-auto">@yield('content')</main>
</body>
</html>
