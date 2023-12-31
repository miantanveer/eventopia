@extends('layouts.app2')

@section('styles')
@endsection

@section('content')
    @php
        $dateString = '13-Sep-2007';
        $dateTime = DateTime::createFromFormat('d-M-Y', $dateString);
        $formattedDate = $dateTime->format('Y-m-d');

    @endphp
    <div class="container">
        <div class="row justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card border">
                            <div class="text-center mt-2">
                                <h3><b>{{lang('Service Quote for customer')}}</b></h3>
                                <p>{{lang('This quote is made for the service Wedding Planner')}}</p>
                            </div>
                            <hr class="m-0 bg-dark">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('send_seller_quote',@$quote->id) }}" class="validation" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="title">{{lang('Title')}}</label>
                                                <input type="text" class="form-control" id="title"
                                                    placeholder="{{lang('Service type')}}" required value="{{ @$quote->service->title }}"
                                                    readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">{{lang('Address')}}</label>
                                                <input type="text" class="form-control" id="address"
                                                    placeholder="{{lang('Location')}}" required value="{{ @$quote->service->address }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">{{lang('Description')}}</label>
                                                <textarea class="form-control" required name="description" id="description" {{ @$quote->description }}
                                                    placeholder="{{lang('Description')}}" style="height: 100px">{{ @$quote->description }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="date">{{lang('Date')}}</label>
                                                <input type="date" name="date" class="form-control"
                                                    id="date" required placeholder="{{lang('Wedding date')}}"
                                                    value="{{ @$formattedDate }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="guests">{{lang('Guests')}}</label>
                                                <input type="number" name="guests" class="form-control"
                                                    id="guests" required placeholder="{{lang('Number of guests')}}"
                                                    value="{{ @$quote->guests }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">{{lang('Seller Quote Description')}}</label>
                                                <textarea class="form-control" required name="seller_quote_description" id="seller_quote_description"
                                                    placeholder="{{lang('Seller Quote Description')}}" style="height: 100px"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="amount">{{lang('Price in SAR')}}</label>
                                                <input type="number" name="amount" required class="form-control"
                                                    id="amount" placeholder="{{lang('Price in SAR')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-end">
                                        <a href="{{ route('pending-bookings') }}" class="btn btn-light">{{lang('Back')}}</a>
                                        <button class="btn btn-primary">{{lang('Send')}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.validation').parsley();
        });
    </script>
@endsection
