@section('title', 'আবেদনের বিস্তারিত')
@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">হোম</a>
                </li>
                <li class="breadcrumb-item">
                    <a>আবেদন</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>আবেদনের বিস্তারিত</strong>
                </li>
            </ol>
            <a href="{{ route('applications.lists') }}" class="btn btn-sm btn-primary pull-right m-t-n-md"><strong>পেছনে</strong></a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5><strong>আবেদনের তালিকা বিস্তারিত</strong></h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-6">
                                <label>নাম</label>
                                <p class="form-control">{{ $application->name }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>ফোন</label>
                                <p class="form-control">{{ $application->phone }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>এনআইডি</label>
                                <p class="form-control">{{ $application->nid_no }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>বাবার নাম</label>
                                <p class="form-control">{{ $application->father_name }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>বিভাগ</label>
                                <p class="form-control">{{ $application->division->bn_name }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>জেলা</label>
                                <p class="form-control">{{ $application->district->bn_name }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>উপজেলা</label>
                                <p class="form-control">{{ $application->upazila->bn_name }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>ইউনিয়ন</label>
                                <p class="form-control">{{ $application->union->bn_name }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>গ্রাম</label>
                                <p class="form-control">{{ $application->village_name }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>ওয়ার্ড নং</label>
                                <p class="form-control">{{ $application->word_no }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>হোল্ডিং নং</label>
                                <p class="form-control">{{ $application->holding_no }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>স্ট্যাটাস</label>
                                <br>
                            @if($application->activated_status == 1)
                                    <span class="badge badge-primary"><strong>সক্রিয়</strong></span>
                                @else
                                    <span class="badge badge-warning"><strong>নিষ্ক্রিয়</strong></span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
