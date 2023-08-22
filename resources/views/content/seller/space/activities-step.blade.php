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
                               dd($space_activities[0]->activityHavingAmenities[0]->spaceAmenities);
                            @endphp --}}
                            <form action="{{ route('add-activities', $space_id) }}" method="post">
                                @csrf
                                <div id="step-8" class="mb-5">
                                    <div style="text-align:center">
                                        <h2>Step 8 of 9</h2>
                                        <h1><strong>
                                                Which activities would you like to host?
                                            </strong></h1>
                                        <p>Select the types of activities you would like to host. For each selection, we’ll
                                            create a customized listing unique to that activity.</p>
                                        <p> <img src="{{ asset('assets/images/users/spaces/6700.png') }}"
                                                alt="img"><b>Tip:
                                                To be approved for Meetings your photos must display a
                                                meeting or workshop setup including tables and chairs. We also
                                                recommend adding photos of your AV setup.</b></p>
                                    </div>

                                    <div class="m-lg-6">
                                        <div class="row">
                                            @foreach ($space_activities as $space_activity)
                                                <div class="col-lg-4">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">
                                                        <div class="panel panel-default active">
                                                            <div class="panel-heading back-g-color" role="tab"
                                                                id="headingOne1">
                                                                <div class="card border-end shadow-none back-g-color m-0">
                                                                    <div class="card-body p-0">
                                                                        <div class="px-5 py-3 m-0 text-center bg-white">
                                                                            <h5 class="text-dark m-0">{{$space_activity->title}}</h5>
                                                                            <hr class="bg-dark mb-0">
                                                                        </div>
                                                                        <div class="ms-5 my-4">
                                                                            @foreach ($space_activity->subActivities as $subActivity)
                                                                                <li class="text-dark mb-2">{{$subActivity->title}}</li>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr class="bg-dark mb-0 mt-1">
                                                                <h4 class="panel-title bg-primary text-center">
                                                                    <a role="button" data-bs-toggle="collapse"
                                                                        data-bs-parent="#accordion" href="#collapse{{$loop->iteration}}"
                                                                        class="text-white" aria-expanded="true"
                                                                        aria-controls="collapse1"> Enable </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse{{$loop->iteration}}" class="panel-collapse collapse" role="tabpanel"
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
                                                                                aria-describedby="basic-addon2" name="rate_per_hour{{$loop->iteration}}">
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
                                                                                aria-describedby="basic-addon2" name="minimum_hours{{$loop->iteration}}">
                                                                            <span class="input-group-text" id="basic-addon2"><i
                                                                                    class="fa fa-calendar w-5 text-white"></i></span>
                                                                        </div>
                                                                    </div>

                                                                    <label class="my-5">8+ hour discount</label>
                                                                    <p>Encourage guests to book longer by giving a discount for
                                                                        bookings that are 8 hours or more.</p>
                                                                    <div class="form-group mb-3">
                                                                        <div class="input-group w-100">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Optional"
                                                                                aria-label="Recipient's username"
                                                                                aria-describedby="basic-addon2" name="discount{{$loop->iteration}}">
                                                                            <span class="input-group-text" id="basic-addon2">%
                                                                                off</span>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#" class="mb-6">How is this calculated?</a>
                                                                    <label class="form-label">Who can book instantly?</label>
                                                                    <hr class="bg-dark mt-0">
                                                                    <div class="mb-5">
                                                                        <label>
                                                                            <input type="radio" name="instant_booking{{$loop->iteration}}"
                                                                                value="everyone">
                                                                            <span>Everyone</span>
                                                                        </label>
                                                                        <p>Guests who acknowledge and accept your host rules can
                                                                            book instantly.</p>
                                                                        <label>
                                                                            <input type="radio" name="instant_booking{{$loop->iteration}}"
                                                                                value="no one">
                                                                            <span>No one</span>
                                                                        </label>
                                                                        <p>Booking requests will need to be manually accepted or
                                                                            declined.</p>
                                                                    </div>
                                                                    <a href="#">Learn more?</a>
                                                                    <div class="my-5">
                                                                        <p class="back-g-color p-3">Meeting listings get up to
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
                                                                                aria-describedby="basic-addon2" name="max_guests{{$loop->iteration}}">
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
                                                                            {{-- @foreach ($space_activity->activityHavingAmenities as $amenity)
                                                                                <div class="checkbox">
                                                                                    <label><input type="checkbox"
                                                                                            value="">
                                                                                    </label>
                                                                                </div>
                                                                            @endforeach --}}
                                                                            {{-- <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Tables</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Chairs</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Whiteboard</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Chalkboard</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Projector</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Screen</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Flip
                                                                                    Charts</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Monitor</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Conference Phone</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Parking Space(s)</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Public
                                                                                    Transportation</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Restrooms</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Wheelchair
                                                                                    Accessible</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Breakout Space</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Kitchen</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Coffee</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Apple
                                                                                    TV</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Printer</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Rooftop</label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        value="">Outdoor Area</label>
                                                                            </div> --}}
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
                                            {{-- <div class="col-lg-4">
                                                <div class="panel-group" id="accordion" role="tablist"
                                                    aria-multiselectable="true">
                                                    <div class="panel panel-default active">
                                                        <div class="panel-heading back-g-color" role="tab"
                                                            id="headingOne1">
                                                            <div class="card border-end shadow-none back-g-color m-0">
                                                                <div class="card-body p-0">
                                                                    <div class="px-5 py-3 m-0 text-center bg-white">
                                                                        <h5 class="text-dark m-0">Events</h5>
                                                                        <hr class="bg-dark mb-0">
                                                                    </div>
                                                                    <div class="ms-5 my-4">
                                                                        <li class="text-dark mb-2">Birthdays</li>
                                                                        <li class="text-dark mb-2">Networking Event</li>
                                                                        <li class="text-dark mb-2">Corporate Party</li>
                                                                        <li class="text-dark">Corporate Party</li>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="bg-dark mb-0 mt-1">
                                                            <h4 class="panel-title bg-primary text-center">
                                                                <a role="button" data-bs-toggle="collapse"
                                                                    data-bs-parent="#accordion" href="#collapse2"
                                                                    class="text-white" aria-expanded="true"
                                                                    aria-controls="collapse1"> Enable </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse2" class="panel-collapse collapse"
                                                            role="tabpanel" aria-labelledby="headingOne1">
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
                                                                            aria-describedby="basic-addon2">
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
                                                                            aria-describedby="basic-addon2">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon2"><i
                                                                                class="fa fa-calendar w-5 text-white"></i></span>
                                                                    </div>
                                                                </div>

                                                                <label class="my-5">8+ hour discount</label>
                                                                <p>Encourage guests to book longer by giving a discount for
                                                                    bookings that are 8 hours or more.</p>
                                                                <div class="form-group mb-3">
                                                                    <div class="input-group w-100">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Optional"
                                                                            aria-label="Recipient's username"
                                                                            aria-describedby="basic-addon2">
                                                                        <span class="input-group-text" id="basic-addon2">%
                                                                            off</span>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="mb-6">How is this
                                                                    calculated?</a>
                                                                <label class="form-label">Who can book instantly?</label>
                                                                <hr class="bg-dark mt-0">
                                                                <div class="mb-5">
                                                                    <label>
                                                                        <input type="radio" name="example-checkbox1"
                                                                            value="option1">
                                                                        <span>Everyone</span>
                                                                    </label>
                                                                    <p>Guests who acknowledge and accept your host rules can
                                                                        book instantly.</p>
                                                                    <label>
                                                                        <input type="radio" name="example-checkbox1"
                                                                            value="option2">
                                                                        <span>No one</span>
                                                                    </label>
                                                                    <p>Booking requests will need to be manually accepted or
                                                                        declined.</p>
                                                                </div>
                                                                <a href="#">Learn more?</a>
                                                                <div class="my-5">
                                                                    <p class="back-g-color p-3">Meeting listings get up to
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
                                                                            aria-describedby="basic-addon2">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon2"><i
                                                                                class="fa fa-group w-5 text-white"></i></span>
                                                                    </div>
                                                                </div>
                                                                <label class="form-label">Who can book instantly?</label>
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
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">WiFi
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Tables</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Chairs</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Whiteboard</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Chalkboard</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Projector</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Screen</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Flip
                                                                                Charts</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Monitor</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Conference Phone</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Parking Space(s)</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Public
                                                                                Transportation</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Restrooms</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Wheelchair
                                                                                Accessible</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Breakout Space</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Kitchen</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Coffee</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Apple
                                                                                TV</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Printer</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Rooftop</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Outdoor Area</label>
                                                                        </div>
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
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="panel-group" id="accordion" role="tablist"
                                                    aria-multiselectable="true">
                                                    <div class="panel panel-default active">
                                                        <div class="panel-heading back-g-color" role="tab"
                                                            id="headingOne1">
                                                            <div class="card border-end shadow-none back-g-color m-0">
                                                                <div class="card-body p-0">
                                                                    <div class="px-5 py-3 m-0 text-center bg-white">
                                                                        <h5 class="text-dark m-0">Media Production</h5>
                                                                        <hr class="bg-dark mb-0">
                                                                    </div>
                                                                    <div class="ms-5 my-4">
                                                                        <li class="text-dark mb-2">Film shoots</li>
                                                                        <li class="text-dark mb-2">Photo shoots</li>
                                                                        <li class="text-dark mb-2">Audio recording</li>
                                                                        <li class="text-dark">More</li>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="bg-dark mb-0 mt-1">
                                                            <h4 class="panel-title bg-primary text-center">
                                                                <a role="button" data-bs-toggle="collapse"
                                                                    data-bs-parent="#accordion" href="#collapse3"
                                                                    class="text-white" aria-expanded="true"
                                                                    aria-controls="collapse1"> Enable </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse3" class="panel-collapse collapse"
                                                            role="tabpanel" aria-labelledby="headingOne1">
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
                                                                            aria-describedby="basic-addon2">
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
                                                                            aria-describedby="basic-addon2">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon2"><i
                                                                                class="fa fa-calendar w-5 text-white"></i></span>
                                                                    </div>
                                                                </div>

                                                                <label class="my-5">8+ hour discount</label>
                                                                <p>Encourage guests to book longer by giving a discount for
                                                                    bookings that are 8 hours or more.</p>
                                                                <div class="form-group mb-3">
                                                                    <div class="input-group w-100">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Optional"
                                                                            aria-label="Recipient's username"
                                                                            aria-describedby="basic-addon2">
                                                                        <span class="input-group-text" id="basic-addon2">%
                                                                            off</span>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="mb-6">How is this
                                                                    calculated?</a>
                                                                <label class="form-label">Who can book instantly?</label>
                                                                <hr class="bg-dark mt-0">
                                                                <div class="mb-5">
                                                                    <label>
                                                                        <input type="radio" name="example-checkbox1"
                                                                            value="option1">
                                                                        <span>Everyone</span>
                                                                    </label>
                                                                    <p>Guests who acknowledge and accept your host rules can
                                                                        book instantly.</p>
                                                                    <label>
                                                                        <input type="radio" name="example-checkbox1"
                                                                            value="option2">
                                                                        <span>No one</span>
                                                                    </label>
                                                                    <p>Booking requests will need to be manually accepted or
                                                                        declined.</p>
                                                                </div>
                                                                <a href="#">Learn more?</a>
                                                                <div class="my-5">
                                                                    <p class="back-g-color p-3">Meeting listings get up to
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
                                                                            aria-describedby="basic-addon2">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon2"><i
                                                                                class="fa fa-group w-5 text-white"></i></span>
                                                                    </div>
                                                                </div>
                                                                <label class="form-label">Who can book instantly?</label>
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
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">WiFi
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Tables</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Chairs</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Whiteboard</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Chalkboard</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Projector</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Screen</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Flip
                                                                                Charts</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Monitor</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Conference Phone</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Parking Space(s)</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Public
                                                                                Transportation</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Restrooms</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Wheelchair
                                                                                Accessible</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Breakout Space</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Kitchen</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Coffee</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Apple
                                                                                TV</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Printer</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Rooftop</label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox"
                                                                                    value="">Outdoor Area</label>
                                                                        </div>
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
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                    <div class="float-end">
                                        <button class="btn btn-light" disabled>Previous</button>
                                        <button class="btn btn-primary">Next</button>
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
@endsection
