@section('title', 'ইউনিয়ন সমূহ')
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
                    <strong>ইউনিয়ন সমূহ</strong>
                </li>
            </ol>
            <a href="{{ route('upazilas.unions.create', $upazila->slug) }}" class="btn btn-sm btn-primary pull-right m-t-n-md"
               type="submit"><i
                        class="fa fa-plus"></i> <strong>তৈরি করুন</strong></a>
        </div>
    </div>



    <div class="row wrapper mt-5 border-bottom white-bg page-heading">
        <div class="col-lg-12 text-center pt-4 pb-4">
             <h2> {{ $upazila->name }} উপজেলা এর  ইউনিয়ন সমূহ</h2>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5><strong>ইউনিয়ন সমূহ</strong></h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>নং</th>
                                    <th>নাম</th>
                                    <th>ইউনিয়ন ওয়েবসাইট</th>
                                    <th>প্রক্রিয়া</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($upazila->unions as $key => $union)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $union->name }}</td>
                                        <td>{{ $union->web_link }}</td>
                                        <td>
                                            <a href="{{ route('upazilas.unions.edit',['upazila' => $upazila->slug, 'union' => $union->slug]) }}" title="Edit"
                                               class="btn btn-success cus_btn">
                                                <i class="fa fa-pencil-square-o"></i> <strong>হালনাগাদ</strong>
                                            </a>

                                            <a onclick="deleteRow({{ $union->id }})" href="JavaScript:void(0)"
                                               title="Delete" class="btn btn-danger cus_btn">
                                                <i class="fa fa-trash"></i> <strong>বাদ দিন</strong>
                                            </a>
                                            <form id="row-delete-form{{ $union->id }}" method="POST"
                                                  action="{{route('upazilas.unions.destroy',['upazila' => $upazila->slug, 'union' => $union->slug]) }}"
                                                  style="display: none">
                                                @method('DELETE')
                                                @csrf()
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
