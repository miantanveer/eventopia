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

    @media(min-width:0px) and (max-width:991px) {
        .space-address-box{
            height: 95% !important;
        }
    }

    @media(min-width:0px) and (max-width:701px) {

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
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form id="form-step-1" class="validation"
                        action="{{ @$space !== null ? route('update-space-address', $space->id) : route('add-address') }}"
                        method="POST">
                        @csrf
                        <div id="step-1">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div style="height: 75%;" class="border mt-5 space-address-box">
                                        <h2 style="text-align:center;">{{ lang('Step 1 of 9') }}</h2>
                                        <div class="row">
                                            <div class="card-header  mb-3">
                                                <h1 style="text-align:center;" class="card-title">{{ lang('Space
                                                    Address')
                                                    }}
                                                </h1>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-control-label">{{ lang('Street Address') }}</label>
                                                <span class="tx-danger">*</span></label> <input
                                                    class="form-control rounded-0" id="address" name="address"
                                                    placeholder="{{ lang('Add Address') }}" required
                                                    value="{{ @$space->address }}" type="text">
                                            </div>
                                            <div class="col-6 mt-3">
                                                <label class="form-control-label">{{ lang('Country') }}</label> <span
                                                    class="tx-danger">*</span></label> <input
                                                    class="form-control rounded-0" id="country" name="country"
                                                    placeholder="" required value="{{ @$space->country }}" type="text">
                                            </div>
                                            <div class="col-6 mt-3">
                                                <label class="form-control-label">{{ lang('State') }}<span
                                                        class="tx-danger">*</span></label>
                                                <input class="form-control rounded-0" id="state" name="state"
                                                    placeholder="" value="{{ @$space->state }}" required type="text">
                                            </div>
                                            <div class="col-6 mt-3">
                                                <label class="form-control-label">{{ lang('City') }}</label> <span
                                                    class="tx-danger">*</span></label> <input
                                                    class="form-control rounded-0" id="city" name="city" placeholder=""
                                                    required value="{{ @$space->city }}" type="text">
                                            </div>
                                            <div class="col-6 mt-3">
                                                <label class="form-control-label">{{ lang('Postal Code') }}<span
                                                        class="tx-danger">*</span></label> <input
                                                    class="form-control rounded-0" id="postal_code" name="postal_code"
                                                    required placeholder="" value="{{ @$space->postal_code }}"
                                                    type="text">
                                            </div>
                                            <input type="hidden" name="lat" id="lat">
                                            <input type="hidden" name="lng" id="lng">
                                            <input type="hidden" name="last_step" value="1">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 mt-5">
                                    <div class="card custom-card">
                                        <div class="card-body map_height overflow-auto" id="mapContainer">
                                            <h4 class="fw-bolder">{{lang('Use the map pin
                                                position
                                                to add an
                                                address.')}}</h4>
                                            <div id="map" style="height: 400px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="border-3 bg-dark">
                        <div class="float-end">
                            <a class="btn btn-light" href="{{ route('list-space') }}">{{ lang('Previous') }}</a>
                            <button class="btn btn-primary">{{ lang('Next') }}</button>
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
<script
    src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key={{ config('googlemap.GOOGLE_MAP_KEY') }}">
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
                var keyapi = '{{ config('googlemap.GOOGLE_MAP_KEY') }}';
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
