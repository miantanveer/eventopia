@extends('layouts.customer-web-layout')

@section('styles')
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-sm-8 col-12 mt-5">
        <div class="card" id="modal3">
            <div class="card-body text-center p-4 pb-5">
                <i class="icon icon-check fs-70 text-success lh-1 my-4 d-inline-block"></i>
                <h4 class="text-success mb-4">{{lang('Payment is on Hold for now !!')}}</h4>
                <p class="mb-4 mx-4">{{lang('Wait for seller to approve your booking request.')}}</p>
                    <a href="{{ route('bookings',['type' => 'null','for' => 'null']) }}" class="btn btn-primary mt-2 mb-0 ">{{lang('Done')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
