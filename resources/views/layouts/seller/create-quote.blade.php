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
    @include('layouts.seller.seller-header')

    <!-- page -->
    <div class="main-page">
            <!--app-content open-->
            <div class="main-content app-content pt-7 pb-5" style="background-color: #ffffff">
                <div class="side-app">
                    <!-- container -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-xl-12">
                                        <div class="card border">
                                            <div class="text-center mt-2">
                                                <h3><b>Service Quote for customer</b></h3>
                                                <p>This quote is made for the service Wedding Planner</p>
                                            </div>
                                            <hr class="m-0 bg-dark">
                                            <form action="">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="exampleInputPhone2" placeholder="Service type" >
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Location" >
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="date" class="form-control" id="exampleInputPhone2" placeholder="Wedding date" >
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Number of guests" >
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea class="form-control" id="exampleInputEmail1" placeholder="Description" style="height: 100px" ></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="exampleInputPhone2" placeholder="Amount" >
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Sub Total" >
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="exampleInputPhone2" placeholder="Vat %" >
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Admin fees" >
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="file" class="form-control" id="exampleInputPhone2" placeholder="Images" >
                                                            </div>
                                                            <div class="float-end">
                                                                <a href="#" class="me-3" >Preview</a>
                                                                <input type='submit' class="btn btn-primary text-white px-6" id='quote-btn' value="Send">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
            $("#contactForm").on("submit", function(e) {
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
        $('#quote-btn').on("click", function(e) {
            $('body').addClass('timer-alert');
            swal({
                title: 'Quotation sent',
                text: 'Your quotation has been sent to customer. Wait for the response.',
                timer: 3000
            });
        });
    </script>

</body>

</html>
