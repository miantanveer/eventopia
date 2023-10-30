@extends('layouts.admin')

@section('styles')
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Amenities</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Amenities</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-2 -->
    <div class="row">
        {{-- <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="panel panel-primary">
                        <div class=" tab-menu-heading">
                            <div class="tabs-menu1">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li><a href="#tab1" class="active" data-bs-toggle="tab">{{ lang('Amenities') }}</a>
                                    </li>
                                    <li><a href="#tab2" data-bs-toggle="tab" class="">{{ lang('Amenities in Activities') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body tabs-menu-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <div class="card" id="modal3">
                                        <div class="card-body text-center border p-4 pb-5">
                                            <div class="row"> --}}
        <div class="col-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Space Amenities</h3>
                </div>
                <div class="card-body">
                    <div class="text-start">
                        <a class="modal-effect btn btn-primary mb-4" id="addSpaceAmenity">Add New Amenity</a>
                    </div>
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0 text-center align-middle">No.</th>
                                    <th class="border-bottom-0 text-center align-middle">Type</th>
                                    <th class="border-bottom-0 text-center align-middle">Amenity Name</th>
                                    <th class="border-bottom-0 text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($spaceActivityHavingAmenities as $row)
                                    <tr>
                                        <td class="text-center align-middle">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-center align-middle">
                                            {{ $row->space_activity->title }}
                                        </td>
                                        <td class="text-center align-middle">
                                            {{ $row->space_amenity->name }}</td>
                                        <td class="text-center align-middle">
                                            <div class="btn-list">
                                                <button class="btn btn-sm btn-primary amenityEdit" data-type="space"
                                                    data-activity_id="{{ $row->space_activity->id }}"
                                                    data-title="{{ $row->space_activity->title }}"
                                                    data-name="{{ $row->space_amenity->name }}"
                                                    data-id="{{ $row->id }}"
                                                    data-amenity_id="{{ $row->space_amenity->id }}">
                                                    <span class="fe fe-edit"></span>
                                                </button>
                                                <button id="cDel" type="button"
                                                    onclick="deleteModal('{{ route('admin.general-settings.delete.amenity', ['id' => $row->id, 'type' => 'space']) }}')"
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

        @push('js')
            <!-- Modal -->
            <div class="modal fade" id="editAmenityModal" tabindex="-1" aria-labelledby="editAmenityModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('admin.general-settings.edit.amenity') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="editAmenityModalLabel">Edit Amenity</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" id="edit_id" value="">
                                <input type="hidden" name="amenity_id" id="edit_amenity_id" value="">
                                <input type="hidden" name="type" id="edit_type" value="">
                                <div class="form-group">
                                    <label>Amenity Name</label>
                                    <input type="text" required name="name" id="edit_name" value=""
                                        class="form-control">
                                </div>
                                <div class="form-group edit_space_activity_group">
                                    <label>Activity Type</label>
                                    <select name="space_activity_id" id="edit_space_activity_id" class="form-select">
                                        @foreach (\App\Models\SpaceActivity::all() as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group edit_ent_activity_group">
                                    <label>Activity Type</label>
                                    <select name="ent_activity_id" id="edit_ent_activity_id" class="form-select">
                                        @foreach (\App\Models\EntActivity::all() as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('.amenityEdit').click(function(e) {
                        e.preventDefault();
                        // data-type="space"  data-activity_id=""  data-title="" data-name="" data-id="" data-amenity_id=""
                        var type = $(this).data('type');
                        var activity_id = $(this).data('activity_id');
                        // var title = $(this).data('title');
                        var name = $(this).data('name');
                        var id = $(this).data('id');
                        var amenity_id = $(this).data('amenity_id');
                        $('#edit_id').val(id);
                        $('#edit_amenity_id').val(amenity_id);
                        $('#edit_name').val(name);
                        $('#edit_space_activity_id').val(activity_id);
                        $('#edit_ent_activity_id').val(activity_id);
                        $('#edit_type').val(type);
                        if(type == 'space') {
                            $('.edit_space_activity_group').removeClass('d-none');
                            $('.edit_ent_activity_group').addClass('d-none');
                        } else if(type == 'entertainment') {
                            $('.edit_ent_activity_group').removeClass('d-none');
                            $('.edit_space_activity_group').addClass('d-none');
                        }
                        console.log("id", id);
                        $('#editAmenityModal').modal('show');
                    });
                });
            </script>
        @endpush

        <div class="col-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Entertainment & Talents Amenities</h3>
                </div>
                <div class="card-body">
                    <div class="text-end">
                        <a class="modal-effect btn btn-primary mb-4" id="addEntertainmentAmenity">Add New Amenity</a>
                    </div>
                    <div class="table-responsive">
                        <table id="example3" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0 text-center align-middle">No.</th>
                                    <th class="border-bottom-0 text-center align-middle">Type</th>
                                    <th class="border-bottom-0 text-center align-middle">Amenity Name</th>
                                    <th class="border-bottom-0 text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($entertainmentActivityHavingAmenities as $row)
                                    <tr>
                                        <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                        <td class="text-center align-middle">
                                            {{ $row->activityAmenties->title ?? 'Null' }}</td>
                                        <td class="text-center align-middle">{{ $row->activity->name }}
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="btn-list">
                                                <button class="btn btn-sm btn-primary amenityEdit" data-type="entertainment"
                                                    data-activity_id="{{ $row->entertainment_activity_id }}"
                                                    data-title="{{ $row->activityAmenties->title ?? "Null" }}"
                                                    data-name="{{ $row->activity->name }}"
                                                    data-id="{{ $row->id }}"
                                                    data-amenity_id="{{ $row->ent_amenity_id }}">
                                                    <span class="fe fe-edit"></span>
                                                </button>
                                                <button id="cDel" type="button"
                                                    onclick="deleteModal('{{ route('admin.general-settings.delete.amenity', ['id' => $row->id, 'type' => 'entertainment']) }}')"
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
        {{-- </div>
                                        </div>
                                    </div>
                                </div> --}}
        {{-- <div class="tab-pane" id="tab2">
                                    <div class="card" id="modal3">
                                        <div class="card-body border p-4 pb-5">
                                            <div class="row">
                                                <div class="col-12 col-xl-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Space Amenities in Activities</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="text-start">
                                                                <a class="modal-effect btn btn-primary mb-4" id="addSpaceAmenity">Add New</a>
                                                            </div>
                                                            <div class="table-responsive">
                                                                <table id="example2" class="table table-bordered text-nowrap border-bottom">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="border-bottom-0 text-center align-middle">No.</th>
                                                                            <th class="border-bottom-0 text-center align-middle">Name</th>
                                                                            <th class="border-bottom-0 text-center align-middle">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @forelse ($spaceAmenities as $spaceAmenity)
                                                                            <tr>
                                                                                <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                                                                <td class="text-center align-middle">{{ $spaceAmenity->name }}</td>
                                                                                <td class="text-center align-middle">
                                                                                    <div class="btn-list">
                                                                                        {{-- <button class="btn btn-sm btn-primary bEdit"
                                                                                            data-user="{{ $spaceAmenity }}">
                                                                                            <span class="fe fe-edit"></span>
                                                                                        </button>
                                                                                        <button id="bDel" type="button"
                                                                                            onclick="deleteModal('{{ route('admin.general-settings.delete.amenity', ['id' => $spaceAmenity->id, 'type' => 'space']) }}')"
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
                                                <div class="col-12 col-xl-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Entertainment & Talents Amenities in Activities</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="text-end">
                                                                <a class="modal-effect btn btn-primary mb-4" id="addEntertainmentAmenity">Add New</a>
                                                            </div>
                                                            <div class="table-responsive">
                                                                <table id="example3" class="table table-bordered text-nowrap border-bottom">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="border-bottom-0 text-center align-middle">No.</th>
                                                                            <th class="border-bottom-0 text-center align-middle">Name</th>
                                                                            <th class="border-bottom-0 text-center align-middle">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @forelse ($entAmenities as $entAmenity)
                                                                            <tr>
                                                                                <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                                                                <td class="text-center align-middle">{{ $entAmenity->name }}</td>
                                                                                <td class="text-center align-middle">
                                                                                    <div class="btn-list">
                                                                                        {{-- <button class="btn btn-sm btn-primary bEdit"
                                                                                            data-user="{{ $entAmenity }}">
                                                                                            <span class="fe fe-edit"></span>
                                                                                        </button>
                                                                                        <button id="cDel" type="button"
                                                                                        onclick="deleteModal('{{ route('admin.general-settings.delete.amenity', ['id' => $entAmenity->id, 'type' => 'entertainment']) }}')"
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
                                        </div>
                                    </div>
                                </div> --}}
    </div>
    </div>
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
            $('#addSpaceAmenity').click(function() {
                $('#amenity_form').attr('action',
                    "{{ route('admin.general-settings.add.amenity', ['type' => 'space']) }}");
                $('#ent_activity').addClass('d-none');
                $('#space_activity').removeClass('d-none');
                $('#amenity-modal').modal('show');
            });

            $('#addEntertainmentAmenity').click(function() {
                $('#amenity_form').attr('action',
                    "{{ route('admin.general-settings.add.amenity', ['type' => 'entertainment']) }}");
                $('#space_activity').addClass('d-none');
                $('#ent_activity').removeClass('d-none');
                $('#amenity-modal').modal('show');
            });
        });
    </script>
@endsection
