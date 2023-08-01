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

    @include('layouts.components.styles')

</head>
<style>
    .fullpage {
        width: 900px;
        margin: 0 auto;
        display: flex;
    }

    .display-1 {
        margin-left: 50px;
        font-size: 2rem;
        font-weight: bolder;
    }

    .display-2 {
        margin-left: 65px;
        font-size: 1rem;
        font-weight: bold;

    }

    .btn-pill {
        border-radius: 10rem;
        padding-left: 1.5em;
        padding-right: 1.5em;
    }
</style>

<body class="app sidebar-mini ltr">

    <!-- global-loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- global-loader closed -->

    <!-- page -->
    <div class="page bg-white">
        <div class="page-main">

            @include('layouts.seller.seller-header')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- container -->
                    <div class="main-container container-fluid fullpage">


                        <div class="verify mt-5 mb-3">
                            <span class="avatar avatar-xl brround cover-image"
                                data-bs-image-src="{{ asset('assets/images/users/spaces/pro.png') }}"
                                style="height:200px;width:200px;margin-left:20px;background: url(&quot;http://sash.pk/assets/images/users/6.jpg&quot;) center center;">
                            </span>
                            <div style="border:none;" class="example">
                                <h2 class="display-1 "><strong>John Smith</strong></h2>
                                <h2 class="display-2">Joined Jun 2023</h2>

                            </div>
                        </div>
                        <div style="height:118px;width:450px;margin-top:90px;" class="confirms border border-default">
                            <h4><b>Email</b><button style="background-color:#45aaf21f;color:black;border-color:E5E5E5"
                                    type="button" class="btn btn-info btn-pill pull-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                                        </path>
                                    </svg>
                                    Verified</h4>

                            <br>
                            <h4><b>Phone number</b><button
                                    style="background-color:#45aaf21f;color:black;border-color:E5E5E5" type="button"
                                    class="btn btn-info btn-pill pull-right ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                                        </path>
                                    </svg>
                                    Verified
                                </button></h4>

                            <br>
                            <div class="right-content mt-4 mb-3">
                                <p><b>Thanks for stopping by! I'm excited to be a part of the Peerspace community.</b>
                                </p>
                                <button type="button" class="btn btn-info rounded-0"><i
                                        class="fe fe-upload me-2"></i><strong>Share Profile</strong></button>
                                <button
                                    style="border-color:#707070;background-color:#FFFFFF;color:black;margin-left:10px;"
                                    type="button" class="btn btn-white"><strong>Message Host</strong></button>
                            </div>
                        </div>






                        <!-- container-closed -->
                    </div>
                    <!--app-content closed-->
                </div>
                <!-- page-main closed -->

                @include('layouts.components.modal')

                @yield('modal')
            </div>
            <!-- page -->

            <!-- global-helper -->
            <div id="global-helper" class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999;">
                <div class="dropdown btn-group mt-2 mb-2">
                    <div class="btn-group mt-2 mb-2">
                        <button class="btn btn-pill btn-white border-info text-end dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" id="global-helper-btn">Do
                            you need Help?</button>
                        <div class="dropdown-menu w-260" style="">
                            <form class="card-body pt-3" id="contactForm">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter your Name" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Phone Number" type="text">
                                </div>
                                <div class="submit">
                                    <button class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- global-helper closed -->

            @include('layouts.space.space-detail-footer')


            @include('layouts.components.scripts')

            <!-- INTERNAL Bootstrap-Datepicker js-->
            <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

            <!-- SELECT2 JS -->
            <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
            <script src="{{ asset('assets/js/select2.js') }}"></script>

            <!-- INTERNAL Bootstrap-Datepicker js-->
            <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>


            <!-- TIMEPICKER JS -->
            <script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
            <script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script>


            <!-- DATEPICKER JS -->
            <script src="{{ asset('assets/plugins/date-picker/date-picker.js') }}"></script>
            <script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
            <script src="{{ asset('assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>


            <!-- FORMELEMENTS JS -->
            <script src="{{ asset('assets/js/formelementadvnced.js') }}"></script>
            <script src="{{ asset('assets/js/form-elements.js') }}"></script>


            <!-- OWL CAROUSEL JS-->
            <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
            <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>

            <!-- OWL Carousel js -->
            <script src="{{ asset('assets/js/carousel.js') }}"></script>

            <!-- ACCORDION JS -->
            <script src="{{ asset('assets/plugins/accordion/accordion.min.js') }}"></script>
            <script src="{{ asset('assets/plugins/accordion/accordion.js') }}"></script>


            <!-- Internal Timeline js-->
            <script src="{{ asset('assets/plugins/timeline/js/timeline.min.js') }}"></script>

            <!-- Internal Timeline js-->
            <script src="    {{ asset('assets/js/timline.js') }}"></script>
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
            @section('scripts')

    </body>

    </html>
