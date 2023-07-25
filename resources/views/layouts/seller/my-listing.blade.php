@extends('layouts.seller-web-layout')

@section('styles')
    <style>
        .seller-web-sidebar {
            z-index: 9999;
        }
        @media(min-width:0px) and (max-width:991px){
            .image_lg{
                border-radius: 7px!important;
            }
        }
        .customize_img{
            max-width: 100px!important;
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
                                    <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-left h-100 image_lg"
                                        alt="img">
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
                                                        <button type="button" class="btn border rounded-1 p-2" data-bs-toggle="dropdown">
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
                                                <div class="col-12 col-sm-1 col-lg-1 pt-3 ps-5 pt-sm-0 ps-sm-3"><span><img class="customize_img"
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
                                                    <h6 class="ps-3 ps-sm-2 ps-lg-0 d-none d-sm-block">Media productions</h6>
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
                                                <div class="col-12 col-sm-1 col-lg-1 pt-3 ps-5 pt-sm-0 ps-sm-3"><span><img class="customize_img"
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
                    <div class="col-12">
                        <div class="card border">
                            <div class="row g-0">
                                <div class="col-md-4 pe-3 pe-lg-0">
                                    <img src="{{ asset('assets/images/users/spaces/8.jpg') }}" class="card-img-left h-100 image_lg"
                                        alt="img">
                                </div>
                                <div class="col-md-8 ps-3 ps-md-0 pe-0 pe-lg-2">
                                    <div class="card-body p-0 p-sm-5">
                                        <div class="mx-0 row w-100 align-items-center">
                                            <div class="col-12 pt-4 pb-5 fw-bolder">
                                                <h5 class="card-title">Hall</h5>
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
                                                        <button type="button" class="btn border rounded-1 p-2" data-bs-toggle="dropdown">
                                                            <i class="icon icon-options"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu" style="">
                                                            <li><a href="javascript:void(0)"
                                                                    class="text-danger">Delete</a></li>
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
                                                <div class="col-12">
                                                    <h6><i class="fe fe-alert-circle me-3"></i>We have received your
                                                        submission</h6>
                                                    <p>Your submission is currently under review by our host onboarding
                                                        team. To avoid any delays in your activation, please review our
                                                        requirements to
                                                        go live.</p>
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
                                                <div class="col-12 col-sm-1 col-lg-1 pt-3 ps-5 pt-sm-0 ps-sm-3"><span><img class="customize_img"
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
                                                    <h6 class="ps-3 ps-sm-2 ps-lg-0 d-none d-sm-block">Media productions</h6>
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
                                                <div class="col-12 col-sm-1 col-lg-1 pt-3 ps-5 pt-sm-0 ps-sm-3"><span><img class="customize_img"
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
                    <div class="col-12">
                        <div class="card border">
                            <div class="row g-0">
                                <div class="col-md-4 pe-3 pe-lg-0">
                                    <img src="{{ asset('assets/images/users/spaces/4.jpg') }}" class="card-img-left h-100 image_lg"
                                        alt="img">
                                </div>
                                <div class="col-md-8 ps-3 ps-md-0 pe-0 pe-lg-2">
                                    <div class="card-body p-0 p-sm-5">
                                        <div class="mx-0 row w-100 align-items-center">
                                            <div class="col-12 pt-4 pb-5 fw-bolder">
                                                <h5 class="card-title">Mall</h5>
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
                                                        <button type="button" class="btn border rounded-1 p-2" data-bs-toggle="dropdown">
                                                            <i class="icon icon-options"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu" style="">
                                                            <li><a href="javascript:void(0)"
                                                                    class="text-danger">Delete</a></li>
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
                                                <div class="col-12">
                                                    <h6><i class="fe fe-alert-circle me-3"></i>We have received your
                                                        submission</h6>
                                                    <p>Your submission is currently under review by our host onboarding
                                                        team. To avoid any delays in your activation, please review our
                                                        requirements to
                                                        go live.</p>
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
                                                <div class="col-12 col-sm-1 col-lg-1 pt-3 ps-5 pt-sm-0 ps-sm-3"><span><img class="customize_img"
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
                                                    <h6 class="ps-3 ps-sm-2 ps-lg-0 d-none d-sm-block">Media productions</h6>
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
                                                <div class="col-12 col-sm-1 col-lg-1 pt-3 ps-5 pt-sm-0 ps-sm-3"><span><img class="customize_img"
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
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
