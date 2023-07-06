@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                         <!-- PAGE-HEADER -->
                         <div class="page-header">
                            <h1 class="page-title">Widgets</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Widgets</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <small class="text-muted">New users</small>
                                            <h2 class="mb-2 mt-0">2,897</h2>
                                            <div id="circle" class="mt-3 mb-3 chart-dropshadow-secondary"></div>
                                            <div class="chart-circle-value-3 text-secondary fs-20"><i class="icon icon-user-follow"></i></div>
                                            <p class="mb-0 text-start"><span class="dot-label bg-secondary me-2"></span>Monthly users <span class="float-end">60%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="widget text-center">
                                            <small class="text-muted">Total Tax</small>
                                            <h2 class="mb-2 mt-0">$7,543</h2>
                                            <div id="circle-1" class="mt-3 mb-3 chart-dropshadow-success"></div>
                                            <div class="chart-circle-value-3 text-success fs-20"><i class="icon icon-briefcase"></i></div>
                                            <p class="mb-0 text-start"><span class="dot-label bg-success me-2"></span>Monthly Income <span class="float-end">$5,863</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="widget text-center">
                                            <small class="text-muted">Total Profit</small>
                                            <h2 class="mb-2 mt-0">$4,468</h2>
                                            <div id="circle-2" class="mt-3 mb-3 chart-dropshadow-warning"></div>
                                            <div class="chart-circle-value-3 text-warning fs-20"><i class="icon icon-chart"></i></div>
                                            <p class="mb-0 text-start"><span class="dot-label bg-warning me-2"></span>Monthly Profit <span class="float-end">$9,234</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="widget text-center">
                                            <small class="text-muted">Total Sales</small>
                                            <h2 class="mb-2 mt-0">$6,974</h2>
                                            <div id="circle-3" class="mt-3 mb-3 chart-dropshadow-danger"></div>
                                            <div class="chart-circle-value-3 text-danger fs-20"><i class="icon icon-basket"></i></div>
                                            <p class="mb-0 text-start"><span class="dot-label bg-danger me-2"></span>Monthly Sales <span class="float-end">$8,097</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW CLOSED -->

                        <!-- ROW OPEN -->
                        <div class="row row-cards">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-header pb-0 border-bottom-0">
                                        <h3 class="card-title">Total Revenue</h3>
                                        <div class="card-options">
                                            <a class="btn btn-sm btn-primary" href="javascript:void(0)"><i class="fa fa-bar-chart mb-0"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <h3 class="d-inline-block mb-2">46,789</h3>
                                        <div class="progress h-2 mt-2 mb-2">
                                            <div class="progress-bar bg-primary" style="width: 50%;" role="progressbar"></div>
                                        </div>
                                        <div class="float-start">
                                            <div class="mt-2">
                                                <i class="fa fa-caret-up text-success"></i>
                                                <span>12% increase</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-header pb-0 border-bottom-0">
                                        <h3 class="card-title">Total Requests</h3>
                                        <div class="card-options">
                                            <a class="btn btn-sm btn-success" href="javascript:void(0)"><i class="fa fa-send-o mb-0"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <h3 class="d-inline-block mb-2">23,536</h3>
                                        <div class="progress h-2 mt-2 mb-2">
                                            <div class="progress-bar bg-success" style="width: 50%;" role="progressbar"></div>
                                        </div>
                                        <div class="float-start">
                                            <div class="mt-2">
                                                <i class="fa fa-caret-down text-success"></i>
                                                <span>5% decrease</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-header pb-0 border-bottom-0">
                                        <h3 class="card-title">Requests Answered</h3>
                                        <div class="card-options">
                                            <a class="btn btn-sm btn-warning" href="javascript:void(0)"><i class="fa fa-mail-reply mb-0"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <h3 class="d-inline-block mb-2">32,784</h3>
                                        <div class="progress h-2 mt-2 mb-2">
                                            <div class="progress-bar bg-warning" style="width: 50%;" role="progressbar"></div>
                                        </div>
                                        <div class="float-start">
                                            <div class="mt-2">
                                                <i class="fa fa-caret-up text-warning"></i>
                                                <span>10% increase</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-header pb-0 border-bottom-0">
                                        <h3 class="card-title">Support Cost</h3>
                                        <div class="card-options">
                                            <a class="btn btn-sm btn-danger" href="javascript:void(0)"><i class="fa fa-money mb-0"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <h3 class="d-inline-block mb-2">14,563</h3>
                                        <div class="progress h-2 mt-2 mb-2">
                                            <div class="progress-bar bg-danger" style="width: 50%;" role="progressbar"></div>
                                        </div>
                                        <div class="float-start">
                                            <div class="mt-2">
                                                <i class="fa fa-caret-down text-danger"></i>
                                                <span>15% decrease</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW CLOSED -->

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card bg-primary img-card box-primary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <h2 class="mb-0 number-font">7,865</h2>
                                                <p class="text-white mb-0">Total Followers </p>
                                            </div>
                                            <div class="ms-auto"> <i class="fa fa-user-o text-white fs-30 me-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card bg-secondary img-card box-secondary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <h2 class="mb-0 number-font">86,964</h2>
                                                <p class="text-white mb-0">Total Likes</p>
                                            </div>
                                            <div class="ms-auto"> <i class="fa fa-heart-o text-white fs-30 me-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card  bg-success img-card box-success-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <h2 class="mb-0 number-font">98</h2>
                                                <p class="text-white mb-0">Total Comments</p>
                                            </div>
                                            <div class="ms-auto"> <i class="fa fa-comment-o text-white fs-30 me-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card bg-info img-card box-info-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <h2 class="mb-0 number-font">893</h2>
                                                <p class="text-white mb-0">Total Posts</p>
                                            </div>
                                            <div class="ms-auto"> <i class="fa fa-envelope-o text-white fs-30 me-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW CLOSED -->

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-order">
                                            <!-- <h6 class="mb-2">Orders</h6> -->
                                            <h2 class="text-end"><i class="fa fa-cart-plus icon-size float-start text-danger text-danger-shadow border-danger brround p-3"></i><span>$7,543</span></h2>
                                            <p class="mb-0 pt-5">This Week Orders<span class="float-end">60%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widget">
                                            <!-- <h6 class="mb-2">Total Tax</h6> -->
                                            <h2 class="text-end"><i class="mdi mdi-eye icon-size float-start text-warning text-warning-shadow border-solid border-warning brround p-3"></i><span>5,578</span></h2>
                                            <p class="mb-0 pt-5">This Week Views<span class="float-end">35%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widget">
                                            <!-- <h6 class="mb-2">Total Profit</h6> -->
                                            <h2 class="text-end"><i class="icon-size mdi mdi-currency-usd float-start text-primary text-primary-shadow border-solid border-primary brround p-3"></i><span>$2,987</span></h2>
                                            <p class="mb-0 pt-5">This Week Earnings<span class="float-end">74%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widget">
                                            <!-- <h6 class="mb-2">Total Sales</h6> -->
                                            <h2 class="text-end"><i class="mdi mdi-comment-account-outline icon-size float-start text-success text-success-shadow border-solid border-success brround p-3"></i><span>9743</span></h2>
                                            <p class="mb-0 pt-5">This Week Comments<span class="float-end">789</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW END -->

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body pb-0">
                                        <div class="float-start">
                                            <p class="mb-1">Total Revenue</p>
                                            <h2 class="counter mb-0">7,865</h2>
                                        </div>
                                        <div class="float-end">
                                            <span class="mini-stat-icon bg-info"><i class="fa fa-bar-chart"></i></span>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pb-0 border-top-0 overflow-hidden">
                                        <div class="chart-wrapper overflow-hidden">
                                            <canvas id="areaChart1" class="areaChart overflow-hidden chart-dropshadow-primary"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="float-start">
                                            <p class="mb-1">Support Cost</p>
                                            <h2 class="counter mb-0">5,974</h2>
                                        </div>
                                        <div class="float-end">
                                            <span class="mini-stat-icon bg-danger"><i class="fa fa-money"></i></span>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pb-0 border-top-0 overflow-hidden">
                                        <div class="chart-wrapper">
                                            <canvas id="areaChart4" class="areaChart chart-dropshadow-danger"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="float-start">
                                            <p class="mb-1">Total Requests</p>
                                            <h2 class="counter mb-0">8,678</h2>
                                        </div>
                                        <div class="float-end">
                                            <span class="mini-stat-icon bg-success"><i class="fa fa-send-o"></i></span>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pb-0 border-top-0 overflow-hidden">
                                        <div class="chart-wrapper">
                                            <canvas id="areaChart2" class="areaChart chart-dropshadow-success"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="float-start">
                                            <p class="mb-1">Requests Answered</p>
                                            <h2 class="counter mb-0">4,543</h2>
                                        </div>
                                        <div class="float-end">
                                            <span class="mini-stat-icon bg-warning"><i class="fa fa-mail-reply"></i></span>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pb-0 border-top-0 overflow-hidden">
                                        <div class="chart-wrapper">
                                            <canvas id="areaChart3" class="areaChart chart-dropshadow-warning"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW CLOSED -->

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-xl-3 col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h6 class=""><span class="text-primary"><i class="fe fe-file-text mx-2 fs-20 text-primary-shadow"></i></span>Total Projects</h6>
                                        <h3 class="text-dark counter mt-0 mb-3 number-font">7,896</h3>
                                        <div class="progress h-1 mt-0 mb-2">
                                            <div class="progress-bar progress-bar-striped bg-primary" style="width: 70%;" role="progressbar"></div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col text-center"> <span class="text-muted">Weekly</span>
                                                <h4 class="fw-normal mt-2 mb-0 number-font1">8</h4>
                                            </div>
                                            <div class="col text-center"> <span class="text-muted">Monthly</span>
                                                <h4 class="fw-normal mt-2 mb-0 number-font2">23</h4>
                                            </div>
                                            <div class="col text-center"> <span class="text-muted">Total</span>
                                                <h4 class="fw-normal mt-2 mb-0 number-font3">31</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body text-center">
                                        <h6 class=""><span class="text-secondary"><i class="fe fe-users mx-2 fs-20 text-secondary-shadow"></i></span>Total Employees</h6>
                                        <h3 class="text-dark counter mt-0 mb-3 number-font">2,897</h3>
                                        <div class="progress h-1 mt-0 mb-2">
                                            <div class="progress-bar progress-bar-striped  bg-secondary" style="width: 50%;" role="progressbar"></div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col text-center"> <span class="text-muted">Male</span>
                                                <h4 class="fw-normal mt-2 mb-0 number-font1">378</h4>
                                            </div>
                                            <div class="col text-center"> <span class="text-muted">Female</span>
                                                <h4 class="fw-normal mt-2 mb-0 number-font1">689</h4>
                                            </div>
                                            <div class="col text-center"> <span class="text-muted">Total</span>
                                                <h4 class="fw-normal mt-2 mb-0 number-font1">1,069</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body text-center">
                                        <h6 class=""><span class="text-success"><i class="fe fe-award mx-2 fs-20 text-success-shadow"></i></span>Ongoing Projects</h6>
                                        <h3 class="text-dark counter mt-0 mb-3 number-font">1,567</h3>
                                        <div class="progress h-1 mt-0 mb-2">
                                            <div class="progress-bar progress-bar-striped  bg-success" style="width: 60%;" role="progressbar"></div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col text-center"> <span class="text-muted">Weekly</span>
                                                <h4 class="fw-normal mt-2 mb-0 number-font1">5</h4>
                                            </div>
                                            <div class="col text-center"> <span class="text-muted">Monthly</span>
                                                <h4 class="fw-normal mt-2 mb-0 number-font1">20</h4>
                                            </div>
                                            <div class="col text-center"> <span class="text-muted">Total</span>
                                                <h4 class="fw-normal mt-2 mb-0 number-font1">25</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body text-center">
                                        <h6 class=""><span class="text-info"><i class="fe fe-tag mx-2 fs-20 text-info-shadow"></i></span>Total Tasks</h6>
                                        <h3 class="text-dark counter mt-0 mb-3 number-font">4,293</h3>
                                        <div class="progress h-1 mt-0 mb-2">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 40%;" role="progressbar"></div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col text-center"> <span class="text-muted">Weekly</span>
                                                <h4 class="fw-normal mt-2 mb-0 number-font1">35</h4>
                                            </div>
                                            <div class="col text-center"> <span class="text-muted">Monthly</span>
                                                <h4 class="fw-normal mt-2 mb-0 number-font1">56</h4>
                                            </div>
                                            <div class="col text-center"> <span class="text-muted">Total</span>
                                                <h4 class="fw-normal mt-2 mb-0 number-font1">91</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW CLOSED -->

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6  col-xl-3">
                                <div class="card widgets-cards bg-primary box-primary-shadow">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div class="chart-circle chart-circle-sm ms-3 mt-1" data-value="0.62" data-thickness="6" data-bs-color="#3c5998">
                                            <div class="chart-circle-value text-white">70%</div>
                                        </div>
                                        <div class="wrp text-wrapper text-white p-3">
                                            <p class="mt-0">$8758</p>
                                            <p class="mt-1 mb-0">This Week Orders</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6  col-xl-3">
                                <div class="card widgets-cards bg-success box-success-shadow">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div class="chart-circle chart-circle-sm ms-3 mt-1" data-value="0.37" data-thickness="6" data-bs-color="#0e8c79">
                                            <div class="chart-circle-value text-white">17%</div>
                                        </div>
                                        <div class="wrp text-wrapper text-white p-3">
                                            <p class="mt-0">6477</p>
                                            <p class=" mt-1 mb-0">This Week Views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6  col-xl-3">
                                <div class="card widgets-cards bg-warning box-warning-shadow">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div class="chart-circle chart-circle-sm ms-3 mt-1" data-value="0.42" data-thickness="6" data-bs-color="#c68806">
                                            <div class="chart-circle-value text-white">42%</div>
                                        </div>
                                        <div class="wrp text-wrapper text-white p-3">
                                            <p class="mt-0">7847</p>
                                            <p class=" mt-1 mb-0">This Week Earnings</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6  col-xl-3">
                                <div class="card widgets-cards bg-danger box-danger-shadow">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div class="chart-circle chart-circle-sm ms-3 mt-1" data-value="0.42" data-thickness="6" data-bs-color="#c21a1a">
                                            <div class="chart-circle-value text-white">37%</div>
                                        </div>
                                        <div class="wrp text-wrapper text-white p-3">
                                            <p class="mt-0">345</p>
                                            <p class=" mt-1 mb-0">This Week Comments</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="circle-icon bg-primary text-center align-self-center box-primary-shadow bradius">
                                                <img src="{{asset('assets/images/svgs/circle.svg')}}" alt="img" class="card-img-absolute">
                                                <i class="lnr lnr-user fs-30  text-white mt-4"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body p-4">
                                                <h2 class="mb-2 fw-normal mt-2">9,678</h2>
                                                <h5 class="fw-normal mb-0">Total Requests</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card-img-absolute circle-icon bg-secondary align-items-center text-center box-secondary-shadow bradius">
                                                <img src="{{asset('assets/images/svgs/circle.svg')}}" alt="img" class="card-img-absolute">
                                                <i class="lnr lnr-briefcase fs-30 text-white mt-4"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body p-4">
                                                <h2 class="mb-2 fw-normal mt-2">10,257</h2>
                                                <h5 class="fw-normal mb-0">Total Revenue</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card-img-absolute  circle-icon bg-success align-items-center text-center box-success-shadow bradius">
                                                <img src="{{asset('assets/images/svgs/circle.svg')}}" alt="img" class="card-img-absolute">
                                                <i class="lnr lnr-gift fs-30 text-white mt-4"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body p-4">
                                                <h2 class="mb-2 fw-normal mt-2">$67,953</h2>
                                                <h5 class="fw-normal mb-0">Total Profit</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card-img-absolute circle-icon bg-danger align-items-center text-center box-danger-shadow bradius">
                                                <img src="{{asset('assets/images/svgs/circle.svg')}}" alt="img" class="card-img-absolute">
                                                <i class=" lnr lnr-cart fs-30 text-white mt-4"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body p-4">
                                                <h2 class="mb-2 fw-normal mt-2">7,632</h2>
                                                <h5 class="fw-normal mb-0">Total Sales</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW CLOSED -->

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <i class="fa fa-firefox text-primary fa-3x"></i>
                                        <h6 class="mt-4 mb-2">Total Visit</h6>
                                        <h2 class="mb-2 number-font">834</h2>
                                        <p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <i class="fa fa-dollar text-secondary fa-3x"></i>
                                        <h6 class="mt-4 mb-2">Cost per Click</h6>
                                        <h2 class="mb-2  number-font">$34,516</h2>
                                        <p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <i class="fa fa-comment-o text-success fa-3x"></i>
                                        <h6 class="mt-4 mb-2">Investment</h6>
                                        <h2 class="mb-2 number-font">80%</h2>
                                        <p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <i class="fa fa-pie-chart text-info fa-3x"></i>
                                        <h6 class="mt-4 mb-2">Revenue</h6>
                                        <h2 class="mb-2  number-font">70k</h2>
                                        <p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW CLOSED -->

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h5 class="card-title">Sales Summary</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="clearfix row mb-4">
                                            <div class="col">
                                                <div class="float-start">
                                                    <h5 class="mb-0"><strong>Total Revenue</strong></h5>
                                                    <small class="text-muted">weekly profit</small>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="float-end">
                                                    <h4 class="fw-bold mb-0 mt-2 text-blue">$15300</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix row mb-4">
                                            <div class="col">
                                                <div class="float-start">
                                                    <h5 class="mb-0"><strong>Total Tax</strong></h5>
                                                    <small class="text-muted">weekly profit</small>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="float-end">
                                                    <h4 class="fw-bold mt-2 mb-0 text-success">$1625</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix row mb-4">
                                            <div class="col">
                                                <div class="float-start">
                                                    <h5 class="mb-0"><strong>Total Income</strong></h5>
                                                    <small class="text-muted">weekly profit</small>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="float-end">
                                                    <h4 class="fw-bold mt-2 mb-0 text-warning">70%</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix row mb-4">
                                            <div class="col">
                                                <div class="float-start">
                                                    <h5 class="mb-0"><strong>Total Income</strong></h5>
                                                    <small class="text-muted">weekly profit</small>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="float-end">
                                                    <h4 class="fw-bold mt-2 mb-0 text-danger">50%</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix row mb-4">
                                            <div class="col">
                                                <div class="float-start">
                                                    <h5 class="mb-0"><strong>Total Loss</strong></h5>
                                                    <small class="text-muted">weekly profit</small>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="float-end">
                                                    <h4 class="fw-bold mt-2 mb-0 text-info">30%</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix row mb-0">
                                            <div class="col">
                                                <div class="float-start">
                                                    <h5 class="mb-0"><strong>Total Loss</strong></h5>
                                                    <small class="text-muted">weekly profit</small>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="float-end">
                                                    <h4 class="fw-bold mt-2 mb-0 text-info">30%</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Visitors</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="media mb-5 mt-0">
                                            <div class="d-flex me-3">
                                                <a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/18.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="javascript:void(0)" class="text-dark">Nathaniel Bustos</a>
                                                <div class="text-muted small">Manager</div>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-sm d-block">Follow</button>
                                        </div>
                                        <div class="media mb-5">
                                            <div class="d-flex me-3">
                                                <a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/4.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="javascript:void(0)" class="text-dark">Latanya Kinard</a>
                                                <div class="text-muted small">Web Designer</div>
                                            </div>
                                            <button type="button" class="btn btn-blue btn-sm d-block">Follow</button>
                                        </div>
                                        <div class="media mb-5">
                                            <div class="d-flex me-3">
                                                <a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/20.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="javascript:void(0)" class="text-dark">George Lujan</a>
                                                <div class="text-muted small">Founder</div>
                                            </div>
                                            <button type="button" class="btn btn-warning btn-sm d-block">Follow</button>
                                        </div>
                                        <div class="media mb-5">
                                            <div class="d-flex me-3">
                                                <a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/4.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="javascript:void(0)" class="text-dark">Rose Bush</a>
                                                <div class="text-muted small">Web Designer</div>
                                            </div>
                                            <button type="button" class="btn btn-secondary btn-sm d-block">Follow</button>
                                        </div>
                                        <div class="media mb-0">
                                            <div class="d-flex me-3">
                                                <a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/19.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="javascript:void(0)" class="text-dark">Samantha</a>
                                                <div class="text-muted small">Manager</div>
                                            </div>
                                            <button type="button" class="btn btn-danger btn-sm d-block">Follow</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-4 col-sm-12 p-l-0 p-r-0 col-md-12">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h2 class="card-title">Projects</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto chart-circle chart-circle-md mt-3 mb-4 text-center" data-value="0.75" data-thickness="8" data-bs-color="#6c5ffc"></div>
                                        <div class="text-center mt-3">
                                            <h3>Average Sales</h3>
                                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam velit quisquam veniam excepturi.</p>
                                            <div class="col p-1 mt-2">
                                                <div class="float-start">
                                                    <h3 class="ms-5"><i class="fa fa-caret-up fa-1x text-primary me-1"></i>$3.2</h3>
                                                    <h6 class="ms-5 pb-0 mb-0">last month</h6>
                                                </div>
                                                <div class="float-end">
                                                    <h3 class="me-5"><i class="fa fa-caret-up fa-1x text-primary me-1"></i>$2.4</h3>
                                                    <h6 class="me-5 mt-0 mb-0">last year</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW CLOSED -->

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Skill Set</div>
                                    </div>
                                    <div class="card-body mt-0">
                                        <div class="chats-wrap media-list">
                                            <div class="chat-details mb-1 p-3">
                                                <h4 class="mb-0">
                                                    <span class="h5 fw-normal">Html</span>
                                                    <span class="float-end p-1  btn btn-sm text-default">
                                                        <b>85</b>%</span>
                                                </h4>
                                                <div class="progress progress-sm mt-3">
                                                    <div class="progress-bar  bg-primary" style="width: 80%;"></div>
                                                </div>
                                            </div>
                                            <div class="chat-details mb-1 p-3">
                                                <h4 class="mb-0">
                                                    <span class="h5 fw-normal"> Wordpress</span>
                                                    <span class="float-end p-1  btn btn-sm text-default">
                                                        <b>46</b>%</span>
                                                </h4>
                                                <div class="progress progress-sm mt-3">
                                                    <div class="progress-bar bg-success" style="width: 45%;"></div>
                                                </div>
                                            </div>
                                            <div class="chat-details mb-1 p-3">
                                                <h4 class="mb-0">
                                                    <span class="h5 fw-normal"> jQuery</span>
                                                    <span class="float-end p-1  btn btn-sm text-default">
                                                        <b>56</b>%</span>
                                                </h4>
                                                <div class="progress progress-sm mt-3">
                                                    <div class="progress-bar bg-warning" style="width: 65%;"></div>
                                                </div>
                                            </div>
                                            <div class="chat-details mb-1 p-3">
                                                <h4 class="mb-0">
                                                    <span class="h5 fw-normal"> Photoshop</span>
                                                    <span class="float-end p-1  btn btn-sm text-default">
                                                        <b>90</b>%</span>
                                                </h4>
                                                <div class="progress progress-sm mt-3">
                                                    <div class="progress-bar bg-danger" style="width: 75%;"></div>
                                                </div>
                                            </div>
                                            <div class="chat-details mb-0 p-3">
                                                <h4 class="mb-0">
                                                    <span class="h5 fw-normal">Angular js</span>
                                                    <span class="float-end p-1  btn btn-sm text-default">
                                                        <b>30</b>%</span>
                                                </h4>
                                                <div class="progress progress-sm mt-3">
                                                    <div class="progress-bar bg-info" style="width: 30%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-sm-12 col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Best Pictures for Today</h3>
                                    </div>
                                    <div class="card-body p-2">
                                        <div>
                                            <!-- GALLERY DEMO OPEN -->
                                            <div class="masonry row">
                                                <div class="col-xl-4 col-lg-4 col-sm-6">
                                                    <div class="brick">
                                                        <a href="{{asset('assets/images/media/1.jpg')}}" class="js-img-viewer" data-caption="IMAGE-01"
                                                            data-id="lion">
                                                            <img src="{{asset('assets/images/media/1.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-sm-6">
                                                    <div class="brick">
                                                        <a href="{{asset('assets/images/media/2.jpg')}}" class="js-img-viewer" data-caption="IMAGE-02"
                                                            data-id="camel">
                                                            <img src="{{asset('assets/images/media/2.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-sm-6">
                                                    <div class="brick">
                                                        <a href="{{asset('assets/images/media/3.jpg')}}" class="js-img-viewer" data-caption="IMAGE-03"
                                                            data-id="hippo">
                                                            <img src="{{asset('assets/images/media/3.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-sm-6">
                                                    <div class="brick">
                                                        <a href="{{asset('assets/images/media/4.jpg')}}" class="js-img-viewer" data-caption="IMAGE-04"
                                                            data-id="koala">
                                                            <img src="{{asset('assets/images/media/4.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-sm-6">
                                                    <div class="brick">
                                                        <a href="{{asset('assets/images/media/5.jpg')}}"  class="js-img-viewer" data-caption="IMAGE-05"
                                                            data-id=" bear">
                                                            <img src=" {{asset('assets/images/media/5.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-sm-6">
                                                    <div class="brick">
                                                        <a href=" {{asset('assets/images/media/6.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-06"
                                                            data-id=" rhino">
                                                            <img src=" {{asset('assets/images/media/6.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- GALLERY DEMO CLOSED -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW CLOSED -->

        @endsection

    @section('scripts')

    <!-- CHART-CIRCLE JS-->
    <script src="{{asset('assets/plugins/circle-progress/circle-progress.min.js')}}"></script>

    <!-- MORRIS CHART JS-->
    <script src="{{asset('assets/plugins/morris/raphael-min.js')}}"></script>
    <script src="{{asset('assets/plugins/morris/morris.js')}}"></script>

    <!-- C3 CHART JS-->
    <script src="{{asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>

    <!-- CHARTJS CHART JS-->
    <script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- GALLERY JS -->
    <script src="{{asset('assets/plugins/SmartPhoto-master/smartphoto.js')}}"></script>
    <script src="{{asset('assets/js/gallery.js')}}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{asset('assets/js/widget.js')}}"></script>

    @endsection
