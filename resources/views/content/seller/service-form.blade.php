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
                    {!! $page !!}
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
    {{--  <script src="{{ asset('assets/plugins/formwizard/jquery.service.smartWizard.js') }}"></script>
    <script src="{{ asset('assets/plugins/formwizard/Service.fromwizard.js') }}"></script>  --}}

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
