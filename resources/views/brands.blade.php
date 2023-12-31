@section('title', 'Brands')
@extends('layouts.front')

@section('content')
    <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
    <script src="../jquery.js"></script>
    <script src="../slick/slick.min.js"></script>
    <div class="carousel relative">
        @foreach ($images as $image )
            <div class="relative">
                <div  style="height: calc(100vh - 30px);background: url({{ @App::make('url')->to('/') . '/storage' . $image->url}})">

                </div>
                <div
                    class="absolute bg-gradient-to-t from-[rgba(0,0,0,1)] to-transparent via-[rgba(0,0,0,0.2)] flex items-center justify-center inset-0 text-white text-3xl lg:text-5xl px-4 text-center">
                    {{$image->title}}
                </div>
            </div>
        @endforeach
    </div>
    <script>
        $(document).ready(function () {
            $('.carousel').slick({
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                nextArrow: '<svg  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" data-slot="icon" class="slick-next !w-8 !h-8"> <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /> </svg>',
                prevArrow: '<svg  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" data-slot="icon" class="slick-prev !w-8 !h-8"> <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" /> </svg>',

            });
        });
    </script>

    <style>
        .slick-prev {
            left: 40px;
            z-index: 10;
        }



        .slick-next {
            right: 40px;
        }



    </style>
    <div class="container text-center py-12 lg:py-24 flex flex-col gap-6">
        <h1 class="text-4xl lg:text-5xl">OUR <span class="font-bold">SUCCESSFUL BRANDS</span></h1>
        <p>With the help of the chain, our clients have turned a new page on their businesses <br> to find
            success in various corners of the world. </p>
    </div>
    <div class="max-w-5xl mx-auto px-4 lg:px-0 mb-12">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-24">
            @foreach ($brands as $brand )
                <a class="flex items-center justify-center" href="{{route('single-brand',$brand->id)}}">
                    <img class="max-w-full max-h-full"
                         src="{{ @App::make('url')->to('/') . '/storage' . $brand->dark_logo}}"
                         alt="{{$brand->name}}">
                </a>
            @endforeach
        </div>
    </div>
@endsection
