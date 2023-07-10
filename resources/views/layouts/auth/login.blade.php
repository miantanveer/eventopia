@extends('layouts.custom-app')
@section('styles')
    <style>
        .Image {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .div_Image {
            height: 100vh !important;
        }

        .image_content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        button:hover {
            background-color: #125ed1 !important;
        }
        .input-container {
            position: relative;
        }
        .icon {
            position: absolute;
            top: 52%;
            right: 9px;
            transform: translateY(-50%);
        }
        input.parsley-error {
            border-color: red !important;
        }

    </style>
@endsection
@section('class')
@endsection
@section('content')
    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-12 col-md-5 px-0">
                <div class="text-white text-center image_content">
                    <p>Don't have an account?</p>
                    <a style="padding-left:45px; padding-right:45px;" class="btn btn-outline-light" href="#">SIGN UP</a>
                </div>
                <div class="div_Image">
                    <img class="Image" src="{{ asset('assets/images/login-form.png') }}" alt="">
                </div>
            </div>
            <div class="bg-white col-12 col-md-7 px-0">
                <div style="margin:200px 100px 100px 100px;">
                    <h1 style="color:#00224F;" class="mb-5">Welcome Back!</h1>
                    <form id="login_form" method="GET" action="{{URL('/dashboard')}}" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-3 mx-">
                                <label class="form-label" for="email">Email or Phone Number</label>
                                <div class="d-flex align-items-center input-container">
                                <input type="text" class="form-control" name="email" value="" id="email"
                                    required
                                    data-parsley-required-message="Email or Phone Number is required*"
                                    data-parsley-errors-container="#email_err">
                                    <i class="fa fa-envelope text-muted icon"></i>
                                </div>
                                <span class="text-danger" id="email_err"> </span>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label" for="password">Password</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="password" class="form-control" value=""
                                        name="password" id="password" required
                                        data-parsley-required-message="Password is required*"
                                        data-parsley-errors-container="#password_err">
                                        <i class="fa fa-phone text-muted icon"></i>
                                </div>
                                <span class="text-danger" id="password_err"></span>
                            </div>
                            <div class="col-6">
                                <input type="checkbox" id="check">
                                <label for="check">Remember me</label>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" style="color:#006CE4;">Forget Password?</a>
                            </div>
                            <div class="d-block mt-5">
                                <button class="btn btn-primary py-2 w-100 text-white"
                                    type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#login_form').parsley();
        });
    </script>
@endsection
