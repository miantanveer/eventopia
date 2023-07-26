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
                            <li><a href="#step-10">Address Space</a></li>
                            <li><a href="#step-11">Setup</a></li>
                            <li><a href="#step-12">About your Space</a></li>
                        </ul>
                        <div class="mb-5">
                            <h2 style="text-align:center;">Step 1 of 9</h2>
                            <div id="step-10" class="border">
                                <form>
                                    <div class="row">
                                        <div class="card-header mb-3">
                                            <h3 class="card-title">Space Address</h3>
                                        </div>
                                        <div class="col-md-5 col-lg-12">
                                            <label class="form-control-label">Country</label> <span
                                                class="tx-danger">*</span></label> <input class="form-control rounded-0"
                                                id="firstname" name="firstname" placeholder="Add" required=""
                                                type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6">
                                            <label class="form-control-label">Street Address</label> <span
                                                class="tx-danger">*</span></label> <input class="form-control rounded-0"
                                                id="firstname" name="firstname" placeholder="" required=""
                                                type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0">
                                            <label class="form-control-label">Address 2<span
                                                    class="tx-danger">*</span></label> <input class="form-control rounded-0"
                                                id="lastname" name="lastname" placeholder="" required="" type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6">
                                            <label class="form-control-label">City</label> <span
                                                class="tx-danger">*</span></label> <input class="form-control rounded-0"
                                                id="firstname" name="firstname" placeholder="" required=""
                                                type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0">
                                            <label class="form-control-label">Postal Code<span
                                                    class="tx-danger">*</span></label> <input class="form-control rounded-0"
                                                id="lastname" name="lastname" placeholder="" required="" type="text">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="step-11" class="border">
                                <div style="text-align:center;">
                                    <h2>Step 2 of 9</h2>
                                    <h2>What type of space are you listing?</h2>
                                    <p>Enter the type of space that most closely represents the physical space being listed.
                                        Learn more</p>
                                </div>
                                <p style="margin-left:25rem;"> <img src="{{ asset('assets/images/users/spaces/6700.png') }}"
                                        alt="img">Examples: 'Apartment' 'Photo Studio' 'Restaurant'</p>
                                <input style="width:980px;margin-left:25rem;" type="text" class="form-control rounded-0"
                                    id="inputtext" placeholder="Gallery for art">
                                <form>
                                    <div class="form-group">
                                        <label>Street Address *</label>
                                        <input type="text" class="form-control" id="inputtext"
                                            placeholder="Enter User Name">
                                    </div>
                                    <div class="form-group">
                                        <label>City *</label>
                                        <input type="email" class="form-control" id="exampleInputEmail8" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="password" class="form-control" id="exampleInputPassword9"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Zip Code *</label>
                                        <input type="password" class="form-control" id="exampleInputPassword9"
                                            placeholder="">
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
                            <div id="step-12" class="">
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
