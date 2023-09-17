<?php

namespace App\View\Components;

use App\Models\BrandHeroImage;
use Illuminate\View\Component;

class BrandsHeroImages extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $hero_images = BrandHeroImage::all();
        return view('components.brands-hero-images',['hero_images' => $hero_images]);
    }
}
