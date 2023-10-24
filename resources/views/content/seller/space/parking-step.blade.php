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

        .parsley-minlength {
            font-size: 12px;
            color: #ff5c77;
            margin-top: 3px;
        }
        @media(min-width:0px) and (max-width:991px) {
            .h1-se-sz{
                font-size: 80% !important;
            }
            .p-ser-sz, .img-sz-p{
                font-size: 90% !important;
            }

            .se-sz{
                font-size: 70% !important;
            }
        }

        /* @media(min-width:0px) and (max-width:701px) {
            .h1-se-sz{
                font-size: 80% !important;
            }
            .p-ser-sz, .img-sz-p{
                font-size: 90% !important;
            }

            .se-sz{
                font-size: 70% !important;
            }
        } */
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
                    <div class="row" id="smartwizard-3">
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
                            <div id="step-2">
                                <form class="validation" action="{{ route('add-parking', $space->id) }}" method="POST">
                                    @csrf
                                    <div class="text-center">
                                        <h2>{{ lang('Step 2 of 9') }}</h2>
                                        <h1><strong class="h1-se-sz">{{ lang('What type of space are you listing?') }}</strong></h1>
                                        <p><b class="p-ser-sz">{{ lang('Enter the type of space that most closely represents the physical space being listed. Learn more') }}</b>
                                        </p>
                                    </div>
                                    <p class="img-sz-p"> <img src="{{ asset('assets/images/users/spaces/6700.png') }}"
                                            alt="img"><b>{{ lang("Examples: 'Apartment' 'Photo Studio' 'Restaurant'") }}</b>
                                    </p>
                                    <select name="space_type_id" id="space_types" required
                                        class="form-control text-white select2-show-search form-select"
                                        data-placeholder="Choose one">
                                        @foreach ($space_types as $space_type)
                                            <option value="{{ $space_type->id }}"
                                                {{ @$space->spaceType->id == $space_type->id ? 'selected' : '' }}>
                                                {{ lang($space_type->type) }}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <hr class="style1"><br>
                                    <div class="inner-steps2 mt-2 mb-3">
                                        <h1><strong class="h1-se-sz">{{ lang('Describe the parking options') }}</strong></h1>
                                            <div class="col-12">
                                                <p><b>{{ lang('Are there parking options at or near your space?') }}</b></p>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check float-end     pb-3 p-0 form-switch">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                                <input  class="form-check-input"
                                                    type="checkbox" role="switch" id="flexSwitchCheckChecked3" checked
                                                    onchange="toggleOptions()">
                                                </div>

                                            </div>
                                        <h3><strong>{{ lang('Select all') }}</strong></h3>
                                    </div>
                                    <div id="options">
                                        <div class="row">
                                            @foreach ($parking_options as $parking_option)
                                                <div class="col-4">
                                                    <label class="checkbox-inline">
                                                        <input name="parking_option[]" class="parking_option"
                                                            type="checkbox" value="{{ $parking_option->id }}"
                                                            @if ($space->spaceHaveParkingOptions->contains('id', $parking_option->id)) checked @endif>
                                                        <span
                                                            style="color:#434343"><b>{{ lang($parking_option->option) }}</b></span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <br>
                                        <hr class="style1"><br>

                                    <h1 class="mt-4">
                                        <strong>{{ lang('Write a description of space listing') }}</strong></h1>
                                    <p> <img src="{{ asset('assets/images/users/spaces/6700.png') }}"
                                            alt="img">{{ lang("Don’t include private information. This will be shown publicly.") }}
                                    </p>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1"></label>
                                        <textarea style="height:150px;" required class="form-control rounded-0" name="parking_description"
                                            id="exampleFormControlTextarea1" rows="2">{{ lang(@$space->parking_description ?? '') }}</textarea>
                                        <br>
                                        <hr class="style1"><br>

                                        <div class="form-check form-switch">

                                            <div class="mt-6">
                                                <h3 class="mb-2 mt-md-7">
                                                    <b class="h1-se-sz">{{ lang('Security cameras and recording devices') }}</b></h3>
                                                <div class="row">
                                                    <div class="col-8 float-start">
                                                        <p class="mb-3 h1-se-sz">
                                                            {{ lang("Does the event have security cameras or recording devices?") }}
                                                        </p>
                                                    </div>
                                                    <div class="col-4 float-end">
                                                        <div class="form-check form-switch float-end">
                                                            <input class="form-check-input" type="checkbox" role="switch"
                                                                id="flexSwitchCheckChecked2" checked
                                                                onchange="toggleTextArea()">
                                                        </div>
                                                    </div><br>
                                                </div>
                                                    <div id="textAreaDiv" class="mt-5">
                                                        <p class="mb-1 sh1-se-sz">
                                                            {{ lang("Describe any device that records video, audio, or mages. Specify where each device is in your event and if they’ll be on or off.") }}
                                                        </p>
                                                        <textarea name="security_devices_description" id="security_devices_description" cols="30" rows="5"
                                                            class="form-control w-100 p-5" placeholder="{{ lang('Add description') }}">{{ lang(@$space->security_devices_description ?? '') }}</textarea>
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
                                        <a class="btn btn-light"
                                            href="{{ route('edit-space-address', $space->id) }}">{{ lang('Previous') }}</a>
                                        <button class="btn btn-primary">{{ lang('Next') }}</button>
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
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key={{ config('googlemap.GOOGLE_MAP_KEY') }}">
    </script>
    <script>
        $(document).ready(function() {
            $('.validation').parsley();
        });

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
