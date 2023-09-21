@extends('layouts.app')

@section('styles')
<style>
    .calendarAndTimePicker {
        border-bottom-left-radius: 13px !important;
        border-bottom-right-radius: 13px !important;
        margin: 0px !important;
    }

    .calendarAndTimePicker-1 {
        border-bottom-left-radius: 13px !important;
        border-bottom-right-radius: 13px !important;
        margin: 0px !important;
        position: relative;
        z-index: 9999;
    }

    .calendarAndTimePicker-2 {
        border-bottom-left-radius: 13px !important;
        border-bottom-right-radius: 13px !important;
        margin: 0px !important;
        position: relative;
        z-index: 9999;
    }

    .app-sidebar__toggle,
    .navbar-toggler-icon {
        color: white !important;
    }

    .calendar-container-1 {
        padding: 40px 50px 0 50px;
        background-color: white !important;
        font: 13px Helvetica, Arial, san-serif;
        border-bottom-left-radius: 13px !important;
    }

    .calendar {
        display: inline;
    }

    .year-header {
        background: #f5f6fa;
        font-family: Helvetica;
        height: 40px;
        text-align: center;
        position: relative;
        color: black;
        border-top-left-radius: 3px;
    }

    .year-header span {
        display: inline-block;
        font-size: 20px;
        line-height: 40px;
    }

    .left-button,
    .right-button {
        cursor: pointer;
        width: 28px;
        text-align: center;
        position: absolute;
    }

    .left-button {
        left: 0;
        -webkit-border-top-left-radius: 5px;
        -moz-border-radius-topleft: 5px;
        border-top-left-radius: 5px;
    }

    .right-button {
        right: 0;
        top: 0;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topright: 5px;
        border-top-right-radius: 5px;
    }

    .left-button {
        background: black !important;
        color: white !important;
        font-size: 2.5rem !important;
        border-radius: 5px 0px 0px 5px;
    }

    .right-button {
        background: black !important;
        color: white !important;
        font-size: 2.5rem !important;
        border-radius: 0px 5px 5px 0px;
    }

    .clear_button-1 {
        cursor: pointer;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: none;
        font-size: 1rem;
        border-radius: 25px;
        padding: 0.65rem 1.9rem;
        transition: 0.2s ease all;
        color: black !important;
        border: none;
        box-shadow: 0 5px 8px rgb(149, 149, 149);
    }

    .clear_button-1:active {
        transform: translateY(3px) scale(0.97);
        box-shadow: 0 4px 8px rgb(191, 191, 191);
    }

    .clear_button-2 {
        cursor: pointer;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: none;
        font-size: 1rem;
        border-radius: 25px;
        padding: 0.65rem 1.9rem;
        transition: 0.2s ease all;
        color: black !important;
        border: none;
        box-shadow: 0 5px 8px rgb(149, 149, 149);
    }

    .clear_button-2:active {
        transform: translateY(3px) scale(0.97);
        box-shadow: 0 4px 8px rgb(191, 191, 191);
    }

    .days-table {
        border-collapse: separate;
        text-align: center;
        width: 100%;
    }

    .dates-table {
        border-collapse: separate;
        text-align: center;
        width: 100% !important;
    }

    .months-table {
        border-collapse: separate;
        text-align: center;
        width: 100%;
    }

    .day {
        height: 26px;
        width: 26px;
        padding: 0 10px;
        line-height: 26px;
        border: 2px solid transparent;
        text-transform: uppercase;
        font-size: 100%;
        color: black !important;
        font-weight: 700;
    }

    .month {
        cursor: default;
        height: 26px;
        width: 26px;
        padding: 0 2px;
        padding-top: 10px;
        line-height: 26px;
        text-transform: uppercase;
        font-size: 11px;
        color: #9e9e9e;
        transition: all 250ms;
    }

    .month-1 {
        cursor: default;
        height: 26px;
        width: 26px;
        padding: 0 2px;
        padding-top: 10px;
        line-height: 26px;
        text-transform: uppercase;
        font-size: 11px;
        color: #9e9e9e;
        transition: all 250ms;
    }

    .active-month {
        font-weight: bold;
        font-size: 14px;
        color: black;
    }

    .month:hover {
        color: bla;
    }

    .table-date {
        cursor: default;
        color: #2b2b2b;
        height: 26px;
        width: 26px;
        font-size: 15px;
        padding: 10px;
        line-height: 35px;
        text-align: center;
        border-radius: 100%;
        border: 2px solid transparent;
        transition: all 250ms;
    }

    .table-date:not(.nil):hover {
        border-color: white;
        box-shadow: 0 2px 6px rgb(158, 158, 158);
    }

    .active-date {
        background: black !important;
        color: white !important;
        box-shadow: 0 0px 5px rgb(158, 158, 158);
    }

    .dialog {
        background: #fff;
        border-bottom-right-radius: 13px !important;
    }

    .dialog-header {
        margin: 20px;
        color: #333;
        text-align: center;
    }

    .startTime_label {
        color: #9fa7af;
    }

    .endTime_label {
        color: #9fa7af;
    }

    /* @media only screen and (max-width: 780px) {
                .dialog {
                    width: 370px;
                    height: 450px;
                    border-radius: 3px;
                    top: 0;
                    left: 0;
                }

                .calendar-container-1 {
                    float: none;
                    padding: 0;
                    margin: 0 auto;
                    margin-right: 0;
                    display: block;
                    left: 0;
                    border-radius: 3px;
                    box-shadow: 3px 8px 16px rgba(0, 0, 0, 0.19),
                        0 6px 6px rgba(0, 0, 0, 0.23);
                    -moz-box-shadow: 3px 8px 16px rgba(0, 0, 0, 0.19),
                        0 6px 6px rgba(0, 0, 0, 0.23);
                    -webkit-box-shadow: 3px 8px 16px rgba(0, 0, 0, 0.19),
                        0 6px 6px rgba(0, 0, 0, 0.23);
                }
            }

            @media only screen and (max-width: 400px) {

                .left-button {
                    background: black !important;
                    color: white !important;
                }

                .right-button {
                    background: black !important;
                    color: white !important;
                }

                .clear_button {
                    cursor: pointer;
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                    outline: none;
                    font-size: 1rem;
                    border-radius: 25px;
                    padding: 0.65rem 1.9rem;
                    transition: 0.2s ease all;
                    color: black !important;
                    border: none;
                    box-shadow: 0 5px 8px rgb(149, 149, 149);
                }

                .clear_button:active {
                    transform: translateY(3px) scale(0.97);
                    box-shadow: 0 4px 8px rgb(191, 191, 191);
                }

                .days-table {
                    border-collapse: separate;
                    text-align: center;
                    width: 100%;
                }

                .dates-table {
                    border-collapse: separate;
                    text-align: center;
                    width: 100% !important;
                }

                .months-table {
                    border-collapse: separate;
                    text-align: center;
                    width: 100%;
                }

                .day {
                    height: 26px;
                    width: 26px;
                    padding: 0 10px;
                    line-height: 26px;
                    border: 2px solid transparent;
                    text-transform: uppercase;
                    font-size: 100%;
                    color: black !important;
                    font-weight: 700;
                }

                .month {
                    cursor: default;
                    height: 26px;
                    width: 26px;
                    padding: 0 2px;
                    padding-top: 10px;
                    line-height: 26px;
                    text-transform: uppercase;
                    font-size: 11px;
                    color: #9e9e9e;
                    transition: all 250ms;
                }

                .active-month {
                    font-weight: bold;
                    font-size: 14px;
                    color: black;
                }

                .month:hover {
                    color: bla;
                }

                .table-date {
                    cursor: default;
                    color: #2b2b2b;
                    height: 26px;
                    width: 26px;
                    font-size: 15px;
                    padding: 10px;
                    line-height: 35px;
                    text-align: center;
                    border-radius: 100%;
                    border: 2px solid transparent;
                    transition: all 250ms;
                }

                .table-date:not(.nil):hover {
                    border-color: white;
                    box-shadow: 0 2px 6px rgb(158, 158, 158);
                }

                .active-date {
                    background: black !important;
                    color: white !important;
                    box-shadow: 0 0px 5px rgb(158, 158, 158);
                }

                .dialog {
                    width: 320px;
                }

                .months-table {
                    display: block;
                    margin: 0 auto;
                    width: 320px;
                }

                .day {
                    padding: 0 7px;
                }

                .month {
                    display: inline-block;
                    padding: 10px 10px;
                    font-size: 0.8rem;
                }

                .month-1 {
                    display: inline-block;
                    padding: 10px 10px;
                    font-size: 0.8rem;
                }

                .table-date {
                    width: 20px;
                    height: 20px;
                    line-height: 20px;
                }
            } */
</style>
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

    #form-border-1.FormBorder-1.data-appended {
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
    }

    #form-border-1.FormBorder-1:not(.data-appended) {
        border-bottom-left-radius: 13px;
        border-bottom-right-radius: 13px;
    }

    #form-border-2.FormBorder-2.data-appended {
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
    }

    #form-border-2.FormBorder-2:not(.data-appended) {
        border-bottom-left-radius: 13px;
        border-bottom-right-radius: 13px;
    }

    .form-border {
        background: white;
        border-radius: 13px;
    }

    .form-blur-border {
        position: relative;
        z-index: 9999;
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

    element.style {
        width: 50% !important;
        float: right;
        top: 40px !important;
        left: 400px;
        position: absolute;
    }

    .calendar-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 503px;
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

    .max-width_modal {
        max-width: 1100px !important;
    }
</style>
<style>
    .button-radias {
        border-radius: 0px;
    }

    .footer {
        display: none;
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
        width: 100% !important;
        height: 45px !important;
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
        font-size: 30% !important;
        color: white !important;
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

    @media screen and (min-width: 1280px) and (max-width: 1500px) {
        .span_attendees {
            font-size: 90% !important;
        }
    }

    @media screen and (min-width: 992px) and (max-width: 1450px) {
        .item_title {
            font-size: 70% !important;
        }

        .h-card-image {
            height: 100% !important;
        }
    }

    @media screen and (min-width: 0px) and (max-width: 991px) {
        .h-card-image {
            height: 100% !important;
        }
    }
</style>
@endsection

<!-- ROW-1 -->
<div class="bg-white">
    @section('content')
    @include('content.components.__filter_bar')
    <hr class="my-0 bg-dark">
    <!-- ROW-1 END -->

    <!-- ROW-2 -->
    <div class="bg-white h-100 w-100 mainContent">
        <div class="row">
            <div class="col-lg-7 col-12 px-0 scroll-dive" id="galleryColumn">
                <div class="container-fluid p-0">
                    <div class="card custom-card card-raduas">
                        <div class="container-fluid">
                            <div class="border-bottom-0 p-0 ps-6 font_size pt-4">
                                <h4><b style="color:black;">What kind of {{ @$type }} are you looking for?</b>
                                </h4>
                            </div>
                            <div class="overflow-auto" style="overflow: auto !important;">
                                <div class="card-body pt-2">
                                    <div class="owl-carousel">
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.1.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Storefront</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.2.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Banquet Hall</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.3.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Flex Space</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.7.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Conference Room</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.8.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Performance Hall</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.9.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Meeting Hall</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.10.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Lounge</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.1.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Storefront</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.2.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Banquet Hall</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.8.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Performance Hall</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.7.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Conference Room</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.3.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Flex Space</h5>
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
                                    @if (@$listing == null)
                                    @php
                                    $lat = 0;
                                    $lng = 0;
                                    $title = 0;
                                    @endphp
                                    <div class="text-center">
                                        <h2><strong>{{ lang("We couldn't find any spaces.") }}</strong></h2>
                                    </div>
                                    <div class="card-header border-bottom-0 ms-1 justify-content-center">
                                        {{ lang('Try zooming out or expanding your filter criteria.') }}
                                    </div>
                                    @else
                                    <div id="ajax_data" class="row">
                                        @if (@$type == 'space')
                                        @include('content.components.__space')
                                        @elseif (@$type == 'entertainment')
                                        @include('content.components.__entertainment')
                                        @elseif (@$type == 'service')
                                        @include('content.components.__service')
                                        @endif
                                    </div>
                                    @endif

                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-4 text-md-start text-center">
                                        <p class="text-start ms-3 mt-5">Showing 1-24 of 12647</p>
                                    </div>
                                    <div class="col-12 col-md-5 text-md-start text-center">
                                        <div class="container m-0 pb-5">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link"
                                                        style="border-radius: 50px 0px 0px 50px !important;" href="#"><i
                                                            class="fa fa-angle-double-left nav-style"></i></a></li>
                                                <li class="page-item"><a class="page-link" href="#"><i
                                                            class="fa fa-angle-left  nav-style"></i></a></li>
                                                <li class="page-item"><a class="page-link p-3" href="#">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link p-3" href="#">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link p-3" href="#">...</a>
                                                </li>
                                                <li class="page-item"><a class="page-link p-3" href="#">8</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#"><i
                                                            class="fa fa-angle-right  nav-style"></i></a></li>
                                                <li class="page-item"><a class="page-link"
                                                        style="border-radius: 0px 50px 50px 0px !important;" href="#"><i
                                                            class="fa fa-angle-double-right  nav-style"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr class="bg-dark">
                                <div class="">
                                    <p><a href="#">See all off-site {{ @$type }} in Chicago</a></p>
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
                @if ($listing)
                <div class="container-fluid ps-2">
                    <div class="card custom-card">
                        <div class="map_height overflow-auto" id="mapContainer">
                            <iframe class="gmap_iframe" frameborder="0" scrolling="no" id="gmap_iframe" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            </iframe>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="dateTimeModal">
    <div class="modal-dialog max-width_modal" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Select Time</h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row w-100 bg-white calendarAndTimePicker" id="calendarAndTimePicker">
                    <div class="col-6 calendar-container-1">
                        <div class="calendar">
                            <div class="year-header">
                                <span class="left-button" id="prev"> <i class="fa fa-angle-double-left"></i>
                                </span>
                                <span class="year" id="label"> </span>
                                <span class="right-button" id="next"> <i class="fa fa-angle-double-right"></i>
                                </span>
                            </div>
                            <table class="months-table">
                                <tbody>
                                    <tr class="months-row">
                                        <td class="month">{{ lang('Jan') }}</td>
                                        <td class="month">{{ lang('Feb') }}</td>
                                        <td class="month">{{ lang('Mar') }}</td>
                                        <td class="month">{{ lang('Apr') }}</td>
                                        <td class="month">{{ lang('May') }}</td>
                                        <td class="month">{{ lang('June') }}</td>
                                        <td class="month">{{ lang('July') }}</td>
                                        <td class="month">{{ lang('Aug') }}</td>
                                        <td class="month">{{ lang('Sep') }}</td>
                                        <td class="month">{{ lang('Oct') }}</td>
                                        <td class="month">{{ lang('Nov') }}</td>
                                        <td class="month">{{ lang('Dec') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="days-table">
                                <td class="day">{{ lang('Sun') }}</td>
                                <td class="day">{{ lang('Mon') }}</td>
                                <td class="day">{{ lang('Tue') }}</td>
                                <td class="day">{{ lang('Wed') }}</td>
                                <td class="day">{{ lang('Thu') }}</td>
                                <td class="day">{{ lang('Fri') }}</td>
                                <td class="day">{{ lang('Sat') }}</td>
                            </table>
                            <div class="frame">
                                <table class="dates-table">
                                    <tbody class="tbody-tb"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 dialog" id="dialog">
                        <h2 class="dialog-header mt-7">{{ lang('Select Time') }}</h2>
                        <div class="form-container mt-7 me-6" align="center">
                            <label for="start_time" class="form-label mt-5 text-start startTime_label">{{ lang('Start Time') }}</label>
                            <select name="start-time" class="Select_Time form-select mb-5" id="start_time" disabled>
                                <option value="6:00 AM">6:00 {{ lang('AM') }}</option>
                                <option value="6:30 AM">6:30 {{ lang('AM') }}</option>
                                <option value="7:00 AM">7:00 {{ lang('AM') }}</option>
                                <option value="7:30 AM">7:30 {{ lang('AM') }}</option>
                                <option value="8:00 AM">8:00 {{ lang('AM') }}</option>
                                <option value="8:30 AM">8:30 {{ lang('AM') }}</option>
                                <option value="9:00 AM">9:00 {{ lang('AM') }}</option>
                                <option value="9:30 AM">9:30 {{ lang('AM') }}</option>
                                <option value="10:00 AM">10:00 {{ lang('AM') }}</option>
                                <option value="10:30 AM">10:30 {{ lang('AM') }}</option>
                                <option value="11:00 AM">11:00 {{ lang('AM') }}</option>
                                <option value="11:30 AM">11:30 {{ lang('AM') }}</option>
                                <option value="12:00 PM">12:00 {{ lang('PM') }}</option>
                                <option value="12:30 PM">12:30 {{ lang('PM') }}</option>
                                <option value="1:00 PM">1:00 {{ lang('PM') }}</option>
                                <option value="1:30 PM">1:30 {{ lang('PM') }}</option>
                                <option value="2:00 PM">2:00 {{ lang('PM') }}</option>
                                <option value="2:30 PM">2:30 {{ lang('PM') }}</option>
                                <option value="3:00 PM">3:00 {{ lang('PM') }}</option>
                                <option value="3:30 PM">3:30 {{ lang('PM') }}</option>
                                <option value="4:00 PM">4:00 {{ lang('PM') }}</option>
                                <option value="4:30 PM">4:30 {{ lang('PM') }}</option>
                                <option value="5:00 PM">5:00 {{ lang('PM') }}</option>
                                <option value="5:30 PM">5:30 {{ lang('PM') }}</option>
                                <option value="6:00 PM">6:00 {{ lang('PM') }}</option>
                                <option value="6:30 PM">6:30 {{ lang('PM') }}</option>
                                <option value="7:00 PM">7:00 {{ lang('PM') }}</option>
                                <option value="7:30 PM">7:30 {{ lang('PM') }}</option>
                                <option value="8:00 PM">8:00 {{ lang('PM') }}</option>
                                <option value="8:30 PM">8:30 {{ lang('PM') }}</option>
                                <option value="9:00 PM">9:00 {{ lang('PM') }}</option>
                                <option value="9:30 PM">9:30 {{ lang('PM') }}</option>
                                <option value="10:00 PM">10:00 {{ lang('PM') }}</option>
                                <option value="10:30 PM">10:30 {{ lang('PM') }}</option>
                                <option value="10:00 PM">11:00 {{ lang('PM') }}</option>
                                <option value="10:30 PM">11:30 {{ lang('PM') }}</option>
                            </select>
                            <label for="end_time" class="form-label text-start endTime_label">{{ lang('End Time') }}</label>
                            <select name="end-time" class="Select_Time form-select mb-5" id="end_time" disabled>
                                <option value="6:00 AM">6:00 {{ lang('AM') }}</option>
                                <option value="6:30 AM">6:30 {{ lang('AM') }}</option>
                                <option value="7:00 AM">7:00 {{ lang('AM') }}</option>
                                <option value="7:30 AM">7:30 {{ lang('AM') }}</option>
                                <option value="8:00 AM">8:00 {{ lang('AM') }}</option>
                                <option value="8:30 AM">8:30 {{ lang('AM') }}</option>
                                <option value="9:00 AM">9:00 {{ lang('AM') }}</option>
                                <option value="9:30 AM">9:30 {{ lang('AM') }}</option>
                                <option value="10:00 AM">10:00 {{ lang('AM') }}</option>
                                <option value="10:30 AM">10:30 {{ lang('AM') }}</option>
                                <option value="11:00 AM">11:00 {{ lang('AM') }}</option>
                                <option value="11:30 AM">11:30 {{ lang('AM') }}</option>
                                <option value="12:00 PM">12:00 {{ lang('PM') }}</option>
                                <option value="12:30 PM">12:30 {{ lang('PM') }}</option>
                                <option value="1:00 PM">1:00 {{ lang('PM') }}</option>
                                <option value="1:30 PM">1:30 {{ lang('PM') }}</option>
                                <option value="2:00 PM">2:00 {{ lang('PM') }}</option>
                                <option value="2:30 PM">2:30 {{ lang('PM') }}</option>
                                <option value="3:00 PM">3:00 {{ lang('PM') }}</option>
                                <option value="3:30 PM">3:30 {{ lang('PM') }}</option>
                                <option value="4:00 PM">4:00 {{ lang('PM') }}</option>
                                <option value="4:30 PM">4:30 {{ lang('PM') }}</option>
                                <option value="5:00 PM">5:00 {{ lang('PM') }}</option>
                                <option value="5:30 PM">5:30 {{ lang('PM') }}</option>
                                <option value="6:00 PM">6:00 {{ lang('PM') }}</option>
                                <option value="6:30 PM">6:30 {{ lang('PM') }}</option>
                                <option value="7:00 PM">7:00 {{ lang('PM') }}</option>
                                <option value="7:30 PM">7:30 {{ lang('PM') }}</option>
                                <option value="8:00 PM">8:00 {{ lang('PM') }}</option>
                                <option value="8:30 PM">8:30 {{ lang('PM') }}</option>
                                <option value="9:00 PM">9:00 {{ lang('PM') }}</option>
                                <option value="9:30 PM">9:30 {{ lang('PM') }}</option>
                                <option value="10:00 PM">10:00 {{ lang('PM') }}</option>
                                <option value="10:30 PM">10:30 {{ lang('PM') }}</option>
                                <option value="10:00 PM">11:00 {{ lang('PM') }}</option>
                                <option value="10:30 PM">11:30 {{ lang('PM') }}</option>
                            </select>
                            <button type="button" class="clear_button-1 float-start ms-9 mt-6" id="clear-button">{{
                                lang('Clear') }}</button>
                            <button type="button" class="clear_button-2 me-9 float-end mt-6" onclick="selected()">{{
                                lang('Save') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="hidden" id="hiddenDate">

<input type="hidden" id="{{ $type }}_search_url" value="{{ route($type . '_landing_index') }}">
<input type="hidden" id="search" value="{{ route('search_ajax', $type) }}">
<!-- ROW-2 END -->
@endsection

@section('scripts')
<script
    src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC5qN37hurCFwbFsZt2nzzwzGcbSt08R5E">
</script>
@include('content.components.__map')
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
        // Calender show or hidden
        $('#calendarAndTimePicker').hide();
        $('#selectedDate').click(function() {
            $('.FormBorder').css({
                "border-bottom-left-radius": "0px",
                "border-bottom-right-radius": "0px"
            });
            $('#calendarAndTimePicker').show();
        });
        $(document).click(function(event) {
            var target = $(event.target);
            if (!target.closest('#calendarAndTimePicker').length && !target.is('#selectedDate')) {
                $('#calendarAndTimePicker').hide();
                $('.FormBorder').removeClass("data-appended");
                $('.FormBorder').css({
                    "border-bottom-left-radius": "13px",
                    "border-bottom-right-radius": "13px"
                });
            }
        });
        // Calender show or hidden ended-------------------------------

        var date = new Date();
        var today = date.getDate();
        $(".right-button").click({
            date: date
        }, next_year);
        $(".left-button").click({
            date: date
        }, prev_year);
        $(".month").click({
            date: date
        }, month_click);
        $(".months-row")
            .children()
            .eq(date.getMonth())
            .addClass("active-month");
        init_calendar(date);
        var events = check_events(
            today,
            date.getMonth() + 1,
            date.getFullYear()
        );
    });

    function init_calendar(date) {
        $(".tbody-tb").empty();
        var calendar_days = $(".tbody-tb");
        var month = date.getMonth();
        var year = date.getFullYear();
        var day_count = days_in_month(month, year);
        var row = $("<tr class='table-row'></tr>");
        var today = date.getDate();
        date.setDate(1);
        var first_day = date.getDay();
        for (var i = 0; i < 35 + first_day; i++) {
            var day = i - first_day + 1;
            if (i % 7 === 0) {
                calendar_days.append(row);
                row = $("<tr class='table-row'></tr>");
            }
            if (i < first_day || day > day_count) {
                var curr_date = $("<td class='table-date nil'>" + "</td>");
                row.append(curr_date);
            } else {
                var curr_date = $("<td class='table-date'>" + day + "</td>");
                var events = check_events(day, month + 1, year);
                if (today === day && $(".active-date").length === 0) {
                    curr_date.addClass("active-date");
                }
                curr_date.click({
                        events: events,
                        month: months[month],
                        day: day
                    },
                    date_click
                );
                row.append(curr_date);
            }
        }
        calendar_days.append(row);
        $(".year").text(year);
    }

    function days_in_month(month, year) {
        var monthStart = new Date(year, month, 1);
        var monthEnd = new Date(year, month + 1, 1);
        return (monthEnd - monthStart) / (1000 * 60 * 60 * 24);
    }
    var dateInput;

    function date_click(event) {
        $(".active-date").removeClass("active-date");
        $(this).addClass("active-date");
        const day = $(this).text();
        const month = $('.month.active-month').text();
        const year = $('.year').text();
        var fullDate = month + ' ' + day + ', ' + year;
        $('#hiddenDate').val(fullDate);
        $('#start_time').removeAttr('disabled').val("9:00 AM").css('border', '1px solid #898587');
        $('#end_time').removeAttr('disabled').val("9:00 PM").css('border', '1px solid #898587');
        $('.startTime_label').css('color', 'black');
        $('.endTime_label').css('color', 'black');
        updateAppendedValue();
    }

    function month_click(event) {
        var date = event.data.date;
        $(".active-month").removeClass("active-month");
        $(this).addClass("active-month");
        var new_month = $(".month").index(this);
        date.setMonth(new_month);
        init_calendar(date);
    }

    function next_year(event) {
        var date = event.data.date;
        var new_year = date.getFullYear() + 1;
        $("year").html(new_year);
        date.setFullYear(new_year);
        init_calendar(date);
    }

    function prev_year(event) {
        var date = event.data.date;
        var new_year = date.getFullYear() - 1;
        $("year").html(new_year);
        date.setFullYear(new_year);
        init_calendar(date);
    }

    function check_events(day, month, year) {
        var events = [];
        for (var i = 0; i < event_data["events"].length; i++) {
            var event = event_data["events"][i];
            if (
                event["day"] === day &&
                event["month"] === month &&
                event["year"] === year
            ) {
                events.push(event);
            }
        }
        return events;
    }
    var event_data = {
        events: [{
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
                cancelled: true,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
                cancelled: true,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
                cancelled: true,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
                cancelled: true,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
                cancelled: true,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
                cancelled: true,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
            },
            {
                occasion: " Test Event",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 11,
            },
        ],
    };
    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];
    const $startTimeInput = $("#start_time");
    const $endTimeInput = $("#end_time");
    const $appendedValue = $('#selectedDate');

    $startTimeInput.on("change", updateAppendedValue);
    $endTimeInput.on("change", updateAppendedValue);

    function updateAppendedValue() {
        const selectedDate = $("#hiddenDate").val();
        const selectedStartTime = $startTimeInput.val();
        const selectedEndTime = $endTimeInput.val();

        const formattedAppendedValue = `${selectedDate} ${selectedStartTime} to ${selectedEndTime}`;
        $appendedValue.val(formattedAppendedValue);
    }
    $('#clear-button').on('click', function() {
        $appendedValue.val('');
        $('#start_time').attr('disabled', 'true').css('border', '1px solid #e9edf4');
        $('#end_time').attr('disabled', 'true').css('border', '1px solid #e9edf4');
        $('.startTime_label').css('color', '#9fa7af');
        $('.endTime_label').css('color', '#9fa7af');
    });
</script>
<script>
    let categories;
        $(document).ready(function() {
            var url = $('#space_search_url').val();
            $.ajax({
                url: url,
                type: "GET",
                success: function(res) {
                    categories = res.data;
                }
            });

            function hideDropdown(resultsDiv, inputDiv) {
                resultsDiv.empty();
                inputDiv.removeClass("data-appended");
                inputDiv.css("border-bottom-left-radius", "13px !important").css("border-bottom-right-radius",
                    "13px !important");
            }

            function setupSpaceSearch(inputId, resultsId) {

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

                        if (filteredCategories.length === 0) {
                            const div = $("<div class='search-drop-popUp text-start ps-5'>");
                            const para = $("<p>").text(
                                "We don't recognize that activity. Try describing it differently or ");
                            const anchor = $(
                                    "<a class='modal-effect' data-bs-target='#popular-catagories-modal' data-bs-toggle='modal'>"
                                )
                                .text('pick from popular activities.').attr("href", "javascript-void(0);");
                            para.append(anchor);
                            div.append(para);
                            searchResults.append(div);
                            $(inputId).parent().addClass("data-appended");
                            $("a[data-select-text]").off('click').on('click', function() {
                                const searchValue = $(this).text();
                                searchInput.val(searchValue);
                                $("#popular-catagories-modal").modal('hide');
                            });
                        }
                    }

                    if (inputValue.length > 0) {
                        searchResults.show();
                    } else {
                        searchResults.hide();
                        $(inputId).parent().removeClass("data-appended");
                        $(inputId).parent().css("border-bottom-left-radius", "13px !important").css(
                            "border-bottom-right-radius", "13px !important");
                    }
                });

                searchResults.on("click", ".search-drop-content", function() {
                    const selectedCategory = $(this).text();
                    searchInput.val(selectedCategory);
                    selected(selectedCategory);
                    searchResults.hide();
                    $(inputId).parent().removeClass("data-appended");
                    $(inputId).parent().css("border-bottom-left-radius", "13px !important").css(
                        "border-bottom-right-radius", "13px !important");
                });

                $(document).click(function(event) {
                    var target = $(event.target);
                    if (!target.closest(resultsId).length && !target.is(inputId)) {
                        hideDropdown(searchResults, $(inputId).parent());
                    }
                });
            }

            setupSpaceSearch("#planCatagories", "#searchResults");
        });
        function filterCategories(keyword) {
            const resultsContainer = document.getElementById('results');
            resultsContainer.innerHTML = '';

            if (keyword.length > 0) {
                const matchingCategories = categories.filter(category => category.toLowerCase().includes(keyword
                    .toLowerCase()));

                matchingCategories.forEach(category => {
                    const categoryElement = document.createElement('div');
                    categoryElement.textContent = category;
                    resultsContainer.appendChild(categoryElement);
                });
            }
        }

        function selected(input) {
            $('#dateTimeModal').modal('hide');
             url = $('#search').val();
             selectedPrice = $('input[name="price"]:checked').val();
             guests = $('input[name="guests"]:checked').val();
             keyword = $('input[name="keyword"]').val();
            // startTime = $('input[name="start-time"]').val();
            // endTime = $('input[name="end-time"]').val();
            startTime = $('#start_time').val();
            endTime = $('#end_time').val();
            date = $("#hiddenDate").val();
            $.ajax({
                url: url,
                data: {
                    'type': input,
                    'price': selectedPrice,
                    'attendees': guests,
                    'date': date,
                    'keyword': keyword,
                    'startTime': startTime,
                    'endTime': endTime
                },
                type: "GET",
                success: function(res) {
                    console.log(res);
                    $('#ajax_data').html(res.data);
                    $('#map').html(res.map);
                }
            });
        }

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