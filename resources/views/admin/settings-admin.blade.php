@extends('layouts.admin')

@section('content')
    {{$errors}}
    <div class="rounded p-6 bg-gray-50">
        <div class="bg-gray-100 rounded p-6">
            <h1 class="py-4 font-light text-2xl text-gray-700">Footer settings</h1>
            <form enctype="multipart/form-data" method="post" action="{{route('settings-controller')}}" class="grid grid-cols-1 gap-4">
                @csrf
                <div>
                    <label for="linkedIn">Home Page Video</label>
                    <input accept="video/*"  type="file" name="video" id="video" placeholder="Select home page video" required>
                </div>
                <div>
                    <label for="email">Email address</label>
                    <input value="{{$data->email ?? ''}}" type="email" name="email" id="email" placeholder="Enter email address" required>
                </div>
                <div>
                    <label for="phone">Phone number</label>
                    <input value="{{$data->phone ?? ''}}" type="text" name="phone" id="phone" placeholder="Enter phone number" required>
                </div>
                <div>
                    <label for="facebook">Facebook url</label>
                    <input value="{{$data->facebook ?? ''}}" type="url" name="facebook" id="facebook" placeholder="Enter facebook page url" required>
                </div>
                <div>
                    <label for="instagram">Instagram url</label>
                    <input value="{{$data->instagram ?? ''}}" type="url" name="instagram" id="instagram" placeholder="Enter instagram page url" required>
                </div>
                <div>
                    <label for="linkedIn">Linkedin url</label>
                    <input value="{{$data->linkedin ?? ''}}" type="url" name="linkedIn" id="linkedIn" placeholder="Enter instagram page url" required>
                </div>
                <div>
                    <input type="submit" value="Save footer data">

                </div>
            </form>
        </div>
    </div>
@endsection
