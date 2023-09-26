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
                            <form action="{{ route('service_form_4', $id) }}" method="POST" class="border mt-5 validate">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-8 mb-5   ">
                                        <div class="mb-3">
                                            <label class="form-control-label">{{ lang('Service Category') }}</label>
                                            <select name="category" required
                                                data-parsley-reqired-meassage="Please Select a value"
                                                class="form-control form-select select2-show-search">
                                                @foreach ($service_category as $key => $data)
                                                    <option value="{{ $data->name }}"
                                                        {{ @$service->category == $data->name ? 'selected' : '' }}>
                                                        {{ lang($data->name) }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h1 style="text-align:center;" class="card-title my-3">
                                                    {{ lang('Service Address') }}
                                                </h1>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-control-label">{{ lang('Street Address') }}</label>
                                                <span class="tx-danger">*</span></label>
                                                <input class="form-control rounded-0" value="{{ @$service->address }}"
                                                    id="address" name="address" placeholder="{{ lang('Add Address') }}"
                                                    required
                                                    data-parsley-required-message="{{ lang('Please enter your address') }}"
                                                    type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 mt-3">
                                                <label class="form-control-label">{{ lang('Country') }}</label>
                                                <span class="tx-danger">*</span></label>
                                                <input class="form-control rounded-0" value="{{ @$service->country }}"
                                                    id="country" name="country" placeholder="" required type="text">
                                            </div>
                                            <div class="col-6 mt-3">
                                                <label class="form-control-label">{{ lang('State') }}<span
                                                        class="tx-danger">*</span></label>
                                                <input class="form-control rounded-0" value="{{ @$service->state }}"
                                                    id="state" name="state" placeholder="" required type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 mt-3">
                                                <label class="form-control-label">{{ lang('City') }}</label> <span
                                                    class="tx-danger">*</span></label>
                                                <input class="form-control rounded-0" id="city"
                                                    value="{{ @$service->city }}" name="city" placeholder="" required
                                                    type="text">
                                            </div>
                                            <div class="col-6 mt-3">
                                                <label class="form-control-label">{{ lang('Postal Code') }}<span
                                                        class="tx-danger">*</span></label>
                                                <input class="form-control rounded-0" value="{{ @$service->postal_code }}"
                                                    id="postal_code" name="postal_code" placeholder="" required
                                                    data-parsley-required-message="{{ lang('Please enter a value') }}"
                                                    type="text">
                                            </div>
                                        </div>
                                        <input type="hidden" name="lat" value="{{ @$service->lat }}" id="lat">
                                        <input type="hidden" name="lng" value="{{ @$service->lng }}" id="lng">
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="map_height overflow-auto" id="mapContainer">
                                            <h4 class="fw-bolder">
                                                {{ lang('Use the map pin position to add an address.') }}
                                            </h4>
                                            <div id="map" style="height: 400px;"></div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <br>
                        <hr class="border-3 bg-dark">
                        <div class="float-end mt-8">
                            <a class="btn btn-light" href="{{ route('service-form-3', $id) }}">{{ lang('Previous') }}</a>
                            <button class="btn btn-primary">{{ lang('Next') }}</button>
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
    {{-- <!-- Gogole Loaction API -->
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBoiyGm9G56-rKkUhiEbf2kNT3mJVhhpPc">
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
                var keyapi = 'AIzaSyBoiyGm9G56-rKkUhiEbf2kNT3mJVhhpPc';
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
    </script> --}}

    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBoiyGm9G56-rKkUhiEbf2kNT3mJVhhpPc">
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
                var keyapi = 'AIzaSyBoiyGm9G56-rKkUhiEbf2kNT3mJVhhpPc';
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
