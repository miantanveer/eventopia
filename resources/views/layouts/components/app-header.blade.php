            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle text-white" data-bs-toggle="sidebar"
                            href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/brand/logo13.png') }}"
                                class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('assets/images/brand/logo13.png') }}"
                                class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical text-whita"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="d-flex seller-btn">
                                            <a href="{{ URL('/seller-dashboard') }}"><button
                                                    class="btn-pill p-2 text-white bg-custom-black">{{ lang('Become a
                                                                                                        Seller') }}</button></a>
                                        </div>
                                        <!-- COUNTRY -->
                                        <div class="d-flex country">
                                            <a class="nav-link icon text-center text-dark"
                                                data-bs-target="#country-selector" data-bs-toggle="modal">
                                                <i class="fe fe-globe"></i><span
                                                    class="fs-16 ms-2 d-none d-xl-block"></span>
                                            </a>
                                        </div>

                                        <!-- SEARCH -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon theme-layout nav-link-bg text-dark layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        @php
                                            $notifies = \App\Models\Notification::whereIsRead(0)
                                                ->whereHas('quote', function ($query) {
                                                    $query->where('status', 1);
                                                })
                                                ->get();
                                        @endphp
                                        <div class="dropdown  d-flex notifications">
                                            <a class="nav-link icon text-dark" data-bs-toggle="dropdown"><i
                                                    class="fe fe-bell"></i><span class="{{ $notifies->count() > 0 ? 'pulse' : ''}}"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">
                                                            {{ lang('Notifications') }}
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="notifications-menu">

                                                    <div id="notify_service"></div>
                                                    @foreach (@$notifies as $notify)
                                                        @if (@$notify->type == 'service')
                                                            <a class="dropdown-item d-flex"
                                                                onclick="quoteModal('{{ route('load_accept_quote', @$notify->quote_id) }}')">
                                                                <div
                                                                    class="me-3 notifyimg bg-primary brround box-shadow-primary">
                                                                    <i class="fe fe-dollar-sign"></i>
                                                                </div>
                                                                <div class="mt-1">
                                                                    <h5 class="notification-label mb-1">
                                                                        {{ lang(@$notify->description) }}</h5>
                                                                    <span
                                                                        class="notification-subtext">{{ @$notify->created_at->diffForHumans() }}</span>
                                                                </div>
                                                            </a>
                                                        @else
                                                            <a class="dropdown-item d-flex">
                                                                <div
                                                                    class="me-3 notifyimg bg-secondary brround box-shadow-primary">
                                                                    <i class="fe fe-bell"></i>
                                                                </div>
                                                                <div class="mt-1">
                                                                    <h5 class="notification-label mb-1">
                                                                        {{ lang(@$notify->description) }}</h5>
                                                                    <span
                                                                        class="notification-subtext">{{ @$notify->created_at->diffForHumans() }}</span>
                                                                </div>
                                                            </a>
                                                        @endif
                                                    @endforeach

                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a href="{{ route('notifications') }}"
                                                    class="dropdown-item text-center p-3 text-muted">{{ lang('View all Notification') }}</a>
                                            </div>
                                        </div>
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                class="nav-link leading-none d-flex">
                                                <img src="{{ s3Link(auth()->user()->image) ?? asset('assets/images/users/profile.png') }}"
                                                    alt="profile-user" class="avatar profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{ route('dashboard') }}">
                                                    <i class="dropdown-icon fe fe-home"></i> {{ lang('Dashboard') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('edit-profile-index') }}">
                                                    <i class="dropdown-icon fe fe-user"></i>
                                                    {{ lang('Manage Account') }}
                                                </a>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <button class="dropdown-item">
                                                        <i class="dropdown-icon fe fe-alert-circle"></i>
                                                        {{ lang('Sign out') }}
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
