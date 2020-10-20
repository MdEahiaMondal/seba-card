
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright {{ date('Y') }} <strong><span>Tax Collection Scheme Ltd. (HTCSL)</span></strong>. All rights reserved | Privacy Policy - REVISED
        </div>
        {{-- <div class="credits">
             Develop by <a href="#">HTCSL Develop Team</a>
         </div>--}}
    </div>
</footer><!-- End Footer -->
<!-- Vendor JS Files -->
<script src="{{ asset('frontend') }}/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('frontend') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend') }}/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="{{ asset('frontend') }}/vendor/php-email-form/validate.js"></script>
<script src="{{ asset('frontend') }}/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="{{ asset('frontend') }}/vendor/venobox/venobox.min.js"></script>
<script src="{{ asset('frontend') }}/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="{{ asset('frontend') }}/vendor/counterup/counterup.min.js"></script>
<script src="{{ asset('frontend') }}/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="{{ asset('frontend') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ asset('frontend') }}/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="{{ asset('frontend') }}/js/main.js"></script>
<script src="{{ asset('backend') }}/js/plugins/toastr/toastr.min.js"></script>


<script>
    $(function () {

        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 2500
        };

        //Toastr message for domain event trigger
        @if(session('success'))
        toastr.success('{{ session('success') }}');
        @endif

        @if(session('error'))
        toastr.error('{{ session('error') }}');
        @endif
    });
</script>


@stack('script')



</body>
</html>
