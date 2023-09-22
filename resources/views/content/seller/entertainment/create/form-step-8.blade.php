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
                    {{-- <ul class="justify-content-around">
                        <li><a href="#step-1">Step 1</a></li>
                        <li><a href="#step-2">Step 2</a></li>
                        <li><a href="#step-3">Step 3</a></li>
                        <li><a href="#step-4">Step 4</a></li>
                        <li><a href="#step-5">Step 5</a></li>
                        <li><a href="#step-6">Step 6</a></li>
                        <li><a href="#step-7">Step 7</a></li>
                        <li><a href="#step-8">Step 8</a></li>
                    </ul> --}}
                    <div
                        <div id="step-7" class="mb-5">
                            <form action="{{route('entertainment_form_8',$id)}}" method="post" enctype="multipart/form-data" class="validation">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4 col-12 d-block d-lg-none">
                                        <div class="text-center chat-image mb-5">
                                            <input type="file" name='image' value="{{@$entertainment->image}}" class="dropify" />
                                        </div>
                                        <div class="text-center">
                                            <p class="text-muted">{{lang('Choose a friendly, accurate photo to help instill a
                                                sense of trust and verification in your listing')}}</p>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <ul>
                                                    <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-4" alt=""> {{lang('No photos of the space')}}</li>
                                                    <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-4" alt="">{{lang(' No business logos')}}</li>
                                                    <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-4" alt=""> {{lang('No group photos')}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-12">
                                        <div class="mb-lg-5 mb-3">
                                            <h2 class="mb-1"><b class="h-3">{{lang('Who will guests be contacting?')}}</b>
                                            </h2>
                                            <b>{{lang('Please do not use a business name, so it’s more personal for your guests.')}}</b>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <input type="text" value="{{@$entertainment->contact_first_name}}" name="contact_first_name" class="form-control" id="exampleInputname" placeholder="{{lang('john')}}" required data-parsley-required-message="{{lang('Password is required*')}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="exampleInputname1" placeholder="{{lang('Smith')}}" value="{{@$entertainment->contact_last_name}}" name="contact_last_name" required data-parsley-required-message="{{lang('Confirm Password is required*')}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" id="exampleInputphone1" placeholder="(123) 345 -4567" value="{{@$entertainment->contact_num}}" name="contact_num" required data-parsley-required-message="{{lang('Phone Number is required*')}}">
                                        </div>
                                        <div class="bg-light-gray p-3 mb-3">
                                            <p class="ms-3 m-0"><i class="fa fa-info-circle me-4"></i>{{lang('Your number needs to be verified')}}</p>
                                        </div>
                                        <p class="mb-5">{{lang('We won’t share your number publicly. Guests will only see it
                                            after they book to coordinate with you.')}}</p>
                                        <hr class="bg-dark my-6">
                                    </div>
                                    <div class="col-lg-4 col-12 d-none d-lg-block">
                                        <div class="text-center chat-image mb-5">
                                            <input type="file" name='image' value="{{@$entertainment->image}}" class="dropify" />
                                        </div>
                                        <div class="text-center px-xl-8">
                                            <p class="text-muted">{{lang('Choose a friendly, accurate photo to help instill a sense of trust and verification in your listing')}}</p>
                                        </div>
                                        <div class="px-xl-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <ul>
                                                        <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-4" alt=""> {{lang('No photos of the
                                                            space')}}</li>
                                                        <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-4" alt="">{{lang(' No business logos')}}
                                                        </li>
                                                        <li><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-4" alt=""> {{lang('No group photos')}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-9 col-12">
                                            <h3><b class="h-3">{{lang('How did you hear about entertainment / talent with Eventopia?')}}</b></h3>
                                            <p>{{lang('Select all that apply to help us find more hosts like you.')}}</p>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="eventopia_hear" type="radio" value="f&C" id="invalidCheck-1" {{@$entertainment->eventopia_hear == 'f&C' ? 'checked' : ''}} required data-parsley-errors-container='#radio_error'>
                                                        <label class="form-check-label" for="invalidCheck-1">{{lang('Friend, family, or colleague')}}</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="eventopia_hear" type="radio" value="N&B" id="invalidCheck-2" {{@$entertainment->eventopia_hear == 'N&B' ? 'checked' : ''}} required>
                                                        <label class="form-check-label" for="invalidCheck-2">{{lang('News or blog article')}}</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="eventopia_hear" type="radio" value="CP" id="invalidCheck-3" {{@$entertainment->eventopia_hear == 'CP' ? 'checked' : ''}} required>
                                                        <label class="form-check-label" for="invalidCheck-3">{{lang('Contacted by Peerspace')}}</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="eventopia_hear" type="radio" value="TV" id="invalidCheck-4" {{@$entertainment->eventopia_hear == 'TV' ? 'checked' : ''}} required>
                                                        <label class="form-check-label" for="invalidCheck-4">{{lang('TV')}}</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="eventopia_hear" type="radio" value="Bill" id="invalidCheck-5" {{@$entertainment->eventopia_hear == 'Bill' ? 'checked' : ''}} required>
                                                        <label class="form-check-label" for="invalidCheck-5">{{lang('Billboard')}}</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="eventopia_hear" type="radio" value="online" id="invalidCheck-7" {{@$entertainment->eventopia_hear == 'online' ? 'checked' : ''}} required>
                                                        <label class="form-check-label" for="invalidCheck-7">{{lang('Online ad')}}</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="eventopia_hear" type="radio" value="SM" id="invalidCheck-8" {{@$entertainment->eventopia_hear == 'SM' ? 'checked' : ''}} required>
                                                        <label class="form-check-label" for="invalidCheck-8">{{lang('Social media')}}</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="eventopia_hear" type="radio" value="RFE" id="invalidCheck-9" {{@$entertainment->eventopia_hear == 'RFE' ? 'checked' : ''}} required>
                                                        <label class="form-check-label" for="invalidCheck-9">{{lang('Referral from a Eventopia host')}}</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="eventopia_hear" type="radio" value="OS" id="invalidCheck-10" {{@$entertainment->eventopia_hear == 'OS' ? 'checked' : ''}} required>
                                                        <label class="form-check-label" for="invalidCheck-10">{{lang('Online search')}}</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="eventopia_hear" type="radio" value="AEE" id="invalidCheck-11" {{@$entertainment->eventopia_hear == 'AEE' ? 'checked' : ''}} required>
                                                        <label class="form-check-label" for="invalidCheck-11">{{lang('Attended an event in a Eventopia')}}</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="eventopia_hear" type="radio" value="Other" id="invalidCheck-12" {{@$entertainment->eventopia_hear == 'Other' ? 'checked' : ''}} required>
                                                        <label class="form-check-label" for="invalidCheck-12">{{lang('Other')}}</label>
                                                    </div>
                                                </div>
                                                <div id='radio_error'></div>
                                                <hr class="bg-dark my-6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-end">
                                    <a class="btn btn-light" href="{{ route('load_entertainment_form_7', $id) }}">{{lang('Previous')}}</a>
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

    <!-- Jquery/buttons JS-->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

    <!-- INTERNAl Upload js -->
    <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.validation').parsley();
        });

    </script>
    @endsection
