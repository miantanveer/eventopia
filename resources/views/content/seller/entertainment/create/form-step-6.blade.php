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
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div id="step-5" class="mb-5">
                                <form action="{{route('entertainment_form_6',$id)}}" method="post" class="validation">
                                    @csrf
                                    <div class="container">
                                        <div class="text-center mb-6">
                                            <h3 class="mt-3 mt-1"><b>{{lang('Choose your Cancellation Policy')}}</b>
                                            </h3>
                                            <p class=""><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                    class="w-5" alt=""> {{lang('Hosts with more flexible cancellation
                                                policies attract more
                                                bookings.')}}</p>
                                            <hr class="bg-dark border-2">
                                        </div>
                                        <p class="mb-7">{{lang('Cancellation period: All Bookings are subject to Eventopia Period
                                            policy
                                            which provides a full refund for Bookings cancelled within 24 hours from receipt
                                            of
                                            a Booking Confirmation but no later than 48 hours prior to the Event start time.')}}
                                        </p>
                                        <div class="row">
                                            @foreach($cancellation as $key=>$data)
                                            <div class="col-3">
                                                <label class="custom-control">
                                                    <input type="radio" name="cancellation_policy" data-parsley-errors-container="#radio_errors" required
                                                    data-parsley-required-message='Please select atleast one option' value="v_flexible" {{@$entertainment->cancellation_policy == 'v_flexible' ? 'checked' : ''}}>
                                                    <span>{{$data->title}}</span>
                                                </label>
                                            </div>
                                            <div class="col-9">
                                                <p>{{$data->description}}
                                                </p>
                                            </div>
                                            <hr class="bg-dark border-2">
                                            @endforeach
                                        </div>
                                        <div id="radio_errors"></div>
                                    </div>
                                    <div class="float-end">
                                        <a class="btn btn-light"
                                            href="{{ route('load_entertainment_form_5', $id) }}">{{lang('Previous')}}</a>
                                        <button class="btn btn-primary">{{lang('Next')}}</button>
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
        <!-- Jquery/buttons JS-->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.js') }}"></script>
        <script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>

        @include('layouts.components.setHoursScript')
        <script>
            $(document).ready(function(){
                $('.validation').parsley();
            });
        </script>
    @endsection
