<!-- app-Header -->
<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <div class="dropdown d-flex profile-1 d-lg-none">
                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                    <span class="navbar-toggler-icon fa fa-align-left text-white"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow edit-profile-3 first_drop">
                    <a class="dropdown-item" href="{{ route('checkout') }}">
                        <i class="dropdown-icon fa fa-shopping-bag"></i> {{lang('Cart')}}
                    </a>
                    <a class="dropdown-item" data-bs-target="#country-selector" data-bs-toggle="modal">
                        <i class="dropdown-icon fe fe-globe"></i> {{lang('Language')}}
                    </a>
                    <a class="dropdown-item" href="{{ url('/seller-dashboard') }}">
                        <i class="dropdown-icon fa fa-user"></i> {{lang('Become a Seller')}}
                    </a>
                    <a class="dropdown-item" href="{{ route('my-listing') }}">
                        <i class="dropdown-icon icon icon-layers"></i> {{lang('Listing')}}
                    </a>
                    <a class="dropdown-item" href="{{ route('bookings',['type' => 'null','for' => 'null']) }}">
                        <i class="dropdown-icon icon icon-layers"></i> {{lang('Bookings')}}
                    </a>
                    <a class="dropdown-item" href="{{ route('calendar') }}">
                        <i class="dropdown-icon fa fa-calendar"></i> {{lang('Calendar')}}
                    </a>
                </div>
            </div>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="{{ url('/') }}">
                <img src="{{ asset('assets/images/brand/white-logo1.png') }}"
                    class="header-brand-img desktop-logo nav_log" alt="logo">
                <img src="{{ asset('assets/images/brand/white-logo1.png') }}"
                    class="header-brand-img light-logo1 nav_log" alt="logo">
            </a>
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <!-- SEARCH -->
                <div class="dropdown d-flex d-lg-none profile-1">
                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                        <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow edit-profile-3 second_drop">

                        @if (Auth::check())
                            <a class="dropdown-item" href="{{ route('edit-profile-index') }}">
                                <i class="dropdown-icon fe fe-home"></i> {{lang('Profile')}}
                            </a>
                            <a class="dropdown-item" href="{{ route('payments') }}">
                                <i class="dropdown-icon fe fe-user"></i> {{lang('Payment')}}
                            </a>
                        @endif
                        <a class="dropdown-item" href="{{ route('login') }}">
                            <i class="dropdown-icon fe fe-alert-circle"></i> {{lang('Sign in')}}
                        </a>
                    </div>
                </div>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="landingNavbarHeader">
                        <div class="d-flex order-lg-2">
                            <!-- Cart -->
                            <div class="d-flex">
                                <a class="nav-link icon text-center style" href="{{ route('checkout') }}">
                                    <i class="fa fa-shopping-bag text-white"></i><span
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

                            <div class="d-flex btn-group seller-btn">
                                <button class="nav-link border dropdown py-3 px-5 m-2 bg-transparent text-white"
                                    data-bs-toggle="dropdown" id="tab1" role="tab" aria-selected="true">
                                    {{lang('Become a Seller')}}
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('list-space') }}">List Space</a>
                                    <a class="dropdown-item" href="{{ route('list-entertainment') }}">List
                                        {{lang('Entertainment & Talent')}}</a>
                                    <a class="dropdown-item" href="{{ route('list-service') }}">List Service</a>
                                </div>
                            </div>
                                <div class="d-flex listing-btn">
                                    <a class="nav-link py-3 px-5 m-2 active text-white" role="tab"
                                        aria-selected="true" href="{{ route('my-listing') }}">
                                        {{lang('Listing')}}
                                    </a>
                                </div>
                                <div class="d-flex booking-btn">
                                    <a class="nav-link py-3 px-5 m-2 active text-white" role="tab"
                                        aria-selected="true" href="{{ route('bookings',['type' => 'null','for' => 'null']) }}">
                                        {{lang('Bookings')}}
                                    </a>
                                </div>
                                <div class="d-flex calendar-btn">
                                    <a class="nav-link py-3 px-5 m-2 active text-white" href="{{ route('calendar') }}"
                                        role="tab" aria-selected="true">
                                        {{lang('Calendar')}}
                                    </a>
                                </div>
                            <!-- SIDE-MENU -->
                            <div class="dropdown d-flex profile-1" id="third_drop">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                    class="nav-link leading-none d-flex">
                                    <img src="{{ auth()->check() ? s3Link(auth()->user()->image) : asset('assets/images/users/profile.png') }}"
                                        alt="profile-user" class="avatar  profile-user brround cover-image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow third_drop">

                                    @if (Auth::check())
                                        <a class="dropdown-item" href="{{ route('edit-profile') }}">
                                            <i class="dropdown-icon fe fe-home"></i> {{lang('Profile')}}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('payments') }}">
                                            <i class="dropdown-icon fe fe-user"></i> {{lang('Payment')}}
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('login') }}">
                                        <i class="dropdown-icon fe fe-alert-circle"></i> @if(Auth::check()) {{lang('Dashboard')}} @else {{lang('Sign in')}} @endif
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
