@extends('frontend.layouts.master')

@section('frontend_content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="mt-5">
        <div class="container">
            <form>
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="name">নাম</label>
                           <input type="text" class="form-control" id="name" value="{{ old('name') }}" name="name">
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="phone">ফোন</label>
                           <input type="text" class="form-control" id="phone" value="{{ old('phone') }}" name="phone">
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="nid_no">এনআইডি</label>
                           <input type="text" class="form-control" id="nid_no" value="{{ old('nid_no') }}" name="nid_no">
                       </div>
                   </div>
                   {{--<div class="col-md-6">
                       <div class="form-group">
                           <label for="division_id">বিভাগ</label>
                           <select class="form-control" name="division_id" id="division_id">
                               <option>1</option>
                               <option>2</option>
                               <option>3</option>
                               <option>4</option>
                               <option>5</option>
                           </select>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="district_id">জেলা</label>
                           <select class="form-control" name="district_id" id="district_id">
                               <option>1</option>
                               <option>2</option>
                               <option>3</option>
                               <option>4</option>
                               <option>5</option>
                           </select>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="upazila_id">উপজেলা</label>
                           <select class="form-control" name="upazila_id" id="upazila_id">
                               <option>1</option>
                               <option>2</option>
                               <option>3</option>
                               <option>4</option>
                               <option>5</option>
                           </select>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="union_id">ইউনিয়ন</label>
                           <select class="form-control" name="union_id" id="union_id">
                               <option>1</option>
                               <option>2</option>
                               <option>3</option>
                               <option>4</option>
                               <option>5</option>
                           </select>
                       </div>
                   </div>--}}
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="village_name">গ্রাম</label>
                           <input type="text" class="form-control" id="village_name" value="{{ old('village_name') }}" name="village_name">
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="word_no">ওয়ার্ড নং </label>
                           <input type="text" class="form-control" id="word_no" value="{{ old('word_no') }}" name="word_no">
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="holding_no">হোল্ডিং নং</label>
                           <input type="text" class="form-control" id="holding_no" value="{{ old('holding_no') }}" name="holding_no">
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
