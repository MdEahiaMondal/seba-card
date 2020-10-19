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
            <a href="{{ route('sliders.create') }}" class="btn btn-sm btn-primary pull-right m-t-n-md" type="submit"><i
                    class="fa fa-plus"></i> <strong>তৈরি করুন</strong></a>
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

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
