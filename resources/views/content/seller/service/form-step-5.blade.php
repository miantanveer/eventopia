@extends('layouts.seller-web-layout')

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
                    <div id="step-5" class="">
                        <div class="text-center">
                            <h2 class="fw-bolder">
                                Team
                            </h2>
                            <p>Add team profile or details.</p>
                        </div>
                        <br>
                        <form action="{{route('service_form_5')}}" class="mt-4 mb-5" method="POST" id="last_form">
                            @csrf
                            <input type="hidden" name="service_id" value="{{ $id }}">
                            <div class="row">
                                <div class="col-9">
                                    <div class="row fieldGroup align-items-center">
                                        <h3 class="fw-bolder">Full Name</h3>
                                        <div class="col-11">
                                            <div class="form-group mt-3">
                                                <input type="text" name="destination" placeholder="Enter Name"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-1 ps-0">
                                            <a class="btn btn-success ms-1 addMore text-white mb-1">+</a>
                                        </div>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                    <div class="form-group mt-3">
                                        <h3 class="fw-bolder">Description</h3>
                                        <textarea name="decription" cols="30" rows="5" class="w-100 form-control" placeholder="About Team"></textarea>
                                        <p class="text-end mt-2">Minimum 100 characters</p>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <p><i class="fa fa-lock text-gray fs-3 me-3"></i> Don't worry, we'll
                                                only share
                                                this with customers after you have accepted their booking.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <input type="file" class="dropify"
                                        data-bs-default-file="{{ asset('assets/images/media/1.jpg') }}"
                                        data-bs-height="180" />
                                </div>
                            </div>
                            <hr class="border-3 bg-dark">
                            <div class="float-end mt-8">
                                <button class="btn btn-light">Previous</button>
                                <button class="btn btn-primary">Finish</button>
                            </div>
                        </form>
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

    <!-- INTERNAl Upload js -->
    <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
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
        var maxGroup = 4;
        $(".addMore").click(function() {
            var ri = $('.fieldGroup').length;
            if ($('body').find('.fieldGroup').length < maxGroup) {
                var fieldHTML =
                    `<div class="row fieldGroup align-items-center my-3">
                            <div class="col-11">
                                <div class="form-group">
                                    <input type="text" name="destination${ri}" placeholder="Enter Name" class="form-control team-class">
                                </div>
                            </div>
                            <div class="col-1 ps-0">
                                <a class="btn btn-danger remove ms-1 text-white mb-4" style="padding-left:1.1rem; padding-right:1.1rem;"> - </a>
                            </div>
                        </div>`;
                        var team = $('.team-class').val();

                $('body').find('.fieldGroup:last').after(fieldHTML);
            } else {
                alert('Maximum ' + maxGroup + ' are allowed.');
            }
        });
        $("body").on("click", ".remove", function() {
            $(this).parents(".fieldGroup").remove();
        });
    </script>
@endsection
