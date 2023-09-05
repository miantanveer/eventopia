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
                                        <li><a href="#tab8" data-bs-toggle="tab" class="">Accounts</a></li>
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
                                                <div class="row">
                                                    <div class="col-9">
                                                        <p class="my-3 mx-4">Add a bank account so you can
                                                            get paid after completing a booking.</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <a class="modal-effect btn btn-primary-light"
                                                            data-bs-effect="effect-slide-in-right" data-bs-toggle="modal"
                                                            href="#add_new_modal">Get Started</a>
                                                    </div>
                                                </div>
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
                                        <div class="tab-pane active">
                                            <div class="card" id="modal3">
                                                <div class="card-body text-center border p-4 pb-5">
                                                    <p class="mb-4 mt-4 mx-4">There is no tax
                                                        information at this time.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab8">
                                        <div class="tab-pane active">
                                            <div class="card" id="modal3">
                                                @forelse (@$bankAccounts as $bankAccount)
                                                    <table id="example2"
                                                        class="table text-nowrap border rounded-3 dataTable no-footer dtr-inline p-0"
                                                        role="grid" aria-describedby="example2_info">
                                                        <thead class="table_head_row">
                                                            <tr role="row" class="text-center">
                                                                <th class="p-4"> Bank Name</th>
                                                                <th class="p-4"> Account Title</th>
                                                                <th class="p-4"> Country</th>
                                                                <th class="p-4"> Account Number</th>
                                                                <th class="p-4"> Swift Code</th>
                                                                <th class="p-4"> Address</th>
                                                                <th class="p-4"> Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="text-center">
                                                                <td class="p-4">{{ @$bankAccount->bank_name }}</td>
                                                                <td class="p-4">{{ @$bankAccount->account_title }} </td>
                                                                <td class="p-4">{{ @$bankAccount->country->name }} </td>
                                                                <td class="p-4">{{ @$bankAccount->account_number }}</td>
                                                                <td class="p-4">{{ @$bankAccount->swift_code }}</td>
                                                                <td class="p-4">{{ @$bankAccount->bank_address }}</td>
                                                                <td class="text-end">
                                                                    <a class="modal-effect btn btn-danger"
                                                                        onclick="deleteModal('{{ route('delete-bank-account', @$bankAccount->id) }}')">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                @empty
                                                <div class="card-body text-center border p-4 pb-5">
                                                    <p class="mb-4 mt-4 mx-4">There is no Account
                                                        information at this time.</p>
                                                </div>
                                                @endforelse
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
                <form method="POST" data-parsley-validate id="bank_form" action="{{ route('add-bank-account') }}">
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
                                    data-parsley-required-message="Country of Bank is Required*" name="country_id"
                                    required id="country">
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
                                    name="account_number" data-parsley-required-message="Account Number is Required*"
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
                            {{-- <div class="mb-3 col-md-6">
                                <div class="form-group">
                                    <label for="bank_status" class="form-label" class="control-label">Select
                                        Status</label>
                                    <select id="bank_status" class="form-control" name="account_status"
                                        data-parsley-required-message="Status is Required*" required>
                                        <option value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div> --}}
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

    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body text-center p-4 pb-5">
                    <button aria-label="Close" class="btn-close position-absolute" data-bs-dismiss="modal"><span
                            aria-hidden="true">&times;</span></button>
                    <i class="icon icon-close fs-70 text-danger lh-1 my-5 d-inline-block"></i>
                    <form action="" id="delete-form" method="POST">
                        @csrf
                        <h2 class="text-danger">Warning!</h2>
                        <h4 class="text-danger">Are you sure you want to delete this Account?</h4>
                        <p class="mg-b-20 mg-x-20">This action is not repeatable.</p>
                        <button class="btn btn-danger pd-x-25">Continue</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#bank_form').parsley();
        });
    </script>
    <script>
        function deleteModal(url) {
            $('#delete-form').attr('action', url);
            $('#deleteModal').modal('show');
        }
    </script>
@endsection
