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
            background: url({{ @App::make('url')->to('/') . '/storage' . $brand->rating_icon}}) center center no-repeat; /* Set the background image */
            background-size: cover;
            cursor: pointer;
        }


        input, textarea {
            background: none !important;
            border-color: transparent !important;
            color: {{$brand->color}}     !important;
            font-weight: 600;
            border-radius: 0 !important;
            border-bottom: 3px solid {{$brand->color}}     !important;
            outline: none !important;
        }

        label {
            color: {{$brand->color}};
            font-weight: 800;
        }

        input:focus {
            outline-color: transparent !important;
        }

    </style>
</head>
<body
    class="relative"
>
<div class="absolute top-0 left-0 w-screen flex justify-center px-6 lg:px-24"
     style="background: url({{ @App::make('url')->to('/') . '/storage' . $brand->page_background}})">
    <div class="w-[1024px] p-6 lg:p-24 bg-white flex flex-col gap-8 " style="color: {{$brand->color}}">
        <img class="w-32 mx-auto" src="{{ @App::make('url')->to('/') . '/storage' . $brand->colored_logo}}" alt="">
        <h2 class="font-light text-center text-3xl">We value your feedback</h2>
        @if(session()->has('message'))
            <p class="bg-green-500 text-white p-4 mb-6 rounded-md text-center"> {{ session()->get('message') }}</p>
        @endif
        <form action="{{route('submit-create-rate-messages')}}" method="post">
            @csrf
            <div class="grid grid-cols-4 gap-8 items-center justify-end py-12 lg:py-24 text-center">
                <h1 class="text-2xl font-light text-left">Rating</h1>
                <span>Average</span>
                <span>Good</span>
                <span>Excellent</span>
                {{--        --}}
                <label for="r1" class="text-left">Atmosphere & <br> Cleanliness</label>
                <input required name="r1" id="r1" type="range" min="1" max="3" class="col-span-3 rang-slider">
                <label for="r2" class="text-left">Food Quality & <br> Taste</label>
                <input required name="r2" id="r2" type="range" min="1" max="3" class="col-span-3 rang-slider">
                <label for="r3" class="text-left">Quality of <br> Service</label>
                <input required name="r3" id="r3" type="range" min="1" max="3" class="col-span-3 rang-slider">
            </div>


            <div class="flex flex-col gap-8">
                <h1 class="text-2xl font-light mb-12">About you</h1>
                <div>
                    <label for="name">Full name</label>
                    <input required type="text" id="name" name="name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input required type="email" id="email" name="email">
                </div>
                <div>
                    <label for="birth">Birth Date</label>
                    <input required type="date" id="birth" name="birth">
                </div>
                <div>
                    <label for="message">How can we serve you better</label>
                    <textarea required name="message" id="message" cols="30" rows="10"></textarea>
                </div>
            </div>
            <button class="px-8 py-2 font-black text-white mt-8" style="background-color: {{$brand->color}}">
                Save Feedback
            </button>
        </form>

        <div class="flex items-center flex-col justify-center gap-1">
            <h1 class="font-light text-3xl">Thank You</h1>
            <p class="font-bold">For Your Feedback</p>
        </div>
    </div>
</div>
</body>
</html>
