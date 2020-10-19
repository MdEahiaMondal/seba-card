@section('title', 'নতুন পাসওয়ার্ড পেতে নিচের তথ্যগুলো দিন')
@extends('auth.layouts.app')

@section('from')

    <div class="ibox-content">
        <h2 class="text-center font-bold p-4">নতুন পাসওয়ার্ড পেতে নিচের তথ্যগুলো দিন</h2>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form class="m-t" role="form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b font-bold">পাসওয়ার্ড রিসেট লিঙ্ক প্রেরণ করুন</button>

        </form>
    </div>
@endsection
