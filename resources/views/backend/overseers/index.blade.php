@section('title', 'উপদর্শক সমূহ')
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
                    <strong>উপদর্শক সমূহ</strong>
                </li>
            </ol>
            <a href="{{ route('overseers.create') }}" class="btn btn-sm btn-primary pull-right m-t-n-md"
               type="submit"><i
                        class="fa fa-plus"></i> <strong>তৈরি করুন</strong></a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5><strong>উপদর্শক সমূহ</strong></h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>নং</th>
                                    <th>ছবি</th>
                                    <th>নাম</th>
                                    <th>ফোন</th>
                                    <th>ইমেল</th>
                                    <th>স্ট্যাটাস</th>
                                    <th>প্রক্রিয়া</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($overseers as $key => $overseer)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td><img style="height: 100px; width: 100px;"
                                                 src="{{ asset('uploads/overseers/'.$overseer->image) }}">
                                        </td>
                                        <td>{{ Str::limit($overseer->name, 20) }}</td>
                                        <td>{{ $overseer->phone }}</td>
                                        <td>{{ $overseer->email }}</td>
                                        <td>
                                            <a href="{{ route('overseers.status', $overseer->slug) }}"
                                               title="Change publication status">
                                                @if($overseer->status == 1)
                                                    <span class="badge badge-primary"><strong>সক্রিয়</strong></span>
                                                @else
                                                    <span class="badge badge-warning"><strong>নিষ্ক্রিয়</strong></span>
                                                @endif
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('overseers.show', $overseer->slug) }}" title="Edit"
                                               class="btn btn-info cus_btn">
                                                <i class="fa fa-eye"></i> <strong>দেখেন</strong>
                                            </a>
                                            <a href="{{ route('overseers.edit', $overseer->slug) }}" title="Edit"
                                               class="btn btn-success cus_btn">
                                                <i class="fa fa-pencil-square-o"></i> <strong>হালনাগাদ</strong>
                                            </a>

                                            <a onclick="deleteRow({{ $overseer->id }})" href="JavaScript:void(0)"
                                               title="Delete" class="btn btn-danger cus_btn">
                                                <i class="fa fa-trash"></i> <strong>বাদ দিন</strong>
                                            </a>
                                            <form id="row-delete-form{{ $overseer->id }}" method="POST"
                                                  action="{{ route('overseers.destroy', $overseer->slug) }}"
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
