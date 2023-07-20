<!-- app-Header -->
<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <div class="dropdown d-flex profile-1 d-lg-none">
                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                    <span class="navbar-toggler-icon fa fa-align-left text-white"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow edit-profile-3 first_drop">

                    <a class="dropdown-item" href="{{url('/edit-profile')}}">
                        <i class="dropdown-icon fa fa-cart-plus"></i> Cart
                    </a>
                    <a class="dropdown-item" data-bs-target="#country-selector" data-bs-toggle="modal">
                        <i class="dropdown-icon fe fe-globe"></i> Language
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="dropdown-icon fa fa-user"></i> Become a seller
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="dropdown-icon icon icon-layers"></i> Listing
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="dropdown-icon fa fa-calendar"></i> Calendar
                    </a>
                </div>
            </div>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="{{url('/')}}">
                <img src="{{asset('assets/images/brand/white-logo1.png')}}" class="header-brand-img desktop-logo nav_log"
                    alt="logo">
                <img src="{{asset('assets/images/brand/white-logo1.png')}}" class="header-brand-img light-logo1 nav_log"
                    alt="logo">
            </a>
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <!-- SEARCH -->
                <div class="dropdown d-flex d-lg-none profile-1">
                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                        <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow edit-profile-3 second_drop">

                        <a class="dropdown-item" href="{{url('/edit-profile')}}">
                            <i class="dropdown-icon fe fe-home"></i> Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-user"></i> List Your Space
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-user"></i> List Your Entertainment & Talents
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-user"></i> List Your Service
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-user"></i> Payment
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-user"></i> Help
                        </a>
                        <a class="dropdown-item" href="{{url('login')}}">
                            <i class="dropdown-icon fe fe-alert-circle"></i> Sign in
                        </a>
                    </div>
                </div>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="landingNavbarHeader">
                        <div class="d-flex order-lg-2">

                            <!-- Cart -->
                            <div class="d-flex">
                                <a class="nav-link icon text-center style">
                                    <i class="fa fa-cart-plus text-white"></i><span
                                        class="fs-16 ms-2 d-none d-xl-block"></span>
                                </a>
                            </div>

                            <!-- COUNTRY -->
                            <div class="d-flex country">
                                <a class="nav-link icon text-center" data-bs-target="#country-selector"
                                    data-bs-toggle="modal">
                                    <i class="fe fe-globe text-white"></i><span
                                        class="fs-16 ms-2 d-none d-xl-block"></span>
                                </a>
                            </div>

                            <div class="d-flex seller-btn">
                                <a class="nav-link border py-3 px-5 m-2 active text-white" id="tab1"
                                    data-bs-toggle="tab" href="#tabs_2_1" role="tab" aria-selected="true">
                                    Become a Seller
                                </a>
                            </div>
                            <div class="d-flex seller-btn">
                                <a class="nav-link py-3 px-5 m-2 active text-white" role="tab" aria-selected="true">
                                    Listing
                                </a>
                            </div>
                            <div class="d-flex seller-btn">
                                <a class="nav-link py-3 px-5 m-2 active text-white" role="tab" aria-selected="true">
                                    Calendar
                                </a>
                            </div>

                            <!-- SIDE-MENU -->
                            <div class="dropdown d-flex profile-1" id="third_drop">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                    class="nav-link leading-none d-flex">
                                    <img src="{{asset('assets/images/users/21.jpg')}}" alt="profile-user"
                                        class="avatar  profile-user brround cover-image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow third_drop">

                                    <a class="dropdown-item" href="{{url('/edit-profile')}}">
                                        <i class="dropdown-icon fe fe-home"></i> Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon fe fe-user"></i> List Your Space
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon fe fe-user"></i> List Your Entertainment & Talents
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon fe fe-user"></i> List Your Service
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon fe fe-user"></i> Payment
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon fe fe-user"></i> Help
                                    </a>
                                    <a class="dropdown-item" href="{{url('login')}}">
                                        <i class="dropdown-icon fe fe-alert-circle"></i> Sign in
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /app-Header -->
