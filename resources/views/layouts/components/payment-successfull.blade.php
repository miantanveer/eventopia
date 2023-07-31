@extends('layouts.customer-web-layout')

@section('styles')
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-sm-8 col-12 mt-5">
        <div class="card" id="modal3">
            <div class="card-body text-center p-4 pb-5">
                <i class="icon icon-check fs-70 text-success lh-1 my-4 d-inline-block"></i>
                <h4 class="text-success mb-4">Payment successful</h4>
                <p class="mb-4 mx-4">Thank you! Your payment is complete</p>
                <form action="{{ URL('/') }}" method="GET">
                    <button class="btn btn-primary mt-2 mb-0 ">Done</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
   
@endsection