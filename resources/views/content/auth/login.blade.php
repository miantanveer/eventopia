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
                    <a style="padding-left:45px; padding-right:45px;" class="btn btn-outline-light" href="{{route("signup")}}">SIGN UP</a>
                </div>
                <div class="div_Image">
                    <img class="Image" src="{{ asset('assets/images/login-form.png') }}" alt="">
                </div>
            </div>
            <div class="bg-white col-12 col-md-7 px-0">
                <div style="margin:200px 100px 100px 100px;">
                    <h1 style="color:#00224F;" class="mb-5">Welcome Back!</h1>
                    <form id="login_form" method="POST" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-3 mx-">
                                <label class="form-label" for="email">Email or Phone Number</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="text" class="form-control @if($errors->has('email') || $errors->has('phone_number')) border-danger @endif" name="email" id="email"
                                        required data-parsley-required-message="Email or Phone Number is required*"
                                        data-parsley-errors-container="#email_err">
                                    <i class="fa fa-edit text-muted icon"></i>
                                </div>
                                @error('email') <div class="text-danger">{{$message}}</div> @enderror
                                @error('phone_number') <div class="text-danger">{{$message}}</div> @enderror
                                <span class="text-danger" id="email_err"> </span>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label" for="password">Password</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="password" class="form-control @error('password') border-danger @enderror" name="password"
                                        id="password"  data-parsley-required-message="Password is required*"
                                        required data-parsley-errors-container="#password_err">
                                    <i class="fa fa-lock text-muted icon"></i>
                                </div>
                                @error('password') <div class="text-danger">{{$message}}</div> @enderror
                                <span class="text-danger" id="password_err"></span>
                            </div>
                            <div class="col-6">
                                <input type="checkbox" id="check" data-parsley-required="true"
                                   required data-parsley-errors-container="#checkbox_err">
                                <label for="check">Remember me</label>
                                <span class="text-denger" id="checkbox_err"></span>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{route('forget-password')}}" style="color:#006CE4;">Forget Password?</a>
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
    <script src="{{ asset('assets/js/email-validate.js') }}"></script>
@endsection
