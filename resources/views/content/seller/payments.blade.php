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
                                                <form action="#" class="text-center" method="GET">
                                                    <button class="btn btn-primary mt-2 mb-0 ">Get
                                                        Started</button>
                                                </form>
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
@endsection

@section('scripts')
@endsection
