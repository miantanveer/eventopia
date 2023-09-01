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
                                <h3><b>Service Quote for customer</b></h3>
                                <p>This quote is made for the service Wedding Planner</p>
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
                                                <input type="text" class="form-control" id="exampleInputPhone2"
                                                    placeholder="Service type" required value="{{ @$quote->service->title }}"
                                                    readonly>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Location" required value="{{ @$quote->service->address }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <input type="date" name="date" class="form-control"
                                                    id="exampleInputPhone2" required placeholder="Wedding date"
                                                    value="{{ @$formattedDate }}">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="guests" class="form-control"
                                                    id="exampleInputEmail1" required placeholder="Number of guests"
                                                    value="{{ @$quote->guests }}">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="amount" required class="form-control"
                                                    id="exampleInputPhone2" placeholder="Amount">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" required name="description" id="exampleInputEmail1" {{ @$quote->description }}
                                                    placeholder="Description" style="height: 100px">{{ @$quote->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-end">
                                        <a href="{{ route('pending-bookings') }}" class="btn btn-light">back</a>
                                        <button class="btn btn-primary">Send</button>
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
