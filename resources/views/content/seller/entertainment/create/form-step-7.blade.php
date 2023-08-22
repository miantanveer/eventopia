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
                        <div id="step-7" class="mb-5">
                            <form action="#">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="mb-lg-5 mb-3">
                                            <h2 class="mb-1"><b class="h-3">Who will guests be contacting?</b>
                                            </h2>
                                            <b>Please do not use a business name, so it’s more personal for your
                                                guests.</b>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="exampleInputname"
                                                        placeholder="john" required
                                                        data-parsley-required-message="Password is required*">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="exampleInputname1"
                                                        placeholder="Smith" required
                                                        data-parsley-required-message="Confirm Password is required*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" id="exampleInputphone1"
                                                placeholder="(123) 345 -4567" required
                                                data-parsley-required-message="Phone Number is required*">
                                        </div>
                                        <div class="bg-light-gray p-3 mb-3">
                                            <p class="ms-3 m-0"><i class="fa fa-info-circle me-4"></i>Your number
                                                needs
                                                to be verified</p>
                                        </div>
                                        <p class="mb-5">We won’t share your number publicly. Guests will only see it
                                            after they book to coordinate with you.</p>
                                        <hr class="bg-dark my-6">
                                    </div>
                                    <div class="col-4">
                                        <div class="text-center chat-image mb-5">
                                            <div class="avatar avatar-xxl chat-profile mb-3 brround"
                                                id="uploadContainer">
                                                <a class="" href="#">
                                                    <img alt="avatar" src="{{ asset('assets/images/users/23.jpeg') }}"
                                                        class="avatar avatar-xxl chat-profile mb-3 brround"
                                                        id="avatarImage">
                                                </a>
                                            </div>
                                            <div class="text-center">
                                                <button type="button"
                                                    class="bg-primary text-white p-3 border-0 text-center"
                                                    id="uploadBtn">Upload
                                                    photo</button>
                                            </div>
                                            <!-- Hidden input for image upload -->
                                            <input type="file" id="imageUploadInput" style="display: none">
                                        </div>
                                        <div class="text-center px-8">
                                            <p class="text-muted">Choose a friendly, accurate photo to help instill a
                                                sense of trust and verification in your listing</p>
                                        </div>
                                        <div class="px-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <ul>
                                                        <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                                class="w-4" alt=""> No photos of the
                                                            space</li>
                                                        <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                                class="w-4" alt=""> No business logos
                                                        </li>
                                                        <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                                class="w-4" alt=""> No group photos</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9">
                                            <h3><b class="h-3">How did you hear about entertainment / talent with
                                                    Eventopia?</b></h3>
                                            <p>Select all that apply to help us find more hosts like you.</p>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-1" required>
                                                        <label class="form-check-label" for="invalidCheck-1">Friend,
                                                            family, or colleague</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-2" required>
                                                        <label class="form-check-label" for="invalidCheck-2">News or
                                                            blog
                                                            article</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-3" required>
                                                        <label class="form-check-label" for="invalidCheck-3">Contacted
                                                            by
                                                            Peerspace</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-4" required>
                                                        <label class="form-check-label" for="invalidCheck-4">TV</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-5" required>
                                                        <label class="form-check-label"
                                                            for="invalidCheck-5">Billboard</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-6" required>
                                                        <label class="form-check-label"
                                                            for="invalidCheck-6">Billboard</label>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-7" required>
                                                        <label class="form-check-label" for="invalidCheck-7">Online
                                                            ad</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-8" required>
                                                        <label class="form-check-label" for="invalidCheck-8">Social
                                                            media</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-9" required>
                                                        <label class="form-check-label" for="invalidCheck-9">Referral
                                                            from
                                                            a Eventopia host</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-10" required>
                                                        <label class="form-check-label" for="invalidCheck-10">Online
                                                            search</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-11" required>
                                                        <label class="form-check-label" for="invalidCheck-11">Attended
                                                            an
                                                            event in a Peerspace</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-12" required>
                                                        <label class="form-check-label"
                                                            for="invalidCheck-12">Other</label>
                                                    </div>
                                                </div>
                                                <hr class="bg-dark my-6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
 
    <!-- Jquery/buttons JS-->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
   

    @include('layouts.components.setHoursScript')

    @endsection
