@extends('layouts.front')
@section('title','Home')
@section('content')
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <main class="grid grid-cols-1 gap-12 lg:gap-24">
        <div class="relative hidden lg:block">
            <div class="hidden lg:block">
                @if(isset($settings))
                    <video width="100%" height="100%" autoplay muted loop controls style="object-fit: cover"
                           src="{{URL::asset('uploads/'.$settings->video)}}"></video>
                @endif
            </div>
            <div
                class="px-4 lg:px-0 text-white bg-gradient-to-t from-[rgba(250,250,250,1)] to-transparent via-[rgba(0,0,0,0.4)] absolute inset-0 flex items-center justify-center flex-col gap-4">
                <h1 class="text-4xl lg:text-5xl flex-col flex text-center">
                    <span class="font-light">EVERY CHALLENGE</span>
                    <span class="font-bold">HAS A SOLUTION</span>
                </h1>
                <p class="max-w-4xl mx-auto text-center">
                    Signature Hospitality brings change and success to the forefront of a brand or business.
                    We believe in the power of positive experiences that can help a brand tackle its problems, pinpoint
                    the
                    areas for improvement, and soar to new and exciting heights.
                </p>
            </div>
        </div>
        <div class="relative lg:hidden block min-h-[80vh]">
            <div id="particles-js" class="z-30"></div>

            {{--            <div class="hidden lg:block">--}}
{{--                @if(isset($settings))--}}
{{--                    <video width="100%" height="100%" autoplay muted loop controls style="object-fit: cover"--}}
{{--                           src="{{URL::asset('uploads/'.$settings->video)}}"></video>--}}
{{--                @endif--}}
{{--            </div>--}}
            <div
                class="px-4 py-8 lg:px-0 text-white absolute inset-0 flex items-center justify-center flex-col gap-4">
                <h1 class="text-4xl lg:text-5xl flex-col flex text-center">
                    <span class="font-light">EVERY CHALLENGE</span>
                    <span class="font-bold">HAS A SOLUTION</span>
                </h1>
                <p class="max-w-4xl mx-auto text-center">
                    Signature Hospitality brings change and success to the forefront of a brand or business.
                    We believe in the power of positive experiences that can help a brand tackle its problems, pinpoint
                    the
                    areas for improvement, and soar to new and exciting heights.
                </p>
            </div>
        </div>
        <div class="max-w-5xl px-4 lg:px-0 mx-auto grid grid-cols-1 gap-4">
            <h1 class="text-4xl lg:text-5xl flex-col flex text-center">
                <span class="font-light">THE CENTER OF</span>
                <span class="font-bold">OUR HOSPITALITY </span>
            </h1>
            <p class="text-center mt-2">
                Premium Chain travels the world with operations in 8 diverse countries.
                Headquartered in Riyadh, our consultancy and management agency boasts 25 years of experience as the
                forefront of our work.
                With various projects in the food and beverage industry, Premium Chain provides businesses with
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
            <div class="aspect-square with-shadow lg:aspect-[1467/466] w-full"
                 style="background: url({{asset("/skyline.webp")}})">
            </div>
        </div>
        <x-locations/>
        <div class="max-w-5xl px-4 lg:px-0  mx-auto">
            <h1 class="text-4xl lg:text-5xl text-center uppercase">
                <span class="font-light">our</span>
                <span class="font-bold">Divisions </span>
            </h1>
            <p class="text-center mt-2">Premium Chain can provide businesses with the following services to grow and
                find
                success. </p>
            <div class="max-w-5xl mx-auto px-0 lg:px-4 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-12 mt-12">
                <img class="shadow-2xl w-full" src="{{asset("/consultancy-card.webp")}}"
                     alt="Premium Chain Consultancy">
                <img class="shadow-2xl w-full" src="{{asset("/food-bev-card.webp")}}" alt="Premium Chain Food">
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
                        do, then join the team and become a valuable addition to the Premium Chain family. </h4>
                    <div class="flex justify-center">
                        <a href="{{route('contact-us-view','carriers')}}"
                           class="bg-[#DCDAD4] text-black px-4 py-2 rounded-md">Get in touch</a>
                    </div>

                </div>
            </div>
        </div>
    </main>


    <script>
        particlesJS("particles-js", {
            "particles": {
                "number": {"value": 150, "density": {"enable": true, "value_area": 800}},
                "color": {"value": "#ffffff"},
                "shape": {
                    "type": "circle",
                    "stroke": {"width": 0, "color": "#000000"},
                    "polygon": {"nb_sides": 3},
                    "image": {"src": "img/github.svg", "width": 100, "height": 100}
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {"enable": false, "speed": 1, "opacity_min": 0.1, "sync": false}
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {"enable": false, "speed": 40, "size_min": 0.1, "sync": false}
                },
                "line_linked": {"enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1},
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {"enable": false, "rotateX": 600, "rotateY": 1200}
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {"enable": true, "mode": "repulse"},
                    "onclick": {"enable": true, "mode": "push"},
                    "resize": true
                },
                "modes": {
                    "grab": {"distance": 400, "line_linked": {"opacity": 1}},
                    "bubble": {"distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3},
                    "repulse": {"distance": 200, "duration": 0.4},
                    "push": {"particles_nb": 4},
                    "remove": {"particles_nb": 2}
                }
            },
            "retina_detect": true
        });
    </script>
@endsection
