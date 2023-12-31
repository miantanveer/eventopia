<!-- app-Header -->
<div class="app-header header sticky" style="background-color: #00224F">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle text-white" data-bs-toggle="sidebar"
                href="javascript:void(0)"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="{{url('/')}}">
                <img src="{{asset('assets/images/brand/white-logo1.png')}}"
                    class="header-brand-img space-logo desktop-logo" alt="logo">
                <img src="{{asset('assets/images/brand/white-logo1.png')}}"
                    class="header-brand-img space-logo light-logo1" alt="logo">
            </a>
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <div class="dropdown d-flex profile-1 d-lg-none">
                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                        <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow edit-profile-3 space-dropdown">

                        <a class="dropdown-item" href="{{url('/edit-profile')}}">
                            <i class="dropdown-icon fa fa-cart-plus"></i> {{lang('Cart')}}
                        </a>
                        <a class="dropdown-item" data-bs-target="#country-selector" data-bs-toggle="modal">
                            <i class="dropdown-icon fe fe-globe"></i> {{lang('Language')}}
                        </a>
                        <a class="dropdown-item" href="{{URL('/seller-dashboard')}}">
                            <i class="dropdown-icon fa fa-user"></i> {{lang('Become a seller')}}
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon icon icon-layers"></i> {{lang('Booking')}}
                        </a>
                    </div>
                </div>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
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
                                <a class="nav-link border py-3 px-5 m-2 text-white" id="tab1"
                                    href="{{URL('/seller-dashboard')}}">
                                    {{lang('Become a Seller')}}
                                </a>
                            </div>
                            <div class="d-flex seller-btn">
                                <a class="nav-link py-3 px-5 m-2 active text-white" href="{{url('/bookings')}}"
                                    role="tab" aria-selected="true">
                                    {{lang('Booking')}}
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
                                        <i class="dropdown-icon fe fe-home"></i> {{lang('Manage Account')}}
                                    </a>
                                    <a class="dropdown-item" href="{{url('/edit-profile')}}">
                                        <i class="dropdown-icon fe fe-user"></i> {{lang('Dashboard')}}
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="dropdown-item">
                                            <i class="dropdown-icon fe fe-alert-circle"></i> {{lang('Sign out')}}
                                        </button>
                                    </form>
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