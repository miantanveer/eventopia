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
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div id="step-7" class="">
                                <h2 style="text-align:center;">{{lang('Step 7 of 9')}}</h2>
                                <div id="step-5" class="mb-5">
                                    <form class="validation" action="{{ route('add-cancel-policy', $space->id) }}" method="post">
                                        @csrf
                                        <div class="container">
                                            <div class="text-center mb-6">
                                                <h3 class="mt-3 mt-1"><b>{{lang('Choose your Cancellation Policy')}}</b>
                                                </h3>
                                                <p class=""><img
                                                        src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                        class="w-5" alt="">{{lang(' Hosts with more flexible cancellation
                                                    policies attract more
                                                    bookings.')}}</p>
                                                <hr class="bg-dark border-2">
                                            </div>
                                            <p class="mb-7">{{lang('Cancellation period: All Bookings are subject to Eventopia
                                                Period
                                                policy
                                                which provides a full refund for Bookings cancelled within 24 hours from
                                                receipt
                                                of
                                                a Booking Confirmation but no later than 48 hours prior to the Event start
                                                time.')}}
                                            </p>
                                            <input type="hidden" name="last_step" value="7">
                                            <div class="row">
                                                {{-- @dd($space->cancellationPolicy); --}}
                                                @foreach ($cancel_policies as $cancel_policy)
                                                    <div class="col-md-3 col-12">
                                                        <label class=" flex-basis-20-sm flex-basis-100" for="{{$cancel_policy->title}}">
                                                            <input type="radio" required data-parsley-required-message="{{lang('Please select a value')}}" data-parsley-errors-container="#c_error" id="{{$cancel_policy->title}}"
                                                                name="cancellation_policy_id" value="{{$cancel_policy->id}}" {{@$space->cancellationPolicy->id == $cancel_policy->id ? 'checked' : ''}}>
                                                            <span>{{lang($cancel_policy->title)}}</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-9 col-12">
                                                        <p>{{lang($cancel_policy->description)}}
                                                        </p>
                                                    </div>
                                                    <hr class="bg-dark border-2">
                                                @endforeach
                                            </div>
                                            <div id="c_error"></div>
                                        </div>
                                        <div class="float-end">
                                            <a class="btn btn-light" href="{{route('safety-measure-step',$space->id)}}">{{lang('Previous')}}</a>
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
    <script>
        $(document).ready(function() {
            $('.validation').parsley();
        });
    </script>
@endsection
