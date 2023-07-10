<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Eventopia">
    <meta name="author" content="SPRUKO™">
    <meta name="keywords" content="">

    <!-- title -->
    <title>Eventopia | Landing Page</title>

    @include('layouts.components.styles')
    <style>
        .content {
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        .jumps-prevent{
            padding-top: 0px!important;
        }
        .logo-horizontal{
            z-index: 9999!important;
        }
        .header{
            background-color: transparent !important;
        }
    </style>

</head>

<body class="app sidebar-mini ltr">
    <!-- global-loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- global-loader closed -->

    <!-- page -->
    <div class="page">
        <div class="page-main">
            @include('layouts.components.landing-page-header')
            <img src="{{ asset('assets/images/brand/landing_page_img.jpg') }}" alt="">
        </div>

    </div>
    @include('layouts.components.modal')

    @yield('modal')
    <!-- page -->

    <!-- global-helper -->
    <div id="global-helper" class="position-fixed bottom-0 end-0 p-3">
        <div class="dropup btn-group mt-2 mb-2">
            <button class="btn-pill text-end p-2 text-info bg-white border-info " type="button"
                data-bs-toggle="dropdown" aria-expanded="true">Need any help?</button>
            <ul class="dropdown-menu"
                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(0px, -40px, 0px);"
                data-popper-placement="top-start">
                <form id="contactForm">
                    <div class="row">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="exampleInputPassword1"
                                placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="text-center">
                        <!-- Add a container with "text-center" class -->
                        <button class="btn btn-primary mt-2 mb-0 ">Submit</button>
                    </div>
                </form>
            </ul>
        </div>
    </div>
    <!-- global-helper closed -->

    @include('layouts.components.footer')

    @include('layouts.components.scripts')

    <!-- Custom JavaScript code -->
    <script>
        $(document).ready(function() {
            $(document).on("submit", "#contactForm", function(e) {
                e.preventDefault();
                $('body').addClass('timer-alert');
                swal({
                    title: "Success.",
                    text: "We will contact you shortly.",
                    timer: 2000,
                    showConfirmButton: false
                });
            });
        });
    </script>

</body>

</html>
