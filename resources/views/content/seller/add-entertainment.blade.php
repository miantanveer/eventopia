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
    .bg-talent {
        background: url("{{ asset('assets/images/users/spaces/entertainment.png') }}");
        position: relative;
        background-position: center;
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;

    }

    .box {
        width: 500px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        color: black;
        background-color: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
        z-index: 1;
    }

    /* .box1 {
        width: 500px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        color: black;
        background-color: none;
    } */

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
            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- container -->
                    <div class="bg-talent">
                        <div class="box">
                            <div class="container box1">
                                <h3 class="text-center mt-6">{{lang('Get more gigs on Eventopia!')}}</h1>
                                    <br>
                                    <p class="text-center">{{lang('Connect with party planners and get booked for everything
                                        from
                                        weddings to birthday parties to corporate events.')}}</p>
                                    <br>
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="exampleInputPhone1">{{lang("What's your talent?")}}</label>
                                            <input type="text" class="form-control" id="exampleInputPhone1"
                                                placeholder="{{lang('Guitarists, Caterer, Santa')}}" required
                                                data-parsley-required-message="{{lang('Your Name is required*')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhone2">{{lang('Where do you gig?')}}</label>
                                            <input type="text" class="form-control" id="exampleInputPhone2"
                                                placeholder="{{lang('Los Angles, LAr')}}" required
                                                data-parsley-required-message="{{lang('Phone Number is required*')}}">
                                        </div>
                                        <h4>8,500+</h4>
                                        <p>{{lang('Leads sent each day')}}</p>
                                        <div>
                                            <a style="padding-left:180px;padding-right:170px;"
                                                class="modal-effect m-0 mt-3 mb-6 btn btn-info rounded-0"
                                                data-bs-target="#add-entertainment" data-bs-toggle="modal">
                                                {{lang('Get Started')}}</a>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br class="mb-5">
                    <div class="host mt-5">
                        <h1><strong>{{lang('Get paid to do what you love')}}</strong></h1>
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
                                            <div class="avatar avatar-md timeline-badge"
                                                style="position: absolute; top: -60px; left:calc(4% - 26px);">
                                                <span class="timeline-icon">1</span>
                                            </div>

                                            <div class="timeline-heading">
                                                <h3 class="timeline-title">{{lang('Create a profile')}}</h3>
                                            </div>
                                            <div class="timeline-body">
                                                <p>{{lang('Collect reviews, upload photos, and add videos to your profile to
                                                    show off your talent or service and attract new clients.')}}
                                                </p>
                                            </div>
                                            <div class="timeline-footer d-flex align-items-center flex-wrap">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-wrapper timeline-inverted timeline-wrapper-primary">
                                        <div class="timeline-panel">
                                            <div class="avatar avatar-md timeline-badge"
                                                style="position: absolute; top: -60px; left:calc(4% - 26px);">
                                                <span class="timeline-icon">2</span>
                                            </div>

                                            <div class="timeline-heading">
                                                <h3 class="timeline-title">{{lang('Get customized leads')}}</h3>
                                            </div>
                                            <div class="timeline-body">
                                                <p>{{lang('Use lead preference settings and calendar tools to get the leads
                                                    you want whether you’re a freelancer or full-time gig worker.')}}</p>
                                            </div>
                                            <div class="timeline-footer d-flex align-items-center flex-wrap">


                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-wrapper timeline-wrapper-primary">

                                        <div class="timeline-panel">
                                            <div class="avatar avatar-md timeline-badge"
                                                style="position: absolute; top: -60px; left:calc(4% - 26px);">
                                                <span class="timeline-icon">3</span>
                                            </div>
                                            <div class="timeline-heading">
                                                <h3 class="timeline-title">{{lang('Send quotes')}}</h3>
                                            </div>
                                            <div class="timeline-body">
                                                <p>{{lang('Our intuitive message system allows you to create templates
                                                    and send custom quotes for every potential job.')}}</p>
                                            </div>
                                            <div class="timeline-footer d-flex align-items-center flex-wrap">


                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-wrapper timeline-inverted timeline-wrapper-primary">
                                        <div class="timeline-panel">
                                            <div class="avatar avatar-md timeline-badge"
                                                style="position: absolute; top: -60px; left:calc(4% - 26px);">
                                                <span class="timeline-icon">4</span>
                                            </div>

                                            <div class="timeline-heading">
                                                <h3 class="timeline-title">{{lang('Get booked')}}</h3>
                                            </div>
                                            <div class="timeline-body">
                                                <p>{{lang('Book local jobs and get paid quickly. Clients pay through
                                                    Eventopia which means your payment is guaranteed every time!')}}</p>
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
            </div>
            <!-- End Row -->
            <h3 class="text-center my-3">{{lang('Decorations')}}</h3>
            <div class="row">
                <div class="col-12 bg-white">
                    <div class="container">
                        <div class="card custom-card">
                            <div class="card-body pt-0 h-100">
                                <div class="owl-carousel my-carousel">
                                    <div class="item">
                                        <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                            <div class="card overflow-hidden my-0  content-width">
                                                <div class="row p-3">
                                                    <div class="card-body">
                                                        <div class="text-center chat-image mb-5">
                                                            <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                                                <a class="" href="#"><img alt="avatar"
                                                                        src="{{ asset('assets/images/users/spaces/user-1.png') }}"
                                                                        class="avatar avatar-xxl chat-profile mb-3 brround"></a>
                                                            </div>
                                                            <div class="main-chat-msg-name mx-3">
                                                                <a href="{{ url('profile') }}">
                                                                    <h5 class="mb-1 text-dark fw-semibold">{{lang('Daniel Joe')}}
                                                                    </h5>
                                                                </a>
                                                                <p class="text-muted mt-0 mb-0 pt-0 fs-13">
                                                                    {{lang('Singing/Songwriter')}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <p>{{lang('My life changed by Eventopia.')}}</p>
                                                            <p>{{lang("Lorem Ipsum is simply dummy text of the printing
                                                                and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the
                                                                1500s, when an unknown printer took a galley of
                                                                type and scrambled it to make a type specimen
                                                                book.")}}</p>
                                                        </div>
                                                        <a href="#">{{lang('Learn more')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                            <div class="card overflow-hidden my-0 content-width">
                                                <div class="row p-3">
                                                    <div class="card-body">
                                                        <div class="text-center chat-image mb-5">
                                                            <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                                                <a class="" href="#"><img alt="avatar"
                                                                        src="{{ asset('assets/images/users/spaces/user-2.png') }}"
                                                                        class="avatar avatar-xxl chat-profile mb-3 brround"></a>
                                                            </div>
                                                            <div class="main-chat-msg-name mx-3">
                                                                <a href="{{ url('profile') }}">
                                                                    <h5 class="mb-1 text-dark fw-semibold">{{lang('John Smith')}}
                                                                    </h5>
                                                                </a>
                                                                <p class="text-muted mt-0 mb-0 pt-0 fs-13">{{lang('Comedian')}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <p>{{lang('My life changed by Eventopia.')}}</p>
                                                            <p>{{lang("Lorem Ipsum is simply dummy text of the printing
                                                                and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the
                                                                1500s, when an unknown printer took a galley of
                                                                type and scrambled it to make a type specimen
                                                                book.")}}</p>
                                                        </div>
                                                        <a href="#">{{lang('Learn more')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                            <div class="card overflow-hidden my-0 content-width">
                                                <div class="row p-3">
                                                    <div class="card-body">
                                                        <div class="text-center chat-image mb-5">
                                                            <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                                                <a class="" href="#"><img alt="avatar"
                                                                        src="{{ asset('assets/images/users/spaces/pro.png') }}"
                                                                        class="avatar avatar-xxl chat-profile mb-3 brround"></a>
                                                            </div>
                                                            <div class="main-chat-msg-name mx-3">
                                                                <a href="{{ url('profile') }}">
                                                                    <h5 class="mb-1 text-dark fw-semibold">{{lang('Ryah Wick')}}
                                                                    </h5>
                                                                </a>
                                                                <p class="text-muted mt-0 mb-0 pt-0 fs-13">{{lang('Musician')}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <p>{{lang('My life changed by Eventopia.')}}</p>
                                                            <p>{{lang("Lorem Ipsum is simply dummy text of the printing
                                                                and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the
                                                                1500s, when an unknown printer took a galley of
                                                                type and scrambled it to make a type specimen
                                                                book.")}}</p>
                                                        </div>
                                                        <a href="#">{{lang('Learn more')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                            <div class="card overflow-hidden my-0 content-width">
                                                <div class="row p-3">
                                                    <div class="card-body">
                                                        <div class="text-center chat-image mb-5">
                                                            <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                                                <a class="" href="#"><img alt="avatar"
                                                                        src="{{ asset('assets/images/users/spaces/pro.png') }}"
                                                                        class="avatar avatar-xxl chat-profile mb-3 brround"></a>
                                                            </div>
                                                            <div class="main-chat-msg-name mx-3">
                                                                <a href="{{ url('profile') }}">
                                                                    <h5 class="mb-1 text-dark fw-semibold">{{lang('john Doe')}}</h5>
                                                                </a>
                                                                <p class="text-muted mt-0 mb-0 pt-0 fs-13">{{lang('Space owner')}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <p>{{lang('My life changed by Eventopia.')}}</p>
                                                            <p>{{lang("Lorem Ipsum is simply dummy text of the printing
                                                                and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the
                                                                1500s, when an unknown printer took a galley of
                                                                type and scrambled it to make a type specimen
                                                                book.")}}</p>
                                                        </div>
                                                        <a href="#">{{lang('Learn more')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card-body">
                    <div class="accordion" id="accordionExample">
                        <h1 style="text-align:center;"><strong>{{lang('FAQs')}}</strong></h1>
                        <div style="border-color:transparent;" class="accordion-item"></div>
                        <h2 class="accordion-header" id="headingOne">
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <p>{{lang('Eventopia attracts a wide range of places, including residences, galleries, photo
                                        studios, and warehouses.')}}</p>
                                </div>
                            </div>
                    </div>
                </div>
                <br>
                <div class="accordion" id="accordionExample">
                    <div style="border-color:#d9dbdd;" class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                {{lang('How do event planners find me on Eventopia?')}}
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample" style="">
                            <div class="accordion-body">
                                {{lang('The majority of GigSalad traffic comes from search engines where we rank high (top 1-3
                                spots) organically across almost all categories and locations for
                                queries like “musicians for hire near me” or “face painters in Los Angeles.”

                                Once a planner lands on our site, they can browse profiles to determine the person or
                                group
                                who’s best for their event. They can then contact you directly
                                or submit a general request. General requests are sent to up to 10 appropriate vendors
                                that
                                match the client’s needs.')}}
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="accordion" id="accordionExample">
                    <div style="border-color:#d9dbdd;" class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                {{lang("How many leads and bookings can I expect to get?")}}
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{lang("Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, quisquam impedit autem
                                pariatur a laboriosam fugit ex ullam, et minus eum! Facere amet, animi beatae sequi,
                                perspiciatis asperiores nihil consequuntur voluptatibus modi adipisci, voluptates ipsam?")}}
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="accordion" id="accordionExample">
                    <div style="border-color:#d9dbdd;" class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                               {{lang(" Do I have to pay to receive or respond to leads?")}}
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{lang("Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, debitis minima
                                accusantium eveniet dignissimos sunt magnam ad repellendus ab aperiam nobis
                                necessitatibus quo a adipisci. Tenetur officiis necessitatibus minus sapiente nisi iste
                                perspiciatis totam autem!")}}
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="accordion mb-5" id="accordionExample">
                    <div style="border-color:#d9dbdd;" class="accordion-item">
                        <h2 class="accordion-header" id="headingfive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                {{lang("How do I get paid for my gigs?")}}
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{lang("Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, debitis minima
                                accusantium eveniet dignissimos sunt magnam ad repellendus ab aperiam nobis
                                necessitatibus quo a adipisci. Tenetur officiis necessitatibus minus sapiente nisi iste
                                perspiciatis totam autem!")}}
                            </div>
                        </div>
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
    {{-- @include() --}}

    @include('layouts.components.dark-footer')

    @include('layouts.components.scripts')

    <!-- OWL CAROUSEL JS-->
    <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>

    <!-- OWL Carousel js -->
    <script src="{{ asset('assets/js/carousel.js') }}"></script>

    <!-- Custom JavaScript code -->
    <script>
        $(document).ready(function() {
            $(".my-carousel").owlCarousel({
                loop: true,
                rewind: false,
                margin: 25,
                animateIn: 'fadeInDowm',
                animateOut: 'fadeOutDown',
                autoplay: false,
                autoplayTimeout: 5000, // set value to change speed
                autoplayHoverPause: true,
                dots: false,
                nav: true,
                autoplay: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1300: {
                        items: 3
                    }

                }
            });
        });
    </script>
</body>

</html>
