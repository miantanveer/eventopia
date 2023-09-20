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
    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">
    @endsection

    @section('content')
        <!-- CONTAINER OPEN -->
        <div class="col-login mx-auto mt-7">
            <div class="text-center">
                <img src="{{ asset('assets/images/brand/logo13.png') }}" class="header-brand-img" alt="">
            </div>
        </div>

        <div class="container-login100">
            <div class="wrap-login100 p-6">
                <form id="login_form" method="POST" data-parsley-validate>
                    <span class="login100-form-title pb-5">
                        Login
                    </span>
                    @csrf
                    <div class="panel panel-primary">
                        <div class="panel-body tabs-menu-body p-0 pt-5">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab5">
                                    <div class="wrap-input100 validate-input input-group"
                                        data-bs-validate="Valid email is required: ex@abc.xyz">
                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                            <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                        </a>
                                        <input
                                            class="input100 form-control @if ($errors->has('email')) border-danger @endif"
                                            type="email" placeholder="Email" name="email" id="email" required
                                            data-parsley-required-message="Email is required*"
                                            data-parsley-errors-container="#email_err">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <span class="text-danger" id="email_err"> </span>
                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                        </a>
                                        <input class="input100 form-control @error('password') border-danger @enderror" name="password"
                                        id="password"  data-parsley-required-message="Password is required*"
                                        required data-parsley-errors-container="#password_err" type="password" placeholder="Password">
                                    </div>
                                    @error('password') <div class="text-danger">{{$message}}</div> @enderror
                                    <span class="text-danger" id="password_err"></span>
                                    <div class="text-end pt-4">
                                        <p class="mb-0"><a href="{{route('admin.forget.password')}} }}"
                                                class="text-primary ms-1">Forgot Password?</a></p>
                                    </div>
                                    <div class="container-login100-form-btn">
                                        <button class="login100-form-btn btn-primary" type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                $('#login_form').parsley();
            });
        </script>
    @endsection
