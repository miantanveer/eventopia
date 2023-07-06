@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">Maps</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Maps</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- Row -->
                            <div class="row row-sm">
                                <div class="col-lg-12">
                                    <div class="card mg-b-20" id="map">
                                        <div class="card-header">
                                            <div class="card-title">Basic</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="ht-300" id="leaflet1" style="height:300px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card mg-b-20" id="map2">
                                        <div class="card-header">
                                            <div class="card-title">With Popup</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="ht-300" id="leaflet2" style="height:300px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card" id="map1">
                                        <div class="card-header">
                                            <div class="card-title">Map With Circle</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="ht-200 ht-sm-300 ht-md-400" id="leaflet3" style="height:300px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Row -->

        @endsection

    @section('scripts')

    <!-- INTERNAL leaflet js -->
    <script src="{{asset('assets/plugins/leaflet/leaflet.js')}}"></script>
    <script src="{{asset('assets/js/map-leafleft.js')}}"></script>

    @endsection
