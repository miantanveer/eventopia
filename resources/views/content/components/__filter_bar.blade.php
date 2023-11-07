@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />
@endpush
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
    <script>
        $(function() {
            $("#price_range").ionRangeSlider({
                type: "double",
                min: 0,
                max: 100000,
                from: {{ @$start_price }},
                to: {{ @$end_price }},
                grid: true,
            });

            $("#attendees_range").ionRangeSlider({
                type: "double",
                min: 1,
                max: 100,
                from: {{ @$start_attendees }},
                to: {{ @$end_attendees }},
                grid: true,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#guestsButton').on('click', function(e) {
                $('#dropdownMenuPrice').toggle();
            });

            $('#doneButton').click(function() {
                $('#dropdownMenuPrice').hide();
            });

            $('#attendeesButton').on('click', function(e) {
                $('#dropdownMenuAttendees').toggle();
            });

            $('#doneButtonAttendees').click(function() {
                $('#dropdownMenuAttendees').hide();
            });
        });
    </script>
    <script>
        function search_spaces2(e) {
            if (event.which === 13) {
                search_spaces();
            }
        }

        function search_spaces() {
            var price_range = $('#price_range').val();
            var attendees_range = $('#attendees_range').val();
            var selectedDate = $('#selectedDate').val();
            var location = $('#location').val();
            var q = $('#planCatagories').val();
            var price_arr = price_range.split(';');
            var attendees_arr = attendees_range.split(';');
            var start_price = price_arr[0];
            var end_price = price_arr[1];
            var start_attendees = attendees_arr[0];
            var end_attendees = attendees_arr[1];
            console.log("selectedDate", selectedDate);
            // 'Oct 31, 2023 9 AM to 9 PM';
            // if (selectedDate)
            var date_arr = selectedDate.split(' ');
            if (date_arr.length == 8) {
                var date = `${date_arr[0]} ${date_arr[1]} ${date_arr[2]}`;
                var start_time = `${date_arr[3]} ${date_arr[4]}`;
                var end_time = `${date_arr[6]} ${date_arr[7]}`;
            } else {
                var date = ``;
                var start_time = ``;
                var end_time = ``;
            }
            var qry =
                `?type={{ request()->type }}&start_price=${start_price}&end_price=${end_price}&start_attendees=${start_attendees}&end_attendees=${end_attendees}&date=${date}&start_time=${start_time}&end_time=${end_time}&location=${location}&planCatagories=${q}`;
            //
            var uri = `{{ route('search_results') }}${qry}`;
            window.location = uri;
        }
        /* $(function() {
            $('.search-btn').click(function(e) {
                e.preventDefault();
                search_spaces();
            });
        }); */
    </script>


    <!-- Modal -->
    <div class="modal fade" id="priceRangeModal" tabindex="-1" aria-labelledby="priceRangeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <input type="text" id="price_range" name="price_range"
                        value="{{ @$start_price }};{{ @$end_price }}" onchange="console.log(this.value);" />
                    <div class="p-4">
                        <button type="button" class="btn btn-primary" onclick="search_spaces();"
                            data-bs-dismiss="modal">Done</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="attendeesRangeModal" tabindex="-1" aria-labelledby="attendeesRangeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <input type="text" id="attendees_range" name="attendees_range"
                        value="{{ @$start_attendees }};{{ @$end_attendees }}" />
                    <div class="p-4">
                        <button type="button" class="btn btn-primary" onclick="search_spaces();"
                            data-bs-dismiss="modal">Done</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush
<div class="row ps-6 pt-2">

    <div class="dropdown col-xl-1 col-lg-3 col-md-4 col-sm-6 d-md-block d-none px-0">
        <button type="button" id="guestsButton"
            class="btn btn-outline button-radias text-dark btn_background px-0 w-100" data-bs-toggle="modal"
            data-bs-target="#priceRangeModal">
            {{ lang('Price') }}
        </button>
        {{-- <div class="dropdown-menu" style="width: 350px !important;" id="dropdownMenuPrice" role="menu">
            <div class="custom-controls-stacked">
                <div class="p-2">
                    <input type="text" id="price_range" name="price_range" value="" />
                </div>
                <div class="row mt-5 mb-1">
                    <div>
                        <a type="button" onclick="selected()" class="float-end bg-primary py-2 px-5 me-3 text-white"
                            id="doneButton"><b>Done</b></a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    @if ($type !== 'service')
        <div class="dropdown col-xl-1 col-lg-3 col-md-4 col-sm-6 d-md-block d-none pe-0">
            <button type="button" id="attendeesButton" class="btn btn-outline button-radias text-dark btn_background"
                data-bs-toggle="modal" data-bs-target="#attendeesRangeModal">
                {{ lang('Attendees') }}
            </button>
            {{-- <ul class="dropdown-menu price-nav" id="dropdownMenuAttendees" role="menu">
                <div class="custom-controls-stacked">
                    <div class="p-2">
                        <input type="text" id="attendees_range" name="attendees_range" value="" />
                    </div>

                    <div>
                        <a type="button" onclick="selected()" class="float-end bg-primary py-2 px-5 me-3 text-white"
                            id="doneButtonAttendees"><b>Done</b></a>
                    </div>
                </div>
            </ul> --}}
        </div>

        <div class="col-xl-1 col-lg-3 col-md-4 col-sm-6 col-12 ps-0 ps-sm-3 pe-2">
            <input type="text" data-bs-target="#dateTimeModal" data-bs-toggle="modal"
                class="form-control button-radias btn_background" placeholder="{{ lang('When?') }}" id="selectedDate"
                data-listener-added_33a7deb0="true" onchange="search_spaces();" value="{{ @$date_time }}">
        </div>
    @endif

    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 ps-0 pe-0 pe-lg-3">
        <input type="text" name="location" class="form-control button-radias btn_background" id="location"
            placeholder="{{ lang('Enter your location') }}" onchange="search_spaces();" value="{{ @$location }}">
        <ul class="dropdown-menu w-100" id="categoryDropdown-1"></ul>
        <div id="addressDropdown" class="bg-white AdressDrop"
            style='position: absolute;width: 100%;background-color: white !important;z-index: 9999;'></div>
    </div>

    <div class="col-xl-2 col-lg-5 col-md-4 col-sm-6 d-md-block d-none pe-0 px-lg-0">
        <input type="text" name="keyword" class="form-control button-radias btn_background" id="planCatagories"
            placeholder="{{ lang('Enter a Keyword') }}" onkeyup="search_spaces2(event);"
            value="{{ @$planCatagories }}">
        <ul class="dropdown-menu w-100" id="categoryDropdown"></ul>
    </div>

    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ps-0 ps-sm-3 pe-0">
        <a data-bs-target="#modaldemo4" data-bs-toggle="modal"
            class="btn btn_background text-center rounded-0 span_attendees">
            <img src="{{ asset('assets/images/brand/equalizer.png') }}" class="w-5 text-center span_attendees"
                alt="">
            {{ lang('More filters') }} </a>

        <a class="btn btn-primary br-0 search-btn" onclick="search_spaces();">
            <i class="fe fe-search"></i>
            {{ lang('Search') }}</a>
    </div>

    <div class="col-xl-2 col-lg-3 col-md-2 col-sm-12 col-12 p-0 d-lg-block d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="text-end pe-7 p-0 m-0 form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                        style="width: 53px; height: 33px;" checked>1
                    <label class="form-check-label ms-5 my-3"
                        for="flexSwitchCheckChecked">{{ lang('Map') }}</label>
                </div>
            </div>
        </div>
    </div>
</div>



@push('js')
    {{-- Filter Bar Keyword modal --}}
    <div class="modal fade" id="modaldemo4">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body p-4 pb-5" style="overflow: auto; height: 700px;">
                    <div class="modal-header" style="position: sticky; top: -17; background-color: #fff; z-index: 9999;">
                        <h5 class="modal-title">Filters</h5>
                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="container-fluid">
                        {{-- <div class='row'>
                            <div class='col-12'>
                                <h3 class='mt-5'><b>keyword</b></h3>
                                <input type='text' class='form-control' id="planCatagories-12"
                                    placeholder='Enter a keyword'>
                                <ul class="dropdown-menu w-100 position-relative" id="categoryDropdown-12"
                                    style="top: -8px;"></ul>
                            </div>
                        </div> --}}
                        {{-- <div id="drop_tags" class="mt-3 fw-bold"></div> --}}
                        {{-- <div class="row d-block d-md-none">
                            <div class="col-12 my-3">
                                <hr class='bg-dark'>
                                <h3 class="mt-4"><b>Price</b></h3>
                                <button type="button" id="guestsButton"
                                    class="btn btn-outline button-radias w-style dropdown-toggle text-dark btn_background px-0 w-100"
                                    data-bs-toggle="dropdown">
                                    {{ lang('Price') }} <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu price-nav" id="dropdownMenuPrice" role="menu">
                                    <div class="custom-controls-stacked">
                                        <div class="px-5 pt-5 pb-2">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" onclick="selected()" class="custom-control-input"
                                                    name="price" value="5000">
                                                <span
                                                    class="custom-control-label">{{ lang('0 to ') }}{{ 'SAR 5000' }}</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" onclick="selected()" class="custom-control-input"
                                                    name="price" value="10000">
                                                <span class="custom-control-label">{{ 'SAR 5000 to SAR 10000' }}</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" onclick="selected()" class="custom-control-input"
                                                    name="price" value="50000">
                                                <span class="custom-control-label">{{ 'SAR 10000 to SAR 50000' }}</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" onclick="selected()" class="custom-control-input"
                                                    name="price" value="50000">
                                                <span class="custom-control-label">{{ 'SAR 50000+' }}</span>
                                            </label>
                                        </div>
                                        <div class="row mt-5 mb-1">
                                            {{-- <div class="w-50">
                                            <a type="button" onclick="$('input[name="price"]').prop('checked', false).val('')" class="float-start text-dark p-3">Clear</a>
                                        </div> -- }}
                                            <div class="w-50">
                                                <a type="button" onclick="selected()"
                                                    class="float-end bg-primary py-2 px-5 me-3 text-white"
                                                    id="doneButton"><b>Done</b></a>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                            <div class="col-12">
                                <h3 class="mt-4"><b>Attendees</b></h3>
                                <button type="button" id="attendeesButton"
                                    class="btn btn-outline dropdown-toggle w-style button-radias text-dark btn_background"
                                    data-bs-toggle="dropdown">
                                    <span class="attendees- span_attendees">{{ lang('Attendees') }}</span> <span
                                        class="caret"></span>
                                </button>
                                <ul class="dropdown-menu price-nav" id="dropdownMenuAttendees" role="menu">
                                    <div class="custom-controls-stacked">
                                        <div class="px-5 pt-5 pb-2">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" onclick="selected()" class="custom-control-input"
                                                    name="guests" value="10">
                                                <span class="custom-control-label">{{ lang('1 to 10') }}</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" onclick="selected()" class="custom-control-input"
                                                    name="guests" value="25">
                                                <span class="custom-control-label">{{ lang('11 to 25') }}</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" onclick="selected()" class="custom-control-input"
                                                    name="guests" value="50">
                                                <span class="custom-control-label">{{ lang('26 to 50') }}</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" onclick="selected()" class="custom-control-input"
                                                    name="guests" value="100">
                                                <span class="custom-control-label">{{ lang('51 to 100') }}</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" onclick="selected()" class="custom-control-input"
                                                    name="guests" value="500">
                                                <span class="custom-control-label">{{ lang('Over 100') }}</span>
                                            </label>
                                        </div>
                                        <div class="row mt-5 mb-1">
                                            {{-- <div class="w-50">
                                        <a type="button" id="guestsClear" class="float-start text-dark p-3">Clear</a>
                                    </div> -- }}
                                            <div class="w-50">
                                                <a type="button" onclick="selected()"
                                                    class="float-end bg-primary py-2 px-5 me-3 text-white"
                                                    id="doneButton"><b>Done</b></a>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div> --}}
                        {{-- <hr class='bg-dark'> --}}
                        <h3 class='mt-5'><b>Outdoor Spaces</b></h3>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-1" required>
                                    <label class="form-check-label" for="invalidCheck-1">
                                        <p>{{ lang('Backyard') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-2" required>
                                    <label class="form-check-label" for="invalidCheck-2">
                                        <p>{{ lang('Beach') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-3" required>
                                    <label class="form-check-label" for="invalidCheck-3">
                                        <p>{{ lang('Garden') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-4" required>
                                    <label class="form-check-label" for="invalidCheck-4">
                                        <p>{{ lang('Exterior') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-5" required>
                                    <label class="form-check-label" for="invalidCheck-5">
                                        <p>{{ lang('Lawn') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-6" required>
                                    <label class="form-check-label" for="invalidCheck-6">
                                        <p>{{ lang('Patio') }}</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class='bg-dark'>
                        <h3 class='mt-5'><b>Interior Spaces</b></h3>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-7" required>
                                    <label class="form-check-label" for="invalidCheck-7">
                                        <p>{{ lang('Bathroom') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-8" required>
                                    <label class="form-check-label" for="invalidCheck-8">
                                        <p>{{ lang('Bedroom') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-9" required>
                                    <label class="form-check-label" for="invalidCheck-9">
                                        <p>{{ lang('Dining Area') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-01" required>
                                    <label class="form-check-label" for="invalidCheck-01">
                                        <p>{{ lang('Garage') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-02" required>
                                    <label class="form-check-label" for="invalidCheck-02">
                                        <p>{{ lang('Home Office') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-03" required>
                                    <label class="form-check-label" for="invalidCheck-03">
                                        <p>{{ lang('Kids Room') }}</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class='bg-dark'>
                        <h3 class='mt-5'><b>Style</b></h3>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-04" required>
                                    <label class="form-check-label" for="invalidCheck-04">
                                        <p>{{ lang('Bohemian') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-05" required>
                                    <label class="form-check-label" for="invalidCheck-05">
                                        <p>{{ lang('Coastal / Beachy') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-06" required>
                                    <label class="form-check-label" for="invalidCheck-06">
                                        <p>{{ lang('Colorful') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-07" required>
                                    <label class="form-check-label" for="invalidCheck-07">
                                        <p>{{ lang('Farmhouse') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-08" required>
                                    <label class="form-check-label" for="invalidCheck-08">
                                        <p>{{ lang('Industrial') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-09" required>
                                    <label class="form-check-label" for="invalidCheck-09">
                                        <p>{{ lang('Loft') }}</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class='bg-dark'>
                        <h3 class='mt-5'><b>Space Type</b></h3>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-001" required>
                                    <label class="form-check-label" for="invalidCheck-001">
                                        <p>{{ lang('Apartment') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-002" required>
                                    <label class="form-check-label" for="invalidCheck-002">
                                        <p>{{ lang('Banquet Hall') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-003" required>
                                    <label class="form-check-label" for="invalidCheck-003">
                                        <p>{{ lang('Bar') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-004" required>
                                    <label class="form-check-label" for="invalidCheck-004">
                                        <p>{{ lang('Church') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck--005" required>
                                    <label class="form-check-label" for="invalidCheck--005">
                                        <p>{{ lang('Classroom') }}</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input filter_checkbox" name="company_payment"
                                        type="checkbox" value="Company Payment" id="invalidCheck-006" required>
                                    <label class="form-check-label" for="invalidCheck-006">
                                        <p>{{ lang('Conference Room') }}</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class='bg-dark'>
                        <div class='row mt-3'>
                            <div class='col-12'>
                                <div class="form-check">
                                    <input class="form-check-input" name="company_payment-1" type="checkbox"
                                        value="Company Payment" id="invalidCheck-007" required>
                                    <label class="form-check-label" for="invalidCheck-007">
                                        <p class='mb-0'><b>{{ lang('Enhanced health and safety measures') }}</b></p>
                                        <p>{{ lang('Only show listings from hosts who have taken extra health and safety precautions') }}
                                        </p>
                                    </label>
                                </div>
                            </div>
                            <div class='col-12'>
                                <div class="form-check">
                                    <input class="form-check-input" name="company_payment-2" type="checkbox"
                                        value="Company Payment" id="invalidCheck-008" required>
                                    <label class="form-check-label" for="invalidCheck-008">
                                        <p class='mb-0'><b>{{ lang('Instant Book') }}</b></p>
                                        <p>{{ lang('Only see spaces that can be instantly booked') }}</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class='bg-dark'>
                        <h3 class='mt-5'><b>Amenities</b></h3>
                        <div class="row">

                            {{-- @foreach ($collection as $item) --}}
                            <div class="col-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input filter_checkbox" name="amenities[]"
                                            type="checkbox" value="">
                                        <p>{{ lang('Deck') }}</p>
                                    </label>
                                </div>
                            </div>
                            {{-- @endforeach --}}

                        </div>
                    </div>
                    <div class="modal-footer"
                        style="position: sticky; bottom: -25; background-color: #fff; z-index: 9999;">
                        <h5 class="modal-title"><a href="#" id="clearAllButton">Clear all</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush
