@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                         <!-- PAGE-HEADER -->
                         <div class="page-header">
                            <div>
                                <h1 class="page-title">Progress</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Advanced Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Progress</li>
                                </ol>
                            </div>

                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Progress</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary" style="width: 10%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary" style="width: 20%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3 ">
                                                <div class="progress-bar bg-primary" style="width: 40%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary " style="width: 60%;"></div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-primary " style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Contextual Progress</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-secondary-gradient" style="width: 10%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-danger-gradient" style="width: 20%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-warning-gradient" style="width: 40%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-success-gradient" style="width: 60%;"></div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-info-gradient" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Progress with label</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-default" style="width: 20%;">10%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-secondary" style="width: 30%;"> 20%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-success" style="width: 40%;"> 40%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-warning " style="width: 60%;"> 60%</div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-info" style="width: 80%;"> 80%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Contextual Progress with label</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-pink" style="width: 10%;"> 7%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-green" style="width: 20%;">20%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-yellow" style="width: 40%;">40%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-blue" style="width: 60%;">60%</div>
                                            </div>
                                            <div class="progress progress-md ">
                                                <div class="progress-bar bg-orange" style="width: 80%;"> 80%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-1 OPEN -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Progress Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example">
                                            <div class="progress progress-xs mb-3">
                                                <div class="progress-bar bg-blue" style="width: 30%;"></div>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-blue" style="width: 60%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-blue" style="width: 80%;"></div>
                                            </div>
                                            <div class="progress progress-lg">
                                                <div class="progress-bar bg-blue" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Mixed color Progress with Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example">
                                            <div class="progress progress-xs mb-3">
                                                <div class="progress-bar bg-orange" style="width: 5%;"></div>
                                                <div class="progress-bar bg-warning" style="width: 5%;"></div>
                                                <div class="progress-bar bg-info" style="width: 5%;"></div>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-pink" style="width: 10%;"></div>
                                                <div class="progress-bar bg-yellow" style="width: 15%;"></div>
                                                <div class="progress-bar bg-teal" style="width: 15%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-pink" style="width: 15%;"></div>
                                                <div class="progress-bar bg-blue" style="width: 20%;"></div>
                                                <div class="progress-bar bg-cyan" style="width: 30%;"></div>
                                            </div>

                                            <div class="progress progress-lg">
                                                <div class="progress-bar bg-green" style="width: 30%;"></div>
                                                <div class="progress-bar bg-pink" style="width: 20%;"></div>
                                                <div class="progress-bar bg-orange" style="width: 40%;"></div>
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
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Striped Progress</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-pink" style="width: 10%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-blue-1" style="width: 20%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow-1" style="width: 40%;">40%</div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-green-1" style="width: 60%;">60%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Animated Progress</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-indeterminate bg-pink"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-indeterminate bg-yellow-1"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-indeterminate bg-blue-1"></div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar progress-bar-indeterminate bg-purple-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-3 CLOSED -->

        @endsection

    @section('scripts')



    @endsection
