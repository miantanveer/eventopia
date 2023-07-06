@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Dropdowns</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Componets</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dropdown</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Single button dropdowns</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Any single <code class="highlighter-rouge">.btn</code> can be turned into a dropdown toggle with some markup changes.The best part is you can do this with any button variant, too</p>
                                            <div class="example">
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Single Square outline button dropdowns</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Any single <code class="highlighter-rouge">.btn</code> can be turned into a dropdown toggle with some markup changes.The best part is you can do this with any button variant, too</p>
                                            <div class="example">
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Single Light button dropdowns</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Any single <code class="highlighter-rouge">.btn</code> can be turned into a dropdown toggle with some markup changes.The best part is you can do this with any button variant, too</p>
                                            <div class="example">
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-primary-light dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-success-light dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-info-light dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-warning-light dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-danger-light dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Rounded Light button dropdowns</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Any single <code class="highlighter-rouge">.btn</code> can be turned into a dropdown toggle with some markup changes.The best part is you can do this with any button variant, too</p>
                                            <div class="example">
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-default btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-primary-light btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-success-light btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-info-light btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-warning-light btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-danger-light btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Rounded button dropdowns</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Any single <code class="highlighter-rouge">.btn</code> can be turned into a dropdown toggle with some markup changes.The best part is you can do this with any button variant, too</p>
                                            <div class="example">
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-default btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-primary btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-success btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-info btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-danger btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Rounded Split button dropdowns</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Any single <code class="highlighter-rouge">.btn</code> can be turned into a dropdown toggle with some markup changes.The best part is you can do this with any button variant, too</p>
                                            <div class="example">
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-pill btn-primary">Action</button>
                                                    <button type="button" class="btn btn-pill btn-primary dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-pill btn-success">Action</button>
                                                    <button type="button" class="btn btn-pill btn-success dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-pill btn-info">Action</button>
                                                    <button type="button" class="btn btn-pill btn-info dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-pill btn-warning">Action</button>
                                                    <button type="button" class="btn btn-warning btn-pill dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class=" fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-pill btn-danger">Action</button>
                                                    <button type="button" class="btn btn-pill btn-danger dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Split button dropdowns</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Any single <code class="highlighter-rouge">.btn</code> can be turned into a dropdown toggle with some markup changes.The best part is you can do this with any button variant, too</p>
                                            <div class="example">
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-default">Action</button>
                                                    <button type="button" class="btn btn-default dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-primary">Action</button>
                                                    <button type="button" class="btn btn-primary dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-success">Action</button>
                                                    <button type="button" class="btn btn-success dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class=" fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-info">Action</button>
                                                    <button type="button" class="btn btn-info dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-warning">Action</button>
                                                    <button type="button" class="btn btn-warning dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-danger">Action</button>
                                                    <button type="button" class="btn btn-danger dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class=" fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Split button dropdowns</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Any single <code class="highlighter-rouge">.btn</code> can be turned into a dropdown toggle with some markup changes.The best part is you can do this with any button variant, too</p>
                                            <div class="example">
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-outline-primary">Action</button>
                                                    <button type="button" class="btn btn-outline-primary dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-outline-success">Action</button>
                                                    <button type="button" class="btn btn-outline-success dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-outline-info">Action</button>
                                                    <button type="button" class="btn btn-outline-info dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-outline-warning">Action</button>
                                                    <button type="button" class="btn btn-outline-warning dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-outline-danger">Action</button>
                                                    <button type="button" class="btn btn-outline-danger dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-outline-secondary">Action</button>
                                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle px-1" data-bs-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dropdown Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Button dropdowns work with buttons of all sizes, including default and split dropdown buttons</p>
                                            <div class="example">
                                                <div class="btn-group mt-2 mb-2">
                                                    <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown">Large Dropdown Button
                                                            <span class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another Action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Default Dropdown Button
                                                            <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another Action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">Small Dropdown Button
                                                            <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another Action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dropup, Dropright, Dropleft variation</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Trigger dropdown menus above elements by adding <code class="highlighter-rouge">.dropup</code> , <code class="highlighter-rouge">.dropend</code> , <code class="highlighter-rouge">.dropstart</code> to the parent
                                                element.
                                            </p>
                                            <div class="example">
                                                <div class="dropup btn-group mt-2 mb-2">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropup
                                                            <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="javascript:void(0)">HTML</a></li>
                                                        <li><a href="javascript:void(0)">CSS</a></li>
                                                        <li><a href="javascript:void(0)">JavaScript</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">About Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dropend btn-group mt-2 mb-2">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropright
                                                            <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="javascript:void(0)">HTML</a></li>
                                                        <li><a href="javascript:void(0)">CSS</a></li>
                                                        <li><a href="javascript:void(0)">JavaScript</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">About Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dropstart btn-group mt-2 mb-2">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropleft
                                                            <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="javascript:void(0)">HTML</a></li>
                                                        <li><a href="javascript:void(0)">CSS</a></li>
                                                        <li><a href="javascript:void(0)">JavaScript</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">About Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dropdown Menu Content</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Samples of Dropdown menus Headers, Dividers, Text, Forms </p>
                                            <div class="example">
                                                <div class="btn-group mt-2 mb-2">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropdown Header
                                                            <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <h6 class="dropdown-header">Dropdown header</h6>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropdown Divider
                                                            <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropdown Text
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu p-4 text-muted">
                                                            <li>
                                                                Some example text that's free-flowing within the dropdown menu.
                                                            </li>
                                                            <li class="mb-0">
                                                                And this is more example text.
                                                            </li>
                                                        </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropdown Form
                                                            <span class="caret"></span>
                                                        </button>
                                                    <div class="dropdown-menu  w-260">
                                                        <form class="card-body pt-3" name="login">
                                                            <div class="form-group">
                                                                <label class="form-label">Mail or Username</label>
                                                                <input class="form-control" placeholder="Email" type="email">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Password</label>
                                                                <input class="form-control" placeholder="password" type="password">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                                        <span class="custom-control-label">Remeber me</span>
                                                                    </label>
                                                            </div>
                                                            <div class="submit">
                                                                <a class="btn btn-primary btn-block" href="javascript:void(0)">Login</a>
                                                            </div>
                                                            <div class="text-center mt-3">
                                                                <p class="mb-2"><a href="javascript:void(0)">Forgot Password</a></p>
                                                                <p class="text-dark mb-0">Don't have account?<a class="text-primary.ms-1" href="javascript:void(0)">Register</a></p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                            <span class="caret"><i class="fe fe-settings me-1"></i></span> Dropdown Options
                                                        </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <h6 class="dropdown-header">Auto Correct <span class="float-end">yes<i class="fe fe-chevron-right"></i></span></h6>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Screen Light <span class="float-end me-3"><i class="fe fe-sun"></i></span></a></li>
                                                        <li>
                                                            <div class="dropdown-item ps-4">
                                                                <div class="form-group mg-b-10 mb-0">
                                                                    <label class="custom-switch">
                                                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                                        <span class="custom-switch-description mg-l-10">Notification</span>
                                                                        <span class="custom-switch-indicator ms-5"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="dropdown-item ps-4">
                                                                <div class="form-group mg-b-10 mb-0">
                                                                    <label class="custom-switch">
                                                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked="">
                                                                        <span class="custom-switch-description mg-l-10">Reminders</span>
                                                                        <span class="custom-switch-indicator ms-5"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Icon Drop Downs dropdowns</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example panel panel-default">
                                            <div class="panel-body p-0">
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-facebook btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            <i class="fa fa-facebook"></i> <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-youtube btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            <i class="fa fa-youtube "></i><span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-google btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            <i class="fa fa-google"></i> <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-github btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            <i class="fa fa-github"></i> <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-pinterest btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            <i class="fa fa-pinterest-p"></i><span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-twitter btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            <i class="fa fa-twitter"></i> <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Dropdown
                                                            <b class="fa fa-angle-up" aria-hidden="true"></b>
                                                        </li>
                                                        <li><a href="javascript:void(0)">Action</a></li>
                                                        <li><a href="javascript:void(0)">Another action</a></li>
                                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-1 CLOSED -->

        @endsection

    @section('scripts')



    @endsection
