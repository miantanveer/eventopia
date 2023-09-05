@extends('layouts.customer-web-layout')

@section('styles')
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8 col-12">
            <div style="font-size: 25px"><i class="ion-clipboard"></i> <strong>Review & Pay</strong>
            </div>
            <div class="card border mt-2">
                <div class="card-header" style="background-color: #F8F9FA">
                    Review & Pay
                </div>
                <div class="card-body">
                    <div class="row m-3 border-bottom py-2">
                        <div class="col-6">
                            Discount
                        </div>
                        <div class="col-6 text-end">
                            {{ @$discount }}%
                        </div>
                    </div>
                    <div class="row m-3 border-bottom py-2">
                        <div class="col-6">
                            SubTotal
                        </div>
                        <div class="col-6 text-end">
                            SAR {{ @$subtotal }}
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8 col-12">
            <div style="font-size: 25px"><i class="ion-clipboard"></i> <strong>Payments</strong>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="my-5">
                <form action="{{ route('payment-store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="amount" value="{{ @$subtotal }}">
                    <input type="text" class="my-3 form-control" value="John Wick" name="card_holder_name"
                        placeholder="Cardholder's Name">
                    <label for="card_number">Card Number*</label>
                    <input type="number" value="4242424242424242" id="card_number" name="card_number"
                        class="mb-3 form-control" placeholder="1234 1234 1234 1234">
                    <div class="row">
                        <div class="col-4">
                            <label for="expiration">Expiration Month*</label>
                            <input type="text" id="exp_month" value="12" name="exp_month" placeholder="Expiration"
                                class="mb-3 form-control">
                        </div>
                        <div class="col-4">
                            <label for="expiration">Expiration Year*</label>
                            <input type="text" id="exp_year" value="2025" name="exp_year" placeholder="Expiration"
                                class="mb-3 form-control">
                        </div>
                        <div class="col-4">
                            <label for="cvc">CVC*</label>
                            <input type="text" id="cvc" name="cvc" value="123" placeholder="CVC"
                                class="mb-3 form-control">
                        </div>
                    </div>
                    <div class="my-5">
                        <p>By providing your card information, you allow Eventopia, Inc. to
                            charge your card for future payments in accordance
                            with their terms.</p>
                    </div>
                    <hr style="border-top: 2px solid gray">
                    <div class="text-end mt-5">
                        <button class="btn btn-white mt-2 mb-0" disabled>Back</button>
                        <button class="btn btn-primary mt-2 mb-0 ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- SELECT2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
@endsection
