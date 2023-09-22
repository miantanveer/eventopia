@extends('layouts.seller-web-layout')
@section('styles')
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
                <div class="card-body p-md-5 p-0">
                    <div id="smartwizard-3">
                        <div>
                            <div id="step-5" class="">
                                <h2 style="text-align:center;">{{lang('Step 5 of 9')}}</h2>
                                <form id="form-step-1" action="{{ route('add-operating-hours', $space->id) }}" method="POST"
                                    class="border mt-5">
                                    @csrf
                                    <div class="card-body border p-4 pb-5">
                                        <div class="text-center mb-4">
                                            <h2 class="mx-4 fw-bolder">{{lang('What are your operating hours?')}}</h2>
                                            <p class="mx-4">{{lang('Operating hours are the days and hours of the week that your
                                                space is open to host
                                                bookings (i.e. your general availability). Guests
                                                will not be able to book times outside of your operating hours. Learn More.')}}
                                            </p>
                                        </div>
                                        <div class="text-start mb-4">
                                            <p> {{lang('Birthday event - 23408 Bernier Cliff Suite 526')}} </p>
                                        </div>
                                        <div class="text-start bg-gray-light">
                                            <p class="p-5"><i class="mdi mdi-alert-circle"></i> &nbsp; &nbsp; {{lang('Operating
                                                hours end times are
                                                restricted to 12 AM for this space type. Read our Social Events Policy for
                                                more
                                                information.')}}</p>
                                        </div>
                                        @include('layouts.components.setHoursHTMLCode')
                                        <hr style="border-top: 1px solid black">
                                        <div class="text-end mb-2 mt-5">
                                        </div>
                                        <div class="float-end mt-8">
                                            <a class="btn btn-light" href="{{route('images-step',$space->id)}}">{{lang('Previous')}}</a>
                                            <button class="btn btn-primary">{{lang('Next')}}</button>
                                        </div>
                                </form>
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

    @include('layouts.components.setHoursScript')
@endsection
