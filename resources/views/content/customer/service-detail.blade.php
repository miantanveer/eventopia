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
    .line {
        border-top: 1px solid black;
        position: relative;
        top: 165px;
        z-index: 9999;
    }
   

    @media (min-width: 576px) {
        .content-button {
            position: absolute;
            right: 0;
            top: 70px;
        }
    }

    @media (min-width: 576px) {
        .profile_img_res {
            max-width: 50px !important;
        }
    }

    @media (min-width: 0) and (max-width: 575px) {
        .profile_img_res {
            max-width: 35px !important;
        }
    }

    @media (min-width: 0) and (max-width: 300px) {
        .line {
            top: 190px;
        }
    }

    @media (min-width: 0) and (max-width: 400px) {
        .reply-content {
            max-width: 100% !important;
            flex: 0 0 100%;
            margin-top: 10px;
        }

        .reply-content-heading {
            padding-left: 20px;
        }

        .empty {
            display: none;
        }

        .booking-heading {
            font-size: 20px;
            font-weight: 450;
        }
    }
</style>

<body class="app sidebar-mini ltr">

    <!-- global-loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- global-loader closed -->

    <!-- page -->
    <div class="page">
        <div class="page-main">

            @include('layouts.customer.customer-header')

            @include('layouts.components.app-sidebar')

            <!--app-content open-->
            <div class="main-content app-content py-5 bg-white ">
                <div class="side-app">

                    <!-- container -->
                    <div class="main-container container-fluid ">
                        <div class="row row-sm">
                            <div class="col-xl-8 col-lg-12 col-md-12 ">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body p-3">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('assets/images/users/spaces/9.jpg') }}" alt="img"
                                                class="br-5 w-100"></a>
                                    </div>
                                    <div class="card-body pt-0 h-100">
                                        <div class="owl-carousel owl-carousel-icons2">
                                            <div class="item card_height">
                                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/users/spaces/11.jpg') }}"
                                                            alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="item card_height">
                                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/users/spaces/2.jpg') }}"
                                                            alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="item card_height">
                                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/users/spaces/3.jpg') }}"
                                                            alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="item card_height">
                                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/users/spaces/4.jpg') }}"
                                                            alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="item card_height">
                                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/users/spaces/7.jpg') }}"
                                                            alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="item card_height">
                                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/users/spaces/9.jpg') }}"
                                                            alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="item card-height">
                                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/users/spaces/10.jpg') }}"
                                                            alt="img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <h2 class="fw-bold text-dark">Modern and budget friendly space</h2>
                                        <p><i class="text-primary side-menu__icon fe fe-map-pin"></i> Address,
                                            California, USA</p>
                                        <div class="row">
                                            <div class="mb-3 col-sm-3 text-warning">
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star-half-o text-warning"></i>
                                                <i class="fa fa-star-o text-warning"></i>
                                                &nbsp;
                                            </div>
                                            <p class="col-sm-3">45 reviews</p>
                                            <p class="col-sm-3"><i class="fa fa-group"></i> 12 people </p>
                                            <p class="col-sm-3"><i class="mdi mdi-alarm text-primary"></i> 1 hr 5 min</p>
                                        </div>
                                        <hr class="border-3">
                                        <div class="mt-5">
                                            <h3 class="text-dark">
                                                About this seller
                                            </h3>
                                            <p>Utilise the building's north side, which has a bright, industrial-white
                                                wall with even illumination for the majority of the day. On one of
                                                our white walls and our portrait plant wall inside, we provide
                                                west-facing windows for natural light. A striking natural light source
                                                can
                                                be seen in the studio's black gallery wall area..... Read more</p>
                                        </div>
                                        <hr class="border-3">
                                        <div class="mt-5">
                                            <h3 class="text-dark mb-3">
                                                Details
                                            </h3>
                                            <div class="row">

                                                <div class="col-6">
                                                    <h5 class="text-dark">Planning</h5>
                                                    <p>A la Carte Wedding Planning, Budgeting,
                                                        Day-Of Coordination, Full Service
                                                        Wedding Planning, RSVP Tracking,
                                                        Wedding Design</p>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="text-dark">Wedding Activities</h5>
                                                    <p>Rehearsals & Parties, Wedding</p>
                                                </div>
                                            </div>

                                        </div>
                                        <hr class="border-3">
                                        <div class="mt-5">
                                            <h3 class="text-dark mb-5">
                                                Pricing for Wedding Planner
                                            </h3>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card bg-gray img-card box-secondary-shadow">
                                                        <div class="card-body">
                                                            <div class="d-flex">
                                                                <div> <i class="fa fa-dollar text-white fs-30 me-3 mt-2"></i> </div>
                                                                <div class="text-white">
                                                                    <h2 class="mb-0 number-font">Curious to learn more?</h2>
                                                                    <a href="#"><p class="text-white mb-0">Ask about pricing</p></a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <hr class="border-3">
                                        <div class="mt-5">
                                            <h3 class="text-dark">
                                                Reviews (87)
                                            </h3>
                                            <div class="row ms-0 border mb-5 p-4 br-5 col-12">
                                                <div class="col-md-1 col-2">
                                                    <a href="{{ url('profile') }}"> <img
                                                            class="media-object rounded-circle profile_img_res"
                                                            alt="64x64"
                                                            src="{{ asset('assets/images/users/5.jpg') }}">
                                                    </a>
                                                </div>
                                                <div class="col-md-11 ps-md-5 ps-lg-2 col-10 reply-content-heading">
                                                    <h5 class="mt-3 text-dark">Gavin Murray</h5>
                                                </div>
                                                <div class="col-md-1 col-2 empty"></div>
                                                <div class="col-md-9 col-sm-8 col-10 reply-content">
                                                    <span class="tex-dark">June 14, 2023 at 8:00 pm</span>
                                                    <div class="rating-stars" id="rating-1" data-stars="2"
                                                        style="cursor: pointer; text-align:left !important;font-size: 14px">
                                                        <input type="hidden" name="rating-1" value="0"><i
                                                            class="fa fa-star" style="color:#f1c40f"></i><i
                                                            class="fa fa-star"
                                                            style="color: rgb(241, 196, 15);"></i><i
                                                            class="fa fa-star"
                                                            style="color: rgb(241, 196, 15);"></i><i
                                                            class="fa fa-star" style="color:#ecf0f1"></i><i
                                                            class="fa fa-star" style="color:#ecf0f1"></i>

                                                    </div>
                                                    <p class="font-13 text-muted mt-2">In reality space is
                                                        bigger than it seems in photo's.</p>
                                                </div>
                                                <div class="col-sm-2 col-12 my-auto content-button">
                                                    <div class="float-end">
                                                        <a href="javascript:void(0);" class="btn btn-primary px-2">
                                                            <i class="zmdi zmdi-mail-reply me-1"></i>Reply
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ms-0 border mb-5 p-4 br-5 col-12">
                                                <div class="col-md-1 col-2">
                                                    <a href="{{ url('profile') }}"> <img
                                                            class="media-object rounded-circle profile_img_res"
                                                            alt="64x64"
                                                            src="{{ asset('assets/images/users/5.jpg') }}">
                                                    </a>
                                                </div>
                                                <div class="col-md-11 ps-md-5 ps-lg-2 col-10 reply-content-heading">
                                                    <h5 class="mt-3 text-dark">Gavin Murray</h5>
                                                </div>
                                                <div class="col-md-1 col-2 empty"></div>
                                                <div class="col-md-9 col-sm-8 col-10 reply-content">
                                                    <span class="tex-dark">June 14, 2023 at 8:00 pm</span>
                                                    <div class="rating-stars" id="rating-1" data-stars="2"
                                                        style="cursor: pointer; text-align:left !important;font-size: 14px">
                                                        <input type="hidden" name="rating-1" value="0"><i
                                                            class="fa fa-star" style="color:#f1c40f"></i><i
                                                            class="fa fa-star"
                                                            style="color: rgb(241, 196, 15);"></i><i
                                                            class="fa fa-star"
                                                            style="color: rgb(241, 196, 15);"></i><i
                                                            class="fa fa-star" style="color:#ecf0f1"></i><i
                                                            class="fa fa-star" style="color:#ecf0f1"></i>

                                                    </div>
                                                    <p class="font-13 text-muted mt-2">In reality space is
                                                        bigger than it seems in photo's.</p>
                                                </div>
                                                <div class="col-sm-2 col-12 my-auto content-button">
                                                    <div class="float-end">
                                                        <a href="javascript:void(0);" class="btn btn-primary px-2">
                                                            <i class="zmdi zmdi-mail-reply me-1"></i>Reply
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ms-0 border mb-5 p-4 br-5 col-12">
                                                <div class="col-md-1 col-2">
                                                    <a href="{{ url('profile') }}"> <img
                                                            class="media-object rounded-circle profile_img_res"
                                                            alt="64x64"
                                                            src="{{ asset('assets/images/users/5.jpg') }}">
                                                    </a>
                                                </div>
                                                <div class="col-md-11 ps-md-5 ps-lg-2 col-10 reply-content-heading">
                                                    <h5 class="mt-3 text-dark">Gavin Murray</h5>
                                                </div>
                                                <div class="col-md-1 col-2 empty"></div>
                                                <div class="col-md-9 col-sm-8 col-10 reply-content">
                                                    <span class="tex-dark">June 14, 2023 at 8:00 pm</span>
                                                    <div class="rating-stars" id="rating-1" data-stars="2"
                                                        style="cursor: pointer; text-align:left !important;font-size: 14px">
                                                        <input type="hidden" name="rating-1" value="0"><i
                                                            class="fa fa-star" style="color:#f1c40f"></i><i
                                                            class="fa fa-star"
                                                            style="color: rgb(241, 196, 15);"></i><i
                                                            class="fa fa-star"
                                                            style="color: rgb(241, 196, 15);"></i><i
                                                            class="fa fa-star" style="color:#ecf0f1"></i><i
                                                            class="fa fa-star" style="color:#ecf0f1"></i>

                                                    </div>
                                                    <p class="font-13 text-muted mt-2">In reality space is
                                                        bigger than it seems in photo's.</p>
                                                </div>
                                                <div class="col-sm-2 col-12 my-auto content-button">
                                                    <div class="float-end">
                                                        <a href="javascript:void(0);" class="btn btn-primary px-2">
                                                            <i class="zmdi zmdi-mail-reply me-1"></i>Reply
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="border-3">
                                        <div class="mt-5">
                                            <h3 class="text-dark mb-5">
                                                Meet the Team
                                            </h3>
                                            <div class="row">
                                                <div class="col-md-1 col-2">
                                                    <a href="{{ url('profile') }}"> <img
                                                            class="media-object rounded-circle profile_img_res"
                                                            alt="64x64"
                                                            src="{{ asset('assets/images/users/5.jpg') }}">
                                                    </a>
                                                </div>
                                                <div class="col-md-11 ps-md-5 ps-lg-2 col-10 reply-content-heading">
                                                    <h5 class="mt-2 text-dark">Ellison Wane</h5>
                                                    <span class="tex-dark">Owner</span>
                                                </div>
                                                <div class="col-md-1 col-2 empty"></div>
                                                <div class="col-md-9 col-sm-8 col-10 reply-content">
                                                    <p class="font-13 text-muted mt-2">I've worked in the events industry for more than ten years, organizing international weddings and overseeing significant regional
                                                        events. I relocated to Paris to work with Fete in France, assisting in the development of international events, after spending several
                                                        years working for a prestigious Maine wedding planning business. I made the decision to begin organizing weddings and events on
                                                        my own because of my years of experience and love of event planning. Creating stunning, once-in-a-lifetime events for my couples
                                                        and clients gives me immense excitement.</p>
                                                        <div class="d-flex seller-btn">
                                                            <a href="javascript:void(0)" class="btn btn-outline-primary">Message Seller</a>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="mt-3 text-center">
                                            <h2>Message Seller</h2>
                                            <p>Starting Cost: $$$ - Moderate</p>
                                        </div>
                                        <hr class="border-3">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <form action="#">
                                                        <input type="text" class="form-control mb-3" value="First Name">
                                                        <input type="text" class="form-control mb-3" value="Last Name">
                                                        <input type="email" id="example-email mb-3" name="example-email" class="form-control" placeholder="Email">
                                                        <div class="input-group mt-3">
                                                            <div class="input-group-text">
                                                                <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                                            </div><input class="form-control fc-datepicker"
                                                                placeholder="Wedding Date" type="text">
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-3 mt-2">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">My wedding date is flexible</span>
                                                        </div>
                                                        <input type="text" class="form-control mb-3" value="Number of Guests">
                                                        <textarea name="" id="" class="form-control" rows="3" class="mb-3" placeholder="Interduce yourself and the share your event vision"></textarea>
                                                        <div class="mt-3">
                                                            <p>By clicking 'Request Quote', you agree that your information
                                                                will be shared with the vendor. Please see our Privacy Policy
                                                                and Terms of Use for details..</p>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-12 pe-0">
                                                                <input type='button' class="btn btn-primary text-white w-100" id='quote-btn' value="Request a Quote">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- container-closed -->
                </div>
            </div>
            <!--app-content closed-->
        </div>
        <!-- page-main closed -->

        @include('layouts.components.sidebar-right')

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
    <script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>

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

            $(document).on("click", "#quote-btn", function(e) {
                $('body').addClass('timer-alert');
                swal({
                    title: 'Title',
                    text: 'Great job! You sent a quote request to seller on Eventopia. Check your notification for acknowledgement.',
                    timer: 3000
                });
            });
        });
    </script>

</body>

</html>
