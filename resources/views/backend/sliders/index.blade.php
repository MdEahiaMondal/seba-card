@section('title', 'স্লাইডার সমূহ')
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
                    <strong>স্লাইডার সমূহ</strong>
                </li>
            </ol>
                <a href="{{ route('sliders.create') }}" class="btn btn-sm btn-primary pull-right m-t-n-md" type="submit"><i class="fa fa-plus"></i> <strong>তৈরি করুন</strong></a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5><strong>স্লাইডার সমূহ</strong></h5>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>নং</th>
                                <th>শিরোনাম</th>
                                <th>ছবি</th>
                                <th>স্ট্যাটাস</th>
                                <th>প্রক্রিয়া</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $key => $slider)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ Str::limit($slider->title, 20) }}</td>
                                    <td style="width: 30%"><img style="height: 100px; width: 100%;" src="{{ asset('uploads/sliders/'.$slider->image) }}"></td>
                                    <td>
                                        <a href="{{ route('sliders.status', $slider->slug) }}" title="Change publication status">
                                            @if($slider->status == 1)
                                                <span class="badge badge-primary"><strong>সক্রিয়</strong></span>
                                            @else
                                                <span class="badge badge-warning"><strong>নিষ্ক্রিয়</strong></span>
                                            @endif
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('sliders.edit', $slider->slug) }}" title="Edit" class="btn btn-info cus_btn">
                                            <i class="fa fa-pencil-square-o"></i> <strong>হালনাগাদ</strong>
                                        </a>

                                        <a onclick="deleteRow({{ $slider->id }})" href="JavaScript:void(0)" title="Delete" class="btn btn-danger cus_btn">
                                            <i class="fa fa-trash"></i> <strong>বাদ দিন</strong>
                                        </a>
                                        <form id="row-delete-form{{ $slider->id }}" method="POST" action="{{ route('sliders.destroy', $slider->slug) }}" style="display: none" >
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

@endsection
