<?php

namespace App\View\Components;

use App\Models\Area;
use App\Models\Brand;
use App\Models\Country;
use Illuminate\View\Component;

class Locations extends Component
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
        $brands = Brand::with(['areas'])->get()->groupBy('founded');


        return view('components.locations', compact('brands'));
    }
}
