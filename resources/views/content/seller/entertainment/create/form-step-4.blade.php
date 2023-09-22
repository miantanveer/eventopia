@extends('layouts.seller-web-layout')
@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection
@section('styles')
    <style>
        .tab-content {
            min-height: auto !important;
        }

        .sw-container {
            min-height: auto !important;
        }

        .back-g-color {
            background-color: #F2F8FF !important;
        }

        .sw-btn-group-extra {
            display: none;
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

        .dz-remove {
            color: red !important;
            /* Change to your desired color */
        }

        @media screen and (min-width: 0px) and (max-width: 500px) {
            .h3_sz{
                font-size: 1.3rem;
            }
        }
    </style>
@endsection
@section('content')
    <!--Row open-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="smartwizard-3">
                        {{-- <ul class="justify-content-around">
                            <li><a href="#step-1">Step 1</a></li>
                            <li><a href="#step-2">Step 2</a></li>
                            <li><a href="#step-3">Step 3</a></li>
                            <li><a href="#step-4">Step 4</a></li>
                            <li><a href="#step-5">Step 5</a></li>
                            <li><a href="#step-6">Step 6</a></li>
                            <li><a href="#step-7">Step 7</a></li>
                            <li><a href="#step-8">Step 8</a></li>
                        </ul> --}}
                        <div>

                            <div id="step-3" class="mb-5">
                                <div class="container">
                                    <div class="text-center mb-6">
                                        <h3 class="mt-3 mt-1 h3_sz"><b>{{lang('Upload photos / videos of your entertainment &
                                                talent')}}</b>
                                        </h3>
                                        <p class="">{{lang('Photos / videos are the first thing that guests will see. We
                                            recommend
                                            adding 10 or more high quality photos.')}}</p>
                                    </div>
                                    <p class="mb-3"><b>{{lang('Photo requirements:')}}</b></p>
                                    <div class="row mb-5">
                                        <div class="col-md-6">
                                            <li>{{lang('High resolution - At least 1,000 pixels wide')}}</li>
                                            <li>{{lang('Horizontal orientation - No vertical photos')}}</li>
                                        </div>
                                        <div class="col-md-6">
                                            <li>{{lang('Color photos - No black & white')}}</li>
                                            <li>{{lang('Misc. - No collages, screenshots, or watermarks')}}</li>
                                        </div>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <input type="hidden" name="url" id="url"
                                        value="{{ route('load_entertainment_form_5', $id) }}">
                                    <form action="{{ route('entertainment_form_4', $id) }}" method="post" id="filedrop"
                                        class="dropzone .custom-validation">
                                        @csrf
                                        @method('post')
                                        <div class="fallback">
                                            <input name="file" id="file" type="file" required
                                                enctype="multipart/form-data" multiple="multiple">
                                        </div>
                                        <div class="dz-message needsclick">
                                            <div class="mb-3">
                                                <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                            </div>

                                            <h4>{{lang('Drop files here or click to upload.')}}</h4>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-12">
                                            <p><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-5"
                                                    alt=""> {{lang('Drag and drop your photos to change
                                                the order. Your
                                                first photo
                                                is what your guests will see when browsing so make sure it represents
                                                your
                                                space.')}}</p>
                                        </div>
                                    </div>
                                    <hr class="bg-dark border-3">
                                </div>
                                <div class="float-end">
                                    <a class="btn btn-light"
                                        href="{{ route('load_entertainment_form_3', $id) }}">{{lang('Previous')}}</a>
                                    <button class="btn btn-primary" onclick="upload()">{{lang('Next')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--row closed-->
    @endsection
    @section('scripts')
        <!-- Jquery/min JS-->
        <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
        <!-- INTERNAL File-Uploads Js-->
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <!-- Jquery/buttons JS-->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.js') }}"></script>
        <script>
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
                    var dropzone = this; // Store a reference to the Dropzone instance
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
