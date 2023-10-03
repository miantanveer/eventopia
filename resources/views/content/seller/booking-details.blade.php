@extends('layouts.admin')
@section('css-styles')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('styles')
    <style>
        .line {
            border-top: 1px solid black;
            position: relative;
            top: 165px;
            z-index: 9999;
        }

        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel .owl-nav button.owl-next {
            z-index: rewert;
        }

        @media (min-width: 576px) {
            .content-button {
                position: absolute;
                right: 0;
                top: 70px;
            }
        }

        @media (min-width: 576px) {
            .profile_img_res {
                max-width: 50px !important;
            }
        }

        @media (min-width: 0) and (max-width: 575px) {
            .profile_img_res {
                max-width: 35px !important;
            }
        }

        @media (min-width: 0) and (max-width: 300px) {
            .line {
                top: 190px;
            }
        }

        @media (min-width: 0) and (max-width: 400px) {
            .reply-content {
                max-width: 100% !important;
                flex: 0 0 100%;
                margin-top: 10px;
            }

            .reply-content-heading {
                padding-left: 20px;
            }

            .empty {
                display: none;
            }

            .booking-heading {
                font-size: 20px;
                font-weight: 450;
            }
        }
    </style>
@endsection

@section('content')

    {{-- @dd(@$booking) --}}
    @if (@$type == 'entertainment')
        @php
            $lat = @$entertainment->lat;
            $lng = @$entertainment->lng;
            $title = @$entertainment->title;
        @endphp
        <div class="row row-sm mt-5">
            <div class="col-xl-8 col-lg-12 col-md-12">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body p-3">
                        <a href="javascript:void(0)"><img
                                src="{{ @$entertainment->entertainmentImages[0]->image ?? asset('assets/images/users/spaces/4.jpg') }}"
                                alt="image not found" class="br-5 w-100"></a>
                    </div>
                    <div class="card-body pt-0 h-100">
                        <div class="owl-carousel owl-carousel-icons2 d-flex">
                            @foreach (@$entertainment->entertainmentImages as $entImage)
                                <div class="item">
                                    <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                        <img src="{{ asset($entImage->image) }}" alt="img">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer">
                        <h2 class="fw-bold text-dark">{{ lang(@$entertainment->title) }}</h2>
                        <p><i
                                class="text-primary side-menu__icon fe fe-map-pin"></i>{{ ' ' . lang(@$entertainment->address) }}
                        </p>
                        <hr>
                        <div class="mt-5">
                            <h3 class="text-dark">
                                {{ lang('About the Entertainment') }}
                            </h3>
                            <p>{{ lang(@$entertainment->arrival) }}</p>
                        </div>
                        <hr>
                        <div class="mt-5">
                            <h3 class="text-dark">{{ lang('Location') }}</h3>
                            <div style="height: 300px;" id="map">
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="mt-5">
                            <h3 class="text-dark">
                                {{ lang('Cancellation Policy') }}
                            </h3>
                            <p>{{ lang(@$entertainment->cancellation_policy) }}</p>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="mt-3 text-center">
                            <h2>{{ lang('SAR' . @$entertainment->entertainmentActivities[0]->hourly_rate) }}/hr
                            </h2>
                            <p>{{ @$entertainment->entertainmentActivities[0]->max_hours }}
                                {{ lang('hour minimum') }}
                            </p>
                        </div>
                        <div class="">
                            <h4>{{ @$entertainment->entertainmentActivities[0]->discount }}
                                {{ lang('hour discount') }} <i class="mdi mdi-alert-circle-outline"></i>
                            </h4>
                        </div>
                        <hr>
                        <div class="">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h5 class="text-primary">{{ lang('Booking Detail') }}</h5>
                                </div>
                                @php
                                    $array1 = $entertainment->entertainmentActivities->toArray();
                                @endphp
                                <div class="row ">
                                    <div class="col-6">
                                        <h6 class="fw-bolder">{{ lang('Max Amount : ') }}</h6>
                                    </div>
                                    <div class="col-6  text-end"><span
                                            class="badge rounded-pill bg-primary badge-sm me-1 mb-1 mt-1">{{ max(array_column($array1, 'hourly_rate')) . ' SAR' }}</span>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-6">
                                        <h6 class="fw-bolder">{{ lang('Max Hour :') }}</h6>
                                    </div>
                                    <div class="col-6  text-end"><span
                                            class="badge rounded-pill bg-primary badge-sm me-1 mb-1 mt-1">{{ max(array_column($array1, 'max_hours')) }}</span>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-6">
                                        <h6 class="fw-bolder">{{ lang('Max Guests :') }}</h6>
                                    </div>
                                    <div class="col-6  text-end">
                                        <span
                                            class="badge rounded-pill bg-primary badge-sm me-1 mb-1 mt-1">{{ max(array_column($array1, 'guest_capacity')) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $operatingHours = []; // Initialize the array
                            $enabledDays = [];
                            $weekDays = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
                            foreach (@$entertainment->operatingDays as $operatingDay) {
                                $dayOfWeek = strtolower($operatingDay->week_day);
                                $operatingHours[$dayOfWeek] = []; // Initialize the array for the day
                                foreach (@$operatingDay->operatingHours as $operatingHour) {
                                    $operatingHours[$dayOfWeek][] = [
                                        'start_time' => $operatingHour->start_time,
                                        'end_time' => $operatingHour->end_time,
                                        'radio' => $operatingHour->radio,
                                    ];
                                }

                                $numericDay = array_search($dayOfWeek, $weekDays);
                                if ($numericDay !== false) {
                                    $enabledDays[] = $numericDay;
                                }
                            }
                        @endphp
                    </div>
                </div>
                <div class="card custom-card">
                    <hr class="px-0 line">
                    <div class="card-body pb-0">
                        <div class="text-center">
                            <h3 class="mb-3 booking-heading">{{ lang('Included in your booking') }}</h3>
                        </div>
                        <h4 class="mt-5 fw-bold">{{ lang('Amentities') }}</h4>
                        <div class="row mb-6">
                            @foreach (@$entertainment->entertainmentActivities[0]->entActivityAmenity as $entAmenity)
                                <div class="col-6">
                                    <p class="">{{ lang(@$entAmenity->activity->name) }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card custom-card">
                    <div>
                        <h3 class="mt-4 ps-3">{{ lang('Operating Hours') }}</h3>
                        <hr style="border-top: 1px solid black">
                        @foreach (@$entertainment->operatingDays as $operatingDay)
                            <h4 class="col-sm-10 mt-5 ps-3">{{ $operatingDay->week_day }} <span
                                    class="float-end">{{ $operatingDay->operatingHours[0]->radio === '1'
                                        ? $operatingDay->operatingHours[0]->start_time . ' - ' . $operatingDay->operatingHours[0]->end_time
                                        : '6 : 00 AM - 12 AM' }}</span>
                            </h4>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @elseif(@$type == 'service')
        @php
            $lat = @$service->lat;
            $lng = @$service->lng;
            $title = @$service->title;
        @endphp
        <div class="row row-sm mt-5">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body p-3">
                        <a href="javascript:void(0)"><img src="{{ asset(@$service->serviceImages[0]->image) }}"
                                alt="img" class="br-5 w-100"></a>
                    </div>
                    <div class="card-body pt-0 h-100">
                        <div class="owl-carousel owl-carousel-icons2 d-flex">
                            @foreach (@$service->serviceImages as $value)
                                <div class="item">
                                    <div class="card  overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                        <img src="{{ asset(@$value->image) }}" alt="img">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer">
                        <h2 class="fw-bold text-dark">{{ lang('Modern and budget friendly Service') }}</h2>
                        <p><i class="text-primary side-menu__icon fe fe-map-pin"></i>{{ @$service->address }}</p>
                        <hr class="border-3">
                        <div class="mt-5">
                            <h3 class="text-dark">
                                {{ lang('About this Service') }}
                            </h3>
                            <p>{{ @$service->description }}</p>
                        </div>
                        <hr class="border-3">
                        <div class="mt-5">
                            <h3 class="text-dark mb-3">
                                {{ lang('Details') }}
                            </h3>
                            <div class="row">

                                <div class="col-6">
                                    <h5 class="text-dark">{{ lang('Planning') }}</h5>
                                    <p>{{ @$service->planning }}</p>
                                </div>
                                <div class="col-6">
                                    <h5 class="text-dark">{{ @$service->title }}</h5>
                                    <p>{{ @$service->activities }}</p>
                                </div>
                            </div>

                        </div>
                        <hr class="border-3">
                        <div class="mt-5">
                            <h3 class="text-dark mb-3">
                                {{ lang('Booking Details') }}
                            </h3>
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="fw-bolder">{{ lang('Amount') }}</h6>
                                </div>
                                <div class="col-6  text-end">{{ lang(@$service->price) . ' SAR' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif (@$type == 'space')
        @php
            $lat = @$space->lat;
            $lng = @$space->lng;
            $title = @$space->space_title;
        @endphp
        <div class="row row-sm mt-5">
            <div class="col-xl-8 col-lg-12 col-md-12">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body p-3">
                        <a href="javascript:void(0)"><img
                                src="{{ @$space->spaceImages[0]->image ?? asset('assets/images/users/spaces/4.jpg') }}"
                                alt="image not found" class="br-5 w-100"></a>
                    </div>
                    <div class="card-body pt-0 h-100">
                        <div class="owl-carousel owl-carousel-icons2 d-flex">
                            @foreach (@$space->spaceImages as $spaceImage)
                                <div class="item">
                                    <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                        <a href="#"><img src="{{ $spaceImage->image }}" alt="img"></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer">
                        <h2 class="fw-bold text-dark">{{ @$space->space_title }}</h2>
                        <p><i class="text-primary side-menu__icon fe fe-map-pin"></i>{{ ' ' . @$space->address }}
                        </p>
                        <hr>
                        <div class="mt-5">
                            <h3 class="text-dark">
                                {{ lang('About the space') }}
                            </h3>
                            <p>{{ @$space->description }}</p>
                        </div>
                        <div class="mt-5">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            {{ lang('Parking') }}
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4 class="text-dark">{{ lang('Parking options') }}</h4>
                                            <p>
                                                @foreach (@$space->spaceHaveParkingOptions as $parkingOption)
                                                    {{ @$parkingOption->option . ',' }}
                                                @endforeach
                                            </p>
                                            <h4 class="text-dark">{{ lang('Parking description') }}</h4>
                                            <p>{{ @$space->parking_description ?? 'Empty' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            {{ lang('House Rules') }}
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>{{ @$space->space_rules }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="mt-5">
                            <h3 class="text-dark">{{ lang('Location') }}</h3>
                            <div style="height: 300px;" id="map">
                            </div>
                        </div>
                        <hr>
                        <div class="mt-5">
                            <h3 class="text-dark">
                                {{ lang('Health and Safety Measures') }}
                            </h3>
                            @foreach (@$space->spaceHaveSafetyMeasures as $safetyMeasure)
                                <p>{{ $loop->iteration . ' ' . $safetyMeasure->safety_measure_options }}</p>
                            @endforeach
                        </div>
                        <div class="mt-5">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            {{ lang('Cleaning protocol') }}
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>{{ @$space->cleaning_process }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="mt-5">
                            <h3 class="text-dark">
                                {{ lang('Cancellation Policy') }}
                            </h3>
                            <h5 class="text-dark">{{ @$space->cancellationPolicy->title }}</h5>
                            <p>{{ @$space->cancellationPolicy->description }}</p>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="mt-3 text-center">
                            <h2>SAR {{ @$space->spaceHaveActivities[0]->rate_per_hour }} {{ lang('/hr') }}</h2>
                            <p>{{ @$space->spaceHaveActivities[0]->minimum_hour }} {{ lang('hour minimum') }}</p>
                        </div>
                        <hr>
                        <div class="">
                            <div class="row">
                                <div class="col-7">
                                    <h4>{{ @$space->spaceHaveActivities[0]->discount }}
                                        {{ lang('hour discount') }} <i class="mdi mdi-alert-circle-outline"></i>
                                    </h4>
                                </div>
                                <div class="col-3 offset-2">
                                </div>
                            </div>
                        </div>
                        <hr>
                        @php
                            $operatingHours = []; // Initialize the array
                            $enabledDays = [];
                            $weekDays = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
                            // Assuming @$booking->space->operatingDays is a collection of operating days for the space
                            foreach (@$space->operatingDays as $operatingDay) {
                                $dayOfWeek = strtolower($operatingDay->week_day);
                                $operatingHours[$dayOfWeek] = []; // Initialize the array for the day

                                // Populate the operating hours for the day
                                foreach (@$operatingDay->operatingHours as $operatingHour) {
                                    $operatingHours[$dayOfWeek][] = [
                                        'start_time' => $operatingHour->start_time,
                                        'end_time' => $operatingHour->end_time,
                                        'radio' => $operatingHour->radio,
                                    ];
                                }

                                $numericDay = array_search($dayOfWeek, $weekDays);
                                if ($numericDay !== false) {
                                    $enabledDays[] = $numericDay;
                                }
                            }
                        @endphp
                        <div class="">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h5 class="text-primary">{{ lang('Booking Detail') }}</h5>
                                </div>
                                <hr class="border-3">
                                <div class="">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            @php
                                                $array = $space->spaceHaveActivities->toArray();
                                            @endphp
                                            <div class="row ">
                                                <div class="col-6">
                                                    <h6 class="fw-bolder">{{ lang('Max Amount : ') }}</h6>
                                                </div>
                                                <div class="col-6  text-end">
                                                    <span
                                                        class="badge rounded-pill bg-primary badge-sm me-1 mb-1 mt-1">{{ max(array_column($array, 'rate_per_hour')) . ' SAR' }}</span>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-6">
                                                    <h6 class="fw-bolder">{{ lang('Minimum Hour : ') }}</h6>
                                                </div>
                                                <div class="col-6  text-end">
                                                    <span
                                                        class="badge rounded-pill bg-info badge-sm me-1 mb-1 mt-1">{{ min(array_column($array, 'minimum_hour')) }}</span>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-6">
                                                    <h6 class="fw-bolder">{{ lang('Max Guests : ') }}</h6>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <span
                                                        class="badge rounded-pill bg-warning badge-sm me-1 mb-1 mt-1">{{ max(array_column($array, 'max_guests')) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card custom-card">
                    <div class="card-body pb-0">
                        <div class="text-center">
                            <h3 class="mb-3 booking-heading">{{ lang('Included in your booking') }}</h3>
                        </div>
                        <h4 class="mt-5 fw-bold">{{ lang('Amentities') }}</h4>
                        <div class="row mb-6">
                            @foreach (@$space->spaceHaveActivities[0]->spaceAmenities as $spaceAmenity)
                                <div class="col-6">
                                    <p class="">{{ $spaceAmenity->name }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card custom-card">
                    <div>
                        <h3 class="mt-4 ps-3">{{ lang('Operating Hours') }}</h3>
                        <hr style="border-top: 1px solid black">
                        @foreach (@$space->operatingDays as $operatingDay)
                            <h4 class="col-sm-10 mt-5 ps-3">{{ $operatingDay->week_day }} <span
                                    class="float-end">{{ @$operatingDay->operatingHours[0]->radio === '1' ? $operatingDay->operatingHours[0]->start_time . ' - ' . $operatingDay->operatingHours[0]->end_time : '6 : 00 AM - 12 AM' }}</span>
                            </h4>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif


@endsection

@section('scripts')
    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key={{ config('googlemap.GOOGLE_MAP_KEY') }}">
    </script>
    <script>
        $(document).ready(function() {
            // Get latitude, longitude, and title from PHP variable
            var lat = {{ @$lat }};
            var lng = {{ @$lng }};
            var title = "{{ @$title }}";

            // Create a map centered at the specified location
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: lat,
                    lng: lng
                },
                zoom: 14
            });

            // Create a marker at the specified location
            var marker = new google.maps.Marker({
                position: {
                    lat: lat,
                    lng: lng
                },
                map: map,
                title: title
            });
        });
    </script>
    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>

    <!-- FORMELEMENTS JS -->
    <script src="{{ asset('assets/js/form-elements.js') }}"></script>
    <script>
        $(document).ready(function() {
            var operatingHours = @json(@$operatingHours);
            var disabledDates = [];
            var enabledDays = @json(@$enabledDays);
            // Check if all_day is 'on'
            if ("{{ @$booking->entertainment->blockTime[0]->all_day }}" != "on") {
                var startTime = "{{ @$booking->entertainment->blockTime[0]->start_time }}";
                var endTime = "{{ @$booking->entertainment->blockTime[0]->end_time }}";

                var currentDate = new Date(startTime);
                var endDate = new Date(endTime);

                // Loop through dates from start to end and add them to disabledDates array
                while (currentDate <= endDate) {
                    var dateString = $.datepicker.formatDate("yy-mm-dd", currentDate);
                    disabledDates.push(dateString);
                    currentDate.setDate(currentDate.getDate() + 1);
                }
            } else {
                var startTime = "{{ @$booking->entertainment->blockTime[0]->start_time }}";
                var dateString = $.datepicker.formatDate("yy-mm-dd", new Date(startTime));
                disabledDates.push(dateString);
            }

            // Initialize the datepicker
            $("#datepick").datepicker({
                dateFormat: "yy-mm-dd",
                beforeShowDay: function(date) {
                    var dateString = $.datepicker.formatDate("yy-mm-dd", date);
                    if (enabledDays.indexOf(date.getDay()) === -1) {
                        return [false, "ui-datepicker-unselectable"];
                    } else {
                        return [disabledDates.indexOf(dateString) === -1];
                    }
                },
                onSelect: function(selectedDate) {
                    var selectedDay = new Date(selectedDate).toLocaleDateString('en-US', {
                        weekday: 'long'
                    }).toLowerCase();
                    var startTimeSelect = $("select[name='start_time']");
                    var endTimeSelect = $("select[name='end_time']");

                    startTimeSelect.empty();
                    endTimeSelect.empty();

                    if (operatingHours[selectedDay]) {
                        var radioValue = operatingHours[selectedDay][0].radio;
                        if (radioValue == 0) {
                            startTimeSelect.append(new Option("6 AM", "6 AM"));
                            endTimeSelect.append(new Option("12 AM", "12 AM"));
                        } else if (operatingHours[selectedDay]) {
                            operatingHours[selectedDay].forEach(function(hours) {
                                startTimeSelect.append(new Option(hours.start_time, hours
                                    .start_time));
                                endTimeSelect.append(new Option(hours.end_time, hours
                                    .end_time));
                            });
                        }

                        startTimeSelect.prop('disabled', false);
                        endTimeSelect.prop('disabled', false);
                    }
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#bookingForm').parsley();

            // Handle click event of "Cart Icon"
            $('#cart-icon').click(function(e) {
                e.preventDefault(); // Prevent the default link behavior

                // Get the current value of the hidden input field
                var cartAction = $('#cart_action').val();

                // Toggle the cart action value
                if (cartAction === 'check_out') {
                    $('#cart_action').val('add_to_cart');
                }
                $("#bookingForm").submit();
            });
        });
    </script>
@endsection
