@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Mediaobject</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Advanced Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mediaobject</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card Relatedpost nested-media">
                                    <div class="card-header">
                                        <h3 class="card-title">Default Mediaobject</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example">
                                            <div class="media media-lg mt-0">
                                                <img class="avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('assets/images/media/media3.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h4 class="mt-0">Media heading</h4>
                                                    <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card Relatedpost nested-media overflow-hidden">
                                    <div class="card-header">
                                        <h3 class="card-title">Nesting Mediaobject</h3>
                                    </div>
                                    <div class="card-body overflow-hidden">
                                        <div class="example">
                                            <div class="media media-lg mt-0">
                                                <img class="avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('assets/images/media/media5.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body overflow-hidden">
                                                    <h4 class="mt-0">Media heading</h4>
                                                    <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                    <div class="media media-lg mt-3">
                                                        <img class="avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('assets/images/media/media2.jpg')}}" alt="Generic placeholder image">
                                                        <div class="media-body overflow-hidden">
                                                            <h4 class="mt-0">Media heading</h4>
                                                            <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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
                        <!-- ROW-2 CLOSED -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card Relatedpost nested-media">
                                    <div class="card-header">
                                        <h3 class="card-title">List Mediaobject</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example">
                                            <ul class="list-unstyled">
                                                <li class="media media-lg mt-0 border-bottom-0">
                                                    <img class="avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('assets/images/media/media4.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-1">Media heading 01</h4>
                                                       <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                    </div>
                                                </li>
                                                <li class="media media-lg my-4 border-bottom-0">
                                                    <img class="avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('assets/images/media/media5.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-1">Media heading 02</h4>
                                                       <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                    </div>
                                                </li>
                                                <li class="media media-lg border-bottom-0">
                                                    <img class="avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('assets/images/media/media3.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-1">Media heading 03</h4>
                                                       <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-3 CLOSED -->

                        <!-- ROW-4 OPEN -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card Relatedpost nested-media">
                                    <div class="card-header">
                                        <h3 class="card-title">Alignments Mediaobject</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example">
                                            <div class="media media-lg mt-0">
                                                <img class="align-self-start avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('assets/images/media/media3.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h4 class="mt-0">Top-aligned media</h4>
                                                    <p class="text-muted fs-14">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    <p class="text-muted fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                        explicabo.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="media media-lg">
                                                <img class="align-self-center avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('assets/images/media/media5.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h4 class="mt-0">Center-aligned media</h4>
                                                    <p class="text-muted fs-14">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    <p class="text-muted fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                        explicabo.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="media media-lg">
                                                <img class="align-self-end avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('assets/images/media/media4.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h4 class="mt-0">Bottom-aligned media</h4>
                                                    <p class="text-muted fs-14">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                        explicabo.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-4 CLOSED -->

                        <!-- ROW-5 OPEN -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card Relatedpost nested-media ">
                                    <div class="card-header">
                                        <h3 class="card-title">Order Mediaobject</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example">
                                            <div class="media media-lg mt-0">
                                                <div class="media-body mt-0">
                                                    <h4 class="mt-0 mb-4">Media object</h4>
                                                    <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                </div>
                                                <img class="ms-2 mt-3 mb-3 bradius w-100p h-10" src="{{asset('assets/images/media/media2.jpg')}}" alt="Generic placeholder image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-5 CLOSED -->

        @endsection

    @section('scripts')



    @endsection
