@extends('layouts.front')

@section('title','Contact us')

@section('content')
    <div class="py-44">
        <div class="max-w-5xl mx-auto px-4 lg:px-0">
            @if(session()->has('message'))
                <p class="bg-green-500 text-white p-4 mb-6 rounded-md text-center"> {{ session()->get('message') }}</p>
            @endif
            <h1 class="text-2xl font-black uppercase">
                @if(request()->type === 'carriers')
                    Join Our Team and grow your  career with us
                @endif
                @if(request()->type === 'investment')
                    Interested in joining our future Vision?
                    <p class="font-medium text-base mt-2">
                        Kindly fill in the below form and our business development team will contact you as soon as
                        possible
                    </p>
                @endif
                @if(request()->type === 'marketing')
                    Want to connect with our marketing department?
                    <p class="font-medium text-base mt-2">
                        Send your requirements to marketing signature, our team is always open for opportunities
                    </p>
                @endif
            </h1>
            {{--Form--}}
            <form action="{{route('submit-contact-use')}}" method="post" enctype="multipart/form-data" class="mt-12 grid grid-cols-1 gap-8">
                @csrf
                <input type="hidden" value="{{request()->type}}" name="type">
                <div>
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email">
                </div>
                @if(request()->type === 'carriers' || request()->type === 'investment' )
                    <div>
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                @endif
                @if(request()->type === 'investment' )
                    <div>
                        <label for="company_name">Company Name</label>
                        <input type="text" name="company_name" id="company_name">
                    </div>
                    <div>
                        <label for="company_website">Company Website</label>
                        <input type="url" name="company_website" id="company_website">
                    </div>
                    <div>
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" id="phone">
                    </div>
                @endif
                @if(request()->type === 'marketing')
                    <div>
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                @endif
                @if(request()->type === 'carriers')
                    <div>
                        <label for="position">Position interested in</label>
                        <input type="text" name="position" id="position">
                    </div>
                    <div>
                        <label for="cv">Upload your cv
                            <br>
                            <span class="opacity-70">Signature Hospitality travels the world with operations in 8 diverse countries.</span>
                        </label>
                        <input type="file" name="cv" id="cv">
                    </div>
                @endif
                <div class="flex justify-center">
                    <button class="bg-black text-white py-3 px-4 rounded">Submit Form</button>
                </div>
            </form>
        </div>
    </div>
@endsection
