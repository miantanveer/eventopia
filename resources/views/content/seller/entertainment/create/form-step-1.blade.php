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

    .parsley-minlength {
        font-size: 12px;
        color: #ff5c77;
        margin-top: 3px;
    }

    @media screen and (min-width: 0px) and (max-width: 500px) {
        .h1_font-sz {
            font-size: 1rem !important;
        }
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
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div id="step-1" class="mb-5">
                            <form
                                action="{{ @$entertainment !== null ? route('update_entertainment_form_1', $id) : route('entertainment_form_1') }}"
                                method="post" class="validation">
                                @csrf
                                <div class="container">
                                    <div class="text-center mb-6">
                                        <h3 class="mt-3 mt-1"><b>{{lang('What type of entertainment & talent are you
                                                listing?')}}</b>
                                        </h3>
                                        <p class="">{{lang('Enter the type of entertainment & talent that most closely
                                            represents
                                            the physical space being listed.')}} <a href="#">{{lang('Learn more')}}</a>
                                        </p>
                                    </div>
                                    <div class="mt-6">
                                        <p><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-5"
                                                alt="">
                                            {{lang("Examples: 'Comedian' 'Singers' 'Food & Beverages'")}}
                                        </p>
                                        <select name="comedian" required
                                            class="form-control text-white select2-show-search form-select"
                                            data-placeholder="Choose one">
                                            @foreach ($ent_types as $ent_type)
                                            <option value="{{ $ent_type->name }}" {{ @$entertainment->comedian == $ent_type->name ? 'selected' : '' }}>
                                                {{ lang($ent_type->name) }}</option>
                                            @endforeach
                                        </select>
                                        {{-- <input type="text" required name="comedian"
                                            value="{{ @$entertainment->comedian }}"
                                            data-parsley-required-message='{{lang(' Please Enter Comedian for event')}}'
                                            class="w-100 p-4 bg-light-gray form-control"
                                            placeholder="{{lang('Comedian for event')}}"> --}}
                                        <hr class="bg-dark">
                                        <h1 class="h1_font-sz"><b>{{lang('what are your Entertainment and Talent
                                                rules')}}</b></h1>
                                        <p>{{lang('Include any rules about what your guests can and cannot do in the
                                            space.')}}</p>
                                        <h3 class="h1_font-sz">{{lang('Example rules:')}}</h3>
                                        <ul style="list-style-type:disc">
                                            <li class="ms-4">{{lang('No smoking in the building')}}</li>
                                            <li class="ms-4">{{lang('Outside catering is allowed')}}</li>
                                            <li class="ms-4">{{lang('No alcohol allowed after 8pm')}}</li>
                                        </ul><br>
                                        <h2 class="h1_font-sz">{{lang('Do not include:')}}</h2>
                                        <ul style="list-style-type:disc">
                                            <li class="ms-4"><b><span style="color:black;">{{lang('Cleaning
                                                        Fee')}}</span></b> -
                                                {{lang('Basic cleaning
                                                is the
                                                responsibility of the host. If you charge a cleaning fee, you can add it
                                                in a
                                                later section.')}}</li>
                                            <li class="ms-4"><b><span style="color:black;">{{lang('Contracts')}}
                                                    </span></b> -
                                                {{lang('Eventopia bookings
                                                are
                                                covered by our Service Agreement. Do not paste your contract,
                                                cancellation
                                                policy, or
                                                liability policy.')}}</li>
                                        </ul>
                                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                        <textarea style="height:150px;" class="form-control rounded-0" required
                                            name="house_rules" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="{{lang('Enter your entertainment rules')}}">{{ @$entertainment->house_rules }}</textarea>
                                        <br>
                                        <hr class="bg-dark"><br>
                                        <h3 class="mb-2 h1_font-sz"><b>{{lang('Security cameras and recording
                                                devices')}}</b></h3>
                                        <div class="w-50 float-start">
                                            <p class="mb-3">{{lang('Does the event have security cameras or recording
                                                devices?')}}
                                            </p>
                                        </div>
                                        <div class="w-50 float-end">
                                            <div class="form-check form-switch float-end">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" checked onchange="toggleTextArea()">
                                            </div>
                                        </div>
                                        <br>
                                        <div id="textAreaDiv" class="mt-5">
                                            <p class="mb-1">{{lang('Describe any device that records video, audio, or
                                                still
                                                images.
                                                Specify where each device is in your event and if they’ll be on or
                                                off.')}}
                                            </p>
                                            <textarea cols="30" name="recordings" id="recordings" rows="5"
                                                class="w-100 p-5 form-control" required
                                                placeholder="{{lang('Add description')}}">{{ @$entertainment->recordings }}</textarea>
                                        </div>
                                    </div>
                                    <hr class="bg-dark border-3">
                                </div>
                                <div class="float-end">
                                    <button class="btn btn-light" disabled>{{lang('Previous')}}</button>
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
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <!-- Jquery/buttons JS-->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script>
        $(document).ready(function() {
                $('.validation').parsley();
            });

            function toggleTextArea() {
                const checkbox = document.getElementById('flexSwitchCheckChecked');
                const textAreaDiv = document.getElementById('textAreaDiv');

                if (checkbox.checked) {
                    textAreaDiv.style.display = 'block'; // Show the text area
                    $('#recordings').attr('required', 'required');
                } else {
                    textAreaDiv.style.display = 'none'; // Hide the text area
                    $('#recordings').removeAttr('required');
                }
            }
    </script>

    @include('layouts.components.setHoursScript')
    @endsection
