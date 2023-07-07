@extends('layouts.custom-app')
    @section('styles')
    <style>
        .image-container {
            overflow: hidden;
            height: 100%;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    @endsection
    @section('class')
    @endsection
        @section('content')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-6 pe-3 pe-md-0">
                                        <img src="{{asset('assets/images/signup-form.png')}}" width="100%" height="auto" alt="">
                                    </div>
                                    <div class="col-md-6 ps-3 ps-md-0">
                                        <div class="card-body">
                                            <form class="login100-form validate-form">
                                                <div class="form-row">
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationCustom01">First name</label>
                                                        <input type="text" class="form-control" id="validationCustom01">
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationCustom02">Last name</label>
                                                        <input type="text" class="form-control" id="validationCustom02">
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-xl-12 mb-3">
                                                        <label for="validationCustom01">Email or Phone Number</label>
                                                        <input type="text" class="form-control" id="validationCustom01">
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationCustom01">Password</label>
                                                        <input type="password" class="form-control" required value="password">
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationCustom02">Confirm Password</label>
                                                        <input type="password" class="form-control" id="validationCustom02" required value="password">
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <label class="custom-control custom-checkbox mt-4">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label">I agree with the <a href="{{url('terms')}}">terms and policy</a></span>
                                                    </label>
                                                </div>
                                                <div class="container-login100-form-btn">
                                                    <button class="btn btn-primary mt-4 mb-0">Signup</button>
                                                </div>
                                                {{-- <div class="text-center pt-3">
                                                    <p class="text-dark mb-0">Already have account?<a href="{{url('login')}}" class="text-primary ms-1">Sign In</a></p>
                                                </div>
                                                <label class="login-social-icon"><span>Register with Social</span></label>
                                                <div class="d-flex justify-content-center">
                                                    <a href="javascript:void(0)">
                                                        <div class="social-login me-4 text-center">
                                                            <i class="fa fa-google"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)">
                                                        <div class="social-login me-4 text-center">
                                                            <i class="fa fa-facebook"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)">
                                                        <div class="social-login text-center">
                                                            <i class="fa fa-twitter"></i>
                                                        </div>
                                                    </a>
                                                </div> --}}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
        @endsection
    @section('scripts')
    @endsection
