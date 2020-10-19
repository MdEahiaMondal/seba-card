@extends('frontend.layouts.master')

@section('frontend_content')
    <section id="hero" class="mt-5">
    <div class="container">
        <form>
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
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section><!-- End Hero -->
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