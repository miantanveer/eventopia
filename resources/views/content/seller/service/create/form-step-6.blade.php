@extends('layouts.seller-web-layout')
@section('css-styles')
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />
@endsection
@section('styles')
<style>
    .seller-web-sidebar {
        z-index: 9999;
    }

    .sw-btn-group-extra {
        display: none;
    }

    .irs-from {
        color: white !important;
    }

    .irs-to {
        color: white !important;
    }
</style>
@endsection

@section('content')
<div class="row mt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div id="step-4" class="">
                    <div class="text-center">
                        <h2 class="fw-bolder">
                            {{lang('Pricing for services')}}
                        </h2>
                    </div>
                    <br>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('service_form_6', $id) }}" method="post" class="mt-4 mb-5 validate">
                        @csrf
                        <input type="hidden" name="service_id" value="{{ $id }}">
                        {{-- <div class="form-group m-0">
                            <div class="custom-controls-stacked">
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" {{ @$service->price == '0-500' ?
                                    'checked' : '' }} name="price"
                                    data-parsley-errors-container="#radio_errors" required
                                    data-parsley-required-message='{{lang('Please select atleast one option')}}'
                                    value="0-500">
                                    <span class="custom-control-label">0 - 500</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" {{ @$service->price == '500-1000' ?
                                    'checked' : '' }} name="price"
                                    data-parsley-errors-container="#radio_errors" value="500-1000">
                                    <span class="custom-control-label">500 - 1000</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="price" {{ @$service->price ==
                                    '1000-5000' ? 'checked' : '' }}
                                    data-parsley-errors-container="#radio_errors" value="1000-5000">
                                    <span class="custom-control-label">1000 - 5000</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="price" {{ @$service->price ==
                                    '5000-10000' ? 'checked' : '' }}
                                    data-parsley-errors-container="#radio_errors" value="5000-10000">
                                    <span class="custom-control-label">5000 - 10000</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="price" {{ @$service->price ==
                                    '20k+' ? 'checked' : '' }}
                                    data-parsley-errors-container="#radio_errors" value="20k+">
                                    <span class="custom-control-label">20k+</span>
                                </label>
                            </div>
                            <div id="radio_errors"></div>
                        </div> --}}
                        @php
                        $value = @$service->price;
                        $parts = explode(';', $value);

                        if (count($parts) === 2) {
                            $min = $parts[0];
                            $max = $parts[1];
                        }
                        @endphp
                        <div class="col-lg-12 mt-4">
                            <input type="text" class="js-range-slider" name="price" value="" data-type="double"
                                data-min="0" data-max="1000000" data-from="{{@$min}}" data-to="{{@$max}}"
                                data-grid="true" />
                        </div>
                        <hr class="border-3 bg-dark">
                        <div class="float-end mt-8">
                            <a class="btn btn-light" href="{{ route('service-form-5', $id) }}">{{lang('Previous')}}</a>
                            <button class="btn btn-primary">{{lang('Next')}}</button>
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

{{-- Range Slider --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>

<script>
    $(document).ready(function() {
        $('.validate').parsley();

        $(".js-range-slider").ionRangeSlider({
            type: "double",
            skin: "round",
            min: 0,
            max: 10000,
            from: 0,
            to: 5000,
            step: 10,
            grid: true,
            prefix: "SAR ",
            prettify_enabled: true,
            prettify_separator: ",",
            decorate_both: true
        });

    });


</script>
@endsection
