@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">Badges</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Componets</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Badges</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW-1 OPEN -->
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h3 class="card-title">Badges</h3>
                                        </div>
                                        <div class="card-body">
                                            <p>Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
                                            <div class="example">
                                                <span class="badge bg-default badge-sm me-1 mb-1 mt-1">Default</span>
                                                <span class="badge bg-primary badge-sm  me-1 mb-1 mt-1">Primary</span>
                                                <span class="badge bg-success badge-sm  me-1 mb-1 mt-1">Success</span>
                                                <span class="badge bg-danger badge-sm  me-1 mb-1 mt-1">Danger</span>
                                                <span class="badge bg-info badge-sm  me-1 mb-1 mt-1">Info</span>
                                                <span class="badge bg-warning badge-sm  me-1 mb-1 mt-1">Warning</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-12 col-lg-6">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h3 class="card-title">Pill Badges</h3>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted card-sub-title">Use the <code class="highlighter-rouge">.rounded-pill</code> modifier class to make badges more rounded.</p>
                                            <div class="example">
                                                <span class="badge rounded-pill bg-default badge-sm me-1 mb-1 mt-1">Default</span>
                                                <span class="badge rounded-pill bg-primary badge-sm me-1 mb-1 mt-1">Primary</span>
                                                <span class="badge rounded-pill bg-success badge-sm me-1 mb-1 mt-1">Success</span>
                                                <span class="badge rounded-pill bg-danger badge-sm me-1 mb-1 mt-1">Danger</span>
                                                <span class="badge rounded-pill bg-info badge-sm me-1 mb-1 mt-1">Info</span>
                                                <span class="badge rounded-pill bg-warning badge-sm me-1 mb-1 mt-1">Warning</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-12 col-lg-6">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h3 class="card-title">Gradient Badges</h3>
                                        </div>
                                        <div class="card-body">
                                            <p>Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
                                            <div class="example">
                                                <span class="badge bg-default badge-sm me-1 mb-1 mt-1">Default</span>
                                                <span class="badge bg-primary-gradient badge-sm  me-1 mb-1 mt-1">Primary</span>
                                                <span class="badge bg-success-gradient badge-sm  me-1 mb-1 mt-1">Success</span>
                                                <span class="badge bg-danger-gradient badge-sm  me-1 mb-1 mt-1">Danger</span>
                                                <span class="badge bg-info-gradient badge-sm  me-1 mb-1 mt-1">Info</span>
                                                <span class="badge bg-warning-gradient badge-sm  me-1 mb-1 mt-1">Warning</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-12 col-lg-6">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h3 class="card-title">Gradient Pill Badges</h3>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted card-sub-title">Use the <code class="highlighter-rouge">.rounded-pill</code> modifier class to make badges more rounded.</p>
                                            <div class="example">
                                                <span class="badge rounded-pill bg-default badge-sm me-1 mb-1 mt-1">Default</span>
                                                <span class="badge rounded-pill bg-primary-gradient badge-sm me-1 mb-1 mt-1">Primary</span>
                                                <span class="badge rounded-pill bg-success-gradient badge-sm me-1 mb-1 mt-1">Success</span>
                                                <span class="badge rounded-pill bg-danger-gradient badge-sm me-1 mb-1 mt-1">Danger</span>
                                                <span class="badge rounded-pill bg-info-gradient badge-sm me-1 mb-1 mt-1">Info</span>
                                                <span class="badge rounded-pill bg-warning-gradient badge-sm me-1 mb-1 mt-1">Warning</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                            </div>
                            <!-- ROW-1 CLOSED -->

                            <!-- ROW-2 OPEN -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h3 class="card-title">Buttons with Badges</h3>
                                        </div>
                                        <div class="card-body ">
                                            <p>Badges can be used as part of links or buttons to provide a counter.</p>
                                            <div class="example">
                                                <button type="button" class="btn btn-primary mt-1 mb-1 me-3">
                                                        <span>Notifications</span>
                                                        <span class="badge bg-white text-primary ms-2">2</span>
                                                    </button>
                                                <button type="button" class="btn btn-secondary mt-1 mb-1 me-3">
                                                        <span>Notifications</span>
                                                        <span class="badge bg-white text-secondary ms-2">2</span>
                                                    </button>
                                                <button type="button" class="btn btn-success  mt-1 mb-1 me-3">
                                                        <span>Notifications</span>
                                                        <span class="badge bg-white text-success ms-2">2</span>
                                                    </button>
                                                <button type="button" class="btn btn-info  mt-1 mb-1 me-3">
                                                        <span>Notifications</span>
                                                        <span class="badge bg-white text-info ms-2">2</span>
                                                    </button>
                                                <button type="button" class="btn btn-warning mt-1 mb-1 me-3">
                                                        <span>Notifications</span>
                                                        <span class="badge bg-white text-warning ms-2">2</span>
                                                    </button>
                                                <button type="button" class="btn btn-danger  mt-1 mb-1 me-3">
                                                        <span>Notifications</span>
                                                        <span class="badge bg-white text-danger ms-2">2</span>
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-xl-12">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h3 class="card-title">Buttons with Rounded Badges</h3>
                                        </div>
                                        <div class="card-body ">
                                            <p>Badges can be used as part of links or buttons to provide a counter.</p>
                                            <div class="example">
                                                <button type="button" class="btn btn-primary position-relative me-5 mb-2"> Projects
                                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">20+
                                                        <span class="visually-hidden">unread messages</span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-secondary position-relative me-5 mb-2"> Projects
                                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">20+
                                                        <span class="visually-hidden">unread messages</span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-success position-relative me-5 mb-2"> Projects
                                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">20+
                                                        <span class="visually-hidden">unread messages</span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-info position-relative me-5 mb-2"> Projects
                                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">20+
                                                        <span class="visually-hidden">unread messages</span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-warning position-relative me-5 mb-2"> Projects
                                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">20+
                                                        <span class="visually-hidden">unread messages</span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-green position-relative me-5 mb-2"> Projects
                                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">20+
                                                        <span class="visually-hidden">unread messages</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->

                            </div>
                            <!-- ROW-2 CLOSED -->

                            <!-- ROW-3 OPEN -->
                            <div class="row">
                                <div class="col-md-12 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Heading Badges</h3>
                                        </div>
                                        <div class="card-body">
                                            <p>Badges scale to match the size of the immediate parent element by using relative font sizing and <code class="highlighter-rouge">em</code> units. As of v5, badges no longer have focus or hover styles for links.</p>
                                            <div class="example">
                                                <h1>Heading 01 <span class="badge bg-default">New</span></h1>
                                                <h2>Heading 02 <span class="badge bg-default">New</span></h2>
                                                <h3>Heading 03 <span class="badge bg-default">New</span></h3>
                                                <h4>Heading 04 <span class="badge bg-default">New</span></h4>
                                                <h5>Heading 05 <span class="badge bg-default">New</span></h5>
                                                <h6>Heading 06 <span class="badge bg-default">New</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-12 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Color Heading Badges</h3>
                                        </div>
                                        <div class="card-body">
                                            <p>Badges scale to match the size of the immediate parent element by using relative font sizing and <code class="highlighter-rouge">em</code> units. As of v5, badges no longer have focus or hover styles for links.</p>
                                            <div class="example">
                                                <h1 class="text-primary">Heading 01 <span class="badge bg-primary">New</span></h1>
                                                <h2 class="text-red">Heading 02 <span class="badge bg-danger">New</span></h2>
                                                <h3 class="text-yellow">Heading 03 <span class="badge bg-warning">New</span></h3>
                                                <h4 class="text-green">Heading 04 <span class="badge bg-success">New</span></h4>
                                                <h5 class="text-info">Heading 05 <span class="badge bg-info">New</span></h5>
                                                <h6 class="text-secondary">Heading 06 <span class="badge bg-secondary">New</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-3 CLOSED -->

        @endsection

    @section('scripts')



    @endsection
