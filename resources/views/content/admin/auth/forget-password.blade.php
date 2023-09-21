@extends('layouts.admin-web')

@section('styles')
    <style>
        .page {
            /* background-color: #479fd0; */
            background: linear-gradient(rgb(114, 115, 210), rgb(90, 140, 209)), rgb(65, 165, 207);

        }
    </style>
@endsection
@section('class')
@endsection
@section('content')
    <!-- CONTAINER OPEN -->
    <div class="container-login100">
        <div class="wrap-login100 p-6">
            <form class="login100-form validate-form" action="{{route('admin.forget-password')}}" id="forget_form" method="POST" data-parsley-validate>
                @csrf
                <span class="login100-form-title pb-5">
                    Eventopia
                </span>
                <h5 class="b-1">Forget Password?</h5>
                <p class="text-muted">Enter your credentials to continue</p>
                <p class="text-muted">Enter your email address below
                    and we'll send you password reset OTP.</p>

                <div class="form-row">
                    <div class="col-12 mb-3 mx-">
                        <div class="d-flex align-items-center input-container">
                            <input type="text" placeholder="JohnDoe@gmail.com"
                                class="form-control" name="email"
                                id="email" required data-parsley-required-message="Email is required*"
                                data-parsley-errors-container="#email_err">
                        </div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <span class="text-danger" id="email_err"> </span>
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
    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#forget_form').parsley();
        });
    </script>
@endsection
