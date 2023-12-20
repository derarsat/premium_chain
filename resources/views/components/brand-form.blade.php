<form enctype="multipart/form-data" class=" p-4 rounded" method="POST" action="{{ route('brands.store') }}?model=brand">
    @csrf
    <h1 class="py-4 font-light text-2xl text-gray-700">Create new brand</h1>
    <div class="grid grid-cols-4 gap-4">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter brand name" required>
        </div>

        <div>
            <label for="color">Brand Color</label>
            <input style="padding:5px;height: 40px" type="color" name="color" id="color" required>
        </div>
        <div></div>
        <div>
            <label for="hero_image">Hero image</label>
            <input id="hero_image" name="hero_image" type="file"
                   oninput="hero_image_pic.src=window.URL.createObjectURL(this.files[0])">
            <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                <img src="" id="hero_image_pic" alt="" class="max-w-full max-h-full">
            </div>
        </div>
        <div>
            <label for="menu_image">Menu image</label>
            <input id="menu_image" name="menu_image" type="file"
                   oninput="menu_image_pic.src=window.URL.createObjectURL(this.files[0])">
            <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                <img src="" id="menu_image_pic" alt="" class="max-w-full max-h-full">
            </div>
        </div>
        <div>
            <label for="footer_image">Footer image</label>
            <input id="footer_image" name="footer_image" type="file"
                   oninput="footer_image_pic.src=window.URL.createObjectURL(this.files[0])">
            <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                <img src="" id="footer_image_pic" alt="" class="max-w-full max-h-full">
            </div>
        </div>
        <div>
            <label for="rating_icon">Rating icon</label>
            <input id="rating_icon" name="rating_icon" type="file"
                   oninput="rating_icon_pic.src=window.URL.createObjectURL(this.files[0])">
            <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                <img src="" id="rating_icon_pic" alt="" class="max-w-full max-h-full">
            </div>
        </div>
        <div>
            <label for="selling_point_image">Selling point image</label>
            <input id="selling_point_image" name="selling_point_image" type="file"
                   oninput="selling_point_pic.src=window.URL.createObjectURL(this.files[0])">
            <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                <img src="" id="selling_point_pic" alt="" class="max-w-full max-h-full">
            </div>
        </div>
        <div>
            <label for="page_background">Page background</label>
            <input id="page_background" name="page_background" type="file"
                   oninput="page_background_pic.src=window.URL.createObjectURL(this.files[0])">
            <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                <img src="" id="page_background_pic" alt="" class="max-w-full max-h-full">
            </div>
        </div>
        <div>
            <label for="dark_logo">Dark logo</label>
            <input id="dark_logo" name="dark_logo" type="file"
                   oninput="dark_logo_pic.src=window.URL.createObjectURL(this.files[0])">
            <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                <img src="" id="dark_logo_pic" alt="" class="max-w-full max-h-full">


            </div>
        </div>
        <div>
            <label for="light_logo">Light logo</label>
            <input id="light_logo" name="light_logo" type="file"
                   oninput="light_logo_pic.src=window.URL.createObjectURL(this.files[0])">
            <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                <img src="" id="light_logo_pic" alt="" class="max-w-full max-h-full">
            </div>
        </div>
        <div>
            <label for="colored_logo">Colored Logo</label>
            <input id="colored_logo" name="colored_logo" type="file"
                   oninput="colored_logo_pic.src=window.URL.createObjectURL(this.files[0])">
            <div class="bg-gray-200 p-4 flex items-center aspect-[3/2] justify-center">
                <img src="" id="colored_logo_pic" alt="" class="max-w-full max-h-full">
            </div>
        </div>

        <div class="col-span-4">
            <label for="description">Description</label>
            <textarea class="h-32" name="description" id="description" placeholder="Enter brand description"
                      required></textarea>
        </div>
        <div class="col-span-4">
            <label for="selling_point_description">Selling point description</label>
            <textarea class="h-32" name="selling_point_description" id="selling_point_description"
                      placeholder="Enter selling point description" required></textarea>
        </div>
        <div class="col-span-4">
            <label for="menu_description">Menu description</label>
            <textarea class="h-32" name="menu_description" id="menu_description" placeholder="Enter menu description"
                      required></textarea>

        </div>
        <div class="col-span-4">
            <label for="atmosphere">Brand Atmosphere</label>
            <textarea class="h-32" name="atmosphere" id="atmosphere" placeholder="Enter brand atmosphere"
                      required></textarea>

        </div>
    </div>
    <input type="submit" value="Save Brand">
</form>
