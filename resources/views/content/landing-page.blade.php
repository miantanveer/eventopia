@extends('layouts.landing-page-layout')
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
    }

    .right-button {
        background: black !important;
        color: white !important;
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

    @media screen and (min-width: 0px) and (max-width: 425px) {
        .calendar-container-1 {
            padding: 40px 5px 0 5px;
        }

        .table-date {
            padding: 0px !important;
        }

        .dialog-header {
            display: none;
        }
    }

    @media screen and (min-width: 0px) and (max-width: 425px) {
        .week-f {
            font-size: 0.6rem !important;
        }

        .search-content-1 {
            position: relative;
            top: -224px;
        }

        .search-content-2 {
            position: relative;
            top: -224px;
        }

        .search-content-3 {
            position: relative;
            top: -224px;
        }

        .search-location-1 {
            position: relative;
            top: -134px !important;
        }

        .search-location-2 {
            position: relative;
            top: -134px !important;
        }

        .search-location-3 {
            position: relative;
            top: -134px !important;
        }

        .clear_button-2 {
            font-size: 0.8rem;
        }

        .clear_button-1 {
            font-size: 0.8rem;
        }
    }

    @media screen and (min-width: 0px) and (max-width: 320px) {
        .canlader-posit {
            position: relative;
            width: 320px !important;
            left: -24px !important;
        }
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
                <h1 class="h1 text-white font-size-h1 fw-bold ms-5">{{lang('Book a special space for your event')}}</h1>
                <div class="position-relative">
                    <form action="{{ route('search_results') }}" method="get" class="ms-5 form-blur-border">
                        <input type="hidden" name="type" value="space">
                        <div class="row bg-whiter justify-content-between text-start py-3 px-5 m-0 box-sizing FormBorder" id="form-border">
                            <input type="hidden" name="space_search_url" id="space_search_url" value="{{route('space_landing_index')}}">
                            <div class="col-sm-4 px-0 border-end border-end0">
                                <label class="mb-0 label-none my-font-size"><b>{{lang('What have you got
                                        planned?')}}</b></label>
                                <div class="search-container">
                                    <input type="text" name="planCatagories" id="planCatagories" class="form-control px-0" placeholder="{{lang('Select your plan')}}">
                                </div>
                            </div>

                            <div class="col-sm-4 border-end border-end0 px-0 px-sm-3 my-3 my-sm-0">
                                <label class="mb-0 label-none font-size"><b>{{lang('Where?')}}</b></label>
                                <input type="text" class="form-control px-0" name="location" id="location" placeholder="{{lang('Enter your Location')}}">
                            </div>
                            <div class="col-sm-3 border-end-0 pe-0 px-0 px-sm-3 mb-3 mb-sm-0">
                                <label class="mb-0 label-none font-size"><b>{{lang('When?')}}</b></label>
                                <input type="text" class="form-control input py-2 px-0" id="selectedDate" placeholder="{{lang('Anytime')}}">
                            </div>
                            <div class="col-sm-1 text-end px-0 my-auto">
                                <button type="submit" class="btn btn-color rounded text-end button ms-auto d-none d-sm-block"><i class="fa fa-search text-white"></i></button>
                                <button type="submit" class="btn btn-primary btn-search mx-0 px-0 text-center d-sm-none d-block">{{lang('Search')}}</button>
                            </div>
                        </div>
                        <input type="hidden" name="hidden" id="hiddenDate">
                        <div id="searchResults" class="w-100 search-content search-content-1"></div>
                        <div id="addressDropdown" class="bg-white search-location-1 AdressDrop"></div>
                        <div class="row w-100 bg-white canlader-posit calendarAndTimePicker" id="calendarAndTimePicker">
                            <div class="col-lg-6 calendar-container-1">
                                <div class="calendar">
                                    <div class="year-header">
                                        <span class="left-button" id="prev"> <i class="fa fa-angle-double-left"></i>
                                        </span>
                                        <span class="year year-text" id="label"> </span>
                                        <span class="right-button" id="next"> <i class="fa fa-angle-double-right"></i>
                                        </span>
                                    </div>
                                    <table class="months-table">
                                        <tbody>
                                            <tr class="months-row">
                                                <td class="month week-f">{{lang('Jan')}}</td>
                                                <td class="month week-f">{{lang('Feb')}}</td>
                                                <td class="month week-f">{{lang('Mar')}}</td>
                                                <td class="month week-f">{{lang('Apr')}}</td>
                                                <td class="month week-f">{{lang('May')}}</td>
                                                <td class="month week-f">{{lang('June')}}</td>
                                                <td class="month week-f">{{lang('July')}}</td>
                                                <td class="month week-f">{{lang('Aug')}}</td>
                                                <td class="month week-f">{{lang('Sep')}}</td>
                                                <td class="month week-f">{{lang('Oct')}}</td>
                                                <td class="month week-f">{{lang('Nov')}}</td>
                                                <td class="month week-f">{{lang('Dec')}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="days-table">
                                        <td class="day week-f">{{lang('Sun')}}</td>
                                        <td class="day week-f">{{lang('Mon')}}</td>
                                        <td class="day week-f">{{lang('Tue')}}</td>
                                        <td class="day week-f">{{lang('Wed')}}</td>
                                        <td class="day week-f">{{lang('Thu')}}</td>
                                        <td class="day week-f">{{lang('Fri')}}</td>
                                        <td class="day week-f">{{lang('Sat')}}</td>
                                    </table>
                                    <div class="frame">
                                        <table class="dates-table">
                                            <tbody class="tbody-tb"></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 dialog" id="dialog">
                                <h2 class="dialog-header mt-lg-7">{{lang('Select Time')}}</h2>
                                <div class="form-container mt-lg-7 ms-sm-6 ms-lg-0 me-sm-6" align="center">
                                    <label for="start_time" class="form-label mt-5 text-start startTime_label">{{lang('Start
                                        Time')}}</label>
                                    <select name="start_time" class="Select_Time form-select mb-5" id="start_time" disabled>
                                        <option value="">{{lang('Select Start Time')}}</option>
                                        <option value="6:00 AM">6:00 {{lang('AM')}}</option>
                                        <option value="6:30 AM">6:30 {{lang('AM')}}</option>
                                        <option value="7:00 AM">7:00 {{lang('AM')}}</option>
                                        <option value="7:30 AM">7:30 {{lang('AM')}}</option>
                                        <option value="8:00 AM">8:00 {{lang('AM')}}</option>
                                        <option value="8:30 AM">8:30 {{lang('AM')}}</option>
                                        <option value="9:00 AM">9:00 {{lang('AM')}}</option>
                                        <option value="9:30 AM">9:30 {{lang('AM')}}</option>
                                        <option value="10:00 AM">10:00 {{lang('AM')}}</option>
                                        <option value="10:30 AM">10:30 {{lang('AM')}}</option>
                                        <option value="11:00 AM">11:00 {{lang('AM')}}</option>
                                        <option value="11:30 AM">11:30 {{lang('AM')}}</option>
                                        <option value="12:00 PM">12:00 {{lang('PM')}}</option>
                                        <option value="12:30 PM">12:30 {{lang('PM')}}</option>
                                        <option value="1:00 PM">1:00 {{lang('PM')}}</option>
                                        <option value="1:30 PM">1:30 {{lang('PM')}}</option>
                                        <option value="2:00 PM">2:00 {{lang('PM')}}</option>
                                        <option value="2:30 PM">2:30 {{lang('PM')}}</option>
                                        <option value="3:00 PM">3:00 {{lang('PM')}}</option>
                                        <option value="3:30 PM">3:30 {{lang('PM')}}</option>
                                        <option value="4:00 PM">4:00 {{lang('PM')}}</option>
                                        <option value="4:30 PM">4:30 {{lang('PM')}}</option>
                                        <option value="5:00 PM">5:00 {{lang('PM')}}</option>
                                        <option value="5:30 PM">5:30 {{lang('PM')}}</option>
                                        <option value="6:00 PM">6:00 {{lang('PM')}}</option>
                                        <option value="6:30 PM">6:30 {{lang('PM')}}</option>
                                        <option value="7:00 PM">7:00 {{lang('PM')}}</option>
                                        <option value="7:30 PM">7:30 {{lang('PM')}}</option>
                                        <option value="8:00 PM">8:00 {{lang('PM')}}</option>
                                        <option value="8:30 PM">8:30 {{lang('PM')}}</option>
                                        <option value="9:00 PM">9:00 {{lang('PM')}}</option>
                                        <option value="9:30 PM">9:30 {{lang('PM')}}</option>
                                        <option value="10:00 PM">10:00 {{lang('PM')}}</option>
                                        <option value="10:30 PM">10:30 {{lang('PM')}}</option>
                                        <option value="10:00 PM">11:00 {{lang('PM')}}</option>
                                        <option value="10:30 PM">11:30 {{lang('PM')}}</option>
                                    </select>
                                    <label for="end_time" class="form-label text-start endTime_label">{{lang('End
                                        Time')}}</label>
                                    <select name="end_time" class="Select_Time form-select mb-5" id="end_time" disabled>
                                        <option value="">{{lang('Select End Time')}}</option>
                                        <option value="6:00 AM">6:00 {{lang('AM')}}</option>
                                        <option value="6:30 AM">6:30 {{lang('AM')}}</option>
                                        <option value="7:00 AM">7:00 {{lang('AM')}}</option>
                                        <option value="7:30 AM">7:30 {{lang('AM')}}</option>
                                        <option value="8:00 AM">8:00 {{lang('AM')}}</option>
                                        <option value="8:30 AM">8:30 {{lang('AM')}}</option>
                                        <option value="9:00 AM">9:00 {{lang('AM')}}</option>
                                        <option value="9:30 AM">9:30 {{lang('AM')}}</option>
                                        <option value="10:00 AM">10:00 {{lang('AM')}}</option>
                                        <option value="10:30 AM">10:30 {{lang('AM')}}</option>
                                        <option value="11:00 AM">11:00 {{lang('AM')}}</option>
                                        <option value="11:30 AM">11:30 {{lang('AM')}}</option>
                                        <option value="12:00 PM">12:00 {{lang('PM')}}</option>
                                        <option value="12:30 PM">12:30 {{lang('PM')}}</option>
                                        <option value="1:00 PM">1:00 {{lang('PM')}}</option>
                                        <option value="1:30 PM">1:30 {{lang('PM')}}</option>
                                        <option value="2:00 PM">2:00 {{lang('PM')}}</option>
                                        <option value="2:30 PM">2:30 {{lang('PM')}}</option>
                                        <option value="3:00 PM">3:00 {{lang('PM')}}</option>
                                        <option value="3:30 PM">3:30 {{lang('PM')}}</option>
                                        <option value="4:00 PM">4:00 {{lang('PM')}}</option>
                                        <option value="4:30 PM">4:30 {{lang('PM')}}</option>
                                        <option value="5:00 PM">5:00 {{lang('PM')}}</option>
                                        <option value="5:30 PM">5:30 {{lang('PM')}}</option>
                                        <option value="6:00 PM">6:00 {{lang('PM')}}</option>
                                        <option value="6:30 PM">6:30 {{lang('PM')}}</option>
                                        <option value="7:00 PM">7:00 {{lang('PM')}}</option>
                                        <option value="7:30 PM">7:30 {{lang('PM')}}</option>
                                        <option value="8:00 PM">8:00 {{lang('PM')}}</option>
                                        <option value="8:30 PM">8:30 {{lang('PM')}}</option>
                                        <option value="9:00 PM">9:00 {{lang('PM')}}</option>
                                        <option value="9:30 PM">9:30 {{lang('PM')}}</option>
                                        <option value="10:00 PM">10:00 {{lang('PM')}}</option>
                                        <option value="10:30 PM">10:30 {{lang('PM')}}</option>
                                        <option value="10:00 PM">11:00 {{lang('PM')}}</option>
                                        <option value="10:30 PM">11:30 {{lang('PM')}}</option>
                                    </select>
                                    <button type="button" class="clear_button-1 float-start mb-5 mb-lg-0 ms-md-9 mt-lg-6" id="clear-button">{{lang('Clear')}}</button>
                                    <button type="button" class="clear_button-2 me-md-9 mb-5 mb-lg-0 float-end mt-lg-6" id="save_button-1">{{lang("Save")}}</button>
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
    <h1 class="text-center my-6"><b> {{lang("A lot of spaces for every moment.")}}</b></h1>
    <div class="">
        <h3 class="text-center my-2">{{lang("Parties")}}</h3>
        @include('layouts.components.landing_slider')
    </div>
</div>
<div class="landing_background height-img">
    <div class="container ps-0 pe-5">
        <h1 class="text-center pt-7 text-white image-h1 heading_font ms-5">{{lang("List the perfect entertainment and
            talent")}}
            <br>
            {{lang("for your upcoming event")}}
        </h1>
        <p class="text-center text-white px-md-9 px-sm-5 ms-5">{{lang("For every event, from weddings to birthday
            celebrations,
            we'll help you book the best talent.")}}</p>
        <form action="{{ route('search_results') }}" class="ms-5 form-blur-border">
            <input type="hidden" name="type" value="entertainment">
            <div class="row bg-whiter justify-content-between text-start py-3 px-5 m-0 box-sizing form-border FormBorder-1" id="form-border-1">
                <input type="hidden" id="entertaimnet_search_url" value="{{route('entertainment_landing_index')}}">
                <div class="col-sm-4 px-0 border-end border-end0">
                    <label class="mb-0 label-none my-font-size"><b>{{lang("What have you got planned?")}}</b></label>
                    <input type="text" name="planCatagories_1" id="planCatagories-1" class="form-control px-0" placeholder="{{lang('Select your plan')}}">
                </div>
                <div class="col-sm-4 border-end border-end0 px-0 px-sm-3 my-3 my-sm-0">
                    <label class="mb-0 label-none font-size"><b>{{lang("Where?")}}</b></label>
                    <input type="text" class="form-control px-0" name="location_1" id="location-1" placeholder="{{lang('Enter your Location')}}">
                </div>
                <div class="col-sm-3 border-end0 pe-0 px-0 px-sm-3 mb-3 mb-sm-0">
                    <label class="mb-0 label-none font-size"><b>{{lang("When?")}}</b></label>
                    <input type="text" name="selectedDate-1" class="form-control input py-2 px-0" placeholder="{{lang('Anytime')}}" id="selectedDate-1">
                </div>
                <div class="col-sm-1 text-end px-0 my-auto">
                    <button type="submit" class="btn btn-color rounded text-end button ms-auto d-none d-sm-block"><i class="fa fa-search text-white"></i></button>
                    <button type="submit" class="btn btn-primary btn-search mx-0 px-0 text-center d-sm-none d-block">{{lang("Search")}}</button>
                </div>
            </div>
            <input type="hidden" name="hidden" id="hiddenDate-1">
            <div id="searchResults-1" class="w-100 search-content search-content-2"></div>
            <div id="addressDropdown-1" class="bg-white search-location-2 AdressDrop"></div>
            <div class="row w-100 bg-white canlader-posit calendarAndTimePicker-1" id="calendarAndTimePicker-1">
                <div class="col-lg-6 calendar-container-1">
                    <div class="calendar">
                        <div class="year-header">
                            <span class="left-button" id="left-button"> <i class="fa fa-angle-double-left"></i>
                            </span>
                            <span class="year-1" id="label"> </span>
                            <span class="right-button" id="right-button"> <i class="fa fa-angle-double-right"></i>
                            </span>
                        </div>
                        <table class="months-table">
                            <tbody>
                                <tr class="months-row-1">
                                    <td class="month-1 week-f">{{lang("Jan")}}</td>
                                    <td class="month-1 week-f">{{lang("Feb")}}</td>
                                    <td class="month-1 week-f">{{lang("Mar")}}</td>
                                    <td class="month-1 week-f">{{lang("Apr")}}</td>
                                    <td class="month-1 week-f">{{lang("May")}}</td>
                                    <td class="month-1 week-f">{{lang("June")}}</td>
                                    <td class="month-1 week-f">{{lang("July")}}</td>
                                    <td class="month-1 week-f">{{lang("Aug")}}</td>
                                    <td class="month-1 week-f">{{lang("Sep")}}</td>
                                    <td class="month-1 week-f">{{lang("Oct")}}</td>
                                    <td class="month-1 week-f">{{lang("Nov")}}</td>
                                    <td class="month-1 week-f">{{lang("Dec")}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="days-table">
                            <td class="day week-f">{{lang("Sun")}}</td>
                            <td class="day week-f">{{lang("Mon")}}</td>
                            <td class="day week-f">{{lang("Tue")}}</td>
                            <td class="day week-f">{{lang("Wed")}}</td>
                            <td class="day week-f">{{lang("Thu")}}</td>
                            <td class="day week-f">{{lang("Fri")}}</td>
                            <td class="day week-f">{{lang("Sat")}}</td>
                        </table>
                        <div class="frame">
                            <table class="dates-table">
                                <tbody class="tbody-tb-1"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 dialog" id="dialog">
                    <h2 class="dialog-header mt-lg-7">{{lang("Select Time")}}</h2>
                    <div class="form-container mt-lg-7 ms-sm-6 ms-lg-0 me-sm-6" align="center">
                        <label for="start_time" class="form-label mt-5 text-start startTime_label">{{lang("Start
                            Time")}}</label>
                        <select name="start_time" class="Select_Time form-select mb-5" id="start_time_1" disabled>
                            <option value="">{{lang("Select Start Time")}}</option>
                            <option value="6:00 AM">6:00 {{lang("AM")}}</option>
                            <option value="6:30 AM">6:30 {{lang("AM")}}</option>
                            <option value="7:00 AM">7:00 {{lang("AM")}}</option>
                            <option value="7:30 AM">7:30 {{lang("AM")}}</option>
                            <option value="8:00 AM">8:00 {{lang("AM")}}</option>
                            <option value="8:30 AM">8:30 {{lang("AM")}}</option>
                            <option value="9:00 AM">9:00 {{lang("AM")}}</option>
                            <option value="9:30 AM">9:30 {{lang("AM")}}</option>
                            <option value="10:00 AM">10:00 {{lang("AM")}}</option>
                            <option value="10:30 AM">10:30 {{lang("AM")}}</option>
                            <option value="11:00 AM">11:00 {{lang("AM")}}</option>
                            <option value="11:30 AM">11:30 {{lang("AM")}}</option>
                            <option value="12:00 PM">12:00 {{lang("PM")}}</option>
                            <option value="12:30 PM">12:30 {{lang("PM")}}</option>
                            <option value="1:00 PM">1:00 {{lang("PM")}}</option>
                            <option value="1:30 PM">1:30 {{lang("PM")}}</option>
                            <option value="2:00 PM">2:00 {{lang("PM")}}</option>
                            <option value="2:30 PM">2:30 {{lang("PM")}}</option>
                            <option value="3:00 PM">3:00 {{lang("PM")}}</option>
                            <option value="3:30 PM">3:30 {{lang("PM")}}</option>
                            <option value="4:00 PM">4:00 {{lang("PM")}}</option>
                            <option value="4:30 PM">4:30 {{lang("PM")}}</option>
                            <option value="5:00 PM">5:00 {{lang("PM")}}</option>
                            <option value="5:30 PM">5:30 {{lang("PM")}}</option>
                            <option value="6:00 PM">6:00 {{lang("PM")}}</option>
                            <option value="6:30 PM">6:30 {{lang("PM")}}</option>
                            <option value="7:00 PM">7:00 {{lang("PM")}}</option>
                            <option value="7:30 PM">7:30 {{lang("PM")}}</option>
                            <option value="8:00 PM">8:00 {{lang("PM")}}</option>
                            <option value="8:30 PM">8:30 {{lang("PM")}}</option>
                            <option value="9:00 PM">9:00 {{lang("PM")}}</option>
                            <option value="9:30 PM">9:30 {{lang("PM")}}</option>
                            <option value="10:00 PM">10:00 {{lang("PM")}}</option>
                            <option value="10:30 PM">10:30 {{lang("PM")}}</option>
                            <option value="10:00 PM">11:00 {{lang("PM")}}</option>
                            <option value="10:30 PM">11:30 {{lang("PM")}}</option>
                        </select>
                        <label for="end_time" class="form-label text-start endTime_label">{{lang("End Time")}}</label>
                        <select name="end_time" class="Select_Time form-select mb-5" id="end_time_1" disabled>
                            <option value="">{{lang("Select End Time")}}</option>
                            <option value="6:00 AM">6:00 {{lang("AM")}}</option>
                            <option value="6:30 AM">6:30 {{lang("AM")}}</option>
                            <option value="7:00 AM">7:00 {{lang("AM")}}</option>
                            <option value="7:30 AM">7:30 {{lang("AM")}}</option>
                            <option value="8:00 AM">8:00 {{lang("AM")}}</option>
                            <option value="8:30 AM">8:30 {{lang("AM")}}</option>
                            <option value="9:00 AM">9:00 {{lang("AM")}}</option>
                            <option value="9:30 AM">9:30 {{lang("AM")}}</option>
                            <option value="10:00 AM">10:00 {{lang("AM")}}</option>
                            <option value="10:30 AM">10:30 {{lang("AM")}}</option>
                            <option value="11:00 AM">11:00 {{lang("AM")}}</option>
                            <option value="11:30 AM">11:30 {{lang("AM")}}</option>
                            <option value="12:00 PM">12:00 {{lang("PM")}}</option>
                            <option value="12:30 PM">12:30 {{lang("PM")}}</option>
                            <option value="1:00 PM">1:00 {{lang("PM")}}</option>
                            <option value="1:30 PM">1:30 {{lang("PM")}}</option>
                            <option value="2:00 PM">2:00 {{lang("PM")}}</option>
                            <option value="2:30 PM">2:30 {{lang("PM")}}</option>
                            <option value="3:00 PM">3:00 {{lang("PM")}}</option>
                            <option value="3:30 PM">3:30 {{lang("PM")}}</option>
                            <option value="4:00 PM">4:00 {{lang("PM")}}</option>
                            <option value="4:30 PM">4:30 {{lang("PM")}}</option>
                            <option value="5:00 PM">5:00 {{lang("PM")}}</option>
                            <option value="5:30 PM">5:30 {{lang("PM")}}</option>
                            <option value="6:00 PM">6:00 {{lang("PM")}}</option>
                            <option value="6:30 PM">6:30 {{lang("PM")}}</option>
                            <option value="7:00 PM">7:00 {{lang("PM")}}</option>
                            <option value="7:30 PM">7:30 {{lang("PM")}}</option>
                            <option value="8:00 PM">8:00 {{lang("PM")}}</option>
                            <option value="8:30 PM">8:30 {{lang("PM")}}</option>
                            <option value="9:00 PM">9:00 {{lang("PM")}}</option>
                            <option value="9:30 PM">9:30 {{lang("PM")}}</option>
                            <option value="10:00 PM">10:00 {{lang("PM")}}</option>
                            <option value="10:30 PM">10:30 {{lang("PM")}}</option>
                            <option value="10:00 PM">11:00 {{lang("PM")}}</option>
                            <option value="10:30 PM">11:30 {{lang("PM")}}</option>
                        </select>
                        <button type="button" class="clear_button-1 float-start mb-5 mb-lg-0 ms-md-9 mt-lg-6" id="clear-button1">{{lang('Clear')}}</button>
                        <button type="button" class="clear_button-2 me-md-9 mb-5 mb-lg-0 float-end mt-lg-6" id="save_button-2">{{lang("Save")}}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div>
    <h1 class="text-center mt-lg-7 mt-md-4 mt-3 fs-1 heading_fon">{{lang("Make your plans exceptional")}} <br>
        {{lang("whatever they may be.")}}</h1>
    <h3 class="text-center my-3">{{lang("Musical Acts")}}</h3>
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
                                            <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top h-100" alt="img">
                                            <div class="over_lay card_overlay">
                                                <h5>{{lang('Singers')}}</h5>
                                                <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-top h-100" alt="img">
                                            <div class="over_lay card_overlay">
                                                <h5>{{lang('Singers')}}</h5>
                                                <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/3.jpg') }}" class="card-img-top h-100" alt="img">
                                            <div class="over_lay card_overlay">
                                                <h5>{{lang('Singers')}}</h5>
                                                <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/4.jpg') }}" class="card-img-top h-100" alt="img">
                                            <div class="over_lay card_overlay">
                                                <h5>{{lang('Singers')}}</h5>
                                                <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/5.jpg') }}" class="card-img-top h-100" alt="img">
                                            <div class="over_lay card_overlay">
                                                <h5>{{lang('Singers')}}</h5>
                                                <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top h-100" alt="img">
                                            <div class="over_lay card_overlay">
                                                <h5>{{lang('Singers')}}</h5>
                                                <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0 card_height">
                                        <a class="h-100" href="{{ URL('/space-details') }}">
                                            <img src="{{ asset('assets/images/users/spaces/7.jpg') }}" class="card-img-top h-100" alt="img">
                                            <div class="over_lay card_overlay">
                                                <h5>{{lang('Singers')}}</h5>
                                                <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
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
<h3 class="text-center my-3">{{lang('Entertainers')}}</h3>
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
                                        <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top h-100" alt="img">
                                        <div class="over_lay card_overlay">
                                            <h5>{{lang('Singers')}}</h5>
                                            <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 card_height">
                                    <a class="h-100" href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-top h-100" alt="img">
                                        <div class="over_lay card_overlay">
                                            <h5>{{lang('Ensembles')}}</h5>
                                            <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 card_height">
                                    <a class="h-100" href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/3.jpg') }}" class="card-img-top h-100" alt="img">
                                        <div class="over_lay card_overlay">
                                            <h5>{{lang('Bands & Groups')}}</h5>
                                            <p>{{lang('Blues Bands, Mariachis, Wedding Bands...')}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 card_height">
                                    <a class="h-100" href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/4.jpg') }}" class="card-img-top h-100" alt="img">
                                        <div class="over_lay card_overlay">
                                            <h5>{{lang('Ensembles')}}</h5>
                                            <p>{{lang('Chamber Orchestras, Classical Ensembles, String Trios...')}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 card_height">
                                    <a class="h-100" href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/5.jpg') }}" class="card-img-top h-100" alt="img">
                                        <div class="over_lay card_overlay">
                                            <h5>{{lang('Ensembles')}}</h5>
                                            <p>{{lang('Chamber Orchestras, Classical Ensembles, String Trios...')}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 card_height">
                                    <a class="h-100" href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top h-100" alt="img">
                                        <div class="over_lay card_overlay">
                                            <h5>{{lang('Ensembles')}}</h5>
                                            <p>{{lang('Chamber Orchestras, Classical Ensembles, String Trios...')}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 card_height">
                                    <a class="h-100" href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/7.jpg') }}" class="card-img-top h-100" alt="img">
                                        <div class="over_lay card_overlay">
                                            <h5>{{lang('Ensembles')}}</h5>
                                            <p>{{lang('Chamber Orchestras, Classical Ensembles, String Trios...')}}</p>
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
<h3 class="text-center my-3">{{lang('Event Services')}}</h3>
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
                                        <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top h-100" alt="img">
                                        <div class="over_lay card_overlay">
                                            <h5>{{lang('Singers')}}</h5>
                                            <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 card_height">
                                    <a class="h-100" href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-top h-100" alt="img">
                                        <div class="over_lay card_overlay">
                                            <h5>{{lang('Singers')}}</h5>
                                            <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 card_height">
                                    <a class="h-100" href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/3.jpg') }}" class="card-img-top h-100" alt="img">
                                        <div class="over_lay card_overlay">
                                            <h5>{{lang('Singers')}}</h5>
                                            <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 card_height">
                                    <a class="h-100" href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/4.jpg') }}" class="card-img-top h-100" alt="img">
                                        <div class="over_lay card_overlay">
                                            <h5>{{lang('Singers')}}</h5>
                                            <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 card_height">
                                    <a class="h-100" href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/5.jpg') }}" class="card-img-top h-100" alt="img">
                                        <div class="over_lay card_overlay">
                                            <h5>{{lang('Singers')}}</h5>
                                            <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 card_height">
                                    <a class="h-100" href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top h-100" alt="img">
                                        <div class="over_lay card_overlay">
                                            <h5>{{lang('Singers')}}</h5>
                                            <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 card_height">
                                    <a class="h-100" href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/7.jpg') }}" class="card-img-top h-100" alt="img">
                                        <div class="over_lay card_overlay">
                                            <h5>{{lang('Singers')}}</h5>
                                            <p>{{lang('Country Singers, Singing Guitarists, Rappers...')}}</p>
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
<h3 class="text-center"><a class="bg-primary btn text-white px-7 modal-effect" data-bs-target="#signup-modal" data-bs-toggle="modal"><b>{{lang("Get started")}}</b></a></h3>

{{-- --------------------------------------- Content 3333 ------------------------------------- --}}

<div style="margin-top: 65px!important;" class="landing_background1 height-img">
    <div class="container ps-0 pe-5">
        <h1 class="text-center pt-7 text-white image-h1 heading_font ms-5">{{lang("Book your services arrangement
            team")}}</h1>
        <p class="text-center text-white px-md-9 px-sm-5 ms-5">{{lang("For every service, from wedding planner to
            invitations,
            we'll help you book the best service.")}}</p>
        <form action="{{ route('search_results') }}" class="ms-5 form-blur-border">
            <input type="hidden" name="type" value="service">
            <div class="row bg-whiter justify-content-between text-start py-3 px-5 m-0 box-sizing form-border FormBorder-2" id="form-border-2">
                <input type="hidden" id="service_search_url" value="{{route('service_landing_index')}}">
                <div class="col-sm-4 px-0 border-end border-end0">
                    <label class="mb-0 label-none my-font-size"><b>{{lang("What have you got planned?")}}</b></label>
                    <input type="text" name="planCatagories_2" id="planCatagories-2" class="form-control px-0" placeholder="{{lang('Select your plan')}}">
                </div>
                <div class="col-sm-4 border-end border-end0 px-0 px-sm-3 my-3 my-sm-0">
                    <label class="mb-0 label-none font-size"><b>{{lang("Where?")}}</b></label>
                    <input type="text" class="form-control px-0" name="location_2" id="location-2" placeholder="{{lang('Enter your Location')}}">
                </div>
                <div class="col-sm-3 border-end0 pe-0 px-0 px-sm-3 mb-3 mb-sm-0">
                    <label class="mb-0 label-none font-size"><b>{{lang("When?")}}</b></label>
                    <input type="text" name="selectedDate_2" class="form-control input py-2 px-0" placeholder="{{lang('Anytime')}}" id="selectedDate-2">
                </div>
                <div class="col-sm-1 text-end px-0 my-auto">
                    <button type="submit" class="btn btn-color rounded text-end button ms-auto d-none d-sm-block"><i class="fa fa-search text-white"></i></button>
                    <button type="submit" class="btn btn-primary btn-search mx-0 px-0 text-center d-sm-none d-block">{{lang("Search")}}</button>
                </div>
            </div>
            <input type="hidden" name="hidden" id="hiddenDate-2">
            <div id="searchResults-2" class="w-100 search-content search-content-3"></div>
            <div id="addressDropdown-2" class="bg-white search-location-1 AdressDrop"></div>
            <div class="row w-100 bg-white canlader-posit calendarAndTimePicker-2" id="calendarAndTimePicker-2">
                <div class="col-lg-6 calendar-container-1">
                    <div class="calendar">
                        <div class="year-header">
                            <span class="left-button" id="left-button-2"> <i class="fa fa-angle-double-left"></i>
                            </span>
                            <span class="year-2" id="label"> </span>
                            <span class="right-button" id="right-button-2"> <i class="fa fa-angle-double-right"></i>
                            </span>
                        </div>
                        <table class="months-table mt-4">
                            <tbody>
                                <tr class="months-row-2">
                                    <td class="month-2 week-f">{{lang("Jan")}}</td>
                                    <td class="month-2 week-f">{{lang("Feb")}}</td>
                                    <td class="month-2 week-f">{{lang("Mar")}}</td>
                                    <td class="month-2 week-f">{{lang("Apr")}}</td>
                                    <td class="month-2 week-f">{{lang("May")}}</td>
                                    <td class="month-2 week-f">{{lang("June")}}</td>
                                    <td class="month-2 week-f">{{lang("July")}}</td>
                                    <td class="month-2 week-f">{{lang("Aug")}}</td>
                                    <td class="month-2 week-f">{{lang("Sep")}}</td>
                                    <td class="month-2 week-f">{{lang("Oct")}}</td>
                                    <td class="month-2 week-f">{{lang("Nov")}}</td>
                                    <td class="month-2 week-f">{{lang("Dec")}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="days-table">
                            <td class="day week-f">{{lang("Sun")}}</td>
                            <td class="day week-f">{{lang("Mon")}}</td>
                            <td class="day week-f">{{lang("Tue")}}</td>
                            <td class="day week-f">{{lang("Wed")}}</td>
                            <td class="day week-f">{{lang("Thu")}}</td>
                            <td class="day week-f">{{lang("Fri")}}</td>
                            <td class="day week-f">{{lang("Sat")}}</td>
                        </table>
                        <div class="frame">
                            <table class="dates-table">
                                <tbody class="tbody-tb-2"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 dialog" id="dialog">
                    <h2 class="dialog-header mt-lg-7">{{lang("Select Time")}}</h2>
                    <div class="form-container mt-lg-7 ms-sm-6 ms-lg-0 me-sm-6" align="center">
                        <label for="start_time" class="form-label mt-5 text-start startTime_label">{{lang("Start
                            Time")}}</label>
                        <select name="start_time" class="Select_Time form-select mb-5" id="start_time_2" disabled>
                            <option value="">{{lang("Select Start Time")}}</option>
                            <option value="6:00 AM">6:00 {{lang("AM")}}</option>
                            <option value="6:30 AM">6:30 {{lang("AM")}}</option>
                            <option value="7:00 AM">7:00 {{lang("AM")}}</option>
                            <option value="7:30 AM">7:30 {{lang("AM")}}</option>
                            <option value="8:00 AM">8:00 {{lang("AM")}}</option>
                            <option value="8:30 AM">8:30 {{lang("AM")}}</option>
                            <option value="9:00 AM">9:00 {{lang("AM")}}</option>
                            <option value="9:30 AM">9:30 {{lang("AM")}}</option>
                            <option value="10:00 AM">10:00 {{lang("AM")}}</option>
                            <option value="10:30 AM">10:30 {{lang("AM")}}</option>
                            <option value="11:00 AM">11:00 {{lang("AM")}}</option>
                            <option value="11:30 AM">11:30 {{lang("AM")}}</option>
                            <option value="12:00 PM">12:00 {{lang("PM")}}</option>
                            <option value="12:30 PM">12:30 {{lang("PM")}}</option>
                            <option value="1:00 PM">1:00 {{lang("PM")}}</option>
                            <option value="1:30 PM">1:30 {{lang("PM")}}</option>
                            <option value="2:00 PM">2:00 {{lang("PM")}}</option>
                            <option value="2:30 PM">2:30 {{lang("PM")}}</option>
                            <option value="3:00 PM">3:00 {{lang("PM")}}</option>
                            <option value="3:30 PM">3:30 {{lang("PM")}}</option>
                            <option value="4:00 PM">4:00 {{lang("PM")}}</option>
                            <option value="4:30 PM">4:30 {{lang("PM")}}</option>
                            <option value="5:00 PM">5:00 {{lang("PM")}}</option>
                            <option value="5:30 PM">5:30 {{lang("PM")}}</option>
                            <option value="6:00 PM">6:00 {{lang("PM")}}</option>
                            <option value="6:30 PM">6:30 {{lang("PM")}}</option>
                            <option value="7:00 PM">7:00 {{lang("PM")}}</option>
                            <option value="7:30 PM">7:30 {{lang("PM")}}</option>
                            <option value="8:00 PM">8:00 {{lang("PM")}}</option>
                            <option value="8:30 PM">8:30 {{lang("PM")}}</option>
                            <option value="9:00 PM">9:00 {{lang("PM")}}</option>
                            <option value="9:30 PM">9:30 {{lang("PM")}}</option>
                            <option value="10:00 PM">10:00 {{lang("PM")}}</option>
                            <option value="10:30 PM">10:30 {{lang("PM")}}</option>
                            <option value="10:00 PM">11:00 {{lang("PM")}}</option>
                            <option value="10:30 PM">11:30 {{lang("PM")}}</option>
                        </select>
                        <label for="end_time" class="form-label text-start endTime_label">{{lang("End Time")}}</label>
                        <select name="end_time" class="Select_Time form-select mb-5" id="end_time_2" disabled>
                            <option value="">{{lang("Select End Time")}}</option>
                            <option value="6:00 AM">6:00 {{lang("AM")}}</option>
                            <option value="6:30 AM">6:30 {{lang("AM")}}</option>
                            <option value="7:00 AM">7:00 {{lang("AM")}}</option>
                            <option value="7:30 AM">7:30 {{lang("AM")}}</option>
                            <option value="8:00 AM">8:00 {{lang("AM")}}</option>
                            <option value="8:30 AM">8:30 {{lang("AM")}}</option>
                            <option value="9:00 AM">9:00 {{lang("AM")}}</option>
                            <option value="9:30 AM">9:30 {{lang("AM")}}</option>
                            <option value="10:00 AM">10:00 {{lang("AM")}}</option>
                            <option value="10:30 AM">10:30 {{lang("AM")}}</option>
                            <option value="11:00 AM">11:00 {{lang("AM")}}</option>
                            <option value="11:30 AM">11:30 {{lang("AM")}}</option>
                            <option value="12:00 PM">12:00 {{lang("PM")}}</option>
                            <option value="12:30 PM">12:30 {{lang("PM")}}</option>
                            <option value="1:00 PM">1:00 {{lang("PM")}}</option>
                            <option value="1:30 PM">1:30 {{lang("PM")}}</option>
                            <option value="2:00 PM">2:00 {{lang("PM")}}</option>
                            <option value="2:30 PM">2:30 {{lang("PM")}}</option>
                            <option value="3:00 PM">3:00 {{lang("PM")}}</option>
                            <option value="3:30 PM">3:30 {{lang("PM")}}</option>
                            <option value="4:00 PM">4:00 {{lang("PM")}}</option>
                            <option value="4:30 PM">4:30 {{lang("PM")}}</option>
                            <option value="5:00 PM">5:00 {{lang("PM")}}</option>
                            <option value="5:30 PM">5:30 {{lang("PM")}}</option>
                            <option value="6:00 PM">6:00 {{lang("PM")}}</option>
                            <option value="6:30 PM">6:30 {{lang("PM")}}</option>
                            <option value="7:00 PM">7:00 {{lang("PM")}}</option>
                            <option value="7:30 PM">7:30 {{lang("PM")}}</option>
                            <option value="8:00 PM">8:00 {{lang("PM")}}</option>
                            <option value="8:30 PM">8:30 {{lang("PM")}}</option>
                            <option value="9:00 PM">9:00 {{lang("PM")}}</option>
                            <option value="9:30 PM">9:30 {{lang("PM")}}</option>
                            <option value="10:00 PM">10:00 {{lang("PM")}}</option>
                            <option value="10:30 PM">10:30 {{lang("PM")}}</option>
                            <option value="10:00 PM">11:00 {{lang("PM")}}</option>
                            <option value="10:30 PM">11:30 {{lang("PM")}}</option>
                        </select>
                        <button type="button" class="clear_button-1 float-start mb-5 mb-lg-0 ms-md-9 mt-lg-6" id="clear-button2">{{lang('Clear')}}</button>
                        <button type="button" class="clear_button-2 me-md-9 mb-5 mb-lg-0 float-end mt-lg-6" id="save_button-3">{{lang("Save")}}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<h1 class="text-center mt-lg-7 mt-md-4 mt-3 fs-1 heading_fon">{{lang("Your event team and everything in between")}}</h1>
<h3 class="text-center my-3">{{lang("Wedding Planner and Services")}}</h3>
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
                                        <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top" alt="img">
                                        <div class="row p-3">
                                            <div class="col-12"><span class="">{{lang("Portland, ME")}}</span>
                                            </div>
                                            <div class="col-12 pe-5 my-2">
                                                <i class="fa fa-users"></i> 25 &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>{{lang("Events & Rentals")}}</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>{{lang("SAR - Affordable")}}</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">{{lang("Request
                                                            Quote")}}</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-top" alt="img">
                                        <div class="row p-3">
                                            <div class="col-12"><span class="">{{lang('Portland, ME')}}</span>
                                            </div>
                                            <div class="col-12 pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>{{lang('Events & Rentals')}}</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>{{lang('SAR - Affordable')}}</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">{{lang('Request
                                                            Quote')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/3.jpg') }}" class="card-img-top" alt="img">
                                        <div class="row p-3">
                                            <div class="col-12"><span class="">{{lang('Portland, ME')}}</span>
                                            </div>
                                            <div class="col-12 pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>{{lang('Events & Rentals')}}</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>{{lang('SAR - Affordable')}}</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">{{lang('Request
                                                            Quote')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/4.jpg') }}" class="card-img-top" alt="img">
                                        <div class="row p-3">
                                            <div class="col-12"><span class="">{{lang('Portland, ME')}}</span>
                                            </div>
                                            <div class="col-12 pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>{{lang('Events & Rentals')}}</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>{{lang('SAR - Affordable')}}</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">{{lang('Request
                                                            Quote')}}</button>
                                                </div>
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
<h3 class="text-center my-3">{{lang('Beauty Services')}}</h3>
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
                                        <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top" alt="img">
                                        <div class="row p-3">
                                            <div class="col-12"><span class="">{{lang('Portland, ME')}}</span>
                                            </div>
                                            <div class="col-12 pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>{{lang('Events & Rentals')}}</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>{{lang('SAR - Affordable')}}</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">{{lang('Request
                                                            Quote')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0  content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-top" alt="img">
                                        <div class="row p-3">
                                            <div class="col-12"><span class="">{{lang('Portland, ME')}}</span>
                                            </div>
                                            <div class="col-12 pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>{{lang('Events & Rentals')}}</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>{{lang('SAR - Affordable')}}</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">{{lang('Request
                                                            Quote')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0  content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/3.jpg') }}" class="card-img-top" alt="img">
                                        <div class="row p-3">
                                            <div class="col-12"><span class="">{{lang('Portland, ME')}}</span>
                                            </div>
                                            <div class="col-12 pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>{{lang('Events & Rentals')}}</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>{{lang('SAR - Affordable')}}</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">{{lang('Request
                                                            Quote')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0  content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/4.jpg') }}" class="card-img-top" alt="img">
                                        <div class="row p-3">
                                            <div class="col-12"><span class="">{{lang('Portland, ME')}}</span>
                                            </div>
                                            <div class="col-12 pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>{{lang('Events & Rentals')}}</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>{{lang('SAR - Affordable')}}</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">{{lang('Request
                                                            Quote')}}</button>
                                                </div>
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
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top" alt="img">
                                        <div class="row p-3">
                                            <div class="col-12"><span class="">{{lang('Portland, ME')}}</span>
                                            </div>
                                            <div class="col-12 pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>{{lang('Events & Rentals')}}</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>{{lang('SAR - Affordable')}}</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">{{lang('Request
                                                            Quote')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-top" alt="img">
                                        <div class="row p-3">
                                            <div class="col-12"><span class="">{{lang('Portland, ME')}}</span>
                                            </div>
                                            <div class="col-12 pe-5 my-2"><i class="fa fa-users"></i> 25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>{{lang('Events & Rentals')}}</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>{{lang('SAR - Affordable')}}</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">{{lang('Request
                                                            Quote')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/3.jpg') }}" class="card-img-top" alt="img">
                                        <div class="row p-3">
                                            <div class="col-12"><span class="">{{lang('Portland, ME')}}</span>
                                            </div>
                                            <div class="col-12 pe-5 my-2"><i class="fa fa-users"></i>
                                                25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>{{lang('Events & Rentals')}}</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>{{lang('SAR - Affordable')}}</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">{{lang('Request
                                                            Quote')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0 content-width">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/4.jpg') }}" class="card-img-top" alt="img">
                                        <div class="row p-3">
                                            <div class="col-12"><span class="">{{lang('Portland, ME')}}</span>
                                            </div>
                                            <div class="col-12 pe-5 my-2"><i class="fa fa-users"></i>
                                                25
                                                &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i> &nbsp; 14
                                            </div>
                                            <div class="col-12">
                                                <h5>{{lang('Events & Rentals')}}</h3>
                                            </div>
                                            <div class="col-12">
                                                <p>{{lang('SAR - Affordable')}}</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <button class="btn btn-outline-primary rounded-btn">{{lang('Request
                                                            Quote')}}</button>
                                                </div>
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
<h3 class="text-center"><a class="bg-primary btn text-white px-7 modal-effect" data-bs-target="#signup-modal" data-bs-toggle="modal"><b>{{lang('Get started')}}</b></a></h3>
@endsection
@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key={{ config('googlemap.GOOGLE_MAP_KEY') }}">
</script>


{{-- Calender code 1 --}}
<script>
    $(document).ready(function() {
        // Calender show or hidden
        $('#calendarAndTimePicker').hide();
        $('#selectedDate').click(function() {
            $('.FormBorder').css({
                "border-bottom-left-radius": "0px"
                , "border-bottom-right-radius": "0px"
            });
            $('#calendarAndTimePicker').show();
        });
        $(document).click(function(event) {
            var target = $(event.target);
            if (!target.closest('#calendarAndTimePicker').length && !target.is('#selectedDate')) {
                $('#calendarAndTimePicker').hide();
                $('.FormBorder').removeClass("data-appended");
                $('.FormBorder').css({
                    "border-bottom-left-radius": "13px"
                    , "border-bottom-right-radius": "13px"
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
            today
            , date.getMonth() + 1
            , date.getFullYear()
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
                        events: events
                        , month: months[month]
                        , day: day
                    }
                    , date_click
                );
                row.append(curr_date);
            }
        }
        calendar_days.append(row);
        $(".year-text").text(year);
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
        const year = $('.year-text').text();
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
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
            , }
            , {
                occasion: " Test Event"
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 11
            , }
        , ]
    , };
    const months = [
        "January"
        , "February"
        , "March"
        , "April"
        , "May"
        , "June"
        , "July"
        , "August"
        , "September"
        , "October"
        , "November"
        , "December"
    , ];
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


{{-- Calender code 2 --}}
<script>
    $(document).ready(function() {
        // Calender show or hidden
        $('#calendarAndTimePicker-1').hide();
        $('#selectedDate-1').click(function() {
            $('.FormBorder-1').css({
                "border-bottom-left-radius": "0px"
                , "border-bottom-right-radius": "0px"
            });
            $('#calendarAndTimePicker-1').show();
        });
        $(document).click(function(event) {
            var target1 = $(event.target);
            if (!target1.closest('#calendarAndTimePicker-1').length && !target1.is('#selectedDate-1')) {
                $('#calendarAndTimePicker-1').hide();
                $('.FormBorder-1').removeClass("data-appended");
                $('.FormBorder-1').css({
                    "border-bottom-left-radius": "13px"
                    , "border-bottom-right-radius": "13px"
                });
            }
        });
        // Calender show or hidden ended-------------------------------

        var date1 = new Date();
        var today1 = date1.getDate();
        $("#right-button").click({
            date: date1
        }, next_year_1);
        $("#left-button").click({
            date: date1
        }, prev_year_1);
        $(".month-1").click({
            date: date1
        }, month_click_1);
        $(".months-row-1")
            .children()
            .eq(date1.getMonth())
            .addClass("active-month");
        init_calendar_1(date1);
        var events = check_events_1(
            today1
            , date1.getMonth() + 1
            , date1.getFullYear()
        );
    });

    function init_calendar_1(date1) {
        $(".tbody-tb-1").empty();
        var calendar_days1 = $(".tbody-tb-1");
        var month1 = date1.getMonth();
        var year1 = date1.getFullYear();
        var day_count1 = days_in_month_1(month1, year1);
        var row1 = $("<tr class='table-row'></tr>");
        var today1 = date1.getDate();
        date1.setDate(1);
        var first_day1 = date1.getDay();
        for (var i = 0; i < 35 + first_day1; i++) {
            var day1 = i - first_day1 + 1;
            if (i % 7 === 0) {
                calendar_days1.append(row1);
                row1 = $("<tr class='table-row'></tr>");
            }
            if (i < first_day1 || day1 > day_count1) {
                var curr_date1 = $("<td class='table-date nil'>" + "</td>");
                row1.append(curr_date1);
            } else {
                var curr_date1 = $("<td class='table-date'>" + day1 + "</td>");
                var events1 = check_events_1(day1, month1 + 1, year1);
                if (today1 === day1 && $(".active-date").length === 0) {
                    curr_date1.addClass("active-date");
                }
                curr_date1.click({
                        events: events1
                        , month: months_1[month1]
                        , day: day1
                    }
                    , date_click_1
                );
                row1.append(curr_date1);
            }
        }
        calendar_days1.append(row1);
        $(".year-1").text(year1);
    }

    function days_in_month_1(month, year) {
        var monthStart1 = new Date(year, month, 1);
        var monthEnd1 = new Date(year, month + 1, 1);
        return (monthEnd1 - monthStart1) / (1000 * 60 * 60 * 24);
    }
    var dateInput;

    function date_click_1(event) {
        $(".active-date").removeClass("active-date");
        $(this).addClass("active-date");
        const day1 = $(this).text();
        const month1 = $('.month-1.active-month').text();
        const year1 = $('.year-1').text();
        var fullDate1 = month1 + ' ' + day1 + ', ' + year1;
        $('#hiddenDate-1').val(fullDate1);
        $('#start_time_1').removeAttr('disabled').val("9:00 AM").css('border', '1px solid #898587');
        $('#end_time_1').removeAttr('disabled').val("9:00 PM").css('border', '1px solid #898587');
        $('.startTime_label').css('color', 'black');
        $('.endTime_label').css('color', 'black');
        updateAppendedValue_1();
    }

    function month_click_1(event) {
        var date1 = event.data.date;
        $(".active-month").removeClass("active-month");
        $(this).addClass("active-month");
        var new_month1 = $(".month-1").index(this);
        date1.setMonth(new_month1);
        init_calendar_1(date1);
    }

    function next_year_1(event) {
        var date1 = event.data.date;
        var new_year1 = date1.getFullYear() + 1;
        $("year-1").html(new_year1);
        date1.setFullYear(new_year1);
        init_calendar_1(date1);
    }

    function prev_year_1(event) {
        var date1 = event.data.date;
        var new_year1 = date1.getFullYear() - 1;
        $("year-1").html(new_year1);
        date1.setFullYear(new_year1);
        init_calendar_1(date1);
    }

    function check_events_1(day, month, year) {
        var events1 = [];
        for (var i = 0; i < event_data_1["events"].length; i++) {
            var event1 = event_data_1["events"][i];
            if (
                event1["day"] === day &&
                event1["month"] === month &&
                event1["year"] === year
            ) {
                events1.push(event1);
            }
        }
        return events1;
    }
    var event_data_1 = {
        events: [{
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
            , }
            , {
                occasion: " Test Event"
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 11
            , }
        , ]
    , };
    const months_1 = [
        "January"
        , "February"
        , "March"
        , "April"
        , "May"
        , "June"
        , "July"
        , "August"
        , "September"
        , "October"
        , "November"
        , "December"
    , ];
    const $startTimeInput1 = $("#start_time_1");
    const $endTimeInput1 = $("#end_time_1");
    const $appendedValue1 = $('#selectedDate-1');

    $startTimeInput1.on("change", updateAppendedValue_1);
    $endTimeInput1.on("change", updateAppendedValue_1);

    function updateAppendedValue_1() {
        const selectedDate1 = $("#hiddenDate-1").val();
        const selectedStartTime1 = $startTimeInput1.val();
        const selectedEndTime1 = $endTimeInput1.val();

        const formattedAppendedValue1 = `${selectedDate1} ${selectedStartTime1} to ${selectedEndTime1}`;
        $appendedValue1.val(formattedAppendedValue1);
    }
    $('#clear-button1').on('click', function() {
        $appendedValue1.val('');
        $('#start_time_1').attr('disabled', 'true').css('border', '1px solid #e9edf4');
        $('#end_time_1').attr('disabled', 'true').css('border', '1px solid #e9edf4');
        $('.startTime_label').css('color', '#9fa7af');
        $('.endTime_label').css('color', '#9fa7af');
    });

</script>


{{-- Calender code 3 --}}
<script>
    $(document).ready(function() {
        // Calender show or hidden
        $('#calendarAndTimePicker-2').hide();
        $('#selectedDate-2').click(function() {
            $('.FormBorder-2').css({
                "border-bottom-left-radius": "0px"
                , "border-bottom-right-radius": "0px"
            });
            $('#calendarAndTimePicker-2').show();
        });
        $(document).click(function(event) {
            var target2 = $(event.target);
            if (!target2.closest('#calendarAndTimePicker-2').length && !target2.is('#selectedDate-2')) {
                $('#calendarAndTimePicker-2').hide();
                $('.FormBorder-2').removeClass("data-appended");
                $('.FormBorder-2').css({
                    "border-bottom-left-radius": "13px"
                    , "border-bottom-right-radius": "13px"
                });
            }
        });
        // Calender show or hidden ended-------------------------------

        var date2 = new Date();
        var today2 = date2.getDate();
        $("#right-button-2").click({
            date: date2
        }, next_year_2);
        $("#left-button-2").click({
            date: date2
        }, prev_year_2);
        $(".month-2").click({
            date: date2
        }, month_click_2);
        $(".months-row-2")
            .children()
            .eq(date2.getMonth())
            .addClass("active-month");
        init_calendar_2(date2);
        var events = check_events_2(
            today2
            , date2.getMonth() + 1
            , date2.getFullYear()
        );
    });

    function init_calendar_2(date2) {
        $(".tbody-tb-2").empty();
        var calendar_days2 = $(".tbody-tb-2");
        var month2 = date2.getMonth();
        var year2 = date2.getFullYear();
        var day_count2 = days_in_month_2(month2, year2);
        var row2 = $("<tr class='table-row'></tr>");
        var today2 = date2.getDate();
        date2.setDate(1);
        var first_day2 = date2.getDay();
        for (var i = 0; i < 35 + first_day2; i++) {
            var day2 = i - first_day2 + 1;
            if (i % 7 === 0) {
                calendar_days2.append(row2);
                row2 = $("<tr class='table-row'></tr>");
            }
            if (i < first_day2 || day2 > day_count2) {
                var curr_date2 = $("<td class='table-date nil'>" + "</td>");
                row2.append(curr_date2);
            } else {
                var curr_date2 = $("<td class='table-date'>" + day2 + "</td>");
                var events2 = check_events_2(day2, month2 + 1, year2);
                if (today2 === day2 && $(".active-date").length === 0) {
                    curr_date2.addClass("active-date");
                }
                curr_date2.click({
                        events: events2
                        , month: months_2[month2]
                        , day: day2
                    }
                    , date_click_2
                );
                row2.append(curr_date2);
            }
        }
        calendar_days2.append(row2);
        $(".year-2").text(year2);
    }

    function days_in_month_2(month, year) {
        var monthStart2 = new Date(year, month, 1);
        var monthEnd2 = new Date(year, month + 1, 1);
        return (monthEnd2 - monthStart2) / (1000 * 60 * 60 * 24);
    }
    var dateInput;

    function date_click_2(event) {
        $(".active-date").removeClass("active-date");
        $(this).addClass("active-date");
        const day2 = $(this).text();
        const month2 = $('.month-2.active-month').text();
        const year2 = $('.year-2').text();
        var fullDate2 = month2 + ' ' + day2 + ', ' + year2;
        $('#hiddenDate-2').val(fullDate2);
        $('#start_time_2').removeAttr('disabled').val("9:00 AM").css('border', '1px solid #898587');
        $('#end_time_2').removeAttr('disabled').val("9:00 PM").css('border', '1px solid #898587');
        $('.startTime_label').css('color', 'black');
        $('.endTime_label').css('color', 'black');
        updateAppendedValue_2();
    }

    function month_click_2(event) {
        var date2 = event.data.date;
        $(".active-month").removeClass("active-month");
        $(this).addClass("active-month");
        var new_month2 = $(".month-2").index(this);
        date2.setMonth(new_month2);
        init_calendar_2(date2);
    }

    function next_year_2(event) {
        var date2 = event.data.date;
        var new_year2 = date2.getFullYear() + 1;
        $("year-2").html(new_year2);
        date2.setFullYear(new_year2);
        init_calendar_2(date2);
    }

    function prev_year_2(event) {
        var date2 = event.data.date;
        var new_year2 = date2.getFullYear() - 1;
        $("year-2").html(new_year2);
        date2.setFullYear(new_year2);
        init_calendar_2(date2);
    }

    function check_events_2(day, month, year) {
        var events2 = [];
        for (var i = 0; i < event_data_2["events"].length; i++) {
            var event2 = event_data_2["events"][i];
            if (
                event2["day"] === day &&
                event2["month"] === month &&
                event2["year"] === year
            ) {
                events2.push(event2);
            }
        }
        return events2;
    }
    var event_data_2 = {
        events: [{
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
                , cancelled: true
            , }
            , {
                occasion: " Repeated Test Event "
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 10
            , }
            , {
                occasion: " Test Event"
                , invited_count: 120
                , year: 2017
                , month: 5
                , day: 11
            , }
        , ]
    , };
    const months_2 = [
        "January"
        , "February"
        , "March"
        , "April"
        , "May"
        , "June"
        , "July"
        , "August"
        , "September"
        , "October"
        , "November"
        , "December"
    , ];
    const $startTimeInput2 = $("#start_time_2");
    const $endTimeInput2 = $("#end_time_2");
    const $appendedValue2 = $('#selectedDate-2');

    $startTimeInput2.on("change", updateAppendedValue_2);
    $endTimeInput2.on("change", updateAppendedValue_2);

    function updateAppendedValue_2() {
        const selectedDate2 = $("#hiddenDate-2").val();
        const selectedStartTime2 = $startTimeInput2.val();
        const selectedEndTime2 = $endTimeInput2.val();

        const formattedAppendedValue2 = `${selectedDate2} ${selectedStartTime2} to ${selectedEndTime2}`;
        $appendedValue2.val(formattedAppendedValue2);
    }
    $('#clear-button2').on('click', function() {
        $appendedValue2.val('');
        $('#start_time_2').attr('disabled', 'true').css('border', '1px solid #e9edf4');
        $('#end_time_2').attr('disabled', 'true').css('border', '1px solid #e9edf4');
        $('.startTime_label').css('color', '#9fa7af');
        $('.endTime_label').css('color', '#9fa7af');
    });

</script>


{{-- Google addresses code --}}
<script>
    $(document).ready(function() {
        var autocompleteService = new google.maps.places.AutocompleteService();

        function hideDropdown(resultsDiv, inputDiv) {
            resultsDiv.empty();
            inputDiv.removeClass("data-appended");
            inputDiv.css("border-bottom-left-radius", "13px !important").css("border-bottom-right-radius"
                , "13px !important");
        }

        function setupLocationAutocomplete(inputId, dropdownId) {
            const locationInput = $(inputId);
            const addressDropdown = $(dropdownId);

            locationInput.on('input', function() {
                var input = $(this).val();
                if (input === '') {
                    hideDropdown(addressDropdown, locationInput.parent());
                    return;
                }
                autocompleteService.getPlacePredictions({
                    input: input
                }, function(predictions, status) {
                    if (status === google.maps.places.PlacesServiceStatus.OK) {
                        addressDropdown.empty();
                        predictions.forEach(function(prediction) {
                            var addressItem = $(
                                    '<div class="text-start p-3 drop-address-result">')
                                .text(prediction.description);
                            addressItem.on('click', function() {
                                locationInput.val(prediction.description);
                                addressDropdown.empty();
                                locationInput.parent().removeClass(
                                    "data-appended");
                                locationInput.parent().css(
                                    "border-bottom-left-radius"
                                    , "13px !important").css(
                                    "border-bottom-right-radius"
                                    , "13px !important");
                            });
                            addressDropdown.append(addressItem);
                            locationInput.parent().addClass("data-appended");
                            locationInput.parent().css("border-bottom-left-radius"
                                , "0px !important").css("border-bottom-right-radius"
                                , "0px !important");
                        });
                    }
                });
            });

            $(document).click(function(event) {
                var target = $(event.target);
                if (!target.closest(dropdownId).length && !target.is(inputId)) {
                    hideDropdown(addressDropdown, locationInput.parent());
                }
            });
        }

        setupLocationAutocomplete("#location", "#addressDropdown");
        setupLocationAutocomplete("#location-1", "#addressDropdown-1");
        setupLocationAutocomplete("#location-2", "#addressDropdown-2");
    });

</script>


{{-- Carousel code --}}
<script>
    $(document).ready(function() {
        $(".my-carousel").owlCarousel({
            loop: true
            , rewind: false
            , margin: 25
            , animateIn: 'fadeInDowm'
            , animateOut: 'fadeOutDown'
            , autoplay: false
            , autoplayTimeout: 5000, // set value to change speed
            autoplayHoverPause: true
            , dots: false
            , nav: true
            , autoplay: true
            , responsiveClass: true
            , responsive: {
                0: {
                    items: 1
                }
                , 600: {
                    items: 2
                }
                , 1300: {
                    items: 4
                }

            }
        });
    });

</script>


{{-- Space categories Select field code --}}
<script>
    let categories;
    $(document).ready(function() {
        var url = $('#space_search_url').val();
        $.ajax({
            url: url
            , type: "GET"
            , success: function(res) {
                categories = res.data;
            }
        });

        function hideDropdown(resultsDiv, inputDiv) {
            resultsDiv.empty();
            inputDiv.removeClass("data-appended");
            inputDiv.css("border-bottom-left-radius", "13px !important").css("border-bottom-right-radius"
                , "13px !important");
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

</script>
{{-- Entertainment categories Select field code --}}
<script>
    let entCategories;
    $(document).ready(function() {
        var url = $('#entertaimnet_search_url').val();
        $.ajax({
            url: url
            , type: "GET"
            , success: function(res) {
                entCategories = res.data;
            }
        });

        function hideDropdown(resultsDiv, inputDiv) {
            resultsDiv.empty();
            inputDiv.removeClass("data-appended");
            inputDiv.css("border-bottom-left-radius", "13px !important").css("border-bottom-right-radius"
                , "13px !important");
        }

        function setupEntSearch(inputId, resultsId) {

            const searchInput = $(inputId);
            const searchResults = $(resultsId);

            searchInput.on("input", function() {
                const inputValue = this.value.toLowerCase();
                const filteredCategories = entCategories.filter(entCategories => entCategories.toLowerCase()
                    .includes(inputValue));
                const maxResultsToShow = 4;

                searchResults.html("").css("border-bottom-left-radius", "13px").css(
                    "border-bottom-right-radius", "13px");

                if (inputValue.length > 0) {
                    filteredCategories.slice(0, maxResultsToShow).forEach(entCategories => {
                        const div = $("<div class='search-drop-content text-start ps-5'>").text(
                            entCategories);
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
        setupEntSearch("#planCatagories-1", "#searchResults-1");
    });

</script>
{{-- Service categories Select field code --}}
<script>
    let serviceCategories;
    $(document).ready(function() {
        var url = $('#service_search_url').val();
        $.ajax({
            url: url
            , type: "GET"
            , success: function(res) {
                serviceCategories = res.data;
            }
        });

        function hideDropdown(resultsDiv, inputDiv) {
            resultsDiv.empty();
            inputDiv.removeClass("data-appended");
            inputDiv.css("border-bottom-left-radius", "13px !important").css("border-bottom-right-radius"
                , "13px !important");
        }

        function setupServiceSearch(inputId, resultsId) {

            const searchInput = $(inputId);
            const searchResults = $(resultsId);

            searchInput.on("input", function() {
                const inputValue = this.value.toLowerCase();
                const filteredCategories = serviceCategories.filter(serviceCategory => serviceCategory.toLowerCase()
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
        setupServiceSearch("#planCatagories-2", "#searchResults-2");
    });


    document.addEventListener('DOMContentLoaded', function() {
        var saveButton = document.querySelector('#save_button-1');
        var calendarContainer = document.querySelector('#calendarAndTimePicker');
        saveButton.addEventListener('click', function() {
            calendarContainer.style.display = 'none';
        });

    });

    document.addEventListener('DOMContentLoaded', function() {
        var saveButton = document.querySelector('#save_button-2');
        var calendarContainer = document.querySelector('#calendarAndTimePicker-1');
        saveButton.addEventListener('click', function() {
            calendarContainer.style.display = 'none';
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        var saveButton = document.querySelector('#save_button-3');
        var calendarContainer = document.querySelector('#calendarAndTimePicker-2');
        saveButton.addEventListener('click', function() {
            calendarContainer.style.display = 'none';
        });
    });

</script>


<!-- OWL CAROUSEL JS-->
<script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
<!-- OWL Carousel js -->
<script src="{{ asset('assets/js/carousel.js') }}"></script>
@endsection
