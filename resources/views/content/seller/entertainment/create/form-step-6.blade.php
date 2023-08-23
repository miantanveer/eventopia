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
                                <form action="{{@$key !== null ? route('update_entertainment_form_6',$id) : route('entertainment_form_6', $id) }}" class="validation" method='post'>
                                    @csrf
                                    <div class="m-lg-6">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="panel-group" id="accordion" role="tablist"
                                                    aria-multiselectable="true">
                                                    <div class="panel panel-default active">
                                                        <div class="panel-heading" role="tab" id="headingOne1">
                                                            <div class="card border-end shadow-none m-0">
                                                                <div class="card-body p-0">
                                                                    <div class="px-5 py-3 m-0 text-center bg-white">
                                                                        <h5 class="text-dark m-0">Musical Acts</h5>
                                                                        <hr class="bg-dark mb-0">
                                                                    </div>
                                                                    <div class="ms-5 my-4">
                                                                        <li class="text-dark mb-2">Bands & Groups</li>
                                                                        <li class="text-dark mb-2">Singers</li>
                                                                        <li class="text-dark mb-2">Solo Musicians</li>
                                                                        <li class="text-dark">More</li>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="bg-dark mb-0 mt-1">
                                                            <h4 class="panel-title bg-primary text-center">
                                                                <a role="button" data-bs-toggle="collapse"
                                                                    data-bs-parent="#accordion" href="#collapse1"
                                                                    class="text-white" aria-expanded="true"
                                                                    aria-controls="collapse1"> Enable </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse1" class="panel-collapse collapse" role="tabpanel"
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
                                                                        <input type="text" class="form-control" value="{{@$musical->hourly_rate}}"
                                                                            placeholder="80" name="musical_hourly_rate"
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
                                                                            placeholder="5" name="musical_max_hours"
                                                                            aria-label="Recipient's username"
                                                                            aria-describedby="basic-addon2">
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
                                                                            placeholder="Optional" name="musical_discount"
                                                                            aria-label="Recipient's username"
                                                                            aria-describedby="basic-addon2">
                                                                        <span class="input-group-text" id="basic-addon2">%
                                                                            off</span>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="mb-6">How is this calculated?</a>
                                                                <label class="form-label">Who can book instantly?</label>
                                                                <hr class="bg-dark mt-0">
                                                                <div class="mb-5">
                                                                    <label>
                                                                        <input type="radio" name="musical_join"
                                                                            value="everyone">
                                                                        <span>Everyone</span>
                                                                    </label>
                                                                    <p>Guests who acknowledge and accept your host rules can
                                                                        book instantly.</p>
                                                                    <label>
                                                                        <input type="radio" name="musical_join"
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
                                                                            name="musical_guest_capacity"
                                                                            aria-label="Recipient's username"
                                                                            aria-describedby="basic-addon2">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon2"><i
                                                                                class="fa fa-group w-5 text-white"></i></span>
                                                                    </div>
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
                                                        <div class="panel-heading" role="tab" id="headingTwo2">
                                                            <div class="card border-end shadow-none m-0">
                                                                <div class="card-body p-0">
                                                                    <div class="px-5 py-3 m-0 text-center bg-white">
                                                                        <h5 class="text-dark m-0">Entertainers</h5>
                                                                        <hr class="bg-dark mb-0">
                                                                    </div>
                                                                    <div class="ms-5 my-4">
                                                                        <li class="text-dark mb-2">Actors</li>
                                                                        <li class="text-dark mb-2">Comedians</li>
                                                                        <li class="text-dark mb-2">Children Party</li>
                                                                        <li class="text-dark">More</li>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="bg-dark mb-0 mt-1">
                                                            <h4 class="panel-title bg-primary text-center">
                                                                <a class="collapsed text-white" role="button"
                                                                    data-bs-toggle="collapse" data-bs-parent="#accordion"
                                                                    href="#collapse2" aria-expanded="false"
                                                                    aria-controls="collapse2"> Enable </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse2" class="panel-collapse collapse"
                                                            role="tabpanel" aria-labelledby="headingTwo2">
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
                                                                            name="entertainers_hourly_rate"
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
                                                                            placeholder="5" name="entertainers_max_hours"
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
                                                                            name="entertainers_discount"
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
                                                                        <input type="radio" name="entertainers_join"
                                                                            value="every one">
                                                                        <span>Everyone</span>
                                                                    </label>
                                                                    <p>Guests who acknowledge and accept your host rules can
                                                                        book instantly.</p>
                                                                    <label>
                                                                        <input type="radio" name="entertainers_join"
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
                                                                            name="entertainers_gust_capacity"
                                                                            aria-label="Recipient's username"
                                                                            aria-describedby="basic-addon2">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon2"><i
                                                                                class="fa fa-group w-5 text-white"></i></span>
                                                                    </div>
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
                                                        <div class="panel-heading" role="tab" id="heading3">
                                                            <div class="card border-end shadow-none m-0">
                                                                <div class="card-body p-0">
                                                                    <div class="px-5 py-3 m-0 text-center bg-white">
                                                                        <h5 class="text-dark m-0">Event Services</h5>
                                                                        <hr class="bg-dark mb-0">
                                                                    </div>
                                                                    <div class="ms-5 my-4">
                                                                        <li class="text-dark mb-2">Beauty</li>
                                                                        <li class="text-dark mb-2">Food & Beverage</li>
                                                                        <li class="text-dark mb-2">Photos & videos</li>
                                                                        <li class="text-dark">More</li>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="bg-dark mb-0 mt-1">
                                                            <h4 class="panel-title bg-primary text-center">
                                                                <a class="collapsed text-white" role="button"
                                                                    data-bs-toggle="collapse" data-bs-parent="#accordion"
                                                                    href="#collapse3" aria-expanded="false"
                                                                    aria-controls="collapse3"> Enable </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse3" class="panel-collapse collapse"
                                                            role="tabpanel" aria-labelledby="headingThree">
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
                                                                            placeholder="80" name="event_hourly_rate"
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
                                                                            placeholder="5" name="event_max_hours"
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
                                                                            placeholder="Optional" name="event_discount"
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
                                                                        <input type="radio" name="event_join"
                                                                            value="every one">
                                                                        <span>Everyone</span>
                                                                    </label>
                                                                    <p>Guests who acknowledge and accept your host rules can
                                                                        book instantly.</p>
                                                                    <label>
                                                                        <input type="radio" name="event_join"
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
                                                                            placeholder="250" name="event_guest_capacity"
                                                                            aria-label="Recipient's username"
                                                                            aria-describedby="basic-addon2">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon2"><i
                                                                                class="fa fa-group w-5 text-white"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if(@$key !== null)
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
            });
        </script>
    @endsection
