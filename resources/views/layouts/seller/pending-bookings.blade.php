@extends('layouts.seller-web-layout')


@section('styles')
<style>
    .page-main {
        background-color: #E8F2FF;
    }
    .table_head_row{
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
                                    <table id="example2" class="table text-nowrap border rounded-3 dataTable no-footer dtr-inline p-0"
                                        role="grid" aria-describedby="example2_info">
                                        <thead class="table_head_row">
                                            <tr role="row" class="text-center">
                                                <th class="sorting sorting_asc text-white p-4" tabindex="0"
                                                    aria-controls="example2" rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Category</th>
                                                <th class="sorting text-white p-4" tabindex="0"
                                                    aria-controls="example2" rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending">Location
                                                </th>
                                                <th class="sorting text-white p-4" tabindex="0"
                                                    aria-controls="example2" rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending">Customer name</th>
                                                <th class="sorting text-white p-4" tabindex="0"
                                                    aria-controls="example2" rowspan="1" colspan="1"
                                                    aria-label="Age: activate to sort column ascending">Schedule</th>
                                                <th class="sorting text-white p-4" tabindex="0"
                                                    aria-controls="example2" rowspan="1" colspan="1"
                                                    aria-label="Start date: activate to sort column ascending">Attendees
                                                    date</th>
                                                <th class="sorting text-white p-4" tabindex="0"
                                                    aria-controls="example2" rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending">Type</th>
                                                <th class="sorting text-white p-4" tabindex="0"
                                                    aria-controls="example2" rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td class="dtr-control sorting_1" tabindex="0">Wedding Planner
                                                    Service</td>
                                                <td>New England</td>
                                                <td>John Smith</td>
                                                <td>07/28/2023</td>
                                                <td>101 - 150</td>
                                                <td>Wedding</td>
                                                <td class="text-end"><a href="#" class="btn text-danger border-0">Decline</a><a href="{{URL('/create-quote')}}" class="btn btn-primary ms-3">Send Quote</a></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="dtr-control sorting_1" tabindex="0">Wedding Planner
                                                    Service</td>
                                                <td>New England</td>
                                                <td>John Smith</td>
                                                <td>07/28/2023</td>
                                                <td>101 - 150</td>
                                                <td>Wedding</td>
                                                <td class="text-end"><a href="#" class="btn text-danger border-0">Decline</a><a href="#" class="btn btn-primary ms-3">Accept</a></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="dtr-control sorting_1" tabindex="0">Wedding Planner
                                                    Service</td>
                                                <td>New England</td>
                                                <td>John Smith</td>
                                                <td>07/28/2023</td>
                                                <td>101 - 150</td>
                                                <td>Wedding</td>
                                                <td class="text-end"><a href="#" class="btn text-danger border-0">Decline</a><a href="#" class="btn btn-primary ms-3">Accept</a></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="dtr-control sorting_1" tabindex="0">Wedding Planner
                                                    Service</td>
                                                <td>New England</td>
                                                <td>John Smith</td>
                                                <td>07/28/2023</td>
                                                <td>101 - 150</td>
                                                <td>Wedding</td>
                                                <td class="text-end"><a href="#" class="btn text-danger border-0">Decline</a><a href="#" class="btn btn-primary ms-3">Accept</a></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="dtr-control sorting_1" tabindex="0">Wedding Planner
                                                    Service</td>
                                                <td>New England</td>
                                                <td>John Smith</td>
                                                <td>07/28/2023</td>
                                                <td>101 - 150</td>
                                                <td>Wedding</td>
                                                <td class="text-end"><a href="#" class="btn text-danger border-0">Decline</a><a href="#" class="btn btn-primary ms-3">Accept</a></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="dtr-control sorting_1" tabindex="0">Wedding Planner
                                                    Service</td>
                                                <td>New England</td>
                                                <td>John Smith</td>
                                                <td>07/28/2023</td>
                                                <td>101 - 150</td>
                                                <td>Wedding</td>
                                                <td class="text-end"><a href="#" class="btn text-danger border-0">Decline</a><a href="#" class="btn btn-primary ms-3">Accept</a></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="dtr-control sorting_1" tabindex="0">Wedding Planner
                                                    Service</td>
                                                <td>New England</td>
                                                <td>John Smith</td>
                                                <td>07/28/2023</td>
                                                <td>101 - 150</td>
                                                <td>Wedding</td>
                                                <td class="text-end"><a href="#" class="btn text-danger border-0">Decline</a><a href="#" class="btn btn-primary ms-3">Accept</a></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="dtr-control sorting_1" tabindex="0">Wedding Planner
                                                    Service</td>
                                                <td>New England</td>
                                                <td>John Smith</td>
                                                <td>07/28/2023</td>
                                                <td>101 - 150</td>
                                                <td>Wedding</td>
                                                <td class="text-end"><a href="#" class="btn text-danger border-0">Decline</a><a href="#" class="btn btn-primary ms-3">Accept</a></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="dtr-control sorting_1" tabindex="0">Wedding Planner
                                                    Service</td>
                                                <td>New England</td>
                                                <td>John Smith</td>
                                                <td>07/28/2023</td>
                                                <td>101 - 150</td>
                                                <td>Wedding</td>
                                                <td class="text-end"><a href="#" class="btn text-danger border-0">Decline</a><a href="#" class="btn btn-primary ms-3">Accept</a></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="dtr-control sorting_1" tabindex="0">Wedding Planner
                                                    Service</td>
                                                <td>New England</td>
                                                <td>John Smith</td>
                                                <td>07/28/2023</td>
                                                <td>101 - 150</td>
                                                <td>Wedding</td>
                                                <td class="text-end"><a href="#" class="btn text-danger border-0">Decline</a><a href="#" class="btn btn-primary ms-3">Accept</a></td>
                                            </tr>
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
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/js/table-data.js')}}"></script>
@endsection
