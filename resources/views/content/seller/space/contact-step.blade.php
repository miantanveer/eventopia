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
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div id="step-9" class="mb-5">
                                <h1 style="text-align:center;">{{lang('Step 9 of 9')}}</h1>
                                <form class="validation" method="POST" action="{{ route('add-contact-info', $space->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="mb-lg-5 mb-3">
                                                <h2 class="mb-1"><b class="h-3">{{lang('Who will guests be contacting?')}}</b>
                                                </h2>
                                                <b>{{lang('Please do not use a business name, so it’s more personal for your
                                                    guests.')}}</b>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="c_u_fname"
                                                            placeholder="{{lang('john')}}" required
                                                            value="{{ @$space->c_u_fname ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="c_u_lname"
                                                            placeholder="{{lang('Smith')}}" required
                                                            value="{{ @$space->c_u_lname ?? '' }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control" name="c_u_phone"
                                                    placeholder="(123) 345 -4567" required
                                                    value="{{ @$space->c_u_phone ?? '' }}">
                                            </div>
                                            <div class="bg-light-gray p-3 mb-3">
                                                <p class="ms-3 m-0"><i class="fa fa-info-circle me-4"></i>{{lang('Your number
                                                    needs
                                                    to be verified')}}</p>
                                            </div>
                                            <p class="mb-5">{{lang('We won’t share your number publicly. Guests will only see it
                                                after they book to coordinate with you.')}}</p>
                                            <hr class="bg-dark my-6">
                                        </div>
                                        <div class="col-4">
                                            <div class="text-center chat-image mb-5">
                                                <div class="avatar avatar-xxl chat-profile mb-3 brround"
                                                    id="uploadContainer">
                                                    <a class="" href="#">
                                                        <img alt="avatar"
                                                            src="{{ @$space->c_u_img ?? asset('assets/images/users/23.jpeg') }}"
                                                            class="avatar avatar-xxl chat-profile mb-3 brround"
                                                            id="avatarImage">
                                                    </a>
                                                </div>
                                                <div class="text-center">
                                                    <button type="button"
                                                        class="bg-primary text-white p-3 border-0 text-center"
                                                        id="uploadBtn">{{lang('Upload
                                                        photo')}}</button>
                                                </div>
                                                <!-- Hidden input for image upload -->
                                                <input type="file" id="imageUploadInput" name="c_u_img"
                                                    style="display: none">
                                            </div>
                                            <div class="text-center px-8">
                                                <p class="text-muted">{{lang('Choose a friendly, accurate photo to help instill a
                                                    sense of trust and verification in your listing')}}</p>
                                            </div>
                                            <div class="px-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                                    class="w-4" alt=""> {{lang('No photos of the
                                                                space')}}
                                                            </li>
                                                            <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                                    class="w-4" alt=""> {{lang('No business logos')}}
                                                            </li>
                                                            <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                                    class="w-4" alt="">{{lang(' No group photos')}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="last_step" value="9">
                                        <div class="row">
                                            <div class="col-9">
                                                <h3><b class="h-3">{{lang('How did you hear about entertainment / talent with
                                                        Eventopia?')}}</b></h3>
                                                <p>{{lang('Select all that apply to help us find more hosts like you.')}}</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="invalidCheck-1">
                                                            <label class="form-check-label" for="invalidCheck-1">{{lang('Friend,
                                                                family, or colleague')}}</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="invalidCheck-2">
                                                            <label class="form-check-label" for="invalidCheck-2">{{lang('News or
                                                                blog
                                                                article')}}</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-3">
                                                            <label class="form-check-label" for="invalidCheck-3">{{lang('Contacted
                                                                by
                                                                Peerspace')}}</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-4">
                                                            <label class="form-check-label"
                                                                for="invalidCheck-4">{{lang('TV')}}</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-5">
                                                            <label class="form-check-label"
                                                                for="invalidCheck-5">{{lang('Billboard')}}</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-6">
                                                            <label class="form-check-label"
                                                                for="invalidCheck-6">{{lang('Billboard')}}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-7">
                                                            <label class="form-check-label" for="invalidCheck-7">{{lang('Online
                                                                ad')}}</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-8">
                                                            <label class="form-check-label" for="invalidCheck-8">{{lang('Social
                                                                media')}}</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-9">
                                                            <label class="form-check-label" for="invalidCheck-9">{{lang('Referral
                                                                from
                                                                a Eventopia host')}}</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-10">
                                                            <label class="form-check-label" for="invalidCheck-10">{{lang('Online
                                                                search')}}</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-11">
                                                            <label class="form-check-label" for="invalidCheck-11">{{lang('Attended
                                                                an
                                                                event in a Peerspace')}}</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-12">
                                                            <label class="form-check-label"
                                                                for="invalidCheck-12">{{lang('Other')}}</label>
                                                        </div>
                                                    </div>
                                                    <hr class="bg-dark my-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                    <div class="float-end">
                                        <a class="btn btn-light"
                                            href="{{ route('activities-step', ['space_id' => $space->id, 'key' => 0]) }}">{{lang('Previous')}}</a>
                                        <button class="btn btn-primary">{{lang('Next')}}</button>
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
            $('.validation').parsley();
        });
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
@endsection
