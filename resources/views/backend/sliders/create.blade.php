@section('title', 'স্লাইডার তৈরি করুন')
@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">হোম</a>
                </li>
                <li class="breadcrumb-item">
                    <a>স্লাইডার</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>তৈরি করুন</strong>
                </li>
            </ol>
            <a href="{{ route('sliders.index') }}" class="btn btn-sm btn-primary pull-right m-t-n-md" type="submit"><i
                        class="fa fa-chevron-left"></i> <strong>ফিরে যান</strong></a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-6">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('sliders.store') }}">
                                    @csrf
                                    @include('backend.sliders.element')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox-content h-200">
                    <img id="image-field" class="d-block w-100" height="230px" src="{{ asset('backend/img/preview-2.jpg') }}" alt="First slide">
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
</script>