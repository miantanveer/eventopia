@extends('layouts.admin')

@section('styles')
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Listings of Spaces</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Spaces</li>
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
                                    <h6 class="">Total Spaces</h6>
                                    <h2 class="mb-0 number-font">{{ @$totalSpaces }}</h2>
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
                                    <h6 class="">Total Pending Spaces</h6>
                                    <h2 class="mb-0 number-font">{{ @$reviewSpaces }}</h2>
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
                                    <h6 class="">Total Accepted Spaces</h6>
                                    <h2 class="mb-0 number-font">{{ @$activeSpaces }}</h2>
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
                                    <h6 class="">Total Rejected Spaces</h6>
                                    <h2 class="mb-0 number-font">{{ @$rejectedSpaces }}</h2>
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
                    <h3 class="card-title">Spaces</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">User</th>
                                    <th class="border-bottom-0">Space Type</th>
                                    <th class="border-bottom-0">Title</th>
                                    <th class="border-bottom-0">Description</th>
                                    <th class="border-bottom-0">Contact User</th>
                                    <th class="border-bottom-0">Email</th>
                                    <th class="border-bottom-0">Contact No.</th>
                                    <th class="border-bottom-0">Status</th>
                                    <th class="border-bottom-0">View</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse (@$spaces as $space)
                                    <tr>
                                        <td>
                                            {{ @$space->user->first_name . ' ' . @$space->user->last_name }}</td>
                                        <td>{{ @$space->spaceType->type }}</td>
                                        <td>{{ @$space->space_title }}</td>
                                        <td>{{ @$space->space_description }}</td>
                                        <td>
                                            {{ @$space->c_u_fname . ' ' . @$space->c_u_lname }}</td>
                                        <td>{{ @$space->user->email }}</td>
                                        <td>{{ @$space->c_u_phone }}</td>
                                        <td><span
                                                class="tag tag-rounded tag-icon {{ @$space->status == '0' ? 'tag-info' : (@$space->status == '1' ? 'tag-green' : 'tag-red') }}">{{ @$space->status == '0' ? 'Review' : (@$space->status == '1' ? 'Active' : 'Rejected') }}
                                                <a
                                                    class="tag-addon {{ @$space->status == '0' ? 'tag-info' : (@$space->status == '1' ? 'tag-green' : 'tag-red') }}"></a></span>
                                        </td>
                                        <td>
                                            <a class="btn" href="{{ route('admin.listings.detail.page', ['id' => @$space->id, 'type' => 'space']) }}">
                                                <i class="fa fa-eye text-primary" aria-hidden="true"></i></a>
                                        </td>
                                        <td>
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
                                        </td>
                                    </tr>
                                @empty
                                    <div>
                                        <tr>
                                            <td class="text-center align-middle">{{ lang('No Record Found') }}</td>
                                        </tr>
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
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
                    type:'space',
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
