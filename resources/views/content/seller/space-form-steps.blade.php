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
                        <ul>
                            <li><a href="#step-1">{{lang('Space Address')}}</a></li>
                            <li><a href="#step-2">{{lang('Setup')}}</a></li>
                            <li><a href="#step-3">{{lang('About your space')}}</a></li>
                            <li><a href="#step-4">{{lang('Photos')}}</a></li>
                            <li><a href="#step-5">{{lang('Hours')}}</a></li>
                            <li><a href="#step-6">{{lang('Cleaning Policy')}}</a></li>
                            <li><a href="#step-7">{{lang('Cancellation')}}</a></li>
                            <li><a href="#step-8">{{lang('Listing')}}</a></li>
                            <li><a href="#step-9">{{lang('Profile')}}</a></li>
                            <li><a href="#step-10">{{lang('Review Policies')}}</a></li>

                        </ul>
                        <div>
                            <div id="step-1">
                                <form style="height:450px;width:1350px;margin-left:90px;" id="form-step-1"
                                    action="{{ route('add-address') }}" method="POST" class="border mt-5">
                                    @csrf
                                    <h2 style="text-align:center;">{{lang('Step 1 of 9')}}</h2>
                                    <div class="row">
                                        <div class="card-header  mb-3">
                                            <h1 style="text-align:center;" class="card-title">{{lang('Space Address')}}</h1>
                                        </div>
                                        <div class="col-md-5 col-lg-12">
                                            <label class="form-control-label">{{lang('Street Address')}}</label> <span
                                                class="tx-danger">*</span></label> <input class="form-control rounded-0"
                                                id="address" name="address" placeholder="Add Address" required=""
                                                type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6 mt-3">
                                            <label class="form-control-label">{{lang('Country')}}</label> <span
                                                class="tx-danger">*</span></label> <input class="form-control rounded-0"
                                                id="country" name="country" placeholder="" required="" type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0 mt-3">
                                            <label class="form-control-label">{{lang('State')}}<span class="tx-danger">*</span></label>
                                            <input class="form-control rounded-0" id="state" name="state"
                                                placeholder="" required="" type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6 mt-3">
                                            <label class="form-control-label">{{lang('City')}}</label> <span
                                                class="tx-danger">*</span></label> <input class="form-control rounded-0"
                                                id="city" name="city" placeholder="" required="" type="text">
                                        </div>
                                        <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0 mt-3">
                                            <label class="form-control-label">{{lang('Postal Code')}}<span
                                                    class="tx-danger">*</span></label> <input class="form-control rounded-0"
                                                id="postal_code" name="postal_code" placeholder="" required=""
                                                type="text">
                                        </div>
                                        <input type="hidden" name="lat" id="lat">
                                        <input type="hidden" name="lng" id="lng">
                                    </div>
                                </form>
                                <div class="card custom-card">
                                    <div class="card-body map_height overflow-auto" id="mapContainer">
                                        <h4 style="margin-left:70px;" class="fw-bolder">{{lang('Use the map pin position to add an
                                            address.')}}</h4>
                                        <iframe style="height:380px;width:475px;margin-left:70px;" class="gmap_iframe"
                                            frameborder="0" scrolling="no" id="gmap_iframe" marginheight="0" marginwidth="0"
                                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div id="step-2">
                                <form action="{{ route('add-parking') }}">
                                    @csrf
                                    <div style="text-align:center;">
                                        <h2>{{lang('Step 2 of 9')}}</h2>
                                        <h1><strong>{{lang('What type of space are you listing?')}}</strong></h1>
                                        <p><b>{{lang('Enter the type of space that most closely represents the physical space being
                                                listed.
                                                Learn more')}}</b></p>
                                    </div>
                                    <p> <img src="{{ asset('assets/images/users/spaces/6700.png') }}"
                                            alt="img"><b>{{lang('Examples: 'Apartment' 'Photo Studio' 'Restaurant'')}}</b></p>
                                    <input type="text" class="form-control rounded-0" readonly name="space_type"
                                        placeholder="Gallery for art">{{session('space').@$space->spaceType->type}}
                                    <br>
                                    <hr class="style1"><br>
                                    <div class="inner-steps2 mt-2 mb-3">
                                        <h1><strong>{{lang('Describe the parking options')}}</strong></h1>
                                        <div class="form-check form-switch">
                                            <p><b>{{lang('Are there parking options at or near your space?')}}</b>
                                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                                <input style="margin-left:32rem;" class="form-check-input"
                                                    type="checkbox" role="switch" id="flexSwitchCheckChecked3" checked
                                                    onchange="toggleOptions()">
                                            </p>
                                        </div>
                                        <h1><strong>{{lang('Select all')}}</strong></h1>
                                    </div>

                                    <div id="options">
                                        <div class="row">
                                            @foreach ($parking_options as $parking_option)
                                            <div class="col-4">
                                                <label class="checkbox-inline">
                                                    <input name="parking_option[]" class="parking_option" type="checkbox" value="{{$parking_option->id}}"><span
                                                        style="color:#434343"><b>{{lang($parking_option->option)}}</b></span>
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <h1 class="mt-4"><strong>{{lang('Write a description of the parking options')}}</strong></h1>
                                    <p> <img src="{{ asset('assets/images/users/spaces/6700.png') }}" alt="img">{{lang('Don’t
                                        include private information. This will be shown publicly.')}}</p>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1"></label>
                                        <textarea style="height:150px;" class="form-control rounded-0" name="parking_description" id="exampleFormControlTextarea1" rows="2"></textarea>
                                        <p class="text-end">{{lang('Minimum 35 characters')}}</p>
                                        <br>
                                        <hr class="style1"><br>

                                        <div class="form-check form-switch">

                                            <div class="mt-6">
                                                <h3 class="mb-2 mt-md-7"><b>{{lang('Security cameras and recording devices')}}</b></h3>
                                                <div class="w-50 float-start">
                                                    <p class="mb-3">{{lang('Does the event have security cameras or recording
                                                        devices?')}}</p>
                                                </div>
                                                <div class="w-50 float-end">
                                                    <div class="form-check form-switch float-end">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="flexSwitchCheckChecked2" checked
                                                            onchange="toggleTextArea()">
                                                    </div>
                                                </div><br>

                                                <div id="textAreaDiv" class="mt-5">
                                                    <p class="mb-1">{{lang('Describe any device that records video, audio, or
                                                        still
                                                        images.
                                                        Specify where each device is in your event and if they’ll be on or
                                                        off.')}}
                                                    </p>
                                                    <textarea name="security_devices_description" id="security_devices_description" cols="30" rows="5" class="form-control w-100 p-5"
                                                        placeholder="{{lang('Add description')}}"></textarea>
                                                    <p class="text-end">{{lang('Minimum 50 characters')}}</p>
                                                </div>
                                            </div>
                                            </p>
                                            <br>
                                            <hr class="style1"><br>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div id="step-3" class="">
                                <div style="text-align:center;" class="">
                                    <h2>{{lang('Step 3 of 9')}}</h2>
                                    <h1><strong>{{lang('Give your space a title')}}</strong></h1>
                                    <p>{{lang('Create a title that will grab a guest’s interest and describes your space. Do not
                                        include your business’s name.')}}</p>
                                </div>
                                <div class="innersteps 3 mt-3 mb-3">
                                    <h4>{{lang('Try to include the following:')}}</h4>
                                    <ul style="list-style-type:disc;color:#434343">
                                        <li><b><span style="color:black;">{{lang('Location')}}</span></b> {{lang('- urban, downtown, marina')}}
                                        </li>
                                        <li><b><span style="color:black;">{{lang('The type of space')}}</span></b> {{lang('- loft, studio,')}}
                                            {{lang('dance hall, penthouse')}}</li>
                                        <li><b><span style="color:black;">{{lang('Unique adjective')}}</span></b> {{lang('- industrial, rustic,
                                            roomy')}}</li>
                                    </ul>
                                    <p> <img src="{{ asset('assets/images/users/spaces/6700.png') }}"
                                            alt="img"><b>{{lang('Example: “Downtown Loft with Skyline View”')}}</b></p>
                                    <input type="text" class="form-control rounded-0" id="inputtext"
                                        placeholder="Enter your space title">
                                    <br>
                                    <hr class="style1"><br>
                                    <h1><strong>{{lang('Describe the parking options')}}</strong></h1>
                                    <p style="color:black;"><b>{{lang('Include details about your space so that guests will know
                                            everything it offers.')}}</b></p>
                                    <h1 style="font-size:20px;color:black;" class="mt-3">{{lang('Try to answer questions like:')}}
                                    </h1>
                                    <ul style="list-style-type:disc;color:#434343">
                                        <li>{{lang('What activities work well in your space?')}}</li>
                                        <li>{{lang('What is the layout of the space and how can different areas be used?')}}</li>
                                        <li>{{lang('What unique features or amenities does your space have?')}}</li>
                                    </ul><br>
                                    <h3>{{lang('Do not include:')}}</h3>
                                    <p><b>{{lang('Contact information')}}</b> {{lang('- Do not include your phone number, venue name, address,
                                        email, or links to your website.')}}</p>
                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                    <textarea style="height:150px;" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3">{{lang('Add description')}}</textarea>
                                    <p class="text-end">{{lang('Minimum 280 characters')}}</p>
                                    <br>
                                    <hr class="style1"><br>
                                    <h1>{{lang('How big is the space guests can book?')}}</h1>
                                    <p>{{lang('Please only include the size of the space that guests can use during their booking.')}}
                                    </p>
                                    <p> <img src="{{ asset('assets/images/users/spaces/6700.png') }}"
                                            alt="img"><b>{{lang('Example: If your space is 2,000 m ft, but guests are booking
                                            a 500 m ft conference room, you would enter “500”.')}}</b></p>

                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <input type="number" class="btn btn-outline-default rounded-0" value="500">
                                        <button type="button" class="btn btn-outline-default rounded-0">{{lang('sq m')}}</button>

                                    </div>

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
                                        <li><b><span style="color:black;">{{lang("Cleaning Fee")}}</span></b> {{lang("- Basic cleaning is the
                                            responsibility of the host. If you charge a cleaning fee, you can add it in a
                                            later section.")}}</li>
                                        <li><b><span style="color:black;">{{lang("Contracts ")}}</span></b>{{lang(" - Eventopia bookings are
                                            covered by our Service Agreement. Do not paste your contract, cancellation
                                            policy, or
                                            liability policy.")}}</li>
                                    </ul>
                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                    <textarea style="height:150px;" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3">{{lang("Enter your house rules")}}</textarea>
                                    <p class="text-end">{{lang("Minimum 100 characters")}}</h4>
                                        <br>
                                        <hr class="style1"><br>
                                    <h1>{{lang("Who's allowed in your space?")}}</h1>
                                    <form>
                                        <div class="form-group">
                                            <label for="sel1"></label>
                                            <select class="form-control" id="sel1">
                                                <option>{{lang("All ages")}}</option>
                                                <option>{{lang("Age 20+")}}</option>
                                                <option>{{lang("Age 50+")}}</option>

                                            </select>
                                        </div>
                                    </form>
                                    <br>
                                    <hr class="style1">
                                    <h1>{{lang("What’s your wifi name and password?")}}</h1>
                                    <p>{{lang("Make it easy for your guests to get online by sharing your Wi-Fi information.")}}</p>
                                    <input type="text" class="form-control rounded-0" id="inputtext"
                                        placeholder="Optional - example: Name  Eventopia Password: 12345678"><br>
                                    <p> <img src="{{ asset('assets/images/users/spaces/lock.png') }}" alt="img"><b>
                                            {{lang("Don't worry, we'll only share this with guests after you have accepted their
                                            booking.")}}</b></p>
                                    <br>
                                    <hr class="style1"><br>
                                    <h1>{{lang("Provide arrival instructions")}}</h1>
                                    <p>{{lang("Help your guests and their attendees find and enter your space.")}}</p><br>
                                    <h1>{{lang("Try to include:")}}</h1>
                                    <p>{{lang("Directions to your space, building access, door buzzers, floors, stairs/elevator
                                        access etc.")}}</p><br>
                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                    <textarea style="height:150px;" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3">{{lang("Add description")}}</textarea>
                                    <p class="text-end">{{lang("Minimum 100 characters")}}</p>
                                    <p> <img src="{{ asset('assets/images/users/spaces/lock.png') }}" alt="img"><b>
                                            {{lang("Don't worry, we'll only share this with guests after you have accepted their
                                            booking.")}}</b></p>
                                    <br>
                                    <hr class="style1"><br>
                                </div>
                            </div>

                            <div id="step-4" class="mb-5">
                                <h2 style="text-align:center;">{{lang("Step 4 of 9")}}</h2>
                                <div class="text-center">
                                    <h2 class="fw-bolder">
                                       {{lang(" Upload photos of your services")}}
                                    </h2>
                                    <p>{{lang("Photos are the first thing that guests will see. We recommend adding 10 or more high
                                        quality photos.")}}</p>
                                </div>
                                <div class="row">
                                    <h5>{{lang("Photo requirements:")}}</h5>
                                    <div class="col-6">
                                        <ul>
                                            <li class="m-3" style="list-style: circle">
                                                {{lang("High resolution - At least 1,000 pixels wide")}}
                                            </li>
                                            <li class="m-3" style="list-style: circle">
                                                {{lang("Color photos - No black & white")}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul>
                                            <li class="m-3" style="list-style: circle">
                                                {{lang("Horizontal orientation - No vertical photos")}}
                                            </li>
                                            <li class="m-3" style="list-style: circle">
                                                {{lang("Misc. - No collages, screenshots, or watermarks")}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <form class="mt-4 mb-5">
                                    <div class="control-group form-group row">
                                        <div class="col-12">
                                            <label class="form-label">{{lang("Please add at least 4 space photos")}}</label>
                                            <input id="demo" type="file" name="files"
                                                accept=".jpg, .png, image/jpeg, image/png" multiple>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <p><i class="ion-lightbulb text-warning fs-3 me-3"></i> {{lang("Drag and drop your
                                                photos to change the order. Your first photo is what your guests will see
                                                when browsing so make sure it
                                                represents your space.")}}</p>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div id="step-5" class="">
                                <h2 style="text-align:center;">{{lang('Step 5 of 9')}}</h2>
                                <div class="card-body border p-4 pb-5">
                                    <div class="text-center mb-4">
                                        <h2 class="mx-4 fw-bolder">{{lang('What are your operating hours?')}}</h2>
                                        <p class="mx-4">{{lang('Operating hours are the days and hours of the week that your
                                            space is open to host
                                            bookings (i.e. your general availability). Guests
                                            will not be able to book times outside of your operating hours. Learn More.')}}</p>
                                    </div>
                                    <div class="text-start mb-4">
                                        <p> {{lang('Birthday event - 23408 Bernier Cliff Suite 526')}} </p>
                                    </div>
                                    <div class="text-start bg-gray-light">
                                        <p class="p-5"><i class="mdi mdi-alert-circle"></i> &nbsp; &nbsp; {{lang('Operating
                                            hours end times are
                                            restricted to 12 AM for this space type. Read our Social Events Policy for more
                                            information.')}}</p>
                                    </div>
                                    @include('layouts.components.setHoursHTMLCode')
                                    <hr style="border-top: 1px solid black">
                                    <div class="text-end mb-2 mt-5">
                                    </div>
                                </div>
                            </div>

                            <div id="step-6" class="">
                                <div style="text-align:center;">
                                    <h2>{{lang("Step 6 of 9")}}</h2>
                                    <h1><strong>{{lang("Enhanced Health and Safety Measures")}}</strong></h1>
                                    <p>{{lang("Fill out the form to add your cleaning protocol and additional health and safety
                                        measures to your listing page")}}.</p>
                                </div>
                                <h4><img src="{{ asset('assets/images/users/spaces/Group 8022.png') }}" alt="img">
                                    <b>{{lang("Enhanced Health and Safety Measures")}}</b>
                                </h4>
                                <p>{{lang("Select at least 1 from each category below to earn the Enhanced Health and Safety
                                    Measures badge. This badge will be displayed
                                    on your listings.")}}</p>
                                <br>
                                <hr class="style1"><br>
                                <h3>{{lang("What additional measures are you taking to keep your space clean?")}}</h3>
                                <p style="color:#858585;"><strong>{{lang("Select all that apply")}}</strong></p>
                                <div class="row">
                                    <div style="color:#434343;" class="span12 pagination-centered">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang("The space is cleaned and
                                                    disinfected in accordance with guidelines from local health
                                                    authorities")}}</b>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang("High touch surfaces and shared
                                                    amenities have been disinfected")}}</b>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang("Soft, porous materials have
                                                    been properly cleaned or removed")}}</b>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang("A licensed professional
                                                    cleaner is hired between bookings")}}</b>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang("Bookings are spaced apart to
                                                    allow for enhanced cleaning")}}</b></label>
                                        </div>
                                    </div>
                                </div>
                                <h3 class=" mt-4">{{lang("What additional protective gear do you provide to your guests?")}}</h3>
                                <p style="color:#858585;"><strong>{{lang("Select all that apply")}}</strong></p>
                                <div class="row">
                                    <div style="color:#434343;" class="span12 pagination-centered">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang('Disinfecting wipes or spray
                                                    and paper towels')}}</b>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang('Disposable gloves')}}</b>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang('Disposable masks / face
                                                    coverings')}}</b>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang('Hand Sanitizer')}}</b>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <h3 class=" mt-4">{{lang('What have you done to help guests maintain physical distance in your
                                    space?')}}</h3>
                                <p style="color:#858585;"><strong>{{lang('Select all that apply')}}</strong></p>
                                <div class="row">
                                    <div style="color:#434343;" class="span12 pagination-centered">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang('Capacity is limited based on
                                                    governmental guidelines')}}</b>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang('Space has access to outdoor
                                                    air ventilation')}}</b>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang('Space has HEPA-certified air
                                                    filters')}}</b>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang('Space has additional space
                                                    outdoors')}}</b>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang('Space has been reconfigured to
                                                    allow for physical distance')}}</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <h3 class=" mt-4">{{lang('What signage have you added to keep your guests informed?')}}</h3>
                                <p style="color:#858585;"><strong>{{lang('Select all that apply')}}</strong></p>
                                <div class="row">
                                    <div style="color:#434343;" class="span12 pagination-centered">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang('Detailed checklist of updated
                                                    cleaning procedure. Download checklist')}}</b>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang('COVID-19 guest guidelines
                                                    print outs. Download guidelines')}}</b>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang('Common areas have 6-foot
                                                    (2-metre) markers on floors')}}</b>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""><b>{{lang('Narrow passages have arrows
                                                    for bi-directional traffic')}}</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mt-5">{{lang('Tell your guests more about your cleaning process')}}</h4>
                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                <textarea style="height:150px;" class="form-control rounded-0" id="" rows="3">{{lang("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.")}}</textarea>
                                <p class="text-end">{{lang('Minimum 50 characters')}}</p>

                                <div style="color:#505050" class="end-box border border-#ACACAC mt-4">
                                    <h4><img src="{{ asset('assets/images/users/spaces/Group 8022.png') }}"
                                            alt="img">
                                        <b>{{lang('Enhanced Health and Safety Measures')}}</b>
                                    </h4>
                                    <p>{{lang('Choose at least 1 item from each category')}}</p>
                                </div>
                            </div>
                            <div id="step-7" class="">
                                <h2 style="text-align:center;">{{lang('Step 7 of 9')}}</h2>
                                <div id="step-5" class="mb-5">
                                    <div class="container">
                                        <div class="text-center mb-6">
                                            <h3 class="mt-3 mt-1"><b>{{lang('Choose your Cancellation Policy')}}</b>
                                            </h3>
                                            <p class=""><img
                                                    src="{{ asset('assets/images/brand/light-bulb.png') }}"
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
                                            <div class="col-3">
                                                <label class=" flex-basis-20-sm flex-basis-100" for="very-flexible">
                                                    <input type="radio" class="" id="very-flexible"
                                                        name="btn" value="">
                                                    <span class="">{{lang('Very Flexible')}}</span>
                                                </label>
                                            </div>
                                            <div class="col-9">
                                                <p>{{lang('Guests may cancel their Booking until 24 hours before the event start
                                                    time
                                                    and will receive a full refund (including all Fees) of their Booking
                                                    Price.')}}
                                                </p>
                                                <p>{{lang('Bookings cancellations submitted less than 24 hours before the Event
                                                    start
                                                    time are not refundable.')}}</p>
                                            </div>
                                            <hr class="bg-dark border-2">
                                            <div class="col-3">
                                                <label class=" flex-basis-20-sm flex-basis-100 " for="flexible">
                                                    <input type="radio" class="" name="btn" id="flexible"
                                                        value="" cheaked>
                                                    <span class="">{{lang('Flexible')}}</span>
                                                </label>
                                            </div>
                                            <div class="col-9">
                                                <p>{{lang('Guests may cancel their Booking until 7 days before the event start time
                                                    and
                                                    will receive a full refund (including all Fees) of their Booking Price.')}}
                                                </p>
                                                <p>{{lang('Guests may cancel their Booking between 7 days and 24 hours before the
                                                    event
                                                    start time and receive a 50% refund (excluding Fees) of their Booking
                                                    Price.')}}
                                                </p>
                                                <p>{{lang('Booking cancellations submitted less than 24 hours before the Event start
                                                    time are not refundable.')}}</p>
                                            </div>
                                            <hr class="bg-dark border-2">
                                            <div class="col-3">
                                                <label class="flex-basis-20-sm flex-basis-1">
                                                    <input type="radio" class="" name="btn" value="">
                                                    <span class="">{{lang('Standard 30 day')}}</span>
                                                </label>
                                            </div>
                                            <div class="col-9">
                                                <p>{{lang('Guests may cancel their Booking until 30 days before the event start time
                                                    and
                                                    will receive a full refund (including all Fees) of their Booking Price.')}}
                                                </p>
                                                <p>{{lang('Guests may cancel their Booking until 30 hours before the event start
                                                    time
                                                    and will receive a full refund (including all Fees) of their Booking
                                                    Price.')}}
                                                </p>
                                                <p>{{lang('Bookings cancellations submitted less than 7 hours before the Event start
                                                    time are not refundable.')}}</p>
                                            </div>
                                            <hr class="bg-dark border-2">
                                            <div class="col-3">
                                                <label class="flex-basis-20-sm flex-basis-1">
                                                    <input type="radio" class="" name="btn" value="">
                                                    <span class="">{{lang('Standard 90 day')}}</span>
                                                </label>
                                            </div>
                                            <div class="col-9">
                                                <p>{{lang('Guests may cancel their Booking until 90 hours before the event start
                                                    time
                                                    and will receive a full refund (including all Fees) of their Booking
                                                    Price.')}}
                                                </p>
                                                <p>{{lang('Guests may cancel their Booking until 90 hours before the event start
                                                    time
                                                    and will receive a full refund (including all Fees) of their Booking
                                                    Price.')}}
                                                </p>
                                                <p>{{lang('Bookings cancellations submitted less than 14 hours before the Event
                                                    start
                                                    time are not refundable.')}}</p>
                                            </div>
                                            <hr class="bg-dark border-2">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="step-8" class="mb-5">
                                <div style="text-align:center">
                                    <h2>{{lang('Step 8 of 9')}}</h2>
                                    <h1><strong>
                                            {{lang('Which activities would you like to host?')}}
                                        </strong></h1>
                                    <p>{{lang('Select the types of activities you would like to host. For each selection, we’ll
                                        create a customized listing unique to that activity.')}}</p>
                                    <p> <img src="{{ asset('assets/images/users/spaces/6700.png') }}"
                                            alt="img"><b>{{lang('Tip: To be approved for Meetings your photos must display a
                                            meeting or workshop setup including tables and chairs. We also
                                            recommend adding photos of your AV setup.')}}</b></p>
                                </div>

                                <div class="m-lg-6">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default active">
                                                    <div class="panel-heading back-g-color" role="tab"
                                                        id="headingOne1">
                                                        <div class="card border-end shadow-none back-g-color m-0">
                                                            <div class="card-body p-0">
                                                                <div class="px-5 py-3 m-0 text-center bg-white">
                                                                    <h5 class="text-dark m-0">{{lang('Meetings')}}</h5>
                                                                    <hr class="bg-dark mb-0">
                                                                </div>
                                                                <div class="ms-5 my-4">
                                                                    <li class="text-dark mb-2">{{lang('Workshops')}}</li>
                                                                    <li class="text-dark mb-2">{{lang('Presentations')}}</li>
                                                                    <li class="text-dark mb-2">{{lang('Retreats')}}</li>
                                                                    <li class="text-dark">{{lang('More')}}</li>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="bg-dark mb-0 mt-1">
                                                        <h4 class="panel-title bg-primary text-center">
                                                            <a role="button" data-bs-toggle="collapse"
                                                                data-bs-parent="#accordion" href="#collapse1"
                                                                class="text-white" aria-expanded="true"
                                                                aria-controls="collapse1"> {{lang('Enable')}} </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingOne1">
                                                        <div class="panel-body">
                                                            <label class="form-label">{{lang('Pricing')}}</label>
                                                            <hr class="bg-dark mt-0">
                                                            <label class="mb-5">{{lang('Hourly rate')}}</label>
                                                            <p>{{lang('Please choose a base hourly rate. You
                                                                can customize your pricing with atten-
                                                                dee pricing, calendar pricing, add add-
                                                                ons once your listing are created.')}}</p>
                                                            <div class="form-group mb-6">
                                                                <div class="input-group w-100">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="80" aria-label="Recipient's username"
                                                                        aria-describedby="basic-addon2">
                                                                    <span class="input-group-text"
                                                                        id="basic-addon2">{{lang('SAR')}}</span>
                                                                </div>
                                                            </div>
                                                            <p>{{lang('Minimum number of hours')}}</p>
                                                            <p>{{lang('Must be between 1-12 hours')}}</p>
                                                            <div class="form-group mb-4">
                                                                <div class="input-group w-100">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="5" aria-label="Recipient's username"
                                                                        aria-describedby="basic-addon2">
                                                                    <span class="input-group-text" id="basic-addon2"><i
                                                                            class="fa fa-calendar w-5 text-white"></i></span>
                                                                </div>
                                                            </div>

                                                            <label class="my-5">{{lang('8+ hour discount')}}</label>
                                                            <p{{lang('>Encourage guests to book longer by giving a discount for
                                                                bookings that are 8 hours or more.')}}</p>
                                                            <div class="form-group mb-3">
                                                                <div class="input-group w-100">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Optional"
                                                                        aria-label="Recipient's username"
                                                                        aria-describedby="basic-addon2">
                                                                    <span class="input-group-text" id="basic-addon2">{{lang('%
                                                                        off')}}</span>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="mb-6">{{lang('How is this calculated?')}}</a>
                                                            <label class="form-label">{{lang('Who can book instantly?')}}</label>
                                                            <hr class="bg-dark mt-0">
                                                            <div class="mb-5">
                                                                <label>
                                                                    <input type="radio" name="example-checkbox1"
                                                                        value="option1">
                                                                    <span>{{lang('Everyone')}}</span>
                                                                </label>
                                                                <p>{{lang('Guests who acknowledge and accept your host rules can
                                                                    book instantly.')}}</p>
                                                                <label>
                                                                    <input type="radio" name="example-checkbox1"
                                                                        value="option2">
                                                                    <span>{{lang('No one')}}</span>
                                                                </label>
                                                                <p>{{lang('Booking requests will need to be manually accepted or
                                                                    declined.')}}</p>
                                                            </div>
                                                            <a href="#">{{lang('Learn more?')}}</a>
                                                            <div class="my-5">
                                                                <p class="back-g-color p-3">{{lang('Meeting listings get up to 2x
                                                                    more bookings when guests can book instantly')}}</p>
                                                            </div>
                                                            <label class="form-label">{{lang('Capacity')}}</label>
                                                            <hr class="bg-dark mb-3">
                                                            <p>{{lang('Maximum number of guests')}}</p>
                                                            <div class="form-group mb-3">
                                                                <div class="input-group w-100">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="250"
                                                                        aria-label="Recipient's username"
                                                                        aria-describedby="basic-addon2">
                                                                    <span class="input-group-text" id="basic-addon2"><i
                                                                            class="fa fa-group w-5 text-white"></i></span>
                                                                </div>
                                                            </div>
                                                            <label class="form-label">{{lang('Who can book instantly?')}}</label>
                                                            <hr class="bg-dark mb-3">
                                                            <p>{{lang('All amenities you select should be inclu-
                                                                ded in your hourly rate. If you have
                                                                amenities that you charge for, do not
                                                                include them here. You can add those in
                                                                a later section.')}}
                                                            </p><br>
                                                            {{lang('You must include WiFi, tables, and chairs
                                                            to offer meetings')}}
                                                            <div class="row">
                                                                <div class="span12 pagination-centered">
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" value="">{{lang('WiFi')}}
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Tables')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Chairs')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Whiteboard')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Chalkboard')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Projector')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Screen')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" value="">{{lang('Flip
                                                                            Charts')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Monitor')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Conference Phone')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Parking Space(s)')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Public
                                                                            Transportation')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Restrooms')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Wheelchair
                                                                            Accessible')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Breakout Space')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Kitchen')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Coffee')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" value="">{{lang('Apple
                                                                            TV')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Printer')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Rooftop')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Outdoor Area')}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-4">
                                                                <h4>{{lang('Add your own amenities')}}</h4>
                                                                <input style="width:195px;height:42px;" type="text"
                                                                    class="btn btn-default rounded-0">
                                                                <button
                                                                    style="margin-left:20px;width:80px;height:42px;background-color:#00224F;color:white;"
                                                                    type="button"
                                                                    class="btn btn-default rounded-0">{{lang('Add')}}</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default active">
                                                    <div class="panel-heading back-g-color" role="tab"
                                                        id="headingOne1">
                                                        <div class="card border-end shadow-none back-g-color m-0">
                                                            <div class="card-body p-0">
                                                                <div class="px-5 py-3 m-0 text-center bg-white">
                                                                    <h5 class="text-dark m-0">{{lang('Events')}}</h5>
                                                                    <hr class="bg-dark mb-0">
                                                                </div>
                                                                <div class="ms-5 my-4">
                                                                    <li class="text-dark mb-2">{{lang('Birthdays')}}</li>
                                                                    <li class="text-dark mb-2">{{lang('Networking Event')}}</li>
                                                                    <li class="text-dark mb-2">{{lang('Corporate Party')}}</li>
                                                                    <li class="text-dark">{{lang('Corporate Party')}}</li>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="bg-dark mb-0 mt-1">
                                                        <h4 class="panel-title bg-primary text-center">
                                                            <a role="button" data-bs-toggle="collapse"
                                                                data-bs-parent="#accordion" href="#collapse2"
                                                                class="text-white" aria-expanded="true"
                                                                aria-controls="collapse1"> {{lang('Enable')}} </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingOne1">
                                                        <div class="panel-body">
                                                            <label class="form-label">{{lang('Pricing')}}</label>
                                                            <hr class="bg-dark mt-0">
                                                            <label class="mb-5">{{lang('Hourly rate')}}</label>
                                                            <p>{{lang('Please choose a base hourly rate. You
                                                                can customize your pricing with atten-
                                                                dee pricing, calendar pricing, add add-
                                                                ons once your listing are created.')}}</p>
                                                            <div class="form-group mb-6">
                                                                <div class="input-group w-100">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="80" aria-label="Recipient's username"
                                                                        aria-describedby="basic-addon2">
                                                                    <span class="input-group-text"
                                                                        id="basic-addon2">{{lang('SAR')}}</span>
                                                                </div>
                                                            </div>
                                                            <p>{{lang('Minimum number of hours')}}</p>
                                                            <p>{{lang('Must be between 1-12 hours')}}</p>
                                                            <div class="form-group mb-4">
                                                                <div class="input-group w-100">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="5" aria-label="Recipient's username"
                                                                        aria-describedby="basic-addon2">
                                                                    <span class="input-group-text" id="basic-addon2"><i
                                                                            class="fa fa-calendar w-5 text-white"></i></span>
                                                                </div>
                                                            </div>

                                                            <label class="my-5">{{lang('8+ hour discount')}}</label>
                                                            <p>{{lang('Encourage guests to book longer by giving a discount for
                                                                bookings that are 8 hours or more.')}}</p>
                                                            <div class="form-group mb-3">
                                                                <div class="input-group w-100">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Optional"
                                                                        aria-label="Recipient's username"
                                                                        aria-describedby="basic-addon2">
                                                                    <span class="input-group-text" id="basic-addon2">{{lang('%
                                                                        off')}}</span>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="mb-6">{{lang('How is this calculated?')}}</a>
                                                            <label class="form-label">{{lang('Who can book instantly?')}}</label>
                                                            <hr class="bg-dark mt-0">
                                                            <div class="mb-5">
                                                                <label>
                                                                    <input type="radio" name="example-checkbox1"
                                                                        value="option1">
                                                                    <span>{{lang('Everyone')}}</span>
                                                                </label>
                                                                <p>{{lang('Guests who acknowledge and accept your host rules can
                                                                    book instantly.')}}</p>
                                                                <label>
                                                                    <input type="radio" name="example-checkbox1"
                                                                        value="option2">
                                                                    <span>{{lang('No one')}}</span>
                                                                </label>
                                                                <p>{{lang('Booking requests will need to be manually accepted or
                                                                    declined.')}}</p>
                                                            </div>
                                                            <a href="#">{{lang('Learn more?')}}</a>
                                                            <div class="my-5">
                                                                <p class="back-g-color p-3">{{lang('Meeting listings get up to 2x
                                                                    more bookings when guests can book instantly')}}</p>
                                                            </div>
                                                            <label class="form-label">{{lang('Capacity')}}</label>
                                                            <hr class="bg-dark mb-3">
                                                            <p>{{lang('Maximum number of guests')}}</p>
                                                            <div class="form-group mb-3">
                                                                <div class="input-group w-100">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="250"
                                                                        aria-label="Recipient's username"
                                                                        aria-describedby="basic-addon2">
                                                                    <span class="input-group-text" id="basic-addon2"><i
                                                                            class="fa fa-group w-5 text-white"></i></span>
                                                                </div>
                                                            </div>
                                                            <label class="form-label">{{lang('Who can book instantly?')}}</label>
                                                            <hr class="bg-dark mb-3">
                                                            <p>{{lang('All amenities you select should be inclu-
                                                                ded in your hourly rate. If you have
                                                                amenities that you charge for, do not
                                                                include them here. You can add those in
                                                                a later section.')}}
                                                            </p><br>
                                                            {{lang('You must include WiFi, tables, and chairs
                                                            to offer meetings')}}
                                                            <div class="row">
                                                                <div class="span12 pagination-centered">
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" value="">{{lang('WiFi')}}
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Tables')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Chairs')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Whiteboard')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Chalkboard')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Projector')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Screen')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" value="">{{lang('Flip
                                                                            Charts')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Monitor')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Conference Phone')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Parking Space(s)')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Public
                                                                            Transportation')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Restrooms')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Wheelchair
                                                                            Accessible')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Breakout Space')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Kitchen')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Coffee')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" value="">{{lang('Apple
                                                                            TV')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Printer')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Rooftop')}}</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">{{lang('Outdoor Area')}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-4">
                                                                <h4>Add your own amenities</h4>
                                                                <input style="width:195px;height:42px;" type="text"
                                                                    class="btn btn-default rounded-0">
                                                                <button
                                                                    style="margin-left:20px;width:80px;height:42px;background-color:#00224F;color:white;"
                                                                    type="button"
                                                                    class="btn btn-default rounded-0">Add</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default active">
                                                    <div class="panel-heading back-g-color" role="tab"
                                                        id="headingOne1">
                                                        <div class="card border-end shadow-none back-g-color m-0">
                                                            <div class="card-body p-0">
                                                                <div class="px-5 py-3 m-0 text-center bg-white">
                                                                    <h5 class="text-dark m-0">Media Production</h5>
                                                                    <hr class="bg-dark mb-0">
                                                                </div>
                                                                <div class="ms-5 my-4">
                                                                    <li class="text-dark mb-2">Film shoots</li>
                                                                    <li class="text-dark mb-2">Photo shoots</li>
                                                                    <li class="text-dark mb-2">Audio recording</li>
                                                                    <li class="text-dark">More</li>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="bg-dark mb-0 mt-1">
                                                        <h4 class="panel-title bg-primary text-center">
                                                            <a role="button" data-bs-toggle="collapse"
                                                                data-bs-parent="#accordion" href="#collapse3"
                                                                class="text-white" aria-expanded="true"
                                                                aria-controls="collapse1"> Enable </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingOne1">
                                                        <div class="panel-body">
                                                            <label class="form-label">Pricing</label>
                                                            <hr class="bg-dark mt-0">
                                                            <label class="mb-5">Hourly rate</label>
                                                            <p>Please choose a base hourly rate. You
                                                                can customize your pricing with atten-
                                                                dee pricing, calendar pricing, add add-
                                                                ons once your listing are created.</p>
                                                            <div class="form-group mb-6">
                                                                <div class="input-group w-100">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="80" aria-label="Recipient's username"
                                                                        aria-describedby="basic-addon2">
                                                                    <span class="input-group-text"
                                                                        id="basic-addon2">SAR</span>
                                                                </div>
                                                            </div>
                                                            <p>Minimum number of hours</p>
                                                            <p>Must be between 1-12 hours</p>
                                                            <div class="form-group mb-4">
                                                                <div class="input-group w-100">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="5" aria-label="Recipient's username"
                                                                        aria-describedby="basic-addon2">
                                                                    <span class="input-group-text" id="basic-addon2"><i
                                                                            class="fa fa-calendar w-5 text-white"></i></span>
                                                                </div>
                                                            </div>

                                                            <label class="my-5">8+ hour discount</label>
                                                            <p>Encourage guests to book longer by giving a discount for
                                                                bookings that are 8 hours or more.</p>
                                                            <div class="form-group mb-3">
                                                                <div class="input-group w-100">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Optional"
                                                                        aria-label="Recipient's username"
                                                                        aria-describedby="basic-addon2">
                                                                    <span class="input-group-text" id="basic-addon2">%
                                                                        off</span>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="mb-6">How is this calculated?</a>
                                                            <label class="form-label">Who can book instantly?</label>
                                                            <hr class="bg-dark mt-0">
                                                            <div class="mb-5">
                                                                <label>
                                                                    <input type="radio" name="example-checkbox1"
                                                                        value="option1">
                                                                    <span>Everyone</span>
                                                                </label>
                                                                <p>Guests who acknowledge and accept your host rules can
                                                                    book instantly.</p>
                                                                <label>
                                                                    <input type="radio" name="example-checkbox1"
                                                                        value="option2">
                                                                    <span>No one</span>
                                                                </label>
                                                                <p>Booking requests will need to be manually accepted or
                                                                    declined.</p>
                                                            </div>
                                                            <a href="#">Learn more?</a>
                                                            <div class="my-5">
                                                                <p class="back-g-color p-3">Meeting listings get up to 2x
                                                                    more bookings when guests can book instantly</p>
                                                            </div>
                                                            <label class="form-label">Capacity</label>
                                                            <hr class="bg-dark mb-3">
                                                            <p>Maximum number of guests</p>
                                                            <div class="form-group mb-3">
                                                                <div class="input-group w-100">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="250"
                                                                        aria-label="Recipient's username"
                                                                        aria-describedby="basic-addon2">
                                                                    <span class="input-group-text" id="basic-addon2"><i
                                                                            class="fa fa-group w-5 text-white"></i></span>
                                                                </div>
                                                            </div>
                                                            <label class="form-label">Who can book instantly?</label>
                                                            <hr class="bg-dark mb-3">
                                                            <p>All amenities you select should be inclu-
                                                                ded in your hourly rate. If you have
                                                                amenities that you charge for, do not
                                                                include them here. You can add those in
                                                                a later section.
                                                            </p><br>
                                                            You must include WiFi, tables, and chairs
                                                            to offer meetings
                                                            <div class="row">
                                                                <div class="span12 pagination-centered">
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" value="">WiFi
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Tables</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Chairs</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Whiteboard</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Chalkboard</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Projector</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Screen</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" value="">Flip
                                                                            Charts</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Monitor</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Conference Phone</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Parking Space(s)</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Public
                                                                            Transportation</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Restrooms</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Wheelchair
                                                                            Accessible</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Breakout Space</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Kitchen</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Coffee</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" value="">Apple
                                                                            TV</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Printer</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Rooftop</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox"
                                                                                value="">Outdoor Area</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-4">
                                                                <h4>Add your own amenities</h4>
                                                                <input style="width:195px;height:42px;" type="text"
                                                                    class="btn btn-default rounded-0">
                                                                <button
                                                                    style="margin-left:20px;width:80px;height:42px;background-color:#00224F;color:white;"
                                                                    type="button"
                                                                    class="btn btn-default rounded-0">Add</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-9" class="mb-5">
                                <h1 style="text-align:center;">Step 9 of 9</h1>
                                <div class="form">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="mb-lg-5 mb-3">
                                                <h2 class="mb-1"><b class="h-3">Who will guests be contacting?</b>
                                                </h2>
                                                <b>Please do not use a business name, so it’s more personal for your
                                                    guests.</b>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="exampleInputname"
                                                            placeholder="john" required
                                                            data-parsley-required-message="{{lang('Password is required*')}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="exampleInputname1"
                                                            placeholder="Smith" required
                                                            data-parsley-required-message="{{lang('Confirm Password is required')}}*"
                                                            readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control" id="exampleInputEmail1"
                                                    placeholder="(123) 345 -4567" required
                                                    data-parsley-required-message="{{lang('Email is required*')}}" readonly>
                                            </div>
                                            <div class="bg-light-gray p-3 mb-3">
                                                <p class="ms-3 m-0"><i class="fa fa-info-circle me-4"></i>Your number
                                                    needs
                                                    to be verified</p>
                                            </div>
                                            <p class="mb-5">We won’t share your number publicly. Guests will only see it
                                                after they book to coordinate with you.</p>
                                            <hr class="bg-dark my-6">
                                        </div>
                                        <div class="col-4">
                                            <div class="text-center chat-image mb-5">
                                                <div class="avatar avatar-xxl chat-profile mb-3 brround"
                                                    id="uploadContainer">
                                                    <a class="" href="#">
                                                        <img alt="avatar"
                                                            src="{{ asset('assets/images/users/23.jpeg') }}"
                                                            class="avatar avatar-xxl chat-profile mb-3 brround"
                                                            id="avatarImage">
                                                    </a>
                                                </div>
                                                <div class="text-center">
                                                    <button type="button"
                                                        class="bg-primary text-white p-3 border-0 text-center"
                                                        id="uploadBtn">Upload
                                                        photo</button>
                                                </div>
                                                <!-- Hidden input for image upload -->
                                                <input type="file" id="imageUploadInput" style="display: none">
                                            </div>
                                            <div class="text-center px-8">
                                                <p class="text-muted">Choose a friendly, accurate photo to help instill a
                                                    sense of trust and verification in your listing</p>
                                            </div>
                                            <div class="px-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                                    class="w-4" alt=""> No photos of the
                                                                space
                                                            </li>
                                                            <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                                    class="w-4" alt=""> No business logos
                                                            </li>
                                                            <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                                    class="w-4" alt=""> No group photos</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-9">
                                                <h3><b class="h-3">How did you hear about entertainment / talent with
                                                        Eventopia?</b></h3>
                                                <p>Select all that apply to help us find more hosts like you.</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-1" required>
                                                            <label class="form-check-label" for="invalidCheck-1">Friend,
                                                                family, or colleague</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-2" required>
                                                            <label class="form-check-label" for="invalidCheck-2">News or
                                                                blog
                                                                article</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-3" required>
                                                            <label class="form-check-label"
                                                                for="invalidCheck-3">Contacted
                                                                by
                                                                Eventopia</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-4" required>
                                                            <label class="form-check-label"
                                                                for="invalidCheck-4">TV</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-5" required>
                                                            <label class="form-check-label"
                                                                for="invalidCheck-5">Billboard</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-6" required>
                                                            <label class="form-check-label"
                                                                for="invalidCheck-6">Billboard</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-7" required>
                                                            <label class="form-check-label" for="invalidCheck-7">Online
                                                                ad</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-8" required>
                                                            <label class="form-check-label" for="invalidCheck-8">Social
                                                                media</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-9" required>
                                                            <label class="form-check-label"
                                                                for="invalidCheck-9">Referral
                                                                from
                                                                a Eventopia host</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-10" required>
                                                            <label class="form-check-label" for="invalidCheck-10">Online
                                                                search</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-11" required>
                                                            <label class="form-check-label"
                                                                for="invalidCheck-11">Attended
                                                                an
                                                                event in a Eventopia</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="invalidCheck-12" required>
                                                            <label class="form-check-label"
                                                                for="invalidCheck-12">Other</label>
                                                        </div>
                                                    </div>
                                                    <hr class="bg-dark my-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-10" class="mb-5">
                                <div class="form">
                                    <div class="container">
                                        <div class="text-center mb-6">
                                            <h3 class="mt-3 mt-1"><b>Please review the following Eventopia policies</b>
                                            </h3>
                                            <p class=""><img
                                                    src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                    class="w-5" alt=""> I agree and
                                                understand that as a Eventopia host I am required to:</p>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-1" required>
                                                        <label class="form-check-label" for="invalidCheck-1">
                                                            <p>Keep conversations on Eventopia</p>
                                                            <p>Keep conversations with guests on the platform so everyone
                                                                knows what was agreed to.</p>
                                                        </label>
                                                    </div>
                                                    <hr class="bg-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-2" required>
                                                        <label class="form-check-label" for="invalidCheck-2">
                                                            <p>Use Eventopia to process payments</p>
                                                            <p>All payments must be processed on Eventopia and honor our
                                                                service fee. All payouts will be made via direct deposit to
                                                                your bank account.</p>
                                                        </label>
                                                    </div>
                                                    <hr class="bg-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-3" required>
                                                        <label class="form-check-label" for="invalidCheck-3">
                                                            <p>Follow the booking, cancellation, and overtime policies</p>
                                                            <p>All bookings are covered by the Eventopia Services Agreement.
                                                                Contracts that conflict with these policies are not allowed.
                                                            </p>
                                                        </label>
                                                    </div>
                                                    <hr class="bg-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-4" required>
                                                        <label class="form-check-label" for="invalidCheck-4">
                                                            <p>Make sure my space meets local regulations</p>
                                                            <p>Follow local regulations to ensure the safety of your guests,
                                                                yourself, and your space.</p>
                                                        </label>
                                                    </div>
                                                    <hr class="bg-dark">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <script src="{{ asset('assets/plugins/formwizard/jquery.smartWizard.js') }}"></script>
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
        function toggleTextArea() {
            const checkbox = document.getElementById('flexSwitchCheckChecked2');
            const textAreaDiv = document.getElementById('textAreaDiv');
            if (checkbox.checked) {
                textAreaDiv.style.display = 'block'; // Show the text area
            } else {
                $('#security_devices_description').val('');
                textAreaDiv.style.display = 'none'; // Hide the text area
            }
        }


        function toggleOptions() {
            const checkbox = document.getElementById('flexSwitchCheckChecked3');
            const textAreaDiv = document.getElementById('options');
            if (checkbox.checked) {
                options.style.display = 'block'; // Show the text area
            } else {
                $('.parking_option').val('');
                options.style.display = 'none'; // Hide the text area
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const uploadBtn = document.getElementById('uploadBtn');
            const imageUploadInput = document.getElementById('imageUploadInput');
            const avatarImage = document.getElementById('avatarImage');

            // Listen for click on the "Upload photo" button
            uploadBtn.addEventListener('click', function() {
                // Trigger the file input click event
                imageUploadInput.click();
            });

            // Listen for change in the file input (when user selects an image)
            imageUploadInput.addEventListener('change', function(event) {
                const selectedImage = event.target.files[0];

                // Validate if a file was selected and it is an image
                if (selectedImage && selectedImage.type.startsWith('image/')) {
                    // Read the selected image and set it as the source for the avatar image
                    const reader = new FileReader();
                    reader.onload = function() {
                        avatarImage.src = reader.result;
                    };
                    reader.readAsDataURL(selectedImage);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.sw-btn-next').on('click', function(e) {
                var checkSecondClass = $('.sw-btn-next').hasClass('last_step_btn');
                $('.last_step_btn').on('click', function(e) {
                    window.location.href = "{{ url('/steps-form-submit') }}";
                });
            });
        });
    </script>
    @include('layouts.components.setHoursScript')

    <script>
        $(document).ready(function() {
            $('#flexSwitchCheckChecked').on('click', function() {
                $('#mapColumn').toggleClass('d-none');
                $('#galleryColumn').toggleClass('col-lg-12');
            });
        });
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
@endsection
