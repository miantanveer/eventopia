            <!--app-sidebar-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="m-auto" href="{{ url('/admin') }}">
                            <img src="{{ asset('assets/images/brand/logo13.png') }}" class="header-brand-img" alt="">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.dashboard.index')}}"><i
                                        class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.users.index')}}"><i
                                        class="side-menu__icon fe fe-users"></i><span
                                        class="side-menu__label">Users</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.plugins.index')}}"><i
                                        class="side-menu__icon fe fe-command"></i><span
                                        class="side-menu__label">Plugins</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-layers"></i><span
                                        class="side-menu__label">Listings</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="{{ route('admin.listings.spaces') }}" class="slide-item"> Spaces</a></li>
                                    <li><a href="{{ route('admin.listings.entertainment') }}" class="slide-item">Entertainments & Talents</a></li>
                                    <li><a href="{{ route('admin.listings.services') }}" class="slide-item">Services</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-settings"></i><span
                                        class="side-menu__label">Settings</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="{{route('admin.settings.profile.index')}}" class="slide-item"> Profile</a></li>
                                    <li><a  class="slide-item">Company Settings</a></li>
                                </ul>
                            </li>
                            {{--
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-package"></i><span
                                        class="side-menu__label">Bootstrap</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Bootstrap</a></li>
                                    <li><a class="slide-item"> Alerts</a></li>
                                    <li><a class="slide-item"> Buttons</a></li>
                                    <li><a class="slide-item"> Colors</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide"
                                            href="javascript:void(0)"><span
                                                class="sub-side-menu__label">Avatars</span><i
                                                class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item">
                                                    Avatar-Square</a></li>
                                            <li><a class="sub-slide-item">
                                                    Avatar-Rounded</a></li>
                                            <li><a class="sub-slide-item">
                                                    Avatar-Radius</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="slide-item"> Drop downs</a></li>
                                    <li><a class="slide-item"> List Group</a></li>
                                    <li><a class="slide-item"> Tags</a></li>
                                    <li><a class="slide-item"> Pagination</a></li>
                                    <li><a class="slide-item"> Navigation</a></li>
                                    <li><a class="slide-item"> Typography</a></li>
                                    <li><a class="slide-item"> Breadcrumbs</a></li>
                                    <li><a class="slide-item"> Badges / Pills</a></li>
                                    <li><a class="slide-item"> Panels</a></li>
                                    <li><a class="slide-item"> Thumbnails</a></li>
                                    <li><a class="slide-item"> Offcanvas</a></li>
                                    <li><a class="slide-item"> Toast</a></li>
                                    <li><a class="slide-item"> Scrollspy</a></li>
                                    <li><a class="slide-item"> Media Object</a></li>
                                    <li><a class="slide-item"> Accordions</a></li>
                                    <li><a class="slide-item"> Tabs</a></li>
                                    <li><a class="slide-item"> Modal</a></li>
                                    <li><a class="slide-item"> Tooltip and
                                            popover</a></li>
                                    <li><a class="slide-item"> Progress</a></li>
                                    <li><a class="slide-item"> Carousels</a></li>
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>Pre-build Pages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-layers"></i><span
                                        class="side-menu__label">Pages</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                                    <li><a class="slide-item"> Profile</a></li>
                                    <li><a class="slide-item"> Edit Profile</a></li>
                                    <li><a class="slide-item"> Notifications List</a>
                                    </li>
                                    <li><a  class="slide-item"> Mail-Compose</a>
                                    </li>
                                    <li><a class="slide-item"> Mail-Inbox</a></li>
                                    <li><a  class="slide-item"> Mail-Read</a></li>
                                    <li><a class="slide-item"> Gallery</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide"
                                            href="javascript:void(0)"><span
                                                class="sub-side-menu__label">Forms</span><i
                                                class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a  class="sub-slide-item"> Form
                                                    Elements</a></li>
                                            <li><a  class="sub-slide-item"> Form
                                                    Layouts</a></li>
                                            <li><a  class="sub-slide-item"> Form
                                                    Advanced</a></li>
                                            <li><a  class="sub-slide-item"> Form
                                                    Editor</a></li>
                                            <li><a  class="sub-slide-item"> Form
                                                    Wizard</a></li>
                                            <li><a  class="sub-slide-item"> Form
                                                    Validation</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide"
                                            href="javascript:void(0)"><span
                                                class="sub-side-menu__label">Tables</span><i
                                                class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a  class="sub-slide-item">Default
                                                    table</a></li>
                                            <li><a class="sub-slide-item"> Data
                                                    Tables</a></li>
                                            <li><a class="sub-slide-item"> Edit
                                                    Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide"
                                            href="javascript:void(0)"><span
                                                class="sub-side-menu__label">Extension</span><i
                                                class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item"> About
                                                    Company</a></li>
                                            <li><a  class="sub-slide-item"> Services</a>
                                            </li>
                                            <li><a  class="sub-slide-item"> FAQS</a></li>
                                            <li><a  class="sub-slide-item"> Terms</a></li>
                                            <li><a  class="sub-slide-item"> Invoice</a>
                                            </li>
                                            <li><a class="sub-slide-item"> Pricing Tables</a></li>
                                            <li><a class="sub-slide-item"> Settings</a> </li>
                                            <li><a class="sub-slide-item"> Blog</a></li>
                                            <li><a  class="sub-slide-item"> Blog  Details</a></li>
                                            <li><a  class="sub-slide-item"> Blog  Post</a></li>
                                            <li><a class="sub-slide-item"> Empty   Page</a></li>
                                            <li><a class="sub-slide-item"> UnderConstruction</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide"
                                            href="javascript:void(0)"><span
                                                class="sub-side-menu__label">Switcher</span><i
                                                class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" >Switcher
                                                    Style 1</a></li>
                                            <li><a class="sub-slide-item" >Switcher
                                                    Style 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-shopping-bag"></i><span
                                        class="side-menu__label">E-Commerce</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">E-Commerce</a></li>
                                    <li><a  class="slide-item"> Shop</a></li>
                                    <li><a  class="slide-item"> Product Details</a></li>
                                    <li><a  class="slide-item"> Shopping Cart</a></li>
                                    <li><a  class="slide-item"> Add Product</a></li>
                                    <li><a  class="slide-item"> Wishlist</a></li>
                                    <li><a  class="slide-item"> Checkout</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">File
                                        Manager</span><span class="badge bg-pink side-badge">4</span><i
                                        class="angle fe fe-chevron-right hor-angle"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">File Manager</a></li>
                                    <li><a class="slide-item"> File Manager</a></li>
                                    <li><a class="slide-item"> File Manager  List</a></li>
                                    <li><a class="slide-item"> File   Details</a></li>
                                    <li><a class="slide-item"> File   Attachments</a></li>
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>Misc Pages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-users"></i><span
                                        class="side-menu__label">Authentication</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Authentication</a></li>
                                    <li><a class="slide-item"> Login</a></li>
                                    <li><a class="slide-item"> Register</a></li>
                                    <li><a class="slide-item"> Forgot
                                            Password</a></li>
                                    <li><a class="slide-item"> Lock screen</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide"
                                            href="javascript:void(0)"><span class="sub-side-menu__label">Error
                                                Pages</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item"> 400</a></li>
                                            <li><a class="sub-slide-item"> 401</a></li>
                                            <li><a class="sub-slide-item"> 403</a></li>
                                            <li><a class="sub-slide-item"> 404</a></li>
                                            <li><a class="sub-slide-item"> 500</a></li>
                                            <li><a class="sub-slide-item"> 503</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <i class="side-menu__icon fe fe-cpu"></i>
                                    <span class="side-menu__label">Submenu items</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Submenu items</a></li>
                                    <li><a href="javascript:void(0)" class="slide-item">Submenu-1</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide"
                                            href="javascript:void(0)"><span
                                                class="sub-side-menu__label">Submenu-2</span><i
                                                class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.1</a>
                                            </li>
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.2</a>
                                            </li>
                                            <li class="sub-slide2">
                                                <a class="sub-side-menu__item2" href="javascript:void(0)"
                                                    data-bs-toggle="sub-slide2"><span
                                                        class="sub-side-menu__label2">Submenu-2.3</span><i
                                                        class="sub-angle2 fe fe-chevron-right"></i></a>
                                                <ul class="sub-slide-menu2">
                                                    <li><a href="javascript:void(0)"
                                                            class="sub-slide-item2">Submenu-2.3.1</a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="sub-slide-item2">Submenu-2.3.2</a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="sub-slide-item2">Submenu-2.3.3</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.4</a>
                                            </li>
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.5</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>General</h3>
                            </li>
                            <li>
                                <a class="side-menu__item"><i
                                        class="side-menu__icon fe fe-grid"></i><span
                                        class="side-menu__label">Widgets</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-map-pin"></i><span
                                        class="side-menu__label">Maps</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Maps</a></li>
                                    <li><a class="slide-item">Leaflet Maps</a></li>
                                    <li><a class="slide-item">Mapel Maps</a></li>
                                    <li><a class="slide-item">Vector Maps</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-bar-chart-2"></i><span
                                        class="side-menu__label">Charts</span><span
                                        class="badge bg-secondary side-badge">6</span><i
                                        class="angle fe fe-chevron-right hor-angle"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Charts</a></li>
                                    <li><a  class="slide-item">Chart Js</a></li>
                                    <li><a  class="slide-item"> Flot Charts</a></li>
                                    <li><a  class="slide-item"> ECharts</a></li>
                                    <li><a  class="slide-item"> Morris Charts</a></li>
                                    <li><a  class="slide-item"> Nvd3 Charts</a></li>
                                    <li><a  class="slide-item"> C3 Bar Charts</a></li>
                                    <li><a  class="slide-item"> C3 Line Charts</a> </li>
                                    <li><a  class="slide-item"> C3 Donut Charts</a>   </li>
                                    <li><a  class="slide-item"> C3 Pie charts</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-wind"></i><span
                                        class="side-menu__label">Icons</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Icons</a></li>
                                    <li><a  class="slide-item"> Font Awesome</a></li>
                                    <li><a  class="slide-item"> Material Design Icons</a>  </li>
                                    <li><a  class="slide-item"> Simple Line Icons</a></li>
                                    <li><a  class="slide-item"> Feather Icons</a></li>
                                    <li><a  class="slide-item"> Ionic Icons</a></li>
                                    <li><a  class="slide-item"> Flag Icons</a></li>
                                    <li><a  class="slide-item"> pe7 Icons</a></li>
                                    <li><a  class="slide-item"> Themify Icons</a></li>
                                    <li><a  class="slide-item">Typicons Icons</a></li>
                                    <li><a  class="slide-item">Weather Icons</a></li>
                                    <li><a  class="slide-item">Bootstrap Icons</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>
            <!--app-sidebar-->
