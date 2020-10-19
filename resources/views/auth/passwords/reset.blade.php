@section('title', 'পাসওয়ার্ড রিসেট করুন')
@extends('auth.layouts.app')

@section('from')
    <div class="ibox-content">
        <h2 class="text-center font-bold p-4">পাসওয়ার্ড রিসেট করুন</h2>
        <p>নতুন পাসওয়ার্ড যুক্ত করুন।</p>
        <form class="m-t" role="form" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" placeholder="Password-confirm" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">

                @error('password-confirm')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b font-bold">পাসওয়ার্ড রিসেট করুন</button>

        </form>
    </div>
@endsection
