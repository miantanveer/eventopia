@extends('layouts.landing-page-layout')
@section('styles')
<style>
    .search-container {
        position: relative;
    }

    .search-content {
        background-color: white !important;
        color: black;
    }

    #form-border.FormBorder.data-appended {
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
    }

    #form-border.FormBorder:not(.data-appended) {
        border-bottom-left-radius: 13px;
        border-bottom-right-radius: 13px;
    }

    .search-input {
        border: none;
        outline: none;
        padding: 10px;
        width: 100%;
        font-size: 16px;
    }

    .search-drop-content {
        cursor: pointer;
        padding: 8px;
    }

    .search-drop-popUp {
        padding: 8px;
    }

    .search-drop-popUp p {
        margin: 0px !important;
    }

    .AdressDrop {
        border-bottom-left-radius: 13px;
        border-bottom-right-radius: 13px;
    }

    .drop-address-result {
        cursor: pointer;
    }

    .flatpickr-calendar {
        width: 96% !important;
        z-index: 0 !important;
        top: 100px !important;
        left: 33px !important;
        right: 0 !important;
    }

    .flatpickr-current-month {
        left: -230px !important;
        position: fixed;
    }

    span.flatpickr-next-month {
        right: 765px !important;
    }

    element.style {
        width: 50% !important;
        float: right;
        top: 40px !important;
        left: 400px;
        position: absolute;
    }

    .flatpickr-time {
        width: 50% !important;
        float: right;
        top: 40px !important;
        left: 400px;
        position: absolute;
    }

    /* Your custom CSS goes here */
    .calendar-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .calendar {
        width: 50%;
    }

    .time-selector {
        width: 50%;
    }

    .time-selector label {
        display: block;
        margin-bottom: 5px;
    }

    .time-selector input {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .Select_Time {
        background-color: transparent !important;
    }

    .calendar-timer {
        position: absolute;
        z-index: 1;
        width: 100%;
        right: 100px;
        top: 120px;
    }
</style>
@endsection

@section('content')
<!-- page -->
<div class="page">
    <div class="page-main">
        <div class="content">
            @include('layouts.components.landing-page-header')
            <div class="inline-form container my-7 my-sm-3 ps-0 pe-5">
                <h1 class="h1 text-white font-size-h1 fw-bold ms-5">Book a special space for your event</h1>
                <div class="position-relative">
                    <form action="{{ URL('/search-results') }}" class="ms-5 form-blur-border">
                        <div class="row bg-whiter justify-content-between text-start py-3 px-5 m-0 box-sizing FormBorder"
                            id="form-border">
                            <div class="col-sm-4 px-0 border-end border-end0">
                                <label class="mb-0 label-none my-font-size"><b>What have you got planned?</b></label>
                                <div class="search-container">
                                    <input type="text" id="planCatagories" class="form-control px-0"
                                        placeholder="Select your plan">
                                </div>
                            </div>

                            <div class="col-sm-4 border-end border-end0 px-0 px-sm-3 my-3 my-sm-0">
                                <label class="mb-0 label-none font-size"><b>Where?</b></label>
                                <input type="text" class="form-control px-0" id="location"
                                    placeholder="Enter your Location">
                            </div>
                            <div class="col-sm-3 border-end-0 pe-0 px-0 px-sm-3 mb-3 mb-sm-0">
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
                        <div id="searchResults" class="w-100 search-content"></div>
                        <div id="addressDropdown" class="bg-white AdressDrop"></div>
                        <div id="calendarContainer">
                            <div class="row">
                                <div class="col-6 calendar-timer d-none">
                                    <label for="start_time" class="form-label mt-5 text-start">Start Time</label>
                                    <select name="start_time" class="Select_Time form-select mb-5" id="start_time">
                                        <option value="">Select Start Time</option>
                                        <option value="6:00 Am">6:00 Am</option>
                                        <option value="6:30 Am">6:30 Am</option>
                                        <option value="7:00 Am">7:00 Am</option>
                                        <option value="7:30 Am">7:30 Am</option>
                                        <option value="8:00 Am">8:00 Am</option>
                                        <option value="8:30 Am">8:30 Am</option>
                                        <option value="9:00 Am">9:00 Am</option>
                                        <option value="9:30 Am">9:30 Am</option>
                                        <option value="10:00 Am">10:00 Am</option>
                                        <option value="10:30 Am">10:30 Am</option>
                                        <option value="11:00 Am">11:00 Am</option>
                                        <option value="11:30 Am">11:30 Am</option>
                                        <option value="12:00 Pm">12:00 Pm</option>
                                        <option value="12:30 Pm">12:30 Pm</option>
                                        <option value="1:00 Pm">1:00 Pm</option>
                                        <option value="1:30 Pm">1:30 Pm</option>
                                        <option value="2:00 Pm">2:00 Pm</option>
                                        <option value="2:30 Pm">2:30 Pm</option>
                                        <option value="3:00 Pm">3:00 Pm</option>
                                        <option value="3:30 Pm">3:30 Pm</option>
                                        <option value="4:00 Pm">4:00 Pm</option>
                                        <option value="4:30 Pm">4:30 Pm</option>
                                        <option value="5:00 Pm">5:00 Pm</option>
                                        <option value="5:30 Pm">5:30 Pm</option>
                                        <option value="6:00 Pm">6:00 Pm</option>
                                        <option value="6:30 Pm">6:30 Pm</option>
                                        <option value="7:00 Pm">7:00 Pm</option>
                                        <option value="7:30 Pm">7:30 Pm</option>
                                        <option value="8:00 Pm">8:00 Pm</option>
                                        <option value="8:30 Pm">8:30 Pm</option>
                                        <option value="9:00 Pm">9:00 Pm</option>
                                        <option value="9:30 Pm">9:30 Pm</option>
                                        <option value="10:00 Pm">10:00 Pm</option>
                                        <option value="10:30 Pm">10:30 Pm</option>
                                        <option value="10:00 Pm">11:00 Pm</option>
                                        <option value="10:30 Pm">11:30 Pm</option>
                                    </select>
                                    <label for="end_time" class="form-label mt-5 text-start">End Time</label>
                                    <select name="end_time" class="Select_Time form-select mb-5" id="end_time">
                                        <option value="">Select End Time</option>
                                        <option value="6:00 Am">6:00 Am</option>
                                        <option value="6:30 Am">6:30 Am</option>
                                        <option value="7:00 Am">7:00 Am</option>
                                        <option value="7:30 Am">7:30 Am</option>
                                        <option value="8:00 Am">8:00 Am</option>
                                        <option value="8:30 Am">8:30 Am</option>
                                        <option value="9:00 Am">9:00 Am</option>
                                        <option value="9:30 Am">9:30 Am</option>
                                        <option value="10:00 Am">10:00 Am</option>
                                        <option value="10:30 Am">10:30 Am</option>
                                        <option value="11:00 Am">11:00 Am</option>
                                        <option value="11:30 Am">11:30 Am</option>
                                        <option value="12:00 Pm">12:00 Pm</option>
                                        <option value="12:30 Pm">12:30 Pm</option>
                                        <option value="1:00 Pm">1:00 Pm</option>
                                        <option value="1:30 Pm">1:30 Pm</option>
                                        <option value="2:00 Pm">2:00 Pm</option>
                                        <option value="2:30 Pm">2:30 Pm</option>
                                        <option value="3:00 Pm">3:00 Pm</option>
                                        <option value="3:30 Pm">3:30 Pm</option>
                                        <option value="4:00 Pm">4:00 Pm</option>
                                        <option value="4:30 Pm">4:30 Pm</option>
                                        <option value="5:00 Pm">5:00 Pm</option>
                                        <option value="5:30 Pm">5:30 Pm</option>
                                        <option value="6:00 Pm">6:00 Pm</option>
                                        <option value="6:30 Pm">6:30 Pm</option>
                                        <option value="7:00 Pm">7:00 Pm</option>
                                        <option value="7:30 Pm">7:30 Pm</option>
                                        <option value="8:00 Pm">8:00 Pm</option>
                                        <option value="8:30 Pm">8:30 Pm</option>
                                        <option value="9:00 Pm">9:00 Pm</option>
                                        <option value="9:30 Pm">9:30 Pm</option>
                                        <option value="10:00 Pm">10:00 Pm</option>
                                        <option value="10:30 Pm">10:30 Pm</option>
                                        <option value="10:00 Pm">11:00 Pm</option>
                                        <option value="10:30 Pm">11:30 Pm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
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
<h3 class="text-center"><a class="bg-primary btn text-white px-7"><b>Get started</b></a></h3>
<p class="text-center text-primary">Make an exceptional booking.</p>

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
<h3 class="text-center"><a class="bg-primary btn text-white px-7"><b>Get started</b></a></h3>
<p style="margin-bottom: 70px!important;" class="text-center text-primary">Make an exceptional booking.</p>
@endsection
@section('scripts')
<script
    src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC5qN37hurCFwbFsZt2nzzwzGcbSt08R5E">
</script>
<script src="{{ asset('assets/js/flatpicker.min.js') }}"></script>
<script>
    $(document).ready(function() {
            var autocompleteService = new google.maps.places.AutocompleteService();
            $('#location').on('input', function() {
                var input = $(this).val();
                autocompleteService.getPlacePredictions({
                    input: input
                }, function(predictions, status) {
                    if (status === google.maps.places.PlacesServiceStatus.OK) {
                        $('#addressDropdown').empty();
                        predictions.forEach(function(prediction) {
                            var addressItem = $(
                                    '<div class="text-start p-3 drop-address-result">')
                                .text(prediction.description);
                            addressItem.on('click', function() {
                                $('#location').val(prediction.description);
                                $('#addressDropdown').empty();
                                $(".FormBorder").removeClass("data-appended");
                                $(".FormBorder").css("border-bottom-left-radius",
                                    "13px !important").css(
                                    "border-bottom-right-radius",
                                    "13px !important");
                            });
                            $('#addressDropdown').append(addressItem);
                            $(".FormBorder").addClass("data-appended");
                            $(".FormBorder").css("border-bottom-left-radius",
                                "0px !important").css("border-bottom-right-radius",
                                "0px !important");
                        });
                    }
                });
            });
        });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
            const timerContent = $(".calendar-timer");
            const inputField = document.getElementById("flatpickrDate");
            const flatpickrInstance = flatpickr(inputField, {
                enableTime: false, // If you need to include time as well
                dateFormat: "Y-M-d", // Customize the date format if needed
                appendTo: document.getElementById("calendarContainer"),
                time_24hr: false,
                defaultHour: 12,
                defaultMinute: 0,
                onClose: function(selectedDates, dateStr, instance) {
                    timerContent.removeClass('d-block').addClass('d-none');
                }
            });
            inputField.addEventListener("focus", function() {
                flatpickrInstance.open();
                timerContent.removeClass('d-none').addClass('d-block');
            });
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

        $(document).ready(function() {
            const categories = [
                "Audio Recording",
                "Corporate Event",
                "Dinner",
                "Film Shoot",
                "Fitness Class",
                "Meeting",
                "Networking Event",
                "Party",
                "Performance",
                "Photo Shoot",
                "Pop-Up",
                "Retreat",
                "Wedding",
                "Workshop"
            ];

            const searchInput = $("#planCatagories");
            const searchResults = $("#searchResults");

            searchInput.on("input", function() {
                const inputValue = this.value.toLowerCase();
                const filteredCategories = categories.filter(category => category.toLowerCase().includes(
                    inputValue));
                const maxResultsToShow = 4;

                searchResults.html("").css("border-bottom-left-radius", "13px").css(
                    "border-bottom-right-radius", "13px");

                if (inputValue.length > 0) {
                    filteredCategories.slice(0, maxResultsToShow).forEach(category => {
                        const div = $("<div class='search-drop-content text-start ps-5'>").text(
                            category);
                        searchResults.append(div);
                        $(".FormBorder").addClass("data-appended");
                    });

                    if (filteredCategories.length === 0) {
                        const div = $("<div class='search-drop-popUp text-start ps-5'>");
                        const para = $("<p>").text(
                            "We don't recognize that activity. Try describing it differently or ");
                        const anchor = $(
                            "<a class='modal-effect' data-bs-target='#popular-catagories-modal' data-bs-toggle='modal'>"
                        ).text('pick from popular activities.').attr("href", "javascript-void(0);");
                        para.append(anchor);
                        div.append(para);
                        searchResults.append(div);
                        $(".FormBorder").addClass("data-appended");
                    }
                }

                if (inputValue.length > 0) {
                    searchResults.show();
                } else {
                    searchResults.hide();
                    $(".FormBorder").removeClass("data-appended");
                    $(".FormBorder").css("border-bottom-left-radius", "13px !important").css(
                        "border-bottom-right-radius", "13px !important");
                }
            });

            searchResults.on("click", ".search-drop-content", function() {
                const selectedCategory = $(this).text();
                searchInput.val(selectedCategory);
                searchResults.hide();
                $(".FormBorder").removeClass("data-appended");
                $(".FormBorder").css("border-bottom-left-radius", "13px !important").css(
                    "border-bottom-right-radius", "13px !important");
            });
        });

</script>
<!-- OWL CAROUSEL JS-->
<script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
<!-- OWL Carousel js -->
<script src="{{ asset('assets/js/carousel.js') }}"></script>
@endsection
