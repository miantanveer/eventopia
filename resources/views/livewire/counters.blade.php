@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                           <!-- PAGE-HEADER -->
                           <div class="page-header">
                            <h1 class="page-title">Counters</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Counters</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row row-cards">
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Time Counting From 0
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example bg-primary-transparent border-primary text-primary">
                                            <div class="d-flex d-xs-grid">
                                                <span class="fs-30 pe-5"><i class="bi bi-alarm"></i></span>
                                                <div class="">
                                                    <span id="timer-countup" class="h3"></span>
                                                    <h5 class="mb-0 mt-1">Only 6 min left</h5>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <h5 class="mb-1">Max Bid:</h5>
                                                    <span class="h3 mb-0">$1000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Time Counting From 60 to 20
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example bg-success-transparent border-success text-success">
                                            <div class="d-flex d-xs-grid">
                                                <span class="fs-30 pe-5"><i class="bi bi-alarm"></i></span>
                                                <div class="">
                                                    <span id="timer-countinbetween" class="h3"></span>
                                                    <h5 class="mb-0 mt-1">Only 6 min left</h5>
                                                </div>
                                                <span class="h1 ms-auto mb-0">$1000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Time minutes counter
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example bg-warning-transparent border-warning text-warning">
                                            <div class="d-flex d-xs-grid">
                                                <span class="fs-30 pe-5"><i class="bi bi-alarm"></i></span>
                                                <div class="">
                                                    <span id="timer-countercallback" class="h3"></span>
                                                    <h5 class="mb-0 mt-1">Only 6 min left</h5>
                                                </div>
                                                <span class="h1 text-center ms-auto mb-0">$1000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Time Counting days Limit
                                        </h3>
                                    </div>
                                    <div class="card-body mx-auto">
                                        <div class="example border border-secondary pb-4 px-5">
                                            <span class="badge bg-secondary fs-14 me-2">Hurry Up!</span>
                                            <span>Only we have two days</span>
                                            <div>
                                                <span class="text-secondary fs-30 pe-5"><i class="bi bi-calendar-day"></i></span>
                                                <span id="timer-outputpattern" class="h3 text-secondary"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-md-12 col-lg-4 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Numbers counter
                                        </h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="counter-icon bg-secondary-gradient box-shadow-secondary num-counter mx-auto"> <svg style="width:27px;height:27px" viewBox="0 0 24 24">
                                            <path fill="#fff" d="M16,14H17.5V16.82L19.94,18.23L19.19,19.53L16,17.69V14M17,12A5,5 0 0,0 12,17A5,5 0 0,0 17,22A5,5 0 0,0 22,17A5,5 0 0,0 17,12M17,10A7,7 0 0,1 24,17A7,7 0 0,1 17,24C14.21,24 11.8,22.36 10.67,20H1V17C1,14.34 6.33,13 9,13C9.6,13 10.34,13.07 11.12,13.2C12.36,11.28 14.53,10 17,10M10,17C10,16.3 10.1,15.62 10.29,15C9.87,14.93 9.43,14.9 9,14.9C6.03,14.9 2.9,16.36 2.9,17V18.1H10.09C10.03,17.74 10,17.37 10,17M9,4A4,4 0 0,1 13,8A4,4 0 0,1 9,12A4,4 0 0,1 5,8A4,4 0 0,1 9,4M9,5.9A2.1,2.1 0 0,0 6.9,8A2.1,2.1 0 0,0 9,10.1A2.1,2.1 0 0,0 11.1,8A2.1,2.1 0 0,0 9,5.9Z" />
                                        </svg> </div>
                                        <h5>Employees</h5>
                                        <h2 class="counter">2569</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-md-12 col-lg-4 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Numbers counter
                                        </h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="counter-icon bg-primary-gradient box-shadow-primary num-counter mx-auto"> <svg style="width:25px;height:25px" viewBox="0 0 24 24">
                                            <path fill="#fff" d="M21 11.11V7A2 2 0 0 0 20.42 5.59A1.87 1.87 0 0 0 19 5H15V3A1.9 1.9 0 0 0 14.42 1.58A1.9 1.9 0 0 0 13 1H9A1.9 1.9 0 0 0 7.58 1.58A1.9 1.9 0 0 0 7 3V5H3A1.87 1.87 0 0 0 1.58 5.59A2 2 0 0 0 1 7V18A2 2 0 0 0 1.58 19.41A1.87 1.87 0 0 0 3 20H10.26A7 7 0 1 0 21 11.11M9 3H13V5H9M3 18V7H19V9.68A6.84 6.84 0 0 0 16 9A7 7 0 0 0 9 16A6.91 6.91 0 0 0 9.29 18M19 20A5 5 0 0 1 13 20A4.94 4.94 0 0 1 11 16A5 5 0 0 1 16 11A4.94 4.94 0 0 1 19 12A5 5 0 0 1 19 20M15 13H16.5V15.82L18.94 17.23L18.19 18.53L15 16.69V13" />
                                        </svg></div>
                                        <h5>Profit</h5>
                                        <h2 class="counter"> 2,56989.32</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-md-12 col-lg-4 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Numbers counter
                                        </h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="counter-icon bg-danger-gradient box-shadow-danger num-counter mx-auto"> <svg style="width:25px;height:25px" viewBox="0 0 24 24">
                                            <path fill="#fff" d="M11 7V13L16.2 16.1L17 14.9L12.5 12.2V7H11M20 12V18H22V12H20M20 20V22H22V20H20M18 20C16.3 21.3 14.3 22 12 22C6.5 22 2 17.5 2 12S6.5 2 12 2C16.8 2 20.9 5.4 21.8 10H19.7C18.8 6.6 15.7 4 12 4C7.6 4 4 7.6 4 12S7.6 20 12 20C14.4 20 16.5 18.9 18 17.3V20Z" />
                                        </svg> </div>
                                        <h5>Errors</h5>
                                        <h2 class="counter">0.8998</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Day Counter
                                        </h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="count-down row">
                                            <div class="col-lg-3 countdown">
                                                <div class="countdown bg-primary-gradient p-3 mb-1">
                                                    <span class="days text-white">35</span>
                                                    <span class="text-white">Days</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 countdown">
                                                <div class="countdown bg-success-gradient p-3 mb-1">
                                                    <span class="hours text-white">17</span>
                                                    <span class="text-white">Hours</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 countdown">
                                                <div class="countdown bg-warning-gradient p-3 mb-1">
                                                    <span class="minutes text-white">50</span>
                                                    <span class="text-white">Minutes</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 countdown">
                                                <div class="countdown bg-info-gradient p-3 mb-1">
                                                    <span class="seconds text-white">39</span>
                                                    <span class="text-white">Seconds</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-1 CLOSED -->

        @endsection

    @section('scripts')

    <!-- TIME COUNTER JS-->
    <script src="{{asset('assets/plugins/counters/jquery.missofis-countdown.js')}}"></script>
    <script src="{{asset('assets/plugins/counters/counter.js')}}"></script>

    <!-- COUNT-DOWN JS-->
    <script src="{{asset('assets/plugins/counters/count-down.js')}}"></script>
    <script src="{{asset('assets/plugins/countdown/moment.min.js')}}"></script>
    <script src="{{asset('assets/plugins/countdown/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/plugins/countdown/moment-timezone-with-data.min.js')}}"></script>
    <script src="{{asset('assets/plugins/countdown/countdowntime.js')}}"></script>

    <!-- COUNTERS JS-->
    <script src="{{asset('assets/plugins/counters/counterup.min.js')}}"></script>
    <script src="{{asset('assets/plugins/counters/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/plugins/counters/counters-1.js')}}"></script>

    @endsection
