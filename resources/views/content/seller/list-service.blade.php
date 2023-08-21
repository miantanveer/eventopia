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
        <div class="col-xl-10 col-12 mt-5 ">
            <div class="card border overflow-hidden">
                <div class="card-header pb-0 border-bottom-0">
                    <div class="row w-100 align-items-center">
                        <div class="col-12">
                            <h3 class="number-font mb-2">{{auth()->user()->first_name ?? 'Hi'}}, tell us about your service</h3>
                        </div>
                        <div class="col-12 pe-0">
                            <p>The more you share, the faster you can get a booking.</p>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 mt-5">
                    <div class="col-12 px-0 px-sm-2">
                        <div class="">
                            <ul class="list-group">

                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp; 1. About your service</h5>
                                            <p class="ms-5" >Add a title, description, and rules</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button class="btn btn-primary mt-3"><a class="text-white" href="{{URL('/service-form-steps')}}">Start</a></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                            <h5><i class="fa fa-check-square text-primary"></i>&nbsp; 2. Photos</h5>
                                            <p class="ms-5">Upload photos & videos and select a cover image</p>
                                </li>
                                <li class="list-group-item">
                                    <div class="">
                                        <h5><i class="fa fa-check-square text-primary"></i> &nbsp; 3. Detail</h5>
                                        <p class="ms-5" >Add details to describe your service</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="">
                                        <h5><i class="fa fa-check-square text-primary"></i> &nbsp; 4. Location</h5>
                                        <p class="ms-5" >Add details to describe your service</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="">
                                        <h5><i class="fa fa-check-square text-primary"></i> &nbsp; 5. Pricing</h5>
                                        <p class="ms-5" >Set your pricing</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="">
                                        <h5><i class="fa fa-check-square text-primary"></i> &nbsp; 6. Team</h5>
                                        <p class="ms-5" >Pick the team to provide services</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
