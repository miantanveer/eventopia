<!-- Country-selector modal-->
<div class="modal fade" id="country-selector">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal">
            <div class="modal-header">
                <h6 class="modal-title">{{ lang('Choose Country') }}</h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <ul class="row p-3">
                    @php
                        $langs = \App\Models\Language::get();
                    @endphp
                    @foreach ($langs as $lang)
                        <li class="col-lg-6 mb-2">
                            <a href="{{ route('local', $lang->code) }}"
                                class="btn btn-country btn-lg btn-block @if ($lang->code == \Session::get('locale')) active @endif">
                                <span class="country-selector"><img alt="" src="{{ asset($lang->image) }}"
                                        class="me-3 language"></span>
                                {{ $lang->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="user-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal ">
            <div class="modal-header">
                <h1 style="text-align:center;color:#000017" class="user-modal-title modal-title">
                    {{ lang('Add New User') }}</h1><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="user_form" method="POST" action="{{ route('admin.add.user') }}"
                        data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label class="form-label" for="first_name">First Name</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="text"
                                        class="form-control @error('first_name') border-danger @enderror"
                                        name="first_name" id="first_name" required
                                        data-parsley-required-message="First Name is required*"
                                        data-parsley-errors-container="#fname_err">
                                </div>
                                @error('first_name')
                                    <div class="text-danger">{{ $message }}</div>
                                    <script>
                                        $('#add-user-modal').modal('show');
                                    </script>
                                @enderror
                                <span class="text-danger" id="fname_err"></span>
                            </div>
                            <div class="col-6 mb-3 mx-">
                                <label class="form-label" for="last_name">Last Name</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="text"
                                        class="form-control @error('last_name') border-danger @enderror"
                                        name="last_name" id="last_name" required
                                        data-parsley-required-message="Last Name is required*"
                                        data-parsley-errors-container="#lname_err">
                                </div>
                                @error('last_name')
                                    <div class="text-danger">{{ $message }}</div>
                                    <script>
                                        $('#add-user-modal').modal('show');
                                    </script>
                                @enderror
                                <span class="text-danger" id="lname_err"> </span>
                            </div>
                            <div class="col-12 mb-3 ">
                                <label class="form-label" for="email">Email</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="text"
                                        class="form-control"
                                        name="email" id="email" required
                                        data-parsley-required-message="Email is required*"
                                        data-parsley-errors-container="#email_err">
                                </div>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    <script>
                                        $('#add-user-modal').modal('show');
                                    </script>
                                @enderror
                                <span class="text-danger" id="email_err"> </span>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label" for="email">Phone Number</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="text"
                                        class="form-control"
                                        name="phone_number" id="phone_number" required
                                        data-parsley-required-message="Phone Number is required*"
                                        data-parsley-errors-container="#phone_number_err">
                                </div>
                                @error('phone_number')
                                    <div class="text-danger">{{ $message }}</div>
                                    <script>
                                        $('#add-user-modal').modal('show');
                                    </script>
                                @enderror
                                <span class="text-danger" id="phone_number_err"> </span>
                            </div>
                            <div class="col-12 mb-3 mx-">
                                <label class="form-label" for="date_of_birth">Date of Birth</label>
                                <input type="date"
                                    class="form-control @error('date_of_birth') border-danger @enderror"
                                    name="date_of_birth" id="date_of_birth" required
                                    data-parsley-required-message="Date of Birth is required*"
                                    data-parsley-errors-container="#dob_err">
                                @error('date_of_birth')
                                    <div class="text-danger">{{ $message }}</div>
                                    <script>
                                        $('#add-user-modal').modal('show');
                                    </script>
                                @enderror
                                <span class="text-danger" id="dob_err"> </span>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label" for="password">Password</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="password"
                                        class="form-control @error('password') border-danger @enderror" name="password"
                                        id="password" data-parsley-required-message="Password is required*" required
                                        data-parsley-errors-container="#password_err">
                                </div>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    <script>
                                        $('#add-user-modal').modal('show');
                                    </script>
                                @enderror
                                <span class="text-danger" id="password_err"></span>
                            </div>
                            <div class="col-6 mb-1">
                                <label class="form-label" for="cpassword">Confirm Password</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="password"
                                        class="form-control @error('password') border-danger @enderror"
                                        name="password_confirmation" id="cpassword" data-parsley-equalto="#password"
                                        required data-parsley-required-message="Confirm Password is required*"
                                        data-parsley-errors-container="#cpassword_err">
                                </div>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    <script>
                                        $('#add-user-modal').modal('show');
                                    </script>
                                @enderror
                                <span class="text-danger" id="cpassword_err"></span>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label" for="status">Select Status</label>
                                    <select class="form-select" id="status" required name="status">
                                        <option value="1">Active</option>
                                        <option value="2">Block</option>
                                    </select>
                                </div>
                                @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                    <script>
                                        $('#add-user-modal').modal('show');
                                    </script>
                                @enderror
                                <span class="text-danger" id="status_err"></span>
                            </div>
                            <div class="d-block mt-5">
                                <button class="btn btn-primary py-2 w-100 text-white" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- User Delete Modal --}}
<div class="modal fade" id="user-delete-modal">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body text-center p-4 pb-5">
                <button aria-label="Close" class="btn-close position-absolute" data-bs-dismiss="modal"><span
                        aria-hidden="true">&times;</span></button>
                <i class="icon icon-close fs-70 text-danger lh-1 my-5 d-inline-block"></i>
                <form action="" id="user-delete-form" method="POST">
                    @csrf
                    <h2 class="text-danger">{{ lang('Warning!') }}</h2>
                    <h4 class="text-danger">{{ lang('Are you sure you want to delete ?') }}</h4>
                    <button class="btn btn-danger pd-x-25">{{ lang('Continue') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Listing delete modal --}}
<div class="modal fade" id="listing-delete-modal">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body text-center p-4 pb-5">
                <button aria-label="Close" class="btn-close position-absolute" data-bs-dismiss="modal"><span
                        aria-hidden="true">&times;</span></button>
                <i class="icon icon-close fs-70 text-danger lh-1 my-5 d-inline-block"></i>
                <form action="" id="listing-delete-form" method="POST">
                    @csrf
                    <h2 class="text-danger">{{ lang('Warning!') }}</h2>
                    <h4 class="text-danger">{{ lang('Are you sure you want to delete ?') }}</h4>
                    <button class="btn btn-danger pd-x-25">{{ lang('Continue') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
