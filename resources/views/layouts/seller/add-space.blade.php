<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash –  Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="SPRUKO™">
    <meta name="keywords" content="admin, admin dashboard, admin dashboard template, bootstrap admin, bootstrap dashboard, dashboard laravel, dashboard template, laravel admin, laravel admin dashboard, laravel admin dashboard template, laravel admin panel, laravel admin template, laravel dashboard template, laravel template, laravel ui template">

    <!-- title -->
    <title>Eventopia</title>

    @include('layouts.components.styles')

</head>
<style>
    .bg {
        background: url("{{ asset('assets/images/users/spaces/12.jpg') }}");
        position: relative;
        background-position: right;
        height: 750px;
        background-size: cover;

    }

    .box {
        border: 1px solid #8e8e8e40;
        width: 500px;
        position: absolute;
        left: 50px;
        top: 200px;
        color: black;
        background-color: rgba(255, 255, 255, 0.5);

    }

    .box p {
        text-align: center;
        font-size: 17px;
        font-weight: bold;

    }

    .box h1 {
        font-weight: bolder;
    }

    .box .btns {
        margin: 20px;
    }

    .box a {
        margin: 20px;
    }

    .host {
        text-align: center;
        font-size: 42px;
        color: black;
    }

    .container-fluid {
        background-color: #0080ff;
        position: relative;
        text-align: center;
        width: 100vw;
        height: 350px;

    }

    .container {
        background-color: #ffffff;
        width: 100%;
        display: flex;



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

            @include('layouts.seller.seller-header')

            <br>
            <br>
            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- container -->
                    <div class="main-container container-fluid">
                        <div class="bg">

                            <div class="box">

                                <h1>Be paid to host events on Eventopia.</h1>
                                <br>
                                <p>Join the hundreds of hosts who are already renting out
                                    their facilities for parties, meetings, and photo and film
                                    shoots.</p>
                                <br>
                                <p>What type of space do you have?</p>
                                <div class="btns">
                                    <input style="padding-left:140px;padding-right:160px;" type="text" class="btn btn-light rounded-0" placeholder="Party hall">
                                </div>
                                <a style="padding-left:190px;padding-right:195px;" class="btn btn-info rounded-0" href="#">Get Started</a>

                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="host">
                        <h1><strong>How hosting operates</strong></h1>
                    </div>
                    <br>
                    <!-- Row -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom-0 custom-card-header">
                                <h6 class="main-content-label mb-0"></h6>
                            </div>
                            <div class="card-body">
                                <div class="vtimeline">
                                    <div class="timeline-wrapper timeline-wrapper-primary">
                                        <div class="timeline-panel">
                                            <div class="avatar avatar-md timeline-badge">
                                                <span class="timeline-icon">1</span>
                                            </div>

                                            <div class="timeline-heading">
                                                <h3 class="timeline-title">List your space for free</h3>
                                            </div>
                                            <div class="timeline-body">
                                                <p>Millions of individuals looking for space will be able to view
                                                    your listing once you've set your pricing and included any
                                                    necessary data, pictures, and descriptions.
                                                </p>
                                            </div>
                                            <div class="timeline-footer d-flex align-items-center flex-wrap">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-wrapper timeline-inverted timeline-wrapper-primary">
                                        <div class="timeline-panel">
                                            <div class="avatar avatar-md timeline-badge" style="position: absolute; top: -60px; left:calc(4% - 26px);">
                                                <span class="timeline-icon">2</span>
                                            </div>

                                            <div class="timeline-heading">
                                                <h3 class="timeline-title">Welcome guests to your space</h3>
                                            </div>
                                            <div class="timeline-body">
                                                <p>Once you agree, your guests will receive directions, as well as
                                                    information like your wifi code, and you may communicate with
                                                    them and take reservations through the Eventopia platform.</p>
                                            </div>
                                            <div class="timeline-footer d-flex align-items-center flex-wrap">


                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-wrapper timeline-wrapper-primary">

                                        <div class="timeline-panel">
                                            <div class="avatar avatar-md timeline-badge">
                                                <span class="timeline-icon">3</span>
                                            </div>
                                            <div class="timeline-heading">
                                                <h3 class="timeline-title">Get paid every time</h3>
                                            </div>
                                            <div class="timeline-body">
                                                <p>The upfront fee is collected from visitors using Eventopia's safe
                                                    payment platform. Following each booking, your compensation is
                                                    instantly transferred, less our service charge.</p>
                                            </div>
                                            <div class="timeline-footer d-flex align-items-center flex-wrap">


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <div class="section-new">
                    <div class="container-fluid">
                        <h1><strong>Every space belongs on Eventopia</strong></h1>
                        <div class="container">
                            <div class="col-md-6 col-xl-3">
                                <div class="card border text-primary bg-primary-transparent">
                                    <div class="card-body">
                                        <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                            <a href="#"><img src="{{ asset('assets/images/users/spaces/001.png') }}" alt="img"></a>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card border text-primary bg-primary-transparent">
                                    <div class="card-body">
                                        <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                            <a href="#"><img src="{{ asset('assets/images/users/spaces/002.png') }}" alt="img"></a>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="imgs">
                        <div class="images">
                            <img src="{{ asset('assets/images/users/spaces/001.png') }}" alt="img">
                            <img src="{{ asset('assets/images/users/spaces/002.png') }}" alt="img">
                            <img src="{{ asset('assets/images/users/spaces/003.png') }}" alt="img">
                            <img src="{{ asset('assets/images/users/spaces/004.png') }}" alt="img">
                        </div>
                
                        <div class="images">
                            <img src="{{ asset('assets/images/users/spaces/005.png') }}" alt="img">
                            <img src="{{ asset('assets/images/users/spaces/006.png') }}" alt="img">
                            <img src="{{ asset('assets/images/users/spaces/007.png') }}" alt="img">
                            <img src="{{ asset('assets/images/users/spaces/008.png') }}" alt="img">
                        </div>
                    </div> -->





            </div>

            <!-- container-closed -->
        </div>
    </div>
    <!--app-content closed-->
    </div>
    <!-- page-main closed -->



    @include('layouts.components.modal')

    @yield('modal')

    </div>
    <!-- page -->

    <!-- global-helper -->
    <div id="global-helper" class="position-fixed bottom-0 end-0 p-3">
        <div class="dropup btn-group mt-2 mb-2">
            <button class="btn-pill text-end p-2 text-info bg-white border-info " type="button" data-bs-toggle="dropdown" aria-expanded="true">Need any help?</button>
            <ul class="dropdown-menu" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(0px, -40px, 0px);" data-popper-placement="top-start">
                <form id="contactForm">
                    <div class="row">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
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
    <script src="{{asset('assets/plugins/timeline/js/timeline.min.js')}}"></script>

    <!-- Internal Timeline js-->
    <script src="    {{asset('assets/js/timline.js')}}"></script>
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