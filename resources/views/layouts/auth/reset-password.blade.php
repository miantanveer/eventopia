@extends('layouts.custom-app')
    @section('styles')
    @endsection
    @section('class')
    @endsection
        @section('content')
                <!-- CONTAINER OPEN -->
                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form" action="#">
                            <span class="login100-form-title pb-5">
                                <div class="text-center p-5">
                                    <img src="{{asset("assets/images/brand/logo13.png")}}" alt="" class="header-brand-img">
                                </div>
                            </span>
                            <h5 class="b-1">Reset password?</h5>
                            <p class="text-muted">Please choose your new password</p>

                                <div class="form-group mt-5">
                                    <label class="form-label">Password</label>
                                    <div class="wrap-input100 validate-input input-group" id="Name-toggle">
                                        <input class="input100 form-control" type="password" placeholder="********" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Confirm Password</label>
                                    <div class="wrap-input100 validate-input input-group" id="Name-toggle">
                                        <input class="input100 form-control" type="password" placeholder="Re-enter your password" required>
                                    </div>
                                </div>
                            <div class="container-login100-form-btn">
                                <button type="submit" class="btn btn-primary mt-3 mb-4 w-100 text-white">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->

        @endsection

    @section('scripts')

    @endsection
