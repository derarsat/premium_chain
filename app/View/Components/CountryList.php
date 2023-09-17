<?php

namespace App\View\Components;

use App\Models\Country;
use Illuminate\View\Component;

class CountryList extends Component
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

    public function countries(){
        return Country::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.country-list');
    }
}