<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash –  Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="SPRUKO™">
    <meta name="keywords"
        content="admin, admin dashboard, admin dashboard template, bootstrap admin, bootstrap dashboard, dashboard laravel, dashboard template, laravel admin, laravel admin dashboard, laravel admin dashboard template, laravel admin panel, laravel admin template, laravel dashboard template, laravel template, laravel ui template">

    <!-- title -->
    <title>Eventopia</title>
    <style>
        .div_margin{
            margin-top: 100px!important;
        }
    </style>
    @include('layouts.components.styles')

</head>

<body class="app sidebar-mini ltr">

    <!-- global-loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- global-loader closed -->

    <!-- page -->
    <div class="page">
        <div class="page-main bg-white">

            @include('layouts.seller.seller-header')

            <div class="container">
                <div class="row text-center div_margin">
                    <div class="col-12 my-5">
                        <img src="{{ asset('assets/images/brand/success-image.png') }}" width="120px" height="auto">
                    </div>
                    <div class="col-12">
                        <h1 class="fw-bolder">Your listings have been submitted!</h1>
                    </div>
                    <div class="col-12">
                        <p>Our team will review your listings and get back to you within 2-5 business days</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('layouts.components.modal')

    @yield('modal')

    @include('layouts.components.scripts')


</body>

</html>
