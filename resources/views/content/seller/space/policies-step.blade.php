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
                <div class="card-body">
                    <div id="smartwizard-3">
                        <div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ lang($error) }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div id="step-10" class="mb-5">
                                <div class="form">
                                    <form class="validation" action="{{ route('add-policies', $space->id) }}" id="policies_form" method="post">
                                        @csrf
                                        <div class="container">
                                            <div class="text-center mb-6">
                                                <h3 class="mt-3 mt-1">
                                                    <b>{{ lang('Please review the following Eventopia policies') }}</b>
                                                </h3>
                                                <p class=""><img
                                                        src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                        class="w-5" alt="">
                                                    {{ lang('I agree and
                                                                                                        understand that as a Peerspace host I am required to:') }}
                                                </p>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <div class="form-check mb-4">
                                                            <input class="form-check-input" type="checkbox" id="selectAll">
                                                            <label class="form-check-label" for="selectAll">
                                                                Select All
                                                            </label>
                                                        </div>

                                                        @foreach ($company_policies as $company_policy)
                                                            <div class="form-check">
                                                                <input class="form-check-input policy-checkbox"
                                                                    name="company_policy[]" type="checkbox"
                                                                    value="{{ $company_policy->id }}"
                                                                    id="invalidCheck{{ $company_policy->id }}">
                                                                <label class="form-check-label"
                                                                    for="invalidCheck{{ $company_policy->id }}">
                                                                    <p>{{ lang($company_policy->title) }}</p>
                                                                    <p>{{ lang($company_policy->description) }}</p>
                                                                </label>
                                                            </div>
                                                            <hr class="bg-dark">
                                                        @endforeach
                                                    </div>
                                                    <div id="p_error"></div>
                                                </div>

                                            </div>
                                            <input type="hidden" name="last_step" value="10">
                                            <input type="hidden" name="status" value="0">
                                        </div>
                                        <hr class="border-3 bg-dark">
                                        <div class="float-end">
                                            <a class="btn btn-light"
                                                href="{{ route('contact-step', $space->id) }}">{{ lang('Previous') }}</a>
                                            <button class="btn btn-primary">{{ lang('Next') }}</button>
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
    <script>
        $(document).ready(function() {
            $('.validation').parsley();
        });
    </script>
    <script>
        $(document).ready(function() {
            // Select All checkbox
            $('#selectAll').change(function() {
                $('.policy-checkbox').prop('checked', $(this).prop('checked'));
            });

            // Form submission
            $('#policies_form').submit(function(event) {
                var checkedPolicies = $('.policy-checkbox:checked');
                if (checkedPolicies.length < 4) {
                    event.preventDefault(); // Prevent form submission
                    alert('Please select all.');
                }
            });
        });
    </script>
@endsection
