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
                            <div class="row bg-light-gray mt-5">
                                <div class="col-8 p-2">
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
                    <div class="col-12">
                        <div class="card border">
                            <div class="row g-0">
                                <div class="col-md-4 pe-3 pe-md-0">
                                    <img src="{{ asset('assets/images/users/spaces/9.jpg') }}" class="card-img-left h-100"
                                        alt="img">
                                </div>
                                <div class="col-md-8 ps-3 ps-md-0">
                                    <div class="card-body">
                                        <div class="row w-100">
                                            <div class="col-8">
                                                <h5 class="card-title">Wedding Event</h5>
                                                <p class="card-text">July 12 - July 14</p>
                                                <p class="card-text">From SAR40/hour</p>
                                                <p class="card-text">Previous</p>
                                            </div>
                                            <div class="col-4 my-auto">
                                                <div class="text-end">
                                                    <button type="button" class="btn btn-primary">View
                                                        Details</button>
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
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card border">
                            <div class="row g-0">
                                <div class="col-md-4 pe-3 pe-md-0">
                                    <img src="{{ asset('assets/images/users/spaces/6.jpg') }}" class="card-img-left h-100"
                                        alt="img">
                                </div>
                                <div class="col-md-8 ps-3 ps-md-0">
                                    <div class="card-body">
                                        <div class="row w-100">
                                            <div class="col-8">
                                                <h5 class="card-title">Party</h5>
                                                <p class="card-text">July 10 - July 11</p>
                                                <p class="card-text">From SAR40/hour</p>
                                                <p class="card-text text-danger">Cancelled</p>
                                            </div>
                                            <div class="col-4 my-auto">
                                                <div class="text-end">
                                                    <button type="button" class="btn btn-primary">View
                                                        Details</button>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
