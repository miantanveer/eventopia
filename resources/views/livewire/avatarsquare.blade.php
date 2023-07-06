@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                           <!-- PAGE-HEADER -->
                           <div class="page-header">
                            <h1 class="page-title">Avatar-Square</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Componets</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Avatar-Square</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Simple avatar</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use classes<code class="highlighter-rouge">.avatar</code>.</p>
                                            <div class="example">
                                                <div class="avatar-list">
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/1.jpg')}}"></span>
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/2.jpg')}}"></span>
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/1.jpg')}}"></span>
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/2.jpg')}}"></span>
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/3.jpg')}}"></span>
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
                                        <h3 class="card-title">Avatars list</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use classes <code class="highlighter-rouge">.avatar-list </code> and <code class="highlighter-rouge">.avatar-list-stacked</code>.</p>
                                            <div class="example">
                                                <div class="avatar-list avatar-list-stacked">
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/21.jpg')}}"></span>
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/21.jpg')}}"></span>
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/9.jpg')}}"></span>
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/21.jpg')}}"></span>
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/11.jpg')}}"></span>
                                                    <span class="avatar bg-primary">+8</span>
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
                                        <h3 class="card-title">Avatar status</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use classes <code class="highlighter-rouge">.avatar-status</code> .</p>
                                            <div class="example">
                                                <div class="avatar-list">
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/21.jpg')}}"></span>
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/5.jpg')}}">
                                                            <span class="avatar-status bg-primary"></span>
                                                    </span>
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/9.jpg')}}">
                                                            <span class="avatar-status bg-red"></span>
                                                    </span>
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/6.jpg')}}">
                                                            <span class="avatar-status bg-green"></span>
                                                    </span>
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/7.jpg')}}">
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
                                        <h3 class="card-title">Avatar with Badges</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use classes <code class="highlighter-rouge">.avatar-badges</code> .</p>
                                            <div class="example">
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-md cover-image" data-bs-image-src="{{asset('assets/images/users/21.jpg')}}">
                                                        <span class="badge rounded-pill avatar-badges bg-primary fs-10">3</span></span>
                                                    <span class="avatar avatar-md cover-image" data-bs-image-src="{{asset('assets/images/users/5.jpg')}}">
                                                            <span class="badge rounded-pill avatar-badges bg-secondary fs-10">1</span>
                                                    </span>
                                                    <span class="avatar avatar-md cover-image" data-bs-image-src="{{asset('assets/images/users/9.jpg')}}">
                                                        <span class="badge rounded-pill avatar-badges bg-red fs-10">4</span>
                                                    </span>
                                                    <span class="avatar avatar-md cover-image" data-bs-image-src="{{asset('assets/images/users/6.jpg')}}">
                                                        <span class="badge rounded-pill avatar-badges bg-green fs-10">6</span>
                                                    </span>
                                                    <span class="avatar avatar-md cover-image" data-bs-image-src="{{asset('assets/images/users/7.jpg')}}">
                                                        <span class="badge rounded-pill avatar-badges bg-yellow fs-10">4</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 OPEN -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <!-- COL END -->
                            <div class="col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar with icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use classes <code class="highlighter-rouge">.avatar-icons</code> .</p>
                                            <div class="example">
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-xl cover-image" data-bs-image-src="{{asset('assets/images/users/21.jpg')}}">
                                                        <span class="badge rounded-pill avatar-icons bg-primary"><i class="fe fe-edit fs-12"></i></span></span>
                                                    <span class="avatar avatar-xl cover-image" data-bs-image-src="{{asset('assets/images/users/5.jpg')}}">
                                                            <span class="badge rounded-pill avatar-icons bg-secondary"><i class="fe fe-arrow-down fs-12"></i></span>
                                                    </span>
                                                    <span class="avatar avatar-xl cover-image" data-bs-image-src="{{asset('assets/images/users/9.jpg')}}">
                                                        <span class="badge rounded-pill avatar-icons bg-red"><i class="fe fe-lock fs-12"></i></span>
                                                    </span>
                                                    <span class="avatar avatar-xl cover-image" data-bs-image-src="{{asset('assets/images/users/6.jpg')}}">
                                                        <span class="badge rounded-pill avatar-icons bg-green"><i class="fe fe-camera fs-12"></i></span>
                                                    </span>
                                                    <span class="avatar avatar-xl cover-image" data-bs-image-src="{{asset('assets/images/users/7.jpg')}}">
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
                                        <h3 class="card-title">Avatar size</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="example">
                                                <p>Use classes <code class="highlighter-rouge">.avatar-sm</code> , <code class="highlighter-rouge">.avatar-md</code> , <code class="highlighter-rouge">.avatar-lg</code> , <code class="highlighter-rouge">.avatar-xl</code>                                                , <code class="highlighter-rouge">.avatar-xxl</code> .</p>
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-sm cover-image" data-bs-image-src="{{asset('assets/images/users/4.jpg')}}"></span>
                                                    <span class="avatar cover-image" data-bs-image-src="{{asset('assets/images/users/3.jpg')}}"></span>
                                                    <span class="avatar avatar-md cover-image" data-bs-image-src="{{asset('assets/images/users/5.jpg')}}"></span>
                                                    <span class="avatar avatar-lg cover-image" data-bs-image-src="{{asset('assets/images/users/6.jpg')}}"></span>
                                                    <span class="avatar avatar-xl cover-image" data-bs-image-src="{{asset('assets/images/users/4.jpg')}}"></span>
                                                    <span class="avatar avatar-xxl cover-image" data-bs-image-src="{{asset('assets/images/users/7.jpg')}}"></span>
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
                                        <h3 class="card-title">Avatar initials with colors</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="example">
                                                <p>Use classes <code class="highlighter-rouge">.avatar-sm</code> , <code class="highlighter-rouge">.avatar-md</code> , <code class="highlighter-rouge">.avatar-lg</code> , <code class="highlighter-rouge">.avatar-xl</code>                                                , <code class="highlighter-rouge">.avatar-xxl</code> .</p>
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-sm bg-success">A</span>
                                                    <span class="avatar bg-warning">B</span>
                                                    <span class="avatar avatar-md bg-danger">C</span>
                                                    <span class="avatar avatar-lg bg-info">D</span>
                                                    <span class="avatar avatar-xl bg-secondary">GE</span>
                                                    <span class="avatar avatar-xxl bg-primary">A.N</span>
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
