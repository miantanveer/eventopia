@extends('layouts.seller-web-layout')

@section('styles')
    <style>
        .seller-web-sidebar {
            z-index: 9999;
        }

        .sw-btn-group-extra {
            display: none;

        }
        .parsley-minlength {
            font-size: 12px;
            color: #ff5c77;
            margin-top: 3px;
        }
    </style>
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="smartwizard-3">
                        <ul class="justify-content-around">
                            <li><a href="#step-1">About Service</a></li>
                            <li><a href="#step-2">Photos</a></li>
                            <li><a href="#step-3">Detail</a></li>
                            <li><a href="#step-4">Pricing</a></li>
                            <li><a href="#step-5">Team</a></li>
                        </ul>
                        <div>
                            <div id="step-1" class="mb-5">
                                <div class="text-center">
                                    <h2 class="fw-bolder">
                                        About your service
                                    </h2>
                                    <p>Create a title that will grab a guest’s interest and describes your entertainment &
                                        talent. Do not include your business’s name.</p>
                                </div>
                                <br>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ @$service !== null ? route('update_service_form_1',$service->id) :  route('service_form_1') }}" class="mt-4 mb-5 custom-validation" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <h3 class="fw-bolder">Add title to your service</h3>
                                        <select name="service_title" required data-parsley-required-message="This feild is required"
                                            class="form-control form-select select2 select2-hidden-accessible"
                                            tabindex="-1" aria-hidden="true" data-bs-placeholder="Select Service Title">
                                            <option value="VG" {{ @$service->title == 'VG' ? 'selected' : '' }}>Video Graphers</option>
                                            <option value="BS" {{ @$service->title == 'BS' ? 'selected' : '' }}>Beauty Services</option>
                                            <option value="SE" {{ @$service->title == 'SE' ? 'selected' : '' }}>Soloists & Ensembles</option>
                                            <option value="DL" {{ @$service->title == 'DL' ? 'selected' : '' }}>Dance Lessons</option>
                                            <option value="D" {{ @$service->title == 'D' ? 'selected' : '' }}>Decor</option>
                                            <option value="IN" {{ @$service->title == 'IN' ? 'selected' : '' }}>Invitations</option>
                                            <option value="RV" {{ @$service->title == 'RV' ? 'selected' : '' }}>Reception Venues</option>
                                            <option value="WPG" {{ @$service->title == 'WPG' ? 'selected' : '' }}>Wedding Photographers</option>
                                            <option value="WP" {{ @$service->title == 'WP' ? 'selected' : '' }}>Wedding Planners</option>
                                            <option value="WB" {{ @$service->title == 'WB' ? 'selected' : '' }}>Wedding Bands</option>
                                            <option value="WR" {{ @$service->title == 'WR' ? 'selected' : '' }}>Wedding Rentals</option>
                                            <option value="TRA" {{ @$service->title == 'TRA' ? 'selected' : '' }}>Transportation</option>
                                            <option value="TS" {{ @$service->title == 'TS' ? 'selected' : '' }}>Travel Specialists</option>
                                            <option value="BS" {{ @$service->title == 'BS' ? 'selected' : '' }}>Bar Services</option>
                                            <option value="FL" {{ @$service->title == 'FL' ? 'selected' : '' }}>Florists</option>
                                        </select>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                    <div class="form-group mt-3">
                                        <h3 class="fw-bolder">Describe your company</h3>
                                        <textarea name="description"  required data-parsley-required-message="Description is required" data-parsley-minlength="100" cols="30" rows="5" class="w-100 form-control" placeholder="About Seller">
                                            {{@$service->descrption}}
                                        </textarea>
                                        <p class="text-end mt-2">Minimum 100 characters</p>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <p><i class="fa fa-lock text-gray fs-3 me-3"></i> Don't worry, we'll only share
                                                this with customers after you have accepted their booking.</p>
                                        </div>
                                    </div>
                                    <hr class="border-3 bg-dark">
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
    </div>
@endsection

@section('scripts')
    <!-- INTERNAL File-Uploads Js-->
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

    <!-- INTERNAl Jquery.steps js -->
    <script src="{{ asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>

    <!-- INTERNAL Accordion-Wizard-Form js-->
    <script src="{{ asset('assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard.js') }}"></script>

    <!-- FORMELEMENTS JS -->
    <script src="{{ asset('assets/js/formelementadvnced.js') }}"></script>
    <script src="{{ asset('assets/js/form-elements.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.custom-validation').parsley();
        });
    </script>
@endsection
