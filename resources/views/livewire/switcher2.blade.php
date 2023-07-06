@extends('layouts.switcher')

    @section('styles')

    <!-- INTERNAL Switcher css -->
    <link href="{{asset('assets/switcher/css/switcher.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/switcher/demo.css')}}" rel="stylesheet" />

    @endsection

        @section('content')

                       <!-- PAGE-HEADER -->
                       <div class="page-header">
                        <h1 class="page-title">Switcher Style-2</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Switcher</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Switcher Style-2</li>
                             </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- Row -->
                    <div class="">
                        <div class="float-end">
                            <div class="demo-icon nav-link icon switcher-setting-icon">
                                <i class="fe fe-settings fa-spin  text_primary"></i>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->

        @endsection

    @section('scripts')

        <!-- Switcher js -->
        <script src="{{asset('assets/switcher/js/switcher.js')}}"></script>

        <!-- CUSTOM JS -->
        <script src="{{asset('assets/js/custom1.js')}}"></script>

    @endsection
