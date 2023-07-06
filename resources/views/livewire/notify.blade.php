@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">Notification</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Notification</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW-1 OPEN -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Alerts Notifications</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <button onclick="not1()" class="btn btn-success">Default</button>
                                                <button onclick="not2()" class="btn btn-secondary">Center</button>
                                                <button onclick="not3()" class="btn btn-warning">Left</button>
                                                <button onclick="not4()" class="btn btn-info">Center Info</button>
                                                <button onclick="not5()" class="btn btn-danger">Center Error</button>
                                                <button onclick="not6()" class="btn btn-warning">Center Warning</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Side Alerts Notifications</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <a href="javascript:void(0)" class="btn btn-success notice">Success</a>
                                                <a href="javascript:void(0)" class="btn btn-warning warning">Warning</a>
                                                <a href="javascript:void(0)" class="btn btn-danger error">Danger</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Gradient Side Alerts Notifications</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <a href="javascript:void(0)" class="btn btn-success bg-success-gradient notice1">Success</a>
                                                <a href="javascript:void(0)" class="btn btn-warning bg-warning-gradient warning1">Warning</a>
                                                <a href="javascript:void(0)" class="btn btn-danger bg-danger-gradient error1">Danger</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                            </div>
                            <!-- ROW-1 CLOSED -->

        @endsection

    @section('scripts')

    <!-- INTERNAL Notifications js -->
    <script src="{{asset('assets/plugins/notify/js/rainbow.js')}}"></script>
    <script src="{{asset('assets/plugins/notify/js/sample.js')}}"></script>
    <script src="{{asset('assets/plugins/notify/js/jquery.growl.js')}}"></script>
    <script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>

    @endsection
