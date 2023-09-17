@extends('layouts.front')
@section('title','Home')
@section('content')
    <div class="relative">
        @if(isset($settings))
            <video autoplay muted loop controls style="width: 100%" src="{{URL::asset('uploads/'.$settings->video)}}"></video>

        @endif
        <div
            class="text-white bg-gradient-to-t from-[rgba(250,250,250,1)] to-transparent via-[rgba(0,0,0,0.4)] absolute inset-0 flex items-center justify-center flex-col gap-4">
            <h1 class="text-5xl flex-col flex text-center">
                <span class="font-light">EVERY CHALLENGE</span>
                <span class="font-black">HAS A SOLUTION</span>
            </h1>
            <p class="max-w-4xl mx-auto text-center">
                Signature Hospitality brings change and success to the forefront of a brand or business.
                We believe in the power of positive experiences that can help a brand tackle its problems, pinpoint the
                areas for improvement, and soar to new and exciting heights.
            </p>
        </div>
    </div>
@endsection
