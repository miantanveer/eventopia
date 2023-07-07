@extends('layouts.custom-app')
    @section('styles')
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
                            <h5 class="b-1">Check Mail</h5>
                            <p class="text-muted">Avoid getting locked out.</p>
                            <p class="text-muted">We have sent a password recover instructions
                                to your email..</p>


                            <div class="container-login100-form-btn">
                                <button class="btn btn-primary mt-4 mb-0">Open Email</button>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->

        @endsection

    @section('scripts')

    @endsection
