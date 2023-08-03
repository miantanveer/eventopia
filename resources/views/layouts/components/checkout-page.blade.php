@extends('layouts.customer-web-layout')

@section('styles')
    <style>
        .card {
            box-shadow: none !important;
        }

        .owl-item {
            border: 1px solid #e9edf4 !important;
            border-radius: 10px;
        }

        .owl-body {
            padding-left: 5px !important;
            padding-bottom: 0px !important;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-8 col-lg-12 col-md-12 p-0">
            <div class="card custom-card overflow-hidden">
                <div class="card-body m-3" style="box-shadow: 0px 0px 3px 3px rgb(0 0 0 / 8%) !important;">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="checkbox1" id="all_select">
                        <span class="custom-control-label">Select all Spaces</span>
                    </label>
                </div>
            </div>
            <div class="card custom-card overflow-hidden">
                <div class="card-body p-3 m-3" style="box-shadow: 0px 0px 3px 3px rgb(0 0 0 / 8%);">
                    <div class="row g-0 ">
                        <div class="col-1 pe-0 my-auto">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input cards" name="checkbox1" value="option1"
                                    id="first_card">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <div class="col-sm-3 col-11 ps-sm-0 pe-3 pe-md-0 ">
                            <img src="{{ asset('assets/images/users/spaces/5.jpg') }}" class="card-img-left h-100"
                                alt="img">
                        </div>
                        <div class="col-sm-8 ps-6 ps-md-0 mt-6 mt-md-0">
                            <div class="card-body py-0">
                                <div class="row">
                                    <div class="col-sm-10 col-9">
                                        <h5 class="card-title">Great Space for Events</h5>
                                    </div>
                                    <div class="col-sm-2 col-3 text-end">
                                        <i class="fa fa-trash" style="color: red" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="fa fa-trash" aria-label="fa fa-trash"></i>
                                        <i class="fa fa-heart-o ms-2" style="color: blue" data-bs-toggle="tooltip"
                                            title="" data-bs-original-title="fa fa-heart-o"
                                            aria-label="fa fa-heart-o"></i>
                                    </div>
                                </div>
                                <p class="card-text mt-3 mt-md-0">Amount : $65/hour</p>
                                <p class="card-text"><small class="text-muted">Spaces (Available :
                                        12)</small></p>
                                <div class="row">
                                    <div class="col-sm-5 col-7">
                                        <div class="input-group input-indec input-indec1">
                                            <span class="input-group-btn">
                                                <button type="button" class="minus btn btn-white btn-number btn-icon br-7">
                                                    <i class="fa fa-minus text-muted"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quantity" class="form-control text-center qty"
                                                value="1">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="quantity-right-plus btn btn-white btn-number btn-icon br-7 add">
                                                    <i class="fa fa-plus text-muted"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="button" class="btn btn-gray mt-1 mb-1 me-3" disabled>
                                            <span>Total : $55</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3 m-3" style="box-shadow: 0px 0px 3px 3px rgb(0 0 0 / 8%);">
                    <div class="row g-0 ">
                        <div class="col-1 pe-0 my-auto">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input cards" name="checkbox1" value="option1"
                                    id="second_card">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <div class="col-sm-3 col-11 ps-sm-0 pe-3 pe-md-0 ">
                            <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-left h-100"
                                alt="img">
                        </div>
                        <div class="col-sm-8 ps-6 ps-md-0 mt-6 mt-md-0">
                            <div class="card-body py-0">
                                <div class="row">
                                    <div class="col-sm-10 col-9">
                                        <h5 class="card-title">Great Space for Events</h5>
                                    </div>
                                    <div class="col-sm-2 col-3 text-end">
                                        <i class="fa fa-trash" style="color: red" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="fa fa-trash" aria-label="fa fa-trash"></i>
                                        <i class="fa fa-heart-o ms-2" style="color: blue" data-bs-toggle="tooltip"
                                            title="" data-bs-original-title="fa fa-heart-o"
                                            aria-label="fa fa-heart-o"></i>
                                    </div>
                                </div>
                                <p class="card-text mt-3 mt-md-0">Amount : $65/hour</p>
                                <p class="card-text"><small class="text-muted">Spaces (Available :
                                        12)</small></p>
                                <div class="row">
                                    <div class="col-sm-5 col-7">
                                        <div class="input-group input-indec input-indec1">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="minus btn btn-white btn-number btn-icon br-7">
                                                    <i class="fa fa-minus text-muted"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quantity" class="form-control text-center qty"
                                                value="1">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="quantity-right-plus btn btn-white btn-number btn-icon br-7 add">
                                                    <i class="fa fa-plus text-muted"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="button" class="btn btn-gray mt-1 mb-1 me-3" disabled>
                                            <span>Total : $55</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3 m-3" style="box-shadow: 0px 0px 3px 3px rgb(0 0 0 / 8%);">
                    <div class="row g-0 ">
                        <div class="col-1 pe-0 my-auto">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input cards" name="checkbox1" value="option1"
                                    id="third_card">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <div class="col-sm-3 col-11 ps-sm-0 pe-3 pe-md-0 ">
                            <img src="{{ asset('assets/images/users/spaces/3.jpg') }}" class="card-img-left h-100"
                                alt="img">
                        </div>
                        <div class="col-sm-8 ps-6 ps-md-0 mt-6 mt-md-0">
                            <div class="card-body py-0">
                                <div class="row">
                                    <div class="col-sm-10 col-9">
                                        <h5 class="card-title">Great Space for Events</h5>
                                    </div>
                                    <div class="col-sm-2 col-3 text-end">
                                        <i class="fa fa-trash" style="color: red" data-bs-toggle="tooltip"
                                            title="" data-bs-original-title="fa fa-trash"
                                            aria-label="fa fa-trash"></i>
                                        <i class="fa fa-heart-o ms-2" style="color: blue" data-bs-toggle="tooltip"
                                            title="" data-bs-original-title="fa fa-heart-o"
                                            aria-label="fa fa-heart-o"></i>
                                    </div>
                                </div>
                                <p class="card-text  mt-3 mt-md-0">Amount : $65/hour</p>
                                <p class="card-text"><small class="text-muted">Spaces (Available :
                                        12)</small></p>
                                <div class="row">
                                    <div class="col-sm-5 col-7">
                                        <div class="input-group input-indec input-indec1">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="minus btn btn-white btn-number btn-icon br-7">
                                                    <i class="fa fa-minus text-muted"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quantity" class="form-control text-center qty"
                                                value="1">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="quantity-right-plus btn btn-white btn-number btn-icon br-7 add">
                                                    <i class="fa fa-plus text-muted"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="button" class="btn btn-gray mt-1 mb-1 me-3" disabled>
                                            <span>Total : $55</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12">
            <div class="card cart" style="border: 1px solid #cbcaca !important; border-radius: 0 !important;">
                <div class="card-header">
                    <h3 class="card-title">Order Summary</h3>
                </div>
                <div class="card-body py-2">
                    <div class="row">
                        <div class="col-4">
                            <h5 class="mb-3 fw-bold">Space</h5>
                            <div class="">
                                <img class="avatar-xxl br-7" class=""
                                    src="{{ asset('assets/images/users/spaces/3.jpg') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-3 fw-bold">Space Details</h5>
                            <div class="align-middle">
                                <p>Great Space for Events</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-3 fw-bold">Amount</h5>
                            <div class="SAR65">
                                SAR65
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 py-3 border-top">
                        <div class="col-6 float-left">
                            <h6>Sub Total</h6>
                        </div>
                        <div class="col-6 text-end">
                            $568
                        </div>
                    </div>
                    <div class="row mt-3 py-3 border-top">
                        <div class="col-6 float-left">
                            <h6>Vet %</h6>
                        </div>
                        <div class="col-6 text-end">
                            SARO
                        </div>
                    </div>
                    <div class="row mt-3 py-3 border-top">
                        <div class="col-6 float-left">
                            <h6>Admin Fees</h6>
                        </div>
                        <div class="col-6 text-end">
                            $200
                        </div>
                    </div>
                    <div class="row mt-3 py-3 border-top" style="background-color: #E3E3E3">
                        <div class="col-6 float-left">
                            <h6>Total:</h6>
                        </div>
                        <div class="col-6 text-end">
                            $600
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="btn-list">
                        <a href="{{ url('shop') }}" class="btn "></i>Continue Shopping</a>
                        <a href="{{ url('review-pay') }}" class="btn btn-primary float-sm-end"><i
                                class="fa fa-shopping-bag me-1"></i>Place Order</a>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="p-3 mb-5 text-dark">When checking out your space, you may add these Talents or
            Services.</h3>
        <h6 class="p-3 mb-5 text-dark">The spaces you might be looking for?</h6>
        <div class="col-12 px-lg-0 px-6 bg-white">
            <div class="card custom-card">
                <div class="card-body p-0 h-100">
                    <div class="owl-carousel owl-carousel-icons2">
                        <div class="item">
                            <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Stunning Studio Great</h5>
                                            <i class="fa fa-users"></i> 25 &nbsp;
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            &nbsp; 19
                                            <p>Responds within 1 hour</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Stunning Event Venue</h5>
                                            <i class="fa fa-users"></i> 30 &nbsp;
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            &nbsp; 21
                                            <p>Responds within 1 hour</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/3.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Great Space for Events</h5>
                                            <i class="fa fa-users"></i> 32 &nbsp;
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            &nbsp; 21
                                            <p>Responds within 1 hour</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/4.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Great Space for Events</h5>
                                            <i class="fa fa-users"></i> 30 &nbsp;
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            &nbsp; 18
                                            <p>Responds within 1 hour</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/5.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Stunning Studio Great</h5>
                                            <i class="fa fa-users"></i> 25 &nbsp;
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            &nbsp; 19
                                            <p>Responds within 1 hour</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Stunning Event Venue</h5>
                                            <i class="fa fa-users"></i> 30 &nbsp;
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            &nbsp; 21
                                            <p>Responds within 1 hour</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/7.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Great Space for Events</h5>
                                            <i class="fa fa-users"></i> 32 &nbsp;
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            &nbsp; 19
                                            <p>Responds within 1 hour</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="p-3 mb-5 text-dark">Talents & Entertainments you might be looking for?</h3>
        <div class="col-12 px-lg-0 px-6 bg-white">
            <div class="card custom-card">
                <div class="card-body p-0 h-100">
                    <div class="owl-carousel owl-carousel-icons2">
                        <div class="item">
                            <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Stunning Studio Great</h5>
                                            <i class="fa fa-users"></i> 25 &nbsp;
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            &nbsp; 19
                                            <p>Responds within 1 hour</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Stunning Event Venue</h5>
                                            <i class="fa fa-users"></i> 30 &nbsp;
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            &nbsp; 21
                                            <p>Responds within 1 hour</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/3.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Great Space for Events</h5>
                                            <i class="fa fa-users"></i> 32 &nbsp;
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            &nbsp; 21
                                            <p>Responds within 1 hour</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/4.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Great Space for Events</h5>
                                            <i class="fa fa-users"></i> 30 &nbsp;
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            &nbsp; 18
                                            <p>Responds within 1 hour</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/5.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Stunning Studio Great</h5>
                                            <i class="fa fa-users"></i> 25 &nbsp;
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            &nbsp; 19
                                            <p>Responds within 1 hour</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/1.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Stunning Event Venue</h5>
                                            <i class="fa fa-users"></i> 30 &nbsp;
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            &nbsp; 21
                                            <p>Responds within 1 hour</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                <div class="card overflow-hidden my-0">
                                    <a href="{{ URL('/space-details') }}">
                                        <img src="{{ asset('assets/images/users/spaces/7.jpg') }}" class="card-img-top"
                                            alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Great Space for Events</h5>
                                            <i class="fa fa-users"></i> 32 &nbsp;
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            <i class="fa fa-star" style="color: #f1c40f"></i>
                                            &nbsp; 19
                                            <p>Responds within 1 hour</p>
                                        </div>
                                    </a>
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
    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- TIMEPICKER JS -->
    <script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script>
    <!-- DATEPICKER JS -->
    <script src="{{ asset('assets/plugins/date-picker/date-picker.js') }}"></script>
    <script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
    <!-- FORMELEMENTS JS -->
    <script src="{{ asset('assets/js/form-elements.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#profile_form').parsley();
            $('#all_select').on('change', function() {
                if ($(this).prop('checked')) {
                    $('.cards').prop('checked', true);
                } else {
                    $('.cards').prop('checked', false);
                }
            });
        });
    </script>
@endsection
