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
                        <ul>
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

                        </ul>
                        <div>
                            <div id="step-9" class="mb-5">
                                <h1 style="text-align:center;">Step 9 of 9</h1>
                                <div class="form">
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
                                                            data-parsley-required-message="Password is required*" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="exampleInputname1"
                                                            placeholder="Smith" required
                                                            data-parsley-required-message="Confirm Password is required*"
                                                            readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control" id="exampleInputEmail1"
                                                    placeholder="(123) 345 -4567" required
                                                    data-parsley-required-message="Email is required*" readonly>
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
                                                                space
                                                            </li>
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
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-3" required>
                                                            <label class="form-check-label" for="invalidCheck-3">Contacted
                                                                by
                                                                Peerspace</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-4" required>
                                                            <label class="form-check-label"
                                                                for="invalidCheck-4">TV</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-5" required>
                                                            <label class="form-check-label"
                                                                for="invalidCheck-5">Billboard</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-6" required>
                                                            <label class="form-check-label"
                                                                for="invalidCheck-6">Billboard</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-7" required>
                                                            <label class="form-check-label" for="invalidCheck-7">Online
                                                                ad</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-8" required>
                                                            <label class="form-check-label" for="invalidCheck-8">Social
                                                                media</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-9" required>
                                                            <label class="form-check-label" for="invalidCheck-9">Referral
                                                                from
                                                                a Eventopia host</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-10" required>
                                                            <label class="form-check-label" for="invalidCheck-10">Online
                                                                search</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-11" required>
                                                            <label class="form-check-label" for="invalidCheck-11">Attended
                                                                an
                                                                event in a Peerspace</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-12" required>
                                                            <label class="form-check-label"
                                                                for="invalidCheck-12">Other</label>
                                                        </div>
                                                    </div>
                                                    <hr class="bg-dark my-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <script src="{{ asset('assets/plugins/formwizard/jquery.smartWizard.js') }}"></script>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const uploadBtn = document.getElementById('uploadBtn');
            const imageUploadInput = document.getElementById('imageUploadInput');
            const avatarImage = document.getElementById('avatarImage');

            // Listen for click on the "Upload photo" button
            uploadBtn.addEventListener('click', function() {
                // Trigger the file input click event
                imageUploadInput.click();
            });

            // Listen for change in the file input (when user selects an image)
            imageUploadInput.addEventListener('change', function(event) {
                const selectedImage = event.target.files[0];

                // Validate if a file was selected and it is an image
                if (selectedImage && selectedImage.type.startsWith('image/')) {
                    // Read the selected image and set it as the source for the avatar image
                    const reader = new FileReader();
                    reader.onload = function() {
                        avatarImage.src = reader.result;
                    };
                    reader.readAsDataURL(selectedImage);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            toggleOptions();
            $('.sw-btn-next').on('click', function(e) {
                var checkSecondClass = $('.sw-btn-next').hasClass('last_step_btn');
                $('.last_step_btn').on('click', function(e) {
                    window.location.href = "{{ url('/steps-form-submit') }}";
                });
            });
        });
    </script>
    @include('layouts.components.setHoursScript')

    <script>
        $(document).ready(function() {
            $('#flexSwitchCheckChecked').on('click', function() {
                $('#mapColumn').toggleClass('d-none');
                $('#galleryColumn').toggleClass('col-lg-12');
            });
        });
    </script>
    <script nonce="">
        function onEmbedLoad() {
            initEmbed([null, null, null, null, null, null, null, ["en"],
                [null, null, null, "/maps/api/js/ApplicationService.GetEntityDetails", "/maps/embed/upgrade204",
                    null, "/maps/embed/record204"
                ], null, null, null, null, null, null, null, null, null, null, null, null, [
                    [
                        [120000000, 0, 0], null, null, 13.10000038146973
                    ]
                ], null, null, null, 0, null, null, null, null, null, null, [1]
            ]);
        }

        function onApiLoad() {
            var embed = document.createElement('script');
            embed.src = "https://maps.gstatic.com/maps-api-v3/embed/js/53/13/init_embed.js";
            document.body.appendChild(embed);
        }
    </script>

    <script>
        var searchInput = 'address';
        $(document).ready(function() {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                fields: ["address_components", "geometry"],
                types: ["address"],
            });
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
                var lat = place.geometry['location'].lat();
                var lng = place.geometry['location'].lng();
                var myarr = place.address_components;
                var keyapi = 'AIzaSyC5qN37hurCFwbFsZt2nzzwzGcbSt08R5E';
                $('#city').val('')
                $('#state').val('')
                $('#country').val('')
                $('#postal_code').val('')
                $('#lat').val(lat)
                $('#lng').val(lng)
                var myarr = place.address_components;
                for (let i = 0; i < myarr.length; i++) {
                    var components = myarr[i];
                    if (components.types[0] == 'postal_code') {
                        $('#postal_code').val(components.long_name)
                    } else if (components.types[0] == 'country') {
                        $('#country').val(components.long_name);
                    } else if (components.types[0] == 'administrative_area_level_1') {
                        $('#state').val(components.long_name)
                    } else if (components.types[0] == 'locality' || components.types[0] == 'postal_town' ||
                        components.types[0] == 'administrative_area_level_2') {
                        $('#city').val(components.long_name)
                    } else {}
                }
            });
        });
    </script>
@endsection
