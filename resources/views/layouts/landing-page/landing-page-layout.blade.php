<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Eventopia">
    <meta name="author" content="SPRUKO™">
    <meta name="keywords" content="">

    <!-- title -->
    <title>Eventopia | Landing Page</title>

    @include('layouts.components.styles')
    <style>
        .content {
            position: relative;
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url('{{ asset("assets/images/brand/landing_page_img.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .jumps-prevent {
            padding-top: 0px !important;
        }

        /* .logo-horizontal {
            z-index: 9999 !important;
        } */

        .header {
            background-color: transparent !important;
            border-bottom: 0px !important;
        }

        .form-control {
            border-color: white !important;
            line-height: 0.0;
        }

        #form-border {
            background-color: #ffffff;
        }

        #form-border input {
            background-color: #ffffff;
        }

        .box-sizing {
            box-sizing: border-box;
        }

        .inline-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .input {
            border: none;
        }

        .border-end {
            border-left: #ACACAC !important;
        }

        .header-right-icons {
            z-index: 9999 !important;
        }

        .button {
            padding: 0.400rem 0.760rem !important;
        }

        .my-font-size {
            font-size: 0.79rem !important;
        }

        @media screen and (max-width: 767px) {
            .my-font-size {
                font-size: 0.68rem !important;
            }

            .font-size {
                font-size: 0.68rem !important;
            }
        }

        @media screen and (max-width: 575px) and (min-width: 344px) {
            .my-font-size {
                font-size: 0.9rem !important;
            }

            .font-size {
                font-size: 0.9rem !important;
            }

            .border-end {
                border: none !important;
            }

            .border-end0 {
                border-bottom: #ACACAC solid 1px !important;
                padding-bottom: 1rem !important;
            }

            .btn-search {
                width: 100% !important;
            }

            .font-size-h1 {
                font-size: 1.5rem !important;
            }
        }

        @media screen and (max-width: 345px) and (min-width: 0px) {
            .btn-search {
                width: 100% !important;
            }

            .border-end {
                border: none !important;
            }

            .border-end0 {
                border-bottom: #ACACAC solid 1px !important;
                padding-bottom: 1rem !important;
            }

            .font-size-h1 {
                margin-bottom: 30px !important;
                font-size: 1.1rem !important;
            }
        }
    </style>

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
<<<<<<< HEAD
            @include('layouts.components.landing-page-header')
            <img src="{{ asset('assets/images/brand/landing_page_img.jpg') }}" alt="">
            <div class="inline-form">
                <h1 class="h1 text-white fw-bold">Make an event that suits you</h1>
                <form action="{{URL('search-results')}}">
                    <div class="row bg-whiter justify-content-between text-start py-3 px-5 box-sizing" id="form-border">
=======
            <div class="content">
                @include('layouts.components.landing-page-header')
                <div class="inline-form container my-7 my-sm-3">
                    <h1 class="h1 text-white font-size-h1 fw-bold">Make an event that suits you</h1>
                    <form action="#" class="ms-5">
                        <div class="row bg-whiter justify-content-between text-start py-3 px-5 mx-5 mx-sm-0 box-sizing rounded-3"
                            id="form-border">
>>>>>>> frontend

                            <div class="col-sm-4 px-0 border-end border-end0">
                                <label class="mb-0 label-none my-font-size"><b>What have you got planned?</b></label>
                                <input type="text" class="form-control input py-0 px-0" id="searchTerm1"
                                    placeholder="Enter Your Activity">
                            </div>
                            <div class="col-sm-4 border-end border-end0 px-0 px-sm-3 my-3 my-sm-0">
                                <label class="mb-0 label-none font-size"><b>Where?</b></label>
                                <input type="text" class="form-control input py-0 px-0" id="searchTerm2"
                                    placeholder="Enter a City or Address">
                            </div>
                            <div class="col-sm-3 border-end0 pe-0 px-0 px-sm-3 mb-3 mb-sm-0">
                                <label class="mb-0 label-none font-size"><b>When?</b></label>
                                <input type="text" class="form-control input py-0 px-0" id="searchTerm3"
                                    placeholder="Anytime">
                            </div>
                            <div class="col-sm-1 text-end px-0">
                                <button type="submit"
                                    class="btn btn-primary rounded text-end button d-none d-sm-block"><i
                                        class="fa fa-search"></i></button>
                                <button type="submit"
                                    class="btn btn-primary btn-search mx-0 px-0 text-center d-sm-none d-block">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.components.modal')

    @yield('modal')
    <!-- page -->

    <!-- global-helper -->
    <div id="global-helper" class="position-fixed bottom-0 end-0 p-3">
        <div class="dropup btn-group mt-2 mb-2">
            <button class="btn-pill text-end p-2 text-info bg-white border-info " type="button"
                data-bs-toggle="dropdown" aria-expanded="true">Need any help?</button>
            <ul class="dropdown-menu"
                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(0px, -40px, 0px);"
                data-popper-placement="top-start">
                <form id="contactForm">
                    <div class="row">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
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
