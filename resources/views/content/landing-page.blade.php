@extends('layouts.landing-page-layout')
@section('styles')
@endsection

@section('content')
<!-- page -->
<div class="page">
    <div class="page-main">
        <div class="content">
            @include('layouts.components.landing-page-header')
            <div class="inline-form container my-7 my-sm-3 ps-0 pe-5">
                <h1 class="h1 text-white font-size-h1 fw-bold ms-5">Book a special space for your event</h1>
                <form action="{{ URL('/search-results') }}" class="ms-5 form-blur-border">
                    <div class="row bg-whiter justify-content-between text-start py-3 px-5 m-0 box-sizing"
                        id="form-border">

                        <div class="col-sm-4 px-0 border-end border-end0">
                            <label class="mb-0 label-none my-font-size"><b>What have you got planned?</b></label>
                            <div class="search-container">
                                <input type="text" id="searchTerm1" class="form-control" placeholder="Select your plan">
                                <ul id="searchResults"></ul>
                            </div>
                        </div>

                        <div class="col-sm-4 border-end border-end0 px-0 px-sm-3 my-3 my-sm-0">
                            <label class="mb-0 label-none font-size"><b>Where?</b></label>
                            <select class="form-select input border-0 py-0 px-0" id="searchTerm2">
                                <option value="">Select your country</option>
                                <option value="">USA</option>
                                <option value="">Londan</option>
                                <option value="">America</option>
                                <option value="">China</option>
                                <option value="">Rashia</option>
                            </select>
                        </div>
                        <div class="col-sm-3 border-end0 pe-0 px-0 px-sm-3 mb-3 mb-sm-0">
                            <label class="mb-0 label-none font-size"><b>When?</b></label>
                            <input type="text" class="form-control input py-2 px-0" id="flatpickrDate"
                                placeholder="Anytime">
                        </div>
                        <div class="col-sm-1 text-end px-0 my-auto">
                            <button type="submit"
                                class="btn btn-color rounded text-end button ms-auto d-none d-sm-block"><i
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
<div class="landing_background height-img">
    <div class="container ps-0 pe-5">
        <h1 class="text-center pt-7 text-white image-h1 heading_font ms-5">List the perfect entertainment and talent
            <br>
            for your upcoming event
        </h1>
        <p class="text-center text-white px-md-9 px-sm-5 ms-5">For every event, from weddings to birthday
            celebrations,
            we'll help you book the best talent.</p>
        <form action="{{ URL('/search-results') }}" class="ms-5 form-blur-border">
            <div class="row bg-whiter justify-content-between text-start py-3 px-5 m-0 box-sizing" id="form-border">

                <div class="col-sm-4 px-0 border-end border-end0">
                    <label class="mb-0 label-none my-font-size"><b>What have you got planned?</b></label>
                    <select class="form-select input border-0 py-0 px-0" id="searchTerm1">
                        <option value="">Select your plan</option>
                        <option value="">Hall</option>
                        <option value="">Party Hall</option>
                        <option value="">Helloween Party</option>
                        <option value="">Chrismis</option>
                    </select>
                </div>
                <div class="col-sm-4 border-end border-end0 px-0 px-sm-3 my-3 my-sm-0">
                    <label class="mb-0 label-none font-size"><b>Where?</b></label>
                    <select class="form-select input border-0 py-0 px-0" id="searchTerm2">
                        <option value="">Select your country</option>
                        <option value="">USA</option>
                        <option value="">Londan</option>
                        <option value="">America</option>
                        <option value="">China</option>
                        <option value="">Rashia</option>
                    </select>
                </div>
                <div class="col-sm-3 border-end0 pe-0 px-0 px-sm-3 mb-3 mb-sm-0">
                    <label class="mb-0 label-none font-size"><b>When?</b></label>
                    <input type="text" class="form-control input py-2 px-0" id="flatpickrDate" placeholder="Anytime">
                </div>
                <div class="col-sm-1 text-end px-0 my-auto">
                    <button type="submit" class="btn btn-color rounded text-end button ms-auto d-none d-sm-block"><i
                            class="fa fa-search text-white"></i></button>
                    <button type="submit"
                        class="btn btn-primary btn-search mx-0 px-0 text-center d-sm-none d-block">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div>
    <h1 class="text-center mt-lg-7 mt-md-4 mt-3 fs-1 heading_fon">Make your plans exceptional <br> whatever they
        may
        be.</h1>
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
                                            <div class="over_lay card_overlay">
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
                                            <div class="over_lay card_overlay">
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
                                            <div class="over_lay card_overlay">
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
                                            <div class="over_lay card_overlay">
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
                                            <div class="over_lay card_overlay">
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
                                            <div class="over_lay card_overlay">
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
                                            <div class="over_lay card_overlay">
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
                                        <div class="over_lay card_overlay">
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
                                        <div class="over_lay card_overlay">
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
                                        <div class="over_lay card_overlay">
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
                                        <div class="over_lay card_overlay">
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
                                        <div class="over_lay card_overlay">
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
                                        <div class="over_lay card_overlay">
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
                                        <div class="over_lay card_overlay">
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
                                        <div class="over_lay card_overlay">
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
                                        <div class="over_lay card_overlay">
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
                                        <div class="over_lay card_overlay">
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
                                        <div class="over_lay card_overlay">
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
                                        <div class="over_lay card_overlay">
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
                                        <div class="over_lay card_overlay">
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
                                        <div class="over_lay card_overlay">
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
<h3 class="text-center"><a class="bg-primary btn text-white px-7 modal-effect"
    data-bs-target="#signup-modal"
    data-bs-toggle="modal"><b>Get started</b></a></h3>

{{-- --------------------------------------- Content 3333 ------------------------------------- --}}

<div style="margin-top: 65px!important;" class="landing_background1 height-img">
    <div class="container ps-0 pe-5">
        <h1 class="text-center pt-7 text-white image-h1 heading_font ms-5">Book your services arrangement team</h1>
        <p class="text-center text-white px-md-9 px-sm-5 ms-5">For every service, from wedding planner to
            invitations,
            we'll help you book the best service.</p>
        <form action="{{ URL('/search-results') }}" class="ms-5 form-blur-border">
            <div class="row bg-whiter justify-content-between text-start py-3 px-5 m-0 box-sizing" id="form-border">

                <div class="col-sm-4 px-0 border-end border-end0">
                    <label class="mb-0 label-none my-font-size"><b>What have you got planned?</b></label>
                    <select class="form-select input border-0 py-0 px-0" id="searchTerm1">
                        <option value="">Select your plan</option>
                        <option value="">Hall</option>
                        <option value="">Party Hall</option>
                        <option value="">Helloween Party</option>
                        <option value="">Chrismis</option>
                    </select>
                </div>
                <div class="col-sm-4 border-end border-end0 px-0 px-sm-3 my-3 my-sm-0">
                    <label class="mb-0 label-none font-size"><b>Where?</b></label>
                    <select class="form-select input border-0 py-0 px-0" id="searchTerm2">
                        <option value="">Select your country</option>
                        <option value="">USA</option>
                        <option value="">Londan</option>
                        <option value="">America</option>
                        <option value="">China</option>
                        <option value="">Rashia</option>
                    </select>
                </div>
                <div class="col-sm-3 border-end0 pe-0 px-0 px-sm-3 mb-3 mb-sm-0">
                    <label class="mb-0 label-none font-size"><b>When?</b></label>
                    <input type="text" class="form-control input py-2 px-0" id="flatpickrDate" placeholder="Anytime">
                </div>
                <div class="col-sm-1 text-end px-0 my-auto">
                    <button type="submit" class="btn btn-color rounded text-end button ms-auto d-none d-sm-block"><i
                            class="fa fa-search text-white"></i></button>
                    <button type="submit"
                        class="btn btn-primary btn-search mx-0 px-0 text-center d-sm-none d-block">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>

<h1 class="text-center mt-lg-7 mt-md-4 mt-3 fs-1 heading_fon">Your event team and everything in between</h1>
<h3 class="text-center my-3">Wedding Planner and Services</h3>
<div class="row">
    <div class="col-12 bg-white">
        <div class="container">
            <div class="card custom-card">
                <div class="card-body pt-0 h-100">
                    <div class="owl-carousel my-carousel">
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="row p-3">
                                            <div class="col-lg-5"><span class="">Portland, ME</span>
                                            </div>
                                            <div class="col-lg-7 text-lg-end pe-5 my-2">
                                                <i class="fa fa-users"></i> 25 &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>Events & Rentals</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>SAR - Affordable</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">Request
                                                        Quote</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="row p-3">
                                            <div class="col-lg-5"><span class="">Portland, ME</span>
                                            </div>
                                            <div class="col-lg-7 text-lg-end pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>Events & Rentals</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>SAR - Affordable</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">Request
                                                        Quote</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/3.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="row p-3">
                                            <div class="col-lg-5"><span class="">Portland, ME</span>
                                            </div>
                                            <div class="col-lg-7 text-lg-end pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>Events & Rentals</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>SAR - Affordable</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">Request
                                                        Quote</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/4.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="row p-3">
                                            <div class="col-lg-5"><span class="">Portland, ME</span>
                                            </div>
                                            <div class="col-lg-7 text-lg-end pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>Events & Rentals</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>SAR - Affordable</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">Request
                                                        Quote</button>
                                                </div>
                                            </div>
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
<h3 class="text-center my-3">Beauty Services</h3>
<div class="row">
    <div class="col-12 bg-white">
        <div class="container">
            <div class="card custom-card">
                <div class="card-body pt-0 h-100">
                    <div class="owl-carousel my-carousel">
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0  content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="row p-3">
                                            <div class="col-lg-5"><span class="">Portland, ME</span>
                                            </div>
                                            <div class="col-lg-7 text-lg-end pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>Events & Rentals</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>SAR - Affordable</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">Request
                                                        Quote</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0  content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="row p-3">
                                            <div class="col-lg-5"><span class="">Portland, ME</span>
                                            </div>
                                            <div class="col-lg-7 text-lg-end pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>Events & Rentals</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>SAR - Affordable</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">Request
                                                        Quote</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0  content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/3.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="row p-3">
                                            <div class="col-lg-5"><span class="">Portland, ME</span>
                                            </div>
                                            <div class="col-lg-7 text-lg-end pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>Events & Rentals</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>SAR - Affordable</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">Request
                                                        Quote</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0  content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/4.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="row p-3">
                                            <div class="col-lg-5"><span class="">Portland, ME</span>
                                            </div>
                                            <div class="col-lg-7 text-lg-end pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>Events & Rentals</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>SAR - Affordable</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">Request
                                                        Quote</button>
                                                </div>
                                            </div>
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
<h3 class="text-center my-3">Decorations</h3>
<div class="row">
    <div class="col-12 bg-white">
        <div class="container">
            <div class="card custom-card">
                <div class="card-body pt-0 h-100">
                    <div class="owl-carousel my-carousel">
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0  content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="row p-3">
                                            <div class="col-lg-5"><span class="">Portland, ME</span>
                                            </div>
                                            <div class="col-lg-7 text-lg-end pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>Events & Rentals</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>SAR - Affordable</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">Request
                                                        Quote</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="row p-3">
                                            <div class="col-lg-5"><span class="">Portland, ME</span>
                                            </div>
                                            <div class="col-lg-7 text-lg-end pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>Events & Rentals</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>SAR - Affordable</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">Request
                                                        Quote</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/3.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="row p-3">
                                            <div class="col-lg-5"><span class="">Portland, ME</span>
                                            </div>
                                            <div class="col-lg-7 text-lg-end pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>Events & Rentals</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>SAR - Affordable</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">Request
                                                        Quote</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/4.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="row p-3">
                                            <div class="col-lg-5"><span class="">Portland, ME</span>
                                            </div>
                                            <div class="col-lg-7 text-lg-end pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>Events & Rentals</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>SAR - Affordable</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">Request
                                                        Quote</button>
                                                </div>
                                            </div>
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
<h3 class="text-center"><a class="bg-primary btn text-white px-7 modal-effect"
    data-bs-target="#signup-modal"
    data-bs-toggle="modal"><b>Get started</b></a></h3>
@endsection
@section('scripts')
<script src="{{ asset('assets/js/flatpicker.min.js') }}"></script>

<script>
    flatpickr("#flatpickrDate", {
            enableTime: true,
            time_24hr: false,
            dateFormat: "Y-m-d H:i",
            appendTo: document.body,
            altInput: true,
            altFormat: "F j, Y h:i K",
            defaultHour: 12, // Adjust default time as needed
            defaultMinute: 0,
            minuteIncrement: 30 // Set minute increment to 5 minutes
        });
</script>
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

        const plans = [
            "Hall",
            "Party Hall",
            "Halloween Party",
            "Christmas"
        ];

        const searchInput = document.getElementById("searchTerm1");
        const searchResults = document.getElementById("searchResults");

        searchInput.addEventListener("input", function() {
            const inputValue = this.value.toLowerCase();
            const filteredPlans = plans.filter(plan => plan.toLowerCase().includes(inputValue));

            // Clear previous results
            searchResults.innerHTML = "";

            // Display filtered results
            filteredPlans.forEach(plan => {
                const li = document.createElement("li");
                li.textContent = plan;
                searchResults.appendChild(li);
            });

            // Show/hide results container based on search input
            if (inputValue.length > 0) {
                searchResults.style.display = "block";
            } else {
                searchResults.style.display = "none";
            }
        });

        searchResults.addEventListener("click", function(event) {
            const selectedPlan = event.target.textContent;
            searchInput.value = selectedPlan;
            searchResults.style.display = "none";
        });
</script>
<!-- OWL CAROUSEL JS-->
<script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
<script src="{{ asset('assets/js/flatpicker.min.js') }}"></script>
<!-- OWL Carousel js -->
<script src="{{ asset('assets/js/carousel.js') }}"></script>
@endsection
