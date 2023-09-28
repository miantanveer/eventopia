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
                            class="btn btn-country btn-lg btn-block @if ($lang->code == (\Session::get('locale'))) active @endif">
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

{{-- Waring Image Modal --}}
<div class="modal fade" id="warning-modal">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body text-center p-4 pb-5">
                <button aria-label="Close" class="btn-close position-absolute" data-bs-dismiss="modal"><span
                        aria-hidden="true">&times;</span></button>
                <i class="icon icon-close fs-70 text-danger lh-1 my-5 d-inline-block"></i>
                <h2 class="text-danger">{{ lang('Warning!') }}</h2>
                <h4 class="text-danger">{{ lang('Atleast 4 and maximum 8 images are required.') }}</h4>
                <button class="btn btn-danger pd-x-25" data-bs-dismiss="modal">{{ lang('Ok') }}</button>
            </div>
        </div>
    </div>
</div>
<!-- Quote Modal -->
<div class="modal fade" id="quote-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header border-0 mx-auto">
                <div class="text-center align-middle">
                    <h3 class="modal-title fw-bolder">{{ lang('Quotation from Seller') }}</h3>
                    <p>{{ lang('This quote is made for the service ') }}<span id="header"></span></p>
                </div>
            </div>
            <div class="modal-body pb-0">
                <div class="row p-4  border-bottom align-items-center">
                    <div class="col-md-3 col-12 ">
                        <h6 class="fw-bolder">{{ lang('Service') }}</h6>
                    </div>
                    <div class="col-12 d-flex d-md-none p-4" id="img"></div>
                    <div class="col-6">
                        <h6 class="fw-bolder">{{ lang('Service type & description') }} </h6>
                    </div>
                    <div class="col-md-3 col-6 text-end">
                        <h6 class="fw-bolder">{{ lang('Price') }}</h6>
                    </div>
                </div>
                <div class="row p-4  border-bottom align-items-center">
                    <div class="col-3 d-none d-md-flex" id="img1">
                    </div>
                    <div class="col-6">
                        <p id="title"></p>
                        <p id="description">{{ lang('Description') }}</p>
                    </div>
                    <div class="col-md-3 col-6 text-end" id="amount"></div>
                </div>
                <div class="row p-4 border-bottom align-items-center">
                    <div class="col-6">
                        <h6 class="fw-bolder">{{ lang('Location') }} </h6>
                    </div>
                    <div class="col-6  text-end" id="location"></div>
                </div>
                <div class="row p-4 border-bottom align-items-center">
                    <div class="col-6">
                        <h6 class="fw-bolder">{{ lang('Date') }}</h6>
                    </div>
                    <div class="col-6  text-end" id="date"></div>
                </div>
                <div class="row p-4 border-bottom align-items-center">
                    <div class="col-6">
                        <h6 class="fw-bolder">{{ lang('Attendees') }}</h6>
                    </div>
                    <div class="col-6  text-end" id="guests"></div>
                </div>
                <div class="row p-4 border-bottom align-items-center">
                    <div class="col-6">
                        <h6 class="fw-bolder">{{ lang('Seller Quote Description') }}</h6>
                    </div>
                    <div class="col-6  text-end" id="seller_quote_description"></div>
                </div>
                <div class="row p-4 border-bottom align-items-center bg-light-gray">
                    <div class="col-6">
                        <h6 class="fw-bolder">{{ lang('Total Price:') }} </h6>
                    </div>
                    <div class="col-6  text-end" id="total"></div>
                </div>
            </div>
            <div class="modal-footer mx-auto">
                <div id="decline_btn"></div>
                <div id="accept_btn"></div>
                <div id="revise_btn"></div>
            </div>
        </div>
    </div>
</div>

<!-- Revise-Quote modal-->
<div class="modal fade" id="reviseQuoteModal">
    <div class="modal-dialog modal-dialog-centered text-center " role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body text-center p-4 pb-5">
                <button aria-label="Close" class="btn-close position-absolute" data-bs-dismiss="modal"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-header border-0 mx-auto">
                <div class="text-center align-middle">
                    <h3 class="modal-title fw-bolder">{{ lang('Revise Qutation with Seller') }}</h3>
                    <p>{{ lang('This quote is made for the service ') }}<span id="header"></span></p>
                </div>
            </div>
            <div class="modal-body">
                <form class="validation" id="reviseQuoteForm" action="" method="post">
                    @csrf
                    <input type="hidden" name="id" id="revise_id">
                    <div class="input-group mt-3">
                        <div class="input-group-text">
                            <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                        </div><input class="form-control fc-datepicker" id="revise_date" required name="date"
                            placeholder="Select Date" type="date">
                    </div>
                    <div class="custom-checkbox my-3 display-inline float-left">
                        <input type="checkbox" class="form-input" id="revise_flexible_date" name="flexible_date" value="1">
                        <span>{{lang('My date is flexible')}}</span>
                    </div>
                    <input type="number" class="form-control mb-3" id="revise_guests" required name="guests"
                        placeholder="Number of Guests">
                    <textarea name="description" id="revise_description" required class="form-control" rows="3" class="mb-3"
                        placeholder="Interduce yourself and the share your event vision"></textarea>
                    <div class="mt-3">
                        <p>{{lang("By clicking 'Revise Quote', you agree that your information
                            will be shared with the vendor. Please see our Privacy Policy
                            and Terms of Use for details..")}}</p>
                    </div>
                    <div class="row mt-4">
                        <div class="modal-footer mx-auto">
                            <div id='revise_back_btn'></div>
                            <button aria-label="Close" class="btn btn-indigo pd-x-25" data-bs-dismiss="modal">{{lang('Revise Quote')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!--account list-space-->
<div class="modal fade" id="my-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal">
            <div class="modal-header">
                <h1 style="text-align:center;color:#000017" class="modal-title">
                    {{ lang("Create an account to list your space") }}</h1><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="signUp_form" method="POST" action="{{ url('signup') }}" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label class="form-label" for="first_name">First Name</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="text" class="form-control @error('first_name') border-danger @enderror"
                                        name="first_name" id="first_name" required
                                        data-parsley-required-message="First Name is required*"
                                        data-parsley-errors-container="#fname_err">
                                </div>
                                @error('first_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <span class="text-danger" id="fname_err"></span>
                            </div>
                            <div class="col-6 mb-3 mx-">
                                <label class="form-label" for="last_name">Last Name</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="text" class="form-control @error('last_name') border-danger @enderror"
                                        name="last_name" id="last_name" required
                                        data-parsley-required-message="Last Name is required*"
                                        data-parsley-errors-container="#lname_err">
                                </div>
                                @error('last_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <span class="text-danger" id="lname_err"> </span>
                            </div>
                            <div class="col-12 mb-3 mx-">
                                <label class="form-label" for="email">Email or Phone Number</label>
                                <div class="d-flex align-items-center input-container">
                                    <input type="text"
                                        class="form-control @if ($errors->has('email') || $errors->has('phone_number')) border-danger @endif"
                                        name="email" id="email" required
                                        data-parsley-required-message="Email or Phone Number is required*"
                                        data-parsley-errors-container="#email_err">
                                </div>
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @error('phone_number')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <span class="text-danger" id="email_err"> </span>
                            </div>
                            <div class="col-12 mb-3 mx-">
                                <label class="form-label" for="date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control @error('date_of_birth') border-danger @enderror"
                                    name="date_of_birth" id="date_of_birth" required
                                    data-parsley-required-message="Date of Birth is required*"
                                    data-parsley-errors-container="#dob_err">
                                @error('date_of_birth')
                                <div class="text-danger">{{ $message }}</div>
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
                                @enderror
                                <span class="text-danger" id="cpassword_err"></span>
                            </div>
                            <div class="d-block mt-5">
                                <button class="btn btn-primary py-2 w-100 text-white" type="submit">Sign up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer mt-0 mb-5">
                <p style="height:39px;width:490px;color:#313131;text-align:center;">
                    <b>{{ lang("Eventopia will send you deals, inspiration, and marketing emails. You can opt out at any
                        time from your account settings.") }}</b>
                </p><br>

                <label style="height:771;width:600;margin-right:50px;" class="custom-control custom-checkbox mt-4 mb-3">
                    <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                    <span class="custom-control-label">{{ lang("I don't want to receive marketing emails from
                        Eventopia.") }}</span>
                </label>
                <div>
                    <h6 style="height:17;width:216;margin-right:142px;">
                        <b>{{ lang('Already have an account? ') }}<span style="color:#006CE4">{{ lang('Login')
                                }}</span></b>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="popular-catagories-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal">
            <div class="modal-header border-0">
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="p-3">
                    <h2 class="text-center fw-bolder">{{ lang('Popular Activities') }}</h2>
                </div>
                <div class="row">
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text>
                            <p>{{ lang('Audio Recording') }}</p>
                        </a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text>
                            <p>{{ lang('Corporate Event') }}</p>
                        </a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text>
                            <p>{{ lang('Dinner') }}</p>
                        </a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text>
                            <p>{{ lang('Film Shoot') }}</p>
                        </a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text>
                            <p>{{ lang('Fitness Class') }}</p>
                        </a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text>
                            <p>{{ lang('Meeting') }}</p>
                        </a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text>
                            <p>{{ lang('Networking Event') }}</p>
                        </a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text>
                            <p>{{ lang('Party') }}</p>
                        </a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text>
                            <p>{{ lang('Performance') }}</p>
                        </a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text>
                            <p>{{ lang('Photo Shoot') }}</p>
                        </a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text>
                            <p>{{ lang('Pop-Up') }}</p>
                        </a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text>
                            <p>{{ lang('Retreat') }}</p>
                        </a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text>
                            <p>{{ lang('Wedding') }}</p>
                        </a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text>
                            <p>{{ lang('Workshop') }}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Signup-Modal-->
<div class="modal fade" id="signup-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal">
            <div class="modal-header">
                <h1 style="text-align:center;color:#000017" class="modal-title">
                    {{ lang("Create an account to book
                    a space") }}</h1><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control btn btn-default rounded-0"
                                    id="exampleInputEmail1" placeholder="{{ lang('Email or phone number') }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control btn btn-default rounded-0"
                                    id="exampleInputPassword1" placeholder="{{ lang('Password') }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label mt-2 mb-2"></label>
                                <a style="height:46px;width:510;background-color:#003B95;color:#FFFFFF" type="password"
                                    class="form-control btn btn-info rounded-0" href="#" id="exampleInputPassword1">{{
                                    lang("Sign
                                    up") }}</a><br>
                                <p style="height:39px;width:460px;color:#6B6B6B;padding-right:50px;text-align:center">
                                    {{ lang('By clicking Sign up, you agree to') }} <span
                                        style="text-decoration:underline;">
                                        {{ lang("Eventopia Services Agreement and Privacy Policy.") }}</span>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

