@section('title', 'Brands')
@extends('layouts.front')

@section('content')
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($images as $image )
                <div class="swiper-slide h-screen">
                    <div class="h-full w-full"
                         style="background-position: center;background-size:cover;background-repeat:no-repeat;background-image: url({{ @App::make('url')->to('/') . '/storage' . $image->url}})">

                    </div>
                </div>
            @endforeach
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="container text-center py-24 flex flex-col gap-6">
        <h1 class="text-5xl">OUR SUCCESSFUL BRANDS</h1>
        <p>With the help of Signature Hospitality, our clients have turned a new page on their businesses <br> to find
            success in various corners of the world. </p>
    </div>
    <div class="container">
        <div class="grid grid-cols-4">
            @foreach ($brands as $brand )
                <a href="{{route('single-brand',$brand->id)}}">
                    <img src="{{ @App::make('url')->to('/') . '/storage' . $brand->logo}}" alt="{{$brand->name}}">
                </a>
            @endforeach
        </div>
    </div>
@endsection
