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
    {{-- <div class="container mt-5"> --}}
    <div class="row row-sm mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="col-sm-12">
                                <table id="example2"
                                    class="table text-nowrap border rounded-3 dataTable no-footer dtr-inline p-0"
                                    role="grid" aria-describedby="example2_info">
                                    <thead class="table_head_row">
                                        <tr role="row" class="text-center">
                                            <th class="sorting sorting_asc text-white p-4" tabindex="0"
                                                aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending">{{lang('Category')}}</th>
                                            <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Position: activate to sort column ascending">{{lang('Location')}}
                                            </th>
                                            <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Office: activate to sort column ascending">{{lang('Customer name')}}</th>
                                            <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending">{{lang('Time')}}</th>
                                            <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending">{{lang('Price')}}</th>
                                            <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Start date: activate to sort column ascending">{{lang('Attendees
                                                Number')}}</th>
                                            <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Salary: activate to sort column ascending">{{lang('Type')}}</th>
                                            <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Salary: activate to sort column ascending">{{lang('Action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (@$quotes as $quote)
                                                <tr class="text-center">
                                                    <td class="dtr-control sorting_1" tabindex="0">{{lang('Service')}}</td>
                                                    <td>{{ lang(Str::limit(@$quote->service->address, 30, '...')) }}
                                                    </td>
                                                    <td>{{ lang(@$quote->user->first_name . ' ' . @$quote->user->last_name) }}
                                                    </td>
                                                    <td>{{ @$quote->date }}</td>
                                                    <td>{{ @$quote->amount ?? lang('N/A') }}</td>
                                                    <td>{{ lang(@$quote->guests) }}</td>
                                                    <td>{{ lang(@$quote->service->category) }}</td>
                                                    <td class="text-end">
                                                        @if (@$quote->status == 3)
                                                            <span disabled
                                                                class="badge bg-danger-gradient badge-sm  me-1 mb-1 mt-1">{{lang('Declined')}}</span>
                                                        @elseif (@$quote->status == 1)
                                                            <span disabled
                                                                class="badge bg-info-gradient badge-sm me-1 mb-1 mt-1">{{lang('Quote Responded')}}</span>
                                                        @else
                                                            <a href="{{ route('seller_decline_quote', @$quote->id) }}"
                                                                class="btn text-danger border-0">{{lang('Decline')}}</a>
                                                            <a href="{{ route('recieve_quote', @$quote->id) }}"
                                                                class="btn btn-primary ms-3">{{lang('Send Quote')}}</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                        @endforeach
                                        @foreach (@$pendingBookings as $pendingBooking)
                                            <tr class="text-center">
                                                <td class="dtr-control sorting_1" tabindex="{{ $loop->iteration }}">
                                                    {{ lang(@$pendingBooking->type) }}</td>
                                                <td>{{ lang(Str::limit(@$pendingBooking->type == 'space' ? @$pendingBooking->space->address : (@$pendingBooking->type == 'entertainment' ? @$pendingBooking->entertainment->address : @$pendingBooking->service->address), 30, $end = '...')) }}
                                                </td>
                                                <td>{{ lang(@$pendingBooking->user->first_name . ' ' . @$pendingBooking->user->last_name) }}
                                                </td>
                                                <td>{{ @$pendingBooking->date }}</td>
                                                <td>{{ @$pendingBooking->amount }}</td>
                                                <td>101 - 150</td>
                                                <td>{{ lang(@$pendingBooking->type == 'space' ? @$pendingBooking->space->spaceType->type : (@$pendingBooking->type == 'entertainment' ? @$pendingBooking->entertainment->title : @$pendingBooking->service->category)) }}
                                                </td>
                                                <td class="text-end">
                                                    @if (@$pendingBooking->status == 3)
                                                        <span disabled
                                                            class="badge bg-danger-gradient badge-sm  me-1 mb-1 mt-1">{{lang('Declined')}}</span>
                                                    @elseif (@$pendingBooking->status == 2)
                                                        <span disabled
                                                            class="badge bg-success-gradient badge-sm me-1 mb-1 mt-1">{{lang('Accepted')}}</span>
                                                    @else
                                                        <a href="{{ route('decline-bookings', @$pendingBooking->id) }}"
                                                            class="btn text-danger border-0">{{lang('Decline')}}</a>
                                                        <a href="{{ @$pendingBooking->type == 'space' || @$pendingBooking->type == 'entertainment' || @$pendingBooking->type == 'service' ? route('accept-bookings', @$pendingBooking->id) : URL('/create-quote') }}"
                                                            class="btn btn-primary ms-3">{{ lang(@$pendingBooking->type == 'space' || @$pendingBooking->type == 'entertainment' || @$pendingBooking->type == 'service' ? 'Accept' : 'Send Quote') }}</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/table-data.js') }}"></script>
@endsection
