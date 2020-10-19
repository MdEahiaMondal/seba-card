@section('title', 'লগ ইন করুন')
@extends('auth.layouts.app')
@section('from')
    <div class="ibox-content">
        <h2 class="text-center font-bold p-4">লগ ইন করুন</h2>
        <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                       placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email"
                       autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" placeholder="Password"
                       class="form-control @error('password') is-invalid @enderror" name="password" required
                       autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ password }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b font-bold">লগ ইন</button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    <small>* পাসওয়ার্ড ভুলে গেছেন?</small>
                </a>
            @endif
        </form>
    </div>
@endsection
