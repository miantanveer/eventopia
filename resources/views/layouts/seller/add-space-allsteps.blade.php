@extends('layouts.seller-web-layout')
@section('styles')
<style>
    .seller-web-sidebar {
        z-index: 9999;
    }

    #step-2 {
        width: 900px;
        margin: 0 auto;
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
                        <li><a href="#step-1">Address Space</a></li>
                        <li><a href="#step-2">Setup</a></li>
                        <li><a href="#step-3">About your Space</a></li>
                    </ul>
                    <div>

                        <div id="step-1" class="border">
                            <form>
                                <h2 style="text-align:center;">Step 1 of 9</h2>
                                <div class="row">
                                    <div class="card-header mb-3">
                                        <h3 class="card-title">Space Address</h3>
                                    </div>

                                    <div class="col-md-5 col-lg-12">
                                        <label class="form-control-label">Country</label> <span class="tx-danger">*</span></label> <input class="form-control rounded-0" id="firstname" name="firstname" placeholder="Add" required="" type="text">
                                    </div>
                                    <div class="col-md-5 col-lg-6">
                                        <label class="form-control-label">Street Address</label> <span class="tx-danger">*</span></label> <input class="form-control rounded-0" id="firstname" name="firstname" placeholder="" required="" type="text">
                                    </div>
                                    <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0">
                                        <label class="form-control-label">Address 2<span class="tx-danger">*</span></label> <input class="form-control rounded-0" id="lastname" name="lastname" placeholder="" required="" type="text">
                                    </div>
                                    <div class="col-md-5 col-lg-6">
                                        <label class="form-control-label">City</label> <span class="tx-danger">*</span></label> <input class="form-control rounded-0" id="firstname" name="firstname" placeholder="" required="" type="text">
                                    </div>
                                    <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0">
                                        <label class="form-control-label">Postal Code<span class="tx-danger">*</span></label> <input class="form-control rounded-0" id="lastname" name="lastname" placeholder="" required="" type="text">
                                    </div>
                                </div>

                            </form>
                        </div>


                        <div id="step-2">
                            <div style="text-align:center;">
                                <h2>Step 2 of 9</h2>
                                <h2>What type of space are you listing?</h2>
                                <p>Enter the type of space that most closely represents the physical space being listed.<span style="color:#006CE4">Learn more</span> </p>
                            </div>
                            <p> <img src="{{ asset('assets/images/users/spaces/6700.png') }}" alt="img">Examples: 'Apartment' 'Photo Studio' 'Restaurant'</p>
                            <input type="text" class="form-control rounded-0" id="inputtext" placeholder="Gallery for art">
                            <div class="inner-steps mt-5 mb-3">
                                <h1><strong>Describe the parking options</strong></h1>
                                <div class="form-check form-switch">
                                    <p><b>Are there parking options at or near your space?</b>
                                        <input style="margin-left:25rem;height:22px;width:35px;background-color:#000000" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                    </p>
                                    <h1><strong>Select all</strong></h1>
                                </div>



                            </div>

                            <form>
                                <div class="form-group mb-0 justify-content-end">
                                    <div class="checkbox-inline">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Free onsite parking
                                            </span>
                                        </label>
                                    </div>


                                    <div class="">
                                        <label class="custom-control custom-checkbox checkbox-inline">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Paid onsite parking</span>
                                        </label>
                                    </div>


                                    <div class="">
                                        <label class="custom-control custom-checkbox checkbox-inline">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Free street parking</span>
                                        </label>
                                    </div>


                                    <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Valet</span>
                                        </label>
                                    </div>


                                    <div class="col-md-5 col-lg-6">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Metered street parking</span>
                                        </label>
                                    </div>


                                    <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Nearby parking lot</span>
                                        </label>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div id="step-3" class="">
                    <div class="form-group mb-0 justify-content-end">
                        <div class="col-md-5 col-lg-6">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
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