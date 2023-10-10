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
                            <h1 class="headingOne">{{ lang('Hello, ' . user_name()) }} </h1>
                            <h5 class="headingTwo d-block d-sm-none">{{ lang('Hello, ' . user_name()) }}</h5>
                            <p class="fs-sm-5 fs-6">{{ lang('Welcome Back!') }}</p>
                            <p class="fs-sm-5 fs-6">{{ lang('Seller Dashboard') }}</p>
                        </div>
                    </div>
                    <div class="position-absolute">
                        <a href="#" class="btn btn-white get_started_btn">{{ lang('Get Started') }}</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                    <div class="card mt-3 pending-booking-card">
                        <div class="card-body mt-3">
                            <div class="d-flex">
                                <div class="text-black mt-2">
                                    <h5 class="mb-2 number-font">{{ lang('Pending Booking Acceptance')}}</h5>
                                </div>
                                <div class="card-options">
                                    <img src="{{ asset('assets/images/icons/pending-file.png') }}" alt="">
                                </div>
                            </div>
                            <div class="mb-5 mt-3">
                                <p class="text-black mb-5">{{ @$pendingBookings }}</p>
                            </div>
                            <div class="row mt-5">
                                <div class="col-6">
                                    <img src="{{ asset('assets/images/icons/icon1.png') }}" alt="">
                                    <small>{{ lang('Recent Spaces') }}</small>
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('assets/images/icons/icon2.png') }}"
                                        alt=""><small>{{ lang('Other Spaces') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-center mb-2 mt-5">
                                <div class="btn-list">
                                    <a href="{{ route('pending-bookings') }}"
                                        class="btn btn-primary">{{ lang('Manage') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                    <div class="card mt-3 pending-booking-card">
                        <div class="card-body mt-3">
                            <div class="d-flex">
                                <div class="text-black mt-2">
                                    <h5 class="mb-2 number-font">{{ lang('Pending Quote Requests')}}</h5>
                                </div>
                                <div class="card-options">
                                    <img src="{{ asset('assets/images/icons/pending-file.png') }}" alt="">
                                </div>
                            </div>
                            <div class="mb-5 mt-3">
                                <p class="text-black mb-5">{{ @$pendingQuoteRequests }}</p>
                            </div>
                            <div class="row mt-5">
                                <div class="col-6">
                                    <img src="{{ asset('assets/images/icons/icon1.png') }}" alt="">
                                    <small>{{ lang('Recent Quotes') }}</small>
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('assets/images/icons/icon2.png') }}"
                                        alt=""><small>{{ lang('Other Quotes') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-center mb-2 mt-5">
                                <div class="btn-list">
                                    <a href="{{ route('pending-quote-requests') }}"
                                        class="btn btn-primary">{{ lang('Manage') }}</a>
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
                    <h3 class="number-font">{{ lang('Bookings') }}</h3>
                </div>
                <div class="card-body pt-0">
                    <div class="mt-2 row">
                        <div class="col-10 mt-4">
                            <h3 class="d-inline-block mb-2">{{ @$activeBookings ' / ' @$acceptedBookingCount }}</h3>
                            <p>{{ lang('Active Bookings / Upcomming Bookings')}}</p>
                            <div class="progress h-2 mt-2">
                                <div class="progress-bar bg-primary" style="width: {{ $activeBookingProgress !== null ? $activeBookingProgress : ($totalBookingsCount !== null ? $acceptedBookingCount/$totalBookingsCount*100 : $activeBookingProgress+$acceptedBookingCount/$totalBookingsCount*100) }}%;"
                                    role="progressbar"></div>
                            </div>
                        </div>
                        <div class="col-10 mt-4">
                            <h3 class="d-inline-block mb-2">{{ $pendingBookings }}</h3>
                            <p>{{ lang('Pending Bookings') }}</p>
                            <div class="progress h-2 mt-2">
                                <div class="progress-bar bg-primary" style="width: {{ $pendingProgress }}%;"
                                    role="progressbar"></div>
                            </div>
                        </div>
                        <div class="col-10 mt-4">
                            <h3 class="d-inline-block mb-2">{{ $cancelBookings }}</h3>
                            <p>{{ lang('Cancelled Booking') }}</p>
                            <div class="progress h-2 mt-2">
                                <div class="progress-bar bg-danger" style="width: {{ $CancelProgress }}%;"
                                    role="progressbar"></div>
                            </div>
                        </div>
                        <div class="col-10 mt-4">
                            <h3 class="d-inline-block mb-2">{{ $previousBookings }}</h3>
                            <p>{{ lang('Completed Booking') }}</p>
                            <div class="progress h-2 mt-2">
                                <div class="progress-bar bg-primary" style="width: {{ $PreviousProgress }}%;"
                                    role="progressbar"></div>
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <div style="margin-top: 40px;">
                                <a href="{{route('bookings',['type' => 'null','for' => 'seller'])}}" class="btn btn-primary text-white">{{lang('Manage')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card overflow-hidden">
                <div class="card-header pb-0 border-bottom-0">
                    <h3 class="number-font">{{ lang('Total Bookings') }}</h3>
                    <div class="card-options">
                        <h6>{{ lang('Total: ')  }} {{$totalBookingsCount}}</h6>
                    </div>
                </div>
                <div class="card-body p-0 mt-5">
                    <div class="table-responsive">
                        <table class="table border text-nowrap text-md-nowrap mb-0">
                            <thead class="bg-primary">
                                <tr>
                                    <th class="text-white ml-2">{{ lang('Category') }}</th>
                                    <th class="text-white">{{ lang('Date') }}</th>
                                    <th class="text-white">{{ lang('Price') }}</th>
                                    <th class="text-white">{{ lang('Status') }}</th>
                                </tr>
                            </thead>
                            @forelse ($totalBookings as $booking)
                                <tbody>
                                    <tr>
                                        <td>{{ lang($booking->type) }}</td>
                                        <td>{{ lang($booking->date) }}</td>
                                        <td>{{ lang($booking->amount) }}</td>
                                        <td>{{ lang($booking->status == 0 ? 'Pending' : ($booking->status == 1 ? 'Review' : ($booking->status == 2 ? 'Accepted' : ($booking->status == 3 ? lang('Cancelled') : ($booking->status == 4 ? lang('Completed') : lang('Active')))))) }}
                                        </td>
                                    </tr>

                                </tbody>
                            @empty
                                <div>
                                    <tr>
                                        <td class="text-center">{{ lang('No Record Found') }}</td>
                                    </tr>
                                </div>
                            @endforelse
                        </table>
                    </div>
                    <hr>
                    <div class="col-12 text-center">
                        <div class="mb-3">
                            <a href="{{route('bookings',['type' => 'null','for' => 'seller'])}}" class="btn btn-primary text-white">{{ lang('Manage') }}</a>
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
                                    <h3 class="mb-2 number-font">{{lang('Booking accepted')}}</h3>
                                    <p class="text-black mb-0">{{lang('Total :')}} {{$acceptedBookingCount ?? 0}}</p>
                                </div>
                                <div class="card-options">
                                    <i class="fa fa-calendar-check-o text-primary fa-3x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <div class="mb-3">
                                <a href="{{route('bookings',['type' => 'active','for' => 'seller'])}}" class="btn btn-primary text-white">{{ lang('View Details') }}</a>
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
                                    <h3 class="mb-2 number-font">{{lang('Booking cancelled')}}</h3>
                                    <p class="text-black mb-0">{{lang('Total: ')}} {{$cancelBookings ?? 0}}</p>
                                </div>
                                <div class="card-options">
                                    <i class="fa fa-calendar-times-o text-primary fa-3x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <div class="mb-3">
                                <a href="{{route('bookings',['type' => 'cancel','for' => 'seller'])}}" class="btn btn-primary text-white">{{lang('View Details')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card bg-white img-card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-black">
                                    <h3 class="mb-2 number-font">{{lang('Pending Booking Actions')}}</h3>
                                    <p class="text-black mb-0">{{lang('Total: ')}} {{@$pendingBookings ?? 0}}</p>
                                </div>
                                <div class="card-options">
                                    <i class="fa fa-calendar-times-o text-primary fa-3x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <div class="mb-3">
                                <a href="{{route('bookings',['type' => 'pending','for' => 'seller'])}}" class="btn btn-primary text-white">{{ lang('View Details') }}</a>
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
