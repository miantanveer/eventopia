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
        @media screen and (min-width: 0px) and (max-width: 375px) {
            .inputs input {
                width: 35px;
                height: 35px
            }
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
            <form method="POST" id="verify_form" class="login100-form validate-form mt-5" action="{{route('verify-email-phone')}}" data-parsley-validate>
                @csrf
                <h4>Verification Code</h4>
                <p style="font-size: 12px;" class="text-muted">We send you on {{$email ? 'mail.' : 'Phone Number.'}}</p>
                <p style="font-size: 13px;" class="mt-5" >We have send you code on {{ $email ? $email : $phone_number }}</p>
                <div id="otp" class="inputs d-flex flex-row justify-content-center">
                    <input class="m-sm-2 mx-1 text-center form-control " name="otp[]" type="number" id="numb" maxlength="1" required data-parsley-excluded="true"/>
                    <input class="m-sm-2 mx-1 text-center form-control " name="otp[]" type="number" id="numb1" maxlength="1" required data-parsley-excluded="true"/>
                    <input class="m-sm-2 mx-1 text-center form-control " name="otp[]" type="number" id="numb2" maxlength="1" required data-parsley-excluded="true"/>
                    <input class="m-sm-2 mx-1 text-center form-control " name="otp[]" type="number" id="numb3" maxlength="1" required data-parsley-excluded="true"/>
                    <input class="m-sm-2 mx-1 text-center form-control " name="otp[]" type="number" id="numb4" maxlength="1" required data-parsley-excluded="true"/>
                    <input class="m-sm-2 mx-1 text-center form-control " name="otp[]" type="number" id="numb5" maxlength="1" required data-parsley-excluded="true"/>
                </div>
                <input type="hidden" name="email" value="{{ $email ?? '' }}">
                <input type="hidden" name="phone_number" value="{{ $phone_number ?? '' }}">
                <input type="hidden" name="send_for" value="{{ $send_for ?? '' }}">
                <span class="text-danger" id="otp_err"></span>
                <div class="container-login100-form-btn">
                    <button type="submit" class="btn btn-primary mt-3 mb-4 w-100 text-white">Continue</button>
                </div>
            </form>
            <hr style="border-top: 1px solid grey">

            <span class="me-4"> Didn't receive the code?</span>
            <br>
            <form id="resend-otp-form" action="{{route('resend-otp')}}" method="post" >
            <div class="container-login100-form-btn">
                    @csrf
                    <input type="hidden" name="email" value="{{ $email ?? '' }}">
                    <input type="hidden" name="phone_number" value="{{ $phone_number ?? '' }}">
                    <button type="submit" class="btn border border-2 mt-1 mb-4 w-100 text-dark">Resend Code</button>
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
            $('#resend-otp-form').submit(function(event) {
                event.preventDefault(); // Prevent the default form submission

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function(response) {
                        notif({
                            msg: "<b>Success: </b> OTP resend Successfully",
                            type: "success"
                        });
                    },
                    error: function() {
                        alert('An error occurred while resending OTP.'); // Display an error message
                    }
                });
            });
        });
        </script>
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
                    inputs[i].addEventListener('input', function(event) {
                        if (this.value.length > 1) {
                            this.value = this.value.slice(0, 1); // Keep only the first digit
                        }
                        if (this.value !== '') {
                            if (i !== inputs.length - 1) {
                                inputs[i + 1].focus();
                            }
                        } else {
                            if (i !== 0) {
                                inputs[i - 1].focus();
                            }
                        }
                    });
                }
            }
            OTPInput();
        });
    </script>
@endsection
