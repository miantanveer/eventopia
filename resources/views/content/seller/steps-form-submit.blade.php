@extends('layouts.app2')

@section('styles')
    <style>
        .div_margin {
            margin-top: 100px !important;
        }
        .page{
            background-color: #ffffff;
        }
    </style>
@endsection

@section('content')
    <!-- ROW-1 -->
    <div class="row text-center div_margin">
        <div class="col-12 my-5">
            <img src="{{ asset('assets/images/brand/success-image.png') }}" width="120px" height="auto">
        </div>
        <div class="col-12">
            <h1 class="fw-bolder">Your listings have been submitted!</h1>
        </div>
        <div class="col-12">
            <p>Our team will review your listings and get back to you within 2-5 business days</p>
        </div>
    </div>
    <!-- ROW-1 END -->
@endsection

@section('scripts')
@endsection
