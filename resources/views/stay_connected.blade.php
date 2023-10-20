@extends('layouts.front')
@section("title")
    Stay Connected
@endsection
@section('content')
    <div class="relative lg:h-screen h-[70vh]"
         style="background: url({{asset('/get-in-touch.webp')}});background-position: center;background-size: cover">
        <div
            class="absolute bg-gradient-to-t from-[rgba(250,250,250,1)] to-transparent via-[rgba(0,0,0,0.4)] inset-0 text-white text-center flex items-center justify-center flex-col z-10">
            <div class="max-w-4xl px-4 lg:px-0 flex flex-col gap-8">
                <h1 class="text-4xl lg:text-5xl font-bold">Get in Touch </h1>
                <h4 class="font-light">Signature Hospitality travels the world with operations in 8 diverse countries.
                    Headquartered in Riyadh, our consultancy and management agency boasts 25 years of experience as the
                    forefront of our work. </h4>
            </div>
        </div>
    </div>
    <div
        class="max-w-7xl px-4 lg:px-0 flex flex-col gap-8 mx-auto font-bold text-lg uppercase text-center py-12 lg:py-24">
        <a href="{{route('contact-us-view','carriers')}}" class="bg-[#DCDAD4] rounded-md py-4">Careers</a>
        <a href="{{route('contact-us-view','investment')}}" class="bg-[#DCDAD4] rounded-md py-4">Investment
            opportunities</a>
        <a href="{{route('contact-us-view','marketing')}}" class="bg-[#DCDAD4] rounded-md py-4">Marketing & public
            relations</a>
    </div>
    <div class="max-w-7xl flex flex-col gap-8 mx-auto  text-center px-4 lg:px-0 py-12 lg:py-24">
        <h1 class="text-4xl lg:text-5xl font-bold uppercase">Signature Digital</h1>
        <p>
            With the help of Signature Hospitality, our clients have turned a new page <br> on their businesses to find
            success in various corners of the world.
        </p>
    </div>

    <div class="flex items-center justify-center gap-4 mb-12">
        <a href="#"><img class="w-14" src="{{asset('/facebook-button.png')}}" alt="the chain facebook link"></a>
        <a href="#"><img class="w-14" src="{{asset('/instagram-button.png')}}" alt="the chain instagram link"></a>
        <a href="#"><img class="w-14" src="{{asset('/linkedin-button.png')}}" alt="the chain linkedin link"></a>
    </div>
@endsection
