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
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div id="step-2" class="mb-5">
                                <form action="{{ route('entertainment_form_2', $id) }}" method="post" class="validation">
                                    @csrf
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
                                                <p><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                        class="w-5" alt=""> Example: “Downtown Loft with Skyline
                                                    View”</p>
                                                <input type="text" class="w-100 p-4 bg-light-gray border-1 form-control"
                                                    placeholder="Enter your entertainment & talent title" name="title"
                                                    value="{{ @$entertainment->title }}" required
                                                    data-parsley-required-message="Please Enter entertainment title">
                                                <hr class="bg-dark">
                                            </div>
                                            <div class="mt-7">
                                                <p class="display-8"><b>How Big is the space needed?</b></p>
                                                <p class="my-4">Please only include the size of the space that guests can
                                                    use
                                                    during their booking.</p>
                                                <p><img src="{{ asset('assets/images/brand/light-bulb.png') }}"
                                                        class="w-5" alt=""> Example: If your space is 2,000 sq m,
                                                    but guests are
                                                    booking a
                                                    500 m m conference room, you would enter “500”.</p>
                                                <div class="form-group">
                                                    <div class="input-group w-30">
                                                        <input type="number" name="space"
                                                            value="{{ @$entertainment->space }}" class="form-control"
                                                            placeholder="1 to 500" required data-parsley-errors-container="#error"
                                                            data-parsley-required-message="Please Enter Space">
                                                        <span class="input-group-text" id="basic-addon2">sq m</span>
                                                    </div>
                                                    <div id="error"></div>
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
                                            <p class="mt-5">Typically, only venues that serve alcohol have age
                                                requirements.
                                            </p>
                                            <select name="age" class="form-control form-select select2"
                                                data-bs-placeholder="All Ages" required
                                                data-parsley-required-message="Please Select a value">
                                                @foreach ($age as $key => $data)
                                                    <option value="{{ $data->name }}"
                                                        {{ @$entertainment->age == $data->name ? 'selected' : '' }}>{{ $data->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <hr class="bg-dark">
                                        </div>
                                        <div class="mt-7">
                                            <p class="display-8"><b>Provide arrival instructions </b> (Optional)</p>
                                            <p class="my-5">Help your guests and their attendees find and enter your
                                                event.
                                            </p>
                                            <h4><b>Try to include:</b></h4>
                                            <li class="mb-5">Directions to your space, building access, door buzzers,
                                                floors,
                                                stairs/elevator access etc.</li>
                                            <textarea name="arrival" id="" cols="30" rows="5" class="w-100 form-control p-5"
                                                placeholder="Add description"
                                                placeholder="Enter Arrival Instructions">
                                            {{ @$entertainment->arrival }}
                                            </textarea>
                                            <p class="text-end">Minimum 100 characters</p>
                                            <p><i class="fa fa-lock"></i>&nbsp; Don't worry, we'll only share this with
                                                guests
                                                after you have accepted their booking.</p>
                                        </div>
                                        <hr class="bg-dark border-3">
                                    </div>
                                    <div class="float-end">
                                        <a class="btn btn-light"
                                            href="{{ route('load_entertainment_form_1', $id) }}">Previous</a>
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
        <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
        <script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
        <!-- Jquery/buttons JS-->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.validation').parsley();
            });
        </script>

        @include('layouts.components.setHoursScript')
    @endsection
