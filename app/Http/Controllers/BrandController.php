<?php

namespace App\Http\Controllers;

use App\Helper\ImageHelper;
use App\Models\Country;
use App\Models\Brand;
use App\Models\Area;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    use ImageHelper;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.brands.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = $request->model;
        switch ($model) {
            case 'country':
                $validated = $request->validate([
                    'name' => 'required|max:255',
                ]);
                $country = new Country();
                $country->name = $validated["name"];
                $country->save();

                break;
            case 'brand':
                $validated = $request->validate([
                    'name' => 'required|max:255',
                    'description' => 'required',
                    'atmosphere' => 'required',
                    'selling_point_description' => 'required',
                    'menu_description' => 'required',
                    'color' => 'required',

                ]);
                $brand = new Brand();
                $brand->name = $validated["name"];

                $brand->atmosphere = $validated["atmosphere"];
                $brand->color = $validated["color"];
                $brand->description = $validated["description"];
                $brand->selling_point_description = $validated["selling_point_description"];
                $brand->menu_description = $validated["menu_description"];

                $files = ['dark_logo', 'footer_image', 'light_logo', '', 'colored_logo', 'page_background', 'selling_point_image', 'menu_image', 'hero_image', 'rating_icon'];
                for ($i = 0; $i < count($files); $i++) {
                    $file_name = $files[$i];
                    // Logo
                    if ($request->file($file_name)) {
                        $imageFile = $request->file($file_name);
                        $imagePath = $file_name . '/';
                        $imageUrl = $this->imageUploader($imageFile, $imagePath);
                        $brand->$file_name = $imageUrl;
                    }
                }
                $brand->save();
                break;
            case 'area':
                $validated = $request->validate([
                    'name' => 'required',
                    'lat' => 'required',
                    'founded' => 'required',
                    'lng' => 'required',
                    'brand_id' => 'required',
                    'country_id' => 'required',
                ]);
                $area = new Area();
                $area->name = $validated["name"];
                $area->founded = $validated["founded"];
                $area->lat = $validated['lat'];
                $area->lng = $validated['lng'];
                $area->brand_id = $validated['brand_id'];
                $area->country_id = $validated['country_id'];
                $area->save();

                break;
            default:
                # code...
                break;

        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\brand $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\brand $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\brand $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'atmosphere' => 'required',
            'selling_point_description' => 'required',
            'menu_description' => 'required',
            'color' => 'required',
        ]);
        $brand->name = $validated["name"];
        $brand->color = $validated["color"];
        $brand->description = $validated["description"];
        $brand->atmosphere = $validated["atmosphere"];
        $brand->selling_point_description = $validated["selling_point_description"];
        $brand->menu_description = $validated["menu_description"];

        $files = ['dark_logo', 'footer_image', 'light_logo', '', 'colored_logo', 'page_background', 'selling_point_image', 'menu_image', 'hero_image', 'rating_icon'];
        for ($i = 0; $i < count($files); $i++) {
            $file_name = $files[$i];
            // Logo
            if ($request->file($file_name)) {
                $imageFile = $request->file($file_name);
                $imagePath = $file_name . '/';
                $imageUrl = $this->imageUploader($imageFile, $imagePath);
                $brand->$file_name = $imageUrl;
            }
        }
        $brand->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\brand $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->back();
    }
}
