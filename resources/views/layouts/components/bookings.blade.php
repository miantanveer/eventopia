@extends('layouts.app')

@section('styles')
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-10 mt-5 ">
            <div class="card border overflow-hidden">
                <div class="card-header pb-0 border-bottom-0">
                    <div class="row w-100">
                        <div class="col-6">
                            <h3 class="number-font">{{lang('Bookings')}}</h3>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <a href="{{ route('spaces') }}" type="button" class="btn btn-primary">{{lang('Book a space')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 mt-5">
                    @foreach (@$orders as $order)
                        <div class="col-12">
                            <div class="card border">
                                <div class="row g-0">
                                    <div class="col-md-4 pe-3 pe-md-0">
                                        <img src="{{ @$order->type == 'space' ? @$order->space->spaceImages[0]->image : (@$order->type == 'entertainment' ? @$order->entertainment->entertainmentImages[0]->image : @$order->service->serviceImages[0]->image) }}"
                                            class="card-img-left h-100" alt="img">
                                    </div>
                                    <div class="col-md-8 ps-3 ps-md-0">
                                        <div class="card-body">
                                            <div class="row w-100">
                                                <div class="col-8">
                                                    <h5 class="card-title">
                                                        {{ lang(@$order->type == 'space' ? @$order->space->spaceType->type : (@$order->type == 'entertainment' ? @$order->entertainment->title : @$order->service->category)) }}
                                                    </h5>
                                                    <p class="card-text">
                                                        {{ lang(@$order->start_time . ' - ' . @$order->end_time) }}</p>
                                                    <p class="card-text">{{lang('From SAR')}} {{ @$order->amount }}{{lang('/hour')}}</p>
                                                    <p
                                                        class="card-text text-{{ @$order->status == 0 ? 'info' : (@$order->status == 1 ? 'primary' : (@$order->status == 2 ? 'success' : 'danger')) }}">
                                                        {{ lang(@$order->status == 0 ? 'Pending' : (@$order->status == 1 ? 'Review' : (@$order->status == 2 ? 'Active' : 'Cancelled'))) }}
                                                    </p>
                                                </div>
                                                <div class="col-4 my-auto">
                                                    <div class="text-end">
                                                        <a class="modal-effect btn btn-primary-light d-grid mb-3"
                                                            data-bs-effect="effect-slide-in-right" data-bs-toggle="modal"
                                                            data-seller="{{ @$order->type == 'space' ? @$order->space->user->first_name . ' ' . @$order->space->user->last_name : (@$order->type == 'entertainment' ? @$order->entertainment->user->first_name . ' ' . @$order->entertainment->user->last_name : @$order->service->user->first_name . ' ' . @$order->service->user->last_name) }}"
                                                            data-type="{{ @$order->type }}" data-date="{{ @$order->date }}"
                                                            data-start-time="{{ @$order->start_time }}"
                                                            data-end-time="{{ @$order->end_time }}"
                                                            data-discount="{{ @$order->discount }}"
                                                            data-amount="{{ @$order->amount }}"
                                                            data-address="{{ @$order->type == 'space' ? @$order->space->address : (@$order->type == 'entertainment' ? @$order->entertainment->address : @$order->service->address) }}"
                                                            data-title="{{ @$order->type == 'space' ? @$order->space->space_title : (@$order->type == 'entertainment' ? @$order->entertainment->title : @$order->service->title) }}"
                                                            data-status="{{ @$order->status }}" href="#modaldemo8">
                                                            {{lang('View Details')}}</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {!! $orders->links() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modaldemo8">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">{{lang('Booking Details')}}</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label text-start">{{lang('Seller Name')}}</label>
                                <input type="text" class="form-control" id="seller" value="" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label text-start">{{lang('Type Name')}}</label>
                                <input type="text" class="form-control" style="text-transform: capitalize;" id="type" value="" readonly>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label text-start">{{lang('Title')}}</label>
                                <input type="text" class="form-control" style="text-transform: capitalize;" id="title" value="" readonly>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label text-start">{{lang('Address')}}</label>
                                <textarea class="form-control" name="" id="address" rows="2"id="address" readonly></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label text-start">{{lang('Date')}}</label>
                                <input type="text" class="form-control" id="date" value="" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label text-start">{{lang('Start Time')}}</label>
                                <input type="text" class="form-control" id="start_time" value="" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label text-start">{{lang('End Time')}}</label>
                                <input type="text" class="form-control" id="end_time" value="" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label text-start">{{lang('Discount')}}</label>
                                <input type="text" class="form-control" id="discount" value="" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label text-start">{{lang('Amount')}}</label>
                                <input type="text" class="form-control" id="amount" value="" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label text-start">{{lang('Status')}}</label>
                                <input type="text" class="form-control" id="status" value="" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" data-bs-dismiss="modal">{{lang('Close')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Wait for the document to be ready
        $(document).ready(function() {
            // Handle click event of "View Details" button
            $('.btn-primary-light').click(function() {
                // Get the data attributes
                var seller = $(this).data('seller');
                var type = $(this).data('type');
                var date = $(this).data('date');
                var startTime = $(this).data('start-time');
                var endTime = $(this).data('end-time');
                var discount = $(this).data('discount');
                var amount = $(this).data('amount');
                var address = $(this).data('address');
                var title = $(this).data('title');
                var status = $(this).data('status');
                if (status == 0) {
                    status = 'Pending'
                } else if (status == 1) {
                    status = 'Under Review'
                } else if (status == 2) {
                    status = 'Accepted'
                } else {
                    status = 'Cancelled'
                }

                // Populate modal fields with data
                $('#seller').val(seller);
                $('#type').val(type);
                $('#date').val(date);
                $('#start_time').val(startTime);
                $('#end_time').val(endTime);
                $('#discount').val(discount);
                $('#amount').val(amount);
                $('#address').text(address);
                $('#title').val(title);
                $('#status').val(status);
            });
        });
    </script>
@endsection
