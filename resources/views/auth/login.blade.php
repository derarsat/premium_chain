@extends('layouts.front') @section('content')
<form method="POST" action="{{ route('login') }}" class="max-w-2xl mx-auto my-24 py-12 px-8 bg-gray-100">
    @csrf
    <h1 class="text-2xl font-medium mb-6">Login</h1>
    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{
            __("Email Address")
        }}</label>

        <div class="col-md-6">
            <input
                id="email"
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                name="email"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                autofocus
            />

            @error('email')
            <span class="invalid-feedback text-red-500 mt-2 font-light block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">{{
            __("Password")
        }}</label>

        <div class="col-md-6">
            <input
                id="password"
                type="password"
                class="form-control @error('password') is-invalid @enderror"
                name="password"
                required
                autocomplete="current-password"
            />

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            <input type="submit" class="btn btn-primary" value="Login"/>


        </div>
    </div>
</form>
@endsection
