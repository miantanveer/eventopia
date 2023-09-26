@extends('layouts.app')

@section('styles')
    <style>
        .app-sidebar {
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
            top: -230px;
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
    </style>
@endsection

@section('content')
    <!-- ROW-1 -->
    <div class="row mt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-6 ">
                    <img src="{{ asset('assets/images/brand/DESHBORD-IMG.png') }}" width="100%" height="100%" alt="">
                    <div class="position-absolute text-white">
                        <div class="welcome_card">
                            <h1 class="headingOne">{{ lang('Hello, ' . user_name()) }} </h1>
                            <h5 class="headingTwo d-block d-sm-none">{{ lang('Hello, ' . user_name()) }}</h5>
                            <p class="fs-sm-5 fs-6">{{ lang('Welcome Back!') }}</p>
                            <p class="fs-sm-5 fs-6">{{ lang('Customer Dashboard') }}</p>
                        </div>
                    </div>
                    <div class="position-absolute">
                        <a href="#" class="btn btn-white get_started_btn">{{ lang('Get Started') }}</a>
                    </div>
                </div>


                <div class="col-xl-6 col-lg-12 col-md-12  mt-4">
                    <div class="card overflow-hidden">
                        <div class="card-header pb-0 border-bottom-0">
                            <h3 class="number-font">{{ lang('Latest Bookings') }}</h3>
                            <div class="card-options">
                                <h6>{{ lang('Total: ') }}{{ $totalBookingsCount }}</h6>
                            </div>
                        </div>
                        <div class="card-body p-0 ">
                            <div class="table-responsive">
                                <table class="table border text-nowrap text-md-nowrap mb-0">
                                    <thead class="bg-custom-black">
                                        <tr>
                                            <th class="text-white ml-2">{{ lang('Category') }}</th>
                                            <th class="text-white">{{ lang('Date') }}</th>
                                            <th class="text-white">{{ lang('Price') }}</th>
                                            <th class="text-white">{{ lang('Status') }}</th>
                                        </tr>
                                    </thead>

                                    @forelse ($totalBookings as $totalBooking)
                                        <tbody>
                                            <tr>
                                                <td>{{ lang($totalBooking->type) }}</td>
                                                <td>{{ $totalBooking->date }}</td>
                                                <td>{{ $totalBooking->amount }}</td>
                                                <td>{{ $totalBooking->status == 1 ? lang('Upcoming') : ($totalBooking->status == 2 ? lang('Accepted') : ($totalBooking->status == 3 ? lang('Cancelled') : ($totalBooking->status == 4 ? lang('Completed') : lang('Active')))) }}
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
                                    <a href="{{ route('bookings', ['type' => 'null', 'for' => 'null']) }}"
                                        class="btn bg-custom-black text-white">{{ lang('Manage') }}</a>
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
            <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                <div class="card mt-3">
                    <div class="card-header pb-0 border-bottom-0">
                        <h3 class="number-font  text-truncate">{{ lang('Space') }}</h3>
                        <div class="card-options">
                            <img src="{{ asset('assets/images/icons/service_icon_dark.png') }}" alt="">
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="mt-2 row">
                            <div class="col-6">
                                <h3 class="d-inline-block mb-2">{{ lang($pendingSpaceBookings) }}</h3>
                                <p>{{ lang('Pending Bookings') }}</p>
                                <div class="progress h-2 mt-2">
                                    <div class="progress-bar bg-primary" style="width: {{ $spacePendingProgress }}%;"
                                        role="progressbar"></div>
                                </div>
                            </div>
                             <div class="col-6">
                                <h5 class="d-inline-block mb-2">{{ lang($activeSpaceBookings) }}</h5>
                                <p>{{ lang('Accepted Booking') }}</p>
                                <div class="progress h-2 mt-2">
                                    <div class="progress-bar bg-primary" style="width: {{ $spaceActiveProgress }}%;"
                                        role="progressbar"></div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="mt-2 row">
                              <div class="col-6">
                                <h3 class="d-inline-block mb-2">{{ lang($cancelSpaceBookings) }}</h3>
                                <p>{{ lang('Cancelled Booking') }}</p>
                                <div class="progress h-2 mt-2">
                                    <div class="progress-bar bg-danger" style="width: {{ $spaceCancelProgress }}%;"
                                        role="progressbar"></div>
                                </div>
                            </div>


                            <div class="col-6">
                                <h3 class="d-inline-block mb-2">{{ lang(@$completedSpaceBookings) }}</h3>
                                <p>{{ lang('Completed Booking') }}</p>
                                <div class="progress h-2 mt-2">
                                    <div class="progress-bar bg-primary" style="width: {{ @$spaceCompletedProgress }}%;"
                                        role="progressbar"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 ml-3 text-center">
                                <div>
                                    <a href="{{ route('bookings', ['type' => 'space', 'for' => 'null']) }}"
                                        class="btn bg-custom-black text-white">{{ lang('Manage') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                <div class="card mt-3">
                    <div class="card-header pb-0 border-bottom-0">
                        <h3 class="number-font  text-truncate">{{ lang('Entertainment & Talents') }}</h3>

                        <div class="card-options">
                            <img src="{{ asset('assets/images/icons/talent_icon_dark.png') }}" alt="">
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="mt-2 row">
                            <div class="col-6">
                                <h3 class="d-inline-block mb-2">{{ lang($pendingEnterBookings) }}</h3>
                                <p>{{ lang('Pending Bookings') }}</p>
                                <div class="progress h-2 mt-2">
                                    <div class="progress-bar bg-primary" style="width: {{ $enterPendingProgress }}%;"
                                        role="progressbar"></div>
                                </div>
                            </div>
                           <div class="col-6">
                                <h3 class="d-inline-block mb-2">{{ lang($activeEnterBookings) }}</h3>
                                <p>{{ lang('Accepted Booking') }}</p>
                                <div class="progress h-2 mt-2">
                                    <div class="progress-bar bg-danger" style="width: {{ $enterActiveProgress }}%;"
                                        role="progressbar"></div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="mt-2 row">
                             <div class="col-6">
                                <h3 class="d-inline-block mb-2">{{ lang($cancelEnterBookings) }}</h3>
                                <p>{{ lang('Cancelled Booking') }}</p>
                                <div class="progress h-2 mt-2">
                                    <div class="progress-bar bg-primary" style="width: {{ $enterCancelProgress }}%;"
                                        role="progressbar"></div>
                                </div>
                            </div>

                            <div class="col-6">
                                <h3 class="d-inline-block mb-2">{{ lang(@$completedEnterBookings) }}</h3>
                                <p>{{ lang('Completed Booking') }}</p>
                                <div class="progress h-2 mt-2">
                                    <div class="progress-bar bg-primary" style="width: {{ @$enterCompletedProgress }}%;"
                                        role="progressbar"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 ml-3 text-center">
                                <div>
                                    <a href="{{ route('bookings', ['type' => 'entertainment', 'for' => 'null']) }}"
                                        class="btn bg-custom-black text-white">{{ lang('Manage') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                <div class="card mt-3">
                    <div class="card-header pb-0 border-bottom-0">
                        <h3 class="number-font text-truncate">{{ lang('Services') }}</h3>
                        <div class="card-options">
                            <img src="{{ asset('assets/images/icons/services_icon-dark.png') }}" alt="">
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="mt-2 row">
                            <div class="col-6">
                                <h3 class="d-inline-block mb-2">{{ lang($pendingServiceBookings) }}</h3>
                                <p>{{ lang('Pending Bookings') }}</p>
                                <div class="progress h-2 mt-2">
                                    <div class="progress-bar bg-primary" style="width: {{ $servicePendingProgress }}%;"
                                        role="progressbar"></div>
                                </div>
                            </div>
                             <div class="col-6">
                                <h3 class="d-inline-block mb-2">{{ lang($activeServiceBookings) }}</h3>
                                <p>{{ lang('Accepted Booking') }}</p>
                                <div class="progress h-2 mt-2">
                                    <div class="progress-bar bg-primary" style="width: {{ $serviceActiveProgress }}%;"
                                        role="progressbar"></div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="mt-2 row">
                           <div class="col-6">
                                <h3 class="d-inline-block mb-2">{{ $cancelServiceBookings }}</h3>
                                <p>{{ lang('Cancelled Booking') }}</p>
                                <div class="progress h-2 mt-2">
                                    <div class="progress-bar bg-danger" style="width: {{ $serviceCancelProgress }}%;"
                                        role="progressbar"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h3 class="d-inline-block mb-2">{{ lang(@$completedServiceBookings) }}</h3>
                                <p>{{ lang('Completed Booking') }}</p>
                                <div class="progress h-2 mt-2">
                                    <div class="progress-bar bg-primary"
                                        style="width: {{ @$serviceCompletedProgress }}%;" role="progressbar"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 ml-3 text-center">
                                <div>
                                    <a href="{{ route('bookings', ['type' => 'service', 'for' => 'null']) }}"
                                        class="btn bg-custom-black text-white">{{ lang('Manage') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="row mt-3">
                    <div class="col-12">
                        {{-- <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3"> --}}
                        <div class="card bg-white img-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="text-black">
                                        <h4 class="mb-2 number-font">{{ lang('Active Bookings') }}</h4>
                                        <p class="text-black mb-0">{{ lang('Total:') . $activeBookingCount }}</p>
                                    </div>
                                    <div class="card-options">
                                        <i class="fa fa-calendar-check-o text-dark fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12  text-center">
                                <div class="mb-3">
                                    <a href="{{ route('bookings', ['type' => 'active', 'for' => 'null']) }}"
                                        class="btn bg-custom-black text-white">{{ lang('View Details') }}</a>
                                </div>
                            </div>
                        </div>
                        {{--
                </div> --}}
                    </div>
                    <div class="col-12">
                        <div class="card bg-white img-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="text-black">
                                        <h4 class="mb-2 number-font">{{ lang('Cancelled Bookings') }}</h4>
                                        <p class="text-black mb-0">{{ lang('Total:') . $cancelBookingCount }}</p>
                                    </div>
                                    <div class="card-options">
                                        <i class="fa fa-calendar-times-o text-dark fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12  text-center">
                                <div class="mb-3">
                                    <a href="{{ route('bookings', ['type' => 'cancel', 'for' => 'null']) }}"
                                        class="btn bg-custom-black text-white">{{ lang('View Details') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <input type="hidden" id="user_id" value="{{ user_id() }}">
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
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        Pusher.logToConsole = true;
        var pusher = new Pusher('2cd8b23ab488aef87078', {
            cluster: 'ap3'
        });

        var channel = pusher.subscribe('notification-channel');
        channel.bind('notification-event', function(data) {
            // alert(JSON.stringify(data));
            var user = $('#user_id').val();
            if (user == data.id && data.message == false) {
                notif({
                    type: success,
                    msg: 'You just received a quote request',
                    autohide: true
                });
            }
            // $('#quote-modal').modal('show');
            console.log(data);

        });
    </script>
@endsection
