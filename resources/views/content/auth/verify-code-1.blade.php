@extends('layouts.custom-app')
@section('styles')
    <style>
        .inputs input {
            width: 50px;
            height: 50px
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0
        }

        .form-control:focus {
            box-shadow: none;
            border: 1px solid #006CE4;
        }

        .form-control:hover {
            border: 1px solid #006CE4;
        }

        .container-login100 {
            background-color: white;
            height: 100vh !important;
        }

        .wrap-login100 {
            box-shadow: none;
        }

        .login100-form-title {
            padding-bottom: 0.7rem !important;
            font-size: 29px;
        }
    </style>
@endsection
@section('class')
@endsection
@section('content')
    <div class="container-login100" style="background-color: #E8F2FF">
        <div class="wrap-login100 p-6">
            <div class="text-center p-5">
                <img src="{{asset("assets/images/brand/logo13.png")}}" alt="" class="header-brand-img">
            </div>
            <form method="GET" action="/customer-dashboard" id="verify_form" class="login100-form validate-form mt-5" data-parsley-validate>
                <h4>Verification Code</h4>
                <p style="font-size: 12px;" class="text-muted">We send you on mail.</p>
                <p style="font-size: 13px;" class="mt-5" >We have send you code on john***@gmail.com</p>
                <div id="otp" class="inputs d-flex flex-row justify-content-center">
                    <input class="my-2 me-2 text-center form-control " type="number" id="first" maxlength="1"
                        required data-parsley-excluded="true"/>
                    <input class="m-2 text-center form-control " type="number" id="second" maxlength="1" required data-parsley-excluded="true"/>
                    <input class="m-2 text-center form-control " type="number" id="third" maxlength="1" required data-parsley-excluded="true"/>
                    <input class="m-2 text-center form-control " type="number" id="fourth" maxlength="1" required data-parsley-excluded="true"/>
                </div>
                <span class="text-danger" id="otp_err"></span>
                <div class="container-login100-form-btn">
                    <button type="submit" class="btn btn-primary mt-3 mb-4 w-100 text-white">Continue</button>
                </div>
            </form>
            <hr style="border-top: 1px solid grey">

            <span class="me-4"> Didn't receive the email? Check your spam filter, or</span>
            <br>
            <div class="container-login100-form-btn">
                <button type="submit" class="btn border border-2 mt-1 mb-4 w-100 text-dark">Resend Code</button>
            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#verify_form').on('submit', function(e) {
            var isValid = true;
            $('#otp input').each(function() {
                if ($(this).val().trim() === '') {
                    isValid = false;
                    return false;  // Stop the loop if any input is empty
                }
            });

            if (!isValid) {
                e.preventDefault();
                $('#otp_err').text('Please fill all the OTP fields.').show();
            } else {
                $('#otp_err').hide();
            }
        });
    });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            function OTPInput() {
                const inputs = document.querySelectorAll('#otp > *[id]');
                for (let i = 0; i < inputs.length; i++) {
                    inputs[i].addEventListener('keydown', function(event) {
                        if (event.key === "Backspace") {
                            inputs[i].value = '';
                            if (i !== 0) inputs[i - 1].focus();
                        } else {
                            if (i === inputs.length - 1 && inputs[i].value !== '') {
                                return true;
                            } else if (event.keyCode > 47 && event.keyCode < 58) {
                                inputs[i].value = event.key;
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            } else if (event.keyCode > 64 && event.keyCode < 91) {
                                inputs[i].value = String.fromCharCode(event.keyCode);
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            }
                        }
                    });
                }
            }
            OTPInput();
        });
    </script>
@endsection
