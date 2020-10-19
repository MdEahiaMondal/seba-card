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


                        <div class="row" style="margin-bottom: 10px">

                            <div class="col-sm-12">
                                <form action="" method="get" class="form-inline" role="form">

                                    <div class="form-group">
                                        <div>Records Per Page</div>
                                        <select name="perPage" id="perPage" onchange="submit()"
                                                class="input-sm form-control" style="width: 115px;">
                                            <option value="10"{{ request('perPage') == 10 ? ' selected' : '' }}>10
                                            </option>
                                            <option value="25"{{ request('perPage') == 25 ? ' selected' : '' }}>25
                                            </option>
                                            <option value="50"{{ request('perPage') == 50 ? ' selected' : '' }}>50
                                            </option>
                                            <option value="100"{{ request('perPage') == 100 ? ' selected' : '' }}>100
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <div class="input-group">
                                            <input name="keyword" type="text" value="{{ request('keyword') }}"
                                                   class="input-sm form-control" placeholder="Search Here">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-sm btn-primary"> Go!</button>
                                            </span>
                                            <a href="{{ route('applications.lists') }}"
                                               class="ml-2 btn btn-outline btn-primary btn-sm"> Reset</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>নং</th>
                                <th>নাম</th>
                                <th>ফোন</th>
                                <th>এনআইডি</th>
                                <th>বাবার নাম</th>
                                <th>বিভাগ</th>
                                <th>স্ট্যাটাস</th>
                                <th>প্রক্রিয়া</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($applications as $key => $application)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $application->name }}</td>
                                    <td>{{ $application->phone }}</td>
                                    <td>{{ $application->nid_no }}</td>
                                    <td>{{ $application->father_name }}</td>
                                    <td>{{ $application->district->bn_name }}</td>
                                    <td>
                                        @if($application->activated_status == 1)
                                            <span class="badge badge-primary"><strong>সক্রিয়</strong></span>
                                        @else
                                            <span class="badge badge-warning"><strong>নিষ্ক্রিয়</strong></span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('applications.lists.show', $application->id) }}" title="Edit"
                                           class="btn btn-info cus_btn">
                                            <i class="fa fa-pencil-square-o"></i> <strong>বিস্তারিত</strong>
                                        </a>
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
