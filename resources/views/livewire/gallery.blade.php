@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Gallery</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- GALLERY DEMO OPEN -->
                        <div class="masonry row">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="brick">
                                    <a href="{{asset('assets/images/media/1.jpg')}}" class="js-img-viewer" data-caption="IMAGE-01"
                                        data-id="lion">
                                        <img src="{{asset('assets/images/media/1.jpg')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="brick">
                                    <a href="{{asset('assets/images/media/2.jpg')}}" class="js-img-viewer" data-caption="IMAGE-02"
                                        data-id="camel">
                                        <img src="{{asset('assets/images/media/2.jpg')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="brick">
                                    <a href="{{asset('assets/images/media/3.jpg')}}" class="js-img-viewer" data-caption="IMAGE-03"
                                        data-id="hippo">
                                        <img src="{{asset('assets/images/media/3.jpg')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="brick">
                                    <a href="{{asset('assets/images/media/4.jpg')}}" class="js-img-viewer" data-caption="IMAGE-04"
                                        data-id="koala">
                                        <img src="{{asset('assets/images/media/4.jpg')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="brick">
                                    <a href="{{asset('assets/images/media/5.jpg')}}"  class="js-img-viewer" data-caption="IMAGE-05"
                                        data-id=" bear">
                                        <img src=" {{asset('assets/images/media/5.jpg')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="brick">
                                    <a href=" {{asset('assets/images/media/6.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-06"
                                        data-id=" rhino">
                                        <img src=" {{asset('assets/images/media/6.jpg')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="brick">
                                    <a href=" {{asset('assets/images/media/7.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-07"
                                        data-id=" rhino">
                                        <img src=" {{asset('assets/images/media/7.jpg')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="brick">
                                    <a href=" {{asset('assets/images/media/8.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-08"
                                        data-id=" rhino">
                                        <img src=" {{asset('assets/images/media/8.jpg')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="brick">
                                    <a href=" {{asset('assets/images/media/9.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-09"
                                        data-id=" rhino">
                                        <img src=" {{asset('assets/images/media/9.jpg')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="brick">
                                    <a href=" {{asset('assets/images/media/10.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-10"
                                        data-id=" rhino">
                                        <img src=" {{asset('assets/images/media/10.jpg')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="brick">
                                    <a href=" {{asset('assets/images/media/11.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-11"
                                        data-id=" rhino">
                                        <img src=" {{asset('assets/images/media/11.jpg')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="brick">
                                    <a href=" {{asset('assets/images/media/14.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-11"
                                        data-id=" rhino">
                                        <img src=" {{asset('assets/images/media/14.jpg')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- GALLERY DEMO CLOSED -->

                        <!-- PAGINATION OPEN -->
                        <div class=" row mb-5">
                            <div class=" col-md-6 mt-1 d-none d-md-block">1 - 10 of 234 photos</div>
                            <div class=" col-md-6">
                                <div class=" float-end">
                                    <ul class=" pagination">
                                        <li class=" page-item page-prev disabled">
                                            <a class=" page-link" href="javascript:void(0)">Prev</a>
                                        </li>
                                        <li class=" page-item active"><a class=" page-link" href=" #">1</a></li>
                                        <li class=" page-item"><a class=" page-link" href=" #">2</a></li>
                                        <li class=" page-item"><a class=" page-link" href=" #">3</a></li>
                                        <li class=" page-item"><a class=" page-link" href=" #">4</a></li>
                                        <li class=" page-item"><a class=" page-link" href=" #">5</a></li>
                                        <li class=" page-item page-next">
                                            <a class=" page-link" href=" #">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- PAGINATION CLOSED -->

        @endsection

    @section('scripts')

    <!-- GALLERY JS -->
    <script src="{{asset('assets/plugins/SmartPhoto-master/smartphoto.js')}}"></script>
    <script src="{{asset('assets/js/gallery.js')}}"></script>

    @endsection
