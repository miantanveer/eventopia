@extends('layouts.custom-app')
    @section('styles')
    @endsection
    @section('class')
    @endsection
        @section('content')
                <!-- CONTAINER OPEN -->
                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form" action="{{URL('verify-code')}}">
                            <span class="login100-form-title pb-5">
                                Eventopia
                            </span>
                            <h5 class="b-1">Forget Password?</h5>
                            <p class="text-muted">Enter your credentials to continue</p>
                            <p class="text-muted">Enter your email address or phone number below
                                and we'll send you password reset OTP.</p>

                            <div class="form-row">
                                <div class="col-xl-12 mb-3">
                                    <input type="text" required class="form-control" placeholder="JohnDoe@gmail.com" id="validationCustom01">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                            <div class="container-login100-form-btn">
                                <button class="btn btn-primary mt-4 mb-0">Send</button>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->

        @endsection

    @section('scripts')

    @endsection
