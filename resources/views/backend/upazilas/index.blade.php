@section('title', 'উপজেলা সমূহ')
@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">হোম</a>
                </li>
                <li class="breadcrumb-item">
                    <a>উপজেলা</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>উপজেলা সমূহ</strong>
                </li>
            </ol>
            <a href="{{ route('upazilas.create') }}" class="btn btn-sm btn-primary pull-right m-t-n-md"
               type="submit"><i
                        class="fa fa-plus"></i> <strong>তৈরি করুন</strong></a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5><strong>উপজেলা সমূহ</strong></h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>নং</th>
                                    <th>নাম</th>
                                    <th>ইউনিয়ন গণনা</th>
                                    <th>স্ট্যাটাস</th>
                                    <th>প্রক্রিয়া</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($upazilas as $key => $upazila)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ Str::limit($upazila->name, 20) }}</td>
                                        <td>{{ $upazila->unions->count() }}</td>
                                        <td>
                                            <a href="{{ route('upazilas.status', $upazila->slug) }}"
                                               title="Change publication status">
                                                @if($upazila->status == 1)
                                                    <span class="badge badge-primary"><strong>সক্রিয়</strong></span>
                                                @else
                                                    <span class="badge badge-warning"><strong>নিষ্ক্রিয়</strong></span>
                                                @endif
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ url("dashboard/upazilas/{$upazila->slug}/unions") }}" title="Edit"
                                               class="btn btn-info cus_btn">
                                                <i class="fa fa-info-circle"></i> <strong>ইউনিয়ন</strong>
                                            </a>
                                            <a href="{{ route('upazilas.edit', $upazila->slug) }}" title="Edit"
                                               class="btn btn-success cus_btn">
                                                <i class="fa fa-pencil-square-o"></i> <strong>হালনাগাদ</strong>
                                            </a>

                                            <a onclick="deleteRow({{ $upazila->id }})" href="JavaScript:void(0)"
                                               title="Delete" class="btn btn-danger cus_btn">
                                                <i class="fa fa-trash"></i> <strong>বাদ দিন</strong>
                                            </a>
                                            <form id="row-delete-form{{ $upazila->id }}" method="POST"
                                                  action="{{ route('upazilas.destroy', $upazila->slug) }}"
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
