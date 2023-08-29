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
    <div class="row row-sm">
        <div class="col-xl-8 col-lg-12 col-md-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body p-3">
                    <a href="javascript:void(0)"><img
                            src="{{ $space->spaceImages[0]->image ?? asset('assets/images/users/spaces/4.jpg') }}"
                            alt="image not found" class="br-5 w-100"></a>
                </div>
                <div class="card-body pt-0 h-100">
                    <div class="owl-carousel owl-carousel-icons2">
                        @foreach ($space->spaceImages as $spaceImage)
                            <div class="item">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <a href="#"><img src="{{ $spaceImage->image }}" alt="img"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer">
                    <h2 class="fw-bold text-dark">{{ $space->space_title }}</h2>
                    <p><i class="text-primary side-menu__icon fe fe-map-pin"></i>{{ ' ' . $space->address }}</p>
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
                            About the space
                        </h3>
                        <p>{{ $space->description }}</p>
                    </div>
                    <div class="mt-5">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Parking
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h4 class="text-dark">Parking options</h4>
                                        <p>
                                            @foreach ($space->spaceHaveParkingOptions as $parkingOption)
                                                {{ $parkingOption->option . ',' }}
                                            @endforeach
                                        </p>
                                        <h4 class="text-dark">Parking description</h4>
                                        <p>{{ $space->parking_description ?? 'Empty' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        House Rules
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{ $space->space_rules }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-5">
                        <h3 class="text-dark">Location</h3>
                        <div style="height: 300px;" id="map">
                        </div>
                    </div>
                    <hr>
                    <div class="mt-5">
                        <h3 class="text-dark">
                            Health and Safety Measures
                        </h3>
                        @foreach ($space->spaceHaveSafetyMeasures as $safetyMeasure)
                            <p>{{ $loop->iteration . ' ' . $safetyMeasure->safety_measure_options }}</p>
                        @endforeach
                    </div>
                    <div class="mt-5">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Cleaning protocol
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{ $space->cleaning_process }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-5">
                        <h3 class="text-dark">
                            Cancellation Policy
                        </h3>
                        <h5 class="text-dark">{{ $space->cancellationPolicy->title }}</h5>
                        <p>{{ $space->cancellationPolicy->description }}</p>
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
                        <h2>SAR {{ $space->spaceHaveActivities[0]->rate_per_hour }} /hr</h2>
                        <p>{{ $space->spaceHaveActivities[0]->minimum_hour }} hour minimum</p>
                    </div>
                    <hr>
                    <div class="">
                        <div class="row">
                            <div class="col-7">
                                <h4>{{ $space->spaceHaveActivities[0]->discount }} hour discount <i
                                        class="mdi mdi-alert-circle-outline"></i>
                                </h4>
                            </div>
                            <div class="col-3 offset-2">
                            </div>
                        </div>
                    </div>
                    <hr>
{{-- @dd($space) --}}
                    <div class="">
                        <div class="row">
                            <div class="col-xl-12">
                                <h5 class="text-primary">Date and time</h5>
                                <form action="#">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                        </div>
                                        {{-- <input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text" > --}}
                                        <input class="form-control" placeholder="mm/dd/yy" type="text" id="datepick">

                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select name="star-time"
                                                    class="form-control form-select select2 select2-hidden-accessible"
                                                    data-bs-placeholder="Select Country" tabindex="-1"
                                                    aria-hidden="true">
                                                    <option value="">9 AM</option>
                                                    <option value="">10 AM</option>
                                                    <option value="">11 AM</option>
                                                    <option value="">12 AM</option>
                                                    <option value="">1 PM</option>
                                                    <option value="">2 PM</option>
                                                    <option value="">3 PM</option>
                                                    <option value="">4 PM</option>
                                                    <option value="">5 PM</option>
                                                    <option value="">6 PM</option>
                                                    <option value="">7 PM</option>
                                                    <option value="" selected="" disabled>Start
                                                        Time
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select name="star-time"
                                                    class="form-control form-select select2 select2-hidden-accessible"
                                                    data-bs-placeholder="Select Country" tabindex="-1"
                                                    aria-hidden="true">
                                                    <option value="">9 AM</option>
                                                    <option value="">10 AM</option>
                                                    <option value="">11 AM</option>
                                                    <option value="">12 AM</option>
                                                    <option value="">1 PM</option>
                                                    <option value="">2 PM</option>
                                                    <option value="">3 PM</option>
                                                    <option value="">4 PM</option>
                                                    <option value="">5 PM</option>
                                                    <option value="">6 PM</option>
                                                    <option value="">7 PM</option>
                                                    <option value="" selected="" disabled>End
                                                        Time
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-10 pe-0">
                                            <a href="{{ URL('checkout') }}" class="btn btn-primary text-white w-100">
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
                        @foreach ($space->spaceHaveActivities[0]->spaceAmenities as $spaceAmenity)
                            <div class="col-6">
                                <p class="">{{ $spaceAmenity->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card custom-card">
                <div>
                    <h3 class="mt-4 ps-3">Operating Hours</h3>
                    <hr style="border-top: 1px solid black">
                    @foreach ($space->operatingDays as $operatingDay)
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
            var lat = {{ $space->lat }};
            var lng = {{ $space->lng }};
            var title = "{{ $space->space_title }}";

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
            // $('#profile_form').parsley();

            // Define an array of dates to disable (in MM/DD/YYYY format)
            var disabledDates = ["08/30/2023","08/16/2023"];

            // Initialize the datepicker
            $("#datepick").datepicker({
                dateFormat: "mm/dd/yy", // Use lowercase 'mm/dd/yy' here
                beforeShowDay: function(date) {
                    var dateString = $.datepicker.formatDate("mm/dd/yy", date);
                    return [disabledDates.indexOf(dateString) === -1];
                }
            });
        });
    </script>
@endsection
