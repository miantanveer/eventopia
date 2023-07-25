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

    .owl-carousel .owl-nav button.owl-prev, .owl-carousel .owl-nav button.owl-next {
        z-index: rewert;
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
            <div class="main-content app-content py-5 bg-white">
                <div class="side-app">

                    <!-- container -->
                    <div class="main-container container-fluid">
                        <div class="row row-sm">
                            <div class="col-xl-8 col-lg-12 col-md-12">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body p-3">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('assets/images/users/spaces/4.jpg') }}" alt="img"
                                                class="br-5 w-100"></a>
                                    </div>
                                    <div class="card-body pt-0 h-100">
                                        <div class="owl-carousel owl-carousel-icons2">
                                            <div class="item">
                                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/users/spaces/11.jpg') }}"
                                                            alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/users/spaces/2.jpg') }}"
                                                            alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/users/spaces/3.jpg') }}"
                                                            alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/users/spaces/4.jpg') }}"
                                                            alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/users/spaces/7.jpg') }}"
                                                            alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/users/spaces/9.jpg') }}"
                                                            alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="item">
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
                                            <div class="mb-2 col-md-2 col-sm-3 text-warning">
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star-half-o text-warning"></i>
                                                <i class="fa fa-star-o text-warning"></i>
                                                &nbsp;
                                            </div>
                                            <p class="col-md-2 col-sm-3">45 reviews</p>
                                            <p class="col-md-2 col-sm-3"><i class="fa fa-group"></i> 12 people </p>
                                            <p class="col-md-2 col-sm-3"><i class="mdi mdi-alarm text-primary"></i> 1 hr 5 min</p>
                                        </div>
                                        <hr>
                                        <div class="mt-5">
                                            <h3 class="text-dark">
                                                About the space
                                            </h3>
                                            <p>Utilise the building's north side, which has a bright, industrial-white
                                                wall with even illumination for the majority of the day. On one of
                                                our white walls and our portrait plant wall inside, we provide
                                                west-facing windows for natural light. A striking natural light source
                                                can
                                                be seen in the studio's black gallery wall area..... Read more</p>
                                        </div>
                                        <div class="mt-5">
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            Parking
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <h4 class="text-dark">Parking options</h4>
                                                            <p>Free onsite parking, Free street parking, Nearby parking
                                                                lot</p>

                                                            <h4 class="text-dark">Parking description</h4>
                                                            <p>Parking in our semi-circle driveway is very easy and we
                                                                also have an empty dirt lot next to us available for
                                                                parking. Can fit 50+ vehicles or more.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Host Rules
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <h4 class="text-dark">General Rules</h4>
                                                            <p>HOUSE INFO - thank you for your understanding! We do have
                                                                a few security cameras in family room, backyard area,
                                                                and front courtyard area for your safety and the safety
                                                                of our space.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="mt-5">
                                            <h3 class="text-dark">Location</h3>
                                            <div style="height: 300px;">
                                                <iframe class="gmap_iframe h-100 w-100" frameborder="0"
                                                    scrolling="no" id="gmap_iframe" marginheight="0" marginwidth="0"
                                                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                                </iframe>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="mt-5">
                                            <h3 class="text-dark">
                                                Health and Safety Measures
                                            </h3>
                                            <p>Between appointments and on a daily basis, the area is cleaned.</p>
                                        </div>
                                        <div class="mt-5">
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            Cleaning protocol
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <h4 class="text-dark">Enhanced cleaning measures:
                                                            </h4>
                                                            <p>High touch surfaces and shared amenities have been
                                                                disinfected
                                                                The space is cleaned and disinfected in accordance with
                                                                guidelines from local health authorities
                                                                Bookings are spaced apart to allow for enhanced cleaning
                                                                Soft, porous materials have been properly cleaned or
                                                                removed</p>

                                                            <h4 class="text-dark">All hosts are required to do the
                                                                following prior to each booking:</h4>
                                                            <p>Sweep, mop, vacuum and clean the space.
                                                                Supply a hand washing station with soap, warm water, and
                                                                paper towels or hand sanitizer with at least 60%
                                                                alcohol.
                                                                Clean common areas allowing guest access including
                                                                bathrooms, kitchens, and entrances.
                                                                Collect and clean dishes, silverware, and other provided
                                                                host amenities, if applicable.
                                                                Remove garbage and add new lining to cans.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="mt-5">
                                            <h3 class="text-dark">
                                                Cancellation Policy
                                            </h3>
                                            <h5 class="text-dark">Flexible</h5>
                                            <p>A complete refund of the booking price (including all fees) is available
                                                to guests who cancel their reservation up to 7 days before the
                                                event's start time. A 50% refund (excluding fees) of the booking price
                                                is available to guests who cancel between seven days and
                                                twenty-four hours prior to the commencement of the event.
                                                Booking....Learn more</p>
                                        </div>
                                        <hr>
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


                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="mt-3 text-center">
                                            <h2>SAR40 /hr</h2>
                                            <p>1 hour minimum</p>
                                        </div>
                                        <hr>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h4>8+ hour discount <i class="mdi mdi-alert-circle-outline"></i>
                                                    </h4>
                                                </div>
                                                <div class="col-3 offset-2">
                                                    <span
                                                        class="badge rounded-pill bg-default badge-sm me-1 mb-1 mt-1">15%
                                                        off</span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>


                                        <div class="">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <h5 class="text-primary">Date and time</h5>
                                                    <form action="#">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                                            </div><input class="form-control fc-datepicker"
                                                                placeholder="MM/DD/YYYY" type="text">
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <select name="star-time"
                                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                                        data-bs-placeholder="Select Country"
                                                                        tabindex="-1" aria-hidden="true">
                                                                        <option value="">9 AM</option>
                                                                        <option value="">10 AM</option>
                                                                        <option value="">11 AM</option>
                                                                        <option value="">12 AM</option>
                                                                        <option value="">1 PM</option>
                                                                        <option value="">2 PM</option>
                                                                        <option value="">3 PM</option>
                                                                        <option value="">4 PM</option>
                                                                        <option value="">5 PM</option>
                                                                        <option value="">6 PM</option>
                                                                        <option value="">7 PM</option>
                                                                        <option value="" selected=""
                                                                            disabled>Start
                                                                            Time
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <select name="star-time"
                                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                                        data-bs-placeholder="Select Country"
                                                                        tabindex="-1" aria-hidden="true">
                                                                        <option value="">9 AM</option>
                                                                        <option value="">10 AM</option>
                                                                        <option value="">11 AM</option>
                                                                        <option value="">12 AM</option>
                                                                        <option value="">1 PM</option>
                                                                        <option value="">2 PM</option>
                                                                        <option value="">3 PM</option>
                                                                        <option value="">4 PM</option>
                                                                        <option value="">5 PM</option>
                                                                        <option value="">6 PM</option>
                                                                        <option value="">7 PM</option>
                                                                        <option value="" selected=""
                                                                            disabled>End
                                                                            Time
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col-10 pe-0">
                                                                <a href="{{ URL('checkout') }}"
                                                                    class="btn btn-primary text-white w-100">
                                                                    Checkout
                                                                </a>
                                                            </div>
                                                            <div class="col-2 text-end">
                                                                <a class="">
                                                                    <i
                                                                        class="fa fa-cart-plus border text-primary"></i><span
                                                                        class="fs-16 ms-2 d-none d-xl-block"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="mt-3 text-center">
                                                        <h6><i class="mdi mdi-alarm"></i> John typically respond within
                                                            1 hr</h6>
                                                        <p>You won't be charged yet.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <hr class="px-0 line">
                                    <div class="card-body pb-0">
                                        <div class="text-center">
                                            <h3 class="mb-3 booking-heading">Included in your booking</h3>
                                        </div>
                                        <h4 class="mt-5">Amentities</h4>
                                        <div class="row mb-6">
                                            <div class="col-6">
                                                <p class=""><i class="fa fa-address-book pe-2"
                                                        style="color: rgb(17, 101, 255); font-size: 22px"></i>Chairs
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p><i class="fa fa-address-card pe-2"
                                                        style="color: rgb(17, 101, 255); font-size: 22px"></i>Speakers
                                                </p>
                                            </div>
                                        </div>

                                        <h3>Features</h3>
                                        <div class="row">
                                            <div class="col-6">
                                                <p><i class="fa fa-resistance pe-2"
                                                        style="color: rgb(17, 101, 255); font-size: 22px"></i>Restrooms
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p><i class="fa fa-resistance pe-2"
                                                        style="color: rgb(17, 101, 255); font-size: 22px"></i>Restrooms
                                                </p>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <p><i class="fa fa-bus pe-2"
                                                        style="color: rgb(17, 101, 255); font-size: 22px"></i>Public
                                                    Transportation</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div>
                                        <h3 class="mt-4 ps-3">Operating Hours</h3>
                                        <hr style="border-top: 1px solid black">
                                        <h4 class="col-sm-10 mt-5 ps-3">Monday <span class="float-end">7:00 AM - 10:00
                                                PM</span></h4>
                                        <h4 class="col-sm-10 mt-5 ps-3">Tuesday <span class="float-end">7:00 AM - 10:00
                                                PM</span></h4>
                                        <h4 class="col-sm-10 mt-5 ps-3">Wednesday <span class="float-end">7:00 AM - 10:00
                                                PM</span></h4>
                                        <h4 class="col-sm-10 mt-5 ps-3">Thursday <span class="float-end">7:00 AM - 10:00
                                                PM</span></h4>
                                        <h4 class="col-sm-10 mt-5 ps-3">Friday <span class="float-end">7:00 AM - 10:00
                                                PM</span></h4>
                                        <h4 class="col-sm-10 mt-5 ps-3">Saturday <span class="float-end">7:00 AM - 10:00
                                                PM</span></h4>
                                        <h4 class="col-sm-10 mt-5 ps-3">Sunday <span class="float-end">7:00 AM - 10:00
                                                PM</span></h4>
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
    <div id="global-helper" class="position-fixed bottom-0 end-0 p-3">
        <div class="dropup btn-group mt-2 mb-2">
            <button class="btn-pill text-end p-2 text-info bg-white border-info " type="button"
                data-bs-toggle="dropdown" aria-expanded="true" id="global-helper-btn">Do you need Help?</button>
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
