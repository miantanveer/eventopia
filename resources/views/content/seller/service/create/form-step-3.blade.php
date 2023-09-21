@extends('layouts.seller-web-layout')

@section('styles')
    <style>
        .seller-web-sidebar {
            z-index: 9999;
        }

        .sw-btn-group-extra {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="smartwizard-3">
                        {{-- <ul class="justify-content-around">
                            <li><a href="#step-1">About Service</a></li>
                            <li><a href="#step-2">Photos</a></li>
                            <li><a href="#step-3">Detail</a></li>
                            <li><a href="#step-4">Pricing</a></li>
                            <li><a href="#step-5">Team</a></li>
                        </ul> --}}
                        <div id="step-3">
                            <div class="text-center">
                                <h2 class="fw-bolder">
                                    {{lang('Detail')}}
                                </h2>
                                <p>{{lang('Create a title that will grab a guest’s interest and describes your entertainment &
                                    talent. Do not include your business’s name.')}}</p>
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
                            <form action='{{ route('service_form_3',$id) }}' method="post"  class="mt-4 mb-5 validate">
                                @csrf
                                <div class="form-group mt-3">
                                    <h3 class="fw-bolder">{{lang('Events Production')}}</h3>
                                    <input type="text" name="destination" value="{{@$service->destination}}" required 
                                    placeholder="{{lang('Events Production')}}" class="form-control">
                                </div>
                                <hr class="border-3 bg-dark">
                                <div class="form-group mt-3">
                                    <h3 class="fw-bolder">{{lang('Artists and Music Management')}}</h3>
                                    <textarea name="planning" cols="30" required rows="5" class="w-100 form-control"
                                        placeholder="{{lang('Artists and Music Management')}}">{{@$service->planing}}</textarea>
                                </div>
                                <hr class="border-3 bg-dark">
                                <div class="form-group mt-3">
                                    <h3 class="fw-bolder">{{lang('Talents Management and Entertainment')}}</h3>
                                    <textarea name="activities" required cols="30" rows="5" class="w-100 form-control"
                                        placeholder="{{lang('Talents Management and Entertainment')}}">{{@$service->activities}}</textarea>
                                </div>
                                <hr class="border-3 bg-dark">
                                <div class="form-group mt-3">
                                    <h3 class="fw-bolder">{{lang('Site Development')}}</h3>
                                    <textarea name="development" required cols="30" rows="5" class="w-100 form-control"
                                        placeholder="{{lang('Site Development')}}">{{@$service->activities}}</textarea>
                                </div>
                                <hr class="border-3 bg-dark">
                                <div class="form-group mt-3">
                                    <h3 class="fw-bolder">{{lang('Brand Building and Concept Creaion')}}</h3>
                                    <textarea name="concept_building" required cols="30" rows="5" class="w-100 form-control"
                                        placeholder="{{lang('Brand Building and Concept Creaion')}}">{{@$service->activities}}</textarea>
                                </div>
                                <hr class="border-3 bg-dark">
                                <div class="form-group mt-3">
                                    <h3 class="fw-bolder">{{lang('Planning and Business Development')}}</h3>
                                    <textarea name="planning_developement" required cols="30" rows="5" class="w-100 form-control"
                                        placeholder="{{lang('Planning and Business Development')}}">{{@$service->activities}}</textarea>
                                </div>
                                <br>
                                <hr class="border-3 bg-dark">
                                <div class="float-end mt-8">
                                    <a class="btn btn-light" href="{{route('service-form-2',$id)}}">{{lang('Previou')}}s</a>
                                    <button class="btn btn-primary">{{lang('Next')}}</button>
                                </div>
                            </form>
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
    <script>
        $(document).ready(function() {
            $('.validate').parsley();
        })
    </script>
@endsection
