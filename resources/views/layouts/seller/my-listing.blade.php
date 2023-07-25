@extends('layouts.seller-web-layout')

@section('styles')
    <style>
        .seller-web-sidebar {
            z-index: 9999;
        }
    </style>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-10 mt-5 ">
            <div class="card border overflow-hidden">
                <div class="card-header pb-0 border-bottom-0">
                    <div class="row w-100">
                        <div class="col-6">
                            <h3 class="number-font">Listings</h3>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <button type="button" class="btn btn-primary">Add a space</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 mt-5">
                    <div class="col-12">
                        <div class="card border">
                            <div class="row g-0">
                                <div class="col-md-4 pe-3 pe-md-0">
                                    <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-left h-100"
                                        alt="img">
                                </div>
                                <div class="col-md-8 ps-3 ps-md-0">
                                    <div class="card-body">
                                        <div class="row w-100">
                                            <div class="col-8">
                                                <h5 class="card-title">Birthday Event</h5>
                                                <p class="card-text">Address, Parking, Arrival instructions, Wi-Fi, Cancellations policy, etc.</p>
                                            </div>
                                            <div class="col-4 my-auto">
                                                <div class="text-end">
                                                    <button type="button" class="btn btn-primary">Edit
                                                        Space</button>
                                                    <button type="button" class="btn">
                                                        <i class="icon icon-options" data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="icon-options"
                                                            aria-label="icon-options"></i>
                                                    </button>
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
                                                <div class="col-9">
                                                    <h6><i class="fe fe-alert-circle me-3"></i>Updates Needed</h6>
                                                    <p>You have required updates in order to move forward with your submission. Please view the updates needed and resubmit
                                                        the space once requirements are complete.</p>
                                                </div>
                                                <div class="col-3 text-end align-self-md-center">
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-1 align-self-md-center"><span><img src="{{asset('assets/images/icons/teamicon.png')}}"></span></div>
                                                <div class="col-8">
                                                    <h6>Meetings</h6>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span>From SAR80/hr</span> &nbsp;
                                                            <span><i class="ion ion-record"> </i> Updates Required</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 text-end align-self-md-center">
                                                    <button type="button" class="btn btn-white">Edit</button>
                                                    <button type="button" class="btn">
                                                        <i class="fa fa-paper-plane-o border"></i>
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-1 align-self-md-center"><span><i class="fa fs-2 fa-camera-retro"></i></span></div>
                                                <div class="col-8">
                                                    <h6>Media productions</h6>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p>Video shoots, photo shoots, audio recording, etc</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 text-end align-self-md-center">
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-1 align-self-md-center"><span><img src="{{asset('assets/images/icons/events.png')}}" alt=""></span></div>
                                                <div class="col-8">
                                                    <h6>Events</h6>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p>Birthday parties, baby showers, holiday parties, etc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 text-end align-self-md-center">
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
                                <div class="col-md-4 pe-3 pe-md-0">
                                    <img src="{{ asset('assets/images/users/spaces/8.jpg') }}" class="card-img-left h-100"
                                        alt="img">
                                </div>
                                <div class="col-md-8 ps-3 ps-md-0">
                                    <div class="card-body">
                                        <div class="row w-100">
                                            <div class="col-8">
                                                <h5 class="card-title">Hall</h5>
                                                <p class="card-text">Address, Parking, Arrival instructions, Wi-Fi, Cancellations policy, etc.</p>
                                            </div>
                                            <div class="col-4 my-auto">
                                                <div class="text-end">
                                                    <button type="button" class="btn btn-primary">Edit
                                                        Space</button>
                                                    <button type="button" class="btn">
                                                        <i class="icon icon-options" data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="icon-options"
                                                            aria-label="icon-options"></i>
                                                    </button>
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
                                                    <h6><i class="fe fe-alert-circle me-3"></i>We have received your submission</h6>
                                                    <p>Your submission is currently under review by our host onboarding team. To avoid any delays in your activation, please review our requirements to
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-1 align-self-md-center"><span><img src="{{asset('assets/images/icons/teamicon.png')}}"></span></div>
                                                <div class="col-8">
                                                    <h6>Meetings</h6>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span>From SAR80/hr</span> &nbsp;
                                                            <span class="text-primary"><i class="ion ion-record"> </i>Pending Review</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 text-end align-self-md-center">
                                                    <button type="button" class="btn btn-white">Edit</button>
                                                    <button type="button" class="btn">
                                                        <i class="fa fa-paper-plane-o border"></i>
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-1 align-self-md-center"><span><i class="fa fs-2 fa-camera-retro"></i></span></div>
                                                <div class="col-8">
                                                    <h6>Media productions</h6>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p>Video shoots, photo shoots, audio recording, etc</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 text-end align-self-md-center">
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-1 align-self-md-center"><span><img src="{{asset('assets/images/icons/events.png')}}" alt=""></span></div>
                                                <div class="col-8">
                                                    <h6>Events</h6>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p>Birthday parties, baby showers, holiday parties, etc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 text-end align-self-md-center">
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
                                <div class="col-md-4 pe-3 pe-md-0">
                                    <img src="{{ asset('assets/images/users/spaces/4.jpg') }}" class="card-img-left h-100"
                                        alt="img">
                                </div>
                                <div class="col-md-8 ps-3 ps-md-0">
                                    <div class="card-body">
                                        <div class="row w-100">
                                            <div class="col-8">
                                                <h5 class="card-title">Mall</h5>
                                                <p class="card-text">Address, Parking, Arrival instructions, Wi-Fi, Cancellations policy, etc.</p>
                                            </div>
                                            <div class="col-4 my-auto">
                                                <div class="text-end">
                                                    <button type="button" class="btn btn-primary">Edit
                                                        Space</button>
                                                    <button type="button" class="btn">
                                                        <i class="icon icon-options" data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="icon-options"
                                                            aria-label="icon-options"></i>
                                                    </button>
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
                                                    <h6><i class="fe fe-alert-circle me-3"></i>We have received your submission</h6>
                                                    <p>Your submission is currently under review by our host onboarding team. To avoid any delays in your activation, please review our requirements to
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-1 align-self-md-center"><span><img src="{{asset('assets/images/icons/teamicon.png')}}"></span></div>
                                                <div class="col-8">
                                                    <h6>Meetings</h6>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span>From SAR80/hr</span> &nbsp;
                                                            <span class="text-primary"><i class="ion ion-record"> </i>&nbsp; Pending Review</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 text-end align-self-md-center">
                                                    <button type="button" class="btn btn-white">Edit</button>
                                                    <button type="button" class="btn">
                                                        <i class="fa fa-paper-plane-o border"></i>
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-1 align-self-md-center"><span><i class="fa fs-2 fa-camera-retro"></i></span></div>
                                                <div class="col-8">
                                                    <h6>Media productions</h6>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p>Video shoots, photo shoots, audio recording, etc</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 text-end align-self-md-center">
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-1 align-self-md-center"><span><img src="{{asset('assets/images/icons/events.png')}}" alt=""></span></div>
                                                <div class="col-8">
                                                    <h6>Events</h6>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span>From SAR80/hr</span> &nbsp;
                                                            <span class="text-primary"><i class="ion ion-record"> </i>&nbsp; Pending Review</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 text-end align-self-md-center">
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
