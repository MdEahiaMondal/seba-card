<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="নাম">নাম</label>
            <input type="text"
                   id="নাম"
                   name="name"
                   value="{{ isset($overseer)?$overseer->name:old('name') }}"
                   class="form-control">
            @error('name')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="ইমেল">ইমেল</label>
            <input type="email"
                   id="ইমেল"
                   name="email"
                   value="{{ isset($overseer)?$overseer->email:old('email') }}"
                   class="form-control">
            @error('email')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="ফোন">ফোন</label>
            <input type="text"
                   id="ফোন"
                   name="phone"
                   value="{{ isset($overseer)?$overseer->phone:old('phone') }}"
                   class="form-control">
            @error('phone')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="home_address">বাসার ঠিকানা</label>
            <input type="text"
                   id="home_address"
                   name="home_address"
                   value="{{ isset($overseer)?$overseer->home_address:old('home_address') }}"
                   class="form-control">
            @error('home_address')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>ছবি</label>
            <div class="custom-file">
                <input id="logo"
                       type="file"
                       onchange="imagePreview(event)"
                       name="photo"
                       class="custom-file-input">
                <label for="logo" class="custom-file-label">Choose file...</label>
            </div>
            @error('photo')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="উপাধি">উপাধি</label>
            <input type="text"
                   id="উপাধি"
                   name="designation"
                   value="{{ isset($overseer)?$overseer->designation:old('designation') }}"
                   class="form-control">
            @error('designation')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="batch_no">ব্যাচ নাম্বার</label>
            <input type="text"
                   id="batch_no"
                   name="batch_no"
                   value="{{ isset($overseer)?$overseer->batch_no:old('batch_no') }}"
                   class="form-control">
            @error('batch_no')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="joining_date">যোগদান তারিখ</label>
            <input type="date"
                   id="joining_date"
                   name="joining_date"
                   value="{{ isset($overseer)?$overseer->joining_date:old('joining_date') }}"
                   class="form-control">
            @error('joining_date')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="office_phone">অফিসের ফোন</label>
            <input type="text"
                   id="office_phone"
                   name="office_phone"
                   value="{{ isset($overseer)?$overseer->office_phone:old('office_phone') }}"
                   class="form-control">
            @error('office_phone')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="office_address">অফিসের ঠিকানা</label>
            <input type="text"
                   id="office_address"
                   name="office_address"
                   value="{{ isset($overseer)?$overseer->office_address:old('office_address') }}"
                   class="form-control">
            @error('office_address')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group row">
            <div class="col-lg-offset-2 col-lg-10">
                <div class="i-checks">
                    <label>
                        <i></i> স্ট্যাটাস
                        <input type="checkbox" name="status" id="স্ট্যাটাস" {{ isset($overseer) && $overseer->status ? 'checked' : ''}} value="1">
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">লিঙ্গ</label>
            <div class="col-sm-10">
               <span class="i-checks"><label> <input type="radio" {{ isset($overseer) && $overseer->gender == 'পুরুষ' ? 'checked' : ''}} value="পুরুষ" name="gender"> <i></i> পুরুষ</label></span>
                <span class="i-checks"><label> <input type="radio" {{ isset($overseer) && $overseer->gender == 'মহিলা' ? 'checked' : ''}} value="মহিলা" name="gender"> <i></i> মহিলা </label></span>
            </div>
        </div>
    </div>

</div>




























