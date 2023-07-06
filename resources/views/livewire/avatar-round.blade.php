@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                           <!-- PAGE-HEADER -->
                           <div class="page-header">
                            <h1 class="page-title">Avatar-Rounded</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Componets</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Avatar-Rounded</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Simple Round avatar</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use classes<code class="highlighter-rouge">.avatar</code> in <code class="highlighter-rouge">.brround</code>.</p>
                                            <div class="example">
                                                <div class="avatar-list">
                                                    <span class="avatar  brround cover-image" data-bs-image-src="{{asset('assets/images/users/12.jpg')}}"></span>
                                                    <span class="avatar  brround cover-image" data-bs-image-src="{{asset('assets/images/users/13.jpg')}}"></span>
                                                    <span class="avatar  brround cover-image" data-bs-image-src="{{asset('assets/images/users/11.jpg')}}"></span>
                                                    <span class="avatar  brround cover-image" data-bs-image-src="{{asset('assets/images/users/12.jpg')}}"></span>
                                                    <span class="avatar  brround cover-image" data-bs-image-src="{{asset('assets/images/users/14.jpg')}}"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">RoundAvatars list</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use classes <code class="highlighter-rouge">.avatar-list </code> in <code class="highlighter-rouge">.brround</code> and <code class="highlighter-rouge">.avatar-list-stacked</code>.</p>
                                            <div class="example">
                                                <div class="avatar-list avatar-list-stacked">
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/12.jpg')}}"></span>
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/1.jpg')}}"></span>
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/19.jpg')}}"></span>
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/2.jpg')}}"></span>
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/14.jpg')}}"></span>
                                                    <span class="avatar brround cover-image bg-primary">+8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">RoundAvatar with icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use classes <code class="highlighter-rouge">.avatar-icons</code> .</p>
                                            <div class="example">
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-xl brround cover-image" data-bs-image-src="{{asset('assets/images/users/21.jpg')}}">
                                                        <span class="badge rounded-pill avatar-icons bg-primary"><i class="fe fe-edit fs-12"></i></span></span>
                                                    <span class="avatar avatar-xl brround cover-image" data-bs-image-src="{{asset('assets/images/users/5.jpg')}}">
                                                            <span class="badge rounded-pill avatar-icons bg-secondary"><i class="fe fe-arrow-down fs-12"></i></span>
                                                    </span>
                                                    <span class="avatar avatar-xl brround cover-image" data-bs-image-src="{{asset('assets/images/users/9.jpg')}}">
                                                        <span class="badge rounded-pill avatar-icons bg-red"><i class="fe fe-lock fs-12"></i></span>
                                                    </span>
                                                    <span class="avatar avatar-xl brround cover-image" data-bs-image-src="{{asset('assets/images/users/6.jpg')}}">
                                                        <span class="badge rounded-pill avatar-icons bg-green"><i class="fe fe-camera fs-12"></i></span>
                                                    </span>
                                                    <span class="avatar avatar-xl brround cover-image" data-bs-image-src="{{asset('assets/images/users/7.jpg')}}">
                                                        <span class="badge rounded-pill avatar-icons bg-yellow"><i class="fe fe-bell fs-12"></i></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">RoundAvatar size</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use classes <code class="highlighter-rouge">.avatar-sm</code> , <code class="highlighter-rouge">.avatar-md</code> , <code class="highlighter-rouge">.avatar-lg</code> , <code class="highlighter-rouge">.avatar-xl</code>                                            , <code class="highlighter-rouge">.avatar-xxl</code> .</p>
                                            <div class="example">
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-sm brround cover-image" data-bs-image-src="{{asset('assets/images/users/15.jpg')}}"></span>
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/13.jpg')}}"></span>
                                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('assets/images/users/16.jpg')}}"></span>
                                                    <span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('assets/images/users/17.jpg')}}"></span>
                                                    <span class="avatar avatar-xl brround cover-image" data-bs-image-src="{{asset('assets/images/users/14.jpg')}}"></span>
                                                    <span class="avatar avatar-xxl brround cover-image" data-bs-image-src="{{asset('assets/images/users/18.jpg')}}"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-2 OPEN -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">RoundAvatar status</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use classes <code class="highlighter-rouge">.avatar-status</code> .</p>
                                            <div class="example">
                                                <div class="avatar-list">
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/19.jpg')}}"></span>
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/15.jpg')}}">
                                                            <span class="avatar-status bg-secondary"></span>
                                                    </span>
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/20.jpg')}}">
                                                            <span class="avatar-status bg-red"></span>
                                                    </span>
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/11.jpg')}}">
                                                            <span class="avatar-status bg-green"></span>
                                                    </span>
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/17.jpg')}}">
                                                            <span class="avatar-status bg-yellow"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">RoundAvatar with Badges</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use classes <code class="highlighter-rouge">.avatar-badges</code> .</p>
                                            <div class="example">
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('assets/images/users/19.jpg')}}">
                                                        <span class="badge rounded-pill avatar-badges bg-primary fs-10">3</span>
                                                    </span>
                                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('assets/images/users/15.jpg')}}">
                                                        <span class="badge rounded-pill avatar-badges bg-secondary fs-10">1</span>
                                                    </span>
                                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('assets/images/users/20.jpg')}}">
                                                            <span class="badge rounded-pill avatar-badges bg-red fs-10">4</span>
                                                    </span>
                                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('assets/images/users/11.jpg')}}">
                                                            <span class="badge rounded-pill avatar-badges bg-green fs-10">6</span>
                                                    </span>
                                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('assets/images/users/17.jpg')}}">
                                                            <span class="badge rounded-pill avatar-badges bg-yellow fs-10">4</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <!-- COL END -->
                            <div class="col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar initials with colors</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="example">
                                                <p>Use classes <code class="highlighter-rouge">.avatar-sm</code> , <code class="highlighter-rouge">.avatar-md</code> , <code class="highlighter-rouge">.avatar-lg</code> , <code class="highlighter-rouge">.avatar-xl</code>                                                , <code class="highlighter-rouge">.avatar-xxl</code> .</p>
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-sm brround bg-success">A</span>
                                                    <span class="avatar brround bg-warning">B</span>
                                                    <span class="avatar avatar-md brround bg-danger">C</span>
                                                    <span class="avatar avatar-lg brround bg-info">D</span>
                                                    <span class="avatar avatar-xl brround bg-secondary">GE</span>
                                                    <span class="avatar avatar-xxl brround bg-primary">A.N</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-3 OPEN -->

        @endsection

    @section('scripts')



    @endsection
