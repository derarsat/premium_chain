<?php

namespace App\Http\Controllers;

use App\Helper\ImageHelper;
use App\Models\BrandAtmosphereImage;
use Illuminate\Http\Request;

class BrandAtmosphereImageController extends Controller
{
    use ImageHelper;

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image',

        ]);
        $files = ['image'];
        $hero_image = new BrandAtmosphereImage();
        for ($i = 0; $i < count($files); $i++) {
            $file_name = $files[$i];
            // Logo
            if ($request->file($file_name)) {
                $imageFile = $request->file($file_name);
                $imagePath = $file_name . '/';
                $imageUrl = $this->imageUploader($imageFile, $imagePath);
                $hero_image->$file_name = $imageUrl;
            }
        }
        $hero_image->brand_id = $request->brand_id;
        $hero_image->save();
        return redirect()->back();
    }


    public function destroy(Request $request)
    {
        $image = BrandAtmosphereImage::where('id', '=', $request->id);
        $image->delete();
        return redirect()->back();
    }
}
