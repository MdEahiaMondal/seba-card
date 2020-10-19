@extends('layouts.master')
@section('title', 'কনট্যাক্ট সংসধন্ধ করুন')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">হোম</a>
                </li>
                <li class="breadcrumb-item">
                    <a>কনট্যাক্ট</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>সংসধন্ধ করুন</strong>
                </li>
            </ol>
            <a href="{{ route('contacts.index') }}" class="btn btn-sm btn-primary pull-right m-t-n-md" type="submit"><i
                        class="fa fa-chevron-left"></i> <strong>ফিরে যান</strong></a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('contacts.update', $contact->slug) }}">
                                    @csrf
                                    @method('PUT')
                                    @include('backend.contacts.element')
                                    <div>
                                        <button class="btn btn-sm btn-primary  m-t-n-xs" type="submit"><strong>সংসধন্ধ</strong></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
</script>
