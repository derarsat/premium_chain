@extends('layouts.front')
@section('title','Brands')
@section('content')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{env('MAP_KEY')}}&callback=initMaps"
        defer></script>
    <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
    <script src="../jquery.js"></script>
    <script src="../slick/slick.min.js"></script>
    <div class="relative ">
        <div class="min-h-[120vh]"
             style="background: url({{ @App::make('url')->to('/') . '/storage' . $brand->hero_image}})">

        </div>
        <div
            class="absolute bg-gradient-to-t from-[rgba(250,250,250,1)] to-transparent via-[rgba(0,0,0,0.4)] inset-0 text-white text-center flex items-center justify-center flex-col z-10">
            <div class="max-w-4xl px-4 lg:px-0 flex flex-col gap-8 ">
                @if($brand->light_logo)
                    <img class=" w-64 lg:w-96 mx-auto"
                         src="{{ @App::make('url')->to('/') . '/storage' . $brand->light_logo}}"
                         alt="{{$brand->name}}">
                @endif
                <h4 class="font-light stroke-text">{{$brand->description}}</h4>
            </div>
        </div>
    </div>
    <div class="max-w-5xl px-4 lg:px-0 text-center mx-auto py-12 lg:py-24">
        <h1 class="text-4xl lg:text-5xl font-light uppercase text-center mb-6">Brand <span
                class="font-bold">Atmosphere</span></h1>
        <p>{{$brand->atmosphere}}</p>
        <div class="carousel mt-12 w-full">
            @foreach ($brand->images as $image)
                <img src="{{ @App::make('url')->to('/') . '/storage' . $image->image}}" alt="" class="w-8/12 mx-auto">
            @endforeach
        </div>
    </div>
    <style>
        .slick-prev {
            left: -50px;
        }
        .slick-next {
            right: -50px;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('.carousel').slick({
                arrows: true,
                nextArrow: '<svg  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" data-slot="icon" class="slick-next !w-8 !h-8"> <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /> </svg>',
                prevArrow: '<svg  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" data-slot="icon" class="slick-prev !w-8 !h-8"> <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" /> </svg>',
            });
        });
    </script>
    <div class="container">
        <div class="max-w-4xl text-center mx-auto py-12 lg:py-24">
            <h1 class="text-4xl lg:text-5xl font-light uppercase text-center mb-6">Our <span
                    class="font-bold">Locations</span></h1>
            <p>With the help of the chain, our clients have turned a new page on their businesses to find success in
                various corners of the world. </p>
        </div>
        <div class="mb-4 ">
            <ul class="flex flex-wrap justify-center -mb-px text-sm font-light text-center" id="tab"
                data-tabs-toggle="#areas"
                role="tablist">
                @foreach($brand->areas as $area)
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg"
                                id="{{str_replace(" ","-",$area->name)}}-tab"
                                data-tabs-target="#{{str_replace(" ","-",$area->name)}}" type="button" role="tab"
                                aria-controls="{{str_replace(" ","-",$area->name)}}"
                                aria-selected="false">
                            {{$area->country->name}}
                        </button>
                    </li>
                @endforeach
            </ul>
        </div>
        <div id="tab">
            @foreach($brand->areas as $area)
                <div class="hidden rounded-lg bg-gray-50" id="{{str_replace(" ","-",$area->name)}}" role="tabpanel"
                     aria-labelledby="{{str_replace(" ","-",$area->name)}}-tab">
                    <div id="{{str_replace(" ","-",$area->name)}}-map" data-lat="{{$area->lat}}"
                         data-lng="{{$area->lng}}"
                         class="map col-span-3 aspect-[3/2] lg:aspect-[3/1]"></div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="max-w-7xl px-4 lg:px-0 mx-auto py-12 lg:py-24 grid grid-cols-1 gap-8">
        <h1 class="text-center text-4xl lg:text-5xl font-light">
            MENU & <span class="font-bold">OFFERINGS</span>
        </h1>

        <div class=" shadow-xl">

            <div class="relative ">
                <div class="min-h-[60vh]"
                     style="background: url({{ @App::make('url')->to('/') . '/storage' . $brand->menu_image}})">

                </div>
            </div>
            <p class="text-left px-4 py-12">
                {{$brand->menu_description}}
            </p>
        </div>

    </div>

    <div class="py-12 lg:py-24 max-w-7xl text-center mx-auto px-4 lg:px-0">
        <h1 class="text-center text-4xl lg:text-5xl font-light mb-12 uppercase">
            A UNIQUE <span class="font-bold">Selling Point</span>
        </h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 py-24 items-center ">
            <style>
                .with-shadow::after {
                    width: 70%;
                    content: "";
                    z-index: -10;
                    height: calc(100% + 100px);
                    right: -50px;
                    top: -50px;
                    position: absolute;
                }
            </style>
            <div class="relative with-shadow ">
                <div class="min-h-[50vh]"
                     style="background: url({{ @App::make('url')->to('/') . '/storage' . $brand->selling_point_image}})">

                </div>
            </div>
            <p class="text-left">
                {{$brand->selling_point_description}}
            </p>
        </div>
    </div>
    <div class="relative min-h-[100vh]"
         style="background: url({{ @App::make('url')->to('/') . '/storage' . $brand->footer_image}});">
        <div
            class="absolute bg-gradient-to-t from-[rgba(0,0,0,1)] to-transparent via-[rgba(0,0,0,0.4)] inset-0 text-white text-center flex items-center justify-center flex-col z-10">
            <div class="max-w-4xl px-4 lg:px-0 flex flex-col gap-8">
                <h1 class="text-4xl lg:text-5xl  uppercase">We value <span class="font-bold"> your opinion</span></h1>
                <h4 class="font-light">the chain can provide businesses with the following services to grow and find
                    success. </h4>
                <div class="flex justify-center">
                    <a href="{{route('single-brand-card',$brand->id)}}"
                       class="bg-[#DCDAD4] text-black px-8 py-3 uppercase font-medium text-xl">Rate your experience</a>
                </div>
            </div>
        </div>
    </div>


    <script>
        function initMaps() {
            const mapsWrap = document.querySelectorAll(".map");
            for (let i = 0; i < mapsWrap.length; i++) {
                let map = mapsWrap[i]
                let mapId = map.getAttribute("id").replaceAll(" ", "-");
                let lat = map.getAttribute("data-lat")
                let lng = map.getAttribute("data-lng")
                const myLatLng = {lat: Number(lat), lng: Number(lng)};
                let m = new google.maps.Map(document.getElementById(mapId), {
                    zoom: 12,
                    center: myLatLng,
                });
                let marker = new google.maps.Marker({
                    position: myLatLng,
                    map: m,
                    title: "the chain"
                });
                m.setOptions({
                    styles: [
                        {
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#212121"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "color": "#212121"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.country",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.land_parcel",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.locality",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#bdbdbd"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.neighborhood",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.text",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.business",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#181818"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#616161"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "color": "#1b1b1b"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#2c2c2c"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#8a8a8a"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#373737"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#3c3c3c"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway.controlled_access",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#4e4e4e"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#616161"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#3d3d3d"
                                }
                            ]
                        }
                    ]
                });

            }
        }
    </script>
@endsection

