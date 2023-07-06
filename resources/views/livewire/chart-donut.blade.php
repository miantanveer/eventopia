@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                           <!-- PAGE-HEADER -->
                           <div class="page-header">
                            <h1 class="page-title">C3 Dount Charts</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">C3 Dount Charts</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Donut Chart</h3>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-donut" class="chartsh"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Donut Chart2</h3>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-donut2" class="chartsh"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Donut Chart3</h3>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-donut3" class="chartsh"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Donut Chart4</h3>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-donut4" class="chartsh"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 CLOSED -->

        @endsection

    @section('scripts')

    <!-- SPARKLINE JS-->
    <script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- CHART-CIRCLE JS -->
    <script src="{{asset('assets/plugins/circle-progress/circle-progress.min.js')}}"></script>

    <!-- C3 CHART JS -->
    <script src="{{asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>

    <!-- CHARTJS JS -->
    <script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

    <!-- CHART-DONUT JS -->
    <script src="{{asset('assets/js/charts.js')}}"></script>

    @endsection
