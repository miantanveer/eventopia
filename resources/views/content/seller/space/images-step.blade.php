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
                            <div id="step-4" class="mb-5">
                                <h2 style="text-align:center;">Step 4 of 9</h2>
                                <div class="text-center">
                                    <h2 class="fw-bolder">
                                        Upload photos of your services
                                    </h2>
                                    <p>Photos are the first thing that guests will see. We recommend adding 10 or more high
                                        quality photos.</p>
                                </div>
                                <div class="row">
                                    <h5>Photo requirements:</h5>
                                    <div class="col-6">
                                        <ul>
                                            <li class="m-3" style="list-style: circle">
                                                High resolution - At least 1,000 pixels wide
                                            </li>
                                            <li class="m-3" style="list-style: circle">
                                                Color photos - No black & white
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul>
                                            <li class="m-3" style="list-style: circle">
                                                Horizontal orientation - No vertical photos
                                            </li>
                                            <li class="m-3" style="list-style: circle">
                                                Misc. - No collages, screenshots, or watermarks
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <form class="mt-4 mb-5">
                                    <div class="control-group form-group row">
                                        <div class="col-12">
                                            <label class="form-label">Please add at least 4 space photos</label>
                                            <input id="demo" type="file" name="files"
                                                accept=".jpg, .png, image/jpeg, image/png" multiple>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <p><i class="ion-lightbulb text-warning fs-3 me-3"></i> Drag and drop your
                                                photos to change the order. Your first photo is what your guests will see
                                                when browsing so make sure it
                                                represents your space.</p>
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
