@extends('layouts.custom-app')
@section('styles')
    <style>
        .inputs input {
            width: 40px;
            height: 40px
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
            border: 2px solid red
        }
    </style>
@endsection
@section('class')
@endsection
@section('content')
    <!-- CONTAINER OPEN -->
    <div class="container-login100">
        <div class="wrap-login100 p-6">
            <form class="login100-form validate-form">
                <span class="login100-form-title pb-5">
                    Eventopia
                </span>
                <h5 class="b-1">Verification Code</h5>
                <p class="text-muted">We send you on mail.</p>
                <p class="text-muted">We have send you code on john***@gmail.com</p>
                <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                    <input class="m-2 text-center form-control " type="number" id="first" maxlength="1" />
                    <input class="m-2 text-center form-control " type="number" id="second" maxlength="1" />
                    <input class="m-2 text-center form-control " type="number" id="third" maxlength="1" />
                    <input class="m-2 text-center form-control " type="number" id="fourth" maxlength="1" />
                </div>
                <div class="container-login100-form-btn">
                    <button class="btn btn-primary mt-4 mb-0">Continue</button>
                </div>
            </form>
            <hr style="border-top: 1px solid grey">

            <p class="text-muted">Didn't receive the email? Check your spam filter, or</p>
            <div class="container-login100-form-btn">
                <button class="btn btn-white mt-4 mb-0">Resend Code</button>
            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection

@section('scripts')
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
