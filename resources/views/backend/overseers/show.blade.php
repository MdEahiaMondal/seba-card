@section('title', 'উপদর্শক')
@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">হোম</a>
                </li>
                <li class="breadcrumb-item">
                    <a>উপদর্শক</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>উপদর্শক</strong>
                </li>
            </ol>
        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Profile Detail</h5>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right">
                            <img alt="image" class="img-fluid" src="{{ asset('uploads/overseers/'.$overseer->image) }}">
                        </div>
                        <div class="ibox-content profile-content">
                            <h4><strong>{{ @$overseer->name }}</strong></h4>
                            <p><i class="fa fa-map-marker"></i> {{ $overseer->home_address }}</p>
                            <h5>ইমেল</h5><p>{{ @$overseer->email }}</p>
                            <h5>ফোন</h5><p>{{ @$overseer->phone }}</p>
                            <h5>বাসার ঠিকানা</h5><p>{{ @$overseer->home_address }}</p>
                            <h5>উপাধি</h5><p>{{ @$overseer->designation }}</p>
                            <h5>ব্যাচ নাম্বার</h5><p>{{ @$overseer->batch_no }}</p>
                            <h5>যোগদান তারিখ</h5><p>{{ @$overseer->joining_date }}</p>
                            <h5>অফিসের ফোন</h5><p>{{ @$overseer->office_phone }}</p>
                            <h5>অফিসের ঠিকানা</h5><p>{{ @$overseer->office_address }}</p>
                            <h5>স্ট্যাটাস</h5><p>
                                @if(@$overseer->status == 1)
                                    <span class="badge badge-primary"><strong>Active</strong></span>
                                @else
                                    <span class="badge badge-warning"><strong>Disable</strong></span>
                                @endif</p>
                            <h5>লিঙ্গ</h5><p>{{ @$overseer->gender }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
