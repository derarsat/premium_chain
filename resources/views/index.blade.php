@extends('layouts.front')
@section('title','Home')
@section('content')
    <div class="relative">
        @if(isset($settings))
            <video autoplay muted loop controls style="width: 100%" src="{{URL::asset('uploads/'.$settings->video)}}"></video>
        @endif
        <div
            class="text-white bg-gradient-to-t from-[rgba(250,250,250,1)] to-transparent via-[rgba(0,0,0,0.4)] absolute inset-0 flex items-center justify-center flex-col gap-4">
            <h1 class="text-5xl flex-col flex text-center">
                <span class="font-light">EVERY CHALLENGE</span>
                <span class="font-black">HAS A SOLUTION</span>
            </h1>
            <p class="max-w-4xl mx-auto text-center">
                Signature Hospitality brings change and success to the forefront of a brand or business.
                We believe in the power of positive experiences that can help a brand tackle its problems, pinpoint the
                areas for improvement, and soar to new and exciting heights.
            </p>
        </div>
    </div>

    <div class="max-w-5xl py-24 px-4 lg:px-0 mx-auto">
        <h1 class="text-5xl flex-col flex text-center">
            <span class="font-light">THE CENTER OF</span>
            <span class="font-black">OUR HOSPITALITY </span>
        </h1>
        <p class="text-center my-6">
            Premium Chain travels the world with operations in 8 diverse countries.
            Headquartered in Riyadh, our consultancy and management agency boasts 25 years of experience as the forefront of our work.
            With various projects in the food and beverage industry, Premium Chain provides businesses with consulting services that include branding, design,  operations, human resources, research and development, franchising, and procurement.
            With our expertise and your business, we can hone in on the challenges, build an improvement plan, and create new and exciting success stories.
        </p>
        <div class="flex justify-center">
            <button class="bg-[#DCDAD4] text-black px-4 py-2 rounded-md">Read More</button>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 lg:px-0">
        <img src="{{asset("/skyline.webp")}}" alt="">
    </div>
    <div class="my-24">
        <h1 class="text-5xl text-center uppercase">
            <span class="font-light">our</span>
            <span class="font-black">Divisions </span>
        </h1>
        <p class="text-center">Premium Chain can provide businesses with the following services to grow and find success. </p>
        <div class="max-w-5xl mx-auto px-4 lg:px-0 grid grid-cols-2 gap-12 mt-8">
            <img src="{{asset("/consultancy-card.webp")}}" alt="">
            <img src="{{asset("/food-bev-card.webp")}}" alt="">
        </div>
    </div>

@endsection
