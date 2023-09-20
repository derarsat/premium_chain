<?php

namespace App\Http\Controllers;

use App\Helper\ImageHelper;
use App\Models\BrandHeroImage;
use Illuminate\Http\Request;

class BrandHeroImageController extends Controller
{
    use ImageHelper;

    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => 'required|image',
            'title' => 'required|string',
        ]);
        $files = ['url'];
        $hero_image = new BrandHeroImage();
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
        $hero_image->title = $validated["title"];
        $hero_image->save();
        return redirect()->back();
    }


    public function destroy(Request $request)
    {
        $image = BrandHeroImage::where('id', '=', $request->id);
        $image->delete();
        return redirect()->back();
    }
}
