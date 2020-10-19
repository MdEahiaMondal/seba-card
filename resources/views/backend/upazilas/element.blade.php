<div class="form-group">
    <label for="নাম">নাম</label>
    <input type="text"
           id="নাম"
           name="name"
           value="{{ isset($upazila)?$upazila->name:old('name') }}"
           class="form-control">
    @error('name')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>


<div class="form-group row">
    <div class="col-lg-offset-2 col-lg-10">
        <div class="i-checks">
            <label>
                <i></i> স্ট্যাটাস
                <input type="checkbox" name="status" id="স্ট্যাটাস"
                       {{ isset($upazila) && $upazila->status ? 'checked' : ''}} value="1">
            </label>
        </div>
    </div>
</div>
