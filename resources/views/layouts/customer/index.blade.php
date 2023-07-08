@extends('layouts.app')

    @section('styles')
    <style>
        .app-sidebar{
            z-index:9999;
        }
        .get_started_btn{
            position: relative;
            top: -84px;
            left: 60px;
            z-index: 1;
        }
        .welcome_card{
            position: relative;
            top: -280px;
            left: 60px;
            z-index: 1;
        }
    </style>
    @endsection

        @section('content')
                        <!-- ROW-1 -->
                        <div class="row mt-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-6">
                                        <img src="{{asset('assets/images/brand/dashboard-img.png')}}" width="100%" height="100%" alt="">
                                        <div class="position-absolute text-white">
                                            <div class="welcome_card">
                                                <h1>Hello, John Doe</h1>
                                                <p class="fs-5">Welcome Back!</p>
                                            </div>
                                        </div>
                                        <div class="position-absolute">
                                            <a href="#" target="#" class="btn btn-white get_started_btn">Get Started</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                                        <div class="card mt-3">
                                            <div class="card-header pb-0 border-bottom-0">
                                                <h3>Space</h3>
                                                <div class="card-options">
                                                    <img src="{{asset('assets/images/icons/service_icon2.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="mt-2 row">
                                                    <div class="col-6">
                                                        <h3 class="d-inline-block mb-2">46</h3>
                                                        <p>Upcoming Bookings</p>
                                                        <div class="progress h-2 mt-2">
                                                            <div class="progress-bar bg-primary" style="width: 50%;" role="progressbar"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <h3 class="d-inline-block mb-2">89</h3>
                                                        <p>Cancelled Booking</p>
                                                        <div class="progress h-2 mt-2">
                                                            <div class="progress-bar bg-danger" style="width: 50%;" role="progressbar"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="mt-2 row">
                                                    <div class="col-6">
                                                        <h3 class="d-inline-block mb-2">49</h3>
                                                        <p>Previous Booking</p>
                                                        <div class="progress h-2 mt-2">
                                                            <div class="progress-bar bg-primary" style="width: 50%;" role="progressbar"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 ml-3 text-end">
                                                        <div style="margin-top: 40px;">
                                                            <a href="#" target="#" class="btn btn-primary text-white">Manage</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                                        <div class="card mt-3">
                                            <div class="card-header pb-0 border-bottom-0">
                                                <h3>Services</h3>
                                                <div class="card-options">
                                                    <img src="{{asset('assets/images/icons/service_icon.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="mt-2 row">
                                                    <div class="col-6">
                                                        <h3 class="d-inline-block mb-2">46</h3>
                                                        <p>Upcoming Bookings</p>
                                                        <div class="progress h-2 mt-2">
                                                            <div class="progress-bar bg-primary" style="width: 50%;" role="progressbar"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <h3 class="d-inline-block mb-2">89</h3>
                                                        <p>Cancelled Booking</p>
                                                        <div class="progress h-2 mt-2">
                                                            <div class="progress-bar bg-danger" style="width: 50%;" role="progressbar"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="mt-2 row">
                                                    <div class="col-6">
                                                        <h3 class="d-inline-block mb-2">49</h3>
                                                        <p>Previous Booking</p>
                                                        <div class="progress h-2 mt-2">
                                                            <div class="progress-bar bg-primary" style="width: 50%;" role="progressbar"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 ml-3 text-end">
                                                        <div style="margin-top: 40px;">
                                                            <a href="#" target="#" class="btn btn-primary text-white">Manage</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                        <h3>Entertainment & Talents</h3>
                                        <div class="card-options">
                                            <img src="{{asset('assets/images/icons/talent_icon.png')}}" alt="">
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
                                                    <a href="#" target="#" class="btn btn-primary text-white">Manage</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12">
                                <div class="card overflow-hidden">
                                    <div class="card-header pb-0 border-bottom-0">
                                        <h3>Total Bookings</h3>
                                        <div class="card-options">
                                            <div class="btn-group mt-2 mb-2">
                                                <button type="button" class="btn btn-outline-primary btn-pill dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> Select <span class="fa fa-angle-down"></span> </button>
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
                                                <thead class="table-primary">
                                                    <tr>
                                                        <th>Space</th>
                                                        <th>Date</th>
                                                        <th>Price</th>
                                                        <th>Location</th>
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Browser Usage</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="browser-stats">
                                            <div class="row mb-4">
                                                <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                                    <img src="{{asset('assets/images/browsers/chrome.svg')}}" class="img-fluid"
                                                        alt="img">
                                                </div>
                                                <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Chrome</h6>
                                                        <h6 class="fw-semibold mb-1">35,502 <span
                                                                class="text-success fs-11">(<i
                                                                    class="fe fe-arrow-up"></i>12.75%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-primary" style="width: 70%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                                    <img src="{{asset('assets/images/browsers/opera.svg')}}" class="img-fluid"
                                                        alt="img">
                                                </div>
                                                <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Opera</h6>
                                                        <h6 class="fw-semibold mb-1">12,563 <span
                                                                class="text-danger fs-11">(<i
                                                                    class="fe fe-arrow-down"></i>15.12%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-secondary" style="width: 40%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                                    <img src="{{asset('assets/images/browsers/ie.svg')}}" class="img-fluid"
                                                        alt="img">
                                                </div>
                                                <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">IE</h6>
                                                        <h6 class="fw-semibold mb-1">25,364 <span
                                                                class="text-success fs-11">(<i
                                                                    class="fe fe-arrow-down"></i>24.37%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-success" style="width: 50%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                                    <img src="{{asset('assets/images/browsers/firefox.svg')}}" class="img-fluid"
                                                        alt="img">
                                                </div>
                                                <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Firefox</h6>
                                                        <h6 class="fw-semibold mb-1">14,635 <span
                                                                class="text-success fs-11">(<i
                                                                    class="fe fe-arrow-down"></i>15.63%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-danger" style="width: 50%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                                    <img src="{{asset('assets/images/browsers/edge.svg')}}" class="img-fluid"
                                                        alt="img">
                                                </div>
                                                <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Edge</h6>
                                                        <h6 class="fw-semibold mb-1">15,453 <span
                                                                class="text-danger fs-11">(<i
                                                                    class="fe fe-arrow-down"></i>23.70%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-warning" style="width: 10%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                                    <img src="{{asset('assets/images/browsers/safari.svg')}}" class="img-fluid"
                                                        alt="img">
                                                </div>
                                                <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Safari</h6>
                                                        <h6 class="fw-semibold mb-1">10,054 <span
                                                                class="text-success fs-11">(<i
                                                                    class="fe fe-arrow-up"></i>11.04%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-info" style="width: 40%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                                    <img src="{{asset('assets/images/browsers/netscape.svg')}}" class="img-fluid"
                                                        alt="img">
                                                </div>
                                                <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Netscape</h6>
                                                        <h6 class="fw-semibold mb-1">35,502 <span
                                                                class="text-success fs-11">(<i
                                                                    class="fe fe-arrow-up"></i>12.75%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-green" style="width: 30%;"
                                                            role="progressbar"></div>
                                                    </div>
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
    <script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{asset('assets/plugins/circle-progress/circle-progress.min.js')}}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2.js')}}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/chart/rounded-barchart.js')}}"></script>
    <script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{asset('assets/js/apexcharts.js')}}"></script>
    <script src="{{asset('assets/plugins/apexchart/irregular-data-series.js')}}"></script>

    <!-- C3 CHART JS -->
    <script src="{{asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>

    <!-- CHART-DONUT JS -->
    <script src="{{asset('assets/js/charts.js')}}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{asset('assets/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/chart.flot.sampledata.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/dashboard.sampledata.js')}}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{asset('assets/js/index.js')}}"></script>
    <script src="{{asset('assets/js/index1.js')}}"></script>

    @endsection
