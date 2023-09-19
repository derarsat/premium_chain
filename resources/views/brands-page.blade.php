@extends('layouts.front')

@section('content')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{env('MAP_KEY')}}&callback=initMaps"
        defer></script>

    <div class="relative">
        <img src="{{ @App::make('url')->to('/') . '/storage' . $brand->hero_image}}" alt="{{$brand->name}}">
        <div
            class="absolute bg-gradient-to-t from-[rgba(250,250,250,1)] to-transparent via-[rgba(0,0,0,0.4)] inset-0 text-white text-center flex items-center justify-center flex-col z-10">
            <div class="max-w-4xl px-4 lg:px-0 flex flex-col gap-8">
                <img class="w-96 mx-auto" src="{{ @App::make('url')->to('/') . '/storage' . $brand->logo}}"
                     alt="{{$brand->name}}">
                <h4 class="font-light">{{$brand->description}}</h4>
            </div>
        </div>
    </div>
    <div class="max-w-4xl text-center mx-auto py-24">
        <h1 class="text-3xl lg:text-5xl font-light uppercase text-center mb-6">Brand <span
                class="font-black">Atmosphere</span></h1>
        <p>Signature Hospitality travels the world with operations in 8 diverse countries. Headquartered in Riyadh, our
            consultancy and management agency boasts 25 years of experience as the forefront of our work.</p>


        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($brand->images as $image )
                    <div class="swiper-slide">
                       <div class="with-shadow">
                           <img src="{{ @App::make('url')->to('/') . '/storage' . $image->image}}" alt="{{$brand->name}}">

                       </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>


    </div>



    <script>
        const swiper = new Swiper('.swiper', {
            observer: true,
            observeParents: true,
            spaceBetween: 0,
            slidesPerView: 1,
            navigation,

            speed: 100,
            loop: true,
            autoplay: {
                delay: 2500,
            }
        })

    </script>


    <div class="container">
        <div class="max-w-4xl text-center mx-auto py-24">
            <h1 class="text-3xl lg:text-5xl font-light uppercase text-center mb-6">Our <span
                    class="font-black">Locations</span></h1>
            <p>With the help of Premium Chain, our clients have turned a new page on their businesses to find success in
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
                <div class="hidden p-4 rounded-lg bg-gray-50" id="{{str_replace(" ","-",$area->name)}}" role="tabpanel"
                     aria-labelledby="{{str_replace(" ","-",$area->name)}}-tab">
                    <div id="{{str_replace(" ","-",$area->name)}}-map" data-lat="{{$area->lat}}"
                         data-lng="{{$area->lng}}"
                         class="map col-span-3 aspect-[3/1]"></div>
                </div>
            @endforeach
        </div>
    </div>


    <div class="py-44 max-w-7xl text-center mx-auto px-4 lg:px-0">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 ">
            <div class="relative with-shadow">
                <img class="w-full " src="{{ @App::make('url')->to('/') . '/storage' . $brand->selling_point_image}}"
                     alt="GIVING BACK TO THE COMMUNITY">
            </div>
            <p class="text-left">
               {{$brand->selling_point_description}}
            </p>
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
                    title: "Premium Chain"
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

