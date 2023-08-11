@extends('layouts.landing-page-layout')
@section('styles')
    <style>
        .calendarAndTimePicker {
            border-bottom-left-radius: 13px !important;
            border-bottom-right-radius: 13px !important;
            margin: 0px !important;
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

        @media only screen and (max-width: 780px) {
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

            .events-container,
            .year-header,
            .calendar-container-1 {
                width: 320px;
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

            .table-date {
                width: 20px;
                height: 20px;
                line-height: 20px;
            }
        }
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
                                    <input type="text" class="form-control input py-2 px-0" id="selectedDate"
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
                            <input type="hidden" name="hidden" id="hiddenDate">
                            <div id="searchResults" class="w-100 search-content"></div>
                            <div id="addressDropdown" class="bg-white AdressDrop"></div>
                            <div class="row w-100 bg-white calendarAndTimePicker" id="calendarAndTimePicker">
                                <div class="col-6 calendar-container-1">
                                    <div class="calendar">
                                        <div class="year-header">
                                            <span class="left-button" id="prev"> <i
                                                    class="fa fa-angle-double-left"></i>
                                            </span>
                                            <span class="year" id="label"> </span>
                                            <span class="right-button" id="next"> <i
                                                    class="fa fa-angle-double-right"></i>
                                            </span>
                                        </div>
                                        <table class="months-table">
                                            <tbody>
                                                <tr class="months-row">
                                                    <td class="month">Jan</td>
                                                    <td class="month">Feb</td>
                                                    <td class="month">Mar</td>
                                                    <td class="month">Apr</td>
                                                    <td class="month">May</td>
                                                    <td class="month">June</td>
                                                    <td class="month">July</td>
                                                    <td class="month">Aug</td>
                                                    <td class="month">Sep</td>
                                                    <td class="month">Oct</td>
                                                    <td class="month">Nov</td>
                                                    <td class="month">Dec</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="days-table">
                                            <td class="day">Sun</td>
                                            <td class="day">Mon</td>
                                            <td class="day">Tue</td>
                                            <td class="day">Wed</td>
                                            <td class="day">Thu</td>
                                            <td class="day">Fri</td>
                                            <td class="day">Sat</td>
                                        </table>
                                        <div class="frame">
                                            <table class="dates-table">
                                                <tbody class="tbody-tb"></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 dialog" id="dialog">
                                    <h2 class="dialog-header mt-7">Select Time</h2>
                                    <div class="form-container mt-7 me-6" align="center">
                                        <label for="start_time" class="form-label mt-5 text-start startTime_label">Start
                                            Time</label>
                                        <select name="start_time" class="Select_Time form-select mb-5" id="start_time"
                                            disabled>
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
                                        <label for="end_time" class="form-label text-start endTime_label">End Time</label>
                                        <select name="end_time" class="Select_Time form-select mb-5" id="end_time"
                                            disabled>
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
                                        <button type="button" class="clear_button" id="clear-button">Clear</button>
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
                        <input type="text" class="form-control input py-2 px-0" placeholder="Anytime">
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
    <h3 class="text-center"><a class="bg-primary btn text-white px-7 modal-effect" data-bs-target="#signup-modal"
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
                        <input type="text" class="form-control input py-2 px-0" placeholder="Anytime">
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
                                            <img src="{{ asset('assets/images/users/spaces/1.jpg') }}"
                                                class="card-img-top" alt="img">
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
                                            <img src="{{ asset('assets/images/users/spaces/2.jpg') }}"
                                                class="card-img-top" alt="img">
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
                                            <img src="{{ asset('assets/images/users/spaces/3.jpg') }}"
                                                class="card-img-top" alt="img">
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
                                            <img src="{{ asset('assets/images/users/spaces/4.jpg') }}"
                                                class="card-img-top" alt="img">
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
                                            <img src="{{ asset('assets/images/users/spaces/1.jpg') }}"
                                                class="card-img-top" alt="img">
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
                                            <img src="{{ asset('assets/images/users/spaces/2.jpg') }}"
                                                class="card-img-top" alt="img">
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
                                            <img src="{{ asset('assets/images/users/spaces/3.jpg') }}"
                                                class="card-img-top" alt="img">
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
                                            <img src="{{ asset('assets/images/users/spaces/4.jpg') }}"
                                                class="card-img-top" alt="img">
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
                                            <img src="{{ asset('assets/images/users/spaces/1.jpg') }}"
                                                class="card-img-top" alt="img">
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
                                            <img src="{{ asset('assets/images/users/spaces/2.jpg') }}"
                                                class="card-img-top" alt="img">
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
                                            <img src="{{ asset('assets/images/users/spaces/3.jpg') }}"
                                                class="card-img-top" alt="img">
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
                                            <img src="{{ asset('assets/images/users/spaces/4.jpg') }}"
                                                class="card-img-top" alt="img">
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
    <h3 class="text-center"><a class="bg-primary btn text-white px-7 modal-effect" data-bs-target="#signup-modal"
            data-bs-toggle="modal"><b>Get started</b></a></h3>
@endsection
@section('scripts')
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC5qN37hurCFwbFsZt2nzzwzGcbSt08R5E">
    </script>

    {{-- Calender code --}}
    <script>
        $(document).ready(function() {
            // Calender show or hidden
            $("#calendarAndTimePicker").hide();
            $("#selectedDate").click(function() {
                $(".FormBorder").css({
                    "border-bottom-left-radius": "0px",
                    "border-bottom-right-radius": "0px"
                });
                $("#calendarAndTimePicker").show();
            });
            $(document).click(function(event) {
                var target = $(event.target);
                if (!target.closest('#calendarAndTimePicker').length && !target.is("#selectedDate")) {
                    $("#calendarAndTimePicker").hide();
                    $(".FormBorder").removeClass("data-appended");
                    $(".FormBorder").css({
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
            $('#start_time').removeAttr('disabled').val("9:00 Am").css('border', '1px solid #898587');
            $('#end_time').removeAttr('disabled').val("9:00 Pm").css('border', '1px solid #898587');
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
        const $appendedValue = $("#selectedDate");

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

    {{-- Google addresses code --}}
    <script>
        $(document).ready(function() {
            var autocompleteService = new google.maps.places.AutocompleteService();

            function hideDropdown() {
                $('#addressDropdown').empty();
                $(".FormBorder").removeClass("data-appended");
                $(".FormBorder").css("border-bottom-left-radius", "13px !important").css(
                    "border-bottom-right-radius", "13px !important");
            }
            $('#location').on('input', function() {
                var input = $(this).val();
                if (input === '') {
                    hideDropdown();
                    return;
                }
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
            $(document).click(function(event) {
                var target = $(event.target);
                if (!target.closest('#addressDropdown').length && !target.is("#location")) {
                    hideDropdown();
                }
            });
        });
    </script>

    {{-- Carousel code --}}
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

    {{-- categories Select field code --}}
    <script>
        $(document).ready(function() {
            function hideDropdown() {
                $('#searchResults').empty();
                $(".FormBorder").removeClass("data-appended");
                $(".FormBorder").css("border-bottom-left-radius", "13px !important").css(
                    "border-bottom-right-radius", "13px !important");
            }
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
            $(document).click(function(event) {
                var target = $(event.target);
                if (!target.closest('#searchResults').length && !target.is("#planCatagories")) {
                    hideDropdown();
                }
            });
        });
    </script>
    <!-- OWL CAROUSEL JS-->
    <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <!-- OWL Carousel js -->
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
@endsection
