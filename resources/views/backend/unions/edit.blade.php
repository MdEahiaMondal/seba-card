@section('title', 'ইউনিয়ন সংসধন্ধ করুন')
@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">হোম</a>
                </li>
                <li class="breadcrumb-item">
                    <a>ইউনিয়ন</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>সংসধন্ধ করুন</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="row wrapper mt-5 border-bottom white-bg page-heading">
        <div class="col-lg-12 text-center pt-4 pb-4">
            <h2> {{ $upazila->name }} উপজেলার {{ $union->name }} ইউনিয়ন সংসধন্ধ করুন</h2>
        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('upazilas.unions.update', ['upazila' => $upazila->slug, 'union' => $union->slug]) }}">
                                    @csrf
                                    @method('PUT')
                                    @include('backend.unions.element')
                                    <div>
                                        <button class="btn btn-sm btn-primary  m-t-n-xs" type="submit"><strong>সাবমিট</strong></button>
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
