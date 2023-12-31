@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">About</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row py-5">
                        <div class="text-center">
                            <h4 class="display-5 fw-semibold">Our mission is to make Work Meaningful.</h4>
                            <p class="">If you are going to use a passage of Lorem Ipsum, you need to as necessary All the Lorem Ipsum generators on the Internet tend to repeat Various versions have evolved over repeat Various versions have evolved over.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 CLOSED -->

            <!-- ROW-2 OPEN-->
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{asset('assets/images/media/team.jpg')}}" alt="" class="br-5">
                </div>
            </div>
            <!-- ROW-2 CLOSED -->

            <!-- ROW-3 OPEN -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-7">
                        <div class="card-body p-5 text-dark">
                            <div class="statistics-info p-4">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="">
                                            <h2 class="fw-bold">We Help to <span class="text-primary">Build</span> Your Dream Project.</h2>
                                            <h4 class="leading-normal">majority have suffered alteration in some form, by injected humour</h4>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour, or randomised words which don't look even slightly believable.</p>
                                            <p>All the Lorem Ipsum generators on the Internet tend to repeat Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                            <p> If you are going to use a passage of Lorem Ipsum, you need to as necessary All the Lorem Ipsum generators on the Internet tend to repeat Various versions have evolved over the years, sometimes by
                                                accident, sometimes on purpose (injected humour and the like).</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="text-center">
                                            <img src="{{asset('assets/images/media/team-startup.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-3 CLOSED -->

            <!-- ROW-4 OPEN -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mt-5">
                        <div class="card-body about-con pabout">
                            <h1 class="mb-4 fw-semibold">Why Sash ?</h1>
                            <h4 class="leading-normal">majority have suffered alteration in some form, by injected humour</h4>
                            <p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
                                of Lorem Ipsum, you need to as necessary All the Lorem Ipsum generators on the Internet tend to repeat Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour
                                and the like).</p>
                            <a href="javascript:void(0)" class="btn btn-primary  mt-2">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mt-5">
                    <div class="card">
                        <div class="card-body pabout">
                            <h1 class="mb-4 fw-semibold">What is Our Services?</h1>
                            <h4 class="leading-normal">majority have suffered alteration in some form, by injected humour</h4>
                            <p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
                                of Lorem Ipsum, you need to as necessary All the Lorem Ipsum generators on the Internet tend to repeat Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour
                                and the like).</p>
                            <a href="javascript:void(0)" class="btn btn-primary mt-2">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-4 CLOSED -->

            <!-- ROW-5 OPEN-->
            <div class="row mt-5">
                <div class="text-center">
                    <h2 class="fw-semibold mb-2">Meet our creative minds</h2>
                    <h5>Our Leadership</h5>
                </div>
                <!-- COL-OPEN -->
                <div class="col-xl-3 col-lg-6 mt-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <span class="avatar avatar-xxl bradius cover-image" data-bs-image-src="{{asset('assets/images/users/2.jpg')}}" style="background: url(&quot;{{asset('assets/images/users/15.jpg')}}&quot;) center center;"></span>
                            <h4 class="h4 mb-0 mt-3">Mike Rowe-Soft</h4>
                            <p class="card-text">Web designer</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                            <div class="row user-social-detail text-center">
                                <div class="social-profile me-4 rounded text-center bg-secondary-transparent">
                                    <a href=""><i class="fa fa-google text-secondary"></i></a>
                                </div>
                                <div class="social-profile me-4 rounded text-center bg-danger-transparent">
                                    <a href=""><i class="fa fa-facebook text-danger"></i></a>
                                </div>
                                <div class="social-profile rounded text-center bg-success-transparent">
                                    <a href=""><i class="fa fa-twitter text-success"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL-END -->

                <!-- COL-OPEN -->
                <div class="col-xl-3 col-lg-6 mt-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <span class="avatar avatar-xxl bradius cover-image" data-bs-image-src="{{asset('assets/images/users/2.jpg')}}" style="background: url(&quot;{{asset('assets/images/users/15.jpg')}}&quot;) center center;"></span>
                            <h4 class="h4 mb-0 mt-3">Mike Rowe-Soft</h4>
                            <p class="card-text">Web designer</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                            <div class="row user-social-detail text-center">
                                <div class="social-profile me-4 rounded text-center bg-secondary-transparent">
                                    <a href=""><i class="fa fa-google text-secondary"></i></a>
                                </div>
                                <div class="social-profile me-4 rounded text-center bg-danger-transparent">
                                    <a href=""><i class="fa fa-facebook text-danger"></i></a>
                                </div>
                                <div class="social-profile rounded text-center bg-success-transparent">
                                    <a href=""><i class="fa fa-twitter text-success"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL-END -->

                <!-- COL-OPEN -->
                <div class="col-xl-3 col-lg-6 mt-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <span class="avatar avatar-xxl bradius cover-image" data-bs-image-src="{{asset('assets/images/users/9.jpg')}}" style="background: url(&quot;{{asset('assets/images/users/15.jpg')}}&quot;) center center;"></span>
                            <h4 class="h4 mb-0 mt-3">Mike Rowe-Soft</h4>
                            <p class="card-text">Web designer</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                            <div class="row user-social-detail text-center">
                                <div class="social-profile me-4 rounded text-center bg-secondary-transparent">
                                    <a href=""><i class="fa fa-google text-secondary"></i></a>
                                </div>
                                <div class="social-profile me-4 rounded text-center bg-danger-transparent">
                                    <a href=""><i class="fa fa-facebook text-danger"></i></a>
                                </div>
                                <div class="social-profile rounded text-center bg-success-transparent">
                                    <a href=""><i class="fa fa-twitter text-success"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL-END -->

                <!-- COL-OPEN -->
                <div class="col-xl-3 col-lg-6 mt-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <span class="avatar avatar-xxl bradius cover-image" data-bs-image-src="{{asset('assets/images/users/4.jpg')}}" style="background: url(&quot;{{asset('assets/images/users/15.jpg')}}&quot;) center center;"></span>
                            <h4 class="h4 mb-0 mt-3">Mike Rowe-Soft</h4>
                            <p class="card-text">Web designer</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                            <div class="row user-social-detail text-center">
                                <div class="social-profile me-4 rounded text-center bg-secondary-transparent">
                                    <a href=""><i class="fa fa-google text-secondary"></i></a>
                                </div>
                                <div class="social-profile me-4 rounded text-center bg-danger-transparent">
                                    <a href=""><i class="fa fa-facebook text-danger"></i></a>
                                </div>
                                <div class="social-profile rounded text-center bg-success-transparent">
                                    <a href=""><i class="fa fa-twitter text-success"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL-END -->
            </div>
            <!-- ROW-5 CLOSED -->

            <!-- ROW-6 OPEN-->
            <div class="row mt-5">
                <h2 class="text-center fw-semibold">Our Services</h2>
                <div class="col-lg-12">
                    <div class="mt-3">
                        <div class="text-dark">
                            <div class="services-statistics">
                                <div class="row text-center">
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="counter-status">
                                                    <div class="counter-icon bg-primary-gradient box-shadow-primary">
                                                        <i class="icon icon-people text-white"></i>
                                                    </div>
                                                    <h4 class="mb-2 fw-semibold">Branding</h4>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="counter-status">
                                                    <div class="counter-icon bg-secondary-gradient box-shadow-secondary">
                                                        <i class="icon icon-rocket text-white"></i>
                                                    </div>
                                                    <h4 class="mb-2 fw-semibold">Development</h4>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="counter-statuss">
                                                    <div class="counter-icon bg-success-gradient box-shadow-success">
                                                        <i class="fe fe-instagram text-white"></i>
                                                    </div>
                                                    <h4 class="mb-2 fw-semibold">Social Media</h4>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="counter-status">
                                                    <div class="counter-icon bg-danger-gradient box-shadow-danger">
                                                        <i class="fe fe-shopping-cart text-white"></i>
                                                    </div>
                                                    <h4 class="mb-2 fw-semibold">E-Commerce</h4>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL-END -->
            </div>
            <!-- ROW-6 CLOSED -->

         @endsection

    @section('scripts')

    @endsection

