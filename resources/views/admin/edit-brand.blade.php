@extends('layouts.admin')
@section('content')
    <form enctype="multipart/form-data" class=" p-4 rounded" method="POST"
          action="{{ route('brands.update',$brand->id) }}?model=brand">
        @csrf
        @method('PUT')
        <h1 class="py-4 font-light text-2xl text-gray-700">Create new brand</h1>
        <div class="grid grid-cols-4 gap-4">
            <div>
                <label for="name">Name</label>
                <input value="{{$brand->name}}" type="text" name="name" id="name" placeholder="Enter brand name" required>
            </div>
            <div>
                <label for="color">Brand Color</label>
                <input value="{{$brand->color}}"  style="padding:5px;height: 40px" type="color" name="color" id="color" required>
            </div>
            <div></div>
            <div></div>
            <div>
                <label for="hero_image">Hero image</label>
                <input id="hero_image" name="hero_image" type="file"
                       oninput="hero_image_pic.src=window.URL.createObjectURL(this.files[0])">
                <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                    <img src="{{ @App::make('url')->to('/') . '/storage' . $brand->hero_image}}" id="hero_image_pic" alt="" class="max-w-full max-h-full">
                </div>
            </div>
            <div>
                <label for="menu_image">Menu image</label>
                <input id="menu_image" name="menu_image" type="file"
                       oninput="menu_image_pic.src=window.URL.createObjectURL(this.files[0])">
                <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                    <img src="{{ @App::make('url')->to('/') . '/storage' . $brand->menu_image}}" id="menu_image_pic" alt="" class="max-w-full max-h-full">
                </div>
            </div>
            <div>
                <label for="footer_image">Footer image</label>
                <input id="footer_image" name="footer_image" type="file"
                       oninput="footer_image_pic.src=window.URL.createObjectURL(this.files[0])">
                <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                    <img src="{{ @App::make('url')->to('/') . '/storage' . $brand->footer_image}}"  id="footer_image_pic" alt="" class="max-w-full max-h-full">
                </div>
            </div>
            <div>
                <label for="rating_icon">Rating icon</label>
                <input id="rating_icon" name="rating_icon" type="file"
                       oninput="rating_icon_pic.src=window.URL.createObjectURL(this.files[0])">
                <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                    <img src="{{ @App::make('url')->to('/') . '/storage' . $brand->rating_icon}}" id="rating_icon_pic" alt="" class="max-w-full max-h-full">
                </div>
            </div>
            <div>
                <label for="selling_point_image">Selling point image</label>
                <input id="selling_point_image" name="selling_point_image" type="file"
                       oninput="selling_point_pic.src=window.URL.createObjectURL(this.files[0])">
                <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                    <img src="{{ @App::make('url')->to('/') . '/storage' . $brand->selling_point_image}}" id="selling_point_pic" alt="" class="max-w-full max-h-full">
                </div>
            </div>
            <div>
                <label for="page_background">Page background</label>
                <input id="page_background" name="page_background" type="file"
                       oninput="page_background_pic.src=window.URL.createObjectURL(this.files[0])">
                <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                    <img src="{{ @App::make('url')->to('/') . '/storage' . $brand->page_background}}" id="page_background_pic" alt="" class="max-w-full max-h-full">
                </div>
            </div>
            <div>
                <label for="dark_logo">Dark logo</label>
                <input id="dark_logo" name="dark_logo" type="file"
                       oninput="dark_logo_pic.src=window.URL.createObjectURL(this.files[0])">
                <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                    <img src="{{ @App::make('url')->to('/') . '/storage' . $brand->dark_logo}}" id="dark_logo_pic" alt="" class="max-w-full max-h-full">
                </div>
            </div>
            <div>
                <label for="light_logo">Light logo</label>
                <input id="light_logo" name="light_logo" type="file"
                       oninput="light_logo_pic.src=window.URL.createObjectURL(this.files[0])">
                <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                    <img src="{{ @App::make('url')->to('/') . '/storage' . $brand->light_logo}}" id="light_logo_pic" alt="" class="max-w-full max-h-full">
                </div>
            </div>
            <div>
                <label for="colored_logo">Colored Logo</label>
                <input id="colored_logo" name="colored_logo" type="file"
                       oninput="colored_logo_pic.src=window.URL.createObjectURL(this.files[0])">
                <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                    <img src="{{ @App::make('url')->to('/') . '/storage' . $brand->colored_logo}}" id="colored_logo_pic" alt="" class="max-w-full max-h-full">
                </div>
            </div>

            <div class="col-span-4">
                <label for="description">Description</label>
                <textarea class="h-32" name="description" id="description" placeholder="Enter brand description"
                          required>
                    {{$brand->description}}
                </textarea>
            </div>
            <div class="col-span-4">
                <label for="selling_point_description">Selling point description</label>
                <textarea class="h-32" name="selling_point_description" id="selling_point_description"
                          placeholder="Enter selling point description" required>
                    {{$brand->selling_point_description}}
                </textarea>
            </div>
            <div class="col-span-4">
                <label for="menu_description">Menu description</label>
                <textarea class="h-32" name="menu_description" id="menu_description" placeholder="Enter menu description"
                          required>
                    {{$brand->menu_description}}
                </textarea>

            </div>
        </div>
        <input type="submit" value="Save Brand">
    </form>

@endsection
