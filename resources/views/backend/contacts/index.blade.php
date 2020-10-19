@extends('layouts.master')
@section('title', 'কনট্যাক্ট সমূহ')
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
                    <strong>কনট্যাক্ট সমূহ</strong>
                </li>
            </ol>
            <a href="{{ route('contacts.create') }}" class="btn btn-sm btn-primary pull-right m-t-n-md" type="submit"><i
                        class="fa fa-plus"></i> <strong>তৈরি করুন</strong></a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5><strong>কনট্যাক্ট সমূহ</strong></h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>নং</th>
                                    <th>আমাদের ঠিকানা</th>
                                    <th>ফোন</th>
                                    <th>ইমেল</th>
                                    <th>ওয়েব</th>
                                    <th>ফ্যাক্স</th>
                                    <th>স্ট্যাটাস</th>
                                    <th>প্রক্রিয়া</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $key => $contact)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ Str::limit($contact->our_address, 20) }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->web }}</td>
                                        <td>{{ $contact->fax }}</td>
                                        <td>
                                            <a href="{{ route('contacts.status', $contact->slug) }}"
                                               title="Change publication status">
                                                @if($contact->status == 1)
                                                    <span class="badge badge-primary"><strong>সক্রিয়</strong></span>
                                                @else
                                                    <span class="badge badge-warning"><strong>নিষ্ক্রিয়</strong></span>
                                                @endif
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('contacts.edit', $contact->slug) }}" title="Edit"
                                               class="btn btn-info cus_btn">
                                                <i class="fa fa-pencil-square-o"></i> <strong>হালনাগাদ</strong>
                                            </a>

                                            <a onclick="deleteRow({{ $contact->id }})" href="JavaScript:void(0)"
                                               title="Delete" class="btn btn-danger cus_btn">
                                                <i class="fa fa-trash"></i> <strong>বাদ দিন</strong>
                                            </a>
                                            <form id="row-delete-form{{ $contact->id }}" method="POST"
                                                  action="{{ route('contacts.destroy', $contact->slug) }}"
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
