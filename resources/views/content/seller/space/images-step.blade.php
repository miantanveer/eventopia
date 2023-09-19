@extends('layouts.seller-web-layout')
@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
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
                    {{--<ul>
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
                                <h2 style="text-align:center;">{{lang('Step 4 of 9')}}</h2>
                                <div class="text-center">
                                    <h2 class="fw-bolder">
                                        {{lang('Upload photos of your Space')}}
                                    </h2>
                                    <p>{{lang('Photos are the first thing that guests will see. We recommend adding 10 or more high
                                        quality photos.')}}</p>
                                </div>
                                <div class="row">
                                    <h5>{{lang('Photo requirements:')}}</h5>
                                    <div class="col-md-6 col-12">
                                        <ul>
                                            <li class="m-3" style="list-style: circle">
                                                {{lang('High resolution - At least 1,000 pixels wide')}}
                                            </li>
                                            <li class="m-3" style="list-style: circle">
                                               {{lang(' Color photos - No black & white')}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <ul>
                                            <li class="mb-3 mx-3 mt-md-3 mt-0" style="list-style: circle">
                                                {{lang('Horizontal orientation - No vertical photos')}}
                                            </li>
                                            <li class="m-3" style="list-style: circle">
                                                {{lang('Misc. - No collages, screenshots, or watermarks')}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <input type="hidden" name="url" id="url" value='{{ route('operating-hour-step', $space->id) }}'>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('add-images',$space->id) }}" method="post" id="filedrop" class="dropzone .custom-validation">
                                    @csrf
                                    <div class="fallback">
                                        <input name="file" id="file" type="file" required
                                            enctype="multipart/form-data" multiple="multiple"
                                            required data-parsley-required-message="{{lang('Photos are required*')}}"
                                            data-parsley-errors-container="#file">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                        </div>

                                        <h4>{{lang('Drop files here or click to upload.')}}</h4>
                                    </div>
                                    <input type="hidden" name="last_step" value="4">
                                </form>
                                <div class="float-end mt-8">
                                    <a class="btn btn-light" href="{{route('about-step',$space->id)}}">{{lang('Previous')}}</a>
                                    <button class="btn btn-primary" onclick="upload()">{{lang('Next')}}</button>
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

    <script src="{{asset('assets/plugins/dropzone/dropzone.min.js')}}"></script>
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
            $('.custom-validation').parsley();
        });
        var myDropzone;
        var alertShown = false; // Flag to track whether the alert has been shown

        Dropzone.autoDiscover = false;

        myDropzone = new Dropzone("form#filedrop", {
            autoProcessQueue: false,
            parallelUploads: 10,
            maxFilesize: 2,
            addRemoveLinks: true,
            acceptedFiles: ".png, .jpeg, .jpg",
            init: function() {
                var uploads = 0;
                this.on("success", function(file, response) {
                    if (myDropzone.getQueuedFiles().length === 0 && myDropzone.getUploadingFiles()
                        .length === 0) {
                        var id = $('#service_id').val();
                        var url = $('#url').val();
                        window.location.replace(url);
                    }
                    uploads++
                });
            },
        });

        function upload() {
            if (alertShown === false && myDropzone.files.length < 4 || alertShown === false && myDropzone.files.length === 0 || alertShown === false && myDropzone.files.length > 8) {
                warningModal();
            } else {
                var files = myDropzone.files;
                myDropzone.processQueue(files);
            }
        }
    </script>
@endsection
