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
                    <div id="smartwizard-3">
                        <ul class="justify-content-around">
                            <li><a href="#step-1">About Service</a></li>
                            <li><a href="#step-2">Photos</a></li>
                            <li><a href="#step-3">Detail</a></li>
                            <li><a href="#step-4">Pricing</a></li>
                            <li><a href="#step-5">Team</a></li>
                        </ul>
                        <div id="step-3">
                            <div class="text-center">
                                <h2 class="fw-bolder">
                                    Detail
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
                            <form action='{{ route('service_form_3') }}'  class="mt-4 mb-5 validate">
                                <input type="hidden" name="service_id" value="{{ $id }}">
                                <div class="form-group mt-3">
                                    <h3 class="fw-bolder">Destination Weddings</h3>
                                    <input type="text" name="destination" required data-parsley-required-message="Destination weddings is required" placeholder="Destination Wedding Planning"
                                        class="form-control">
                                </div>
                                <hr class="border-3 bg-dark">
                                <div class="form-group mt-3">
                                    <h3 class="fw-bolder">Planning</h3>
                                    <textarea name="planning" cols="30" required data-parsley-required-message="Planning is required" rows="5" class="w-100 form-control"
                                        placeholder="e.g. Budgeting, Destination, Wedding Design"></textarea>
                                </div>
                                <hr class="border-3 bg-dark">
                                <div class="form-group mt-3">
                                    <h3 class="fw-bolder">Wedding Activities</h3>
                                    <textarea name="activities" required data-parsley-required-message="Wedding Activities is required" cols="30" rows="5" class="w-100 form-control"
                                        placeholder="e.g. Engagement Party, Honeymoon, Rehearsals & Parties"></textarea>
                                </div>
                                <br>
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
        })
    </script>
@endsection
