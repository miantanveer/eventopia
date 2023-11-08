@extends('layouts.customer-web-layout')

@section('styles')
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8 col-12">
            <div style="font-size: 25px"><i class="ion-clipboard"></i> <strong>{{ lang('Review & Pay') }}</strong>
            </div>
            <div class="card border mt-2">
                <div class="card-header" style="background-color: #F8F9FA">
                    {{ lang('Review & Pay') }}
                </div>
                <div class="card-body">
                    {{-- <div class="row m-3 border-bottom py-2">
                        <div class="col-6">
                            {{lang('Discount')}}
                        </div>
                        <div class="col-6 text-end">
                            {{ @$discount }}%
                        </div>
                    </div> --}}
                    <div class="row m-3 border-bottom py-2">
                        <div class="col-6">
                            {{ lang('SubTotal') }}
                        </div>
                        <div class="col-6 text-end">
                            {{ lang('SAR') }} {{ @$subtotal }}
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8 col-12">
            <div style="font-size: 25px"><i class="ion-clipboard"></i> <strong>{{ lang('Payments') }}</strong>
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
                    <input type="text" class="my-3 form-control d-none" value="John Wick" name="card_holder_name"
                        placeholder="Cardholder's Name">
                    {{-- <label for="card_number">{{ lang('Card Number*') }}</label> --}}
                    <input type="number" value="4242424242424242" id="card_number" required name="card_number"
                        class="mb-3 form-control d-none" placeholder="1234 1234 1234 1234">
                    <div class="row d-none">
                        <div class="col-4">
                            <label for="expiration">{{ lang('Expiration Month*') }}</label>
                            <input type="text" id="exp_month" required value="12" name="exp_month"
                                placeholder="Expiration" class="mb-3 form-control">
                        </div>
                        <div class="col-4">
                            <label for="expiration">{{ lang('Expiration Year*') }}</label>
                            <input type="text" id="exp_year" required value="2025" name="exp_year"
                                placeholder="Expiration" class="mb-3 form-control">
                        </div>
                        <div class="col-4">
                            <label for="cvc">{{ lang('CVC*') }}</label>
                            <input type="text" id="cvc" name="cvc" required value="123" placeholder="CVC"
                                class="mb-3 form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="card-element">
                            Credit or debit card
                        </label>
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>

                    <div class="my-5">
                        <p>{{ lang('By providing your card information, you allow Eventopia, Inc. to
                                                    charge your card for future payments in accordance
                                                    with their terms.') }}
                        </p>
                    </div>
                    <hr style="border-top: 2px solid gray">
                    <div class="text-end mt-5">
                        <button class="btn btn-white mt-2 mb-0" disabled>{{ lang('Back') }}</button>
                        <button class="btn btn-primary mt-2 mb-0 ">{{ lang('Submit') }}</button>
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
@push('js')
    <script src="https://js.stripe.com/v3/"></script>

    <script>
        const stripe = Stripe('{{ env('STRIPE_TEST_PUBLIC_KEY') }}');
        const elements = stripe.elements();

        const card = elements.create('card');
        card.mount('#card-element');

        const form = document.getElementById('payment-form');

        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            const {
                token,
                error
            } = await stripe.createToken(card);

            if (error) {
                const errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else {
                // Append the token to the form and submit
                const hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);
                form.submit();
            }
        });
    </script>
@endpush
