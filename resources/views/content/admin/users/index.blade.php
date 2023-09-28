@extends('layouts.admin')

@section('styles')
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Users</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Users</h6>
                                    <h2 class="mb-0 number-font">{{@$totalUsers}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Active Users</h6>
                                    <h2 class="mb-0 number-font">{{@$activeUsers}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Blocked Users</h6>
                                    <h2 class="mb-0 number-font">{{@$blockedUsers}}</h2>
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
                    <h3 class="card-title">Users</h3>
                </div>
                <div class="card-body">
                    <div class="text-end">
                        <a class="modal-effect btn btn-primary mb-4" id="addUser">Add New User</a>
                    </div>
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0 text-center align-middle">Image</th>
                                    <th class="border-bottom-0 text-center align-middle">First Name</th>
                                    <th class="border-bottom-0 text-center align-middle">Last Name</th>
                                    <th class="border-bottom-0 text-center align-middle">Email</th>
                                    <th class="border-bottom-0 text-center align-middle">Phone No.</th>
                                    <th class="border-bottom-0 text-center align-middle">Date of Birth</th>
                                    <th class="border-bottom-0 text-center align-middle">Status</th>
                                    <th class="border-bottom-0 text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td class="text-center align-middle"><span
                                                class="avatar avatar-md brround cover-image"
                                                data-bs-image-src="{{ asset($user->image ?? 'assets/images/users/profile.png') }}"><span
                                                    class="avatar-status {{ $user->status == '1' ? 'bg-green' : 'bg-danger' }}"></span></span>
                                        </td>
                                        <td class="text-center align-middle">{{ $user->first_name }}</td>
                                        <td class="text-center align-middle">{{ $user->last_name }}</td>
                                        <td class="text-center align-middle">{{ $user->email ?? 'Null' }}</td>
                                        <td class="text-center align-middle">{{ $user->phone_number ?? 'Null' }}</td>
                                        <td class="text-center align-middle">{{ $user->date_of_birth }}</td>
                                        <td class="text-center align-middle"><span
                                                class="tag tag-rounded tag-icon {{ $user->status == '2' ? 'tag-red' : 'tag-green' }}"><i
                                                    class="fe {{ $user->status == '2' ? 'fe-user-x' : 'fe-user-check' }}"></i>{{ $user->status == '1' ? 'Active' : 'Blocked' }}<a
                                                    class="tag-addon {{ $user->status == '2' ? 'tag-red' : 'tag-green' }}"></a></span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="btn-list">
                                                <button class="btn btn-sm btn-primary bEdit"
                                                    data-user="{{ $user }}">
                                                    <span class="fe fe-edit"></span>
                                                </button>
                                                <button id="bDel" type="button"
                                                    onclick="deleteModal('{{ route('admin.delete.user', $user->id) }}')"
                                                    class="btn  btn-sm btn-danger">
                                                    <span class="fe fe-trash-2"> </span>
                                                </button>
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

    <script>
        $(document).ready(function() {
            $('#user_form').parsley();
        });
    </script>
    <script src="{{ asset('assets/js/email-validate.js') }}"></script>
    <script>
        function deleteModal(url) {
            $('#user-delete-form').attr('action', url);
            $('#user-delete-modal').modal('show');
        }
    </script>

    <script>
        $(document).ready(function() {
            // Handle click event of "Edit" button
            $('.bEdit').click(function() {
                $('.user-modal-title').text('Update User');
                // Get the user data from the data attribute
                var userData = $(this).data('user');

                // Populate modal fields with data dynamically
                $('#first_name').val(userData.first_name);
                $('#last_name').val(userData.last_name);
                $('#date_of_birth').val(userData.date_of_birth);
                $('#status').val(userData.status);

                var editURL = "{{ route('admin.edit.user', ['id' => '__user_id']) }}";
                editURL = editURL.replace('__user_id', userData.id);
                $('#user_form').attr('action', editURL);

                // Show the modal
                $('#user-modal').modal('show');
            });

            $('#addUser').click(function() {
                $('#user_form input, #status').val('').filter('#status').val('1');
                $('#user_form').attr('action', "{{ route('admin.add.user') }}");
                $('#user-modal').modal('show');
            });
        });
    </script>
@endsection
