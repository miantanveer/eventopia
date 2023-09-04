@extends('layouts.app2')

@section('styles')
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="container">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Payments</h3>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-primary">
                            <div class=" tab-menu-heading">
                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#tab5" class="active" data-bs-toggle="tab">Payouts</a></li>
                                        <li><a href="#tab6" data-bs-toggle="tab" class="">Payment methods</a>
                                        </li>
                                        <li><a href="#tab7" data-bs-toggle="tab" class="">Taxes</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="card" id="modal3">
                                            <div class="card-body text-center border p-4 pb-5">
                                                <p class="mb-4 mt-4 mx-4">There are no payouts to
                                                    show yet</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab6">
                                        <div class="card" id="modal3">
                                            <div class="card-header border">
                                                <h3 class="card-title fw-bolder">Direct Deposit</h3>
                                            </div>
                                            <div class="card-body border p-4 pb-5">
                                                <p class="mb-4 mx-4">Add a bank account so you can
                                                    get paid after completing a booking.</p>
                                                <a class="modal-effect btn btn-primary-light mb-3"
                                                    data-bs-effect="effect-slide-in-right" data-bs-toggle="modal"
                                                    href="#add_new_modal">Get Started</a>
                                            </div>
                                        </div>
                                        <div class="card" id="modal3">
                                            <div class="card-header border">
                                                <h3 class="card-title fw-bolder">Credit Cards</h3>
                                            </div>
                                            <div class="card-body border p-4 pb-5">
                                                <p class="mb-4 mx-4">Adding a credit card allows
                                                    Eventopia to charge you for reserved bookings.
                                                    This information is securely sent to our payment
                                                    provider and
                                                    never stored by Eventopia.</p>
                                                <div class="">
                                                    <div class="mt-3">
                                                        <h5 class="fw-bolder">Add Credit Card</h5>
                                                    </div>
                                                    <div class="">
                                                        <div class="">
                                                            <div class="tab-content">
                                                                <div class="tab-pane active show">
                                                                    <div class="col-md-7 col-12">
                                                                        <form action="">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="CardHolder Name"
                                                                                    fdprocessedid="mzrea">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="input-group">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Card number"
                                                                                        fdprocessedid="5pnw7d">
                                                                                    <span
                                                                                        class="input-group-text btn shadow-none">
                                                                                        <i class="fa fa-cc-visa"></i>
                                                                                        &nbsp;
                                                                                        <i class="fa fa-cc-mastercard"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-8">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            class="form-label">Expiration</label>
                                                                                        <div class="input-group">
                                                                                            <input type="number"
                                                                                                class="form-control"
                                                                                                placeholder="MM"
                                                                                                name="Month"
                                                                                                fdprocessedid="jrtltr">
                                                                                            <input type="number"
                                                                                                class="form-control"
                                                                                                placeholder="YY"
                                                                                                name="Year"
                                                                                                fdprocessedid="h6g1po">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">CVV
                                                                                            <i class="fa fa-question-circle"
                                                                                                data-bs-placement="top"
                                                                                                data-bs-toggle="tooltip"
                                                                                                title=""
                                                                                                data-bs-original-title="CVV is the last three digits on the back of your credit card"
                                                                                                aria-label="CVV is the last three digits on the back of your credit card"></i></label>
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            required=""
                                                                                            fdprocessedid="psrgs">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <a href="javascript:void(0)"
                                                                                        class="btn w-100 btn-lg btn-primary">Submit</a>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card" id="modal3">
                                            <div class="card-header border">
                                                <h3 class="card-title fw-bolder">Billing Address
                                                </h3>
                                            </div>
                                            <div class="card-body border p-4 pb-5">
                                                <p class="mb-4 mx-4">Used when processing payouts
                                                    and payments.</p>
                                                <div class="">
                                                    <div class="">
                                                        <div class="">
                                                            <div class="tab-content">
                                                                <div class="tab-pane active show">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-8">
                                                                                    <p>23408 Bernier
                                                                                        Cliff Suite
                                                                                        526</p>
                                                                                    <p>West Daphne
                                                                                        California
                                                                                        80918-9792,
                                                                                        United
                                                                                        States</p>
                                                                                </div>
                                                                                <div class="col-4 text-end">
                                                                                    <div class="btn btn-outline-primary">
                                                                                        Update
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab7">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="card" id="modal3">
                                                <div class="card-body text-center border p-4 pb-5">
                                                    <p class="mb-4 mt-4 mx-4">There is no tax
                                                        information at this time.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="add_new_modal" role="dialog" style="z-index: 9999;">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content modal-data">
                <form method="POST" class=" custom-validation" action="{{route('add-bank-account')}}">
                    <input type="hidden" name="user_type" id="user_type" value="1" />
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Bank Account Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="response_msg"></div>
                        @csrf
                        <div class="row d-flex justify-content-between flex-wrap">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="bank_name">Bank Name</label>
                                <input type="text" class="form-control" id="bank_name" placeholder="Bank Name"
                                    name="bank_name" data-parsley-required-message="Bank Name is Required*" required>
                                <span id="loc_err" class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label required" class="control-label">Country Of Bank</label>
                                <select style="width:100%;" class="form-select beautyselect"
                                    data-parsley-required-message="Country of Bank is Required*" name="country" required
                                    id="country">
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}"
                                            {{ old('country') == $country->id ? 'selected' : '' }}>
                                            {{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="bank_number">Account Number</label>
                                <input type="text" class="form-control" id="bank_number" placeholder="Account Number"
                                    name="bank_number" data-parsley-required-message="Account Number is Required*"
                                    required>
                                <span id="Address_err" class="text-danger">
                                    @error('location')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="swift_code">Swift Code</label>
                                <input type="text" class="form-control" id="swift_code" placeholder="Swift Code"
                                    name="swift_code" data-parsley-required-message="Swift Code is Required*" required>
                                <span id="Address_err" class="text-danger">
                                    @error('location')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="bank_address">Bank Address</label>
                                <input type="text" class="form-control" id="bank_address" placeholder="Bank Address"
                                    name="bank_address" data-parsley-required-message="Bank Address is Required*"
                                    required>
                                <span id="Address_err" class="text-danger">
                                    @error('location')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" class="control-label">Account Holder
                                    Name</label>
                                <input type="text" class="form-control" id="title"
                                    placeholder="Account Holder Name" name="account_title"
                                    data-parsley-required-message="Title is Required*" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div class="form-group">
                                    <label for="bank_status" class="form-label" class="control-label">Select
                                        Status</label>
                                    <select id="bank_status" class="form-control" name="bank_status"
                                        data-parsley-required-message="Status is Required*" required>
                                        <option value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div class="form-group">
                                    <label for="account_type" class="form-label" class="control-label">Select Account
                                        Type</label>
                                    <select id="account_type" class="form-control" name="account_type"
                                        data-parsley-required-message="Status is Required*" required>
                                        <option value="">Select Account Type</option>
                                        <option value="1">Personal Current Account</option>
                                        <option value="2">Personal Saving Account</option>
                                        <option value="3">Business Current Account</option>
                                        <option value="4">Business Saving Account</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary w-sm waves-effect waves-light invite-btn" type="submit"
                            style="background-color: #34C38F;
                                    border-color: #34C38F;">Add</button>
                        <button style="display: none;"
                            class="btn btn-primary w-sm waves-effect waves-light disabled loading-btn" type="button"><i
                                class="fa fa-spinner fa-spin"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
