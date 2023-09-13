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
        .parsley-minlength {
            font-size: 12px;
            color: #ff5c77;
            margin-top: 3px;
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
                        <ul>
                            {{-- <li><a href="#step-1">Space Address</a></li>
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
                            <div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ lang($error) }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div id="step-3" class="">
                                    <form class="validation" action="{{ route('add-about', $space->id) }}" method="POST">
                                        @csrf
                                        <div style="text-align:center;" class="">
                                            <h2>{{lang('Step 3 of 9')}}</h2>
                                            <h1><strong>{{lang('Give your space a title')}}</strong></h1>
                                            <p>{{lang("Create a title that will grab a guest’s interest and describes your space. Do
                                                not
                                                include your business’s name.")}}</p>
                                        </div>
                                        <div class="innersteps 3 mt-3 mb-3">
                                            <h4>{{lang('Try to include the following:')}}</h4>
                                            <ul style="list-style-type:disc;color:#434343">
                                                <li><b><span style="color:black;">{{lang('Location')}}</span></b>{{lang(' - urban, downtown,
                                                    marina')}}
                                                </li>
                                                <li><b><span style="color:black;">{{lang('The type of space')}}</span></b>{{lang(' - loft,
                                                    studio,
                                                    dance hall, penthouse')}}</li>
                                                <li><b><span style="color:black;">{{lang("Unique adjective")}}</span></b> {{lang('- industrial,
                                                    rustic,
                                                    roomy')}}</li>
                                            </ul>
                                            <p> <img src="{{ asset('assets/images/users/spaces/6700.png') }}"
                                                    alt="img"><b>{{lang('Example: “Downtown Loft with Skyline View”')}}</b></p>
                                            <input type="text" class="form-control rounded-0" id="inputtext"
                                                placeholder="{{lang('Enter your space title')}}" required name="space_title"
                                                value="{{ lang(@$space->space_title ?? '') }}">
                                            <br>
                                            <hr class="style1"><br>
                                            <h1><strong>{{lang("Describe the parking options")}}</strong></h1>
                                            <p style="color:black;"><b>{{lang("Include details about your space so that guests will
                                                    know
                                                    everything it offers.")}}</b></p>
                                            <h1 style="font-size:20px;color:black;" class="mt-3">{{lang("Try to answer questions
                                                like:")}}
                                            </h1>
                                            <ul style="list-style-type:disc;color:#434343">
                                                <li>{{lang("What activities work well in your space?")}}</li>
                                                <li>{{lang("What is the layout of the space and how can different areas be used?")}}
                                                </li>
                                                <li>{{lang("What unique features or amenities does your space have?")}}</li>
                                            </ul><br>
                                            <h3>{{lang("Do not include:")}}</h3>
                                            <p><b>{{lang("Contact information")}}</b> {{lang("- Do not include your phone number, venue name,
                                                address,
                                                email, or links to your website.")}}</p>
                                            <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                            <textarea style="height:150px;" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="{{lang('Add description')}}" required name="space_description">{{ lang(@$space->space_description ?? '') }}</textarea>
                                            <br>
                                            <hr class="style1"><br>
                                            <h1>{{lang("How big is the space guests can book?")}}</h1>
                                            <p>{{lang("Please only include the size of the space that guests can use during their
                                                booking.")}}
                                            </p>
                                            <p> <img src="{{ asset('assets/images/users/spaces/6700.png') }}"
                                                    alt="img"><b>{{lang("Example: If your space is 2,000 m ft, but guests are
                                                    booking
                                                    a 500 m ft conference room, you would enter “500”.")}}</b></p>

                                            <div class="btn-group">
                                                <input type="number" class="btn btn-outline-default rounded-0" min="1" step="1"
                                                    name="space_size" required data-parsley-errors-container="#sq_error" value="{{ @$space->space_size ?? '' }}">
                                                <button type="button" class="btn btn-outline-default rounded-0">{{lang("sq
                                                    m")}}</button>
                                            </div>
                                            <div id="sq_error"></div>
                                            <br>
                                            <hr class="style1"><br>
                                            <h1>{{lang("What are your house rules?")}}</h1>
                                            <p>{{lang("Include any rules about what your guests can and cannot do in the space.")}}</p>
                                            <h3>{{lang("Example rules:")}}</h3>
                                            <ul style="list-style-type:disc">
                                                <li>{{lang("No smoking in the building")}}</li>
                                                <li>{{lang("Outside catering is allowed")}}</li>
                                                <li>{{lang("No alcohol allowed")}}</li>
                                            </ul><br>
                                            <h2>{{lang("Do not include:")}}</h2>
                                            <ul style="list-style-type:disc">
                                                <li><b><span style="color:black;">{{lang("Cleaning Fee")}}</span></b> {{lang("- Basic cleaning
                                                    is
                                                    the
                                                    responsibility of the host. If you charge a cleaning fee, you can add it
                                                    in
                                                    a
                                                    later section.")}}</li>
                                                <li><b><span style="color:black;">{{lang("Contracts")}} </span></b>{{lang(" - Peerspace bookings
                                                    are
                                                    covered by our Service Agreement. Do not paste your contract,
                                                    cancellation
                                                    policy, or
                                                    liability policy.")}}</li>
                                            </ul>
                                            <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                            <textarea style="height:150px;" required name="space_rules" class="form-control rounded-0" id="exampleFormControlTextarea1"
                                                rows="3">{{ lang(@$space->space_rules ?? '') }}</textarea>
                                                <br>
                                                <hr class="style1"><br>
                                            <h1>{{lang("Who's allowed in your space?")}}</h1>

                                            <div class="form-group">
                                                <label for="sel1"></label>
                                                <select class="form-control" required name="allowed_age" id="sel1">
                                                    <option value="all"
                                                        {{ lang(@$space->allowed_age == 'all' ? 'selected' : '') }}>{{lang("All ages")}}
                                                    </option>
                                                    <option value="10"
                                                        {{ lang(@$space->allowed_age == '0-10' ? 'selected' : '') }}>{{lang("Age ")}} 0 - 10
                                                    </option>
                                                    <option value="10"
                                                        {{ lang(@$space->allowed_age == '10' ? 'selected' : '') }}>{{lang("Age ")}} 10+
                                                    </option>
                                                    <option value="20"
                                                        {{ lang(@$space->allowed_age == '20' ? 'selected' : '') }}>{{lang("Age")}} 20+
                                                    </option>
                                                    <option value="30"
                                                        {{lang( @$space->allowed_age == '30' ? 'selected' : '' )}}>{{lang("Age")}} 30+
                                                    </option>
                                                    <option value="40"
                                                        {{ lang(@$space->allowed_age == '40' ? 'selected' : '') }}>{{lang("Age")}} 40+
                                                    </option>
                                                    <option value="50"
                                                        {{ lang(@$space->allowed_age == '50' ? 'selected' : '') }}>{{lang("Age")}} 50+
                                                    </option>
                                                </select>
                                            </div>

                                            <br>
                                            <hr class="style1">
                                            <h1>{{lang("What’s your wifi name and password?")}}</h1>
                                            <p>{{lang("Make it easy for your guests to get online by sharing your Wi-Fi information.")}}
                                            </p>
                                            <input type="text" class="form-control rounded-0" id="inputtext"
                                                placeholder="{{lang('Optional - example: Name  Eventopia Password: 12345678')}}"
                                                value="{{ @$space->wifi_password ?? '' }}" name="wifi_password"><br>
                                            <p> <img src="{{ asset('assets/images/users/spaces/lock.png') }}"
                                                    alt="img"><b>
                                                    {{lang("Don't worry, we'll only share this with guests after you have accepted
                                                    their
                                                    booking.")}}</b></p>
                                            <br>
                                            <hr class="style1"><br>
                                            <h1>{{lang("Provide arrival instructions")}}</h1>
                                            <p>{{lang("Help your guests and their attendees find and enter your space.")}}</p><br>
                                            <h1>{{lang("Try to include:")}}</h1>
                                            <p>{{lang("Directions to your space, building access, door buzzers, floors,
                                                stairs/elevator
                                                access etc.")}}</p><br>
                                            <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                            <textarea name="arrival_instruction" required style="height:150px;" class="form-control rounded-0 mb-3"
                                                id="exampleFormControlTextarea1" rows="3">{{ @$space->arrival_instruction ?? '' }}</textarea>
                                            <p> <img src="{{ asset('assets/images/users/spaces/lock.png') }}"
                                                    alt="img"><b>
                                                   {{lang(" Don't worry, we'll only share this with guests after you have accepted
                                                    their
                                                    booking.")}}</b></p>
                                            <br>
                                            <hr class="style1"><br>
                                        </div>
                                        <input type="hidden" name="last_step" value="3">
                                        <hr class="border-3 bg-dark">
                                        <div class="float-end">
                                            <a class="btn btn-light"
                                                href="{{ route('parking-step', $space->id) }}">{{lang("Previous")}}</a>
                                            <button class="btn btn-primary">{{lang("Next")}}</button>
                                        </div>
                                    </form>
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
       $(document).ready(function (){
            $('.validation').parsley();
        });
    </script>
@endsection
