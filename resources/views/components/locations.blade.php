<div id="locations">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{env('MAP_KEY')}}&callback=initMaps"
        defer></script>
    <div class="container">
        <div class="grid grid-cols-1 gap-6">
            <h1 class="text-4xl lg:text-5xl text-center uppercase">
                <span class="font-light">an</span>
                <span class="font-bold">international range </span>
            </h1>
            <p class="text-center">
                With the help of Premium Chain, our clients have turned a new page on their businesses to find
                success
                in various corners of the world.
            </p>
            {{--Loop--}}
            {{--Top--}}
            <ul class="flex flex-wrap justify-center -mb-px text-sm font-light text-center" id="tab"
                data-tabs-toggle="#countries"
                role="tablist">
                @foreach($countries as $country)
                    <li class="mr-2" role="presentation">
                        <button class="inline-block border-b-2 rounded-t-lg"
                                id="{{str_replace(" ","-",$country->name)}}-tab"
                                data-tabs-target="#{{str_replace(" ","-",$country->name)}}" type="button" role="tab"
                                aria-controls="{{str_replace(" ","-",$country->name)}}"
                                aria-selected="false">

                            <span id="{{str_replace(" ","-",$country->name)}}dropdownHoverButton"
                                  data-dropdown-toggle="{{str_replace(" ","-",$country->name)}}dropdownHover"
                                  data-dropdown-trigger="hover"
                                  class="font-light rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center "
                                  type="button">
                                {{$country->name}}
                            </span>
                            <!-- Dropdown menu -->
                            <div id="{{str_replace(" ","-",$country->name)}}dropdownHover"
                                 class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                                <ul class="py-2 text-sm text-gray-700 "
                                    aria-labelledby="{{str_replace(" ","-",$country->name)}}dropdownHoverButton">
                                    @foreach($country->areas as $area)
                                        <li>
                                            <span
                                                class="block px-4 py-2 hover:bg-gray-100 ">{{$area->name}}</span>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </button>
                    </li>
                @endforeach
            </ul>
            {{--End Top--}}
            <div id="tab">
                @foreach($countries as $country)
                    <div class="hidden  rounded-lg bg-gray-50" id="{{str_replace(" ","-",$country->name)}}"
                         role="tabpanel"
                         aria-labelledby="{{str_replace(" ","-",$country->name)}}-tab">
                        <div id="{{str_replace(" ","-",$country->name)}}-map" data-areas="{{$country->areas}}"
                             class="map col-span-3 aspect-[3/2] lg:aspect-[3/1]">
                            {{$country->name}}
                        </div>
                    </div>
                @endforeach
            </div>
            {{--End Loop--}}
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
                    title: "Premium Chain"
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
</script>
