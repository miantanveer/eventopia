@extends('layouts.seller-web-layout')
@section('styles')
    <style>
        .tab-content {
            min-height: auto !important;
        }

        .sw-container {
            min-height: auto !important;
        }

        .back-g-color {
            background-color: #F2F8FF !important;
        }

        .sw-btn-group-extra {
            display: none;
        }

        .remove {
            width: 25px;
            height: 25px;
            border: 1px solid transparent;
            border-radius: 50% !important;
            background: black;
            color: white;
            padding: auto;
            padding-left: 8px;
            position: absolute;
            right: 0;
            top: -10px;
            cursor: pointer;
        }
    </style>
@endsection
@section('content')
    <!--Row open-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="smartwizard-3">
                        <ul class="justify-content-around">
                            <li><a href="#step-1">Step 1</a></li>
                            <li><a href="#step-2">Step 2</a></li>
                            <li><a href="#step-3">Step 3</a></li>
                            <li><a href="#step-4">Step 4</a></li>
                            <li><a href="#step-5">Step 5</a></li>
                            <li><a href="#step-6">Step 6</a></li>
                            <li><a href="#step-7">Step 7</a></li>
                            <li><a href="#step-8">Step 8</a></li>
                        </ul>
                        <div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div id="step-6" class="mb-5">
                                <form
                                    action="{{ @$key !== null ? route('update_entertainment_form_6', $id) : route('entertainment_form_6', $id) }}"
                                    class="validation" method='post'>
                                    @csrf
                                    <div class="m-lg-6">
                                        <div class="row">
                                            @foreach ($ent_activity as $data)
                                                <div class="col-lg-4">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">
                                                        <div class="panel panel-default active">
                                                            <div class="panel-heading back-g-color" role="tab"
                                                                id="headingOne1">
                                                                <div class="card border-end shadow-none back-g-color m-0">
                                                                    <div class="card-body p-0">
                                                                        <div class="px-5 py-3 m-0 text-center bg-white">
                                                                            <h5 class="text-dark m-0">
                                                                                {{ $data->title }}</h5>
                                                                            <hr class="bg-dark mb-0">
                                                                        </div>
                                                                        <div class="ms-5 my-4">
                                                                            @foreach ($data->subActivities as $subActivity)
                                                                                <li class="text-dark mb-2">
                                                                                    {{ $subActivity->title }}</li>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <hr class="bg-dark mb-0 mt-1">
                                                                <h4 class="panel-title bg-primary text-center">
                                                                    <a role="button" data-bs-parent="#accordion"
                                                                        data-bs-toggle="collapse"
                                                                        href="#collapse{{ $loop->iteration }}"
                                                                        class="text-white activity-toggle"
                                                                        aria-expanded="true"
                                                                        data-activity="{{ $data->id }}"
                                                                        aria-controls="collapse{{ $loop->iteration }}">
                                                                        Enable </a>
                                                                </h4>
                                                            </div>
                                                            <div class="form-check d-none">
                                                                <input class="form-check-input activity_checkbox"
                                                                    type="checkbox" activity_id="{{ $data->id }}"
                                                                    name="enabled_activities[]"
                                                                    id="activity-{{ $data->id }}">
                                                            </div>
                                                            <div id="collapse{{ $loop->iteration }}"
                                                                class="panel-collapse collapse" role="tabpanel"
                                                                aria-labelledby="headingOne1">
                                                                <div class="panel-body">
                                                                    <label class="form-label">Pricing</label>
                                                                    <hr class="bg-dark mt-0">
                                                                    <label class="mb-5">Hourly rate</label>
                                                                    <p>Please choose a base hourly rate. You
                                                                        can customize your pricing with atten-
                                                                        dee pricing, calendar pricing, add add-
                                                                        ons once your listing are created.</p>
                                                                    <div class="form-group mb-6">
                                                                        <div class="input-group w-100">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="80"
                                                                                aria-label="Recipient's username"
                                                                                aria-describedby="basic-addon2"
                                                                                name="activities[{{ $data->id }}][rate_per_hour][]">
                                                                            <span class="input-group-text"
                                                                                id="basic-addon2">SAR</span>
                                                                        </div>
                                                                    </div>
                                                                    <p>Minimum number of hours</p>
                                                                    <p>Must be between 1-12 hours</p>
                                                                    <div class="form-group mb-4">
                                                                        <div class="input-group w-100">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="5"
                                                                                aria-label="Recipient's username"
                                                                                aria-describedby="basic-addon2"
                                                                                name="activities[{{ $data->id }}][minimum_hour][]">
                                                                            <span class="input-group-text"
                                                                                id="basic-addon2"><i
                                                                                    class="fa fa-calendar w-5 text-white"></i></span>
                                                                        </div>
                                                                    </div>

                                                                    <label class="my-5">8+ hour discount</label>
                                                                    <p>Encourage guests to book longer by giving a discount
                                                                        for
                                                                        bookings that are 8 hours or more.</p>
                                                                    <div class="form-group mb-3">
                                                                        <div class="input-group w-100">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Optional"
                                                                                aria-label="Recipient's username"
                                                                                aria-describedby="basic-addon2"
                                                                                name="activities[{{ $data->id }}][discount][]">
                                                                            <span class="input-group-text"
                                                                                id="basic-addon2">%
                                                                                off</span>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden"
                                                                        name="activities[{{ $data->id }}][space_activity_id][]"
                                                                        value="{{ $data->id }}">
                                                                    <a href="#" class="mb-6">How is this
                                                                        calculated?</a>
                                                                    <label class="form-label">Who can book
                                                                        instantly?</label>
                                                                    <hr class="bg-dark mt-0">
                                                                    <div class="mb-5">
                                                                        <label>
                                                                            <input type="radio"
                                                                                name="activities[{{ $data->id }}][instant_booking][]"
                                                                                value="everyone">
                                                                            <span>Everyone</span>
                                                                        </label>
                                                                        <p>Guests who acknowledge and accept your host rules
                                                                            can
                                                                            book instantly.</p>
                                                                        <label>
                                                                            <input type="radio"
                                                                                name="activities[{{ $data->id }}][instant_booking][]"
                                                                                value="no one">
                                                                            <span>No one</span>
                                                                        </label>
                                                                        <p>Booking requests will need to be manually
                                                                            accepted or
                                                                            declined.</p>
                                                                    </div>
                                                                    <a href="#">Learn more?</a>
                                                                    <div class="my-5">
                                                                        <p class="back-g-color p-3">Meeting listings get up
                                                                            to
                                                                            2x
                                                                            more bookings when guests can book instantly</p>
                                                                    </div>
                                                                    <label class="form-label">Capacity</label>
                                                                    <hr class="bg-dark mb-3">
                                                                    <p>Maximum number of guests</p>
                                                                    <div class="form-group mb-3">
                                                                        <div class="input-group w-100">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="250"
                                                                                aria-label="Recipient's username"
                                                                                aria-describedby="basic-addon2"
                                                                                name="activities[{{ $data->id }}][max_guests][]">
                                                                            <span class="input-group-text"
                                                                                id="basic-addon2"><i
                                                                                    class="fa fa-group w-5 text-white"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="bg-dark mb-3">
                                                                    <p>All amenities you select should be inclu-
                                                                        ded in your hourly rate. If you have
                                                                        amenities that you charge for, do not
                                                                        include them here. You can add those in
                                                                        a later section.
                                                                    </p><br>
                                                                    You must include WiFi, tables, and chairs
                                                                    to offer meetings
                                                                    <div class="row">
                                                                        <div class="span12 pagination-centered">
                                                                            @foreach (@$data->entAmenities as $activityHavingAmenity)
                                                                                <div class="checkbox">
                                                                                    <label><input type="checkbox"
                                                                                            name="activities[{{ $data->id }}][activity_have_amenity][]"
                                                                                            value="{{ @$activityHavingAmenity->id }}">{{ @$activityHavingAmenity->name }}
                                                                                    </label>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @if (@$key !== null)
                                        <div class="float-end">
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    @else
                                        <div class="float-end">
                                            <a class="btn btn-light"
                                                href="{{ route('load_entertainment_form_5', $id) }}">Previous</a>
                                            <button class="btn btn-primary">Next</button>
                                        </div>
                                    @endif
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--row closed-->
    @endsection
    @section('scripts')
        <!-- Jquery/min JS-->
        <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
        <!-- INTERNAL File-Uploads Js-->
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
        <!-- Jquery/buttons JS-->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.js') }}"></script>
        <script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>

        @include('layouts.components.setHoursScript')
        <script>
            $(document).ready(function() {
                $('.validation').parsley();
                $('.activity_checkbox').val('');
                $('.activity-toggle').on('click', function() {
                    const activityId = $(this).data('activity');
                    const checkbox = $(`input[activity_id="${activityId}"]`);
                    checkbox.val(activityId);
    
                    if (checkbox.length > 0) {
                        checkbox.prop('checked', !checkbox.prop('checked'));
                    }
                });
            });
        </script>
    @endsection
