<div id="locations">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js&callback=setMap"
        {{--        src="https://maps.googleapis.com/maps/api/js?key={{env('MAP_KEY')}}&callback=initMaps"--}}
        defer></script>
    <div class="container">
        <div class="grid grid-cols-1 gap-6">
            <h1 class="text-4xl lg:text-5xl text-center uppercase">
                <span class="font-light">an</span>
                <span class="font-bold">international range </span>
            </h1>
            <p class="text-center">
                With the help of the chain, our clients have turned a new page on their businesses to find
                success
                in various corners of the world.
            </p>
            {{--Top--}}
            <div class="grid grid-cols-3 lg:grid-cols-6 gap-6">
                @foreach($brands as $year => $brands)

                    <button id="{{$year}}" data-dropdown-toggle="dropdown"
                            class="bg-gray-500 text-white px-4 py-2"
                            type="button">{{$year}}
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdown"
                         class="z-10 hidden text-white">
                        <ul class=""
                            aria-labelledby="{{$year}}">
                            @foreach($brands as $key => $brand)
                                <div class="text-center area-zebra px-3 py-2 cursor-pointer hover:scale-105 transform transition duration-300" onclick="setMap({{$brand}})">
                                    <img class="w-64" src="{{ @App::make('url')->to('/') . '/storage' . $brand->light_logo}}"
                                         alt="{{$brand->name}}">
                                    <div>
                                        @foreach($brand->areas as $area)
                                            <p class="my-2 font-light">
                                                {{$area->name}}
                                            </p>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </ul>
                    </div>

                @endforeach
            </div>
            {{--End Top--}}

            <div id="map" class="aspect-[3/2] lg:aspect-[3/1]">

            </div>
        </div>
    </div>
</div>
<script>
    const mapOptions = [
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

    function initMaps() {
        const mapsWrap = document.querySelectorAll(".map");
        for (let i = 0; i < mapsWrap.length; i++) {
            let map = mapsWrap[i]
            let mapId = map.getAttribute("id").replaceAll(" ", "-");
            let data = JSON.parse(map.getAttribute("data-areas"))
            if (!data[0]) {
                return
            }
            let m = new google.maps.Map(document.getElementById(mapId), {
                zoom: 10,
                center: {lat: Number(data[0].lat), lng: Number(data[0].lng)}
            });
            var markers = []
            var bounds = new google.maps.LatLngBounds();
            for (let i = 0; i < data.length; i++) {
                const area = data[i]
                new google.maps.Marker({
                    position: {lat: Number(area.lat), lng: Number(area.lng)},
                    map: m,
                    title: "the chain"
                });
                markers.push({lat: Number(area.lat), lng: Number(area.lng)})
                new google.maps.Circle({
                    strokeColor: '#ccc',
                    strokeOpacity: 1,
                    strokeWeight: 3,
                    map: m,
                    center: {lat: Number(area.lat), lng: Number(area.lng)}, // Same as marker position
                    radius: 25000 // Radius in meters
                });
            }
            for (var s = 0; s < markers.length; s++) {
                bounds.extend(markers[s]);
            }


            markers.length > 1 && m.fitBounds(bounds);
            m.setOptions({styles: mapOptions});
        }
    }


    function setMap(brand) {
        let map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            // center: {lat: Number(data[0].lat), lng: Number(data[0].lng)}
        });
    }
</script>
