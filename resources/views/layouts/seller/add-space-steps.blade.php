<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash –  Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="SPRUKO™">
    <meta name="keywords" content="admin, admin dashboard, admin dashboard template, bootstrap admin, bootstrap dashboard, dashboard laravel, dashboard template, laravel admin, laravel admin dashboard, laravel admin dashboard template, laravel admin panel, laravel admin template, laravel dashboard template, laravel template, laravel ui template">

    <!-- title -->
    <title>Eventopia</title>

    @include('layouts.components.styles')

</head>
<style>

</style>

<body class="app sidebar-mini ltr">

    <!-- global-loader -->
    <div id="global-loader">
        <img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <!-- global-loader closed -->

    <!-- page -->
    <div class="page">
        <div class="page-main">

            @include('layouts.components.seller-web-header')

            @include('layouts.components.seller-web-sidebar')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- container -->
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-12 mt-5 ">
                                <div class="card border overflow-hidden">
                                    <div class="card-header pb-0 border-bottom-0">
                                        <div class="row w-100 align-items-center">
                                            <div class="col-12">
                                                <h3 class="number-font mb-2">Hb, tell us about your service</h3>
                                            </div>
                                            <div class="col-12 pe-0">
                                                <p>The more you share, the faster you can get a booking.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 mt-5">
                                        <div class="col-12 px-0 px-sm-2">
                                            <div class="">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5><i class="fa fa-check-square text-primary"></i>&nbsp; 1.Location</h5>
                                                                <p class="ms-5">Enter your address</p>
                                                            </div>
                                                            <div class="col-6 text-end">
                                                                <button class="btn btn-primary mt-3" onclick="location.href = 'add-space-allsteps';">Start</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="">
                                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp; 2. Setup </h5>
                                                            <p class="ms-5">Add your space type, parking options, and surveillance devices</p>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="">
                                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp; 3. About your space </h5>
                                                            <p class="ms-5">Add a title, description, and rules</p>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="">
                                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp; 4. Photos </h5>
                                                            <p class="ms-5">Upload photos and select a cover image</p>
                                                        </div>
                                                    </li>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="">
                                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp;5. Availability </h5>
                                                            <p class="ms-5">Set your operating hours</p>
                                                        </div>
                                                    </li>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="">
                                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp;6. Cleaning </h5>
                                                            <p class="ms-5">Specify your cleaning protocol for guests</p>
                                                        </div>
                                                    </li>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="">
                                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp;7. Cancellations </h5>
                                                            <p class="ms-5">Select your cancellation policy</p>
                                                        </div>
                                                    </li>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="">
                                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp;8. Activities </h5>
                                                            <p class="ms-5">Pick the activities you’d like to host and set your price</p>
                                                        </div>
                                                    </li>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="">
                                                            <h5><i class="fa fa-check-square text-primary"></i> &nbsp;9. Profile</h5>
                                                            <p class="ms-5">Add a photo and contact information</p>
                                                        </div>
                                                    </li>

                                                </ul>
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
            <button class="btn-pill text-end p-2 text-info bg-white border-info " type="button" data-bs-toggle="dropdown" aria-expanded="true" id="global-helper-btn">Do you need Help?</button>
            <ul class="dropdown-menu" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(0px, -40px, 0px);" data-popper-placement="top-start">
                <form id="contactForm">
                    <div class="row">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="text-center"> <!-- Add a container with "text-center" class -->
                        <button class="btn btn-primary mt-2 mb-0 ">Submit</button>
                    </div>
                </form>
            </ul>
        </div>
    </div>
    <!-- global-helper closed -->

    @include('layouts.components.footer')

    @include('layouts.components.scripts')

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
        });
    </script>

</body>

</html>