@extends('layouts.seller-web-layout')
@section('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    {{--  <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />  --}}
@endsection
@section('styles')
    <style>
        .seller-web-sidebar {
            z-index: 9999;
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
                        <ul class="justify-content-around">
                            <li><a href="#step-1">{{lang('About Service')}}</a></li>
                            <li><a href="#step-2">{{lang('Photos')}}</a></li>
                            <li><a href="#step-3">{{lang('Detail')}}</a></li>
                            <li><a href="#step-4">{{lang('Pricing')}}</a></li>
                            <li><a href="#step-5">{{lang('Team')}}</a></li>
                        </ul>
                        <div>
                            <div id="step-1" class="mb-5">
                                <div class="text-center">
                                    <h2 class="fw-bolder">
                                        {{lang('About your service')}}
                                    </h2>
                                    <p>{{lang('Create a title that will grab a guest’s interest and describes your entertainment &
                                        talent. Do not include your business’s name.')}}</p>
                                </div>
                                <br>


                                <form action="{{route('service_form_1')}}" class="mt-4 mb-5" >
                                    <div class="form-group">
                                        <h3 class="fw-bolder">{{lang('Add title to your service')}}</h3>
                                        <select name="service-title"
                                            class="form-control form-select select2 select2-hidden-accessible"
                                            tabindex="-1" aria-hidden="true" data-bs-placeholder="{{lang('Select Service Title')}}">
                                            <option value="VG">{{lang('Video Graphers')}}</option>
                                            <option value="BS">{{lang('Beauty Services')}}</option>
                                            <option value="SE">{{lang('Soloists & Ensembles')}}</option>
                                            <option value="DL">{{lang('Dance Lessons')}}</option>
                                            <option value="D">{{lang('Decor')}}</option>
                                            <option value="IN">{{lang('Invitations')}}</option>
                                            <option value="RV">{{lang('Reception Venues')}}</option>
                                            <option value="WPG">{{lang('Wedding Photographers')}}</option>
                                            <option value="WP">{{lang('Wedding Planners')}}</option>
                                            <option value="WB">{{lang('Wedding Bands')}}</option>
                                            <option value="WR">{{lang('Wedding Rentals')}}</option>
                                            <option value="TRA">{{lang('Transportation')}}</option>
                                            <option value="TS">{{lang('Travel Specialists')}}</option>
                                            <option value="BS">{{lang('Bar Services')}}</option>
                                            <option value="FL">{{lang('Florists')}}</option>
                                        </select>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                    <div class="form-group mt-3">
                                        <h3 class="fw-bolder">{{lang('Describe your company')}}</h3>
                                        <textarea name="decription" cols="30" rows="5" class="w-100 form-control" placeholder="{{lang('About Seller')}}"></textarea>
                                        <p class="text-end mt-2">{{lang('Minimum 100 characters')}}</p>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <p><i class="fa fa-lock text-gray fs-3 me-3"></i> {{lang('Don't worry, we'll only share
                                                this with customers after you have accepted their booking.')}}</p>
                                        </div>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                </form>

                            </div>
                            <div id="step-2" class="mb-5">
                                <div class="text-center">
                                    <h2 class="fw-bolder">
                                        {{lang('Upload photos of your services')}}
                                    </h2>
                                    <p>{{lang('Photos are the first thing that guests will see. We recommend adding 10 or more high
                                        quality photos.')}}</p>
                                </div>
                                <div class="row">
                                    <h5>{{lang('Photo requirements:')}}</h5>
                                    <div class="col-6">
                                        <ul>
                                            <li class="m-3" style="list-style: circle">
                                                {{lang('High resolution - At least 1,000 pixels wide')}}
                                            </li>
                                            <li class="m-3" style="list-style: circle">
                                                {{lang('Color photos - No black & white')}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul>
                                            <li class="m-3" style="list-style: circle">
                                               {{lang(' Horizontal orientation - No vertical photos')}}
                                            </li>
                                            <li class="m-3" style="list-style: circle">
                                               {{lang(' Misc. - No collages, screenshots, or watermarks')}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <form id="filedrop" class="dropzone">
                                    @csrf
                                    <div class="fallback">
                                        <input name="file" id="file" type="file" enctype="multipart/form-data"
                                            multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                        </div>

                                        <h4>{{lang('Drop files here or click to upload.')}}</h4>
                                    </div>

                                </form>
                            </div>
                            <div id="step-3" class="">
                                <div class="text-center">
                                    <h2 class="fw-bolder">
                                        {{lang('Detail')}}
                                    </h2>
                                    <p>{{lang('Create a title that will grab a guest’s interest and describes your entertainment &
                                        talent. Do not include your business’s name.')}}</p>
                                </div>
                                <br>
                                <form class="mt-4 mb-5">
                                    <div class="form-group mt-3">
                                        <h3 class="fw-bolder">{{lang('Destination Weddings')}}</h3>
                                        <input type="text" name="destination" placeholder="{{lang('Destination Wedding Planning')}}"
                                            class="form-control">
                                    </div>
                                    <hr class="border-3 bg-dark">
                                    <div class="form-group mt-3">
                                        <h3 class="fw-bolder">{{lang('Planning')}}</h3>
                                        <textarea name="decription" cols="30" rows="5" class="w-100 form-control"
                                            placeholder="{{lang('e.g. Budgeting, Destination, Wedding Design')}}"></textarea>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                    <div class="form-group mt-3">
                                        <h3 class="fw-bolder">{{lang('Wedding Activities')}}</h3>
                                        <textarea name="decription" cols="30" rows="5" class="w-100 form-control"
                                            placeholder="{{lang('e.g. Engagement Party, Honeymoon, Rehearsals & Parties')}}"></textarea>
                                    </div>
                                    <br>
                                    <hr class="border-3 bg-dark">
                                </form>
                            </div>
                            <div id="step-4" class="">
                                <div class="text-center">
                                    <h2 class="fw-bolder">
                                        {{lang('Pricing for services')}}
                                    </h2>
                                </div>
                                <br>
                                <form class="mt-4 mb-5">
                                    <div class="form-group m-0">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="price-1"
                                                    value="option1">
                                                <span class="custom-control-label">0 - 500</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="price-2"
                                                    value="option2">
                                                <span class="custom-control-label">500 - 1000</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="price-3"
                                                    value="option3">
                                                <span class="custom-control-label">1000 - 5000</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="price-4"
                                                    value="option4">
                                                <span class="custom-control-label">5000 - 10000</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="price-5"
                                                    value="option4">
                                                <span class="custom-control-label">20k+</span>
                                            </label>
                                        </div>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                </form>
                            </div>
                            <div id="step-5" class="">
                                <div class="text-center">
                                    <h2 class="fw-bolder">
                                        {{lang('Team')}}
                                    </h2>
                                    <p>{{lang('Add team profile or details.')}}</p>
                                </div>
                                <br>
                                <form class="mt-4 mb-5" id="last_form">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row fieldGroup align-items-center">
                                                <h3 class="fw-bolder">{{lang('Full Name')}}</h3>
                                                <div class="col-11">
                                                    <div class="form-group mt-3">
                                                        <input type="text" name="destination" placeholder="{{lang('Enter Name')}}"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-1 ps-0">
                                                    <a class="btn btn-success ms-1 addMore text-white mb-1">+</a>
                                                </div>
                                            </div>
                                            <hr class="border-3 bg-dark">
                                            <div class="form-group mt-3">
                                                <h3 class="fw-bolder">{{lang('Description')}}</h3>
                                                <textarea name="decription" cols="30" rows="5" class="w-100 form-control" placeholder="{{lang('About Team')}}"></textarea>
                                                <p class="text-end mt-2">{{lang('Minimum 100 characters')}}</p>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p><i class="fa fa-lock text-gray fs-3 me-3"></i> {{lang('Don't worry, we'll
                                                        only share
                                                        this with customers after you have accepted their booking.')}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <input type="file" class="mydropify"
                                                data-bs-default-file="{{ asset('assets/images/media/1.jpg') }}"
                                                data-bs-height="180" />
                                        </div>
                                    </div>
                                    <hr class="border-3 bg-dark">
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
    {{--  <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>  --}}
    {{--  <script src="{{ asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>  --}}
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    <!-- FORM WIZARD JS-->
    {{--  <script src="{{ asset('assets/plugins/formwizard/jquery.smartWizard.js') }}"></script>  --}}
    <script src="{{ asset('assets/plugins/formwizard/jquery.service.smartWizard.js') }}"></script>
    <script src="{{ asset('assets/plugins/formwizard/Service.fromwizard.js') }}"></script>

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
        $(document).ready(function() {
            var finishBtn = $('.sw-btn-group-extra').addClass('d-none');

            $('.sw-btn-next').on('click', function(e) {
                var checkSecondClass = $('.sw-btn-next').hasClass('last_step_btn');
                $('.last_step_btn').on('click', function(e) {
                    // console.log("asdf");
                    window.location.href = '{{ url('/steps-form-submit') }}';
                });
            });
        });
    </script>
@endsection
