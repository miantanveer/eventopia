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
    }

    .notify {
        margin-left: 20px;
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
                        <div style="display:flex;flex-direction:row;justify-content:space-between;"
                            class="account mt-5 mb-2">
                            <div>
                                <h1 style="margin-left:20px;" class="pull-left"><strong>{{lang('Account')}}</strong></h1><br>

                                <span class="avatar avatar-xl brround cover-image"
                                    data-bs-image-src="{{ asset('assets/images/users/spaces/pro.png') }}"
                                    style="height:100px;width:100px;margin-left:20                                                                                                        px;background: url(&quot;http://sash.pk/assets/images/users/6.jpg&quot;) center center;">
                                    <span style="height:25px;width:25px;"
                                        class="badge rounded-pill avatar-icons bg-green"><i
                                            class="fe fe-camera fs-12"></i></span>
                                </span>

                            </div>
                            <div>
                                <button style="border-color:black;" type="button"
                                    class="btn btn-outline-default pull-right"><strong>{{lang('View Profile')}}</strong></button>
                            </div>
                        </div>
                        <!-- FORM -->
                        <div class="card-body border">
                            <div class="row mt-5 mb-3">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label ">{{lang('First Name ')}}<span class="text-red"></span></label>
                                        <input type="text" class="form-control border border-default rounded-0"
                                            placeholder="{{lang('First name')}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label ">{{lang('Last Name')}} <span class="text-red "></span></label>
                                        <input type="text" class="form-control border border-default rounded-0"
                                            placeholder="{{lang('Last name')}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">{{lang('Phone number')}} <span class="text-red"></span></label>
                                        <input type="text" class="form-control border border-default rounded-0"
                                            placeholder="{{lang('Phone number')}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <label class="form-label" for="cpassword">{{lang('Email')}}</label>
                                        <div class="d-flex align-items-center input-container">
                                            <input type="email" class="form-control border border-default rounded-0"
                                                value="" required
                                                data-parsley-required-message="{{lang('Confirm Password is required*')}}"
                                                data-parsley-errors-container="#cpassword_err">
                                            <i class="fa fa-lock text-muted icon"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">{{lang('Organization')}}<span class="text-red"></span></label>
                                        <input type="text" class="form-control border border-default rounded-0"
                                            placeholder="{{lang('Organization')}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">{{lang('Job title')}} <span class="text-red"></span></label>
                                        <input type="text" class="form-control border border-default rounded-0"
                                            placeholder="{{lang('Job title')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Last -->
                        <div class="notify mt-2 mb-6">
                            <h1><b>{{lang('Notifications')}}</b></h1>
                            <h3><b>{{lang('Email prefrences')}}</b></h3>
                            <p>{{lang('Send me exclusive deals, inspiration, news, and community updates via email.')}}
                                <input style="margin-left:355px;" type="checkbox" id="vehicle1" name="vehicle1">
                            </p>

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
                            data-bs-toggle="dropdown" id="global-helper-btn">{{lang('Do
                            you need Help?')}}</button>
                        <div class="dropdown-menu w-260" style="">
                            <form class="card-body pt-3" id="contactForm">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="{{lang('Enter Email')}}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="{{lang('Enter your Name')}}" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="{{lang('Enter Phone Number')}}" type="text">
                                </div>
                                <div class="submit">
                                    <button class="btn btn-primary btn-block">{{lang('Submit')}}</button>
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
