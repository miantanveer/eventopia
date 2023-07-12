<!-- app-Header -->
<style>
    .edit-profile-3 {
        transform: translate(0px, 0px) !important;
    }
</style>
<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <div class="dropdown d-flex profile-1 d-lg-none">
                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                    <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow edit-profile-3">

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
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="{{url('/dashboard')}}">
                <img src="{{asset('assets/images/brand/white-logo1.png')}}" class="header-brand-img desktop-logo"
                    alt="logo">
                <img src="{{asset('assets/images/brand/white-logo1.png')}}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <!-- SEARCH -->
                <div class="dropdown d-flex profile-1">
                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                        <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow edit-profile-3">

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
                                    Booking
                                </a>
                            </div>
                            <div class="d-flex seller-btn">
                                <a class="nav-link py-3 px-5 m-2 active text-white" role="tab" aria-selected="true">
                                    Calendar
                                </a>
                            </div>

                            <!-- SIDE-MENU -->
                            <div class="dropdown d-flex profile-1">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                    class="nav-link leading-none d-flex">
                                    <img src="{{asset('assets/images/users/21.jpg')}}" alt="profile-user"
                                        class="avatar  profile-user brround cover-image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

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