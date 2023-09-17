<?php

namespace App\View\Components;

use App\Models\Brand;
use Illuminate\View\Component;

class BrandList extends Component
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
    public function brands()
    {
        return Brand::all();
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.brand-list');
    }
}
