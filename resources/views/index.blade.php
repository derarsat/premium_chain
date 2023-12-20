@extends('layouts.front')
@section('title','Home')
@section('content')
    <main class="grid grid-cols-1 gap-12 lg:gap-24">
        <div class="relative block">

            <div class="hidden lg:block">
                @if(isset($settings))
                    <video width="100%" height="100%" autoplay muted loop controls style="object-fit: cover"
                           src="{{URL::asset('uploads/'.$settings->video)}}"></video>
                @endif
            </div>
            <div class="block lg:hidden h-[90vh] overflow-hidden">
                @if(isset($settings))
                    <video width="100%" height="100%" autoplay muted loop controls style="object-fit: cover"
                           src="{{URL::asset('uploads/'.$settings->mobile_video)}}"></video>
                @endif
            </div>
            <div
                class="px-4 lg:px-0 text-white bg-gradient-to-t from-[rgba(250,250,250,1)] to-transparent via-[rgba(0,0,0,0.4)] absolute inset-0 flex items-center justify-center flex-col gap-4">



                <h1 class="text-4xl lg:text-5xl flex-col flex text-center items-center justify-center gap-12">
                    <img class="w-32" src="{{asset("/the-chain.webp")}}"
                         alt="the chain">
                    <img class="w-64" src="{{asset("/build-in.webp")}}"
                         alt="the chain Consultancy">
                </h1>
                <p class="max-w-4xl mx-auto text-center mt-8">
                    the chain brings change and success to the forefront of a brand or business.
                    We believe in the power of positive experiences that can help a brand tackle its problems, pinpoint
                    the
                    areas for improvement, and soar to new and exciting heights.
                </p>
                <a href="#the-chain-travels">
                    <img  class="w-12" src="{{asset("/scroll-down-button.webp")}}"
                          alt="the chain">
                </a>
            </div>
        </div>
        <div class="max-w-5xl px-4 lg:px-0 mx-auto grid grid-cols-1 gap-4">
            <h1 class="text-4xl lg:text-5xl flex-col flex items-center justify-center gap-8 text-center">
                <img class="w-32" src="{{asset("/the-chain.webp")}}"
                     alt="the chain">
                <img class="w-64" src="{{asset("/build-in.webp")}}"
                     alt="the chain Consultancy">
            </h1>
            <p class="text-center mt-2" id="the-chain-travels">
                the chain travels the world with operations in 8 diverse countries.
                Headquartered in Riyadh, our consultancy and management agency boasts 25 years of experience as the
                forefront of our work.
                With various projects in the food and beverage industry, the chain provides businesses with
                consulting
                services that include branding, design, operations, human resources, research and development,
                franchising,
                and procurement.
                With our expertise and your business, we can hone in on the challenges, build an improvement plan, and
                create new and exciting success stories.
            </p>
            <div class="flex justify-center">
                <button class="bg-[#DCDAD4] text-black px-4 overflow-hidden py-2 rounded-md mt-2">Read More</button>
            </div>
        </div>
        <style>
            .with-shadow::after {
                width: 60%;
                content: "";
                z-index: -10;
                height: 100%;
                right: -75px;
                top: 75px;
                position: absolute;
            }
        </style>
        <div class="container mb-12 relative px-4 lg:px-0 mx-auto">
            <div class="aspect-square with-shadow lg:aspect-[1467/777] w-full"
                 style="background: url({{asset("/skyline.webp")}})">
            </div>
        </div>
        <x-locations/>
        <div class="max-w-6xl px-4 lg:px-0  mx-auto" id="divisions">
            <h1 class="text-4xl lg:text-5xl text-center uppercase">
                <span class="font-light">our</span>
                <span class="font-bold">Divisions </span>
            </h1>
            <p class="text-center mt-2">the chain can provide businesses with the following services to grow and
                find
                success. </p>
            <div class="w-full mx-auto px-0 lg:px-0 grid grid-cols-1 lg:grid-cols-3 gap-12 mt-12">
                <img class="shadow-2xl w-full" src="{{asset("/card-1.webp")}}"
                     alt="the chain Consultancy">
                <img class="shadow-2xl w-full" src="{{asset("/card-2.webp")}}" alt="the chain Food">
                <img class="shadow-2xl w-full" src="{{asset("/card-3.webp")}}" alt="the chain Food">
            </div>
        </div>
        <div class="relative min-h-[70vh] lg:min-h-screen"
             style="background: url({{asset('stay-connected.webp')}});background-position: center">
            <div
                class="absolute bg-gradient-to-t from-[rgba(0,0,0,1)] to-transparent via-[rgba(0,0,0,0.4)] inset-0 text-white text-center flex items-center justify-center flex-col z-10">
                <div class="max-w-4xl px-4 lg:px-0 flex flex-col gap-8">
                    <h1 class="text-4xl lg:text-5xl font-bold uppercase"><span class="font-light">Join</span> Our Team
                    </h1>
                    <h4 class="font-light">If you have the passion, drive, and devotion to hospitality and success as we
                        do, then join the team and become a valuable addition to the chain family. </h4>
                    <div class="flex justify-center">
                        <a href="{{route('contact-us-view','carriers')}}"
                           class="bg-[#DCDAD4] text-black px-4 py-2 rounded-md">Get in touch</a>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
