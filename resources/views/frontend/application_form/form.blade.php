@extends('frontend.layouts.master')

@section('frontend_content')

    <!-- ======= Hero Section ======= -->

    <section id="hero" class="mt-5">
        <div class="container">
            <form method="post" action="{{ route('application.store') }}">
                @csrf
                <input name="division_id" value="{{ $division_id }}" type="hidden">
                <input name="district_id" value="{{ $district_id }}" type="hidden">
                <input name="upazila_id" value="{{ $upazila_id }}" type="hidden">
                <input name="union_id" value="{{ $union_id }}" type="hidden">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">নাম<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" value="{{ old('name') }}" name="name">
                            @error('name')
                            <span class="help-block m-b-none text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="float-right" href="{{ route('apply.form') }}">Refresh</a>
                            <label for="father_name">পিতার নাম<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="father_name" value="{{ old('father_name') }}" name="father_name">
                            @error('father_name')
                            <span class="help-block m-b-none text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="village_name">গ্রামের নাম<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="village_name" value="{{ old('village_name') }}" name="village_name">
                            @error('village_name')
                            <span class="help-block m-b-none text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">ফোন<span style="color: red">*</span></label>
                            <input type="number" class="form-control" id="phone" value="{{ old('phone') }}" name="phone">
                            @error('phone')
                            <span class="help-block m-b-none text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nid_no">এনআইডি<span style="color: red">*</span></label>
                            <input type="number" class="form-control" id="nid_no" value="{{ old('nid_no') }}" name="nid_no">
                            @error('nid_no')
                            <span class="help-block m-b-none text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="word_no">ওয়ার্ড নং<span style="color: red">*</span></label>
                            <input type="number" class="form-control" id="word_no" value="{{ old('word_no') }}" name="word_no">
                            @error('word_no')
                            <span class="help-block m-b-none text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="holding_no">হোল্ডিং নং<span style="color: red">*</span></label>
                            <input type="number" class="form-control" id="holding_no" value="{{ old('holding_no') }}" name="holding_no">
                            @error('holding_no')
                            <span class="help-block m-b-none text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section><!-- End Hero -->
@endsection
