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
                            <div id="step-10" class="mb-5">
                                <div class="form">
                                    <div class="container">
                                        <div class="text-center mb-6">
                                            <h3 class="mt-3 mt-1"><b>Please review the following Eventopia policies</b>
                                            </h3>
                                            <p class=""><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                    class="w-5" alt=""> I agree and
                                                understand that as a Peerspace host I am required to:</p>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-1" required>
                                                        <label class="form-check-label" for="invalidCheck-1">
                                                            <p>Keep conversations on Eventopia</p>
                                                            <p>Keep conversations with guests on the platform so everyone
                                                                knows what was agreed to.</p>
                                                        </label>
                                                    </div>
                                                    <hr class="bg-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-2" required>
                                                        <label class="form-check-label" for="invalidCheck-2">
                                                            <p>Use Eventopia to process payments</p>
                                                            <p>All payments must be processed on Eventopia and honor our
                                                                service fee. All payouts will be made via direct deposit to
                                                                your bank account.</p>
                                                        </label>
                                                    </div>
                                                    <hr class="bg-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-3" required>
                                                        <label class="form-check-label" for="invalidCheck-3">
                                                            <p>Follow the booking, cancellation, and overtime policies</p>
                                                            <p>All bookings are covered by the Eventopia Services Agreement.
                                                                Contracts that conflict with these policies are not allowed.
                                                            </p>
                                                        </label>
                                                    </div>
                                                    <hr class="bg-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-4" required>
                                                        <label class="form-check-label" for="invalidCheck-4">
                                                            <p>Make sure my space meets local regulations</p>
                                                            <p>Follow local regulations to ensure the safety of your guests,
                                                                yourself, and your space.</p>
                                                        </label>
                                                    </div>
                                                    <hr class="bg-dark">
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
