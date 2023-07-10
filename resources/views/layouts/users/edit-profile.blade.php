@extends('layouts.app')

@section('styles')
    <style>
        input.parsley-error {
            border-color: red !important;
        }
    </style>
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Dashboard</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">My Profile</div>
                </div>
                <div class="card-body">
                    <div class="text-center chat-image mb-5">
                        <div class="avatar avatar-xxl chat-profile mb-3 brround">
                            <a class="" href="{{ url('profile') }}"><img alt="avatar"
                                    src="{{ asset('assets/images/users/7.jpg') }}" class="brround"></a>
                        </div>
                        <div class="main-chat-msg-name">
                            <a href="{{ url('profile') }}">
                                <h5 class="mb-1 text-dark fw-semibold">john Doe</h5>
                            </a>
                            <p class="text-muted mt-0 mb-0 pt-0 fs-13">Space owner</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Your Name</label>
                        <div class="wrap-input100 validate-input input-group" id="Name-toggle">
                            <input class="input100 form-control" type="text" placeholder="John Doe" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Phone Number</label>
                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                            <input class="input100 form-control" type="tel" placeholder="+923456789100" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <div class="wrap-input100 validate-input input-group" id="email-toggle1">
                            <input class="input100 form-control" type="email" placeholder="johnsmith12@gmail.com"
                                disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                            <input class="input100 form-control" type="password" placeholder="********" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Profile</h3>
                </div>
                <div class="card-body">
                    <form action="#" id="profile_form" class="validate-form" data-parsley-validate>
                        <div class="form-group">
                            <label for="exampleInputPhone2">Phone Number</label>
                            <input type="tel" class="form-control" id="exampleInputPhone2" placeholder="Phone Number"
                                required data-parsley-required-message="Phone Number is required*">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address"
                                required data-parsley-required-message="Email is required*">
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputname">Password</label>
                                    <input type="password" class="form-control" id="exampleInputname" placeholder="Password"
                                        required data-parsley-required-message="Password is required*">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputname1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputname1"
                                        placeholder="Confirm Password" required
                                        data-parsley-required-message="Confirm Password is required*">
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary my-1">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ROW-1 CLOSED -->
    @endsection

    @section('scripts')
        <!-- INTERNAL SELECT2 JS -->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.js') }}"></script>
        <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#profile_form').parsley();
            });
        </script>
    @endsection
