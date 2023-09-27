@extends('layouts.calendar-layout')

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
        .header-day,
        .cal1 .clndr .clndr-controls {
            border: 0 !important;
        }
    </style>
@endsection

@section('content')
    <!--app-sidebar-->
    <div class="sticky">
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <div class="app-sidebar bg-primary">
            <div class="main-sidemenu">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group mt-4 ms-3 me-3">
                            <select name="listing" class="form-control text-white form-select select2" id="listingSelect">
                                <option value="" selected disabled>{{lang('Select your listing')}}</option>

                                <!-- Spaces -->
                                <optgroup label="Spaces">
                                    @foreach ($spaces as $space)
                                        <option value="{{ $space->id }}" data-type="space">{{ $space->space_title }}
                                        </option>
                                    @endforeach
                                </optgroup>

                                <!-- Divider -->
                                <option disabled>──────────</option>

                                <!-- Entertainment -->
                                <optgroup label="Entertainment">
                                    @foreach ($entertainments as $entertainment)
                                        <option value="{{ $entertainment->id }}" data-type="entertainment">
                                            {{ $entertainment->title }}</option>
                                    @endforeach
                                </optgroup>

                                <!-- Divider -->
                                <option disabled>──────────</option>

                                <!-- Services -->
                                <optgroup label="Services">
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}" data-type="service">{{ $service->title }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            </select>

                        </div>
                    </div>
                    <div class="offset-md-4 col-5">
                        <div class="form-group mt-4 text-md-end">
                            <a class="btn text-white operating-hours-link" href="">
                                <span class="operating-hours-text">{{lang('Operating Hours')}}</span>
                            </a>
                            <a class="modal-effect btn bg-white block-time-link" data-bs-effect="effect-scale"
                                data-bs-toggle="modal" data-id="" data-type="" href="#blockTimeModal">{{lang('Block Time')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/APP-SIDEBAR-->
    </div>
    <!--app-sidebar-->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- ROW-1 -->
    <div class="row mt-5">
        <div class="col-xl-8 col-lg-12 col-md-12">
            <div class="card" id="modal3">
                <div class="card-body border p-4 pb-5">
                    <h2 class="mx-4 fw-bolder" id="currentDate"></h2>
                </div>
                <div class="card-footer text-center">
                    <h5 class="fw-bolder text-success"><i class="fa fa-check"></i> {{lang('Space is available')}}</h5>
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
                            <p><i class="mdi mdi-circle text-primary p-2 fs-12"></i> {{lang('Inquiry')}}</p>
                        </div>
                        <div class="col-4">
                            <p><i class="mdi mdi-circle text-warning p-2 fs-12"></i> {{lang('Request')}}</p>
                        </div>
                        <div class="col-4">
                            <p><i class="mdi mdi-circle text-danger p-2 fs-12"></i> {{lang('Offer')}}</p>
                        </div>
                        <div class="col-4">
                            <p><i class="mdi mdi-circle text-success p-2 fs-12"></i> {{lang('Booking')}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="mt-3">
                                <p>{{lang('Updated 5 days ago')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card custom-card">
                <div class="card-header">
                    <h3>{{lang('External Calendar')}}</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 bg-light-gray pb-3">
                            <div class="">
                                <p class="p-3">{{lang('Increase bookings by keeping your
                                    calendar updated. Import your events
                                    into Eventopia.')}}</p>
                                <div class="">
                                    <button class="btn btn-primary w-100">{{lang('Get Started')}}</button>
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
                            <h3 class="mt-4 ps-3">{{lang('Operating Hours ')}}</h3>
                        </div>
                        <div class="col-6 text-end "><a class="btn mt-4"><i class="fa fa-edit fs-15"></i></a></div>
                    </div>

                    <hr style="border-top: 1px solid black">
                    <div class="operating-hours-container">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="blockTimeModal">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <div class="text-center m-auto">
                        <h4 class="modal-title fw-bolder">{{lang('Block time')}}</h4>
                        <p class="mx-2">{{lang('Your space will be marked unavailable.')}}</p>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add-block-time') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-5">
                                <div class="input-group">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                        </div><input type="date" name="start_time" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <h6 class="mt-3">{{lang('To')}}</h6>
                            </div>
                            <div class="col-5">
                                <div class="input-group">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                        </div><input type="date" name="end_time" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3 text-start">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="all_day">
                                    <span class="custom-control-label">{{lang('All Day')}}</span>
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-5 text-start">
                                <div class="form-group w-100">
                                    <label for="Title" class="form-label">{{lang('Title')}}</label>
                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="title" name="title">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="type" id="type">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <button class="btn w-100 btn-primary" type="submit">{{lang('Save')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END -->
@endsection

@section('scripts')

    @include('layouts.components.notification-scripts')
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

    <script>
        $(document).ready(function() {
            const listingSelect = $("#listingSelect");
            const operatingHoursContainer = $(".operating-hours-container");
            const currentDateElement = $("#currentDate");
            const operatingHoursLink = $(".operating-hours-link");
            const blockTimeLink = $(".block-time-link");

            listingSelect.on("change", function() {
                const selectedValue = $(this).val();
                const selectedType = $(this).find(":selected").data("type");
                operatingHoursLink.attr("data-id", selectedValue);
                operatingHoursLink.attr("data-type", selectedType);

                // Update data attributes of the Block Time link
                blockTimeLink.attr("data-id", selectedValue);
                blockTimeLink.attr("data-type", selectedType);

                // Update the data attributes of the link
                operatingHoursLink.attr("data-id", selectedValue);
                operatingHoursLink.attr("data-type", selectedType);

                // Construct the updated href
                const updatedHref =
                    "{{ route('operating-hours', ['id' => 'data-id', 'type' => 'data-type']) }}"
                    .replace('data-id', selectedValue)
                    .replace('data-type', selectedType);

                // Update the link's href attribute
                operatingHoursLink.attr("href", updatedHref);

                if (selectedValue && selectedType) {
                    $.ajax({
                        url: `get-operating-hours/${selectedValue}/${selectedType}`,
                        dataType: "json",
                        success: function(data) {
                            operatingHoursContainer.empty(); // Clear previous data

                            for (const day in data) {
                                const operatingHours = data[day];
                                const dayElement = $("<h4>").addClass("col-10 mt-5 ps-3").text(
                                    day);
                                const hoursElement = $("<span>").addClass("float-end");

                                if (operatingHours[0].radio === '0') {
                                    hoursElement.text("6:00 AM - 12:00 AM");
                                } else if (operatingHours[0].radio === '1') {
                                    hoursElement.text(
                                        `${operatingHours[0].start_time} - ${operatingHours[0].end_time}`
                                    );
                                } else {
                                    hoursElement.text("Closed");
                                }

                                dayElement.append(hoursElement);
                                operatingHoursContainer.append(dayElement);
                            }
                            // Set current date
                            const today = new Date();
                            const options = {
                                weekday: 'long',
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric'
                            };
                            currentDateElement.text(today.toLocaleDateString('en-US', options));
                        },
                        error: function(error) {
                            console.error(error);
                        }
                    });
                }
                operatingHoursLink.on("click", function(e) {
                    const selectedId = operatingHoursLink.attr("data-id");
                    const selectedType = operatingHoursLink.attr("data-type");

                    if (!selectedId || !selectedType) {
                        e.preventDefault(); // Prevent link navigation

                        // Show an error message or perform any other action
                        alert("Please select an option first.");
                    }
                });
                blockTimeLink.on("click", function() {
                    const blockTimeId = blockTimeLink.data("id");
                    const blockTimeType = blockTimeLink.data("type");

                    if (!blockTimeId || !blockTimeType) {
                        alert("Please select an option first.");
                    } else {
                        // Show the modal with the selected ID and Type
                        $("#blockTimeModal").modal("show");
                        // Update modal content with selected ID and Type
                        $("#id").val(blockTimeId);
                        $("#type").val(blockTimeType);
                    }
                });
            });
        });
    </script>
@endsection
