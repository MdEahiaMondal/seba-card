<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('frontend') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/coustom_style.css" rel="stylesheet">

</head>
<body class="antialiased">
<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="clearfix">
        <div class="row">
            <div class="col-md-4 text-left">
                <img width="250" src="https://i.pinimg.com/originals/aa/73/bc/aa73bc3310982f1f7ba938a6cca2a199.png" alt="">
            </div>
            <div class="col-md-4 text-center">
                <h3>ইউনিয়ন পরিষদের সেবা কার্ড বিভাগে স্বাগতম</h3>
            </div>
            <div class="col-md-4 text-right">
                <img width="250" src="https://i.pinimg.com/originals/aa/73/bc/aa73bc3310982f1f7ba938a6cca2a199.png" alt="">
            </div>
        </div>
    </div>
</section>


<!-- ======= Header ======= -->
<header id="header" style="border-top: 2px solid #2e4c67;">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-6 offset-md-2">
                <nav class="nav-menu  d-none d-lg-block">
                    <ul>
                        <li class="{{ request()->routeIs('welcome') ? 'active' : ''  }}"><a href="{{ route('welcome') }}"><strong>প্রথম পাতা</strong></a></li>
                        <li class="{{ request()->routeIs('apply.form') ? 'active' : ''  }}">
                            <a href="{{ route('apply.form') }}">
                                <strong>কার্ডের জন্য আবেদন</strong>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('apply.form') ? 'active' : ''  }}">
                            <a href="#contact">
                                <strong>কার্ড সক্রিয় জন্য আবেদন </strong>
                            </a>
                        </li>
                    </ul>
                </nav><!-- .nav-menu -->

            </div>
        </div>
    </div>
</header><!-- End Header -->
