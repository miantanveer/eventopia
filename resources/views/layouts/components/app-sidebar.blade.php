            <!--app-sidebar-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                {{-- <div class="app-sidebar bg-primary">   test-bar => this class is use to change the color of sidebar(black) --}}
                 <div class="app-sidebar bg-custom-black"> 
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
                        <ul class="side-menu">
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{URL('/dashboard')}}"><i class="side-menu__icon text-white fe fe-home"></i><span class="side-menu__label text-white">{{lang('Dashboard')}}</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{route('spaces')}}"><i class="side-menu__icon text-white fa fa-calendar"></i><span class="side-menu__label text-white">{{lang('Book a Space')}}</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{route('entertainments_index')}}"><i class="side-menu__icon text-white fa fa-calendar"></i><span class="side-menu__label text-white">{{lang('Book an Entertainment & Talent')}}</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{route('services')}}"><i class="side-menu__icon text-white fa fa-calendar"></i><span class="side-menu__label text-white">{{lang('Book a Service')}}</span></a>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>
            <!--app-sidebar-->
