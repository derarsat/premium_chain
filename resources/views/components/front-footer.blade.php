<div class="bg-black">
    <div class="container text-white py-8">
        <a href="/">
            <img class="w-44" src="{{asset('premium-chain.png')}}" alt="Premium Chain">

        </a>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 py-12">
            <div class="flex-col flex gap-4">
                <a href="{{route('front.about')}}">About</a>
                <a href="{{route('front.about')}}">Divisions</a>
                <a href="{{route('front-brands.index')}}">Brands</a>
                <a href="#locations">Locations</a>
                <a href="{{route('stay-connected')}}">Stay Connected</a>
            </div>
            <div class="flex-col flex gap-4">
                @foreach($data['brands'] as $brand)
                    <a href="{{route('single-brand',$brand->id)}}">{{$brand->name}}</a>
                @endforeach
            </div>
            @if($data['settings'])
                <div class="flex-col flex gap-4">
                    <a href="{{route('stay-connected')}}">Get in touch</a>
                    <a href="tel:{{$data['settings']->phone}}">{{$data['settings']->phone}}</a>
                    <a href="mailto:{{$data['settings']->email}}">{{$data['settings']->email}}</a>
                    <div class="flex items-center gap-4">
                        <a href="{{$data['settings']->facebook}}"><img src="{{asset('ic_facebook.png')}}" alt=""></a>
                        <a href="{{$data['settings']->instagram}}"><img src="{{asset('ic_insta.png')}}" alt=""></a>
                        <a href="{{$data['settings']->linkedin}}"><img src="{{asset('ic_linkedin.png')}}" alt=""></a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
