<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{$brand->name}}</title>

    <style>

        #r1, #r2, #r3 {
            -webkit-appearance: none;
            appearance: none;
            width: 100%;
            height: 3px;
            background: {{$brand->color}};
        }

        #r1::-webkit-slider-thumb, #r2::-webkit-slider-thumb, #r3::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 49px;
            height: 49px;
            background: url({{ @App::make('url')->to('/') . '/storage' . $brand->page_background}}) center center no-repeat; /* Set the background image */
            background-size: cover;
            cursor: pointer;
        }

        #r1::-moz-range-thumb, #r2::-moz-range-thumb, #r3::-moz-range-thumb {
            width: 49px;
            height: 49px;
            background: url({{ @App::make('url')->to('/') . '/storage' . $brand->page_background}}) center center no-repeat; /* Set the background image for Firefox */
            background-size: cover;
            cursor: pointer;
        }

    </style>
</head>
<body
    class="relative"
    >
<div class="absolute top-0 left-0 w-screen flex justify-center" style="background: url({{ @App::make('url')->to('/') . '/storage' . $brand->page_background}})">
    <div class="w-[1024px] p-24 bg-white flex flex-col gap-8 " style="color: {{$brand->color}}">
        <div class="inline-block mx-auto px-12 py-6" style="border:2px solid {{$brand->color}}">
            <img class="w-32 mx-auto" src="{{ @App::make('url')->to('/') . '/storage' . $brand->page_logo}}" alt="">
        </div>
        <h2 class="font-medium text-center text-3xl">We value your feedback</h2>

        <div class="grid grid-cols-4 gap-8 items-center justify-end py-24 text-center">
            <h1 class="text-2xl font-medium text-left">Rating</h1>
            <span>Average</span>
            <span>Good</span>
            <span>Excellent</span>
            {{--        --}}
            <span class="text-left">Atmosphere & <br> Cleanliness</span>
            <input id="r1" type="range" min="1" max="3" class="col-span-3 rang-slider">
            <span class="text-left">Food Quality & <br> Taste</span>
            <input id="r2" type="range" min="1" max="3" class="col-span-3 rang-slider">
            <span class="text-left">Quality of <br> Service</span>
            <input id="r3" type="range" min="1" max="3" class="col-span-3 rang-slider">
        </div>


        <div>
            <h1 class="text-2xl font-medium">About you</h1>

        </div>
    </div>
</div>
</body>
</html>
