@extends('layouts.customer-web-layout')
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
{{-- @dd(@$ent) --}}
    <div class="row row-sm">
        <div class="col-xl-8 col-lg-12 col-md-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body p-3">
                    <a href="javascript:void(0)"><img
                            src="{{ @$ent->ent->entertainmentImages[0]->image ?? asset('assets/images/users/spaces/4.jpg') }}"
                            alt="image not found" class="br-5 w-100"></a>
                </div>
                <div class="card-body pt-0 h-100">
                    <div class="owl-carousel owl-carousel-icons2">
                        @foreach (@$ent->ent->entertainmentImages as $entImage)
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <a href="#"><img src="{{ @$entImage->image }}" alt="img"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer">
                    <h2 class="fw-bold text-dark">{{ @$ent->ent->title }}</h2>
                    <p><i class="text-primary side-menu__icon fe fe-map-pin"></i>{{ ' ' . @$ent->ent->address }}</p>
                    <div class="row">
                        <div class="mb-2 col-md-2 col-sm-3 text-warning">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star-half-o text-warning"></i>
                            <i class="fa fa-star-o text-warning"></i>
                            &nbsp;
                        </div>
                        <p class="col-md-2 col-sm-3">45 reviews</p>
                        <p class="col-md-2 col-sm-3"><i class="fa fa-group"></i> 12 people </p>
                        <p class="col-md-2 col-sm-3"><i class="mdi mdi-alarm text-primary"></i> 1 hr
                            5 min</p>
                    </div>
                    <hr>
                    <div class="mt-5">
                        <h3 class="text-dark">
                            About the Entertainment
                        </h3>
                        <p>{{ @$ent->ent->description }}</p>
                    </div>
                    <hr>
                    <div class="mt-5">
                        <h3 class="text-dark">Location</h3>
                        <div style="height: 300px;" id="map">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="mt-5">
                        <h3 class="text-dark">
                            Cancellation Policy
                        </h3>
                        <p>{{ @$ent->ent->cancellationPolicy->description }}</p>
                    </div>
                    <hr>
                    <div class="mt-5">
                        <h3 class="text-dark">
                            Reviews (87)
                        </h3>
                        <div class="row ms-0 border mb-5 p-4 br-5 col-12">
                            <div class="col-md-1 col-2">
                                <a href="{{ url('profile') }}"> <img class="media-object rounded-circle profile_img_res"
                                        alt="64x64" src="{{ asset('assets/images/users/5.jpg') }}">
                                </a>
                            </div>
                            <div class="col-md-11 ps-md-5 ps-lg-2 col-10 reply-content-heading">
                                <h5 class="mt-3 text-dark">Gavin Murray</h5>
                            </div>
                            <div class="col-md-1 col-2 empty"></div>
                            <div class="col-md-9 col-sm-8 col-10 reply-content">
                                <span class="tex-dark">June 14, 2023 at 8:00 pm</span>
                                <div class="rating-stars" id="rating-1" data-stars="2"
                                    style="cursor: pointer; text-align:left !important;font-size: 14px">
                                    <input type="hidden" name="rating-1" value="0"><i class="fa fa-star"
                                        style="color:#f1c40f"></i><i class="fa fa-star"
                                        style="color: rgb(241, 196, 15);"></i><i class="fa fa-star"
                                        style="color: rgb(241, 196, 15);"></i><i class="fa fa-star"
                                        style="color:#ecf0f1"></i><i class="fa fa-star" style="color:#ecf0f1"></i>

                                </div>
                                <p class="font-13 text-muted mt-2">In reality space is
                                    bigger than it seems in photo's.</p>
                            </div>
                            <div class="col-sm-2 col-12 my-auto content-button">
                                <div class="float-end">
                                    <a href="javascript:void(0);" class="btn btn-primary px-2">
                                        <i class="zmdi zmdi-mail-reply me-1"></i>Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row ms-0 border mb-5 p-4 br-5 col-12">
                            <div class="col-md-1 col-2">
                                <a href="{{ url('profile') }}"> <img class="media-object rounded-circle profile_img_res"
                                        alt="64x64" src="{{ asset('assets/images/users/5.jpg') }}">
                                </a>
                            </div>
                            <div class="col-md-11 ps-md-5 ps-lg-2 col-10 reply-content-heading">
                                <h5 class="mt-3 text-dark">Gavin Murray</h5>
                            </div>
                            <div class="col-md-1 col-2 empty"></div>
                            <div class="col-md-9 col-sm-8 col-10 reply-content">
                                <span class="tex-dark">June 14, 2023 at 8:00 pm</span>
                                <div class="rating-stars" id="rating-1" data-stars="2"
                                    style="cursor: pointer; text-align:left !important;font-size: 14px">
                                    <input type="hidden" name="rating-1" value="0"><i class="fa fa-star"
                                        style="color:#f1c40f"></i><i class="fa fa-star"
                                        style="color: rgb(241, 196, 15);"></i><i class="fa fa-star"
                                        style="color: rgb(241, 196, 15);"></i><i class="fa fa-star"
                                        style="color:#ecf0f1"></i><i class="fa fa-star" style="color:#ecf0f1"></i>

                                </div>
                                <p class="font-13 text-muted mt-2">In reality space is
                                    bigger than it seems in photo's.</p>
                            </div>
                            <div class="col-sm-2 col-12 my-auto content-button">
                                <div class="float-end">
                                    <a href="javascript:void(0);" class="btn btn-primary px-2">
                                        <i class="zmdi zmdi-mail-reply me-1"></i>Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row ms-0 border mb-5 p-4 br-5 col-12">
                            <div class="col-md-1 col-2">
                                <a href="{{ url('profile') }}"> <img class="media-object rounded-circle profile_img_res"
                                        alt="64x64" src="{{ asset('assets/images/users/5.jpg') }}">
                                </a>
                            </div>
                            <div class="col-md-11 ps-md-5 ps-lg-2 col-10 reply-content-heading">
                                <h5 class="mt-3 text-dark">Gavin Murray</h5>
                            </div>
                            <div class="col-md-1 col-2 empty"></div>
                            <div class="col-md-9 col-sm-8 col-10 reply-content">
                                <span class="tex-dark">June 14, 2023 at 8:00 pm</span>
                                <div class="rating-stars" id="rating-1" data-stars="2"
                                    style="cursor: pointer; text-align:left !important;font-size: 14px">
                                    <input type="hidden" name="rating-1" value="0"><i class="fa fa-star"
                                        style="color:#f1c40f"></i><i class="fa fa-star"
                                        style="color: rgb(241, 196, 15);"></i><i class="fa fa-star"
                                        style="color: rgb(241, 196, 15);"></i><i class="fa fa-star"
                                        style="color:#ecf0f1"></i><i class="fa fa-star" style="color:#ecf0f1"></i>

                                </div>
                                <p class="font-13 text-muted mt-2">In reality space is
                                    bigger than it seems in photo's.</p>
                            </div>
                            <div class="col-sm-2 col-12 my-auto content-button">
                                <div class="float-end">
                                    <a href="javascript:void(0);" class="btn btn-primary px-2">
                                        <i class="zmdi zmdi-mail-reply me-1"></i>Reply
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="mt-3 text-center">
                        <h2>SAR {{ @$ent->hourly_rate }} /hr</h2>
                        <p>{{ @$ent->max_hours }} hour minimum</p>
                    </div>
                    <hr>
                    <div class="">
                        <div class="row">
                            <div class="col-7">
                                <h4>{{ @$ent->discount }} hour discount <i
                                        class="mdi mdi-alert-circle-outline"></i>
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
                        // Assuming $space->operatingDays is a collection of operating days for the space
                        foreach (@$ent->ent->operatingDays as $operatingDay) {
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
                                <h5 class="text-primary">Date and time</h5>
                                <form action="#">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                        </div>
                                        <input class="form-control" placeholder="yy-mm-dd" type="text"
                                            id="datepick">
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select name="start-time"
                                                    class="form-control form-select select2 select2-hidden-accessible">
                                                    <!-- Start time options will be populated dynamically -->
                                                    <option selected disabled>Start Time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select name="end-time"
                                                    class="form-control form-select select2 select2-hidden-accessible">
                                                    <!-- End time options will be populated dynamically -->
                                                    <option selected disabled>End Time</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-10 pe-0">
                                            <a href="{{ route('cart-store',['id'=>@$ent->ent->id,'type'=>'entertainment']) }}" class="btn btn-primary text-white w-100">
                                                Checkout
                                            </a>
                                        </div>
                                        <div class="col-2 text-end">
                                            <a class="">
                                                <i class="fa fa-cart-plus border text-primary"></i><span
                                                    class="fs-16 ms-2 d-none d-xl-block"></span>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                                <div class="mt-3 text-center">
                                    <h6><i class="mdi mdi-alarm"></i> John typically respond within
                                        1 hr</h6>
                                    <p>You won't be charged yet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card custom-card">
                <hr class="px-0 line">
                <div class="card-body pb-0">
                    <div class="text-center">
                        <h3 class="mb-3 booking-heading">Included in your booking</h3>
                    </div>
                    <h4 class="mt-5 fw-bold">Amentities</h4>
                    <div class="row mb-6">
                        @foreach (@$ent->entActivityAmenity as $entAmenity)
                        <div class="col-6">
                                <p class="">{{ @$entAmenity->activity->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card custom-card">
                <div>
                    <h3 class="mt-4 ps-3">Operating Hours</h3>
                    <hr style="border-top: 1px solid black">
                    @foreach (@$ent->ent->operatingDays as $operatingDay)
                        <h4 class="col-sm-10 mt-5 ps-3">{{ $operatingDay->week_day }} <span
                                class="float-end">{{ $operatingDay->operatingHours[0]->radio === '1' ? $operatingDay->operatingHours[0]->start_time . ' - ' . $operatingDay->operatingHours[0]->end_time : '6 : 00 AM - 12 AM' }}</span>
                        </h4>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC5qN37hurCFwbFsZt2nzzwzGcbSt08R5E">
    </script>
    <script>
        $(document).ready(function() {
            // Get latitude, longitude, and title from PHP variable
            var lat = {{ @$ent->ent->lat }};
            var lng = {{ @$ent->ent->lng }};
            var title = "{{ @$ent->ent->title }}";

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
    <!-- INTERNAL Bootstrap-Datepicker js-->
    {{-- <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script> --}}
    <!-- TIMEPICKER JS -->
    {{-- <script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script> --}}
    <!-- DATEPICKER JS -->
    {{-- <script src="{{ asset('assets/plugins/date-picker/date-picker.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script> --}}

    <!-- FORMELEMENTS JS -->
    <script src="{{ asset('assets/js/form-elements.js') }}"></script>
    <script>
        $(document).ready(function() {
            var operatingHours = @json($operatingHours);
            var disabledDates = [];
            var enabledDays = @json($enabledDays);
            // Check if all_day is 'on'
            if ("{{ @$ent->ent->blockTime[0]->all_day }}" != "on") {
                var startTime = "{{ @$ent->ent->blockTime[0]->start_time }}";
                var endTime = "{{ @$ent->ent->blockTime[0]->end_time }}";

                var currentDate = new Date(startTime);
                var endDate = new Date(endTime);

                // Loop through dates from start to end and add them to disabledDates array
                while (currentDate <= endDate) {
                    var dateString = $.datepicker.formatDate("yy-mm-dd", currentDate);
                    disabledDates.push(dateString);
                    currentDate.setDate(currentDate.getDate() + 1);
                }
            } else {
                var startTime = "{{ @$ent->ent->blockTime[0]->start_time }}";
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
                    var startTimeSelect = $("select[name='start-time']");
                    var endTimeSelect = $("select[name='end-time']");

                    startTimeSelect.empty();
                    endTimeSelect.empty();

                    if (operatingHours[selectedDay]) {
                        var radioValue = operatingHours[selectedDay][0].radio;
                        if (radioValue == 0) {
                            startTimeSelect.append(new Option("6 AM", "06:00"));
                            endTimeSelect.append(new Option("12 AM", "00:00"));
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
@endsection
