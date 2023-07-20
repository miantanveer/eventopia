<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash –  Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="SPRUKO™">
    <meta name="keywords"
        content="admin, admin dashboard, admin dashboard template, bootstrap admin, bootstrap dashboard, dashboard laravel, dashboard template, laravel admin, laravel admin dashboard, laravel admin dashboard template, laravel admin panel, laravel admin template, laravel dashboard template, laravel template, laravel ui template">

    <!-- title -->
    <title>Eventopia</title>

    @include('layouts.components.styles')

</head>

<body class="app sidebar-mini ltr">

    <!-- global-loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- global-loader closed -->

    <!-- page -->
    <div class="page">
        <div class="page-main">

            @include('layouts.customer.customer-header')

            <!--app-content open-->
            <div class="main-content app-content pt-5" style="background-color: #ffffff">
                <div class="side-app">

                    <!-- container -->
                    <div class="main-container container">
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
                                                            <li><a href="#tab5" class="active"
                                                                    data-bs-toggle="tab">Payouts</a></li>
                                                            <li><a href="#tab6" data-bs-toggle="tab"
                                                                    class="">Payment methods</a></li>
                                                            <li><a href="#tab7" data-bs-toggle="tab"
                                                                    class="">Taxes</a></li>
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
                                                                    <form action="#" class="text-center"
                                                                        method="GET">
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
                                                                                                    <input
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="CardHolder Name"
                                                                                                        fdprocessedid="mzrea">
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <div
                                                                                                        class="input-group">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            placeholder="Card number"
                                                                                                            fdprocessedid="5pnw7d">
                                                                                                        <span
                                                                                                            class="input-group-text btn shadow-none">
                                                                                                            <i
                                                                                                                class="fa fa-cc-visa"></i>
                                                                                                            &nbsp;
                                                                                                            <i
                                                                                                                class="fa fa-cc-mastercard"></i>
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-sm-8">
                                                                                                        <div
                                                                                                            class="form-group">
                                                                                                            <label
                                                                                                                class="form-label">Expiration</label>
                                                                                                            <div
                                                                                                                class="input-group">
                                                                                                                <input
                                                                                                                    type="number"
                                                                                                                    class="form-control"
                                                                                                                    placeholder="MM"
                                                                                                                    name="Month"
                                                                                                                    fdprocessedid="jrtltr">
                                                                                                                <input
                                                                                                                    type="number"
                                                                                                                    class="form-control"
                                                                                                                    placeholder="YY"
                                                                                                                    name="Year"
                                                                                                                    fdprocessedid="h6g1po">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-4">
                                                                                                        <div
                                                                                                            class="form-group">
                                                                                                            <label
                                                                                                                class="form-label">CVV
                                                                                                                <i class="fa fa-question-circle"
                                                                                                                    data-bs-placement="top"
                                                                                                                    data-bs-toggle="tooltip"
                                                                                                                    title=""
                                                                                                                    data-bs-original-title="CVV is the last three digits on the back of your credit card"
                                                                                                                    aria-label="CVV is the last three digits on the back of your credit card"></i></label>
                                                                                                            <input
                                                                                                                type="number"
                                                                                                                class="form-control"
                                                                                                                required=""
                                                                                                                fdprocessedid="psrgs">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-12">
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
                                                                                                    <div
                                                                                                        class="col-8">
                                                                                                        <p>23408 Bernier
                                                                                                            Cliff Suite
                                                                                                            526</p>
                                                                                                        <p>West Daphne
                                                                                                            California
                                                                                                            80918-9792,
                                                                                                            United
                                                                                                            States</p>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-4 text-end">
                                                                                                        <div
                                                                                                            class="btn btn-outline-primary">
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
                                                                        <p class="mb-4 mt-4 mx-4">There is no tax information at this time.</p>
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
                    <!-- container-closed -->
                </div>
            </div>
            <!--app-content closed-->
        </div>
        <!-- page-main closed -->

        @include('layouts.components.modal')

        @yield('modal')

    </div>
    <!-- page -->

    <!-- global-helper -->
    <div id="global-helper" class="position-fixed bottom-0 end-0 p-3">
        <div class="dropup btn-group mt-2 mb-2">
            <button class="btn-pill text-end p-2 text-info bg-white border-info " type="button"
                data-bs-toggle="dropdown" aria-expanded="true" id="global-helper-btn">Do you need Help?</button>
            <ul class="dropdown-menu"
                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(0px, -40px, 0px);"
                data-popper-placement="top-start">
                <form id="contactForm">
                    <div class="row">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="exampleInputPassword1"
                                placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="text-center">
                        <!-- Add a container with "text-center" class -->
                        <button class="btn btn-primary mt-2 mb-0 ">Submit</button>
                    </div>
                </form>
            </ul>
        </div>
    </div>
    <!-- global-helper closed -->

    @include('layouts.space.space-detail-footer')

    @include('layouts.components.scripts')

    <!--- TABS JS -->
    <script src="{{ asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js') }}"></script>
    <script src="{{ asset('assets/plugins/tabs/tab-content.js') }}"></script>

    <!-- Custom JavaScript code -->
    <script>
        $(document).ready(function() {
            $(document).on("submit", "#contactForm", function(e) {
                e.preventDefault();
                $('body').addClass('timer-alert');
                swal({
                    title: "Success.",
                    text: "We will contact you shortly.",
                    timer: 2000,
                    showConfirmButton: false
                });
            });
            $('#all_select').on('click', function() {
                var isChecked = $('#first_card').prop('checked');
                $('#first_card').prop('checked', !isChecked);
                $('#second_card').prop('checked', !isChecked);
                $('#third_card').prop('checked', !isChecked);
            });
        });
    </script>

</body>

</html>
