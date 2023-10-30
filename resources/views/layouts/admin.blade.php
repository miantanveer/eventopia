<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Eventopia  –  Admin Dashboard">
    <meta name="author" content="SPRUKO™">
    <meta name="keywords"
        content="admin, admin dashboard, admin dashboard template, bootstrap admin, bootstrap dashboard, dashboard laravel, dashboard template, laravel admin, laravel admin dashboard, laravel admin dashboard template, laravel admin panel, laravel admin template, laravel dashboard template, laravel template, laravel ui template">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- title -->
    <title>Eventopia – Admin Dashboard</title>

    @include('layouts.components.styles')
    @stack('css')
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

            @include('layouts.components.admin-header')

            @include('layouts.components.admin-sidebar')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- container -->
                    <div class="main-container container-fluid">

                        @yield('content')

                    </div>
                    <!-- container-closed -->
                </div>
            </div>
            <!--app-content closed-->
        </div>

        <div class="modal fade" id="modal-opener">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3></h3>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                            data-bs-original-title="" title=""><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">...</div>
                </div>
            </div>
        </div>
        <!-- page-main closed -->

        @include('layouts.components.sidebar-right')

        @include('layouts.components.admin-modal')

        @yield('modal')

        @include('layouts.components.admin-footer')

    </div>
    <!-- page -->

    @include('layouts.components.admin-scripts')
    @include('layouts.components.notification-scripts')

    <script>
        $(function() {
            'use strict';

            var modal = document.getElementById('modal-opener')

            $('.update_btn').click(function(event) {

                var url = $(this).attr('data-url');
                var title = $(this).attr('data-title');

                $.ajax({
                    url: url,
                    success: function(data) {
                        $('#modal-opener .modal-body').html(data);
                        $('#modal-opener h3').html(title);
                        $("#modal-opener").modal('show');
                    }
                });

            });
        });
    </script>

    @stack('js')

</body>

</html>
