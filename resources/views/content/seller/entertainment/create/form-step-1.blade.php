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
        .parsley-minlength {
            font-size: 12px;
            color: #ff5c77;
            margin-top: 3px;
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
                            <div id="step-1" class="mb-5">
                                <form
                                    action="{{ @$entertainment !== null ? route('update_entertainment_form_1', $id) : route('entertainment_form_1') }}"
                                    method="post" class="validation">
                                    @csrf
                                    <div class="container">
                                        <div class="text-center mb-6">
                                            <h3 class="mt-3 mt-1"><b>What type of entertainment & talent are you
                                                    listing?</b>
                                            </h3>
                                            <p class="">Enter the type of entertainment & talent that most closely
                                                represents
                                                the physical space being listed. <a href="#">Learn more</a></p>
                                        </div>
                                        <div class="mt-6">
                                            <p><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-5"
                                                    alt="">
                                                Examples: 'Comedian' 'Singers' 'Food & Beverages'
                                            </p>
                                            <input type="text" required name="comedian"
                                                value="{{ @$entertainment->comedian }}"
                                                data-parsley-required-message='Please Enter Comedian for event'
                                                class="w-100 p-4 bg-light-gray form-control"
                                                placeholder="Comedian for event">
                                            <hr class="bg-dark">
                                            <h1>what are your Entertainment and Talent rules</h1>
                                            <p>Include any rules about what your guests can and cannot do in the space.</p>
                                            <h3>Example rules:</h3>
                                            <ul style="list-style-type:disc">
                                                <li class="ms-4">No smoking in the building</li>
                                                <li class="ms-4">Outside catering is allowed</li>
                                                <li class="ms-4">No alcohol allowed after 8pm</li>
                                            </ul><br>
                                            <h2>Do not include:</h2>
                                            <ul style="list-style-type:disc">
                                                <li class="ms-4"><b><span style="color:black;">Cleaning Fee</span></b> -
                                                    Basic cleaning
                                                    is the
                                                    responsibility of the host. If you charge a cleaning fee, you can add it
                                                    in a
                                                    later section.</li>
                                                <li class="ms-4"><b><span style="color:black;">Contracts </span></b> -
                                                    Peerspace bookings
                                                    are
                                                    covered by our Service Agreement. Do not paste your contract,
                                                    cancellation
                                                    policy, or
                                                    liability policy.</li>
                                            </ul>
                                            <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                            <textarea style="height:150px;" class="form-control rounded-0" required name="house_rules"
                                                data-parsley-required-message="Please Enter house rules" data-parsley-minlength="100" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Enter your house rules">{{ @$entertainment->house_rules }}</textarea>
                                            <p class="text-end">Minimum 100 characters</h4>
                                                <br>
                                                <hr class="bg-dark"><br>
                                            <h3 class="mb-2"><b>Security cameras and recording devices</b></h3>
                                            <div class="w-50 float-start">
                                                <p class="mb-3">Does the event have security cameras or recording devices?
                                                </p>
                                            </div>
                                            <div class="w-50 float-end">
                                                <div class="form-check form-switch float-end">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="flexSwitchCheckChecked" checked onchange="toggleTextArea()">
                                                </div>
                                            </div>
                                            <br>
                                            <div id="textAreaDiv" class="mt-5">
                                                <p class="mb-1">Describe any device that records video, audio, or still
                                                    images.
                                                    Specify where each device is in your event and if they’ll be on or off.
                                                </p>
                                                <textarea cols="30" name="recordings" rows="5" class="w-100 p-5 form-control" placeholder="Add description">{{ @$entertainment->recordings }}</textarea>
                                                <p class="text-end">Minimum 50 characters</p>
                                            </div>
                                        </div>
                                        <hr class="bg-dark border-3">
                                    </div>
                                    <div class="float-end">
                                        <button class="btn btn-light" disabled>Previous</button>
                                        <button class="btn btn-primary">Next</button>
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
        <!-- INTERNAL File-Uploads Js-->
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
        <script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
        <!-- Jquery/buttons JS-->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.validation').parsley();
            });

            function toggleTextArea() {
                const checkbox = document.getElementById('flexSwitchCheckChecked');
                const textAreaDiv = document.getElementById('textAreaDiv');

                if (checkbox.checked) {
                    textAreaDiv.style.display = 'block'; // Show the text area
                } else {
                    textAreaDiv.style.display = 'none'; // Hide the text area
                }
            }
        </script>

        @include('layouts.components.setHoursScript')
    @endsection