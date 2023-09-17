<?php

namespace App\Helper;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

trait ImageHelper
{
    public function imageUploader($file, $path): string
    {
        $public_path = "/public/images/uploads/";
        $storage_path = "/storage/images/uploads/";
        $extension = $file->getClientOriginalExtension();
        $file_name = $path . Str::random(30) . '.' . $extension;
        $url = $file->storeAs($public_path, $file_name);
        $public_path = public_path($storage_path . $file_name);
        $img = Image::make($file);
        $url = preg_replace("/public/", "", $url);
        return $img->save($public_path) ? $url : '';
    }
}
