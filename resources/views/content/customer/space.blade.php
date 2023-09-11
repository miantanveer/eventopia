@extends('layouts.app')

@section('styles')
<style>
    .filters {
        background-color: #F5F9FF;
    }

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
        height: 550px !important;
    }

    .scroll-dive {
        height: 550px;
        overflow: auto !important;
    }

    .mainContent{
        height: 54vh;
    }

    .span-design {
        border: black solid 5px;
        border-radius: 50%;
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
        border-radius: 8px !important;
    }

    .scroll-dive::-webkit-scrollbar-thumb {
        background-color: #727171;
        border-radius: 8px !important;
    }

    .scroll-dive:hover::-webkit-scrollbar-thumb {
        background-color: #727171;
    }

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
</style>
@endsection

@section('content')
<!-- ROW-1 -->
<div class="row mt-5">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="container-fluid">
            <div class="row filters">
                <div class="col-12 col-sm-1">
                    <div class="mt-2 mb-2">
                        <button type="button" id="priceButton"
                            class="btn btn-outline button-radias dropdown-toggle text-dark btn_background px-0 w-100"
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
                                                    name="space_size" required data-parsley-errors-container="#sq_error"
                                                    value="" id="priceFrom">
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
                                                    name="space_size" required data-parsley-errors-container="#sq_error"
                                                    value="" id="priceTo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5 mb-1">
                                        <div class="w-50">
                                            <a href="#" class="float-start text-dark p-3" id="clearButton1">Clear</a>
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

                <div class="col-md-1 col-12 px-0">
                    <form action="#" class="mt-2">
                        <input type="text" id="typeCategories" class="form-control btn_background button-radias"
                            placeholder="{{ lang('Type') }}">
                    </form>
                </div>

                <div class="col-12 col-sm-1">
                    <div class="mt-2 mb-2">
                        <button type="button" id="attendeesButton"
                            class="btn btn-outline dropdown-toggle button-radias text-dark btn_background"
                            data-bs-toggle="dropdown">
                            <span class="attendees-label">{{ lang('Attendees') }}</span> <span class="caret"></span>
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
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option3">
                                            <span class="custom-control-label">{{ lang('26 to 50') }}</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option4">
                                            <span class="custom-control-label">{{ lang('51 to 100') }}</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option5">
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
                                            <a href="#" id="clearButton2" class="float-start text-dark p-3">Clear</a>
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

                <div class="col-12 col-sm-1 ps-0">
                    <form action="#" class="mt-2">
                        <input id="dateInput" type="text" class="form-control button-radias btn_background"
                            placeholder="When?" onfocus="(this.type='date')">
                    </form>
                </div>

                <div class="col-lg-2 col-md-3 col-12 col-xl-2 mb-2 mb-md-0 px-0">
                    <form action="#" class="mt-2">
                        <input type="text" class="form-control button-radias btn_background"
                            placeholder="{{ lang('Enter a Keyword') }}">
                    </form>
                </div>
                <div class="col-0 col-md-4">

                </div>
                <div class="col-2">
                    <a href="#"><img src="{{ asset('assets/images/brand/equalizer.png') }}"
                            class="w-6 mt-3 me-5 float-end" alt=""></a>
                </div>

            </div>
        </div>
    </div>
</div>
<br>
<!-- ROW-1 END -->

<!-- ROW-2 -->
<div class="bg-white mainContent">
    <div class="bg-white p-4">
        <div class="row">
            <div class="col-6">
                <div class="border-bottom-0 p-0 ps-5 pt-4">
                    What kind of space are you looking for?
                </div>
            </div>
            <div class="col-6">
                <div class="text-end mt-4 me-5 form-check form-switch d-lg-block d-none">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">{{ lang('Map') }}</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-12 scroll-dive" id="galleryColumn">
            <div class="container-fluid p-0">
                <div class="card custom-card card-raduas">
                    <div class="overflow-auto" style="overflow: auto !important;">
                        <div class="container-fluid">
                            {{-- <div class="card custom-card">
                                <div class="card-body pt-0 h-100">
                                    <div class="owl-carousel owl-carousel-icons2">
                                        <div class="item">
                                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                <a href="#"><img src="{{ asset('assets/images/users/spaces/11.jpg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Flex Space</b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                <a href="#"><img src="{{ asset('assets/images/users/spaces/3.jpg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Flex Space</b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                <a href="#"><img src="{{ asset('assets/images/users/spaces/9.jpg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Flex Space</b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                <a href="#"><img src="{{ asset('assets/images/users/spaces/1.jpg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b>Flex Space</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="border-bottom-0 ms-5 mb-5">
                                4,333 party hall spaces near USA
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                {{-- @foreach($space as $value)
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                    <div class="card overflow-hidden">
                                        <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                            <div class="me-2 card-background">
                                                <button type="button" class="btn mt-1 mb-1 me-3">
                                                    <span
                                                        class="badge bg-white p-0 py-3 pe-3 text-dark noti-design">&nbsp;<span
                                                            class="bg-white p-1 span-design">{{lang('SR')}}</span>&nbsp; {{lang('From SAR')}}
                                                            {{ @$value->spaceHaveActivities[0]->rate_per_hour }}{{lang('/Hour')}}</span>
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
                                                        SAR40/Hour</span>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="{{ URL('/service-details') }}">
                                            <img src="{{ asset('assets/images/users/services/1 (6).png') }}"
                                                class="card-img-top" alt="img">
                                            <div class="row p-3">
                                                <div class="row p-3">
                                                    <div class="col-12">Beautiful WaterFront Beach Party Hall
                                                    </div>
                                                    <div class="col-12 my-3"><i class="fa fa-users"></i> 25
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
                                                        SAR40/Hour</span>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="{{ URL('/service-details') }}">
                                            <img src="{{ asset('assets/images/users/services/1 (5).png') }}"
                                                class="card-img-top" alt="img">
                                            <div class="row p-3">
                                                <div class="row p-3">
                                                    <div class="col-12">Beautiful WaterFront Beach Party Hall
                                                    </div>
                                                    <div class="col-12 my-3"><i class="fa fa-users"></i> 25
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
                                                        SAR40/Hour</span>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="{{ URL('/service-details') }}">
                                            <img src="{{ asset('assets/images/users/services/1 (4).png') }}"
                                                class="card-img-top" alt="img">
                                            <div class="row p-3">
                                                <div class="row p-3">
                                                    <div class="col-12">Beautiful WaterFront Beach Party Hall
                                                    </div>
                                                    <div class="col-12 my-3"><i class="fa fa-users"></i> 25
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
                                                        SAR40/Hour</span>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="{{ URL('/service-details') }}">
                                            <img src="{{ asset('assets/images/users/services/1 (3).png') }}"
                                                class="card-img-top" alt="img">
                                            <div class="row p-3">
                                                <div class="row p-3">
                                                    <div class="col-12">Beautiful WaterFront Beach Party Hall
                                                    </div>
                                                    <div class="col-12 my-3"><i class="fa fa-users"></i> 25
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
                                                        SAR40/Hour</span>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="{{ URL('/service-details') }}">
                                            <img src="{{ asset('assets/images/users/services/1 (2).png') }}"
                                                class="card-img-top" alt="img">
                                            <div class="row p-3">
                                                <div class="row p-3">
                                                    <div class="col-12">Beautiful WaterFront Beach Party Hall
                                                    </div>
                                                    <div class="col-12 my-3"><i class="fa fa-users"></i> 25
                                                    </div>
                                                    <div class="col-12"><b>Responds within 1hr</b>
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
        <div class="col-lg-4 col-12 mt-5 mt-lg-0 p-0" id="map">
            <div class="container-fluid">
                <div class="card custom-card">
                    <div class="map_height overflow-auto" id="mapContainer">
                        <iframe class="gmap_iframe" frameborder="0" scrolling="no" id="gmap_iframe" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="ms-5">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-success mb-1">
                        <li class="page-item page-0">
                            <a aria-label="Next" class="page-link" href="javascript:void(0)"><i
                                    class="fa fa-angle-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">01</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">02</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">03</a>
                        </li>
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">10</a>
                        </li>
                        <li class="page-item page-0">
                            <a aria-label="Next" class="page-link" href="javascript:void(0)"><i
                                    class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-4">
            <p class="text-center">Showing 1-24 of 4338</p>
        </div>
    </div>
</div>


<!-- ROW-2 -->
{{-- <div class="row">
    <div class="col-lg-8 col-12 scroll-dive" id="galleryColumn">
        <div class="container-fluid">
            <div class="card custom-card">
                <div class="overflow-auto" style="overflow: auto !important;">
                    <div class="container-fluid">
                        <div class="card custom-card">
                            <div class="card-header border-bottom-0">
                                {{ lang('The talent & entertainments you might be looking for?') }}
                            </div>
                            <div class="card-body pt-0 h-100">
                                <div class="owl-carousel owl-carousel-icons2">
                                    <!-- @foreach ($space as $value)
    <div class="item card_height">
                                                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white h-100">
                                                                <a href="{{ route('space-details', @$value->id) }}" class="h-100"><img class="h-100"
                                                                        src="{{ asset(@$value->spaceImages[0]->image) }}"
                                                                        alt="img"></a>
                                                            </div>
                                                        </div>
                                                        @endforeach -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="row">
                            <!-- @if (@$space == null)
                                    @php
                                        $lat = 0;
                                        $lng = 0;
                                        $title = 0;
                                    @endphp
                                    <div class="text-center">
                                        <h2><strong>{{ lang("We couldn't find any spaces.") }}</strong></h2>
                                    </div>
                                    @else
                                        <div class="card-header border-bottom-0 ms-3">
                                        {{ $count }} {{ lang('spaces found') }}
                                    </div>
                                    @foreach (@$space as $value)
                                        @php
                                            $lat = $value->lat;
                                            $lng = $value->lng;
                                            $title = $value->space_title;
                                        @endphp
                                        <div class="col-xl-4 col-md-6 col-sm-12">
                                            <div class="card overflow-hidden">
                                                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                                    <div class="ms-1 card-border float-start">
                                                        <p class="text-dark p-2 bg-primary">{{ lang('From SAR') }}{{ @$value->spaceHaveActivities[0]->rate_per_hour }}{{ lang('/hour') }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <a href="{{ route('space-details', @$value->id) }}">
                                                    <img src="{{ asset(@$value->spaceImages[0]->image) }}"
                                                        class="card-img-top" style="width: 200px;padding-top: 10px"
                                                        alt="img">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ @$value->space_title }}</h5>
                                                        <i class="fa fa-group"></i> 25 &nbsp;
                                                        <i class="fa fa-star" style="color:#f1c40f"></i>
                                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                        <p>{{ lang('Responds within 1 hour') }}</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                            @endforeach
                            @endif -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-12 mt-5 mt-lg-0" id="map">
        <div class="container-fluid">
            <div class="card custom-card">
                <div class="card-body map_height overflow-auto" id="mapContainer">
                    <iframe class="gmap_iframe" frameborder="0" scrolling="no" id="gmap_iframe" marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div> --}}


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
                $('#mapColumn').toggleClass('d-none');
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
                attendeesButton.querySelector('.attendees-label').innerText = this.nextElementSibling.innerText;
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


</script>

@endsection