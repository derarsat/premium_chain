<?php

namespace App\View\Components;

use App\Models\Area;
use App\Models\Brand;
use App\Models\Country;
use Illuminate\View\Component;

class AreaList extends Component
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

    public function areas(){
        return Area::with('brand')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $brands = Brand::all();
        $countries = Country::all();
        return view('components.area-list',compact('brands','countries'));
    }
}
