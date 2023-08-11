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
                        <div id="step-1" class="mb-5">
                            <form action="#">
                                <div class="container">
                                    <div class="text-center mb-6">
                                        <h3 class="mt-3 mt-1"><b>What type of entertainment & talent are you
                                                listing?</b>
                                        </h3>
                                        <p class="">Enter the type of entertainment & talent that most closely
                                            represents
                                            the physical space being listed. <a href="#">Learn more</a></p>
                                    </div>
                                    <div class="mt-6">
                                        <p><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-5"
                                                alt="">
                                            Examples: 'Comedian' 'Singers' 'Food & Beverages'
                                        </p>
                                        <input type="text" class="w-100 p-4 bg-light-gray form-control"
                                            placeholder="Comedian for event">
                                        <hr class="bg-dark">
                                        <h1>what are your Entertainment and Talent rules</h1>
                                        <p>Include any rules about what your guests can and cannot do in the space.</p>
                                        <h3>Example rules:</h3>
                                        <ul style="list-style-type:disc">
                                            <li class="ms-4">No smoking in the building</li>
                                            <li class="ms-4">Outside catering is allowed</li>
                                            <li class="ms-4">No alcohol allowed after 8pm</li>
                                        </ul><br>
                                        <h2>Do not include:</h2>
                                        <ul style="list-style-type:disc">
                                            <li class="ms-4"><b><span style="color:black;">Cleaning Fee</span></b> - Basic cleaning
                                                is the
                                                responsibility of the host. If you charge a cleaning fee, you can add it
                                                in a
                                                later section.</li>
                                            <li class="ms-4"><b><span style="color:black;">Contracts </span></b> - Peerspace bookings
                                                are
                                                covered by our Service Agreement. Do not paste your contract,
                                                cancellation
                                                policy, or
                                                liability policy.</li>
                                        </ul>
                                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                        <textarea style="height:150px;" class="form-control rounded-0"
                                            id="exampleFormControlTextarea1" rows="3">Enter your house rules</textarea>
                                        <p class="text-end">Minimum 100 characters</h4>
                                            <br>
                                            <hr class="bg-dark"><br>
                                        <h3 class="mb-2"><b>Security cameras and recording devices</b></h3>
                                        <div class="w-50 float-start">
                                            <p class="mb-3">Does the event have security cameras or recording devices?
                                            </p>
                                        </div>
                                        <div class="w-50 float-end">
                                            <div class="form-check form-switch float-end">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" checked onchange="toggleTextArea()"
                                                    required>
                                            </div>
                                        </div>
                                        <br>
                                        <div id="textAreaDiv" class="mt-5">
                                            <p class="mb-1">Describe any device that records video, audio, or still
                                                images.
                                                Specify where each device is in your event and if they’ll be on or off.
                                            </p>
                                            <textarea name="" id="" cols="30" rows="5" class="w-100 p-5 form-control"
                                                placeholder="Add description" required></textarea>
                                            <p class="text-end">Minimum 50 characters</p>
                                        </div>
                                    </div>
                                    <hr class="bg-dark border-3">
                                </div>
                            </form>
                        </div>
                        <div id="step-2" class="mb-5">
                            <form action="#">
                                <div class="container">
                                    <div class="text-center mb-6">
                                        <h3 class="mt-3 mt-1"><b>What type of entertainment & talent are you
                                                listing?</b>
                                        </h3>
                                        <p class="">Create a title that will grab a guest’s interest and describes
                                            your
                                            entertainment & talent. Do not include your business’s name.</p>
                                    </div>
                                    <div class="mt-6">
                                        <h4>Try to include the following:</h4>
                                        <li class="">Location - urban, downtown, marina</li>
                                        <li class="">The type of space - loft, studio, dance hall, penthouse</li>
                                        <li class="">Unique adjective - industrial, rustic, roomy</li>

                                        <div class="mt-5">
                                            <p><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-5"
                                                    alt=""> Example: “Downtown Loft with Skyline View”</p>
                                            <input type="text" class="w-100 p-4 bg-light-gray border-1 form-control"
                                                placeholder="Enter your entertainment & talent title" required>
                                            <hr class="bg-dark">
                                        </div>
                                        <div class="mt-7">
                                            <p class="display-8"><b>How Big is the space needed?</b></p>
                                            <p class="my-4">Please only include the size of the space that guests can
                                                use
                                                during their booking.</p>
                                            <p><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-5"
                                                    alt=""> Example: If your space is 2,000 sq m, but guests are
                                                booking a
                                                500 m m conference room, you would enter “500”.</p>
                                            <div class="form-group">
                                                <div class="input-group w-30">
                                                    <input type="text" class="form-control" placeholder="1 to 500"
                                                        aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2" required>
                                                    <span class="input-group-text" id="basic-addon2">sq m</span>
                                                </div>
                                            </div>
                                            <hr class="bg-dark">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="display-8"><b>What are your entertainment / talent rules?? </b>
                                            (Optional)
                                        </p>
                                        <p class="my-6">Include any rules about what your guests can and cannot do in
                                            the
                                            event.</p>
                                        <p class="mb-3"><b>Example rules:</b></p>
                                        <li>No smoking in the building</li>
                                        <li>Outside catering is allowed</li>
                                        <li>No alcohol allowed after 8pm</li>
                                        <hr class="bg-dark">
                                    </div>
                                    <div class="mt-7">
                                        <p class="display-8"><b>Who’s allowed to watch your entertainment / talent?</b>
                                        </p>
                                        <p class="mt-5">Typically, only venues that serve alcohol have age requirements.
                                        </p>
                                        <select name="country" class="form-control form-select select2"
                                            data-bs-placeholder="All Ages" required>
                                            <option value="All Ages" selected>All Ages</option>
                                            <option value="18+">18+</option>
                                            <option value="21+">22+</option>
                                        </select>
                                        <hr class="bg-dark">
                                    </div>
                                    <div class="mt-7">
                                        <p class="display-8"><b>Provide arrival instructions </b> (Optional)</p>
                                        <p class="my-5">Help your guests and their attendees find and enter your event.
                                        </p>
                                        <h4><b>Try to include:</b></h4>
                                        <li class="mb-5">Directions to your space, building access, door buzzers,
                                            floors,
                                            stairs/elevator access etc.</li>
                                        <textarea name="" id="" cols="30" rows="5" class="w-100 form-control p-5"
                                            placeholder="Add description"
                                            required>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</textarea>
                                        <p class="text-end">Minimum 100 characters</p>
                                        <p><i class="fa fa-lock"></i>&nbsp; Don't worry, we'll only share this with
                                            guests
                                            after you have accepted their booking.</p>
                                    </div>
                                    <hr class="bg-dark border-3">
                                </div>
                            </form>
                        </div>
                        <div id="step-3" class="mb-5">
                            <form action="#">
                                <div class="container">
                                    <div class="text-center mb-6">
                                        <h3 class="mt-3 mt-1"><b>Upload photos / videos of your entertainment &
                                                talent</b>
                                        </h3>
                                        <p class="">Photos / videos are the first thing that guests will see. We
                                            recommend
                                            adding 10 or more high quality photos.</p>
                                    </div>
                                    <p class="mb-3"><b>Photo requirements:</b></p>
                                    <div class="row mb-5">
                                        <div class="col-md-6">
                                            <li>High resolution - At least 1,000 pixels wide</li>
                                            <li>Horizontal orientation - No vertical photos</li>
                                        </div>
                                        <div class="col-md-6">
                                            <li>Color photos - No black & white</li>
                                            <li>Misc. - No collages, screenshots, or watermarks</li>
                                        </div>
                                    </div>
                                    <div class="control-group form-group  row">
                                        <div class="col-lg-12 col-sm-12">
                                            <label class="form-label">Multiple Fancy Upload</label>
                                            <input id="demo" type="file" name="files"
                                                accept=".jpg, .png, image/jpeg, image/png" multiple required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <p><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-5"
                                                    alt=""> Drag and drop your photos to change the order. Your
                                                first photo
                                                is what your guests will see when browsing so make sure it represents
                                                your
                                                space.</p>
                                        </div>
                                    </div>
                                    <hr class="bg-dark border-3">
                                </div>
                            </form>
                        </div>
                        <div id="step-4" class="mb-5">
                            <form action="#">
                                <div class="container">
                                    <div class="text-center mb-6">
                                        <h3 class="mt-3 mt-1"><b>What are your operating hours?</b>
                                        </h3>
                                        <p class="">Operating hours are the days and hours of the week that your
                                            space
                                            is
                                            open to host bookings (i.e. your general availability). Guests will not be
                                            able
                                            to book times outside of your operating hours. Learn More.</p>
                                    </div>
                                    <p class="mb-3"><b>Comedy event - 23408 Bernier Cliff Suite 526</b></p>
                                    <div class="bg-gray px-4 py-3">
                                        <p class="text-white m-0"><i class="fa fa-info-circle me-md-5"></i> Operating
                                            hours
                                            end times are restricted to 12
                                            AM for this space type. Read our Social Events Policy for more information.
                                        </p>
                                    </div>
                                    @include('layouts.components.setHoursHTMLCode')
                                    <hr class="bg-dark border-3">
                                </div>
                            </form>
                        </div>
                        <div id="step-5" class="mb-5">
                            <form action="#">
                                <div class="container">
                                    <div class="text-center mb-6">
                                        <h3 class="mt-3 mt-1"><b>Choose your Cancellation Policy</b>
                                        </h3>
                                        <p class=""><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                class="w-5" alt=""> Hosts with more flexible cancellation
                                            policies attract more
                                            bookings.</p>
                                        <hr class="bg-dark border-2">
                                    </div>
                                    <p class="mb-7">Cancellation period: All Bookings are subject to Eventopia Period
                                        policy
                                        which provides a full refund for Bookings cancelled within 24 hours from receipt
                                        of
                                        a Booking Confirmation but no later than 48 hours prior to the Event start time.
                                    </p>
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="custom-control">
                                                <input type="radio" class="" name="example-checkbox1" value="option2">
                                                <span class="">Very Flexible</span>
                                            </label>
                                        </div>
                                        <div class="col-9">
                                            <p>Guests may cancel their Booking until 24 hours before the event start
                                                time
                                                and will receive a full refund (including all Fees) of their Booking
                                                Price.
                                            </p>
                                            <p>Bookings cancellations submitted less than 24 hours before the Event
                                                start
                                                time are not refundable.</p>
                                        </div>
                                        <hr class="bg-dark border-2">
                                        <div class="col-3">
                                            <label class="custom-control">
                                                <input type="radio" class="" name="example-checkbox1" value="option2"
                                                    cheaked>
                                                <span class="">Flexible</span>
                                            </label>
                                        </div>
                                        <div class="col-9">
                                            <p>Guests may cancel their Booking until 7 days before the event start time
                                                and
                                                will receive a full refund (including all Fees) of their Booking Price.
                                            </p>
                                            <p>Guests may cancel their Booking between 7 days and 24 hours before the
                                                event
                                                start time and receive a 50% refund (excluding Fees) of their Booking
                                                Price.
                                            </p>
                                            <p>Booking cancellations submitted less than 24 hours before the Event start
                                                time are not refundable.</p>
                                        </div>
                                        <hr class="bg-dark border-2">
                                        <div class="col-3">
                                            <label class="custom-control">
                                                <input type="radio" class="" name="example-checkbox1" value="option3">
                                                <span class="">Standard 30 day</span>
                                            </label>
                                        </div>
                                        <div class="col-9">
                                            <p>Guests may cancel their Booking until 30 days before the event start time
                                                and
                                                will receive a full refund (including all Fees) of their Booking Price.
                                            </p>
                                            <p>Guests may cancel their Booking until 30 hours before the event start
                                                time
                                                and will receive a full refund (including all Fees) of their Booking
                                                Price.
                                            </p>
                                            <p>Bookings cancellations submitted less than 7 hours before the Event start
                                                time are not refundable.</p>
                                        </div>
                                        <hr class="bg-dark border-2">
                                        <div class="col-3">
                                            <label class="custom-control">
                                                <input type="radio" class="" name="example-checkbox1" value="option4">
                                                <span class="">Standard 90 day</span>
                                            </label>
                                        </div>
                                        <div class="col-9">
                                            <p>Guests may cancel their Booking until 90 hours before the event start
                                                time
                                                and will receive a full refund (including all Fees) of their Booking
                                                Price.
                                            </p>
                                            <p>Guests may cancel their Booking until 90 hours before the event start
                                                time
                                                and will receive a full refund (including all Fees) of their Booking
                                                Price.
                                            </p>
                                            <p>Bookings cancellations submitted less than 14 hours before the Event
                                                start
                                                time are not refundable.</p>
                                        </div>
                                        <hr class="bg-dark border-2">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="step-6" class="mb-5">
                            <form action="#">
                                <div class="m-lg-6">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default active">
                                                    <div class="panel-heading" role="tab" id="headingOne1">
                                                        <div class="card border-end shadow-none m-0">
                                                            <div class="card-body p-0">
                                                                <div class="px-5 py-3 m-0 text-center bg-white">
                                                                    <h5 class="text-dark m-0">Musical Acts</h5>
                                                                    <hr class="bg-dark mb-0">
                                                                </div>
                                                                <div class="ms-5 my-4">
                                                                    <li class="text-dark mb-2">Workshops</li>
                                                                    <li class="text-dark mb-2">Presentations</li>
                                                                    <li class="text-dark mb-2">Retreats</li>
                                                                    <li class="text-dark">More</li>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="bg-dark mb-0 mt-1">
                                                        <h4 class="panel-title bg-primary text-center">
                                                            <a role="button" data-bs-toggle="collapse"
                                                                data-bs-parent="#accordion" href="#collapse1"
                                                                class="text-white" aria-expanded="true"
                                                                aria-controls="collapse1"> Enable </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel"
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
                                                                        placeholder="80"
                                                                        aria-label="Recipient's username"
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
                                                                        placeholder="5"
                                                                        aria-label="Recipient's username"
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
                                                                <p class="back-g-color p-3">Meeting listings get up to
                                                                    2x
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default active">
                                                    <div class="panel-heading" role="tab" id="headingTwo2">
                                                        <div class="card border-end shadow-none m-0">
                                                            <div class="card-body p-0">
                                                                <div class="px-5 py-3 m-0 text-center bg-white">
                                                                    <h5 class="text-dark m-0">Entertainers</h5>
                                                                    <hr class="bg-dark mb-0">
                                                                </div>
                                                                <div class="ms-5 my-4">
                                                                    <li class="text-dark mb-2">Birthdays</li>
                                                                    <li class="text-dark mb-2">Networking Event</li>
                                                                    <li class="text-dark mb-2">Corporate Party</li>
                                                                    <li class="text-dark">More</li>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="bg-dark mb-0 mt-1">
                                                        <h4 class="panel-title bg-primary text-center">
                                                            <a class="collapsed text-white" role="button"
                                                                data-bs-toggle="collapse" data-bs-parent="#accordion"
                                                                href="#collapse2" aria-expanded="false"
                                                                aria-controls="collapse2"> Enable </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingTwo2">
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
                                                                        placeholder="80"
                                                                        aria-label="Recipient's username"
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
                                                                        placeholder="5"
                                                                        aria-label="Recipient's username"
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
                                                                <p class="back-g-color p-3">Meeting listings get up to
                                                                    2x
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default active">
                                                    <div class="panel-heading" role="tab" id="heading3">
                                                        <div class="card border-end shadow-none m-0">
                                                            <div class="card-body p-0">
                                                                <div class="px-5 py-3 m-0 text-center bg-white">
                                                                    <h5 class="text-dark m-0">Event Services</h5>
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
                                                            <a class="collapsed text-white" role="button"
                                                                data-bs-toggle="collapse" data-bs-parent="#accordion"
                                                                href="#collapse3" aria-expanded="false"
                                                                aria-controls="collapse3"> Enable </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingThree">
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
                                                                        placeholder="80"
                                                                        aria-label="Recipient's username"
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
                                                                        placeholder="5"
                                                                        aria-label="Recipient's username"
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
                                                                <p class="back-g-color p-3">Meeting listings get up to
                                                                    2x
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="step-7" class="mb-5">
                            <form action="#">
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
                                                        data-parsley-required-message="Password is required*">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="exampleInputname1"
                                                        placeholder="Smith" required
                                                        data-parsley-required-message="Confirm Password is required*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" id="exampleInputphone1"
                                                placeholder="(123) 345 -4567" required
                                                data-parsley-required-message="Phone Number is required*">
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
                                                    <img alt="avatar" src="{{ asset('assets/images/users/23.jpeg') }}"
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
                                                            space</li>
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
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-1" required>
                                                        <label class="form-check-label" for="invalidCheck-1">Friend,
                                                            family, or colleague</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-2" required>
                                                        <label class="form-check-label" for="invalidCheck-2">News or
                                                            blog
                                                            article</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-3" required>
                                                        <label class="form-check-label" for="invalidCheck-3">Contacted
                                                            by
                                                            Peerspace</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-4" required>
                                                        <label class="form-check-label" for="invalidCheck-4">TV</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-5" required>
                                                        <label class="form-check-label"
                                                            for="invalidCheck-5">Billboard</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-6" required>
                                                        <label class="form-check-label"
                                                            for="invalidCheck-6">Billboard</label>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-7" required>
                                                        <label class="form-check-label" for="invalidCheck-7">Online
                                                            ad</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-8" required>
                                                        <label class="form-check-label" for="invalidCheck-8">Social
                                                            media</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-9" required>
                                                        <label class="form-check-label" for="invalidCheck-9">Referral
                                                            from
                                                            a Eventopia host</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-10" required>
                                                        <label class="form-check-label" for="invalidCheck-10">Online
                                                            search</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-11" required>
                                                        <label class="form-check-label" for="invalidCheck-11">Attended
                                                            an
                                                            event in a Peerspace</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck-12" required>
                                                        <label class="form-check-label"
                                                            for="invalidCheck-12">Other</label>
                                                    </div>
                                                </div>
                                                <hr class="bg-dark my-6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="step-8" class="mb-5">
                            <form action="#">
                                <div class="container">
                                    <div class="text-center mb-6">
                                        <h3 class="mt-3 mt-1"><b>Please review the following Eventopia policies</b>
                                        </h3>
                                        <p class=""><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                class="w-5" alt=""> I agree and
                                            understand that as a Peerspace host I am required to:</p>
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
    <!-- FORM WIZARD JS-->
    <script src="{{ asset('assets/plugins/formwizard/jquery.smartWizard.js') }}"></script>
    <script src="{{ asset('assets/plugins/formwizard/fromwizard.js') }}"></script>
    <!-- INTERNAL File-Uploads Js-->
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!-- Jquery/buttons JS-->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script>
        function toggleTextArea() {
                const checkbox = document.getElementById('flexSwitchCheckChecked');
                const textAreaDiv = document.getElementById('textAreaDiv');

                if (checkbox.checked) {
                    textAreaDiv.style.display = 'block'; // Show the text area
                } else {
                    textAreaDiv.style.display = 'none'; // Hide the text area
                }
            }

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


            $(document).ready(function() {
                $('.sw-btn-next').on('click', function(e) {
                    var checkSecondClass = $('.sw-btn-next').hasClass('last_step_btn');
                    $('.last_step_btn').on('click', function(e) {
                        // console.log("asdf");
                        window.location.href = '{{ url('/steps-form-submit') }}';
                    });
                });
            });
    </script>

    @include('layouts.components.setHoursScript')

    @endsection