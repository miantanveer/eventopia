@extends('layouts.seller-web-layout')
@section('styles')
    <style>
        .seller-web-sidebar {
            z-index: 9999;
        }

        hr.style1 {
            border-top: 1px solid #8c8b8b;
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

        .step-anchor {
            justify-content: space-around;
        }

        .sw-btn-group-extra {
            display: none;
        }

        hr.style1 {
            border-top: 1px solid #8c8b8b;
        }

        #step-1 {
            display: flex;

        }
        @media(min-width:0px) and (max-width:500px) {
        .font-sz-h1{
            font-size: 1.1rem !important;
        }
    }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-body">
                    <div id="smartwizard-3">
                        {{-- <ul>
                        <li><a href="#step-1">Space Address</a></li>
                        <li><a href="#step-2">Setup</a></li>
                        <li><a href="#step-3">About your space</a></li>
                        <li><a href="#step-4">Photos</a></li>
                        <li><a href="#step-5">Hours</a></li>
                        <li><a href="#step-6">Cleaning Policy</a></li>
                        <li><a href="#step-7">Cancellation</a></li>
                        <li><a href="#step-8">Listing</a></li>
                        <li><a href="#step-9">Profile</a></li>
                        <li><a href="#step-10">Review Policies</a></li>

                    </ul> --}}
                        <div>
                            {{-- @php
                        dd($space_activities[0]->activityHavingAmenities[0]->amenities
                        );
                        @endphp --}}
                            <form id="acitivityForm" action="{{ route('add-activities', ['space_id' => $space->id, 'key' => 0]) }}" method="post">
                                @csrf
                                <div id="step-8" class="mb-5">
                                    <div class="text-center">
                                        <h2>{{lang('Step 8 of 9')}}</h2>
                                        <h1 class="font-sz-h1"><strong>
                                                {{lang('Which activities would you like to host?')}}
                                            </strong></h1>
                                        <p>{{lang('Select the types of activities you would like to host. For each selection, we’ll
                                            create a customized listing unique to that activity.')}}</p>
                                        <p> <img src="{{ asset('assets/images/users/spaces/6700.png') }}"
                                                alt="img"><b>{{lang('Tip:
                                                To be approved for Meetings your photos must display a
                                                meeting or workshop setup including tables and chairs. We also
                                                recommend adding photos of your AV setup.')}}</b></p>
                                    </div>

                                    <div class="m-lg-6">
                                        <div class="row">
                                            @foreach ($space_activities as $space_activity)
                                                <div class="col-lg-4 mt-lg-0 mt-5">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">
                                                        <div class="panel panel-default active">
                                                            <div class="panel-heading back-g-color" role="tab"
                                                                id="headingOne1">
                                                                <div class="card border-end shadow-none back-g-color m-0">
                                                                    <div class="card-body p-0">
                                                                        <div class="px-5 py-3 m-0 text-center bg-white">
                                                                            <h5 class="text-dark m-0">
                                                                                {{ lang($space_activity->title) }}</h5>
                                                                            <hr class="bg-dark mb-0">
                                                                        </div>
                                                                        <div class="ms-5 my-4">
                                                                            @foreach ($space_activity->subActivities as $subActivity)
                                                                                <li class="text-dark mb-2">
                                                                                    {{ lang($subActivity->title) }}</li>
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
                                                                        data-activity="{{ $space_activity->id }}"
                                                                        aria-controls="collapse{{ $loop->iteration }}">
                                                                        {{lang('Enable')}} </a>
                                                                </h4>
                                                            </div>
                                                            <div class="form-check d-none">
                                                                <input class="form-check-input activity_checkbox"
                                                                    type="checkbox" activity_id="{{ $space_activity->id }}"
                                                                    name="enabled_activities[]"
                                                                    id="activity-{{ $space_activity->id }}">
                                                            </div>
                                                            <div id="collapse{{ $loop->iteration }}"
                                                                class="panel-collapse collapse" role="tabpanel"
                                                                aria-labelledby="headingOne1">
                                                                <div class="panel-body">
                                                                    <label class="form-label">{{lang('Pricing')}}</label>
                                                                    <hr class="bg-dark mt-0">
                                                                    <label class="mb-5">{{lang('Hourly rate')}}</label>
                                                                    <p>{{lang('Please choose a base hourly rate. You
                                                                        can customize your pricing with atten-
                                                                        dee pricing, calendar pricing, add add-
                                                                        ons once your listing are created.')}}</p>
                                                                    <div class="form-group mb-6">
                                                                        <div class="input-group w-100">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="80" min="1" step="1"
                                                                                aria-label="Recipient's username"
                                                                                aria-describedby="basic-addon2"
                                                                                name="activities[{{ $space_activity->id }}][rate_per_hour][]">
                                                                            <span class="input-group-text"
                                                                                id="basic-addon2">{{lang('SAR')}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <p>{{lang('Minimum number of hours')}}</p>
                                                                    <p>{{lang('Must be between 1-12 hours')}}</p>
                                                                    <div class="form-group mb-4">
                                                                        <div class="input-group w-100">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="5" min="1" step="1"
                                                                                aria-label="Recipient's username"
                                                                                aria-describedby="basic-addon2"
                                                                                name="activities[{{ $space_activity->id }}][minimum_hour][]">
                                                                            <span class="input-group-text"
                                                                                id="basic-addon2"><i
                                                                                    class="fa fa-calendar w-5 text-white"></i></span>
                                                                        </div>
                                                                    </div>

                                                                    <label class="my-5">{{lang('8+ hour discount')}}</label>
                                                                    <p>{{lang('Encourage guests to book longer by giving a discount
                                                                        for
                                                                        bookings that are 8 hours or more.')}}</p>
                                                                    <div class="form-group mb-3">
                                                                        <div class="input-group w-100">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="{{lang('Optional')}}"
                                                                                aria-label="Recipient's username" min="1" step="1"
                                                                                aria-describedby="basic-addon2"
                                                                                name="activities[{{ $space_activity->id }}][discount][]">
                                                                            <span class="input-group-text"
                                                                                id="basic-addon2">{{lang('%
                                                                                off')}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden"
                                                                        name="activities[{{ $space_activity->id }}][space_activity_id][]"
                                                                        value="{{ $space_activity->id }}">
                                                                    <a href="#" class="mb-6">{{lang('How is this
                                                                        calculated?')}}</a>
                                                                    <label class="form-label">{{lang('Who can book
                                                                        instantly?')}}</label>
                                                                    <hr class="bg-dark mt-0">
                                                                    <div class="mb-5">
                                                                        <label>
                                                                            <input type="radio"
                                                                                name="activities[{{ $space_activity->id }}][instant_booking][]"
                                                                                value="everyone">
                                                                            <span>{{lang('Everyone')}}</span>
                                                                        </label>
                                                                        <p>{{lang('Guests who acknowledge and accept your host rules
                                                                            can
                                                                            book instantly.')}}</p>
                                                                        <label>
                                                                            <input type="radio"
                                                                                name="activities[{{ $space_activity->id }}][instant_booking][]"
                                                                                value="no one">
                                                                            <span>{{lang('No one')}}</span>
                                                                        </label>
                                                                        <p>{{lang('Booking requests will need to be manually
                                                                            accepted or
                                                                            declined.')}}</p>
                                                                    </div>
                                                                    <a href="#">{{lang('Learn more?')}}</a>
                                                                    <div class="my-5">
                                                                        <p class="back-g-color p-3">{{lang('Meeting listings get up
                                                                            to
                                                                            2x
                                                                            more bookings when guests can book instantly')}}</p>
                                                                    </div>
                                                                    <label class="form-label">{{lang('Capacity')}}</label>
                                                                    <hr class="bg-dark mb-3">
                                                                    <p>{{lang('Maximum number of guests')}}</p>
                                                                    <div class="form-group mb-3">
                                                                        <div class="input-group w-100">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="250" min="1" step="1"
                                                                                aria-label="Recipient's username"
                                                                                aria-describedby="basic-addon2"
                                                                                name="activities[{{ $space_activity->id }}][max_guests][]">
                                                                            <span class="input-group-text"
                                                                                id="basic-addon2"><i
                                                                                    class="fa fa-group w-5 text-white"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="bg-dark mb-3">
                                                                    <p>{{lang('All amenities you select should be inclu-
                                                                        ded in your hourly rate. If you have
                                                                        amenities that you charge for, do not
                                                                        include them here. You can add those in
                                                                        a later section.')}}
                                                                    </p><br>
                                                                    {{lang('You must include WiFi, tables, and chairs
                                                                    to offer meetings')}}
                                                                    <div class="row">
                                                                        <div class="span12 pagination-centered">
                                                                            @foreach (@$space_activity->spaceAmenities as $activityHavingAmenity)
                                                                                <div class="checkbox">
                                                                                    <label><input type="checkbox"
                                                                                            name="activities[{{ @$space_activity->id }}][activity_have_amenity][]"
                                                                                            value="{{ @$activityHavingAmenity->id }}">{{ lang(@$activityHavingAmenity->name) }}
                                                                                    </label>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                    {{-- <div class="mt-4">
                                                                    <h4>Add your own amenities</h4>
                                                                    <input style="width:195px;height:42px;" type="text"
                                                                        class="btn btn-default rounded-0">
                                                                    <button
                                                                        style="margin-left:20px;width:80px;height:42px;background-color:#00224F;color:white;"
                                                                        type="button"
                                                                        class="btn btn-default rounded-0">Add</button>
                                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                    <div class="float-end">
                                        @if ($enable_req == 0)
                                            <a class="btn btn-light"
                                                href="{{ route('cancel-policy-step', $space->id) }}">{{lang('Previous')}}</a>
                                            <button class="btn btn-primary">{{lang('Next')}}</button>
                                        @else
                                            <input type="hidden" name="enbale_req" value="1">
                                            <button class="btn btn-primary">{{lang('Update')}}</button>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection

@section('scripts')
    <!-- INTERNAL File-Uploads Js-->
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!-- FORM WIZARD JS-->
    <script src="{{ asset('assets/plugins/formwizard/fromwizard.js') }}"></script>
    <!-- INTERNAl Jquery.steps js -->
    <script src="{{ asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <!-- INTERNAL Accordion-Wizard-Form js-->
    <script src="{{ asset('assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard.js') }}"></script>
    <!-- Jquery/buttons JS-->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>

    <script>
        $(document).ready(function() {
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
