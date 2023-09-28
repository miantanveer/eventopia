@extends('layouts.seller-web-layout')
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
</style>
@endsection
@section('content')
<!--Row open-->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div id="smartwizard-3">
                    <div>
                        <div id="step-8" class="mb-5">
                            <form action="{{route('entertainment_form_9',$id)}}" method="post" class="validation">
                                @csrf
                                <div class="container">
                                    <div class="text-center mb-6">
                                        <h3 class="mt-3 mt-1"><b>{{lang('Please review the following Eventopia
                                                policies')}}</b>
                                        </h3>
                                        <p class=""><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                class="w-5" alt=""> {{lang('I agree and
                                            understand that as a Eventopia host I am required to:')}}</p>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="on_company" type="checkbox"
                                                        value="keep on company" id="invalidCheck-1" required>
                                                    <label class="form-check-label" for="invalidCheck-1">
                                                        <p>{{lang('Keep conversations on Eventopia')}}</p>
                                                        <p>{{lang('Keep conversations with guests on the platform so
                                                            everyone
                                                            knows what was agreed to.')}}</p>
                                                    </label>
                                                </div>
                                                <hr class="bg-dark">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="company_payment"
                                                        type="checkbox" value="Company Payment" id="invalidCheck-2"
                                                        required>
                                                    <label class="form-check-label" for="invalidCheck-2">
                                                        <p>{{lang('Use Eventopia to process payments')}}</p>
                                                        <p>{{lang('All payments must be processed on Eventopia and honor
                                                            our
                                                            service fee. All payouts will be made via direct deposit to
                                                            your bank account.')}}</p>
                                                    </label>
                                                </div>
                                                <hr class="bg-dark">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="booking_and_cancellation"
                                                        type="checkbox" value="Booking and Cancellation policy"
                                                        id="invalidCheck-3" required>
                                                    <label class="form-check-label" for="invalidCheck-3">
                                                        <p>{{lang('Follow the booking, cancellation, and overtime
                                                            policies')}}</p>
                                                        <p>{{lang('All bookings are covered by the Eventopia Services
                                                            Agreement.
                                                            Contracts that conflict with these policies are not
                                                            allowed.')}}
                                                        </p>
                                                    </label>
                                                </div>
                                                <hr class="bg-dark">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="local_regulatioins"
                                                        type="checkbox" value="Local Regulations" id="invalidCheck-4"
                                                        required>
                                                    <label class="form-check-label" for="invalidCheck-4">
                                                        <p>{{lang('Make sure my space meets local regulations')}}</p>
                                                        <p>{{lang('Follow local regulations to ensure the safety of your
                                                            guests,
                                                            yourself, and your space.')}}</p>
                                                    </label>
                                                </div>
                                                <hr class="bg-dark">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-end">
                                    <a class="btn btn-light"
                                        href="{{ route('load_entertainment_form_8', $id) }}">{{lang('Previou')}}s</a>
                                    <button class="btn btn-primary">{{lang('Finish')}}</button>
                                </div>
                            </form>
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
    <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!-- Jquery/buttons JS-->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>

    <script>
        $(document).ready(function(){
                $('.validation').parsley();
            });
    </script>
    @endsection