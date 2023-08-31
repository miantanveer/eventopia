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
                            <div class="col-sm-12">
                                <table id="example2"
                                    class="table text-nowrap border rounded-3 dataTable no-footer dtr-inline p-0"
                                    role="grid" aria-describedby="example2_info">
                                    <thead class="table_head_row">
                                        <tr role="row" class="text-center">
                                            <th class="sorting sorting_asc text-white p-4" tabindex="0"
                                                aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending">Category</th>
                                            <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Position: activate to sort column ascending">Location
                                            </th>
                                            <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Office: activate to sort column ascending">Customer name</th>
                                            <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending">Time</th>
                                            <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending">Price</th>
                                            <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Start date: activate to sort column ascending">Attendees
                                                Number</th>
                                            <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Salary: activate to sort column ascending">Type</th>
                                            <th class="sorting text-white p-4" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Salary: activate to sort column ascending">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (@$pendingBookings as $pendingBooking)
                                            <tr class="text-center">
                                                <td class="dtr-control sorting_1" tabindex="0">{{@$pendingBooking->type}}</td>
                                                <td>{{Str::limit(@$pendingBooking->type == 'space' ? @$pendingBooking->space->address : (@$pendingBooking->type == 'entertainment' ? @$pendingBooking->entertainment->address :  @$pendingBooking->service->address), 30, $end='...')}}</td>
                                                <td>{{@$pendingBooking->user->first_name . ' ' . @$pendingBooking->user->last_name }}</td>
                                                <td>{{@$pendingBooking->date}}</td>
                                                <td>{{@$pendingBooking->amount}}</td>
                                                <td>101 - 150</td>
                                                <td>{{@$pendingBooking->type == 'space' ? @$pendingBooking->space->spaceType->type : (@$pendingBooking->type == 'entertainment' ? @$pendingBooking->entertainment->title :  @$pendingBooking->service->category)}}</td>
                                                <td class="text-end">
                                                    <form action="{{@$pendingBooking->type == 'space' ? route('accept-bookings',@$pendingBooking->id) : URL('/create-quote')}}" method="post">
                                                        @csrf
                                                        <a href="#" class="btn text-danger border-0">Decline</a>
                                                        <button class="btn btn-primary ms-3">{{(@$pendingBooking->type == 'space' || @$pendingBooking->type == 'entertainment') ? 'Accept' : 'Send Quote'}}</button>
                                                    </form>
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
