@extends('layouts.seller-web-layout')

@section('styles')
@endsection

@section('content')
    <!-- ROW-1 -->
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-12 mt-5 ">
                <div class="card border overflow-hidden">
                    <div class="card-header pb-0 border-bottom-0">
                        <div class="row w-100 align-items-center">
                            <div class="col-12">
                                <h3 class="number-font mb-2">{{lang(user_name() . ", tell us about your space")}}</h3>
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
                                                <h5><i
                                                        class="fa fa-check-square text-primary"></i>&nbsp;
                                                    {{lang('1.Location')}}</h5>
                                                <p class="ms-5">{{lang('Enter your address')}}</p>
                                            </div>
                                            <div class="col-4 text-end">
                                                <button class="btn btn-primary mt-3"><a
                                                        href="{{ route('add-space') }}"
                                                        class="text-white">{{lang('Start')}}</a></button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="">
                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp;
                                                {{lang('2. Setup')}} </h5>
                                            <p class="ms-5">{{lang('Add your space type, parking options, and
                                                surveillance devices')}}</p>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="">
                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp;
                                                {{lang('3. About your space')}} </h5>
                                            <p class="ms-5">{{lang('Add a title, description, and rules')}}</p>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="">
                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp;
                                                {{lang('4. Photos')}} </h5>
                                            <p class="ms-5">{{lang('Upload photos and select a cover image')}}</p>
                                        </div>
                                    </li>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="">
                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp;{{lang('5.
                                                Availability')}} </h5>
                                            <p class="ms-5">{{lang('Set your operating hours')}}</p>
                                        </div>
                                    </li>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="">
                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp;{{lang('6.
                                                Cleaning')}} </h5>
                                            <p class="ms-5">{{lang('Specify your cleaning protocol for guests')}}
                                            </p>
                                        </div>
                                    </li>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="">
                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp;{{lang('7.
                                                Cancellations')}} </h5>
                                            <p class="ms-5">{{lang('Select your cancellation policy')}}</p>
                                        </div>
                                    </li>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="">
                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp;{{lang('8.
                                                Activities')}} </h5>
                                            <p class="ms-5">{{lang('Pick the activities you’d like to host and
                                                set your price')}}</p>
                                        </div>
                                    </li>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="">
                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp;{{lang('9.
                                                Profile')}}</h5>
                                            <p class="ms-5">{{lang('Add a photo and contact information')}}</p>
                                        </div>
                                    </li>

                                </ul>
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
