@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Manage Parking Options</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Parking Options</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="3" class="bg-primary text-white text-center"> Parking Options</th>
                        </tr>
                        <tr>
                            <th class="text-center" style="width: 50px;">Sr.</th>
                            <th>Name</th>
                            <th style="width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-center">#
                                <form action="" method="POST">
                                    @csrf
                                    <input type="hidden" name="action" value="add">
                            </th>
                            <td><input type="text" required name="name" id="name" class="form-control"
                                    value="" />
                            </td>
                            <td><button type="submit" class="btn btn-success btn-sm"><span class="fe fe-plus"></span>
                                    Add</button>
                                </form>
                            </td>
                        </tr>
                        @foreach ($parkingOptions as $item)
                            @php
                                $ln = $loop->iteration;
                                $id = $item->id;
                            @endphp
                            <tr class="row_{{ $id }}">
                                <th class="text-center">
                                    <form action="" method="POST">
                                        @csrf
                                        {{ $loop->iteration }}
                                </th>
                                <td>
                                    <span class="value_{{ $id }}">{{ $item->option }}</span>
                                    <input type="hidden" name="id" value="{{ $id }}">
                                    <input type="hidden" name="action" value="edit">
                                    <input type="text" required name="name" id="name_{{ $id }}"
                                        class="form-control input_{{ $id }} d-none" value="{{ $item->option }}" />
                                </td>
                                <td>
                                    <button type="button"
                                        class="btn btn-sm btn-primary btn_edit btn_edit_{{ $id }}"
                                        onclick="edit_row({{ $id }});" title="Edit"><span
                                            class="fe fe-edit"></span></button>
                                    <button type="submit"
                                        class="btn btn-sm btn-success btn_save_{{ $id }} d-none"
                                        title="Save"><span class="fe fe-save"></span></button>
                                    <button type="button" class="btn btn-sm btn-danger btn_delete_{{ $id }}"
                                        onclick="delete_item({{ $id }});"><span class="fe fe-trash-2"
                                            title="Delete"></span>
                                    </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.8.0/dist/sweetalert2.min.css" rel="stylesheet">
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.8.0/dist/sweetalert2.all.min.js"></script>
    <script>
        function edit_row(id) {
            $(`.value_${id}`).addClass('d-none');
            $(`.input_${id}`).removeClass('d-none');
            $(`.btn_edit_${id}`).addClass('d-none');
            $(`.btn_save_${id}`).removeClass('d-none');
            $(`.input_${id}`).focus();
        }

        function delete_item(id) {
            Swal.fire({
                title: 'Are you sure you want to delete this?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '{{ route('admin.general-settings.manageParkingOptions') }}?action=delete&id=' +id;
                }
            })
        }
    </script>
@endpush
