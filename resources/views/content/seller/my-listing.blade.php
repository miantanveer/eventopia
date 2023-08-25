@extends('layouts.seller-web-layout')

@section('styles')
    <style>
        .seller-web-sidebar {
            z-index: 9999;
        }

        .pagination {
            justify-content: end;
            margin-right: 13px;
            margin-bottom: 10px;
        }

        @media(min-width:0px) and (max-width:991px) {
            .image_lg {
                border-radius: 7px !important;
            }
        }

        .customize_img {
            max-width: 100px !important;
        }
    </style>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-10 col-12 mt-5 ">
            <div class="card border overflow-hidden">
                <div class="card-header pb-0 border-bottom-0">
                    <div class="row w-100 align-items-center">
                        <div class="col-6 ps-0">
                            <h3 class="number-font mb-0">Listings</h3>
                        </div>
                        <div class="col-6 pe-0">
                            <div class="text-end">
                                <button type="button" class="btn btn-primary">Add a space</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @dd($service[0]->serviceImages,$entertainment[0]->entertainmentActivities) --}}
                <div class="card-body p-0 mt-5">
                    <div class="col-12 px-0 px-sm-2">
                        <div class="card border">
                            <div class="row">
                                <div class="col-12 p-2">
                                    <div class="card shadow-sm border">
                                        <div class="card-body p-0">
                                            <div class="row">
                                                <div class="col-12 col-sm-4 col-lg-6">
                                                    <h5 class="card-title mt-3">New Space</h5>
                                                </div>
                                                <div class="col-12 col-sm-4 col-lg-3">
                                                    <div class="progress progress-md mt-3">
                                                        <div class="progress-bar bg-primary" style="width: 25%;"> 25%</div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4 col-lg-3 mt-5 mt-sm-0">
                                                    <div class="text-end">
                                                        <button type="button" class="btn btn-primary">Resume</button>
                                                        <button type="button" class="btn">
                                                            <i class="fa fs-16 fa-trash text-danger"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-2">
                                    <div class="card shadow-sm border">
                                        <div class="card-body p-0">
                                            <div class="row">
                                                <div class="col-12 col-sm-4 col-lg-6">
                                                    <h5 class="card-title mt-3">Gallery</h5>
                                                </div>
                                                <div class="col-12 col-sm-4 col-lg-3">
                                                    <div class="progress progress-md mt-3">
                                                        <div class="progress-bar bg-primary" style="width: 50%;"> 49%</div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4 col-lg-3 mt-5 mt-sm-0">
                                                    <div class="text-end">
                                                        <button type="button" class="btn btn-primary">Resume</button>
                                                        <button type="button" class="btn">
                                                            <i class="fa fs-16 fa-trash text-danger"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col-md-4 pe-3 pe-lg-0">
                                    <img src="{{ asset('assets/images/users/spaces/2.jpg') }}"
                                        class="card-img-left h-100 image_lg" alt="img">
                                </div>
                                <div class="col-md-8 ps-3 ps-md-0 pe-0 pe-lg-2">
                                    <div class="card-body p-0 p-sm-5">
                                        <div class="mx-0 row w-100 align-items-center">
                                            <div class="col-12 pt-4 pb-5 fw-bolder">
                                                <h5 class="card-title">Birthday Event</h5>
                                            </div>
                                            <div class="col-sm-6 col-12 col-lg-8 pe-0">
                                                <p class="card-text">Address, Parking, Arrival instructions, Wi-Fi,
                                                    Cancellations policy, etc.</p>
                                            </div>
                                            <div class="col-sm-6 col-12 col-lg-4 my-auto ps-0 mt-3 mt-sm-0">
                                                <div class="text-end">
                                                    <button type="button" class="btn btn-primary">Edit
                                                        Space</button>
                                                    <div class="btn-group mt-2 mb-2">
                                                        <button type="button" class="btn border rounded-1 p-2"
                                                            data-bs-toggle="dropdown">
                                                            <i class="icon icon-options"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu" style="">
                                                            <li><a href="javascript:void(0)" class="text-danger">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12 p-2">
                                    <div class="card bg-light-gray">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-12">
                                                    <h6><i class="fe fe-alert-circle me-3"></i>Updates Needed</h6>
                                                    <p>You have required updates in order to move forward with your
                                                        submission. Please view the updates needed and resubmit
                                                        the space once requirements are complete.</p>
                                                </div>
                                                <div class="col-lg-3 col-12 text-end align-self-md-center">
                                                    <button type="button" class="btn btn-primary">Updates
                                                        Needed</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="fw-bolder">Customize for different activities</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-2">
                                    <div class="card shadow-sm border">
                                        <div class="card-body p-0 p-sm-5">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-sm-1 col-lg-1 pt-3 ps-5 pt-sm-0 ps-sm-3"><span><img
                                                            class="customize_img"
                                                            src="{{ asset('assets/images/icons/teamicon.png') }}"></span>
                                                    <h6 class="ps-4 d-inline d-sm-none">Meetings</h6>
                                                </div>
                                                <div class="col-12 col-sm-6 col-lg-8 mt-3 mt-sm-0 ps-5 ps-sm-0">
                                                    <h6 class="ps-3 ps-sm-2 ps-lg-0 d-none d-sm-block">Meetings</h6>
                                                    <div class="row ps-0 ps-sm-2 ps-lg-0">
                                                        <div class="col-12">
                                                            <span>From SAR80/hr</span> &nbsp;
                                                            <span><i class="ion ion-record"> </i> Updates Required</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-5 col-lg-3 text-end align-self-md-center">
                                                    <button type="button" class="btn btn-white">Edit</button>
                                                    <button type="button" class="btn ">
                                                        <i class="fa fa-paper-plane-o border rounded-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-2">
                                    <div class="card shadow-sm border">
                                        <div class="card-body p-0 p-sm-5">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-sm-1 col-lg-1 pt-3 ps-5 pt-sm-0 ps-sm-3"><span><i
                                                            class="fa fs-2 fa-camera-retro customize_img"></i></span>
                                                    <h6 class="ps-4 d-inline d-sm-none">Media productions</h6>
                                                </div>
                                                <div class="col-12 col-sm-6 col-lg-8 mt-3 mt-sm-0 ps-5 ps-sm-0">
                                                    <h6 class="ps-3 ps-sm-2 ps-lg-0 d-none d-sm-block">Media productions
                                                    </h6>
                                                    <div class="row ps-0 ps-sm-2 ps-lg-0">
                                                        <div class="col-12">
                                                            <p>Video shoots, photo shoots, audio recording, etc</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-5 col-lg-3 text-end align-self-md-center">
                                                    <button type="button" class="btn btn-white">Enable</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-2">
                                    <div class="card shadow-sm border">
                                        <div class="card-body p-0 p-sm-5">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-sm-1 col-lg-1 pt-3 ps-5 pt-sm-0 ps-sm-3"><span><img
                                                            class="customize_img"
                                                            src="{{ asset('assets/images/icons/events.png') }}"
                                                            alt=""></span>
                                                    <h6 class="ps-4 d-inline d-sm-none">Events</h6>
                                                </div>
                                                <div class="col-12 col-sm-6 col-lg-8 mt-3 mt-sm-0 ps-5 ps-sm-0">
                                                    <h6 class="ps-3 ps-sm-2 ps-lg-0 d-none d-sm-block">Events</h6>
                                                    <div class="row ps-0 ps-sm-2 ps-lg-0">
                                                        <div class="col-12">
                                                            <p>Birthday parties, baby showers, holiday parties, etc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-5 col-lg-3 text-end align-self-md-center">
                                                    <button type="button" class="btn btn-white">Enable</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($service_remaining as $key => $data)
                        @php
                            $progress = 0;
                            switch ($data->last_steps) {
                                case 'step-1':
                                    $progress = 10;
                                    break;
                                case 'step-2':
                                    $progress = 25;
                                    break;
                                case 'step-3':
                                    $progress = 45;
                                    break;
                                case 'step-4':
                                    $progress = 65;
                                    break;
                                case 'step-5':
                                    $progress = 75;
                                    break;
                                case 'step-6':
                                    $progress = 85;
                                    break;
                                // Add more cases as needed
                            }

                        @endphp
                        <div class="col-12">
                            <div class="card border">
                                <div class="col-12 p-2">
                                    <div class="card shadow-sm border">
                                        <div class="card-body p-0">
                                            <div class="row">
                                                <div class="col-12 col-sm-4 col-lg-6">
                                                    <h5 class="card-title mt-3 d-inline">New Space:</h5>
                                                    <p class="d-inline mt-3" style="font-weight: 100; margin-left: 5px">
                                                        {{ $data->title }}</p>
                                                </div>
                                                <div class="col-12 col-sm-4 col-lg-3">
                                                    <div class="progress progress-md mt-3">
                                                        <div class="progress-bar bg-primary"
                                                            style="width: {{ $progress }}%;"> {{ $progress }}%
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4 col-lg-3 mt-5 mt-sm-0">
                                                    <div class="text-end">
                                                        <a href="{{ route('service_form_resume',$data->id) }}" class="btn btn-primary">Resume</a>
                                                        <a class="modal-effect btn" data-bs-effect="effect-scale"
                                                            onclick="deleteModal('{{ route('service-delete', $data->id) }}')">
                                                            <i class="fa fs-16 fa-trash text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($service as $key => $data)
                        <div class="col-12">
                            <div class="card border">

                                <div class="row g-0">
                                    <div class="col-md-4 pe-3 pe-lg-0">
                                        <img src="{{ asset('/uploads/seller/service/' . $data->serviceImages[0]->image) }}"
                                            class="card-img-left h-100 image_lg" width="200px" alt="img">
                                    </div>
                                    <div class="col-md-8 ps-3 ps-md-0 pe-0 pe-lg-2">
                                        <div class="card-body p-0 p-sm-5">
                                            <div class="mx-0 row w-100 align-items-center">
                                                <div class="col-12 pt-4 pb-5 fw-bolder">
                                                    <h5 class="card-title">{{ $data->title }}</h5>
                                                </div>
                                                <div class="col-sm-6 col-12 col-lg-8 pe-0">
                                                    <p class="card-text">{{ $data->description }}</p>
                                                </div>
                                                <div class="col-sm-6 col-12 col-lg-4 my-auto ps-0 mt-3 mt-sm-0">
                                                    <div class="text-end">
                                                        <a href="{{ route('service-form-1', $data->id) }}"
                                                            class="btn btn-primary">Edit</a>
                                                        <div class="btn-group mt-2 mb-2">
                                                            <button type="button" class="btn border rounded-1 p-2"
                                                                data-bs-toggle="dropdown">
                                                                <i class="icon icon-options"></i>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu" style="">
                                                                <li><a onclick="deleteModal('{{ route('service-delete', $data->id) }}')"
                                                                        class="text-danger">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($data->status == 0)
                                    <div class="row mt-5">
                                        <div class="col-12 p-2">
                                            <div class="card bg-light-gray">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h6><i class="fe fe-alert-circle me-3"></i>We have received
                                                                your
                                                                submission</h6>
                                                            <p>Your submission is currently under review by our host
                                                                onboarding
                                                                team. To avoid any delays in your activation, please review
                                                                our
                                                                requirements to
                                                                go live.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    {!! $service->links() !!}
                    @foreach ($entertainment_remaining as $key => $data)
                        @php
                            $progress = 0;
                            switch ($data->last_steps) {
                                case 'step-1':
                                    $progress = 15;
                                    break;
                                case 'step-2':
                                    $progress = 30;
                                    break;
                                case 'step-3':
                                    $progress = 45;
                                    break;
                                case 'step-4':
                                    $progress = 55;
                                    break;
                                case 'step-5':
                                    $progress = 65;
                                    break;
                                case 'step-6':
                                    $progress = 75;
                                    break;
                                case 'step-7':
                                    $progress = 85;
                                    break;
                                // Add more cases as needed
                            }

                        @endphp
                        <div class="col-12">
                            <div class="card border">
                                <div class="col-12 p-2">
                                    <div class="card shadow-sm border">
                                        <div class="card-body p-0">
                                            <div class="row">
                                                <div class="col-12 col-sm-4 col-lg-6">
                                                    <h5 class="card-title mt-3 d-inline">New Space:</h5>
                                                    <p class="d-inline mt-3" style="font-weight: 100; margin-left: 5px">
                                                        {{ $data->title }}</p>
                                                </div>
                                                <div class="col-12 col-sm-4 col-lg-3">
                                                    <div class="progress progress-md mt-3">
                                                        <div class="progress-bar bg-primary"
                                                            style="width: {{ $progress }}%;"> {{ $progress }}%
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4 col-lg-3 mt-5 mt-sm-0">
                                                    <div class="text-end">
                                                        <a href="{{ route('entertainment-form-resume', $data->id) }}"
                                                            class="btn btn-primary">Resume</a>
                                                        <a class="modal-effect btn" data-bs-effect="effect-scale"
                                                            onclick="deleteModal('{{ route('entertainment-delete', $data->id) }}')">
                                                            <i class="fa fs-16 fa-trash text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($entertainment as $key => $data)
                        <div class="col-12">
                            <div class="card border">
                                <div class="row g-0">
                                    <div class="col-md-4 pe-3 pe-lg-0">
                                        <img src="{{ asset('/uploads/seller/entertainment/' . $data->entertainmentImages[0]->image) }}"
                                            class="card-img-left h-100 image_lg" width="200px" height="auto"
                                            alt="img">
                                    </div>
                                    <div class="col-md-8 ps-3 ps-md-0 pe-0 pe-lg-2">
                                        <div class="card-body p-0 p-sm-5">
                                            <div class="mx-0 row w-100 align-items-center">
                                                <div class="col-12 pt-4 pb-5 fw-bolder">
                                                    <h5 class="card-title">{{ $data->title }}</h5>
                                                </div>
                                                <div class="col-sm-6 col-12 col-lg-8 pe-0">
                                                    <p class="card-text">{{ $data->house_rules }}</p>
                                                </div>
                                                <div class="col-sm-6 col-12 col-lg-4 my-auto ps-0 mt-3 mt-sm-0">
                                                    <div class="text-end">
                                                        <a href="{{ route('load_entertainment_form_1', $data->id) }}"
                                                            class="btn btn-primary">Edit</a>
                                                        <div class="btn-group mt-2 mb-2">
                                                            <button type="button" class="btn border rounded-1 p-2"
                                                                data-bs-toggle="dropdown">
                                                                <i class="icon icon-options"></i>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu" style="">
                                                                <li><a onclick="deleteModal('{{ route('entertainment-delete', $data->id) }}')"
                                                                        class="text-danger">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($data->status == 0)
                                    <div class="row mt-5">
                                        <div class="col-12 p-2">
                                            <div class="card bg-light-gray">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h6><i class="fe fe-alert-circle me-3"></i>We have received
                                                                your
                                                                submission</h6>
                                                            <p>Your submission is currently under review by our host
                                                                onboarding
                                                                team. To avoid any delays in your activation, please review
                                                                our
                                                                requirements to
                                                                go live.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="fw-bolder">Customize for different activities</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-2">
                                        <div class="card shadow-sm border">
                                            <div class="card-body p-0 p-sm-5">
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-sm-1 col-lg-1 pt-3 ps-5 pt-sm-0 ps-sm-3">
                                                        <span><img class="customize_img"
                                                                src="{{ asset('assets/images/icons/teamicon.png') }}"></span>
                                                        <h6 class="ps-4 d-inline d-sm-none">Meetings</h6>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-8 mt-3 mt-sm-0 ps-5 ps-sm-0">
                                                        <h6 class="ps-3 ps-sm-2 ps-lg-0 d-none d-sm-block">Meetings</h6>
                                                        <div class="row ps-0 ps-sm-2 ps-lg-0">
                                                            <div class="col-12">
                                                                <span>From SAR{{@$data->entertainmentActivities[0]->hourly_rate}}/hr</span> &nbsp;
                                                                <span><i class="ion ion-record"> </i> Updates
                                                                    Required</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if (@$data->entertainmentActivities[0]->type == 'musical')
                                                        <div
                                                            class="col-12 col-sm-5 col-lg-3 text-end align-self-md-center">
                                                            <a href="{{route('load_entertainment_form_step_6',['id'=>$data->id,'key'=>rand(0000,9999)])}}" class="btn btn-white">Edit</a>
                                                        </div>
                                                    @else
                                                        <div
                                                            class="col-12 col-sm-5 col-lg-3 text-end align-self-md-center">
                                                            <a href="{{route('load_entertainment_form_step_6',['id'=>$data->id,'key'=>rand(0000,9999)])}}" class="btn btn-white">Enable</a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-2">
                                        <div class="card shadow-sm border">
                                            <div class="card-body p-0 p-sm-5">
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-sm-1 col-lg-1 pt-3 ps-5 pt-sm-0 ps-sm-3">
                                                        <span><i class="fa fs-2 fa-camera-retro customize_img"></i></span>
                                                        <h6 class="ps-4 d-inline d-sm-none">Media productions</h6>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-8 mt-3 mt-sm-0 ps-5 ps-sm-0">
                                                        <h6 class="ps-3 ps-sm-2 ps-lg-0 d-none d-sm-block">Media
                                                            productions
                                                        </h6>
                                                        <div class="row ps-0 ps-sm-2 ps-lg-0">
                                                            <div class="col-12">
                                                                <p>Video shoots, photo shoots, audio recording, etc</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if (@$data->entertainmentActivities[1]->type == 'entertainers')
                                                    <div
                                                        class="col-12 col-sm-5 col-lg-3 text-end align-self-md-center">
                                                        <a href="{{route('load_entertainment_form_step_6',['id'=>$data->id,'key'=>rand(0000,9999)])}}" class="btn btn-white">Edit</a>
                                                    </div>
                                                @else
                                                    <div
                                                        class="col-12 col-sm-5 col-lg-3 text-end align-self-md-center">
                                                        <a href="{{route('load_entertainment_form_step_6',['id'=>$data->id,'key'=>rand(0000,9999)])}}" class="btn btn-white">Enable</a>
                                                    </div>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-2">
                                        <div class="card shadow-sm border">
                                            <div class="card-body p-0 p-sm-5">
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-sm-1 col-lg-1 pt-3 ps-5 pt-sm-0 ps-sm-3">
                                                        <span><img class="customize_img"
                                                                src="{{ asset('assets/images/icons/events.png') }}"
                                                                alt=""></span>
                                                        <h6 class="ps-4 d-inline d-sm-none">Events</h6>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-8 mt-3 mt-sm-0 ps-5 ps-sm-0">
                                                        <h6 class="ps-3 ps-sm-2 ps-lg-0 d-none d-sm-block">Events</h6>
                                                        <div class="row ps-0 ps-sm-2 ps-lg-0">
                                                            <div class="col-12">
                                                                <p>Birthday parties, baby showers, holiday parties, etc.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if (@$data->entertainmentActivities[2]->type == 'event')
                                                    <div
                                                        class="col-12 col-sm-5 col-lg-3 text-end align-self-md-center">
                                                        <a href="{{route('load_entertainment_form_step_6',['id'=>$data->id,'key'=>rand(0000,9999)])}}" class="btn btn-white">Edit</a>
                                                    </div>
                                                @else
                                                    <div
                                                        class="col-12 col-sm-5 col-lg-3 text-end align-self-md-center">
                                                        <a href="{{route('load_entertainment_form_step_6',['id'=>$data->id,'key'=>rand(0000,9999)])}}" class="btn btn-white">Enable</a>
                                                    </div>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {!! $entertainment->links() !!}
                </div>
            </div>
        </div>
    </div>
    {{-- Delete Modal --}}
    <div class="modal fade" id="delete-modal">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body text-center p-4 pb-5">
                    <button aria-label="Close" class="btn-close position-absolute" data-bs-dismiss="modal"><span
                            aria-hidden="true">&times;</span></button>
                    <i class="icon icon-close fs-70 text-danger lh-1 my-5 d-inline-block"></i>
                    <form action="" id="delete-form" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="listing_id" id="listing_id" value="">
                        <h2 class="text-danger">Warning!</h2>
                        <h4 class="text-danger">Are you sure you want to delete this Listing?</h4>
                        <p class="mg-b-20 mg-x-20">This action is not repeatable.</p>
                        <button class="btn btn-danger pd-x-25">Continue</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script>
        function deleteModal(url) {
            $('#delete-form').attr('action', url);
            $('#delete-modal').modal('show');
        }
    </script>
@endsection
