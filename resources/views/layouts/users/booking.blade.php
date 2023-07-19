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
                            <div class="col-12 mt-5 ">
                                <div class="card" id="modal3">
                                    <div class="card-body text-center border p-4 pb-5">
                                        <i class="fa fa-calendar fs-30 text-primary lh-1 my-4 d-inline-block"></i>
                                        <p class="mb-4 mx-4">You have no upcoming bookings.</p>
                                        <form action="#" method="GET">
                                            <button class="btn btn-primary mt-2 mb-0 ">Book Now</button>
                                        </form>
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

        <!-- INTERNAL Bootstrap-Datepicker js-->
        <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

        <!-- SELECT2 JS -->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.js') }}"></script>

        <!-- SWEET-ALERT JS -->
        <script src="{{ asset('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('assets/js/sweet-alert.js') }}"></script>

        <!-- INTERNAL Bootstrap-Datepicker js-->
        <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>


        <!-- TIMEPICKER JS -->
        <script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
        <script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script>


        <!-- DATEPICKER JS -->
        <script src="{{ asset('assets/plugins/date-picker/date-picker.js') }}"></script>
        <script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
        <script src="{{ asset('assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>


        <!-- FORMELEMENTS JS -->
        <script src="{{ asset('assets/js/formelementadvnced.js') }}"></script>
        <script src="{{ asset('assets/js/form-elements.js') }}"></script>


        <!-- OWL CAROUSEL JS-->
        <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>

        <!-- OWL Carousel js -->
        <script src="{{ asset('assets/js/carousel.js') }}"></script>

        <!-- ACCORDION JS -->
        <script src="{{ asset('assets/plugins/accordion/accordion.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/accordion/accordion.js') }}"></script>

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
