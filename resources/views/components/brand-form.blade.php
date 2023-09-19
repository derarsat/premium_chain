<form enctype="multipart/form-data" class=" p-4 rounded" method="POST" action="{{ route('brands.store') }}?model=brand">
    @csrf
    <h1 class="py-4 font-light text-2xl text-gray-700">Create new brand</h1>
    <div class="grid grid-cols-3 gap-4">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter brand name" required>
        </div>
        <div>
            <label for="selling_point_description">Selling point description</label>
            <input type="text" name="selling_point_description" id="selling_point_description"
                placeholder="Enter brand menu description" required>
        </div>
        <div>
            <label for="menu_description">Menu description</label>
            <input type="text" name="menu_description" id="menu_description" placeholder="Enter brand menu description"
                required>
        </div>
        <div>
            <label for="color">Brand Color</label>
            <input style="padding:5px;height: 40px" type="color" name="color" id="color" required>
        </div>
        <div>
            <label for="hero_image">Hero image</label>
            <input id="hero_image" name="hero_image" type="file">
        </div>
        <div>
            <label for="menu_image">Menu image</label>
            <input id="menu_image" name="menu_image" type="file">
        </div>
        <div>
            <label for="rating_icon">Rating icon</label>
            <input id="rating_icon" name="rating_icon" type="file">
        </div>
        <div>
            <label for="selling_point_image">Selling point image</label>
            <input id="selling_point_image" name="selling_point_image" type="file">
        </div>



        <div>
            <label for="page_background">Page background</label>
            <input id="page_background" name="page_background" type="file">
        </div>
        <div>
            <label for="page_logo">Page logo</label>
            <input id="page_logo" name="page_logo" type="file">
        </div>
        <div>
            <label for="logo">Logo</label>
            <input id="logo" name="logo" type="file">
        </div>
        <div>
            <label for="footer_image">Footer image</label>
            <input id="footer_image" name="footer_image" type="file">
        </div>
        <div class="col-span-3">
            <label for="description">Description</label>
            <textarea class="h-32" name="description" id="description" placeholder="Enter brand description" required></textarea>
        </div>
    </div>
    <input type="submit" value="Save Brand">
</form>
