@extends('layouts.custom-app')

    @section('styles')

    @endsection

    @section('class')

    <div class="login-img">

    @endsection

        @section('content')

                <!-- CONTAINER OPEN -->
                <div class="container">
                    <div class="row text-center mx-auto">
                        <div class="col-lg-8 col-sm-12 center-block align-items-center construction  ">
                            <div class="text-white">
                                <div class="card-body p-0">
                                    <h1 class="display-2 mb-0 fw-semibold">Coming Soon</h1>
                                    <div id="launch_date"></div>
                                    <p>we apologize for your in-convenience....any quaries contact me </p>
                                    <h4><strong>Contact:</strong> sash@demo.com</h4>
                                    <div class="mt-5">
                                        <button class="btn btn-icon" type="button">
												<span class="btn-inner--icon"><i class="fa fa-facebook-f"></i></span>
											</button>
                                        <button class="btn btn-icon" type="button">
												<span class="btn-inner--icon"><i class="fa fa-google"></i></span>
											</button>
                                        <button class="btn btn-icon" type="button">
												<span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
											</button>
                                        <button class="btn btn-icon" type="button">
												<span class="btn-inner--icon"><i class="fa fa-pinterest-p"></i></span>
											</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->

        @endsection

    @section('scripts')

    <!-- JQUERY-COUNTDOWN JS-->
    <script src="{{asset('assets/plugins/jquery-countdown/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-countdown/jquery.countdown.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-countdown/countdown.js')}}"></script>

    @endsection
