@extends('layouts.seller-web-layout')

@section('styles')
    <style>
        .seller-web-sidebar {
            z-index: 9999;
        }

        .step-anchor {
            justify-content: space-around;
        }

        .sw-btn-group-extra {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="smartwizard-3">
                        <ul>
                            <li><a href="#step-1">Photos</a></li>
                            <li><a href="#step-2">About Service</a></li>
                            <li><a href="#step-3">Detail</a></li>
                            <li><a href="#step-4">Pricing</a></li>
                            <li><a href="#step-5">Team</a></li>
                        </ul>
                        <div>
                            <div id="step-1" class="mb-5">
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
                                            <p><i class="ion-lightbulb text-warning fs-3 me-3"></i> Drag and drop your photos to change the order. Your first photo is what your guests will see when browsing so make sure it
                                            represents your space.</p>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div id="step-2" class="">
                                <form>
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input type="text" class="form-control" id="inputtext"
                                            placeholder="Enter User Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail8"
                                            placeholder="Enter email address">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword9"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group mb-0 justify-content-end">
                                        <div class="">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox2"
                                                    value="option2">
                                                <span class="custom-control-label">Check me Out</span>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="step-3" class="">
                                <div class="form-group mb-0 justify-content-end">
                                    <div class="">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2"
                                                value="option2">
                                            <span class="custom-control-label">I agree terms &
                                                Conditions</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div id="step-4" class="">
                                <div class="form-group mb-0 justify-content-end">
                                    <div class="">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2"
                                                value="option2">
                                            <span class="custom-control-label">I agree terms &
                                                Conditions</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div id="step-5" class="">
                                <div class="form-group mb-0 justify-content-end">
                                    <div class="">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2"
                                                value="option2">
                                            <span class="custom-control-label">I agree terms &
                                                Conditions</span>
                                        </label>
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
@endsection
