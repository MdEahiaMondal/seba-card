@section('title', 'আবেদনের তালিকা সমূহ')
@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">হোম</a>
                </li>
                <li class="breadcrumb-item">
                    <a>আবেদনের তালিকা সমূহ</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>আবেদন সমূহ</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5><strong>আবেদনের তালিকা সমূহ</strong></h5>
                    </div>
                    <div class="ibox-content">
                        <form method="get" action="{{ route('active.application.lists') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="division_id">বিভাগ</label>
                                        <select class="form-control" name="division_id" id="division_id">
                                            <option value="">বিভাগ নির্বাচন করুন</option>
                                            @foreach($divisions as $division)
                                                <option value="{{ $division->id }}">{{ $division->bn_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="district_id">জেলা</label>
                                        <select class="form-control district" name="district_id" id="district_id">
                                            <option selected value="">জেলা নির্বাচন করুন</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="upazila_id">উপজেলা</label>
                                        <select class="form-control upazila" name="upazila_id" id="upazila_id">
                                            <option selected value="">উপজেলা নির্বাচন করুন</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="union_id">ইউনিয়ন</label>
                                        <select class="form-control union" name="union_id" id="union_id">
                                            <option selected value="">ইউনিয়ন নির্বাচন করুন</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="union_id">ওয়ার্ড  নং </label>
                                        <input class="form-control" type="text" name="word_no">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="union_id">তারিখ হতে</label>
                                        <input class="form-control" type="date" name="start_date">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="union_id">তারিখ পর্যন্ত</label>
                                        <input class="form-control" type="date" name="end_date">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('script')
    <script>
        $(document).ready(function (){
            $("#division_id").on('change', function (){
                $('.district').find('option').not(':first').remove();
                var division_id = $("#division_id").val();
                $.get('{{ route("district.select") }}', { division_id : division_id }, function (response){
                    var i = 0;
                    for (i; i<response.length; i++){
                        var id = response[i].id;
                        var name = response[i].bn_name;
                        $('.district').append(`<option value="${id}"> ${name} </option>`);
                    }
                });
            });

            $("#district_id").on('change', function (){
                $('.upazila').find('option').not(':first').remove();
                var district_id = $("#district_id").val();
                $.get('{{ route("upazila.select") }}', { district_id : district_id }, function (response){
                    var i = 0;
                    for (i; i<response.length; i++){
                        var id = response[i].id;
                        var name = response[i].bn_name;
                        $('.upazila').append(`<option value="${id}"> ${name} </option>`);
                    }
                });
            });

            $("#upazila_id").on('change', function (){
                $('.union').find('option').not(':first').remove();
                var upazila_id = $("#upazila_id").val();
                $.get('{{ route("union.select") }}', { upazila_id : upazila_id }, function (response){
                    var i = 0;
                    for (i; i<response.length; i++){
                        var id = response[i].id;
                        var name = response[i].bn_name;
                        $('.union').append(`<option value="${id}"> ${name} </option>`);
                    }
                });
            });
        });
    </script>
@endpush
