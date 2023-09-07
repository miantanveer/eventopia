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
        height: 751px;
        background-size: cover;
        background-repeat: no-repeat;


    }

    .box {
        border: 1px solid #8e8e8e40;
        width: 500px;
        position: absolute;
        left: 50px;
        top: 150px;
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


    .container-fluid-div {
        background-color: #0080ff;
        width: 100%;
        height: 250px;

    }

    .position-content {
        position: absolute;
        top: 70px;
        left: 140px;
    }

    .container .image-button {
        padding: 12px 80px;
        border: 2px solid white;
        font-weight: bold;
        background-color: #ffffff;
        position: absolute;
        bottom: -24px;
        left: 97px;
        border-bottom: 2px solid #d5d2d2;
        border-radius: 5px;
    }

    .height-of-content {
        height: 840px !important;
    }

    @media(min-width:0px) and (max-width:767px) {
        .vtimeline .timeline-wrapper .timeline-panel {
            margin-left: 0px !important;
        }
    }

    @media only screen and (max-width:700px) {
        .main-container .hero-container .bg {
            margin-left: 0px;
            background: url("{{ asset('assets/images/users/spaces/12.jpg') }}");
            position: relative;
            background-position: bottom;
            height: 751px;
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-self: center;
            background-attachment: fixed;
        }

        .main-container .hero-container .bg .box {
            border: 1px solid #8e8e8e40;
            width: 500px;
            position: absolute;
            top: 150px;

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
            margin: 2px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .box a {
            margin: 13px;
            left: 2px;

        }
    }

    @media only screen and (max-width:800px) {
        .container-fluid-div {
            width: 100%;
            height: 250px;
        }

        .position-content {
            position: absolute;
            top: 70px;
            left: 0px;
            text-align: center;
        }

        .image-button {
            position:fixed;
            margin-left:120px;

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
    <div class="page bg-white">
        <div class="page-main">

            @include('layouts.components.seller-header')

            <br>
            <br>
            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- container -->
                    <div class="main-container container-fluid">
                        <div class="hero-container">
                            <div class="bg ">

                                <div class="box">

                                    <h1 style="margin-left:20px;">Be paid to host events on Eventopia.</h1>
                                    <br>
                                    <p>Join the hundreds of hosts who are already renting out
                                        their facilities for parties, meetings, and photo and film
                                        shoots.</p>
                                    <br>
                                    <p>What type of space do you have?</p>
                                    <div class="btns">
                                        <input style="padding-left:140px;padding-right:160px;" type="text" class="btn btn-light rounded-0" placeholder="Party hall">
                                    </div>
                                    <div>
                                        <a style="padding-left:190px;padding-right:195px;" class="modal-effect btn btn-info rounded-0" data-bs-target="#my-modal" data-bs-toggle="modal">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br class="mb-5">
                    <div class="host mt-5">
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
                                            <div class="avatar avatar-md timeline-badge" style="position: absolute; top: -60px; left:calc(4% - 26px);">
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
                                            <div class="avatar avatar-md timeline-badge" style="position: absolute; top: -60px; left:calc(4% - 26px);">
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
                <div class="position-relative my-5">
                    <div class="container-fluid height-of-content">
                        <div class="container-fluid-div"></div>
                        <div class="container position-content">
                            <h1 class="text-center text-white"><strong>Every space belongs on Eventopia</strong></h1>
                            <div class="row mt-5 mb-2">
                                <div class="col-md-6 col-xl-3 mt-5">
                                    <div class="bg-primary-transparent">
                                        <a href="#"><img src="{{ asset('assets/images/users/spaces/001.png') }}" alt="img"></a>
                                        <button type="button" class="btn btn-basic image-button">Homes</button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3 mt-5">
                                    <div class="bg-primary-transparent">
                                        <a href="#"><img src="{{ asset('assets/images/users/spaces/002.png') }}" alt="img"></a>
                                        <button type="button" class="btn btn-basic image-button">Loft</button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3 mt-5">
                                    <div class="bg-primary-transparent">
                                        <a href="#"><img src="{{ asset('assets/images/users/spaces/003.png') }}" alt="img"></a>
                                        <button type="button" class="btn btn-basic image-button">Studios</button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3 mt-5">
                                    <div class="bg-primary-transparent">
                                        <a href="#"><img src="{{ asset('assets/images/users/spaces/004.png') }}" alt="img"></a>
                                        <button type="button" class="btn btn-basic image-button">Warehouses</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6 col-xl-3 mt-5">
                                    <div class="bg-primary-transparent">
                                        <a href="#"><img src="{{ asset('assets/images/users/spaces/005.png') }}" alt="img"></a>
                                        <button type="button" class="btn btn-basic  image-button">Galleries</button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3 mt-5">
                                    <div class="bg-primary-transparent">
                                        <a href="#"><img src="{{ asset('assets/images/users/spaces/006.png') }}" alt="img"></a>
                                        <button type="button" class="btn btn-basic image-button">Bars</button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3 mt-5">
                                    <div class="bg-primary-transparent">
                                        <a href="#"><img src="{{ asset('assets/images/users/spaces/007.png') }}" alt="img"></a>
                                        <button type="button" class="btn btn-basic image-button">Coworking</button>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3 mt-5">
                                    <div class="bg-primary-transparent">
                                        <a href="#"><img src="{{ asset('assets/images/users/spaces/008.png') }}" alt="img"></a>
                                        <button type="button" class="btn btn-basic image-button">Event
                                            venues</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body mt-4 mb-5">
                <div class="accordion" id="accordionExample">
                    <h1 style="text-align:center;"><strong>FAQs</strong></h1>
                    <div style="border-color:transparent;" class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">

                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <p style="color:#003B95;" class="d-block">Who can be a eventopia host?</p>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                            <div class="accordion-body">
                                <p>Eventopia attracts a wide range of places, including residences, galleries, photo
                                    studios, and warehouses.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="accordion" id="accordionExample">
                    <div style="border-color:#d9dbdd;" class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How do I get paid?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque molestias deleniti quis
                                at quam, neque ducimus nam ipsam nisi dolores non hic numquam ratione odio in ea nulla,
                                sint recusandae praesentium possimus dolor. Harum, dolore?
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="accordion" id="accordionExample">
                    <div style="border-color:#d9dbdd;" class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Does Eventopia provide insurance?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, quisquam impedit autem
                                pariatur a laboriosam fugit ex ullam, et minus eum! Facere amet, animi beatae sequi,
                                perspiciatis asperiores nihil consequuntur voluptatibus modi adipisci, voluptates ipsam?
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="accordion mb-5" id="accordionExample">
                    <div style="border-color:#d9dbdd;" class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How can i contact?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, debitis minima
                                accusantium eveniet dignissimos sunt magnam ad repellendus ab aperiam nobis
                                necessitatibus quo a adipisci. Tenetur officiis necessitatibus minus sapiente nisi iste
                                perspiciatis totam autem!
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- container-closed -->
        </div>
        <!--app-content closed-->
    </div>
    <!-- page-main closed -->

    <!--modal-->

    @include('layouts.components.modal')

    @yield('modal')

    </div>
    <!-- page -->

    <!-- global-helper -->
    @include('layouts.components.global-helper')

    @include('layouts.components.dark-footer')

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

    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#signUp_form').parsley();
        });
    </script>
    <script src="{{ asset('assets/js/email-validate.js') }}"></script>
    
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
