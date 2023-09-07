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
                        <div id="step-4" class="mb-5">
                            <form action="{{route('entertainment_form_5',$id)}}" method="post">
                                @csrf
                                <div class="container">
                                    <div class="text-center mb-6">
                                        <h3 class="mt-3 mt-1"><b>{{lang('What are your operating hours?')}}</b>
                                        </h3>
                                        <p class="">{{lang('Operating hours are the days and hours of the week that your
                                            space
                                            is
                                            open to host bookings (i.e. your general availability). Guests will not be
                                            able
                                            to book times outside of your operating hours. Learn More.')}}</p>
                                    </div>
                                    <p class="mb-3"><b>{{lang('Comedy event - 23408 Bernier Cliff Suite 526')}}</b></p>
                                    <div class="bg-gray px-4 py-3">
                                        <p class="text-white m-0"><i class="fa fa-info-circle me-md-5"></i> {{lang('Operating
                                            hours
                                            end times are restricted to 12
                                            AM for this space type. Read our Social Events Policy for more information.')}}
                                        </p>
                                    </div>
                                    @include('layouts.components.setHoursHTMLCode')
                                    <hr class="bg-dark border-3">
                                </div>
                                <div class="float-end">
                                    <a class="btn btn-light"
                                        href="{{ route('load_entertainment_form_4', $id) }}">{{lang('Previous')}}</a>
                                    <button class="btn btn-primary">{{lang('Next')}}</button>
                                </div>
                            </form>
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
        <!-- Jquery/buttons JS-->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.js') }}"></script>

        @include('layouts.components.setHoursScript')

        <script>
           function startTime() {
                var selectedValue = $('.start-time-select').val();
                var startSelect1 = $('.start-time-select1');
                var startSelectOptions = $('.start-time-select .option');
                var selectedFound = false;

                startSelect1.empty(); // Clear existing options

                startSelectOptions.each(function() {
                    var optionValue = $(this).val();
                    // alert(optionValue);

                    if (!selectedFound && optionValue === selectedValue) {
                        selectedFound = true;
                    }

                    if (selectedFound) {
                        if(optionValue == selectedValue){
                            startSelect1.append('<option value="' + optionValue + '" class="option" disabled>' + optionValue + '</option>');
                        }else{
                            startSelect1.append('<option value="' + optionValue + '" class="option">' + optionValue + '</option>');
                        }
                    }
                });
            };

        </script>

        {{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const startTimeSelect = document.getElementById("start-time-select");

        startTimeSelect.addEventListener("change", function() {
            const selectedIndex = this.selectedIndex;
            console.log(selectedIndex);

            for (let i = 0; i < selectedIndex; i++) {
                this.options[i].disabled = true;
            }
        });
    });
</script> --}}
    @endsection
