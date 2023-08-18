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
        .dz-remove {
            color: red !important; /* Change to your desired color */
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
                        <div id="step-2" class="mb-5">
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
                            {{--  <input type="hidden" name="url" id="url" value='{{ route('service_form_3',$id) }}'>  --}}

                            <form action="{{ route('service_form_2') }}" method="post" id="filedrop" class="dropzone">
                                @csrf
                                @method('post')
                                <input type="hidden" name="service_id" id="service_id" value="{{ $id }}">
                                <div class="fallback">
                                    <input name="file" id="file" type="file" enctype="multipart/form-data"
                                        multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                    </div>

                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                            </form>
                            <div class="float-end mt-8">
                                <button class="btn btn-light">Previous</button>
                                <button class="btn btn-primary" onclick="upload()">Next</button>
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
    {{--  Upload JS  --}}
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

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
        var myDropzone;
        var alertShown = false; // Flag to track whether the alert has been shown

        Dropzone.autoDiscover = false;

        myDropzone = new Dropzone("form#filedrop", {
            autoProcessQueue: false,
            parallelUploads: 10,
            maxFilesize: 2,
            addRemoveLinks: true,
            acceptedFiles: ".png, .jpeg",
            init: function() {
                this.on("success", function(file, response) {
                    if (myDropzone.getQueuedFiles().length === 0 && myDropzone.getUploadingFiles().length === 0) {
                        var id = $('#service_id').val();
                        var url = 'http://eventopia.pk/service-form-3/'+id;
                        window.location.replace(url);
                    }
                });

                this.on("addedfile", function(file) {
                    if (!alertShown && myDropzone.files.length < 4) {
                        alertShown = true;
                        alert("Please upload at least 4 files.");
                    }
                });
            },
        });

        function upload() {
            if (alertShown && myDropzone.files.length < 4) {
                alert("Please upload at least 4 files.");
            }
            else{
                var files = myDropzone.files;
                myDropzone.processQueue(files);
            }
        }
    </script>
@endsection
