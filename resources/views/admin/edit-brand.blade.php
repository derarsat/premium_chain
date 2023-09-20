@extends('layouts.admin')
@section('content')
    <form enctype="multipart/form-data" class=" p-4 rounded" method="POST"
          action="{{ route('brands.update',$brand->id) }}?model=brand">
        @method('PUT')
        @csrf
        <h1 class="py-4 font-light text-2xl text-gray-700">Update {{$brand->name}}</h1>
        <div class="grid grid-cols-3 gap-4">
            <div>
                <label for="name">Name</label>
                <input type="text" value="{{$brand->name}}" name="name" id="name" placeholder="Enter brand name"
                       required>
            </div>
            <div>
                <label for="selling_point_description">Selling point description</label>
                <input type="text" value="{{$brand->selling_point_description}}" name="selling_point_description"
                       id="selling_point_description"
                       placeholder="Enter brand menu description" required>
            </div>
            <div>
                <label for="menu_description">Menu description</label>
                <input
                    value="{{$brand->menu_description}}"
                    type="text" name="menu_description" id="menu_description"
                    placeholder="Enter brand menu description"
                    required>
            </div>
            <div>
                <label for="color">Brand Color</label>
                <input value="{{$brand->color}}" style="padding:5px;height: 40px" type="color" name="color" id="color"
                       required>
            </div>
            <div></div>
            <div></div>
            <div>
                <label for="hero_image">Hero image</label>
                <input id="hero_image" name="hero_image" type="file">
                <div class="bg-gray-300 mt-2 p-4 rounded-md h-[10rem] flex items-center justify-center">
                    <img class="max-w-full max-h-full border"
                         src="{{ @App::make('url')->to('/') . '/storage' . $brand->hero_image}}" alt="">
                </div>
            </div>
            <div>
                <label for="menu_image">Menu image</label>
                <input id="menu_image" name="menu_image" type="file">
                <div class="bg-gray-300 mt-2 p-4 rounded-md h-[10rem] flex items-center justify-center">
                    <img class="max-w-full max-h-full border"
                         src="{{ @App::make('url')->to('/') . '/storage' . $brand->menu_image}}" alt="">
                </div>
            </div>
            <div>
                <label for="rating_icon">Rating icon</label>
                <input id="rating_icon" name="rating_icon" type="file">
                <div class="bg-gray-300 mt-2 p-4 rounded-md h-[10rem] flex items-center justify-center">
                    <img class="max-w-full max-h-full border"
                         src="{{ @App::make('url')->to('/') . '/storage' . $brand->rating_icon}}" alt="">
                </div>
            </div>
            <div>
                <label for="selling_point_image">Selling point image</label>
                <input id="selling_point_image" name="selling_point_image" type="file">
                <div class="bg-gray-300 mt-2 p-4 rounded-md h-[10rem] flex items-center justify-center">
                    <img class="max-w-full max-h-full"
                         src="{{ @App::make('url')->to('/') . '/storage' . $brand->selling_point_image}}" alt="">
                </div>
            </div>


            <div>
                <label for="page_background">Page background</label>
                <input id="page_background" name="page_background" type="file">
                <div class="bg-gray-300 mt-2 p-4 rounded-md h-[10rem] flex items-center justify-center">
                    <img class="max-w-full max-h-full"
                         src="{{ @App::make('url')->to('/') . '/storage' . $brand->page_background}}" alt="">
                </div>
            </div>
            <div>
                <label for="page_logo">Page logo</label>
                <input id="page_logo" name="page_logo" type="file">
                <div class="bg-gray-300 mt-2 p-4 rounded-md h-[10rem] flex items-center justify-center">
                    <img class="max-w-full max-h-full"
                         src="{{ @App::make('url')->to('/') . '/storage' . $brand->page_logo}}" alt="">
                </div>
            </div>
            <div>
                <label for="logo">Logo</label>
                <input id="logo" name="logo" type="file">
                <div class="bg-gray-300 mt-2 p-4 rounded-md h-[10rem] flex items-center justify-center">
                    <img class="max-w-full max-h-full" src="{{ @App::make('url')->to('/') . '/storage' . $brand->logo}}"
                         alt="">
                </div>
            </div>
            <div>
                <label for="footer_image">Footer image</label>
                <input id="footer_image" name="footer_image" type="file">
                <div class="bg-gray-300 mt-2 p-4 rounded-md h-[10rem] flex items-center justify-center">
                    <img class="max-w-full max-h-full"
                         src="{{ @App::make('url')->to('/') . '/storage' . $brand->footer_image}}" alt="">
                </div>

            </div>
            <div class="col-span-3">
                <label for="description">Description</label>
                <textarea class="h-32" name="description" id="description" placeholder="Enter brand description"
                          required>
                    {{$brand->description}}
                </textarea>
            </div>
        </div>
        <input type="submit" value="Save Brand">
    </form>

@endsection
