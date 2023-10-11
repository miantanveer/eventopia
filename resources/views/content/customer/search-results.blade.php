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

        .w-style-1 {
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

        .app-sidebar__toggle:before{
            color: black !important;
        }

        .app-sidebar__toggle, .navbar-toggler-icon {
            color: black !important;
        }

        @media screen and (min-width: 1280px) and (max-width: 1920px) {
            .w-style-1 {
                width: 50% !important;
                height: 45px !important;
            }
        }
        @media screen and (min-width: 1280px) and (max-width: 1500px) {
            .span_attendees {
                font-size: 90% !important;
            }

            .w-style-1 {
                width: 50% !important;
                height: 45px !important;
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

        @media screen and (min-width: 0px) and (max-width: 425px) {
            .calendar-container-1 {
                padding: 40px 5px 0 5px;
            }
        }

        @media screen and (min-width: 0px) and (max-width: 425px) {
            .week-f {
                font-size: 0.6rem !important;
            }
        }

        @media screen and (min-width: 0px) and (max-width: 320px) {
            .canlader-posit {
                position: relative;
                width: 326px !important;
                left: -13px !important;
                top: -8px;
            }
            .modal-body {
                padding: 0rem !important;
            }

            .container-position{
                width: 106%;
                left: -8px;
                top: -10px;
            }
        }
        @media(min-width: 0) and (max-width: 575px){
            #global-helper{
                z-index: 9998 !important;
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
                                    <h4><b
                                            style="color:black;">{{ lang('What kind of space, entertainment / taltent and serivce are you looking for ?') }}</b>
                                    </h4>
                                </div>
                                <div class="overflow-auto" style="overflow: auto !important;">
                                    <div class="card-body pt-2">
                                        <div class="owl-carousel">
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.1.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b class="item_title">Storefront</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.2.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b class="item_title">Banquet Hall</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.3.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b class="item_title">Flex Space</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.7.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b class="item_title">Conference Room</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.8.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b class="item_title">Performance Hall</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.9.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b class="item_title">Meeting Hall</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.10.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b class="item_title">Lounge</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.1.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b class="item_title">Storefront</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.2.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b class="item_title">Banquet Hall</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.8.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b class="item_title">Performance Hall</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.7.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b class="item_title">Conference Room</b>
                                                </div>
                                            </div>
                                            <div class="item"><a href="#"><img
                                                        src="{{ asset('assets/images/users/spaces/space.3.jpeg') }}"
                                                        alt="img"></a>
                                                <div class="overlay">
                                                    <b class="item_title">Flex Space</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                    <div id="paginator">
                                        {{ @$listing->fragment(Hash::make($type))->links() }}
                                    </div>
                                    <hr class="bg-dark">
                                    <div class="">
                                        <p>
                                            <a href="{{@$type == 'space' ? route('spaces') : (@$type == 'service' ? route('services') : route('entertainments_index'))}}">
                                                See all off-site {{ @$type }}
                                            </a>
                                        </p>
                                        {{-- <p class="text-gray font_size">Eventopia is also live in <a href="#"> San
                                                Francisco,
                                                Silicon Valley, Los Angeles, </a>and <a href="#">40 more cites</a></p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 mt-5 mt-lg-0 p-0" id="map">

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
    @include('content.components.__filter_scripts')
@endsection
