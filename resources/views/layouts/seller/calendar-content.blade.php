@extends('layouts.calendar')

@section('styles')
    <style>
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
        .header-day, .cal1 .clndr .clndr-controls {
            border: 0 !important;
        }
    </style>
@endsection

@section('content')
    <!-- ROW-1 -->
    <div class="row mt-5">
        <div class="col-xl-8 col-lg-12 col-md-12">
            <div class="card" id="modal3">
                <div class="card-body border p-4 pb-5">
                    <h2 class="mx-4 fw-bolder">Tuesday, June 20 </h2>
                    <p class="mx-4">Operating Hours : 6:00 AM - 6:00 AM</p>
                </div>
                <div class="card-footer text-center">
                    <h5 class="fw-bolder text-success"><i class="fa fa-check"></i> Space is available</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="mt-3 text-center">
                        <div class="cal1"></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <p><i class="mdi mdi-circle text-primary p-2 fs-12"></i> Inquiry</p>
                        </div>
                        <div class="col-4">
                            <p><i class="mdi mdi-circle text-warning p-2 fs-12"></i> Request</p>
                        </div>
                        <div class="col-4">
                            <p><i class="mdi mdi-circle text-danger p-2 fs-12"></i> Offer</p>
                        </div>
                        <div class="col-4">
                            <p><i class="mdi mdi-circle text-success p-2 fs-12"></i> Booking</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="mt-3">
                                <p>Updated 5 days ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card custom-card">
                <div class="card-header">
                    <h3>External Calendar</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 bg-light-gray pb-3">
                            <div class="">
                                <p class="p-3">Increase bookings by keeping your
                                    calendar updated. Import your events
                                    into Eventopia.</p>
                                <div class="">
                                    <button class="btn btn-primary w-100">Get Started</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card custom-card">
                <div>
                    <div class="row justify-content-between">
                        <div class="col-6">
                            <h3 class="mt-4 ps-3">Operating Hours </h3>
                        </div>
                        <div class="col-6 text-end "><a class="btn mt-4"><i class="fa fa-edit fs-15"></i></a></div>
                    </div>

                    <hr style="border-top: 1px solid black">
                    <h4 class="col-10 mt-5 ps-3">Monday <span class="float-end">7:00 AM - 10:00
                            PM</span></h4>
                    <h4 class="col-10 mt-5 ps-3">Tuesday <span class="float-end">7:00 AM - 10:00
                            PM</span></h4>
                    <h4 class="col-10 mt-5 ps-3">Wednesday <span class="float-end">7:00 AM - 10:00
                            PM</span></h4>
                    <h4 class="col-10 mt-5 ps-3">Thursday <span class="float-end">7:00 AM - 10:00
                            PM</span></h4>
                    <h4 class="col-10 mt-5 ps-3">Friday <span class="float-end">7:00 AM - 10:00
                            PM</span></h4>
                    <h4 class="col-10 mt-5 ps-3">Saturday <span class="float-end">7:00 AM - 10:00
                            PM</span></h4>
                    <h4 class="col-10 mt-5 ps-3">Sunday <span class="float-end">7:00 AM - 10:00
                            PM</span></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END -->
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
