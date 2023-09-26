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
                            <h3 class="number-font mb-2">{{lang(user_name() . ', tell us about your entertainment & talent.')}}</h3>
                        </div>
                        <div class="col-12 pe-0">
                            <p>{{lang('The more you share, the faster you can get a booking.')}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 mt-5">
                    <div class="col-12 px-0 px-sm-2">
                        <div class="">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5><i class="fa fa-check-square text-primary"></i>&nbsp; {{lang('1. Rules')}}</h5>
                                            <p class="ms-5">{{lang('Entertainment and Talent rules')}}</p>
                                        </div>
                                        <div class="col-4 text-end">
                                            <a href="{{url('/entertainment-form-steps')}}" class="btn btn-primary mt-3 text-white" >{{lang('Start')}}</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="">
                                        <h5><i class="fa fa-check-square text-primary"></i> &nbsp; {{lang('2. About your entertainment & talent')}}</h5>
                                        <p class="ms-5" >{{lang('Add a title, description, and rules')}}</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="">
                                        <h5><i class="fa fa-check-square text-primary"></i> &nbsp; {{lang('3. Address')}}</h5>
                                        <p class="ms-5" >{{lang('Add address')}}</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="">
                                        <h5><i class="fa fa-check-square text-primary"></i> &nbsp; {{lang('4. Photos / videos')}}</h5>
                                        <p class="ms-5" >{{lang('Upload photos & videos and select a cover image')}}</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="">
                                        <h5><i class="fa fa-check-square text-primary"></i> &nbsp; {{lang('5. Availability')}}</h5>
                                        <p class="ms-5" >{{lang('Set your operating hours')}}</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="">
                                        <h5><i class="fa fa-check-square text-primary"></i> &nbsp; {{lang('6. Cancellations')}}</h5>
                                        <p class="ms-5" >{{lang('Select your cancellation policy')}}</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="">
                                        <h5><i class="fa fa-check-square text-primary"></i> &nbsp;{{lang(' 7. Activities')}}</h5>
                                        <p class="ms-5" >{{lang('Pick the activities you’d like to entertain and set your price')}}</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="">
                                        <h5><i class="fa fa-check-square text-primary"></i> &nbsp; {{lang('8. Profile')}}</h5>
                                        <p class="ms-5" >{{lang('Add a photo and contact information')}}</p>
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
