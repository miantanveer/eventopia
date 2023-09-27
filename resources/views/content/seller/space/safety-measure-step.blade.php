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

    @media(min-width:0px) and (max-width:500px) {
.h3-ser-sz{
    font-size: 130% !important;
}
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
                        <div id="step-6" class="">
                            <form class="validation" method="POST"
                                action="{{ route('add-safety-measure', $space->id) }}">
                                @csrf
                                <div style="text-align:center;">
                                    <h2>{{lang('Step 6 of 9')}}</h2>
                                    <h2><strong>{{lang('Enhanced Health and Safety Measures')}}</strong></h2>
                                    <p>{{lang('Fill out the form to add your cleaning protocol and additional health and
                                        safety
                                        measures to your listing page.')}}</p>
                                </div>
                                <h4><img src="{{ asset('assets/images/users/spaces/Group 8022.png') }}" alt="img">
                                    <b>{{lang('Enhanced Health and Safety Measures')}}</b>
                                </h4>
                                <p>{{lang('Select at least 1 from each category below to earn the Enhanced Health and
                                    Safety Measures badge. This badge will be displayed on your listings.')}}</p>
                                <br>
                                <hr class="style1"><br>
                                <h3 class="h3-ser-sz">{{lang('What additional measures are you taking to keep your space clean?')}}</h3>
                                <p style="color:#858585;"><strong>{{lang('Select all that apply')}}</strong></p>
                                @php
                                $selectedSafetyMeasureIds = [];

                                foreach ($space->spaceHaveMeasures as $selectedSafetyMeasure) {
                                $selectedSafetyMeasureIds[] = $selectedSafetyMeasure->safety_measure_id;
                                }
                                @endphp
                                @php
                                $counter = 0; // Initialize the counter
                                @endphp
                                @for ($section = 1; $section <= 4; $section++) <div class="row">
                                    <div style="color:#434343;" class="span12 pagination-centered">
                                        @for ($i = 0; $i < ($section==1 || $section==3 ? 5 : 4); $i++) <div
                                            class="checkbox">
                                            <label>
                                                <input name="safety_measure[]" required
                                                    data-parsley-errors-container="#sf_error" class="safety_measure"
                                                    type="checkbox" value="{{ $safety_measures[$counter]->id }}" {{
                                                    in_array($safety_measures[$counter]->id, $selectedSafetyMeasureIds)
                                                ? 'checked' : '' }}>
                                                <span style="color:#434343"><b>{{
                                                        lang($safety_measures[$counter]->safety_measure_options)
                                                        }}</b></span>
                                            </label>
                                    </div>
                                    @php
                                    $counter++; // Increment the counter
                                    @endphp
                                    @endfor
                        </div>
                    </div>
                    @if ($section == 1)
                    <h3 class="mt-4 h3-ser-sz">{{lang('What additional protective gear do you provide to your
                        guests?')}}
                    </h3>
                    <p style="color:#858585;"><strong>{{lang('Select all that apply')}}</strong></p>
                    @elseif ($section == 2)
                    <h3 class="mt-4 h3-ser-sz">{{lang('What have you done to help guests maintain physical distance
                        in
                        your
                        space?')}}</h3>
                    <p style="color:#858585;"><strong>{{lang('Select all that apply')}}</strong></p>
                    @elseif ($section == 3)
                    <h3 class="mt-4 h3-ser-sz">{{lang('What signage have you added to keep your guests informed?')}}
                    </h3>
                    <p style="color:#858585;"><strong>{{lang('Select all that apply')}}</strong></p>
                    @endif
                    @endfor
                    <div id="sf_error"></div>
                    <h4 class="mt-5">{{lang('Tell your guests more about your cleaning process')}}</h4>
                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                    <textarea style="height:150px;" required name="cleaning_process"
                        class="form-control rounded-0" id=""
                        rows="3">{{ lang(@$space->cleaning_process) ?? '' }}</textarea>
                    <input type="hidden" name="last_step" value="6">
                    <hr class="border-3 bg-dark">
                    <div class="float-end">
                        <a class="btn btn-light"
                            href="{{ route('operating-hour-step', $space->id) }}">{{lang('Previous')}}</a>
                        <button class="btn btn-primary">{{lang('Next')}}</button>
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
    $(document).ready(function() {
            $('.validation').parsley();
        });
</script>
@endsection
