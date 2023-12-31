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

    @media screen and (min-width: 0px) and (max-width: 500px) {
        .p_display-sz {
            font-size: 1rem !important;
        }
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
                                        <h3 class="mt-3 mt-1 p_display-sz"><b>{{lang('What type of entertainment &
                                                talent are you
                                                listing?')}}</b>
                                        </h3>
                                        <p class="">{{lang('Create a title that will grab a guest’s interest and
                                            describes
                                            your
                                            entertainment & talent. Do not include your business’s name.')}}</p>
                                    </div>
                                    <div class="mt-6">
                                        <h4 class="p_display-sz">{{lang('Try to include the following:')}}</h4>
                                        <li class="">{{lang('Location - urban, downtown, marina')}}</li>
                                        <li class="">{{lang('The type of space - loft, studio, dance hall, penthouse')}}
                                        </li>
                                        <li class="">{{lang('Unique adjective - industrial, rustic, roomy')}}</li>

                                        <div class="mt-5">
                                            <p><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-5"
                                                    alt=""> {{lang('Example: “Downtown Loft with Skyline
                                                View”')}}</p>
                                            <select name="title" required
                                                class="form-control text-white select2-show-search form-select"
                                                data-placeholder="Choose one">
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->name }}" {{ @$entertainment->title ==
                                                    $category->name ? 'selected' : '' }}>
                                                    {{ lang($category->name) }}</option>
                                                @endforeach
                                            </select>

                                            <hr class="bg-dark">
                                        </div>
                                        <div class="mt-7">
                                            <p class="display-8 p_display-sz"><b>{{lang('How Big is the space
                                                    needed?')}}</b></p>
                                            <p class="my-4">{{lang('Please only include the size of the space that
                                                guests can
                                                use
                                                during their booking.')}}</p>
                                            <p><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-5"
                                                    alt=""> {{lang('Example: If your space is 2,000 sq m,
                                                but guests are
                                                booking a
                                                500 m m conference room, you would enter “500”.')}}</p>
                                            <div class="form-group">
                                                <div class="input-group col-xl-3 col-lg-5 col-12">
                                                    <input type="number" name="space"
                                                        value="{{ @$entertainment->space }}" class="form-control"
                                                        placeholder="1 to 500" required min="1" step="1"
                                                        data-parsley-errors-container="#error"
                                                        data-parsley-required-message="{{lang('Please Enter Space')}}">
                                                    <span class="input-group-text" id="basic-addon2">{{lang('sq
                                                        m')}}</span>
                                                </div>
                                                <div id="error"></div>
                                            </div>
                                            <hr class="bg-dark">
                                        </div>
                                    </div>
                                    {{-- <div class="">
                                        <p class="display-8 p_display-sz"><b>{{lang('What are your entertainment /
                                                talent rules??
                                                ')}}</b>
                                            {{lang('(Optional)')}}
                                        </p>
                                        <p class="my-6">{{lang('Include any rules about what your guests can and cannot
                                            do in
                                            the
                                            event.')}}</p>
                                        <textarea class="form-control" name="talent_rules" rows="6"></textarea>
                                        <p class="mb-3"><b>{{lang('Example rules:')}}</b></p>
                                        <li>{{lang('No smoking in the building')}}</li>
                                        <li>{{lang('Outside catering is allowed')}}</li>
                                        <li>{{lang('No alcohol allowed after 8pm')}}</li>
                                        <hr class="bg-dark">
                                    </div> --}}
                                    <div class="mt-7">
                                        <p class="display-8 p_display-sz"><b>{{lang('Who’s allowed to watch your
                                                entertainment /
                                                talent?')}}</b>
                                        </p>
                                        <p class="mt-5">{{lang('Typically, only venues that serve alcohol have age
                                            requirements.')}}
                                        </p>
                                        <select class="form-control select2" required name="age[]"
                                            data-placeholder="Choose Age" multiple>
                                            @foreach ($ages as $age)
                                            @if(@$entertainment->age)
                                            @php
                                            $selected = false;
                                            foreach (json_decode($entertainment->age) as $value) {
                                            if (str_contains($value, $age->name)) {
                                            $selected = true;
                                            break;
                                            }
                                            }
                                            @endphp
                                            <option value="{{ $age->name }}" {{ $selected ? 'selected="selected"' : ''
                                                }}>
                                                {{ lang("Age ") }} {{ $age->name }}
                                            </option>
                                            @else
                                            <option value="{{ $age->name }}">
                                                {{ lang("Age ") }} {{ $age->name }}
                                            </option>
                                            @endif
                                            @endforeach
                                        </select>
                                        <hr class="bg-dark">
                                    </div>
                                    <div class="mt-7">
                                        <p class="display-8 p_display-sz"><b>{{lang('Provide arrival instructions')}}
                                            </b>
                                            {{lang('(Optional)')}}</p>
                                        <p class="my-5">{{lang('Help your guests and their attendees find and enter your
                                            event.')}}
                                        </p>
                                        <h4 class="p_display-sz"><b>{{lang('Try to include:')}}</b></h4>
                                        <li class="mb-5">{{lang('Directions to your space, building access, door
                                            buzzers,
                                            floors,
                                            stairs/elevator access etc.')}}</li>
                                        <textarea name="arrival" id="" cols="30" rows="5" class="w-100 form-control p-5"
                                            placeholder="Add description"
                                            placeholder="Enter Arrival Instructions">{{ @$entertainment->arrival }}</textarea>
                                        <p><i class="fa fa-lock"></i>&nbsp; {{lang("Don't worry, we'll only share this
                                            with
                                            guests
                                            after you have accepted their booking.")}}</p>
                                    </div>
                                    <hr class="bg-dark border-3">
                                </div>
                                <div class="float-end">
                                    <a class="btn btn-light"
                                        href="{{ route('load_entertainment_form_1', $id) }}">{{lang('Previous')}}</a>
                                    <button class="btn btn-primary">{{lang('Next')}}</button>
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
