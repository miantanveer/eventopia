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
    <div class="col-12 mt-lg-9">
        <div class="card">
            <div class="card-body">
            <form action="{{ route('entertainment_form_3', $id) }}" method="POST"
                            class="border mt-lg-6 validation">
                <div class="row">
                    <div id="step-4" class="col-lg-7 col-12">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                            @csrf
                            <div class="row">
                                <div class="card-header mb-3">
                                    <h1 style="text-align:center;" class="card-title">
                                        {{ lang('Entertainment Address') }}</h1>
                                </div>
                                <div class="col-12">
                                    <label class="form-control-label">{{ lang('Street Address') }}</label>
                                    <span class="tx-danger">*</span></label>
                                    <input class="form-control rounded-0" value="{{ @$entertainment->address }}"
                                        id="address" name="address" placeholder="{{ lang('Add Address') }}" required
                                        data-parsley-required-message="{{ lang('Please enter your address') }}"
                                        type="text">
                                </div>
                                <div class="col-6 mt-3">
                                    <label class="form-control-label">{{ lang('Country') }}</label>
                                    <span class="tx-danger">*</span></label>
                                    <input class="form-control rounded-0" value="{{ @$entertainment->country }}"
                                        id="country" name="country" placeholder="" required type="text">
                                </div>
                                <div class="col-6 mg-t-20 mg-md-t-0 mt-3">
                                    <label class="form-control-label">{{ lang('State') }}<span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control rounded-0" value="{{ @$entertainment->state }}"
                                        id="state" name="state" placeholder="" required type="text">
                                </div>
                                <div class="col-6 mt-3">
                                    <label class="form-control-label">{{ lang('City') }}</label> <span
                                        class="tx-danger">*</span></label>
                                    <input class="form-control rounded-0" id="city" value="{{ @$entertainment->city }}"
                                        name="city" placeholder="" required type="text">
                                </div>
                                <div class="col-6 mg-t-20 mg-md-t-0 mt-3">
                                    <label class="form-control-label">{{ lang('Postal Code') }}<span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control rounded-0" value="{{ @$entertainment->postal_code }}"
                                        id="postal_code" name="postal_code" placeholder="" required
                                        data-parsley-required-message="{{ lang('Please enter a value') }}" type="text">
                                </div>
                                <input type="hidden" name="lat" value="{{ @$entertainment->lat }}" id="lat">
                                <input type="hidden" name="lng" value="{{ @$entertainment->lng }}" id="lng">
                            </div>
                            <br>
                            <hr class="border-3 bg-dark">
                        
                    </div>
                    <div class="col-lg-5 col-12 mt-5 mt-lg-0">
                        <div class="map_height overflow-auto" id="mapContainer">
                            <h4 class="fw-bolder">
                                {{ lang('Use the map pin position to add an address.') }}
                            </h4>
                            <div id="map" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>
                <div class="float-end mt-8">
                    <a class="btn btn-light" href="{{ route('load_entertainment_form_2', $id) }}">{{
                        lang('Previous')}}</a>
                    <button class="btn btn-primary">{{ lang('Next') }}</button>
                </div>
                </form>
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

    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC5qN37hurCFwbFsZt2nzzwzGcbSt08R5E">
    </script>

    <script>
        var searchInput = 'address';
            $(document).ready(function() {
                $('.validation').parsley();
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

    <script>
        var map;
            var marker;

            function initializeMap() {
                var mapOptions = {
                    center: {
                        lat: 0,
                        lng: 0
                    },
                    zoom: 10,
                };

                map = new google.maps.Map(document.getElementById('map'), mapOptions);

                marker = new google.maps.Marker({
                    position: map.getCenter(),
                    map: map,
                    draggable: true,
                });

                // Listen for marker dragend event
                google.maps.event.addListener(marker, 'dragend', function() {
                    var latlng = marker.getPosition();
                    getAddressFromLatLng(latlng);
                });
            }

            // Initialize the map when the page loads
            google.maps.event.addDomListener(window, 'load', initializeMap);
    </script>

    <script>
        // Function to update the form fields with the address
            function updateFormFieldsWithAddress(addressComponents) {
                for (let i = 0; i < addressComponents.length; i++) {
                    var component = addressComponents[i];
                    if (component.types.includes('country')) {
                        $('#country').val(component.long_name);
                    } else if (component.types.includes('administrative_area_level_1')) {
                        $('#state').val(component.long_name);
                    } else if (component.types.includes('locality') || component.types.includes('postal_town') || component
                        .types.includes('administrative_area_level_2')) {
                        $('#city').val(component.long_name);
                    } else if (component.types.includes('postal_code')) {
                        $('#postal_code').val(component.long_name);
                    }
                }
            }

            // Function to get address from latlng
            function getAddressFromLatLng(latlng) {
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'location': latlng
                }, function(results, status) {
                    if (status === 'OK') {
                        if (results[0]) {
                            var addressComponents = results[0].address_components;
                            updateFormFieldsWithAddress(addressComponents);
                            var fullAddress = results[0].formatted_address;
                            $('#address').val(fullAddress);
                            $('#lat').val(latlng.lat());
                            $('#lng').val(latlng.lng());
                            console.log('Full Address: ' + fullAddress);
                        } else {
                            console.error('No results found');
                        }
                    } else {
                        console.error('Geocoder failed due to: ' + status);
                    }
                });
            }

            // Wait for the page to load before initializing the map
            $(document).ready(function() {
                initializeMap(); // Initialize the map
            });
    </script>
    @endsection