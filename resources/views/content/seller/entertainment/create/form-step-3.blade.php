@extends('layouts.seller-web-layout')
@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection
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

        .dz-remove {
            color: red !important;
            /* Change to your desired color */
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
                        <ul class="justify-content-around">
                            <li><a href="#step-1">Step 1</a></li>
                            <li><a href="#step-2">Step 2</a></li>
                            <li><a href="#step-3">Step 3</a></li>
                            <li><a href="#step-4">Step 4</a></li>
                            <li><a href="#step-5">Step 5</a></li>
                            <li><a href="#step-6">Step 6</a></li>
                            <li><a href="#step-7">Step 7</a></li>
                            <li><a href="#step-8">Step 8</a></li>
                        </ul>
                        <div>

                            <div id="step-4">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('entertainment_form_3', $id) }}" method="POST"
                                    class="border mt-5 validate">
                                    @csrf
                                    <hr>
                                    <div class="row">
                                        <div class="card-header  mb-3">
                                            <h1 style="text-align:center;" class="card-title">Entertainment Address</h1>
                                        </div>
                                        <div class="card-body col-md-5 col-lg-12">
                                            <label class="form-control-label">Street Address</label>
                                            <span class="tx-danger">*</span></label>
                                            <input class="form-control rounded-0" value="{{ @$entertainment->address }}"
                                                id="address" name="address" placeholder="Add Address" required
                                                data-parsley-required-message="Please enter your address" type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6 mt-3">
                                            <label class="form-control-label">Country</label>
                                            <span class="tx-danger">*</span></label>
                                            <input class="form-control rounded-0" value="{{ @$entertainment->country }}"
                                                id="country" name="country" placeholder="" required readonly
                                                type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0 mt-3">
                                            <label class="form-control-label">State<span class="tx-danger">*</span></label>
                                            <input class="form-control rounded-0" value="{{ @$entertainment->state }}"
                                                id="state" name="state" placeholder="" required readonly
                                                type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6 mt-3">
                                            <label class="form-control-label">City</label> <span
                                                class="tx-danger">*</span></label>
                                            <input class="form-control rounded-0" id="city"
                                                value="{{ @$entertainment->city }}" name="city" placeholder="" required
                                                readonly type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0 mt-3">
                                            <label class="form-control-label">Postal Code<span
                                                    class="tx-danger">*</span></label>
                                            <input class="form-control rounded-0" value="{{ @$entertainment->postal_code }}"
                                                id="postal_code" name="postal_code" placeholder="" required
                                                data-parsley-required-message="Please enter a value" type="text">
                                        </div>
                                        <input type="hidden" name="lat" value="{{ @$entertainment->lat }}" id="lat">
                                        <input type="hidden" name="lng" value="{{ @$entertainment->lng }}" id="lng">
                                    </div>
                                    <br>
                                    <hr class="border-3 bg-dark">
                                    <div class="float-end mt-8">
                                        <a class="btn btn-light" href="{{ route('load_entertainment_form_2', $id) }}">Previous</a>
                                        <button class="btn btn-primary">Next</button>
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
        <script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
        <!-- Jquery/buttons JS-->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.js') }}"></script>
        <!-- Gogole Loaction API -->
        <script
            src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC5qN37hurCFwbFsZt2nzzwzGcbSt08R5E">
        </script>

        <script>
            $(document).ready(function() {
                $('.validate').parsley();
            });
        </script>

        <script>
            var searchInput = 'address';
            $(document).ready(function() {
                var autocomplete;
                autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                    fields: ["address_components", "geometry"],
                    types: ["address"],
                });
                google.maps.event.addListener(autocomplete, 'place_changed', function() {
                    var place = autocomplete.getPlace();
                    var lat = place.geometry['location'].lat();
                    var lng = place.geometry['location'].lng();
                    var myarr = place.address_components;
                    var keyapi = 'AIzaSyC5qN37hurCFwbFsZt2nzzwzGcbSt08R5E';
                    $('#city').val('')
                    $('#state').val('')
                    $('#country').val('')
                    $('#postal_code').val('')
                    $('#lat').val(lat)
                    $('#lng').val(lng)
                    var myarr = place.address_components;
                    for (let i = 0; i < myarr.length; i++) {
                        var components = myarr[i];
                        if (components.types[0] == 'postal_code') {
                            $('#postal_code').val(components.long_name)
                        } else if (components.types[0] == 'country') {
                            $('#country').val(components.long_name);
                        } else if (components.types[0] == 'administrative_area_level_1') {
                            $('#state').val(components.long_name)
                        } else if (components.types[0] == 'locality' || components.types[0] == 'postal_town' ||
                            components.types[0] == 'administrative_area_level_2') {
                            $('#city').val(components.long_name)
                        } else {}
                    }
                });
            });
        </script>
    @endsection
