
@section('title', 'প্রোফাইল')
@extends('layouts.master')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>প্রোফাইল</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">ড্যাশবোর্ড</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>প্রোফাইল</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>প্রোফাইল বিশদ</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-fluid"
                                     @if(auth()->user())
                                        src="{{ asset('uploads/users/'.auth()->user()->image) }}"
                                     @endif>
                            </div>
                            <div class="ibox-content প্রোফাইল-content">
                                <h4><strong>{{ auth()->user()->name ?? '' }}</strong></h4>
                                <p><i class="fa fa-google-plus"> </i> {{auth()->user()->email ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>প্রোফাইল ক্রিয়াকলাপ</h5>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <div class="feed-activity-list">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">প্রোফাইল</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="প্রোফাইল-tab" data-toggle="tab" href="#প্রোফাইল" role="tab" aria-controls="প্রোফাইল" aria-selected="false">পাসওয়ার্ড</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active mt-5" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <form method="post" action="{{ route('profiles.update', auth()->user()->id ?? '') }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="name">নাম</label>
                                                    <input type="text" value="{{ auth()->user()->name ?? '' }}" name="name" class="form-control" id="name">
                                                    @error('name')
                                                    <span class="help-block m-b-none text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <input type="hidden" name="info" value="info">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">ইমেল ঠিকানা</label>
                                                    <input type="email" value="{{ auth()->user()->email ?? ''  }}" name="email" class="form-control" id="exampleInputEmail1">
                                                    @error('email')
                                                    <span class="help-block m-b-none text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>ছবি</label>
                                                    <div class="custom-file">
                                                        <input id="logo"
                                                               type="file"
                                                               name="photo"
                                                               class="custom-file-input">
                                                        <label for="logo" class="custom-file-label">Choose file...</label>
                                                    </div>
                                                    @error('photo')
                                                    <span class="help-block m-b-none text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <button type="submit" class="btn btn-primary">হালনাগাদ</button>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade mt-5" id="প্রোফাইল" role="tabpanel" aria-labelledby="প্রোফাইল-tab">
                                            <form method="post" action="{{ route('profiles.update', auth()->user()->id ?? '') }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="current_password">বর্তমান পাসওয়ার্ড</label>
                                                    <input type="password" name="current_password" class="form-control" id="current_password">
                                                    @error('current_password')
                                                    <span class="help-block m-b-none text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">নতুন পাসওয়ার্ড</label>
                                                    <input type="password" name="password" class="form-control" id="password">
                                                    @error('password')
                                                    <span class="help-block m-b-none text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="password_confirmation">পাসওয়ার্ড নিশ্চিত করুন</label>
                                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                                                </div>
                                                <button type="submit" class="btn btn-primary">হালনাগাদ</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
