@extends('layouts.admin') @section('content')

    <div class="mb-4 border-b border-gray-200">
        <ul class="flex flex-wrap -mb-px font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent"
            role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="brands-tab" data-tabs-target="#brands"
                        type="button" role="tab" aria-controls="brands" aria-selected="false">
                    Brands
                </button>
            </li>
            <li>
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="brands-tab"
                        data-tabs-target="#brands-hero-images" type="button" role="tab"
                        aria-controls="brands-hero-images"
                        aria-selected="false">
                    Brands Hero Images
                </button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="countries-tab"
                        data-tabs-target="#countries"
                        type="button" role="tab" aria-controls="countries" aria-selected="false">
                    Countries
                </button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="areas-tab" data-tabs-target="#areas"
                        type="button" role="tab" aria-controls="areas" aria-selected="false">
                    Areas
                </button>
            </li>
            <li>
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="brands-tab"
                        data-tabs-target="#brands-atmosphere-images" type="button" role="tab"
                        aria-controls="brands-atmosphere-images"
                        aria-selected="false">
                    Brands Atmosphere Images
                </button>
            </li>
        </ul>
    </div>

    <div id="myTabContent" class="rounded p-6 bg-gray-50">
        <div id="countries" role="tabpanel" aria-labelledby="countries-tab" class="bg-gray-100">
            <x-country-form/>
            <x-country-list/>
        </div>
        <div class="bg-gray-100" id="areas" role="tabpanel" aria-labelledby="areas-tab">
            <x-area-form/>
            <x-area-list/>
        </div>
        <div class="bg-gray-100" id="brands" role="tabpanel" aria-labelledby="brands-tab">
            <x-brand-form/>
            <x-brand-list/>
        </div>
        <div class="bg-gray-100" id="brands-hero-images" role="tabpanel" aria-labelledby="brands-tab">
            <x-brands-hero-images/>
        </div>
        <div class="bg-gray-100" id="brands-atmosphere-images" role="tabpanel" aria-labelledby="brands-tab">
            <x-brand-atmosphere-image/>
        </div>
    </div>

@endsection
