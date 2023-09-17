@extends('layouts.front')
@section("title")
    Stay Connected
@endsection
@section('content')
    <div class="relative">
        <img class="w-screen min-h-[70vh]" src="{{asset('/get-in-touch.webp')}}" alt="Get in touch">
        <div
            class="absolute bg-gradient-to-t from-[rgba(250,250,250,1)] to-transparent via-[rgba(0,0,0,0.4)] inset-0 text-white text-center flex items-center justify-center flex-col z-10">
            <div class="max-w-4xl px-4 lg:px-0 flex flex-col gap-8">
                <h1 class="text-3xl lg:text-5xl font-bold">Get in Touch </h1>
                <h4 class="font-medium">Signature Hospitality travels the world with operations in 8 diverse countries.
                    Headquartered in Riyadh, our consultancy and management agency boasts 25 years of experience as the
                    forefront of our work. </h4>
            </div>
        </div>
    </div>
    <div class="max-w-7xl flex flex-col gap-8 mx-auto font-black text-lg uppercase text-center py-24">
        <a href="{{route('contact-us-view','carriers')}}" class="bg-[#DCDAD4] rounded-md py-4">Carriers</a>
        <a href="{{route('contact-us-view','investment')}}" class="bg-[#DCDAD4] rounded-md py-4">Investment opportunities</a>
        <a href="{{route('contact-us-view','marketing')}}" class="bg-[#DCDAD4] rounded-md py-4">Marketing & public relations</a>
    </div>
    <div class="max-w-7xl flex flex-col gap-8 mx-auto  text-center py-24">
        <h1 class="text-3xl lg:text-5xl font-medium uppercase">Signature <span class="font-black">Digital</span></h1>
        <p>
            With the help of Signature Hospitality, our clients have turned a new page <br> on their businesses to find
            success in various corners of the world.
        </p>
    </div>

    <div class="flex items-center justify-center gap-4">
        <a href="#"><img class="w-14" src="{{asset('/facebook-button.png')}}" alt="Premium chain facebook link"></a>
        <a href="#"><img class="w-14" src="{{asset('/instagram-button.png')}}" alt="Premium chain instagram link"></a>
        <a href="#"><img class="w-14" src="{{asset('/linkedin-button.png')}}" alt="Premium chain linkedin link"></a>
    </div>
@endsection