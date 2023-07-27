            <!--app-sidebar-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar bg-primary">
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
                        <ul class="side-menu">
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{URL('/seller-dashboard')}}"><i class="side-menu__icon text-white fe fe-home"></i><span class="side-menu__label text-white"> Dashboard</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{URL('/add-space-steps')}}"><img class="me-2" src="{{asset('assets/images/icons/list-space.png')}}" alt=""><span class="side-menu__label text-white"> List a Space</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{URL('/entertainment-list-steps')}}"><img class="me-2" src="{{asset('assets/images/icons/list-entertainment.png')}}" alt=""><span class="side-menu__label text-white"> List an Entertainment & Talent</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{URL('list-service')}}"><img class="me-2" src="{{asset('assets/images/icons/list-service.png')}}" alt=""><span class="side-menu__label text-white"> List a Service</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{URL('/my-listings')}}"><img class="me-2" src="{{asset('assets/images/icons/my-listing.png')}}" alt=""><span class="side-menu__label text-white"> My Listing</span></a>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>
            <!--app-sidebar-->
