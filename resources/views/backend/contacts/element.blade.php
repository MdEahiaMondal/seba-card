<div class="form-group">
    <label for="our_address">আমাদের ঠিকানা</label>
    <input type="text" id="our_address" name="our_address" value="{{ isset($contact)?$contact->our_address:old('our_address') }}" class="form-control">
    @error('our_address')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="ফোন">ফোন</label>
    <input type="text" id="ফোন" name="phone" value="{{ isset($contact)?$contact->phone:old('phone') }}"  class="form-control">
    @error('phone')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="ইমেল">ইমেল</label>
    <input type="email" id="ইমেল" name="email" value="{{ isset($contact)?$contact->email:old('email') }}"  class="form-control">
    @error('email')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="ওয়েব">ওয়েব</label>
    <input type="text" id="ওয়েব" name="web" value="{{ isset($contact)?$contact->web:old('web') }}"  class="form-control">
    @error('web')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="ফ্যাক্স">ফ্যাক্স</label>
    <input type="text" id="ফ্যাক্স" name="fax" value="{{ isset($contact)?$contact->fax:old('fax') }}"  class="form-control">
    @error('fax')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="স্ট্যাটাস">স্ট্যাটাস</label>
    <input name="status" id="স্ট্যাটাস" {{ isset($contact) && $contact->status ? 'checked' : ''}} value="1" type="checkbox" class="i-checks">
</div>

