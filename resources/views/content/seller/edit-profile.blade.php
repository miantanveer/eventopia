@extends('layouts.app')

@section('styles')
    <style>
        input.parsley-error {
            border-color: red !important;
        }
    </style>
@endsection

@section('content')
    <!-- ROW-1 OPEN -->
    <div class="row mt-4">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{lang('My Profile')}}</div>
                </div>
                <div class="card-body">
                    <div class="text-center chat-image mb-5">
                        <div class="avatar avatar-xxl chat-profile mb-3 brround">
                            <a class="" href="#"><img alt="avatar"
                                    src="{{ auth()->user()->image ?? asset('assets/images/users/23.jpeg') }}"
                                    class="avatar avatar-xxl chat-profile mb-3 brround"></a>
                        </div>
                        <div class="main-chat-msg-name mx-3">
                            <a href="#">
                                <h5 class="mb-1 text-dark fw-semibold">
                                    {{ auth()->user()->first_name . ' ' . auth()->user()->last_name ?? '' }}</h5>
                            </a>
                            <p class="text-muted mt-0 mb-0 pt-0 fs-13">{{lang('Space owner')}}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{lang('Your Nam')}}e</label>
                        <div class="wrap-input100 validate-input input-group" id="Name-toggle">
                            <input class="input100 form-control" type="text"
                                placeholder="{{ auth()->user()->first_name . ' ' . auth()->user()->last_name ?? '' }}"
                                disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{lang('Phone Number')}}</label>
                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                            <input class="input100 form-control" type="tel"
                                placeholder="{{ auth()->user()->phone_number ?? '' }}" disabled>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Date of Birth">{{lang('Date of Birth')}}</label>
                        <div class="input-group">
                            <input class="form-control fc-datepicker" id="Date of Birth"
                                placeholder="{{ auth()->user()->date_of_birth ?? '' }}" type="text" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{lang('Email Address')}}</label>
                        <div class="wrap-input100 validate-input input-group" id="email-toggle1">
                            <input class="input100 form-control" type="email"
                                placeholder="{{ auth()->user()->email ?? '' }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{lang('Password')}}</label>
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
                    <h3 class="card-title">{{lang('Edit Profile')}}</h3>
                </div>
                <div class="card-body">
                    <form id="profile_form" class="validate-form" enctype="multipart/form-data" method="POST"
                        data-parsley-validate>
                        <div class="row">
                            @csrf
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="first_name">{{lang('First Name')}}</label>
                                    <div class="">
                                        <input type="text" class="form-control @error('first_name') border-danger @enderror" name="first_name" id="first_name"
                                            placeholder="First Name" required
                                            data-parsley-required-message="{{lang('First Name is required')}}*">
                                    </div>
                                    @error('first_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <span class="text-danger" id="fname_err"></span>
                                </div>
                                <div class="form-group">
                                    <label for="last_name">{{lang('Last Name')}}</label>
                                    <div class="">
                                        <input type="text" id="first_name" class="form-control @error('last_name') border-danger @enderror" name="last_name"
                                            placeholder="Last Name" required
                                            data-parsley-required-message="{{lang('Last Name is required*')}}">
                                    </div>
                                    @error('last_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <span class="text-danger" id="lname_err"> </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhone2">{{lang('Phone Number')}}</label>
                                    <div class="">
                                        <input type="text" class="form-control @error('phone_number') border-danger @enderror" id="exampleInputPhone2"
                                            name="phone_number" placeholder="Phone Number" required
                                            data-parsley-required-message="{{lang('Phone Number is required*')}}">
                                    </div>
                                    @error('phone_number')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <span class="text-danger" id="phone_number_err"> </span>
                                </div>

                                <div class="mb-3">
                                    <label for="Date of Birth">{{lang('Date of Birth')}}</label>
                                    <div class="">
                                        <input type="date"
                                            class="form-control @error('date_of_birth') border-danger @enderror"
                                            name="date_of_birth" id="date_of_birth" required
                                            data-parsley-required-message="{{lang('Date of Birth is required*')}}"
                                            data-parsley-errors-container="#dob_err">
                                    </div>
                                    @error('date_of_birth')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <span class="text-danger" id="dob_err"> </span>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="">
                                    <input type="file" class="dropify" name="image">
                                </div>
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <span class="text-danger" id="image_err"> </span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{lang('Email address')}}</label>
                                <div class="">
                                    <input type="email" name="email" class="form-control @error('email') border-danger @enderror" id="exampleInputEmail1"
                                        placeholder="Email address" required
                                        data-parsley-required-message="{{lang('Email is required*')}}">
                                </div>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <span class="text-danger" id="email_err"> </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputname">{{lang('Password')}}</label>
                                    <div class="d-flex align-items-center input-container">
                                        <input type="password"
                                            class="form-control @error('password') border-danger @enderror"
                                            name="password" id="password"
                                            data-parsley-required-message="Password is required*" required
                                            data-parsley-errors-container="#password_err">
                                    </div>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <span class="text-danger" id="password_err"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputname1">{{lang('Confirm Password')}}</label>
                                    <div class="d-flex align-items-center input-container">
                                        <input type="password"
                                            class="form-control @error('password') border-danger @enderror"
                                            name="password_confirmation" id="cpassword" data-parsley-equalto="#password"
                                            required data-parsley-required-message="Confirm Password is required*"
                                            data-parsley-errors-container="#cpassword_err">
                                    </div>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <span class="text-danger" id="cpassword_err"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary my-1">{{lang('Update Profile')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 CLOSED -->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- TIMEPICKER JS -->
    <script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script>
    <!-- DATEPICKER JS -->
    <script src="{{ asset('assets/plugins/date-picker/date-picker.js') }}"></script>
    <script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
    <!-- FORMELEMENTS JS -->
    <script src="{{ asset('assets/js/form-elements.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#profile_form').parsley();
            $('.mydropify').dropify({
                messages: {
                    'default': 'Upload Company Image',
                    'replace': 'Uploaded',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (2M max).'
                }
            });
        });
    </script>
@endsection
