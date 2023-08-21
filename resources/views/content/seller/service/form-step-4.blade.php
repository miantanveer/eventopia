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
                    <div id="step-4" class="">
                        <div class="text-center">
                            <h2 class="fw-bolder">
                                Pricing for services
                            </h2>
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
                        <form action="{{ route('service_form_4') }}" method="post" class="mt-4 mb-5 validate">
                            @csrf
                            <input type="hidden" name="service_id" value="{{ $id }}">
                            <div class="form-group m-0">
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" data-parsley-errors-container="#radio_errors" required data-parsley-required-message='Please select atleast one option'  value="0-500">
                                        <span class="custom-control-label">0 - 500</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" data-parsley-errors-container="#radio_errors" value="500-1000">
                                        <span class="custom-control-label">500 - 1000</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" data-parsley-errors-container="#radio_errors" value="1000-5000">
                                        <span class="custom-control-label">1000 - 5000</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" data-parsley-errors-container="#radio_errors"
                                            value="5000-10000">
                                        <span class="custom-control-label">5000 - 10000</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" data-parsley-errors-container="#radio_errors" value="20k+">
                                        <span class="custom-control-label">20k+</span>
                                    </label>
                                </div>
                                <div id="radio_errors"></div>
                            </div>
                            <hr class="border-3 bg-dark">
                            <div class="float-end mt-8">
                                <button class="btn btn-light">Previous</button>
                                <button class="btn btn-primary">Next</button>
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
    </script>
@endsection
