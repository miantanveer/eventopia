@extends('layouts.seller-web-layout')
@section('styles')
    <style>
        .seller-web-sidebar {
            z-index: 9999;
        }

        .get_started_btn {
            position: relative;
            top: -84px;
            left: 60px;
            z-index: 1;
        }

        .welcome_card {
            position: relative;
            top: -280px;
            left: 60px;
            transform: translate();
            z-index: 1;
        }

        @media(min-width:0) and (max-width:576px) {
            .welcome_card {
                position: relative;
                top: -100px;
                left: 17px;
                z-index: 1;
            }

            .get_started_btn,
            .headingOne {
                display: none;
            }
        }

        .cal1 .clndr .clndr-table tr,
        .cal1 .clndr .clndr-table .header-days {
            height: 35px !important;
        }

        .cal1 .clndr .clndr-table tr .day .day-contents {
            padding: 0 !important;
            text-align: center !important;
        }

        .day {
            vertical-align: middle !important;
        }

        .day,
        .header-day {
            border: 0 !important;
        }

        .pending-booking-card {
            height: 90%;
        }
    </style>
@endsection

@section('content')

    <!-- ROW-1 -->
    <div class="row mt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-6">
                    <img src="{{ asset('assets/images/brand/dashboard-img.png') }}" width="100%" height="100%"
                        alt="">
                    <div class="position-absolute text-white">
                        <div class="welcome_card">
                            <h1 class="headingOne">{{lang('Hello, John Doe')}} </h1>
                            <h5 class="headingTwo d-block d-sm-none">{{lang('Hello, John Doe')}}</h5>
                            <p class="fs-sm-5 fs-6">{{lang('Welcome Back!')}}</p>
                        </div>
                    </div>
                    <div class="position-absolute">
                        <a href="#" class="btn btn-white get_started_btn">{{lang('Get Started')}}</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                    <div class="card mt-3 pending-booking-card">
                        <div class="card-body mt-3">
                            <div class="d-flex">
                                <div class="text-black mt-2">
                                    <h3 class="mb-2 number-font">{{lang('25')}}</h3>
                                </div>
                                <div class="card-options">
                                    <img src="{{ asset('assets/images/icons/pending-file.png') }}" alt="">
                                </div>
                            </div>
                            <div class="mb-5 mt-3">
                                <p class="text-black mb-5">{{lang('Pending Booking Acceptance')}}</p>
                            </div>
                            <div class="row mt-5">
                                <div class="col-6">
                                    <img src="{{ asset('assets/images/icons/icon1.png') }}" alt=""> <small>{{lang('Recent Spaces')}}</small>
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('assets/images/icons/icon2.png') }}" alt=""><small>{{lang('Other Spaces')}}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-center mb-2 mt-5">
                                <div class="btn-list">
                                    <a href="{{URL('/pending-bookings')}}" class="btn btn-primary">Manage</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                    <div class="card mt-3">
                        <div class="cal1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END -->

    <!-- ROW-3 -->
    <div class="row">
        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header pb-0 border-bottom-0">
                    <h3 class="number-font">Bookings</h3>
                    <div class="card-options">
                        <div class="btn-group mt-2 mb-2">
                            <button type="button" class="btn btn-outline-primary btn-pill dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false" fdprocessedid="vh7rp"> Select <span
                                    class="fa fa-angle-down"></span> </button>
                            <ul class="dropdown-menu" role="menu" style="">
                                <li><a href="javascript:void(0)">Spaces</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:void(0)">Entertainment & Talent</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:void(0)">Services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="mt-2 row">
                        <div class="col-10 mt-4">
                            <h3 class="d-inline-block mb-2">46</h3>
                            <p>Upcoming Bookings</p>
                            <div class="progress h-2 mt-2">
                                <div class="progress-bar bg-primary" style="width: 50%;" role="progressbar"></div>
                            </div>
                        </div>
                        <div class="col-10 mt-4">
                            <h3 class="d-inline-block mb-2">89</h3>
                            <p>Cancelled Booking</p>
                            <div class="progress h-2 mt-2">
                                <div class="progress-bar bg-danger" style="width: 50%;" role="progressbar"></div>
                            </div>
                        </div>
                        <div class="col-10 mt-4">
                            <h3 class="d-inline-block mb-2">49</h3>
                            <p>Previous Booking</p>
                            <div class="progress h-2 mt-2">
                                <div class="progress-bar bg-primary" style="width: 50%;" role="progressbar"></div>
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <div style="margin-top: 40px;">
                                <a href="#" class="btn btn-primary text-white">Manage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card overflow-hidden">
                <div class="card-header pb-0 border-bottom-0">
                    <h3 class="number-font">Total Bookings</h3>
                    <div class="card-options">
                        <div class="btn-group mt-2 mb-2">
                            <button type="button" class="btn btn-outline-primary btn-pill dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false"> Select <span
                                    class="fa fa-angle-down"></span> </button>
                            <ul class="dropdown-menu" role="menu" style="">
                                <li><a href="javascript:void(0)">Upcoming Booking</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:void(0)">Previous Booking</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:void(0)">Cancelled Booking</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <p>Total: 15</p>
                </div>
                <div class="card-body p-0 mt-5">
                    <div class="table-responsive">
                        <table class="table border text-nowrap text-md-nowrap mb-0">
                            <thead class="bg-primary">
                                <tr>
                                    <th class="text-white ml-2">Space</th>
                                    <th class="text-white">Date</th>
                                    <th class="text-white">Price</th>
                                    <th class="text-white">Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gallery</td>
                                    <td>25-06-23</td>
                                    <td>SAR152</td>
                                    <td>Jeggah</td>
                                </tr>
                                <tr>
                                    <td>Loft</td>
                                    <td>05-12-23</td>
                                    <td>SAR13</td>
                                    <td>Westborough</td>
                                </tr>
                                <tr>
                                    <td>Bar</td>
                                    <td>28-03-23</td>
                                    <td>SAR160</td>
                                    <td>West Ned</td>
                                </tr>
                                <tr>
                                    <td>Club</td>
                                    <td>12-03-23</td>
                                    <td>SAR160</td>
                                    <td>Boyne Island</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="col-12 text-center">
                        <div class="mb-3">
                            <a href="#" class="btn btn-primary text-white">Manage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-white img-card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-black">
                                    <h3 class="mb-2 number-font">Booking accepted</h3>
                                    <p class="text-black mb-0">Average 72% completed</p>
                                </div>
                                <div class="card-options">
                                    <i class="fa fa-calendar-check-o text-primary fa-3x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-5 text-center">
                            <div class="mb-3">
                                <a href="#" class="btn btn-primary text-white">View Details</a>
                            </div>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
                <div class="col-12">
                    <div class="card bg-white img-card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-black">
                                    <h3 class="mb-2 number-font">Booking cancelled</h3>
                                    <p class="text-black mb-0">Total: 15</p>
                                </div>
                                <div class="card-options">
                                    <i class="fa fa-calendar-times-o text-primary fa-3x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-5 text-center">
                            <div class="mb-3">
                                <a href="#" class="btn btn-primary text-white">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-3 END -->
@endsection

@section('scripts')
    <!-- SPARKLINE JS-->
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('assets/plugins/circle-progress/circle-progress.min.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{ asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{ asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart/rounded-barchart.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{ asset('assets/js/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexchart/irregular-data-series.js') }}"></script>

    <!-- C3 CHART JS -->
    <script src="{{ asset('assets/plugins/charts-c3/d3.v5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts-c3/c3-chart.js') }}"></script>

    <!-- CHART-DONUT JS -->
    <script src="{{ asset('assets/js/charts.js') }}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{ asset('assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/chart.flot.sampledata.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/dashboard.sampledata.js') }}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/index1.js') }}"></script>
    <!-- DEFAULT CALENDAR JS-->
    <script src="{{ asset('assets/plugins/calendar/underscore-min.js') }}"></script>
    <script src="{{ asset('assets/plugins/calendar/moment.js') }}"></script>
    <script src="{{ asset('assets/plugins/calendar/calendar.js') }}"></script>
    <script src="{{ asset('assets/plugins/calendar/defaultcalendar.js') }}"></script>
@endsection
