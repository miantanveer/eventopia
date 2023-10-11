@extends('layouts.custom-app')
@section('styles')
    <style>
        input.parsley-error {
            border-color: red !important;
        }
        @media screen and (min-width: 0px) and (max-width: 768px) {
        .wrap-login100 {
            width: 100% !important;
        }
    }
    </style>
@endsection
@section('class')
@endsection
@section('content')
    <!-- CONTAINER OPEN -->
    <div class="container-login100">
        <div class="wrap-login100 p-6" style="width: 30%">
            <form class="login100-form validate-form" method="POST" data-parsley-validate id="reset-form">
                @csrf
                <span class="login100-form-title pb-5">
                    <div class="text-center p-5">
                        <img src="{{ asset('assets/images/brand/logo13.png') }}" alt="" class="header-brand-img">
                    </div>
                </span>
                <h5 class="b-1">Reset password?</h5>
                <p class="text-muted">Please choose your new password</p>

                <div class="form-group mt-5">
                    <label class="form-label">Password</label>
                    <div class="wrap-input100 validate-input input-group" id="Name-toggle">
                        <input class="input100 form-control @error('password') border-danger @enderror" type="password"
                            placeholder="Enter your password" name="password" id="password"
                            data-parsley-required-message="Password is required*" required
                            data-parsley-errors-container="#password_err">
                    </div>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <span class="text-danger" id="password_err"></span>
                </div>
                <div class="form-group">
                    <label class="form-label">Confirm Password</label>
                    <div class="wrap-input100 validate-input input-group" id="Name-toggle">
                        <input class="input100 form-control @error('password') border-danger @enderror" type="password"
                            placeholder="Re-enter your password" name="password_confirmation" id="cpassword"
                            data-parsley-equalto="#password" required
                            data-parsley-required-message="Confirm Password is required*"
                            data-parsley-errors-container="#cpassword_err">
                    </div>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <span class="text-danger" id="cpassword_err"></span>
                </div>
                <input type="hidden" name="phone_number" value="{{ $phone_number ?? '' }}">
                <input type="hidden" name="email" value="{{ $email ?? '' }}">
                <div class="container-login100-form-btn">
                    <button type="submit" class="btn btn-primary mt-3 mb-4 w-100 text-white">Send</button>
                </div>
            </form>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#reset-form').parsley();
        });
    </script>
@endsection
