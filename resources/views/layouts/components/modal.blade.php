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
                <h4 class="text-danger">{{ lang('Atleast 4 and maximum 10 images are required.') }}</h4>
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

{{-- Search Filter Date and Time Modal --}}

<div class="modal fade" id="dateTimeModal">
    <div class="modal-dialog max-width_modal" role="document">
        <div class="modal-content modal-content-demo container-position">
            <div class="modal-header">
                <h6 class="modal-title">Select Time</h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row w-100 bg-white calendarAndTimePicker" id="calendarAndTimePicker">
                    <div class="col-lg-6 calendar-container-1">
                        <div class="calendar">
                            <div class="year-header">
                                <span class="left-button" id="prev"> <i class="fa fa-angle-double-left"></i>
                                </span>
                                <span class="year" id="label"> </span>
                                <span class="right-button" id="next"> <i class="fa fa-angle-double-right"></i>
                                </span>
                            </div>
                            <table class="months-table">
                                <tbody>
                                    <tr class="months-row">
                                        <td class="month week-f">{{ lang('Jan') }}</td>
                                        <td class="month week-f">{{ lang('Feb') }}</td>
                                        <td class="month week-f">{{ lang('Mar') }}</td>
                                        <td class="month week-f">{{ lang('Apr') }}</td>
                                        <td class="month week-f">{{ lang('May') }}</td>
                                        <td class="month week-f">{{ lang('June') }}</td>
                                        <td class="month week-f">{{ lang('July') }}</td>
                                        <td class="month week-f">{{ lang('Aug') }}</td>
                                        <td class="month week-f">{{ lang('Sep') }}</td>
                                        <td class="month week-f">{{ lang('Oct') }}</td>
                                        <td class="month week-f">{{ lang('Nov') }}</td>
                                        <td class="month week-f">{{ lang('Dec') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="days-table">
                                <td class="day week-f">{{ lang('Sun') }}</td>
                                <td class="day week-f">{{ lang('Mon') }}</td>
                                <td class="day week-f">{{ lang('Tue') }}</td>
                                <td class="day week-f">{{ lang('Wed') }}</td>
                                <td class="day week-f">{{ lang('Thu') }}</td>
                                <td class="day week-f">{{ lang('Fri') }}</td>
                                <td class="day week-f">{{ lang('Sat') }}</td>
                            </table>
                            <div class="frame">
                                <table class="dates-table">
                                    <tbody class="tbody-tb"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 dialog" id="dialog">
                        <h2 class="dialog-header mt-sm-7">{{ lang('Select Time') }}</h2>
                        <div class="form-container mt-sm-7 me-sm-6" align="center">
                            <label for="start_time" class="form-label mt-5 text-start startTime_label">{{ lang('Start
                                Time') }}</label>
                            <select name="start-time" class="Select_Time form-select mb-5" id="start_time" disabled>
                                <option value="6:00 AM">6:00 {{ lang('AM') }}</option>
                                <option value="6:30 AM">6:30 {{ lang('AM') }}</option>
                                <option value="7:00 AM">7:00 {{ lang('AM') }}</option>
                                <option value="7:30 AM">7:30 {{ lang('AM') }}</option>
                                <option value="8:00 AM">8:00 {{ lang('AM') }}</option>
                                <option value="8:30 AM">8:30 {{ lang('AM') }}</option>
                                <option value="9:00 AM">9:00 {{ lang('AM') }}</option>
                                <option value="9:30 AM">9:30 {{ lang('AM') }}</option>
                                <option value="10:00 AM">10:00 {{ lang('AM') }}</option>
                                <option value="10:30 AM">10:30 {{ lang('AM') }}</option>
                                <option value="11:00 AM">11:00 {{ lang('AM') }}</option>
                                <option value="11:30 AM">11:30 {{ lang('AM') }}</option>
                                <option value="12:00 PM">12:00 {{ lang('PM') }}</option>
                                <option value="12:30 PM">12:30 {{ lang('PM') }}</option>
                                <option value="1:00 PM">1:00 {{ lang('PM') }}</option>
                                <option value="1:30 PM">1:30 {{ lang('PM') }}</option>
                                <option value="2:00 PM">2:00 {{ lang('PM') }}</option>
                                <option value="2:30 PM">2:30 {{ lang('PM') }}</option>
                                <option value="3:00 PM">3:00 {{ lang('PM') }}</option>
                                <option value="3:30 PM">3:30 {{ lang('PM') }}</option>
                                <option value="4:00 PM">4:00 {{ lang('PM') }}</option>
                                <option value="4:30 PM">4:30 {{ lang('PM') }}</option>
                                <option value="5:00 PM">5:00 {{ lang('PM') }}</option>
                                <option value="5:30 PM">5:30 {{ lang('PM') }}</option>
                                <option value="6:00 PM">6:00 {{ lang('PM') }}</option>
                                <option value="6:30 PM">6:30 {{ lang('PM') }}</option>
                                <option value="7:00 PM">7:00 {{ lang('PM') }}</option>
                                <option value="7:30 PM">7:30 {{ lang('PM') }}</option>
                                <option value="8:00 PM">8:00 {{ lang('PM') }}</option>
                                <option value="8:30 PM">8:30 {{ lang('PM') }}</option>
                                <option value="9:00 PM">9:00 {{ lang('PM') }}</option>
                                <option value="9:30 PM">9:30 {{ lang('PM') }}</option>
                                <option value="10:00 PM">10:00 {{ lang('PM') }}</option>
                                <option value="10:30 PM">10:30 {{ lang('PM') }}</option>
                                <option value="10:00 PM">11:00 {{ lang('PM') }}</option>
                                <option value="10:30 PM">11:30 {{ lang('PM') }}</option>
                            </select>
                            <label for="end_time" class="form-label text-start endTime_label">{{ lang('End Time')
                                }}</label>
                            <select name="end-time" class="Select_Time form-select mb-5" id="end_time" disabled>
                                <option value="6:00 AM">6:00 {{ lang('AM') }}</option>
                                <option value="6:30 AM">6:30 {{ lang('AM') }}</option>
                                <option value="7:00 AM">7:00 {{ lang('AM') }}</option>
                                <option value="7:30 AM">7:30 {{ lang('AM') }}</option>
                                <option value="8:00 AM">8:00 {{ lang('AM') }}</option>
                                <option value="8:30 AM">8:30 {{ lang('AM') }}</option>
                                <option value="9:00 AM">9:00 {{ lang('AM') }}</option>
                                <option value="9:30 AM">9:30 {{ lang('AM') }}</option>
                                <option value="10:00 AM">10:00 {{ lang('AM') }}</option>
                                <option value="10:30 AM">10:30 {{ lang('AM') }}</option>
                                <option value="11:00 AM">11:00 {{ lang('AM') }}</option>
                                <option value="11:30 AM">11:30 {{ lang('AM') }}</option>
                                <option value="12:00 PM">12:00 {{ lang('PM') }}</option>
                                <option value="12:30 PM">12:30 {{ lang('PM') }}</option>
                                <option value="1:00 PM">1:00 {{ lang('PM') }}</option>
                                <option value="1:30 PM">1:30 {{ lang('PM') }}</option>
                                <option value="2:00 PM">2:00 {{ lang('PM') }}</option>
                                <option value="2:30 PM">2:30 {{ lang('PM') }}</option>
                                <option value="3:00 PM">3:00 {{ lang('PM') }}</option>
                                <option value="3:30 PM">3:30 {{ lang('PM') }}</option>
                                <option value="4:00 PM">4:00 {{ lang('PM') }}</option>
                                <option value="4:30 PM">4:30 {{ lang('PM') }}</option>
                                <option value="5:00 PM">5:00 {{ lang('PM') }}</option>
                                <option value="5:30 PM">5:30 {{ lang('PM') }}</option>
                                <option value="6:00 PM">6:00 {{ lang('PM') }}</option>
                                <option value="6:30 PM">6:30 {{ lang('PM') }}</option>
                                <option value="7:00 PM">7:00 {{ lang('PM') }}</option>
                                <option value="7:30 PM">7:30 {{ lang('PM') }}</option>
                                <option value="8:00 PM">8:00 {{ lang('PM') }}</option>
                                <option value="8:30 PM">8:30 {{ lang('PM') }}</option>
                                <option value="9:00 PM">9:00 {{ lang('PM') }}</option>
                                <option value="9:30 PM">9:30 {{ lang('PM') }}</option>
                                <option value="10:00 PM">10:00 {{ lang('PM') }}</option>
                                <option value="10:30 PM">10:30 {{ lang('PM') }}</option>
                                <option value="10:00 PM">11:00 {{ lang('PM') }}</option>
                                <option value="10:30 PM">11:30 {{ lang('PM') }}</option>
                            </select>
                            <button type="button" class="clear_button-1 float-start mb-5 mb-lg-0 ms-md-9 mt-lg-6" id="clear-button">{{
                                lang('Clear') }}</button>
                            <button type="button" class="clear_button-2 me-md-9 mb-5 mb-lg-0 float-end mt-lg-6" onclick="selected()">{{
                                lang('Save') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Filter Bar Keyword modal --}}
<div class="modal fade" id="modaldemo4">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body p-4 pb-5" style="overflow: auto; height: 700px;">
                <div class="modal-header" style="position: sticky; top: -17; background-color: #fff; z-index: 9999;">
                    <h5 class="modal-title">Filters</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="container-fluid">
                <div class='row'>                    
                    <div class='col-12'>
                        <h3 class='mt-5'><b>keyword</b></h3>
                        <input type='text' class='form-control' id="planCatagories-12" placeholder='Enter a keyword'>
                        <ul class="dropdown-menu w-100 position-relative" id="categoryDropdown-12" style="top: -8px;"></ul>
                    </div>
                </div>
                <div id="drop_tags" class="mt-3 fw-bold"></div>
                <div class="row d-block d-md-none">
                    <div class="col-12 my-3">
                        <hr class='bg-dark'>
                        <h3 class="mt-4"><b>Price</b></h3>
                        <button type="button" id="guestsButton"
                            class="btn btn-outline button-radias w-style dropdown-toggle text-dark btn_background px-0 w-100"
                            data-bs-toggle="dropdown">
                            {{ lang('Price') }} <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu price-nav" id="dropdownMenuPrice" role="menu">
                            <div class="custom-controls-stacked">
                                <form action="#" method="get" class="ms-2">
                                    <div class="px-5 pt-5 pb-2">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" onclick="selected()" class="custom-control-input" name="price"
                                                value="5000">
                                            <span
                                                class="custom-control-label">{{ lang('0 to ') }}{{ 'SAR 5000' }}</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" onclick="selected()" class="custom-control-input" name="price"
                                                value="10000">
                                            <span
                                                class="custom-control-label">{{ 'SAR 5000 to SAR 10000' }}</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" onclick="selected()" class="custom-control-input" name="price"
                                                value="50000">
                                            <span
                                                class="custom-control-label">{{'SAR 10000 to SAR 50000'}}</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" onclick="selected()" class="custom-control-input" name="price"
                                                value="50000">
                                            <span
                                                class="custom-control-label">{{'SAR 50000+' }}</span>
                                        </label>
                                    </div>
                                    <div class="row mt-5 mb-1">
                                        {{-- <div class="w-50">
                                            <a type="button" onclick="$('input[name="price"]').prop('checked', false).val('')" class="float-start text-dark p-3">Clear</a>
                                        </div> --}}
                                        <div class="w-50">
                                            <a type="button" onclick="selected()"
                                                class="float-end bg-primary py-2 px-5 me-3 text-white" id="doneButton"><b>Done</b></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </ul>
                    </div>                   
                    <div class="col-12">
                        <h3 class="mt-4"><b>Attendees</b></h3>
                        <button type="button" id="attendeesButton"
                            class="btn btn-outline dropdown-toggle w-style button-radias text-dark btn_background"
                            data-bs-toggle="dropdown">
                            <span class="attendees- span_attendees">{{ lang('Attendees') }}</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu price-nav" id="dropdownMenuAttendees" role="menu">
                            <div class="custom-controls-stacked">
                                <form action="#" method="get" class="ms-2">
                                    <div class="px-5 pt-5 pb-2">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests"
                                                value="10">
                                            <span class="custom-control-label">{{ lang('1 to 10') }}</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests"
                                                value="25">
                                            <span class="custom-control-label">{{ lang('11 to 25') }}</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests"
                                                value="50">
                                            <span class="custom-control-label">{{ lang('26 to 50') }}</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests"
                                                value="100">
                                            <span class="custom-control-label">{{ lang('51 to 100') }}</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests"
                                                value="500">
                                            <span class="custom-control-label">{{ lang('Over 100') }}</span>
                                        </label>
                                    </div>
                                    <div class="row mt-5 mb-1">
                                        {{-- <div class="w-50">
                                        <a type="button" id="guestsClear" class="float-start text-dark p-3">Clear</a>
                                    </div> --}}
                                        <div class="w-50">
                                            <a type="button" onclick="selected()"
                                                class="float-end bg-primary py-2 px-5 me-3 text-white"
                                                id="doneButton"><b>Done</b></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </ul>
                    </div>
                </div>
                <hr class='bg-dark'>
                    <h3 class='mt-5'><b>Outdoor Spaces</b></h3>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-1" required>
                                <label class="form-check-label" for="invalidCheck-1">
                                    <p>{{lang('Backyard')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-2" required>
                                <label class="form-check-label" for="invalidCheck-2">
                                    <p>{{lang('Beach')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-3" required>
                                <label class="form-check-label" for="invalidCheck-3">
                                    <p>{{lang('Garden')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-4" required>
                                <label class="form-check-label" for="invalidCheck-4">
                                    <p>{{lang('Exterior')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-5" required>
                                <label class="form-check-label" for="invalidCheck-5">
                                    <p>{{lang('Lawn')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-6" required>
                                <label class="form-check-label" for="invalidCheck-6">
                                    <p>{{lang('Patio')}}</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr class='bg-dark'>
                    <h3 class='mt-5'><b>Interior Spaces</b></h3>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-7" required>
                                <label class="form-check-label" for="invalidCheck-7">
                                    <p>{{lang('Bathroom')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-8" required>
                                <label class="form-check-label" for="invalidCheck-8">
                                    <p>{{lang('Bedroom')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-9" required>
                                <label class="form-check-label" for="invalidCheck-9">
                                    <p>{{lang('Dining Area')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-01" required>
                                <label class="form-check-label" for="invalidCheck-01">
                                    <p>{{lang('Garage')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-02" required>
                                <label class="form-check-label" for="invalidCheck-02">
                                    <p>{{lang('Home Office')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-03" required>
                                <label class="form-check-label" for="invalidCheck-03">
                                    <p>{{lang('Kids Room')}}</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr class='bg-dark'>
                    <h3 class='mt-5'><b>Style</b></h3>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-04" required>
                                <label class="form-check-label" for="invalidCheck-04">
                                    <p>{{lang('Bohemian')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-05" required>
                                <label class="form-check-label" for="invalidCheck-05">
                                    <p>{{lang('Coastal / Beachy')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-06" required>
                                <label class="form-check-label" for="invalidCheck-06">
                                    <p>{{lang('Colorful')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-07" required>
                                <label class="form-check-label" for="invalidCheck-07">
                                    <p>{{lang('Farmhouse')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-08" required>
                                <label class="form-check-label" for="invalidCheck-08">
                                    <p>{{lang('Industrial')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-09" required>
                                <label class="form-check-label" for="invalidCheck-09">
                                    <p>{{lang('Loft')}}</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr class='bg-dark'>
                    <h3 class='mt-5'><b>Space Type</b></h3>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-001" required>
                                <label class="form-check-label" for="invalidCheck-001">
                                    <p>{{lang('Apartment')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-002" required>
                                <label class="form-check-label" for="invalidCheck-002">
                                    <p>{{lang('Banquet Hall')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-003" required>
                                <label class="form-check-label" for="invalidCheck-003">
                                    <p>{{lang('Bar')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-004" required>
                                <label class="form-check-label" for="invalidCheck-004">
                                    <p>{{lang('Church')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck--005" required>
                                <label class="form-check-label" for="invalidCheck--005">
                                    <p>{{lang('Classroom')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-006" required>
                                <label class="form-check-label" for="invalidCheck-006">
                                    <p>{{lang('Conference Room')}}</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr class='bg-dark'>
                    <div class='row mt-3'>
                        <div class='col-12'>
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment-1"
                                    type="checkbox" value="Company Payment" id="invalidCheck-007"
                                    required>
                                <label class="form-check-label" for="invalidCheck-007">
                                    <p class='mb-0'><b>{{lang('Enhanced health and safety measures')}}</b></p>
                                    <p>{{lang('Only show listings from hosts who have taken extra health and safety precautions')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class='col-12'>
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment-2"
                                    type="checkbox" value="Company Payment" id="invalidCheck-008"
                                    required>
                                <label class="form-check-label" for="invalidCheck-008">
                                    <p class='mb-0'><b>{{lang('Instant Book')}}</b></p>
                                    <p>{{lang('Only see spaces that can be instantly booked')}}</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr class='bg-dark'>
                    <h3 class='mt-5'><b>Amenities</b></h3>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-0001" required>
                                <label class="form-check-label" for="invalidCheck-0001">
                                    <p>{{lang('Deck')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-0002" required>
                                <label class="form-check-label" for="invalidCheck-0002">
                                    <p>{{lang('Elevator')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-0003" required>
                                <label class="form-check-label" for="invalidCheck-0003">
                                    <p>{{lang('Exposed Brick')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-0004" required>
                                <label class="form-check-label" for="invalidCheck-0004">
                                    <p>{{lang('Fire Pit')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck--0005" required>
                                <label class="form-check-label" for="invalidCheck--0005">
                                    <p>{{lang('Fireplace')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input filter_checkbox" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-0006" required>
                                <label class="form-check-label" for="invalidCheck-0006">
                                    <p>{{lang('Gazebo')}}</p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="position: sticky; bottom: -25; background-color: #fff; z-index: 9999;">
                    <h5 class="modal-title"><a href="#" id="clearAllButton">Clear all</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>
