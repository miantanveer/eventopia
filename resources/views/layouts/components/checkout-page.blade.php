@extends('layouts.customer-web-layout')

@section('styles')
    <style>
        .card {
            box-shadow: none !important;
        }

        .owl-item {
            border: 1px solid #e9edf4 !important;
            border-radius: 10px;
        }

        .owl-body {
            padding-left: 5px !important;
            padding-bottom: 0px !important;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-8 col-lg-12 col-md-12 p-0">
            <div class="card custom-card overflow-hidden">
                <div class="card-body m-3" style="box-shadow: 0px 0px 3px 3px rgb(0 0 0 / 8%) !important;">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="checkbox1" id="all_select">
                        <span class="custom-control-label">Select all</span>
                    </label>
                </div>
            </div>
            <div class="card custom-card overflow-hidden">
                @foreach (@$user->cart as $data)
                    @if ($data->type == 'entertainment')
                        <div class="card-body p-3 m-3" style="box-shadow: 0px 0px 3px 3px rgb(0 0 0 / 8%);">
                            <div class="row g-0 ">
                                <div class="col-1 pe-0 my-auto">
                                    <label class="custom-control custom-checkbox">
                                        {{-- <input type="checkbox" class="custom-control-input cards" name="checkbox1"
                                            value="option1" id="first_card"> --}}
                                        <input type="checkbox" class="custom-control-input cards" name="checkbox1"
                                            value="option1" id="first_card" data-type="entertainment"
                                            data-amount="{{ @$data->entertainment->entertainmentActivities[0]->hourly_rate }}"
                                            data-title="{{ @$data->entertainment->title }}"
                                            data-discount="{{ @$data->entertainment->entertainmentActivities[0]->discount }}"
                                            data-image="{{ asset(@$data->entertainment->entertainmentImages[0]->image) }}"
                                            data-id="{{ @$data->entertainment->id }}">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <div class="col-sm-3 col-11 ps-sm-0 pe-3 pe-md-0 ">
                                    <img id="ent-img"
                                        src="{{ asset(@$data->entertainment->entertainmentImages[0]->image) }}"
                                        style="width: 130px; height: auto" class="card-img-left h-100" alt="img">
                                </div>
                                <div class="col-sm-8 ps-6 ps-md-0 mt-6 mt-md-0">
                                    <div class="card-body py-0">
                                        <div class="row">
                                            <div class="col-sm-10 col-9">
                                                <h5 class="card-title">{{ @$data->entertainment->title }}</h5>
                                            </div>
                                            <div class="col-sm-2 col-3 text-end">
                                                <a
                                                    onclick="deleteModal('{{ route('cart-delete', ['id' => @$data->id, 'type' => 'entertainment']) }}')">
                                                    <i class="fa fa-trash" style="color: red" data-bs-toggle="tooltip"
                                                        title=""
                                                        data-bs-original-title="{{ @$data->entertainment->title }}"></i>
                                                </a>
                                                {{-- <i class="fa fa-heart-o ms-2" style="color: blue" data-bs-toggle="tooltip"
                                            title="" data-bs-original-title="fa fa-heart-o"
                                            aria-label="fa fa-heart-o"></i> --}}
                                            </div>
                                        </div>
                                        <p class="card-text mt-3 mt-md-0">Amount :
                                            {{ @$data->entertainment->entertainmentActivities[0]->hourly_rate }}/hour</p>
                                        <p class="card-text"><small class="text-muted">Entertainment (Available :
                                                {{ @$data->entertainment->entertainmentActivities[0]->max_hours }})</small>
                                        </p>
                                        <div class="row">
                                            <div class="text-end">
                                                <button type="button" class="btn btn-gray mt-1 mb-1 me-3" disabled>
                                                    <span>Total :
                                                        {{ @$data->entertainment->entertainmentActivities[0]->hourly_rate }}</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($data->type == 'space')
                        <div class="card-body p-3 m-3" style="box-shadow: 0px 0px 3px 3px rgb(0 0 0 / 8%);">
                            <div class="row g-0 ">
                                <div class="col-1 pe-0 my-auto">
                                    <label class="custom-control custom-checkbox">
                                        {{-- <input type="checkbox" class="custom-control-input cards" name="checkbox1"
                                            value="option1" id="first_card"> --}}
                                        <input type="checkbox" class="custom-control-input cards" name="checkbox1"
                                            value="option1" id="first_card" data-type="space"
                                            data-amount="{{ @$data->space->spaceHaveActivities[0]->rate_per_hour }}"
                                            data-title="{{ @$data->space->space_title }}"
                                            data-discount="{{ @$data->space->spaceHaveActivities[0]->discount }}"
                                            data-image="{{ asset(@$data->space->spaceImages[0]->image) }}"
                                            data-id="{{ @$data->space->id }}">

                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <div class="col-sm-3 col-11 ps-sm-0 pe-3 pe-md-0 ">
                                    <img id="space-img" src="{{ asset(@$data->space->spaceImages[0]->image) }}"
                                        style="width: 130px; height: auto" class="card-img-left h-100" alt="img">
                                </div>
                                <div class="col-sm-8 ps-6 ps-md-0 mt-6 mt-md-0">
                                    <div class="card-body py-0">
                                        <div class="row">
                                            <div class="col-sm-10 col-9">
                                                <h5 class="card-title">{{ @$data->space->space_title }}</h5>
                                            </div>
                                            <div class="col-sm-2 col-3 text-end">
                                                <a
                                                    onclick="deleteModal('{{ route('cart-delete', ['id' => @$data->id, 'type' => 'space']) }}')">
                                                    <i class="fa fa-trash" style="color: red" data-bs-toggle="tooltip"
                                                        title=""
                                                        data-bs-original-title="{{ @$data->space->space_title }}"></i>
                                                </a>
                                                {{-- <i class="fa fa-heart-o ms-2" style="color: blue" data-bs-toggle="tooltip"
                                            title="" data-bs-original-title="fa fa-heart-o"
                                            aria-label="fa fa-heart-o"></i> --}}
                                            </div>
                                        </div>
                                        <p class="card-text mt-3 mt-md-0">Amount :
                                            {{ @$data->space->spaceHaveActivities[0]->rate_per_hour }}/hour</p>
                                        <p class="card-text"><small class="text-muted">Entertainment (Available :
                                                {{ @$data->space->spaceHaveActivities[0]->minimum_hour }})</small></p>
                                        <div class="row">
                                            <div class="text-end">
                                                <button type="button" class="btn btn-gray mt-1 mb-1 me-3" disabled>
                                                    <span>Total :
                                                        {{ @$data->space->spaceHaveActivities[0]->rate_per_hour }}</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12">
            <div class="card cart" style="border: 1px solid #cbcaca !important; border-radius: 0 !important;">
                <div class="card-header">
                    <h3 class="card-title">Order Summary</h3>
                </div>
                <div id="order-summary"></div>
                <div class="card-footer">
                    <div class="btn-list display-inline">
                        <form action="{{ url('review-pay') }}" method="POST">
                            @csrf
                            @method('post')
                            <input type="hidden" id="subtotal" name="subtotal" value="0">
                            <input type="hidden" id="discount" name="discount" value="0">
                            <input type="hidden" id="listing_id_space" name="listing_id_space[]" value="0">
                            <input type="hidden" id="listing_id_entertainment" name="listing_id_entertainment[]"
                                value="0">
                            <div id="selected-types"></div>
                            <!-- ...other form fields... -->
                            <a href="{{ url('shop') }}" class="btn"></i>Continue Shopping</a>
                            <button type="submit" class="btn btn-primary float-sm-end" id="place-order-btn" disabled>
                                <i class="fa fa-shopping-bag me-1"></i>Place Order
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="p-3 mb-5 text-dark">When checking out your space, you may add these Talents or
            Services.</h3>
        <h6 class="p-3 mb-5 text-dark">The spaces you might be looking for?</h6>
        <div class="col-12 px-lg-0 px-6 bg-white">
            <div class="card custom-card">
                <div class="card-body p-0 h-100">
                    <div class="owl-carousel owl-carousel-icons2">
                        @foreach ($spaces as $space)
                            <div class="item">
                                <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0">
                                        <a href="{{ route('space-details', @$space->id) }}">
                                            <img src="{{ asset(@$space->spaceImages[0]->image) }}" class="card-img-top"
                                                alt="img">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ @$space->space_title }}</h5>
                                                <i class="fa fa-users"></i> 25 &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                &nbsp; 19
                                                <p>Responds within 1 hour</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <h3 class="p-3 mb-5 text-dark">Talents & Entertainments you might be looking for?</h3>
        <div class="col-12 px-lg-0 px-6 bg-white">
            <div class="card custom-card">
                <div class="card-body p-0 h-100">
                    <div class="owl-carousel owl-carousel-icons2">
                        @foreach ($ents as $ent)
                            <div class="item">
                                <div class="card overflow-hidden border mt-0 mb-0 p-0 bg-white">
                                    <div class="card overflow-hidden my-0">
                                        <a href="{{ route('entertainment-details', @$ent->id) }}">
                                            <img src="{{ asset(@$ent->entertainmentImages[0]->image) }}"
                                                class="card-img-top" alt="img">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ @$ent->title }}</h5>
                                                <i class="fa fa-users"></i> 25 &nbsp;
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                <i class="fa fa-star" style="color: #f1c40f"></i>
                                                &nbsp; 19
                                                <p>Responds within 1 hour</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete-modal">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body text-center p-4 pb-5">
                    <button aria-label="Close" class="btn-close position-absolute" data-bs-dismiss="modal"><span
                            aria-hidden="true">&times;</span></button>
                    <i class="icon icon-close fs-70 text-danger lh-1 my-5 d-inline-block"></i>
                    <form action="" id="delete-form" method="POST">
                        @csrf
                        @method('delete')
                        <h2 class="text-danger">Warning!</h2>
                        <h4 class="text-danger">Are you sure you want to remove this item?</h4>
                        <button class="btn btn-danger pd-x-25">Continue</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- TIMEPICKER JS -->
    <script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script>
    <!-- DATEPICKER JS -->
    <script src="{{ asset('assets/plugins/date-picker/date-picker.js') }}"></script>
    <script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
    <!-- FORMELEMENTS JS -->
    <script src="{{ asset('assets/js/form-elements.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#profile_form').parsley();
            $('#all_select').on('change', function() {
                if ($(this).prop('checked')) {
                    $('.cards').prop('checked', true);
                } else {
                    $('.cards').prop('checked', false);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#place-order-btn').prop('disabled', true);
            var selectedListingIdsByType = {}; // Initialize an object to store selected listing IDs by type
            var selectedTypes = [];
            $('#all_select').on('change', function() {
                if ($(this).prop('checked')) {
                    $('.cards').prop('checked', true);
                } else {
                    $('.cards').prop('checked', false);
                }
                updateOrderSummary(); // Call the function to update order summary
            });

            // Function to update the order summary
            function updateOrderSummary() {
                var totalAmount = 0;
                var discountTotal = 0;
                selectedTypes = [];
                var orderSummary = '<div class="card-body py-2">';

                // Loop through each checked checkbox
                $('.cards:checked').each(function() {
                    var id = $(this).data('id');
                    var type = $(this).data('type');
                    var image = $(this).data('image');
                    var title = $(this).data('title');
                    var amount = parseFloat($(this).data('amount'));
                    var discount = parseFloat($(this).data('discount'));

                    // Check if the type exists in the selectedListingIdsByType object
                    if (!(type in selectedListingIdsByType)) {
                        selectedListingIdsByType[
                            type] = []; // Initialize an array for the type if it doesn't exist
                    }

                    // Check if the ID is not already in the selectedListingIds array for this type
                    if (selectedListingIdsByType[type].indexOf(id) === -1) {
                        selectedListingIdsByType[type].push(id); // Add the ID to the array
                    }
                    if (selectedTypes.indexOf(type) === -1) {
                        selectedTypes.push(type); // Add the type
                    }

                    // Add the amount to the total
                    totalAmount += amount;

                    // Add the discount to the discount total
                    discountTotal += discount;

                    // Add details for the current item to the order summary
                    orderSummary += '<div class="row">';
                    orderSummary += '<div class="col-6"><h5 class="mb-3 fw-bold">' + type + '</h5>';
                    orderSummary += '<div class=""><img class="avatar-xxl br-7" src="' + image +
                        '" alt="img"></div>';
                    orderSummary += '</div>';
                    orderSummary += '<div class="col-6"><h5 class="mb-3 fw-bold">' + type + ' Details</h5>';
                    orderSummary += '<div class="align-middle"><p>' + title + '</p></div>';
                    orderSummary += '</div>';
                    orderSummary += '</div>';
                });

                // Remove unchecked IDs from the selectedListingIds array for each type
                $('.cards:not(:checked)').each(function() {
                    var id = $(this).data('id');
                    var type = $(this).data('type');

                    if (type in selectedListingIdsByType) {
                        var index = selectedListingIdsByType[type].indexOf(id);
                        if (index !== -1) {
                            selectedListingIdsByType[type].splice(index, 1); // Remove the ID from the array
                        }
                    }
                });

                // Update hidden form fields for each type and selected IDs
                for (var type in selectedListingIdsByType) {
                    $('#listing_id_' + type).val(selectedListingIdsByType[type].join(','));
                }
                var selectedTypesHtml = '<input type="hidden" id="type" name="type" value="' + selectedTypes.join(
                    ', ') + '">';
                $('#selected-types').html(selectedTypesHtml);

                $('#subtotal').val(totalAmount.toFixed(2));
                $('#discount').val(discountTotal.toFixed(2));


                // Enable or disable the "Place Order" button based on checkboxes
                if ($('.cards:checked').length > 0) {
                    $('#place-order-btn').prop('disabled', false);
                } else {
                    $('#place-order-btn').prop('disabled', true);
                }

                orderSummary += '<div class="row mt-3 py-3 border-top">';
                orderSummary += '<div class="col-6 float-left"><h6>Sub Total</h6></div>';
                orderSummary += '<div class="col-6 text-end">' + totalAmount.toFixed(2) + '</div>';
                orderSummary += '</div>';
                orderSummary += '<div class="row mt-3 py-3 border-top">';
                orderSummary += '<div class="col-6 float-left"><h6>Discount %</h6></div>';
                orderSummary += '<div class="col-6 text-end">' + discountTotal.toFixed(2) + '</div>';
                orderSummary += '</div>';
                orderSummary += '<div class="row mt-3 py-3 border-top" style="background-color: #E3E3E3">';
                orderSummary += '<div class="col-6 float-left"><h6>Total:</h6></div>';
                orderSummary += '<div class="col-6 text-end">' + (totalAmount - discountTotal).toFixed(2) +
                    '</div>';
                orderSummary += '</div>';

                // Update the HTML in the #order-summary container
                $('#order-summary').html(orderSummary);
            }

            // Listen for checkbox changes
            $('.cards').on('change', function() {
                updateOrderSummary();
            });

            // Initialize the order summary when the page loads
            updateOrderSummary();
        });
    </script>

    <script>
        function deleteModal(url) {
            $('#delete-form').attr('action', url);
            $('#delete-modal').modal('show');
        }
    </script>
@endsection
