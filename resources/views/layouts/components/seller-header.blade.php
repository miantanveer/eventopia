            <!-- app-Header -->
            <div class="app-header header sticky" style="background-color: #00224F">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="{{url('/dashboard')}}">
                            <img src="{{asset('assets/images/brand/white-logo1.png')}}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{asset('assets/images/brand/white-logo1.png')}}" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical"></span>
								</button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">

                                        <!-- COUNTRY -->
                                        <div class="d-flex country">
                                            <a class="nav-link icon text-center" data-bs-target="#country-selector" data-bs-toggle="modal">
                                                <i class="fe fe-globe text-white"></i><span class="fs-16 ms-2 d-none d-xl-block"></span>
                                            </a>
                                        </div>

                                        <div class="d-flex seller-btn">
                                            <a class="nav-link border py-3 px-5 m-2 active text-white" href="{{URL('/dashboard')}}" role="tab" aria-selected="true">
                                                {{lang('Customer Page')}}
                                            </a>
                                        </div>
                                        <div class="d-flex seller-btn">
                                            <a class="nav-link py-3 px-5 m-2 active text-white" role="tab" aria-selected="true" href="{{URL('my-listings')}}">
                                                {{lang('Listing')}}
                                            </a>
                                        </div>
                                        <div class="d-flex seller-btn">
                                            <a class="nav-link py-3 px-5 m-2 active text-white" role="tab" aria-selected="true" href="{{URL('bookings')}}">
                                                {{lang('Booking')}}
                                            </a>
                                        </div>
                                        <div class="d-flex seller-btn">
                                            <a class="nav-link py-3 px-5 m-2 active text-white" href="{{URL('/calendar')}}" role="tab" aria-selected="true">
                                                {{lang('Calendar')}}
                                            </a>
                                        </div>

                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="{{asset('assets/images/users/21.jpg')}}" alt="profile-user" class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                                <a class="dropdown-item" href="{{url('/edit-profile')}}">
                                                    <i class="dropdown-icon fe fe-home"></i> {{lang('Manage Account')}}
                                                </a>
                                                <a class="dropdown-item" href="{{url('/edit-profile')}}">
                                                    <i class="dropdown-icon fe fe-user"></i> {{lang('Dashboard')}}
                                                </a>
                                                <a class="dropdown-item" href="{{route('logout')}}">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> {{lang('Sign out')}}
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
