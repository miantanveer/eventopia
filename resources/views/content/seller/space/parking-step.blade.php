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
                            <div id="step-2">
                                <form action="{{ route('add-parking',$space->id) }}" method="POST">
                                    @csrf
                                    <div style="text-align:center;">
                                        <h2>Step 2 of 9</h2>
                                        <h1><strong>What type of space are you listing?</strong></h1>
                                        <p><b>Enter the type of space that most closely represents the physical space being
                                                listed.
                                                Learn more</b></p>
                                    </div>
                                    <p> <img src="{{ asset('assets/images/users/spaces/6700.png') }}"
                                            alt="img"><b>Examples: 'Apartment' 'Photo Studio' 'Restaurant'</b></p>
                                    <select name="space_type_id" class="form-control text-white form-select select2"
                                        id="space_types">
                                        @foreach ($space_types as $space_type)
                                            <option value="{{$space_type->id }}" {{@$space->spaceType->id == $space_type->id ? 'selected' : ''}}>{{$space_type->type }}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <hr class="style1"><br>
                                    <div class="inner-steps2 mt-2 mb-3">
                                        <h1><strong>Describe the parking options</strong></h1>
                                        <div class="form-check form-switch">
                                            <p><b>Are there parking options at or near your space?</b>
                                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                                <input style="margin-left:32rem;" class="form-check-input" type="checkbox"
                                                    role="switch" id="flexSwitchCheckChecked3" checked
                                                    onchange="toggleOptions()">
                                            </p>
                                        </div>
                                        <h1><strong>Select all</strong></h1>
                                    </div>

                                    <div id="options">
                                        <div class="row">
                                            @foreach ($parking_options as $parking_option)
                                                <div class="col-4">
                                                    <label class="checkbox-inline">
                                                        <input name="parking_option[]" class="parking_option"
                                                            type="checkbox" value="{{ $parking_option->id }}"
                                                            @if($space->spaceHaveParkingOptions->contains('id', $parking_option->id)) checked @endif>
                                                            <span style="color:#434343"><b>{{ $parking_option->option }}</b></span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <h1 class="mt-4"><strong>Write a description of the parking options</strong></h1>
                                    <p> <img src="{{ asset('assets/images/users/spaces/6700.png') }}" alt="img">Don’t
                                        include private information. This will be shown publicly.</p>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1"></label>
                                        <textarea style="height:150px;" class="form-control rounded-0" name="parking_description"
                                            id="exampleFormControlTextarea1" rows="2">{{@$space->parking_description ?? ''}}</textarea>
                                        <p class="text-end">Minimum 35 characters</p>
                                        <br>
                                        <hr class="style1"><br>

                                        <div class="form-check form-switch">

                                            <div class="mt-6">
                                                <h3 class="mb-2 mt-md-7"><b>Security cameras and recording devices</b></h3>
                                                <div class="w-50 float-start">
                                                    <p class="mb-3">Does the event have security cameras or recording
                                                        devices?</p>
                                                </div>
                                                <div class="w-50 float-end">
                                                    <div class="form-check form-switch float-end">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="flexSwitchCheckChecked2" checked
                                                            onchange="toggleTextArea()">
                                                    </div>
                                                </div><br>

                                                <div id="textAreaDiv" class="mt-5">
                                                    <p class="mb-1">Describe any device that records video, audio, or
                                                        still
                                                        images.
                                                        Specify where each device is in your event and if they’ll be on or
                                                        off.
                                                    </p>
                                                    <textarea name="security_devices_description" id="security_devices_description" cols="30" rows="5"
                                                        class="form-control w-100 p-5" placeholder="Add description">{{@$space->security_devices_description ?? ''}}</textarea>
                                                    <p class="text-end">Minimum 50 characters</p>
                                                </div>
                                            </div>
                                            </p>
                                            <br>
                                            <hr class="style1"><br>
                                        </div>
                                    </div>
                                    <input type="hidden" name="last_step" value="2">
                                    <hr class="border-3 bg-dark">
                                    <div class="float-end">
                                        <a class="btn btn-light" href="{{route('edit-space-address',$space->id)}}">Previous</a>
                                        <button class="btn btn-primary">Next</button>
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
    {{-- <script src="{{ asset('assets/plugins/formwizard/jquery.smartWizard.js') }}"></script> --}}
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
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC5qN37hurCFwbFsZt2nzzwzGcbSt08R5E">
    </script>
    <script>
        function toggleTextArea() {
            const checkbox = document.getElementById('flexSwitchCheckChecked2');
            const textAreaDiv = document.getElementById('textAreaDiv');
            if (checkbox.checked) {
                textAreaDiv.style.display = 'block'; // Show the text area
            } else {
                $('#security_devices_description').val('');
                textAreaDiv.style.display = 'none'; // Hide the text area
            }
        }

        function toggleOptions() {
            const checkbox = document.getElementById('flexSwitchCheckChecked3');
            const textAreaDiv = document.getElementById('options');
            if (checkbox.checked) {
                options.style.display = 'block'; // Show the text area
            } else {
                $('.parking_option').prop('checked', false); // Uncheck all options
                options.style.display = 'none'; // Hide the text area
            }
        }
    </script>
@endsection
