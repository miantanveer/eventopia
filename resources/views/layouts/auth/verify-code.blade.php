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
    <div class="container-login100">
        <div class="wrap-login100 p-6">
            <form id="verify_form" class="login100-form validate-form" data-parsley-validate>
                <span style="color:#00224F;" class="login100-form-title pb-5">
                    Verify Your Email Address
                </span>
                <p style="font-size: 15px;" class="text-muted">An 6-digit code has been sent to john***@gmail.com</p>
                <div class="row align-items-center mt-5">
                    <div class="col-6 mt-4">
                        <span style="font-size:15px;">Verification</span><i
                            class="fa fa-exclamation-circle text-muted mx-2"></i><span style="color:#003B95;">2:54</span>
                    </div>
                    <div class="col-6 text-end mt-4">
                        <a style="color: #006CE4;" href="#">Resend Code</a>
                    </div>
                </div>
                <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                    <input class="my-2 me-2 text-center form-control " type="number" id="first" maxlength="1"
                        required data-parsley-excluded="true"/>
                    <input class="m-2 text-center form-control " type="number" id="second" maxlength="1" required data-parsley-excluded="true"/>
                    <input class="m-2 text-center form-control " type="number" id="third" maxlength="1" required data-parsley-excluded="true"/>
                    <input class="m-2 text-center form-control " type="number" id="fourth" maxlength="1" required data-parsley-excluded="true"/>
                    <input class="m-2 text-center form-control " type="number" id="fifth" maxlength="1" required data-parsley-excluded="true"/>
                    <input class="my-2 ms-2 text-center form-control " type="number" id="sixth" maxlength="1"
                        required data-parsley-excluded="true"/>
                </div>
                <span class="text-danger" id="otp_err"></span>
                <div class="container-login100-form-btn">
                    <button type="submit" style="background-color: #003B95;"
                        class="btn mt-3 mb-4 w-100 text-white">Verify</button>
                </div>
            </form>
            <hr style="border-top: 1px solid grey">

            <span class="me-4">Having problems?</span>
            <a style="color: #006CE4;" href="#">Learn More</a>
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
