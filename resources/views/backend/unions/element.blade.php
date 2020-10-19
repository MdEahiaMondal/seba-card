
<div class="appendForm">
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label for="নাম">নাম</label>
                <input type="text"
                       id="নাম"
                       name="name[]"
                       value="{{ isset($union)?$union->name:old('name[]') }}"
                       class="form-control">
                @error('name.*')
                <span class="help-block m-b-none text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label for="web_link">ওয়েব লিংক</label>
                <input type="text"
                       id="web_link"
                       name="web_link[]"
                       value="{{ isset($union)?$union->web_link:old('web_link[]') }}"
                       class="form-control">
                @error('web_link.*')
                <span class="help-block m-b-none text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        @if(empty($union))
            <div class="col-md-2 offset-sm-10 offset-md-0">
                <div class="form-group">
                    <button onclick="appendNerForm(event)" style="margin-top: 28px;height: 35px;"
                            class="btn btn-primary"
                    ><i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
        @endif
    </div>
</div>










@push('script')
    <script>

        var html = `<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <label for="নাম">নাম</label>
            <input type="text"
                   id="নাম"
                   name="name[]"
                   value="{{ isset($union)?$union->name:old('name[]') }}"
                   class="form-control">
            @error('name.*')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
            <label for="web_link">ওয়েব লিংক</label>
            <input type="text"
                   id="web_link"
                   name="web_link[]"
                   value="{{ isset($union)?$union->web_link:old('web_link[]') }}"
                   class="form-control">
            @error('web_link.*')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-2 offset-sm-10 offset-md-0">
        <div class="form-group">
            <button style="margin-top: 28px;height: 35px;"
                    class="btn btn-danger removeItem"
            ><i class="fa fa-trash"></i>
            </button>
        </div>
    </div>
</div>`

        function appendNerForm(event) {
            event.preventDefault()
            $('.appendForm').prepend(html)
        }
        function removeItem() {
            event.preventDefault()
            $(this).parents('.row').remove();
        }


        $(document).on("click", ".removeItem", function(event) {
            event.preventDefault()
            $(this).closest('.row').remove();
        });

        $(document).ready(function () {



        })
    </script>
@endpush

