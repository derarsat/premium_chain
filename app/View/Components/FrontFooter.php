<?php

namespace App\View\Components;

use App\Models\Brand;
use Illuminate\View\Component;

class FrontFooter extends Component
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
        $data = [];
        $data["brands"] = Brand::get(['name', 'id']);
        $data["settings"] = \DB::table("site_settings")->get()->first();

        return view('components.front-footer', ['data' => $data]);
    }
}
