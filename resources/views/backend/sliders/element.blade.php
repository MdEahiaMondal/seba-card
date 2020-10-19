<div class="form-group">
    <label>শিরোনাম</label>
    <input type="text" name="title" value="{{ isset($slider)?$slider->title:old('title') }}" placeholder="শিরোনাম" class="form-control">
    @error('title')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label>ছবি</label>
    <input type="file" onchange="imagePreview(event)" name="photo" placeholder="ছবি" class="form-control hjhjghjghj">
    @error('photo')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label>স্ট্যাটাস</label>
    <input name="status" {{ isset($slider) && $slider->status ? 'checked' : ''}} value="1" type="checkbox" class="i-checks">
</div>
<div>
    <button class="btn btn-sm btn-primary float-right m-t-n-xs" type="submit"><strong>সাবমিট</strong></button>
</div>