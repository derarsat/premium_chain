<form class="p-4 rounded" method="POST" action="{{ route('brands.store') }}?model=area">
    @csrf
    <h1 class="py-4 font-medium text-2xl text-gray-700">Create new area</h1>
    <div class="grid grid-cols-3 gap-6">
        <div>
            <label for="name">Area name</label>
            <input type="text" name="name" id="name" placeholder="Enter area name" required />
        </div>

        <div>
            <label for="brand_id">Select brand</label>
            <select name="brand_id" id="brand_id">
                @foreach ($brands as $brand)
                <option value="{{$brand->id}}">
                    {{$brand->name}}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="country_id">Select country</label>
            <select id="country_id" name="country_id">
                @foreach ($countries as $country)
                <option value="{{$country->id}}">
                    {{$country->name}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="">
            <input readonly name="lat" type="text" id="lat">
            <input readonly name="lng" type="text" id="lng">
        </div>

        <input type="text" id="pac-input" style="position: absolute;top: 2.5%;left: 2.5%;width: 95% !important;">
        <div id="map" class="col-span-3 aspect-[3/1]">

        </div>
    </div>
    <input type="submit" value="Save area" />
</form>


<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcUJ7w3rr11sYnuJsPlJxkzsgaV_2SAnA&callback=initMap&libraries=places&v=weekly"
    defer></script>
<script>
    let map;
    const myLatLng = { lat: 33.8626162, lng: 35.5273027 };
    document.getElementById("lat").value = 33.8626162
    document.getElementById("lng").value = 35.5273027
    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: myLatLng,
            zoom: 8,
        });
        const draggableMarker = new google.maps.Marker({
            map,
            position: myLatLng,
            draggable: true,
        });

        draggableMarker.addListener("dragend", (event) => {
            const position = draggableMarker.position;
            document.getElementById("lat").value = position.lat()
            document.getElementById("lng").value = position.lng()
        });

        var searchBox = new google.maps.places.SearchBox(document.getElementById('pac-input'));
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(document.getElementById('pac-input'));
        google.maps.event.addListener(searchBox, 'places_changed', function () {
            searchBox.set('map', null);


            var places = searchBox.getPlaces();

            var bounds = new google.maps.LatLngBounds();
            var i, place;
            for (i = 0; place = places[i]; i++) {
                (function (place) {
                    console.log(place)
                    draggableMarker.setPosition({ lat: place.geometry.location.lat(), lng: place.geometry.location.lng() })
                    bounds.extend(place.geometry.location);
                    draggableMarker.bindTo('map', searchBox, 'map');
                }(place));

            }
            map.fitBounds(bounds);
            searchBox.set('map', map);
            map.setZoom(Math.min(map.getZoom(), 12));

        });
    }

</script>
