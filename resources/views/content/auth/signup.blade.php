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

        @media screen and (min-width: 0px) and (max-width: 425px) {
            .sign_div {
                margin:50px 20px 20px 20px !important;
            }
        }
        @media screen and (min-width: 425px) and (max-width: 768px) {
            .sign_div {
                margin:150px 20px 20px 20px !important;
            }
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
                    <p>Already have an account?</p>
                    <a style="padding-left:45px; padding-right:45px;" class="btn btn-outline-light"
                        href="{{ URL('/login') }}">LOGIN</a>
                </div>
                <div class="div_Image">
                    <img class="Image" src="{{ asset('assets/images/signup-form.png') }}" alt="">
                </div>
            </div>
            <div class="bg-white col-12 col-md-7 px-0">
                <div class="sign_div" style="margin:200px 100px 100px 100px;">
                    <form id="signUp_form" method="POST" action="" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label class="form-label" for="first_name">First Name</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="text" class="form-control @error('first_name') border-danger @enderror" name="first_name" id="first_name"
                                        required data-parsley-required-message="First Name is required*"
                                        data-parsley-errors-container="#fname_err">
                                    <i class="fa fa-edit text-muted icon"></i>
                                </div>
                                @error('first_name') <div class="text-danger">{{$message}}</div> @enderror
                                <span class="text-danger" id="fname_err"></span>
                            </div>
                            <div class="col-6 mb-3 mx-">
                                <label class="form-label" for="last_name">Last Name</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="text" class="form-control @error('last_name') border-danger @enderror" name="last_name" id="last_name"
                                        required data-parsley-required-message="Last Name is required*"
                                        data-parsley-errors-container="#lname_err">
                                    <i class="fa fa-edit text-muted icon"></i>
                                </div>
                                @error('last_name') <div class="text-danger">{{$message}}</div> @enderror
                                <span class="text-danger" id="lname_err"> </span>
                            </div>
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
                            <div class="col-12 mb-3 mx-">
                                <label class="form-label" for="date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control @error('date_of_birth') border-danger @enderror" name="date_of_birth" id="date_of_birth"
                                    required data-parsley-required-message="Date of Birth is required*"
                                    data-parsley-errors-container="#dob_err">
                                @error('date_of_birth') <div class="text-danger">{{$message}}</div> @enderror
                                <span class="text-danger" id="dob_err"> </span>
                            </div>
                            <div class="col-6 mb-3">
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
                            <div class="col-6 mb-1">
                                <label class="form-label" for="cpassword">Confirm Password</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="password" class="form-control @error('password') border-danger @enderror" name="password_confirmation"
                                        id="cpassword"  data-parsley-equalto="#password"
                                        required data-parsley-required-message="Confirm Password is required*"
                                        data-parsley-errors-container="#cpassword_err">
                                    <i class="fa fa-lock text-muted icon"></i>
                                </div>
                                @error('password') <div class="text-danger">{{$message}}</div> @enderror
                                <span class="text-danger" id="cpassword_err"></span>
                            </div>
                            <div class="col-12">
                                <input type="checkbox" id="check" data-parsley-required="true"
                                   required data-parsley-errors-container="#checkbox_err">
                                <label for="check">I agree with the <a style="color: #006CE4;" href="{{route('terms-and-conditions')}}">Terms &
                                        Conditions.</a></label>
                                <span class="text-denger" id="checkbox_err"></span>
                            </div>
                            <div class="d-block mt-5">
                                <button class="btn btn-primary py-2 w-100 text-white" type="submit">Sign up</button>
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
            $('#signUp_form').parsley();
        });
    </script>
    <script src="{{ asset('assets/js/email-validate.js') }}"></script>
@endsection
