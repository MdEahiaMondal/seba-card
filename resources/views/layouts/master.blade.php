<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <link href="{{ asset('backend') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('backend') }}/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('backend') }}/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    {{--sweet alert--}}
    <link href="{{ asset('backend/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('backend') }}/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="{{ asset('backend') }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/css/coustom_style.css" rel="stylesheet">

</head>

<body>
<div id="wrapper">

    @include('layouts.elements.sidebar')

    <div id="page-wrapper" class="gray-bg dashbard-1">

        {{-- header--}}
        @include('layouts.elements.header')

        {{--main content fluit--}}
        <div class="wrapper wrapper-content">
            @yield('content')
        </div>
        @include('layouts.elements.footer')
    </div>

</div>

<!-- Mainly scripts -->
<script src="{{ asset('backend') }}/js/jquery-3.1.1.min.js"></script>
<script src="{{ asset('backend') }}/js/popper.min.js"></script>
<script src="{{ asset('backend') }}/js/bootstrap.js"></script>
<script src="{{ asset('backend') }}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="{{ asset('backend') }}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="{{ asset('backend') }}/js/plugins/dataTables/datatables.min.js"></script>
<script src="{{ asset('backend') }}/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>


<!-- Flot -->
<script src="{{ asset('backend') }}/js/plugins/flot/jquery.flot.js"></script>
<script src="{{ asset('backend') }}/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="{{ asset('backend') }}/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="{{ asset('backend') }}/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="{{ asset('backend') }}/js/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="{{ asset('backend') }}/js/plugins/peity/jquery.peity.min.js"></script>
<script src="{{ asset('backend') }}/js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('backend') }}/js/inspinia.js"></script>
<script src="{{ asset('backend') }}/js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="{{ asset('backend') }}/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- GITTER -->
<script src="{{ asset('backend') }}/js/plugins/gritter/jquery.gritter.min.js"></script>

<!-- Sparkline -->
<script src="{{ asset('backend') }}/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="{{ asset('backend') }}/js/demo/sparkline-demo.js"></script>

<!-- ChartJS-->
<script src="{{ asset('backend') }}/js/plugins/chartJs/Chart.min.js"></script>

<!-- Toastr -->
<script src="{{ asset('backend') }}/js/plugins/toastr/toastr.min.js"></script>

{{--Sweetalert--}}
<script src="{{ asset('backend/js/plugins/sweetalert/sweetalert.min.js') }}"></script>


<script>

    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            // dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                /*{ extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},*/

                {
                    // extend: 'print',
                    // customize: function (win){
                    //     $(win.document.body).addClass('white-bg');
                    //     $(win.document.body).css('font-size', '10px');
                    //
                    //     $(win.document.body).find('table')
                    //         .addClass('compact')
                    //         .css('font-size', 'inherit');
                    // }
                }
            ]

        });

    });

    $(function () {

        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 2500
        };

        //Toastr message for domain event trigger
        @if(session('successMsg'))
        toastr.success('{{ session('successMsg') }}');
        @endif

        @if(session('errorMsg'))
        toastr.error('{{ session('errorMsg') }}');
        @endif
    });
    // show delete massage
    function deleteRow(id) {

        swal({
            title: "আপনি কি এ ব্যাপারে নিশ্চিত ?",
            text: "আপনি এই আইটেমটি পুনরুদ্ধার করতে সক্ষম হবেন না!",
            type: "warning",
            showCancelButton: true,
            allowOutsideClick: true,
            confirmButtonColor: "#1ab394",
            confirmButtonText: "হ্যাঁ, এটি মুছুন!",
            closeOnConfirm: true,

        }, function () {
            document.getElementById('row-delete-form'+id).submit();
        });
    }

  // image preview
    function imagePreview(event){
        var reader = new FileReader();
        var imageField = document.getElementById('image-field')

        reader.onload = function (){
            if(reader.readyState == 2){
                imageField.src = reader.result;
            }
        }
        reader.readAsDataURL(event.target.files[0]);
    }

</script>

<script src="{{ asset('backend') }}/js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>

@stack('script')

</body>
</html>
