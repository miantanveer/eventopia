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

    @include('layouts.components.custom-styles')

</head>

<body class="">

    @yield('class')

    <!-- global-loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- global-loader closed -->

    <!-- PAGE -->
    <div class="page">

        @yield('content')

    </div>
    <!-- End PAGE -->

    <!-- global-helper -->
    <div id="global-helper" class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999;">
        <div class="dropdown btn-group mt-2 mb-2">
            <div class="btn-group mt-2 mb-2">
                <button class="btn btn-pill btn-white border-info text-end dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" id="global-helper-btn">Do
                    you need Help?</button>
                <div class="dropdown-menu w-260" style="">
                    <form class="card-body pt-3" id="contactForm">
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Enter your Name" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Enter Phone Number" type="text">
                        </div>
                        <div class="submit">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- global-helper closed -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    @include('layouts.components.custom-scripts')

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
