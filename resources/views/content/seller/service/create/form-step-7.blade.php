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
                                {{lang('Company')}}
                            </h2>
                            <p>{{lang('Add company profile or details.')}}</p>
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
                        <form action="{{ route('service_form_7',$id) }}" enctype="multipart/form-data" class="mt-4 mb-5 validate" method="POST" id="last_form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row fieldGroup align-items-center">
                                        <h3 class="fw-bolder">{{lang('Company Name')}}</h3>
                                        <div class="col-md-11 col-10">
                                            <div class="form-group mt-3">
                                                <input type="text" name="destination" value="{{@$team->team_name}}" data-parsley-required-message="{{lang('Team name is required')}}" placeholder="{{lang('Enter Name')}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-2 ps-0">
                                            <a class="btn btn-success ms-1 addMore text-white mb-1">+</a>
                                        </div>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                    <div class="form-group mt-3">
                                        <h3 class="fw-bolder">{{lang('Description')}}</h3>
                                        <textarea name="decription" cols="30" rows="5" required data-parsley-required-message="{{lang('Description is required')}}" class="w-100 form-control" placeholder="{{lang('About Team')}}">{{lang(@$team->team_description)}}</textarea>
                                        <p class="text-end mt-2">{{lang('Minimum 100 characters')}}</p>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <p><i class="fa fa-lock text-gray fs-3 me-3"></i> {{lang("Don't worry, we'll
                                                only share
                                                this with customers after you have accepted their booking.")}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <input type="file" name='image' value="{{s3Link(@$team->image)}}" class="dropify" required data-parsley-errors-container='#file_error' data-parsley-required-message="{{lang('Team Image is required')}}"  />
                                        <div id="file_error"></div>
                                </div>
                            </div>
                            <hr class="border-3 bg-dark">
                            <div class="float-end mt-8">
                                <a class="btn btn-light" href="{{route('service-form-6',$id)}}">{{lang('Previous')}}</a>
                                <button class="btn btn-primary">{{lang('Finish')}}</button>
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
        $(document).ready(function() {
            $('.validate').parsley();
        });
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
