@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">ChartJs</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">ChartJS</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW-1 OPEN -->
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Line Chart</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container">
                                                <canvas id="chartLine" class="h-275"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Bar Chart1</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container">
                                                <canvas id="chartBar1" class="h-275"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Bar Chart2</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container">
                                                <canvas id="chartBar2" class="h-275"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Area Chart</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container">
                                                <canvas id="chartArea" class="h-275"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Donut Chart</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container">
                                                <canvas id="chartPie" class="h-275"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Pie Chart</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container">
                                                <canvas id="chartDonut" class="h-275"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Radar Chart</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container">
                                                <canvas id="chartRadar" class="h-275"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Polar Chart</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container">
                                                <canvas id="chartPolar" class="h-275"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-1 CLOSE -->

        @endsection

    @section('scripts')

    <!-- SPARKLINE JS-->
    <script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{asset('assets/plugins/circle-progress/circle-progress.min.js')}}"></script>

    <!-- CHARTJS JS -->
    <script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="{{asset('assets/js/chart.js')}}"></script>

    @endsection
