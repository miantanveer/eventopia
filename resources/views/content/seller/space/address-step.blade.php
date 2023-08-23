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
                        {{-- <ul>
                            <li><a href="#step-1">Space Address</a></li>
                            <li><a href="#step-2">Setup</a></li>
                            <li><a href="#step-3">About your space</a></li>
                            <li><a href="#step-4">Photos</a></li>
                            <li><a href="#step-5">Hours</a></li>
                            <li><a href="#step-6">Cleaning Policy</a></li>
                            <li><a href="#step-7">Cancellation</a></li>
                            <li><a href="#step-8">Listing</a></li>
                            <li><a href="#step-9">Profile</a></li>
                            <li><a href="#step-10">Review Policies</a></li>

                        </ul> --}}
                        <form id="form-step-1" action="{{ @$space !== null ? route('update-space-address',$space->id) :  route('add-address') }}" method="POST">
                            @csrf
                            <div id="step-1">
                                <div style="height:450px;width:1350px;margin-left:90px;" class="border mt-5">
                                    <h2 style="text-align:center;">Step 1 of 9</h2>
                                    <div class="row">
                                        <div class="card-header  mb-3">
                                            <h1 style="text-align:center;" class="card-title">Space Address</h1>
                                        </div>
                                        <div class="col-md-5 col-lg-12">
                                            <label class="form-control-label">Street Address</label> <span
                                                class="tx-danger">*</span></label> <input class="form-control rounded-0"
                                                id="address" name="address" placeholder="Add Address" value="{{@$space->address}}" required=""
                                                type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6 mt-3">
                                            <label class="form-control-label">Country</label> <span
                                                class="tx-danger">*</span></label> <input class="form-control rounded-0"
                                                id="country" name="country" placeholder="" value="{{@$space->country}}" required="" type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0 mt-3">
                                            <label class="form-control-label">State<span class="tx-danger">*</span></label>
                                            <input class="form-control rounded-0" id="state" name="state"
                                                placeholder="" required="" value="{{@$space->state}}" type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6 mt-3">
                                            <label class="form-control-label">City</label> <span
                                                class="tx-danger">*</span></label> <input class="form-control rounded-0"
                                                id="city" name="city" placeholder="" required="" value="{{@$space->city}}" type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0 mt-3">
                                            <label class="form-control-label">Postal Code<span
                                                    class="tx-danger">*</span></label> <input class="form-control rounded-0"
                                                id="postal_code" name="postal_code" placeholder="" value="{{@$space->postal_code}}" required=""
                                                type="text">
                                        </div>
                                        <input type="hidden" name="lat" id="lat">
                                        <input type="hidden" name="lng" id="lng">
                                        <input type="hidden" name="last_step" value="1">
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body map_height overflow-auto" id="mapContainer">
                                        <h4 style="margin-left:70px;" class="fw-bolder">Use the map pin position to add an
                                            address.</h4>
                                        <iframe style="height:380px;width:475px;margin-left:70px;" class="gmap_iframe"
                                            frameborder="0" scrolling="no" id="gmap_iframe" marginheight="0" marginwidth="0"
                                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <hr class="border-3 bg-dark">
                            <div class="float-end">
                                <a class="btn btn-light" href="{{route('list-space')}}">Previous</a>
                                <button class="btn btn-primary">Next</button>
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
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC5qN37hurCFwbFsZt2nzzwzGcbSt08R5E">
    </script>

    <script nonce="">
        function onEmbedLoad() {
            initEmbed([null, null, null, null, null, null, null, ["en"],
                [null, null, null, "/maps/api/js/ApplicationService.GetEntityDetails", "/maps/embed/upgrade204",
                    null, "/maps/embed/record204"
                ], null, null, null, null, null, null, null, null, null, null, null, null, [
                    [
                        [120000000, 0, 0], null, null, 13.10000038146973
                    ]
                ], null, null, null, 0, null, null, null, null, null, null, [1]
            ]);
        }

        function onApiLoad() {
            var embed = document.createElement('script');
            embed.src = "https://maps.gstatic.com/maps-api-v3/embed/js/53/13/init_embed.js";
            document.body.appendChild(embed);
        }
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
