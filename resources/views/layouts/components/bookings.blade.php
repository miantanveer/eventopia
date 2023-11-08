@extends('layouts.seller-web-layout')
@section('styles')
<style>
    .page-main {
        background-color: #E8F2FF;
    }

    .table_head_row {
        background-color: #006CE4 !important;
    }
</style>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12 mt-5 ">
        <div class="card border overflow-hidden">
            <div class="card-header pb-0 border-bottom-0">
                <div class="row w-100">
                    <div class="col-6">
                        <h3 class="number-font">{{ lang('All Bookings') }}</h3>
                    </div>
                </div>
            </div>

            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="row">
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="col-sm-12">
                        <table id="example2"
                            class="table text-nowrap border rounded-3 dataTable no-footer dtr-inline p-0" role="grid"
                            aria-describedby="example2_info">
                            <thead class="table_head_row">
                                <tr role="row" class="text-center">
                                    <th class="sorting sorting_asc text-white p-4" tabindex="0" aria-controls="example2"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">{{ lang('Category') }}
                                    </th>
                                    <th class="sorting text-white p-4" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="Position: activate to sort column ascending">
                                        {{ lang('Location') }}
                                    </th>
                                    <th class="sorting text-white p-4" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="Office: activate to sort column ascending">
                                        {{ lang('Customer name') }}</th>
                                    <th class="sorting text-white p-4" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="Age: activate to sort column ascending">{{ lang('Date Time')
                                        }}</th>
                                    <th class="sorting text-white p-4" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="Age: activate to sort column ascending">{{ lang('Price')
                                        }}</th>
                                    <th class="sorting text-white p-4" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="Start date: activate to sort column ascending">
                                        {{ lang('Attendees
                                        Number') }}
                                    </th>
                                    <th class="sorting text-white p-4" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="Salary: activate to sort column ascending">{{
                                        lang('Type') }}
                                    </th>
                                    {{-- <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                        rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">
                                        {{ lang('View') }}
                                    </th> --}}
                                    <th class="sorting text-white p-4" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="Salary: activate to sort column ascending">{{
                                        lang('Action') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($quotes))
                                @foreach (@$quotes as $quote)
                                <tr class="text-center">
                                    <td class="dtr-control sorting_1" tabindex="0">{{ lang('Service') }}
                                    </td>
                                    <td>{{ lang(Str::limit(@$quote->service->address, 30, '...')) }}
                                    </td>
                                    <td>{{ lang(@$quote->user->first_name . ' ' . @$quote->user->last_name) }}
                                    </td>
                                    <td>{{ @$quote->date }} ({{ @$quote->start_time }} - {{ @$quote->end_time }})</td>
                                    <td>{{ @$quote->amount ?? lang('N/A') }}</td>
                                    <td>{{ lang(@$quote->guests) }}</td>
                                    <td>{{ lang(@$quote->service->category) }}</td>
                                    {{-- <td><a class="modal-effect btn d-grid" data-bs-effect="effect-rotate-left"
                                            data-bs-toggle="modal" href="#bookingDetailModal"><i
                                                class="fa fa-eye text-primary" aria-hidden="true"></i></a>
                                    </td> --}}
                                    <td class="text-end">
                                        @if (@$quote->status == 3)
                                        <span disabled class="badge bg-danger-gradient badge-sm  me-1 mb-1 mt-1">{{
                                            lang('Declined') }}</span>
                                        @elseif (@$quote->status == 1)
                                        <span disabled class="badge bg-info-gradient badge-sm me-1 mb-1 mt-1">{{
                                            lang('Quote In Review') }}</span>
                                        @else
                                        <a href="{{ route('seller_decline_quote', @$quote->id) }}"
                                            class="btn text-danger border-0">{{ lang('Decline') }}</a>
                                        <a href="{{ route('recieve_quote', @$quote->id) }}"
                                            class="btn btn-primary ms-3">{{ lang('Send Quote') }}</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                @if (isset($orders))
                                @foreach (@$orders as $pendingBooking)
                                <tr class="text-center">
                                    <td class="dtr-control sorting_1" tabindex="{{ $loop->iteration }}">
                                        {{ lang(@$pendingBooking->type) }}</td>
                                    <td>{{ lang(Str::limit(@$pendingBooking->type == 'space' ?
                                        @$pendingBooking->space->address : (@$pendingBooking->type == 'entertainment' ?
                                        @$pendingBooking->entertainment->address : @$pendingBooking->service->address),
                                        30, $end = '...')) }}
                                    </td>
                                    <td>{{ lang(@$pendingBooking->user->first_name . ' ' .
                                        @$pendingBooking->user->last_name) }}
                                    </td>
                                    <td>{{ @$pendingBooking->date }} ({{ @$pendingBooking->start_time }} - {{ @$pendingBooking->end_time }})</td>
                                    <td>{{ @$pendingBooking->amount }}</td>
                                    <td>101 - 150</td>
                                    <td>{{ lang(@$pendingBooking->type == 'space' ?
                                        @$pendingBooking->space->spaceType->type : (@$pendingBooking->type ==
                                        'entertainment' ? @$pendingBooking->entertainment->title :
                                        @$pendingBooking->service->category)) }}
                                    </td>
                                    {{-- <td><a class="btn"
                                            href="{{ route('bookings-details', ['id' => @$pendingBooking->id, 'type' => @$pendingBooking->type]) }}"><i
                                                class="fa fa-eye text-primary" aria-hidden="true"></i></a>
                                    </td> --}}
                                    <td class="text-end">
                                        @if (@$pendingBooking->status == 3)
                                        <span disabled class="badge bg-danger-gradient badge-sm  me-1 mb-1 mt-1">{{
                                            lang('Declined') }}</span>
                                        @elseif (@$pendingBooking->status == 2)
                                        <span disabled class="badge bg-success-gradient badge-sm me-1 mb-1 mt-1">{{
                                            lang('Accepted') }}</span>
                                        @else
                                        <a href="{{ route('decline-bookings', @$pendingBooking->id) }}"
                                            class="btn text-danger border-0">{{ lang('Decline') }}</a>
                                        <a href="{{ @$pendingBooking->type == 'space' || @$pendingBooking->type == 'entertainment' || @$pendingBooking->type == 'service' ? route('accept-bookings', @$pendingBooking->id) : URL('/create-quote') }}"
                                            class="btn btn-primary ms-3">{{ lang(@$pendingBooking->type == 'space' ||
                                            @$pendingBooking->type == 'entertainment' || @$pendingBooking->type ==
                                            'service' ? 'Accept' : 'Send Quote') }}</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">{{ lang('Booking Details') }}</h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label text-start">{{ lang('Seller Name') }}</label>
                            <input type="text" class="form-control" id="seller" value="" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label text-start">{{ lang('Type Name') }}</label>
                            <input type="text" class="form-control" style="text-transform: capitalize;" id="type"
                                value="" readonly>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label text-start">{{ lang('Title') }}</label>
                            <input type="text" class="form-control" style="text-transform: capitalize;" id="title"
                                value="" readonly>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label text-start">{{ lang('Address') }}</label>
                            <textarea class="form-control" name="" id="address" rows="2" id="address"
                                readonly></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label text-start">{{ lang('Date') }}</label>
                            <input type="text" class="form-control" id="date" value="" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label text-start">{{ lang('Start Time') }}</label>
                            <input type="text" class="form-control" id="start_time" value="" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label text-start">{{ lang('End Time') }}</label>
                            <input type="text" class="form-control" id="end_time" value="" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label text-start">{{ lang('Discount') }}</label>
                            <input type="text" class="form-control" id="discount" value="" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label text-start">{{ lang('Amount') }}</label>
                            <input type="text" class="form-control" id="amount" value="" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label text-start">{{ lang('Status') }}</label>
                            <input type="text" class="form-control" id="status" value="" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" data-bs-dismiss="modal">{{ lang('Close') }}</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="cancel-booking-modal">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body text-center p-4 pb-5">
                <button aria-label="Close" class="btn-close position-absolute" data-bs-dismiss="modal"><span
                        aria-hidden="true">&times;</span></button>
                <i class="icon icon-close fs-70 text-danger lh-1 my-5 d-inline-block"></i>
                <form action="" id="cancel-form" method="POST">
                    @csrf
                    <h2 class="text-danger">{{ lang('Warning!') }}</h2>
                    <h4 class="text-danger">{{ lang('Are you sure you want to Cancel this booking?') }}</h4>
                    <p class="mg-b-20 mg-x-20" id="amount_perc"></p>
                    <input type="hidden" name="deduct_amount" id="deduct_amount">
                    <button class="btn btn-danger pd-x-25" type="submit">{{ lang('Continue') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/js/table-data.js') }}"></script>
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

<script>
    function cancelBooking(url) {
            $('#cancel-booking-modal').modal('show');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                type: 'POST',
                url: url,
                success: function(res) {
                    var route_name = "{{ route('cancel-booking', ['id' => 'route_id']) }}".replace('route_id', res.id);
                    $('#amount_perc').html(res.amount_perc + '% will be deducted from your total booking price.');
                    $('#deduct_amount').val(res.deduct_amount);
                    $('#cancel-form').attr('action', route_name);
                }
            });
        }
</script>
@endsection
