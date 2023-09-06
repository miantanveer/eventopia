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
                        {{-- <ul class="justify-content-around">
                            <li><a href="#step-1">About Service</a></li>
                            <li><a href="#step-2">Photos</a></li>
                            <li><a href="#step-3">Detail</a></li>
                            <li><a href="#step-4">Pricing</a></li>
                            <li><a href="#step-5">Team</a></li>
                        </ul> --}}
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
                                <div class="row form-group">
                                    <div class="card-header  mb-3">
                                        <h1 style="text-align:center;" class="card-title">Serive Category</h1>
                                    </div>
                                    <div class="card-body col-12">
                                        <label for="category">Service Category</label>
                                        <select name="category" required data-parsley-reqired-meassage="Please Select a value" class="select2">
                                            @foreach($service_category as $key=>$data)
                                            <option value="{{$data->name}}" {{@$service->category == $data->name ? 'selected' : ''}}>{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="card-header  mb-3">
                                        <h1 style="text-align:center;" class="card-title">Service Address</h1>
                                    </div>
                                    <div class="card-body col-md-5 col-lg-12">
                                        <label class="form-control-label">Street Address</label>
                                        <span class="tx-danger">*</span></label>
                                        <input class="form-control rounded-0" value="{{@$service->address}}" id="address" name="address"
                                            placeholder="Add Address" required data-parsley-required-message="Please enter your address" type="text">
                                    </div>
                                    <div class="col-md-5 col-lg-6 mt-3">
                                        <label class="form-control-label">Country</label>
                                        <span class="tx-danger">*</span></label>
                                        <input class="form-control rounded-0" value="{{@$service->country}}" id="country" name="country" placeholder=""
                                            required type="text">
                                    </div>
                                    <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0 mt-3">
                                        <label class="form-control-label">State<span class="tx-danger">*</span></label>
                                        <input class="form-control rounded-0" value="{{@$service->state}}" id="state" name="state" placeholder=""
                                            required type="text">
                                    </div>
                                    <div class="col-md-5 col-lg-6 mt-3">
                                        <label class="form-control-label">City</label> <span
                                            class="tx-danger">*</span></label>
                                        <input class="form-control rounded-0" id="city" value="{{@$service->city}}" name="city" placeholder=""
                                            required type="text">
                                    </div>
                                    <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0 mt-3">
                                        <label class="form-control-label">Postal Code<span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control rounded-0" value="{{@$service->postal_code}}" id="postal_code" name="postal_code"
                                            placeholder="" required data-parsley-required-message="Please enter a value" type="text">
                                    </div>
                                    <input type="hidden" name="lat" value="{{@$service->lat}}" id="lat">
                                    <input type="hidden" name="lng" value="{{@$service->lng}}" id="lng">
                                </div>
                                <br>
                                <hr class="border-3 bg-dark">
                                <div class="float-end mt-8">
                                    <a class="btn btn-light" href="{{route('service-form-3',$id)}}">Previous</a>
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
