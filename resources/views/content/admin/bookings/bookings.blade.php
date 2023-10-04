@extends('layouts.admin')

@section('styles')
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Bookings of {{ $type }}</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $type }}</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Bookings</h6>
                                    <h2 class="mb-0 number-font">{{ @$totalBookings }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Review Bookings</h6>
                                    <h2 class="mb-0 number-font">{{ @$totalReviewBookings }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Accepted Bookings</h6>
                                    <h2 class="mb-0 number-font">{{ @$totalAcceptedBookings }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Cancelled Bookings</h6>
                                    <h2 class="mb-0 number-font">{{ @$totalCancelledBookings }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END -->

    <!-- ROW-2 -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $type }}</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if (isset($orders))
                            <table id="example2" class="table table-bordered border-bottom">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">{{ lang('Location') }}</th>
                                        <th class="border-bottom-0">{{ lang('Customer') }}</th>
                                        <th class="border-bottom-0">{{ lang('Time') }}</th>
                                        <th class="border-bottom-0">{{ lang('Price') }}</th>
                                        <th class="border-bottom-0">{{ lang('Type') }}</th>
                                        <th class="border-bottom-0">{{ lang('Status') }}</th>
                                        <th class="border-bottom-0">{{ lang('View') }}</th>
                                        <th class="border-bottom-0">{{ lang('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse (@$orders as $order)
                                        <tr>
                                            <td>{{ lang(Str::limit(@$order->type == 'space' ? @$order->space->address : (@$order->type == 'entertainment' ? @$order->entertainment->address : @$order->service->address), 30, $end = '...')) }}
                                            </td>
                                            <td>{{ lang(@$order->user->first_name . ' ' . @$order->user->last_name) }}
                                            </td>
                                            <td>{{ @$order->date }}</td>
                                            <td>{{ @$order->amount }}</td>
                                            <td>{{ lang(@$order->type == 'space' ? @$order->space->spaceType->type : (@$order->type == 'entertainment' ? @$order->entertainment->title : @$order->service->category)) }}
                                            </td>
                                            <td><a class="btn"
                                                    href="{{ route('bookings-details', ['id' => @$order->id, 'type' => @$order->type]) }}"><i
                                                        class="fa fa-eye text-primary" aria-hidden="true"></i></a>
                                            </td>
                                            <td>
                                                sdf
                                            </td>
                                            {{-- <td>
                                            <div class="btn-group mt-2 mb-2">
                                                <button type="button" class="btn rounded-1 p-2" data-bs-toggle="dropdown">
                                                    <i class="icon icon-options"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu" style="">
                                                    @if (@$space->status != '1')
                                                        <li class="m-2">
                                                            <a class="btn btn-sm btn-primary approve" type="button"
                                                                data-status="1" data-space-id="{{ $space->id }}">
                                                                {{ lang('Approve') }}
                                                            </a>
                                                        </li>
                                                    @endif
                                                    @if (@$space->status != '2')
                                                        <li class="m-2">
                                                            <a class="btn btn-sm btn-secondary reject" type="button"
                                                                data-status="2" data-space-id="{{ $space->id }}">
                                                                {{ lang('Reject') }}
                                                            </a>
                                                        </li>
                                                    @endif
                                                    <li class="m-2">
                                                        <a id="bDel" type="button"
                                                            onclick="deleteModal('{{ route('admin.listings.delete', ['id' => $space->id, 'type' => 'space']) }}')"
                                                            class="btn  btn-sm btn-danger">{{ lang('Delete') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td> --}}
                                            <td class="text-end">
                                                @if (@$order->status == 3)
                                                    <span disabled
                                                        class="badge bg-danger-gradient badge-sm  me-1 mb-1 mt-1">{{ lang('Declined') }}</span>
                                                @elseif (@$order->status == 2)
                                                    <span disabled
                                                        class="badge bg-success-gradient badge-sm me-1 mb-1 mt-1">{{ lang('Accepted') }}</span>
                                                @else
                                                    <a href="{{ route('decline-bookings', @$order->id) }}"
                                                        class="btn text-danger border-0">{{ lang('Decline') }}</a>
                                                    <a href="{{ @$order->type == 'space' || @$order->type == 'entertainment' || @$order->type == 'service' ? route('accept-bookings', @$order->id) : URL('/create-quote') }}"
                                                        class="btn btn-primary ms-3">{{ lang(@$order->type == 'space' || @$order->type == 'entertainment' || @$order->type == 'service' ? 'Accept' : 'Send Quote') }}</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        @else
                            <div class="card-body text-center border p-4 pb-5">
                                <p class="mb-4 mt-4 mx-4">
                                    {{ lang('No Record Found.') }}
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-2 END -->
@endsection

@section('scripts')
    <!-- SPARKLINE JS-->
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('assets/plugins/circle-progress/circle-progress.min.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{ asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{ asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart/rounded-barchart.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{ asset('assets/js/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexchart/irregular-data-series.js') }}"></script>

    <!-- C3 CHART JS -->
    <script src="{{ asset('assets/plugins/charts-c3/d3.v5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts-c3/c3-chart.js') }}"></script>

    <!-- CHART-DONUT JS -->
    <script src="{{ asset('assets/js/charts.js') }}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{ asset('assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/chart.flot.sampledata.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/dashboard.sampledata.js') }}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/index1.js') }}"></script>
    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
    <!-- SWEET-ALERT JS -->
    <script src="{{ asset('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#user_form').parsley();
        });
    </script>
    <script src="{{ asset('assets/js/email-validate.js') }}"></script>
    <script>
        function deleteModal(url) {
            $('#listing-delete-form').attr('action', url);
            $('#listing-delete-modal').modal('show');
        }

        // Click event handler for the "Approve" button
        $('.approve').click(function() {
            var spaceId = $(this).data('space-id');
            var status = $(this).data('status');
            updateStatus(spaceId, status);
        });

        // Click event handler for the "Reject" button
        $('.reject').click(function() {
            var spaceId = $(this).data('space-id');
            var status = $(this).data('status');
            updateStatus(spaceId, status);
        });

        // Function to send the AJAX request to update the status
        function updateStatus(spaceId, status) {
            // Get the CSRF token from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                type: 'POST',
                url: "{{ route('admin.listings.update.status') }}",
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
                },
                data: {
                    id: spaceId,
                    type: 'space',
                    status: status
                },
                success: function(response) {
                    if (response.status === 200) {
                        swal({
                            title: "Success.",
                            text: response.message,
                            timer: 4000,
                            showConfirmButton: false
                        });
                        window.location.reload();

                    } else {
                        swal({
                            title: "Error.",
                            text: response.message,
                            timer: 4000,
                            showConfirmButton: false
                        });
                    }
                },
                error: function(error) {
                    // Handle any errors here
                    console.error(error);
                }
            });
        }
    </script>
@endsection
