<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Eventopia">
    <meta name="author" content="SPRUKO™">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="{{ asset('assets/css/landing-page.css') }}">
    <title>Eventopia | Landing Page</title>
    <script src="{{ asset('assets/js/flatpicker.min.js') }}"></script>
    @include('layouts.components.styles')

</head>

<body class="app sidebar-mini ltr bg-white">
    <!-- global-loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- global-loader closed -->

    <!-- page -->
    <div class="page">
        <div class="page-main">
            <div class="content">
                @include('layouts.components.landing-page-header')
                <div class="inline-form container my-7 my-sm-3">
                    <h1 class="h1 text-white font-size-h1 fw-bold">Book a special space for your event</h1>
                    <form action="{{URL('/search-results')}}" class="ms-5 form-blur-border">
                        <div class="row bg-whiter justify-content-between text-start py-3 px-5 mx-5 mx-sm-0 box-sizing"
                            id="form-border">

                            <div class="col-sm-4 px-0 border-end border-end0">
                                <label class="mb-0 label-none my-font-size"><b>What have you got planned?</b></label>
                                <input type="text" class="form-control input py-0 px-0" id="searchTerm1"
                                    placeholder="Enter Your Activity">
                            </div>
                            <div class="col-sm-4 border-end border-end0 px-0 px-sm-3 my-3 my-sm-0">
                                <label class="mb-0 label-none font-size"><b>Where?</b></label>
                                <input type="text" class="form-control input py-0 px-0" id="searchTerm2"
                                    placeholder="Enter a City or Address">
                            </div>
                            <div class="col-sm-3 border-end0 pe-0 px-0 px-sm-3 mb-3 mb-sm-0">
                                <label class="mb-0 label-none font-size"><b>When?</b></label>
                                <input type="text" class="form-control input py-0 px-0" id="flatpickrDate"
                                    placeholder="Anytime">
                            </div>
                            <div class="col-sm-1 text-end px-0">
                                <button type="submit"
                                    class="btn btn-color rounded text-end button mx-lg-5 d-none d-sm-block"><i
                                        class="fa fa-search text-white"></i></button>
                                <button type="submit"
                                    class="btn btn-primary btn-search mx-0 px-0 text-center d-sm-none d-block">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-lg-6 mb-md-5 mb-3 bg-white">
        <h1 class="text-center my-6"><b> A lot of spaces for every moment.</b></h1>
        <div class="">
            <h3 class="text-center my-2">Parties</h3>
            @include('layouts.components.landing_slider')
        </div>
    </div>
    <div class="landing_background">
        <div class="container">
            <h1 class="text-center pt-7 text-white image-h1 heading_font">Book the perfect entertainment & <br>
                talent for your upcoming event.</h1>
            <p class="text-center text-white px-md-9 px-sm-5">For every event, from weddings to birthday celebrations, we'll help you
                book
                the best talent.</p>
            <form action="#" class="ms-5 mt-0 mt-lg-7 mt-md-3 image-form form-blur-border">
                <div class="row bg-white ms-0 py-3 ps-5 box-sizing rounded-form w-100 align-items-center">
                    <div class="col-10"><input type="text" class="form-control input input_placeholder"
                            placeholder="What type of entertainment or talent can we assist you in finding?"></div>
                    <div class="col-2 text-center px-0">
                        <button type="submit" class="btn btn-color rounded text-end button mx-lg-5"><i
                                class="fa fa-search text-white"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div>
        <h1 class="text-center mt-lg-7 mt-md-4 mt-3 fs-1 heading_fon">Make your plans exceptional <br> whatever they may be.</h1>
        <h3 class="text-center my-3">Musical Acts</h3>
        <div class="row">
            <div class="col-12 bg-white">
                <div class="container">
                    <div class="card custom-card">
                        <div class="card-body pt-0 h-100">
                            <div class="owl-carousel owl-carousel-icons2">
                                <div class="item">
                                    <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                        <div class="card overflow-hidden my-0 card_height">
                                            <a class="h-100" href="{{ URL('/space-details') }}">
                                                <img src="{{ asset('assets/images/users/spaces/1.jpg') }}"
                                                    class="card-img-top h-100" alt="img">
                                                <div class="over_lay">
                                                    <h5>Singers</h5>
                                                    <p>Country Singers, Singing Guitarists, Rappers...</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                        <div class="card overflow-hidden my-0 card_height">
                                            <a class="h-100" href="{{ URL('/space-details') }}">
                                                <img src="{{ asset('assets/images/users/spaces/2.jpg') }}"
                                                    class="card-img-top h-100" alt="img">
                                                <div class="over_lay">
                                                    <h5>Singers</h5>
                                                    <p>Country Singers, Singing Guitarists, Rappers...</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                        <div class="card overflow-hidden my-0 card_height">
                                            <a class="h-100" href="{{ URL('/space-details') }}">
                                                <img src="{{ asset('assets/images/users/spaces/3.jpg') }}"
                                                    class="card-img-top h-100" alt="img">
                                                <div class="over_lay">
                                                    <h5>Singers</h5>
                                                    <p>Country Singers, Singing Guitarists, Rappers...</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                        <div class="card overflow-hidden my-0 card_height">
                                            <a class="h-100" href="{{ URL('/space-details') }}">
                                                <img src="{{ asset('assets/images/users/spaces/4.jpg') }}"
                                                    class="card-img-top h-100" alt="img">
                                                <div class="over_lay">
                                                    <h5>Singers</h5>
                                                    <p>Country Singers, Singing Guitarists, Rappers...</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                        <div class="card overflow-hidden my-0 card_height">
                                            <a class="h-100" href="{{ URL('/space-details') }}">
                                                <img src="{{ asset('assets/images/users/spaces/5.jpg') }}"
                                                    class="card-img-top h-100" alt="img">
                                                <div class="over_lay">
                                                    <h5>Singers</h5>
                                                    <p>Country Singers, Singing Guitarists, Rappers...</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                        <div class="card overflow-hidden my-0 card_height">
                                            <a class="h-100" href="{{ URL('/space-details') }}">
                                                <img src="{{ asset('assets/images/users/spaces/1.jpg') }}"
                                                    class="card-img-top h-100" alt="img">
                                                <div class="over_lay">
                                                    <h5>Singers</h5>
                                                    <p>Country Singers, Singing Guitarists, Rappers...</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                        <div class="card overflow-hidden my-0 card_height">
                                            <a class="h-100" href="{{ URL('/space-details') }}">
                                                <img src="{{ asset('assets/images/users/spaces/7.jpg') }}"
                                                    class="card-img-top h-100" alt="img">
                                                <div class="over_lay">
                                                    <h5>Singers</h5>
                                                    <p>Country Singers, Singing Guitarists, Rappers...</p>
                                                </div>
                                            </a>
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
    <h3 class="text-center my-3">Entertainers</h3>
    <div class="row">
        <div class="col-12 bg-white">
            <div class="container">
                <div class="card custom-card">
                    <div class="card-body pt-0 h-100">
                        <div class="owl-carousel owl-carousel-icons2">
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/1.jpg') }}"
                                                class="card-img-top h-100" alt="img">
                                            <div class="over_lay">
                                                <h5>Singers</h5>
                                                <p>Country Singers, Singing Guitarists, Rappers...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/2.jpg') }}"
                                                class="card-img-top h-100" alt="img">
                                            <div class="over_lay">
                                                <h5>Ensembles</h5>
                                                <p>Country Singers, Singing Guitarists, Rappers...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/3.jpg') }}"
                                                class="card-img-top h-100" alt="img">
                                            <div class="over_lay">
                                                <h5>Bands & Groups</h5>
                                                <p>Blues Bands, Mariachis, Wedding Bands...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/4.jpg') }}"
                                                class="card-img-top h-100" alt="img">
                                            <div class="over_lay">
                                                <h5>Ensembles</h5>
                                                <p>Chamber Orchestras, Classical Ensembles, String Trios...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/5.jpg') }}"
                                                class="card-img-top h-100" alt="img">
                                            <div class="over_lay">
                                                <h5>Ensembles</h5>
                                                <p>Chamber Orchestras, Classical Ensembles, String Trios...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/1.jpg') }}"
                                                class="card-img-top h-100" alt="img">
                                            <div class="over_lay">
                                                <h5>Ensembles</h5>
                                                <p>Chamber Orchestras, Classical Ensembles, String Trios...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/7.jpg') }}"
                                                class="card-img-top h-100" alt="img">
                                            <div class="over_lay">
                                                <h5>Ensembles</h5>
                                                <p>Chamber Orchestras, Classical Ensembles, String Trios...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 class="text-center my-3">Event Services</h3>
    <div class="row">
        <div class="col-12 bg-white">
            <div class="container">
                <div class="card custom-card">
                    <div class="card-body pt-0 h-100">
                        <div class="owl-carousel owl-carousel-icons2">
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/1.jpg') }}"
                                                class="card-img-top h-100" alt="img">
                                            <div class="over_lay">
                                                <h5>Singers</h5>
                                                <p>Country Singers, Singing Guitarists, Rappers...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/2.jpg') }}"
                                                class="card-img-top h-100" alt="img">
                                            <div class="over_lay">
                                                <h5>Singers</h5>
                                                <p>Country Singers, Singing Guitarists, Rappers...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/3.jpg') }}"
                                                class="card-img-top h-100" alt="img">
                                            <div class="over_lay">
                                                <h5>Singers</h5>
                                                <p>Country Singers, Singing Guitarists, Rappers...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/4.jpg') }}"
                                                class="card-img-top h-100" alt="img">
                                            <div class="over_lay">
                                                <h5>Singers</h5>
                                                <p>Country Singers, Singing Guitarists, Rappers...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/5.jpg') }}"
                                                class="card-img-top h-100" alt="img">
                                            <div class="over_lay">
                                                <h5>Singers</h5>
                                                <p>Country Singers, Singing Guitarists, Rappers...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/1.jpg') }}"
                                                class="card-img-top h-100" alt="img">
                                            <div class="over_lay">
                                                <h5>Singers</h5>
                                                <p>Country Singers, Singing Guitarists, Rappers...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/7.jpg') }}"
                                                class="card-img-top h-100" alt="img">
                                            <div class="over_lay">
                                                <h5>Singers</h5>
                                                <p>Country Singers, Singing Guitarists, Rappers...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 class="text-center"><a class="bg-primary btn text-white px-7"><b>Get started</b></a></h3>
    <p class="text-center text-primary">Make an exceptional booking.</p>

    @include('layouts.components.modal')

    @yield('modal')
    <!-- page -->

    <!-- global-helper -->
    <div id="global-helper" class="position-fixed bottom-0 end-0 p-3">
        <div class="dropup btn-group mt-2 mb-2">
            <button class="btn-pill text-end p-2 text-info bg-white border-info " type="button"
                data-bs-toggle="dropdown" aria-expanded="true" id="global-helper-btn">Need any help?</button>
            <ul class="dropdown-menu"
                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(0px, -40px, 0px);"
                data-popper-placement="top-start">
                <form id="contactForm">
                    <div class="row">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
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
    <script>
    //     flatpickr("#flatpickrDate", {
    //   enableTime: true,
    //   time_24hr: true,
    //   dateFormat: "Y-m-d H:i",
    //   appendTo: document.body,
    //   altInput: true,
    //   altFormat: "F j, Y h:i K",
    // });
    </script>
    <!-- OWL CAROUSEL JS-->
    <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>

    <!-- OWL Carousel js -->
    <script src="{{ asset('assets/js/carousel.js') }}"></script>


</body>

</html>
