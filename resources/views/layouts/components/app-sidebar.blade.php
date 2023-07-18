            <!--app-sidebar-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar bg-primary">
                    {{-- <div class="side-header">
                        <a class="header-brand1" href="{{url('index')}}">
                            <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="../assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                            <img src="../assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                            <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div> --}}
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
                        <ul class="side-menu">
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{URL('/dashboard')}}"><i class="side-menu__icon text-white fe fe-home"></i><span class="side-menu__label text-white">Dashboard</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{URL('/list-space')}}"><i class="side-menu__icon text-white fa fa-calendar"></i><span class="side-menu__label text-white">Book a Space</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon text-white fa fa-calendar"></i><span class="side-menu__label text-white">Book an Entertainment & Talent</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon text-white fa fa-calendar"></i><span class="side-menu__label text-white">Book a Service</span></a>
                            </li>
                            {{-- <li class="sub-category">
                                <h3>UI Kit</h3>
                            </li> --}}
                            {{-- <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                                    <li><a href="{{url('cards')}}" class="slide-item"> Cards design</a></li>
                                    <li><a href="{{url('calendar')}}" class="slide-item"> Default calendar</a></li>
                                    <li><a href="{{url('calendar2')}}" class="slide-item"> Full calendar</a></li>
                                    <li><a href="{{url('chat')}}" class="slide-item"> Chat</a></li>
                                    <li><a href="{{url('notify')}}" class="slide-item"> Notifications</a></li>
                                    <li><a href="{{url('sweetalert')}}" class="slide-item"> Sweet alerts</a></li>
                                    <li><a href="{{url('rangeslider')}}" class="slide-item"> Range slider</a></li>
                                    <li><a href="{{url('scroll')}}" class="slide-item"> Content Scroll bar</a></li>
                                    <li><a href="{{url('loaders')}}" class="slide-item"> Loaders</a></li>
                                    <li><a href="{{url('counters')}}" class="slide-item"> Counters</a></li>
                                    <li><a href="{{url('rating')}}" class="slide-item"> Rating</a></li>
                                    <li><a href="{{url('timeline')}}" class="slide-item"> Timeline</a></li>
                                    <li><a href="{{url('treeview')}}" class="slide-item"> Treeview</a></li>
                                    <li><a href="{{url('chart')}}" class="slide-item"> Charts</a></li>
                                    <li><a href="{{url('footers')}}" class="slide-item"> Footers</a></li>
                                    <li><a href="{{url('users-list')}}" class="slide-item"> User List</a></li>
                                    <li><a href="{{url('search')}}" class="slide-item">Search</a></li>
                                    <li><a href="{{url('crypto-currencies')}}" class="slide-item"> Crypto-currencies</a></li>

                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-package"></i><span class="side-menu__label">Bootstrap</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Bootstrap</a></li>
                                    <li><a href="{{url('alerts')}}" class="slide-item"> Alerts</a></li>
                                    <li><a href="{{url('buttons')}}" class="slide-item"> Buttons</a></li>
                                    <li><a href="{{url('colors')}}" class="slide-item"> Colors</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Avatars</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a href="{{url('avatarsquare')}}" class="sub-slide-item"> Avatar-Square</a></li>
                                            <li><a href="{{url('avatar-round')}}" class="sub-slide-item"> Avatar-Rounded</a></li>
                                            <li><a href="{{url('avatar-radius')}}" class="sub-slide-item"> Avatar-Radius</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('dropdown')}}" class="slide-item"> Drop downs</a></li>
                                    <li><a href="{{url('listgroup')}}" class="slide-item"> List Group</a></li>
                                    <li><a href="{{url('tags')}}" class="slide-item"> Tags</a></li>
                                    <li><a href="{{url('pagination')}}" class="slide-item"> Pagination</a></li>
                                    <li><a href="{{url('navigation')}}" class="slide-item"> Navigation</a></li>
                                    <li><a href="{{url('typography')}}" class="slide-item"> Typography</a></li>
                                    <li><a href="{{url('breadcrumbs')}}" class="slide-item"> Breadcrumbs</a></li>
                                    <li><a href="{{url('badge')}}" class="slide-item"> Badges / Pills</a></li>
                                    <li><a href="{{url('panels')}}" class="slide-item"> Panels</a></li>
                                    <li><a href="{{url('thumbnails')}}" class="slide-item"> Thumbnails</a></li>
                                    <li><a href="{{url('offcanvas')}}" class="slide-item"> Offcanvas</a></li>
                                    <li><a href="{{url('toast')}}" class="slide-item"> Toast</a></li>
                                    <li><a href="{{url('scrollspy')}}" class="slide-item"> Scrollspy</a></li>
                                    <li><a href="{{url('mediaobject')}}" class="slide-item"> Media Object</a></li>
                                    <li><a href="{{url('accordion')}}" class="slide-item"> Accordions</a></li>
                                    <li><a href="{{url('tabs')}}" class="slide-item"> Tabs</a></li>
                                    <li><a href="{{url('modal')}}" class="slide-item"> Modal</a></li>
                                    <li><a href="{{url('tooltipandpopover')}}" class="slide-item"> Tooltip and popover</a></li>
                                    <li><a href="{{url('progress')}}" class="slide-item"> Progress</a></li>
                                    <li><a href="{{url('carousel')}}" class="slide-item"> Carousels</a></li>
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>Pre-build Pages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                                    <li><a href="{{url('profile')}}" class="slide-item"> Profile</a></li>
                                    <li><a href="{{url('editprofile')}}" class="slide-item"> Edit Profile</a></li>
                                    <li><a href="{{url('notify-list')}}" class="slide-item"> Notifications List</a></li>
                                    <li><a href="{{url('email-compose')}}" class="slide-item"> Mail-Compose</a></li>
                                    <li><a href="{{url('email-inbox')}}" class="slide-item"> Mail-Inbox</a></li>
                                    <li><a href="{{url('email-read')}}" class="slide-item"> Mail-Read</a></li>
                                    <li><a href="{{url('gallery')}}" class="slide-item"> Gallery</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Forms</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a href="{{url('form-elements')}}" class="sub-slide-item"> Form Elements</a></li>
                                            <li><a href="{{url('form-layouts')}}" class="sub-slide-item"> Form Layouts</a></li>
                                            <li><a href="{{url('form-advanced')}}" class="sub-slide-item"> Form Advanced</a></li>
                                            <li><a href="{{url('form-editor')}}" class="sub-slide-item"> Form Editor</a></li>
                                            <li><a href="{{url('form-wizard')}}" class="sub-slide-item"> Form Wizard</a></li>
                                            <li><a href="{{url('form-validation')}}" class="sub-slide-item"> Form Validation</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Tables</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a href="{{url('tables')}}" class="sub-slide-item">Default table</a></li>
                                            <li><a href="{{url('datatable')}}" class="sub-slide-item"> Data Tables</a></li>
                                            <li><a href="{{url('edit-table')}}" class="sub-slide-item"> Edit Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Extension</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a href="{{url('about')}}" class="sub-slide-item"> About Company</a></li>
                                            <li><a href="{{url('services')}}" class="sub-slide-item"> Services</a></li>
                                            <li><a href="{{url('faq')}}" class="sub-slide-item"> FAQS</a></li>
                                            <li><a href="{{url('terms')}}" class="sub-slide-item"> Terms</a></li>
                                            <li><a href="{{url('invoice')}}" class="sub-slide-item"> Invoice</a></li>
                                            <li><a href="{{url('pricing')}}" class="sub-slide-item"> Pricing Tables</a></li>
                                            <li><a href="{{url('settings')}}" class="sub-slide-item"> Settings</a></li>
                                            <li><a href="{{url('blog')}}" class="sub-slide-item"> Blog</a></li>
                                            <li><a href="{{url('blog-details')}}" class="sub-slide-item"> Blog Details</a></li>
                                            <li><a href="{{url('blog-post')}}" class="sub-slide-item"> Blog Post</a></li>
                                            <li><a href="{{url('emptypage')}}" class="sub-slide-item"> Empty Page</a></li>
                                            <li><a href="{{url('construction')}}" class="sub-slide-item"> Under Construction</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Switcher</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="{{url('switcher1')}}">Switcher Style 1</a></li>
                                            <li><a class="sub-slide-item" href="{{url('switcher2')}}">Switcher Style 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-shopping-bag"></i><span class="side-menu__label">E-Commerce</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">E-Commerce</a></li>
                                    <li><a href="{{url('shop')}}" class="slide-item"> Shop</a></li>
                                    <li><a href="{{url('shop-description')}}" class="slide-item"> Product Details</a></li>
                                    <li><a href="{{url('cart')}}" class="slide-item"> Shopping Cart</a></li>
                                    <li><a href="{{url('add-product')}}" class="slide-item"> Add Product</a></li>
                                    <li><a href="{{url('wishlist')}}" class="slide-item"> Wishlist</a></li>
                                    <li><a href="{{url('checkout')}}" class="slide-item"> Checkout</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">File Manager</span><span class="badge bg-pink side-badge">4</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">File Manager</a></li>
                                    <li><a href="{{url('file-manager')}}" class="slide-item"> File Manager</a></li>
                                    <li><a href="{{url('filemanager-list')}}" class="slide-item"> File Manager List</a></li>
                                    <li><a href="{{url('filemanager-details')}}" class="slide-item"> File Details</a></li>
                                    <li><a href="{{url('file-attachments')}}" class="slide-item"> File Attachments</a></li>
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>Misc Pages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Authentication</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Authentication</a></li>
                                    <li><a href="{{url('login')}}" class="slide-item"> Login</a></li>
                                    <li><a href="{{url('register')}}" class="slide-item"> Register</a></li>
                                    <li><a href="{{url('forgot-password')}}" class="slide-item"> Forgot Password</a></li>
                                    <li><a href="{{url('lockscreen')}}" class="slide-item"> Lock screen</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Error Pages</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a href="{{url('error400')}}" class="sub-slide-item"> 400</a></li>
                                            <li><a href="{{url('error401')}}" class="sub-slide-item"> 401</a></li>
                                            <li><a href="{{url('error403')}}" class="sub-slide-item"> 403</a></li>
                                            <li><a href="{{url('error404')}}" class="sub-slide-item"> 404</a></li>
                                            <li><a href="{{url('error500')}}" class="sub-slide-item"> 500</a></li>
                                            <li><a href="{{url('error503')}}" class="sub-slide-item"> 503</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <i class="side-menu__icon fe fe-cpu"></i>
                                    <span class="side-menu__label">Submenu items</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Submenu items</a></li>
                                    <li><a href="javascript:void(0)" class="slide-item">Submenu-1</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Submenu-2</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.1</a></li>
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.2</a></li>
                                            <li class="sub-slide2">
                                                <a class="sub-side-menu__item2" href="javascript:void(0)" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Submenu-2.3</span><i class="sub-angle2 fe fe-chevron-right"></i></a>
                                                <ul class="sub-slide-menu2">
                                                    <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.1</a></li>
                                                    <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.2</a></li>
                                                    <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.3</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.4</a></li>
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>General</h3>
                            </li>
                            <li>
                                <a class="side-menu__item" href="{{url('widgets')}}"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Widgets</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-map-pin"></i><span class="side-menu__label">Maps</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Maps</a></li>
                                    <li><a href="{{url('maps1')}}" class="slide-item">Leaflet Maps</a></li>
                                    <li><a href="{{url('maps2')}}" class="slide-item">Mapel Maps</a></li>
                                    <li><a href="{{url('maps')}}" class="slide-item">Vector Maps</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-bar-chart-2"></i><span class="side-menu__label">Charts</span><span class="badge bg-secondary side-badge">6</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Charts</a></li>
                                    <li><a href="{{url('chart-chartist')}}" class="slide-item">Chart Js</a></li>
                                    <li><a href="{{url('chart-flot')}}" class="slide-item"> Flot Charts</a></li>
                                    <li><a href="{{url('chart-echart')}}" class="slide-item"> ECharts</a></li>
                                    <li><a href="{{url('chart-morris')}}" class="slide-item"> Morris Charts</a></li>
                                    <li><a href="{{url('chart-nvd3')}}" class="slide-item"> Nvd3 Charts</a></li>
                                    <li><a href="{{url('charts')}}" class="slide-item"> C3 Bar Charts</a></li>
                                    <li><a href="{{url('chart-line')}}" class="slide-item"> C3 Line Charts</a></li>
                                    <li><a href="{{url('chart-donut')}}" class="slide-item"> C3 Donut Charts</a></li>
                                    <li><a href="{{url('chart-pie')}}" class="slide-item"> C3 Pie charts</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-wind"></i><span class="side-menu__label">Icons</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Icons</a></li>
                                    <li><a href="{{url('icons')}}" class="slide-item"> Font Awesome</a></li>
                                    <li><a href="{{url('icons2')}}" class="slide-item"> Material Design Icons</a></li>
                                    <li><a href="{{url('icons3')}}" class="slide-item"> Simple Line Icons</a></li>
                                    <li><a href="{{url('icons4')}}" class="slide-item"> Feather Icons</a></li>
                                    <li><a href="{{url('icons5')}}" class="slide-item"> Ionic Icons</a></li>
                                    <li><a href="{{url('icons6')}}" class="slide-item"> Flag Icons</a></li>
                                    <li><a href="{{url('icons7')}}" class="slide-item"> pe7 Icons</a></li>
                                    <li><a href="{{url('icons8')}}" class="slide-item"> Themify Icons</a></li>
                                    <li><a href="{{url('icons9')}}" class="slide-item">Typicons Icons</a></li>
                                    <li><a href="{{url('icons10')}}" class="slide-item">Weather Icons</a></li>
                                    <li><a href="{{url('icons11')}}" class="slide-item">Bootstrap Icons</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>
            <!--app-sidebar-->
