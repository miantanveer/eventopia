@extends('layouts.app')

@section('styles')
    <style>
        .button-radias {
            border-radius: 0px;
        }

        .overlay {
            position: absolute;
            color: white;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
            font-size: 1.2em;
            font-weight: bolder;
        }

        /* .owl-item:nth-child(2),.owl-item:nth-child(3),.owl-item:nth-child(4){
            margin-right: 25px !important;
        } */

        .new_color-div {
            padding: 10px 0px 1px 0px;
        }

        .new_color {
            background-color: #8559ec;
        }

        .w-style-button {
            width: 125px;
        }

        .w-style {
            width: 130px !important;
            height: 45px !important;
        }

        .w-input {
            width: 155px !important;
        }

        .nav-style {
            padding: 5.7px !important;
        }


        #typeCategories {
            border-radius: 0px;
            padding: 6px 0px 6px 0px !important;
        }

        .h-card-image {
            height: 200px !important;
        }

        .gmap_iframe {
            width: 100% !important;
            height: 117.6vh !important;
        }

        .card-border p {
            border-radius: 10px 0px 10px 0px !important;
            background-color: white !important;
        }

        .card-background span i {
            border-radius: 50%;
            background-color: white !important;
            color: #003B95;
        }

        .card-background span i:hover {
            border-radius: 50%;
            background-color: #003B95 !important;
            color: white !important;
        }

        .btn_background {
            background: white !important;
            border: 1px solid rgba(95, 95, 95, 0.74) !important;
        }

        .card_height {
            height: 100% !important;
        }

        .owl-prev {
            margin-top: -12.4px !important;
        }

        .owl-next {
            margin-top: -12.4px !important;
        }

        .map_height {
            height: 750px !important;
        }

        .scroll-dive {
            height: 750px;
            overflow: auto !important;
        }

        .mainContent {
            height: 60vh;
        }

        .span-design {
            border: black solid 5px;
            border-radius: 50%;
        }

        .font_size {
            font-size: 15px;
            color: rgb(0, 0, 0) !important;
        }

        .owl-prev,
        .owl-next {
            display: none !important;
        }

        .card-raduas {
            border-radius: 0px;
        }

        .noti-design {
            border-radius: 50px !important;
        }

        .scroll-dive::-webkit-scrollbar {
            width: 5px;
        }

        .scroll-dive::-webkit-scrollbar-track {
            background-color: rgba(204, 203, 203, 0.795);
        }

        .scroll-dive::-webkit-scrollbar-thumb {
            background-color: #a1a1a1;
            border-radius: 30px;
        }

        .scroll-dive:hover::-webkit-scrollbar-thumb {
            background-color: #a1a1a1;
        }

        .scroll-dive::-webkit-scrollbar-thumb:hover {
            background-color: #797676;
        }

        /* .scroll-dive::-webkit-scrollbar-button:start:decrement {
            content: '▲';
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .scroll-dive::-webkit-scrollbar-button:end:increment {
            content: '▼';
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        } */

        .price-nav {
            left: -12px !important;
            width: 283px !important;
        }

        .search-dropdown-results {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            border: 1px solid #ccc;
            background-color: white;
            z-index: 1000;
            display: none;
            max-height: 150px;
            overflow-y: auto;
        }

        .search-drop-content {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #ccc;
        }

        .search-drop-content:last-child {
            border-bottom: none;
        }

        .carousel-wrap {
            margin: 90px auto;
            padding: 0 5%;
            width: 80%;
            position: relative;
        }

        /* fix blank or flashing items on carousel */
        .owl-carousel .item {
            position: relative;
            z-index: 100;
            -webkit-backface-visibility: hidden;
        }

        /* end fix */
        .owl-nav>div {
            margin-top: -26px;
            position: absolute;
            top: 50%;
            color: #cdcbcd;
        }

        .owl-nav i {
            font-size: 52px;
        }

        .owl-nav .owl-prev {
            left: -30px;
        }

        .owl-nav .owl-next {
            right: -30px;
        }

        @media screen and (min-width: 1600px) and (max-width: 1774px) {}
    </style>
@endsection

<!-- ROW-1 -->
<div class="bg-white">
    @section('content')
        <div class="row">
            <div class="col-lg-1 col-md-3 col-sm-12 col-12">
                <div class="container-fluid">
                    <div class="row flex-row filters">
                        <div class="">
                            <div class="mt-2 mb-2">
                                <button type="button" id="priceButton"
                                    class="btn btn-outline button-radias w-style dropdown-toggle text-dark btn_background px-0 w-100"
                                    data-bs-toggle="dropdown">
                                    {{ lang('Price') }} <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu price-nav" id="dropdownMenuPrice" role="menu">
                                    <div class="custom-controls-stacked">
                                        <form action="#" method="get" class="ms-2">
                                            <div class="px-5 pt-5 pb-2">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="example-radios"
                                                        value="option1" checked="">
                                                    <span class="custom-control-label">{{ lang('Up to $100') }}</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="example-radios"
                                                        value="option2">
                                                    <span class="custom-control-label">{{ lang('$100 to $250') }}</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="example-radios"
                                                        value="option3">
                                                    <span class="custom-control-label">{{ lang('$250 to $450') }}</span>
                                                </label>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="w-45 pe-0">
                                                    <div class="btn-group w-90">
                                                        <button type="button"
                                                            class="btn btn-outline-default rounded-0 disabled"><b>$</b></button>
                                                        <input type="text" class="btn btn-outline-default rounded-0"
                                                            name="space_size" required
                                                            data-parsley-errors-container="#sq_error" value=""
                                                            id="priceFrom">
                                                    </div>
                                                </div>
                                                <div class="w-10 mt-2 p-0">
                                                    <b>to</b>
                                                </div>
                                                <div class="w-45 ps-0">
                                                    <div class="btn-group w-90">
                                                        <button type="button"
                                                            class="btn btn-outline-default rounded-0 disabled"><b>$</b></button>
                                                        <input type="text" class="btn btn-outline-default rounded-0"
                                                            name="space_size" required
                                                            data-parsley-errors-container="#sq_error" value=""
                                                            id="priceTo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5 mb-1">
                                                <div class="w-50">
                                                    <a href="#" class="float-start text-dark p-3"
                                                        id="clearButton1">Clear</a>
                                                </div>
                                                <div class="w-50">
                                                    <a href="#" class="float-end bg-primary py-2 px-5 me-3 text-white"
                                                        id="doneButton"><b>Done</b></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-1 col-md-3 col-sm-12 col-12 p-0">
                <div class="container-fluid">
                    <div class="row flex-row filters">
                        <div class="">
                            <div class="mt-2">
                                <button type="button" id="attendeesButton"
                                    class="btn btn-outline dropdown-toggle w-style button-radias text-dark btn_background"
                                    data-bs-toggle="dropdown">
                                    <span class="attendees-label">{{ lang('Attendees') }}</span> <span
                                        class="caret"></span>
                                </button>
                                <ul class="dropdown-menu price-nav" id="dropdownMenuAttendees" role="menu">
                                    <div class="custom-controls-stacked">
                                        <form action="#" method="get" class="ms-2">
                                            <div class="px-5 pt-5 pb-2">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="example-radios"
                                                        value="option1" checked="">
                                                    <span class="custom-control-label">{{ lang('1 to 10') }}</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="example-radios"
                                                        value="option2">
                                                    <span class="custom-control-label">{{ lang('11 to 25') }}</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios" value="option3">
                                                    <span class="custom-control-label">{{ lang('26 to 50') }}</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios" value="option4">
                                                    <span class="custom-control-label">{{ lang('51 to 100') }}</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios" value="option5">
                                                    <span class="custom-control-label">{{ lang('Over 100') }}</span>
                                                </label>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="w-100 ms-5 pe-0">
                                                    <div class="w-100">
                                                        <input type="text" class="btn btn-outline-default rounded-0"
                                                            id="attendeesInput">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5 mb-1">
                                                <div class="w-50">
                                                    <a href="#" id="clearButton2"
                                                        class="float-start text-dark p-3">Clear</a>
                                                </div>
                                                <div class="w-50">
                                                    <a href="#"
                                                        class="float-end bg-primary py-2 px-5 me-3 text-white"
                                                        id="doneButton"><b>Done</b></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-1 col-md-2 col-sm-12 col-12 p-0">
                <div class="container-fluid">
                    <div class="row flex-row filters">
                        <div class="p-0">
                            <form action="#" class="mt-2">
                                <input id="dateInput" type="text"
                                    class="form-control w-style w-input button-radias btn_background" placeholder="When?"
                                    onfocus="(this.type='date')">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-1 col-md-2 col-sm-12 col-12">
                <div class="container-fluid">
                    <div class="row flex-row filters">
                        <div class="me-3 px-0">
                            <form action="#" class="mt-2">
                                <button id="typeCategories" class="form-control btn_background w-style"> <img
                                        src="{{ asset('assets/images/brand/equalizer.png') }}" class="w-5"
                                        alt=""> {{ lang('More filters') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-12 col-12 p-0">
                <div class="container-fluid">
                    <div class="row flex-row filters">
                        <div class="mb-2 mb-md-0 px-0">
                            <form action="#" class="mt-2">
                                <input type="text" class="form-control w-style button-radias btn_background"
                                    placeholder="{{ lang('Enter a Keyword') }}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-2 col-sm-12 col-12 p-0">
                <div class="container-fluid">
                    <div class="row flex-row filters">
                        <div class="text-end pe-7 pt-1 mt-1 form-check form-switch d-lg-block d-none">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                style="width: 53px; height: 33px;" checked>
                            <label class="form-check-label ms-5 my-3"
                                for="flexSwitchCheckChecked">{{ lang('Map') }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-0 bg-dark">
        <!-- ROW-1 END -->

        <!-- ROW-2 -->
        <div class="bg-white mainContent">
            <div class="row">
                <div class="col-lg-7 col-12 px-0 scroll-dive" id="galleryColumn">
                    <div class="container-fluid p-0">
                        <div class="card custom-card card-raduas">
                            <div class="overflow-auto" style="overflow: auto !important;">
                                <div class="border-bottom-0 p-0 ps-6 font_size pt-4">
                                    <h4><b>What kind of space are you looking for?</b></h4>
                                </div>
                                <div class="container-fluid">
                                    <div class="card-body">
                                        <div class="owl-carousel">
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.1.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Storefront</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.2.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Banquet Hall</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.3.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Flex Space</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.7.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Conference Room</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.8.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Performance Hall</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.9.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Meeting Hall</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.10.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Lounge</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.1.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Storefront</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.2.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Banquet Hall</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.8.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Performance Hall</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.7.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Conference Room</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.3.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Flex Space</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="border-bottom-0 ms-5 mb-5">
                                    4,333 party hall spaces near USA
                                </div>
                                <div class="border-bottom-0 new_color-div bg-light-gray ms-5 mb-5">
                                    <p class="mt-1 ms-2"><b
                                            class="text-white new_color px-3 py-2 font_size">NEW</b>&nbsp; Pay
                                        half now, half later! You can now book a space for 50% upfront and pay the rest
                                        at a later time.</p>
                                </div> --}}
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        {{-- @foreach ($space as $value)
                                    <div class="col-xl-4 col-md-6 col-sm-12">
                                        <div class="card overflow-hidden">
                                            <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                                <div class="me-2 card-background">
                                                    <button type="button" class="btn mt-1 mb-1 me-3">
                                                        <span
                                                            class="badge bg-white p-0 py-3 pe-3 text-dark noti-design">&nbsp;<span
                                                                class="bg-white p-1 span-design">{{lang('SR')}}</span>&nbsp;
                                                            {{lang('From SAR')}}
                                                            {{ @$value->spaceHaveActivities[0]->rate_per_hour
                                                            }}{{lang('/Hour')}}</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <a href="{{ route('space-details', @$value->id) }}">
                                                <img src="{{ asset(@$value->spaceImages[0]->image) }}"
                                                    class="card-img-top" alt="img">
                                                <div class="row p-3">
                                                    <div class="row p-3">
                                                        <div class="col-12">{{ lang(@$value->space_title) }}
                                                        </div>
                                                        <div class="col-12 my-3"><i class="fa fa-users"></i> 25
                                                        </div>
                                                        <div class="col-12"><b>{{lang('Responds within 1hr')}}</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach --}}
                                        <div class="col-xl-4 col-md-6 col-sm-12">
                                            <div class="card overflow-hidden">
                                                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                                    <div class="me-2 card-background">
                                                        <button type="button" class="btn mt-1 mb-1 me-3">
                                                            <span
                                                                class="badge bg-white p-0 py-3 pe-3 text-dark noti-design">&nbsp;<span
                                                                    class="bg-white p-1 span-design">SR</span>&nbsp; From
                                                                SAR30/Hour</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <a href="{{ URL('/service-details') }}">
                                                    <img src="{{ asset('assets/images/users/services/1 (6).png') }}"
                                                        class="card-img-top h-card-image" alt="img">
                                                    <div class="row p-3">
                                                        <div class="row p-3">
                                                            <div class="col-12">dreamy studio for creative meetings
                                                            </div>
                                                            <div class="col-12 my-3"><i class="fa fa-users"></i> 35
                                                                &nbsp;
                                                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                                                <i class="fa fa-star"
                                                                    style="color: rgb(241, 196, 15);"></i>
                                                                <i class="fa fa-star"
                                                                    style="color: rgb(241, 196, 15);"></i>
                                                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                                                <i class="fa fa-star" style="color: #F1C40F"></i> &nbsp;
                                                                14
                                                            </div>
                                                            <div class="col-12"><b>Responds within 1hr</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-sm-12">
                                            <div class="card overflow-hidden">
                                                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                                    <div class="me-2 card-background">
                                                        <button type="button" class="btn mt-1 mb-1 me-3">
                                                            <span
                                                                class="badge bg-white p-0 py-3 pe-3 text-dark noti-design">&nbsp;<span
                                                                    class="bg-white p-1 span-design">SR</span>&nbsp; From
                                                                SAR50/Hour</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <a href="{{ URL('/service-details') }}">
                                                    <img src="{{ asset('assets/images/users/services/1 (5).png') }}"
                                                        class="card-img-top h-card-image" alt="img">
                                                    <div class="row p-3">
                                                        <div class="row p-3">
                                                            <div class="col-12">Quiet Cozy Andersonville Library
                                                            </div>
                                                            <div class="col-12 my-3"><i class="fa fa-users"></i> 15
                                                                &nbsp;
                                                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                                                <i class="fa fa-star"
                                                                    style="color: rgb(241, 196, 15);"></i>
                                                                <i class="fa fa-star"
                                                                    style="color: rgb(241, 196, 15);"></i>
                                                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                                                <i class="fa fa-star" style="color: #F1C40F"></i> &nbsp;
                                                                19
                                                            </div>
                                                            <div class="col-12"><b>Responds within 3hr</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-sm-12">
                                            <div class="card overflow-hidden">
                                                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                                    <div class="me-2 card-background">
                                                        <button type="button" class="btn mt-1 mb-1 me-3">
                                                            <span
                                                                class="badge bg-white p-0 py-3 pe-3 text-dark noti-design">&nbsp;<span
                                                                    class="bg-white p-1 span-design">SR</span>&nbsp; From
                                                                SAR40/Hour</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <a href="{{ URL('/service-details') }}">
                                                    <img src="{{ asset('assets/images/users/services/1 (4).png') }}"
                                                        class="card-img-top h-card-image" alt="img">
                                                    <div class="row p-3">
                                                        <div class="row p-3">
                                                            <div class="col-12">Creative Storefront in Chinatown
                                                            </div>
                                                            <div class="col-12 my-3"><i class="fa fa-users"></i> 10
                                                                &nbsp;
                                                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                                                <i class="fa fa-star"
                                                                    style="color: rgb(241, 196, 15);"></i>
                                                                <i class="fa fa-star"
                                                                    style="color: rgb(241, 196, 15);"></i>
                                                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                                                <i class="fa fa-star" style="color: #F1C40F"></i> &nbsp;
                                                                20
                                                            </div>
                                                            <div class="col-12"><b>Responds within 1hr</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-sm-12">
                                            <div class="card overflow-hidden">
                                                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                                    <div class="me-2 card-background">
                                                        <button type="button" class="btn mt-1 mb-1 me-3">
                                                            <span
                                                                class="badge bg-white p-0 py-3 pe-3 text-dark noti-design">&nbsp;<span
                                                                    class="bg-white p-1 span-design">SR</span>&nbsp; From
                                                                SAR70/Hour</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <a href="{{ URL('/service-details') }}">
                                                    <img src="{{ asset('assets/images/users/services/1 (3).png') }}"
                                                        class="card-img-top h-card-image" alt="img">
                                                    <div class="row p-3">
                                                        <div class="row p-3">
                                                            <div class="col-12">Cozy Brick Coffee Shop and Bookstore
                                                            </div>
                                                            <div class="col-12 my-3"><i class="fa fa-users"></i> 23
                                                                &nbsp;
                                                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                                                <i class="fa fa-star"
                                                                    style="color: rgb(241, 196, 15);"></i>
                                                                <i class="fa fa-star"
                                                                    style="color: rgb(241, 196, 15);"></i>
                                                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                                                <i class="fa fa-star" style="color: #F1C40F"></i> &nbsp;
                                                                25
                                                            </div>
                                                            <div class="col-12"><b>Responds within 4hr</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-sm-12">
                                            <div class="card overflow-hidden">
                                                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                                    <div class="me-2 card-background">
                                                        <button type="button" class="btn mt-1 mb-1 me-3">
                                                            <span
                                                                class="badge bg-white p-0 py-3 pe-3 text-dark noti-design">&nbsp;<span
                                                                    class="bg-white p-1 span-design">SR</span>&nbsp; From
                                                                SAR65/Hour</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <a href="{{ URL('/service-details') }}">
                                                    <img src="{{ asset('assets/images/users/services/1 (2).png') }}"
                                                        class="card-img-top h-card-image" alt="img">
                                                    <div class="row p-3">
                                                        <div class="row p-3">
                                                            <div class="col-12">Vibrant, Well-Equipped Art Studio
                                                            </div>
                                                            <div class="col-12 my-3"><i class="fa fa-users"></i> 25
                                                                &nbsp;
                                                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                                                <i class="fa fa-star"
                                                                    style="color: rgb(241, 196, 15);"></i>
                                                                <i class="fa fa-star"
                                                                    style="color: rgb(241, 196, 15);"></i>
                                                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                                                <i class="fa fa-star" style="color: #F1C40F"></i> &nbsp;
                                                                35
                                                            </div>
                                                            <div class="col-12"><b>Responds within 5hr</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-sm-12">
                                            <div class="card overflow-hidden">
                                                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                                    <div class="me-2 card-background">
                                                        <button type="button" class="btn mt-1 mb-1 me-3">
                                                            <span
                                                                class="badge bg-white p-0 py-3 pe-3 text-dark noti-design">&nbsp;<span
                                                                    class="bg-white p-1 span-design">SR</span>&nbsp; From
                                                                SAR60/Hour</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <a href="{{ URL('/service-details') }}">
                                                    <img src="{{ asset('assets/images/users/services/1 (1).png') }}"
                                                        class="card-img-top h-card-image" alt="img">
                                                    <div class="row p-3">
                                                        <div class="row p-3">
                                                            <div class="col-12">Beautiful WaterFront Beach Party Hall
                                                            </div>
                                                            <div class="col-12 my-3"><i class="fa fa-users"></i> 35
                                                                &nbsp;
                                                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                                                <i class="fa fa-star"
                                                                    style="color: rgb(241, 196, 15);"></i>
                                                                <i class="fa fa-star"
                                                                    style="color: rgb(241, 196, 15);"></i>
                                                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                                                <i class="fa fa-star" style="color: #F1C40F"></i> &nbsp;
                                                                32
                                                            </div>
                                                            <div class="col-12"><b>Responds within 7hr</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="text-start ms-3 mt-5">Showing 1-24 of 12647</p>
                                        </div>
                                        <div class="col-5">
                                            <div class="">
                                                <div class="container m-0 pb-5">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link"
                                                                style="border-radius: 50px 0px 0px 50px !important;"
                                                                href="#"><i
                                                                    class="fa fa-angle-double-left nav-style"></i></a></li>
                                                        <li class="page-item"><a class="page-link" href="#"><i
                                                                    class="fa fa-angle-left  nav-style"></i></a></li>
                                                        <li class="page-item"><a class="page-link p-3"
                                                                href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link p-3"
                                                                href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link p-3" href="#">..</a></li>
                                                        <li class="page-item"><a class="page-link p-3"
                                                                href="#">8</a></li>
                                                        <li class="page-item"><a class="page-link" href="#"><i
                                                                    class="fa fa-angle-right  nav-style"></i></a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                style="border-radius: 0px 50px 50px 0px !important;"
                                                                href="#"><i
                                                                    class="fa fa-angle-double-right  nav-style"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="bg-dark">
                                    <div class="">
                                        <p><a href="#">See all off-site spaces in Chicago</a></p>
                                        <p class="text-gray font_size">Peerspace is also live in <a href="#"> San
                                                Francisco,
                                                Silicon Valley, Los Angeles, </a>and <a href="#">40 more cites</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 mt-5 mt-lg-0 p-0" id="map">
                    <div class="container-fluid ps-2">
                        <div class="card custom-card">
                            <div class="map_height overflow-auto" id="mapContainer">
                                <iframe class="gmap_iframe" frameborder="0" scrolling="no" id="gmap_iframe"
                                    marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ROW-2 END -->
@endsection

@section('scripts')
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC5qN37hurCFwbFsZt2nzzwzGcbSt08R5E">
    </script>
    <script>
        $(document).ready(function() {
            // Create an array to hold marker data
            var markers = [
                @foreach (@$space as $value)
                    {
                        lat: {
                            {
                                @$value - > lat
                            }
                        },
                        lng: {
                            {
                                @$value - > lng
                            }
                        },
                        title: "{{ @$value->title }}"
                    },
                @endforeach
            ];

            // Create a map centered at the specified location
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: {
                        {
                            @$lat
                        }
                    },
                    lng: {
                        {
                            @$lng
                        }
                    }
                },
                zoom: 10
            });

            // Loop through the markers array and create markers for each data point
            markers.forEach(function(markerData) {
                var marker = new google.maps.Marker({
                    position: {
                        lat: markerData.lat,
                        lng: markerData.lng
                    },
                    map: map,
                    title: markerData.title
                });
            });
        });
        // $(document).ready(function() {
        //     // Get latitude, longitude, and title from PHP variable
        //     var lat = {{ @$lat }};
        //     var lng = {{ @$lng }};
        //     var title = "{{ @$title }}";
        //     // Create a map centered at the specified location
        //     var map = new google.maps.Map(document.getElementById('map'), {
        //         center: {
        //             lat: lat,
        //             lng: lng
        //         },
        //         zoom: 14
        //     });
        //     // Create a marker at the specified location
        //     var marker = new google.maps.Marker({
        //         position: {
        //             lat: lat,
        //             lng: lng
        //         },
        //         map: map,
        //         title: title
        //     });
        // });
    </script>
    <!-- OWL CAROUSEL JS-->
    <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>

    <!-- OWL Carousel js -->
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#flexSwitchCheckChecked').on('click', function() {
                $('#map').toggleClass('d-none');
                $('#galleryColumn').toggleClass('col-lg-12');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            function hideDropdown(resultsDiv, inputDiv) {
                resultsDiv.empty();
            }

            function setupSearch(inputId, resultsId) {
                const categories = [
                    "Live Music",
                    "Dance Performances",
                    "Comedy and Entertainment",
                    "Visual and Performing Arts",
                    "Variety Acts",
                    "Speakers and Presenters",
                    "Interactive Performances",
                    "Cultural Performances",
                ];

                const searchInput = $(inputId);
                const searchResults = $(resultsId);

                searchInput.on("input", function() {
                    const inputValue = this.value.toLowerCase();
                    const filteredCategories = categories.filter(category => category.toLowerCase()
                        .includes(inputValue));
                    const maxResultsToShow = 4;

                    searchResults.html("").css("border-bottom-left-radius", "13px").css(
                        "border-bottom-right-radius", "13px");

                    if (inputValue.length > 0) {
                        filteredCategories.slice(0, maxResultsToShow).forEach(category => {
                            const div = $("<div class='search-drop-content text-start ps-5'>").text(
                                category);
                            searchResults.append(div);
                            $(inputId).parent().addClass("data-appended");
                        });
                    }
                    if (inputValue.length > 0) {
                        searchResults.show();
                    } else {
                        searchResults.hide();
                    }
                });
                searchResults.on("click", ".search-drop-content", function() {
                    const selectedCategory = $(this).text();
                    searchInput.val(selectedCategory);
                    searchResults.hide();
                });
                $(document).click(function(event) {
                    var target = $(event.target);
                    if (!target.closest(resultsId).length && !target.is(inputId)) {
                        hideDropdown(searchResults, $(inputId).parent());
                    }
                });
            }
            setupSearch("#typeCategories", "#searchResults");
        });

        /* Space ka Values Ko Input Main Store Kerna Ka liya */

        document.addEventListener('DOMContentLoaded', function() {
            var priceRadioButtons = document.querySelectorAll('#dropdownMenuPrice input[type="radio"]');
            var attendeesRadioButtons = document.querySelectorAll('#dropdownMenuAttendees input[type="radio"]');
            var priceButton = document.getElementById('priceButton');
            var attendeesButton = document.getElementById('attendeesButton');

            priceRadioButtons.forEach(function(radioButton) {
                radioButton.addEventListener('change', function() {
                    priceButton.innerText = this.nextElementSibling.innerText;
                });
            });

            attendeesRadioButtons.forEach(function(radioButton) {
                radioButton.addEventListener('change', function() {
                    attendeesButton.querySelector('.attendees-label').innerText = this
                        .nextElementSibling.innerText;
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var priceFromInput = document.getElementById('priceFrom');
            var priceToInput = document.getElementById('priceTo');
            var priceButton = document.getElementById('priceButton');

            priceFromInput.addEventListener('input', function() {
                updatePriceButton();
            });

            priceToInput.addEventListener('input', function() {
                updatePriceButton();
            });

            function updatePriceButton() {
                var priceFromValue = priceFromInput.value;
                var priceToValue = priceToInput.value;
                var buttonText = "{{ lang('Price') }}";

                if (priceFromValue && priceToValue) {
                    buttonText = "$" + priceFromValue + " to $" + priceToValue;
                } else if (priceFromValue) {
                    buttonText = "$" + priceFromValue + " and above";
                } else if (priceToValue) {
                    buttonText = "Up to $" + priceToValue;
                }

                priceButton.innerText = buttonText;
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            var attendeesInput = document.getElementById('attendeesInput');
            var attendeesButton = document.getElementById('attendeesButton');

            attendeesInput.addEventListener('input', function() {
                updateAttendeesButton();
            });

            function updateAttendeesButton() {
                var attendeesValue = attendeesInput.value;
                var buttonText = "{{ lang('Attendees') }}";

                if (attendeesValue) {
                    buttonText = attendeesValue;
                }

                attendeesButton.querySelector('.attendees-label').innerText = buttonText;
            }
        });

        document.getElementById('dateInput').addEventListener('focusout', function() {
            this.type = 'text';
            this.placeholder = 'dd/mm/yyyy';
        });

        document.getElementById('clearButton1').addEventListener('click', function(e) {
            e.preventDefault();
            var attendeesInput = document.getElementById('attendeesInput');
            var priceButton = document.getElementById('priceButton');

            if (attendeesInput.value === '') {
                priceButton.innerHTML = "{{ lang('Price') }} <span class='caret'></span>";
            }

            attendeesInput.value = '';
        });

        document.getElementById('clearButton2').addEventListener('click', function(e) {
            e.preventDefault();
            var attendeesInput = document.getElementById('attendeesInput');
            var attendeesButton = document.getElementById('attendeesButton');

            if (attendeesInput.value === '') {
                var attendeesLabel = document.querySelector('.attendees-label');
                attendeesLabel.innerHTML = "{{ lang('Attendees') }}";
            }

            attendeesInput.value = '';
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            //   navText: [
            //     "<i class='fa fa-caret-left'></i>",
            //     "<i class='fa fa-caret-right'></i>"
            //   ],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
@endsection
