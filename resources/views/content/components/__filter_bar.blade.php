<div class="row mx-2 mb-1">
    <div class="col-xl-1 col-md-2 col-sm-6 d-md-block d-none mt-2 px-0">
        <button type="button" id="guestsButton" class="btn btn-outline button-radias w-style dropdown-toggle text-dark btn_background px-0 w-100" data-bs-toggle="dropdown">
            {{ lang('Price') }} <span class="caret"></span>
        </button>
        <ul class="dropdown-menu price-nav" id="dropdownMenuPrice" role="menu">
            <div class="custom-controls-stacked">
                <form action="#" method="get" class="ms-2">
                    <div class="px-5 pt-5 pb-2">
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="price" value="{{@$type == 'service' ? '1000' : '100'}}">
                            <span class="custom-control-label">{{ lang('Up to ') }}{{@$type == 'service' ? 'SAR 1000' : 'SAR 100'}}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="price" value="{{@$type == 'service' ? '2500' : '250'}}">
                            <span class="custom-control-label">{{ @$type == 'service' ? 'SAR 1000 to SAR 2500' : 'SAR 100 to SAR 250' }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="price" value="{{@$type == 'service' ? '4500' : '450'}}">
                            <span class="custom-control-label">{{ @$type == 'service' ? 'SAR 2500 to SAR 4500' : 'SAR 250 to SAR 450'  }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="price" value="{{@$type == 'service' ? '5000' : '1000'}}">
                            <span class="custom-control-label">{{ @$type == 'service' ? 'SAR 4500+' : 'SAR 450+'  }}</span>
                        </label>
                    </div>
                    <div class="row mt-5 mb-1">
                        {{-- <div class="w-50">
                            <a type="button" onclick="$('input[name="price"]').prop('checked', false).val('')" class="float-start text-dark p-3">Clear</a>
                        </div> --}}
                        <div class="w-50">
                            <a type="button" onclick="selected()" class="float-end bg-primary py-2 px-5 me-3 text-white" id="doneButton"><b>Done</b></a>
                        </div>
                    </div>
                </form>
            </div>
        </ul>
    </div>
    @if($type !== 'service')
    <div class="col-xl-1 col-lg-2 col-md-2 col-sm-6 d-md-block d-none mt-2 pe-0">
        <button type="button" id="attendeesButton" class="btn btn-outline dropdown-toggle w-style button-radias text-dark btn_background" data-bs-toggle="dropdown">
            <span class="attendees- span_attendees">{{ lang('Attendees') }}</span> <span class="caret"></span>
        </button>
        <ul class="dropdown-menu price-nav" id="dropdownMenuAttendees" role="menu">
            <div class="custom-controls-stacked">
                <form action="#" method="get" class="ms-2">
                    <div class="px-5 pt-5 pb-2">
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests" value="10">
                            <span class="custom-control-label">{{ lang('1 to 10') }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests" value="25">
                            <span class="custom-control-label">{{ lang('11 to 25') }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests" value="50">
                            <span class="custom-control-label">{{ lang('26 to 50') }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests" value="100">
                            <span class="custom-control-label">{{ lang('51 to 100') }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests" value="500">
                            <span class="custom-control-label">{{ lang('Over 100') }}</span>
                        </label>
                    </div>
                    <div class="row mt-5 mb-1">
                        {{-- <div class="w-50">
                            <a type="button" id="guestsClear" class="float-start text-dark p-3">Clear</a>
                        </div> --}}
                        <div class="w-50">
                            <a type="button" onclick="selected()" class="float-end bg-primary py-2 px-5 me-3 text-white" id="doneButton"><b>Done</b></a>
                        </div>
                    </div>
                </form>
            </div>
        </ul>
    </div>

    <div class="col-xl-1 col-md-2 col-sm-6 col-6 pe-0">
        <form action="#" class="mt-2">
            <input type="text" data-bs-target="#dateTimeModal" data-bs-toggle="modal" class="form-control w-style button-radias btn_background" placeholder="{{lang('When?')}}" id="selectedDate" data-listener-added_33a7deb0="true">
        </form>
    </div>
    @endif

    <div class="col-xl-1 col-lg-2 col-md-2 col-sm-6 col-6 pe-0">
        <form action="#" class="mt-2">
            <a id="typeCategories" data-bs-target="#modaldemo4" data-bs-toggle="modal" class="form-control btn_background w-style text-center span_attendees">
                <img src="{{ asset('assets/images/brand/equalizer.png') }}" class="w-5 text-center span_attendees" alt="">
                {{lang('More filters') }} </a>
        </form>
    </div>

    <div class="col-lg-2 col-md-4 col-sm-6 d-md-block d-none">
        <form class="mt-2">
            <input type="text" name="keyword" class="form-control w-style button-radias btn_background" id="planCatagories" placeholder="{{lang('Enter a Keyword')}}">
            <ul class="dropdown-menu w-100" id="categoryDropdown"></ul>
        </form>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 ps-0">
        <form class="mt-2 position-relative">
            <input type="text" name="location" class="form-control w-style button-radias btn_background" id="location" placeholder="{{lang('Enter your location')}}">
            <ul class="dropdown-menu w-100" id="categoryDropdown-1"></ul>
            <div id="addressDropdown" class="bg-white AdressDrop" style='position: absolute;width: 100%;background-color: white !important;z-index: 9999;'></div>
        </form>
    </div>

    <div class="col-xl-4 col-lg-2 col-md-2 col-sm-12 col-12 p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="text-end pe-7 pt-1 mt-1 form-check form-switch d-lg-block d-none">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" style="width: 53px; height: 33px;" checked>1
                    <label class="form-check-label ms-5 my-3" for="flexSwitchCheckChecked">{{ lang('Map')}}</label>
                </div>
            </div>
        </div>
    </div>
</div>

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
                <h3 class='mt-5'><b>keyword</b></h3>
                <input type='text' class='form-control' placeholder='Enter a keyword'>
                <hr class='bg-dark'>
                <div class="container-fluid">
                    <h3 class='mt-5'><b>Outdoor Spaces</b></h3>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-1" required>
                                <label class="form-check-label" for="invalidCheck-1">
                                    <p>{{lang('Backyard')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-2" required>
                                <label class="form-check-label" for="invalidCheck-2">
                                    <p>{{lang('Beach')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-3" required>
                                <label class="form-check-label" for="invalidCheck-3">
                                    <p>{{lang('Garden')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-4" required>
                                <label class="form-check-label" for="invalidCheck-4">
                                    <p>{{lang('Exterior')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-5" required>
                                <label class="form-check-label" for="invalidCheck-5">
                                    <p>{{lang('Lawn')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-6" required>
                                <label class="form-check-label" for="invalidCheck-6">
                                    <p>{{lang('Patio')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class='col-12 mt-2'>
                            <p><a href='#'>{{lang('Show All')}}</a></p>
                        </div>
                    </div>
                    <hr class='bg-dark'>
                    <h3 class='mt-5'><b>Interior Spaces</b></h3>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-7" required>
                                <label class="form-check-label" for="invalidCheck-7">
                                    <p>{{lang('Bathroom')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-8" required>
                                <label class="form-check-label" for="invalidCheck-8">
                                    <p>{{lang('Bedroom')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-9" required>
                                <label class="form-check-label" for="invalidCheck-9">
                                    <p>{{lang('Dining Area')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-01" required>
                                <label class="form-check-label" for="invalidCheck-01">
                                    <p>{{lang('Garage')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-02" required>
                                <label class="form-check-label" for="invalidCheck-02">
                                    <p>{{lang('Home Office')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-03" required>
                                <label class="form-check-label" for="invalidCheck-03">
                                    <p>{{lang('Kids Room')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class='col-12 mt-2'>
                            <p><a href='#'>{{lang('Show All')}}</a></p>
                        </div>
                    </div>
                    <hr class='bg-dark'>
                    <h3 class='mt-5'><b>Style</b></h3>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-04" required>
                                <label class="form-check-label" for="invalidCheck-04">
                                    <p>{{lang('Bohemian')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-05" required>
                                <label class="form-check-label" for="invalidCheck-05">
                                    <p>{{lang('Coastal / Beachy')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-06" required>
                                <label class="form-check-label" for="invalidCheck-06">
                                    <p>{{lang('Colorful')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-07" required>
                                <label class="form-check-label" for="invalidCheck-07">
                                    <p>{{lang('Farmhouse')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-08" required>
                                <label class="form-check-label" for="invalidCheck-08">
                                    <p>{{lang('Industrial')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-09" required>
                                <label class="form-check-label" for="invalidCheck-09">
                                    <p>{{lang('Loft')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class='col-12 mt-2'>
                            <p><a href='#'>{{lang('Show All')}}</a></p>
                        </div>
                    </div>
                    <hr class='bg-dark'>
                    <h3 class='mt-5'><b>Space Type</b></h3>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-001" required>
                                <label class="form-check-label" for="invalidCheck-001">
                                    <p>{{lang('Apartment')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-002" required>
                                <label class="form-check-label" for="invalidCheck-002">
                                    <p>{{lang('Banquet Hall')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-003" required>
                                <label class="form-check-label" for="invalidCheck-003">
                                    <p>{{lang('Bar')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-004" required>
                                <label class="form-check-label" for="invalidCheck-004">
                                    <p>{{lang('Church')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck--005" required>
                                <label class="form-check-label" for="invalidCheck--005">
                                    <p>{{lang('Classroom')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-006" required>
                                <label class="form-check-label" for="invalidCheck-006">
                                    <p>{{lang('Conference Room')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class='col-12 mt-2'>
                            <p><a href='#'>{{lang('Show All')}}</a></p>
                        </div>
                    </div>
                    <hr class='bg-dark'>
                    <div class='row mt-3'>
                        <div class='col-12'>
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment"
                                    type="checkbox" value="Company Payment" id="invalidCheck-007"
                                    required>
                                <label class="form-check-label" for="invalidCheck-007">
                                    <p class='mb-1'><b>{{lang('Enhanced health and safety measures')}}</b></p>
                                    <p>{{lang('Only show listings from hosts who have taken extra health and safety precautions')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class='col-12'>
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment"
                                    type="checkbox" value="Company Payment" id="invalidCheck-008"
                                    required>
                                <label class="form-check-label" for="invalidCheck-008">
                                    <p class='mb-1'><b>{{lang('Instant Book')}}</b></p>
                                    <p>{{lang('Only see spaces that can be instantly booked')}}</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr class='bg-dark'>
                    <h3 class='mt-5'><b>Amenities</b></h3>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-001" required>
                                <label class="form-check-label" for="invalidCheck-001">
                                    <p>{{lang('Deck')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-002" required>
                                <label class="form-check-label" for="invalidCheck-002">
                                    <p>{{lang('Elevator')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-003" required>
                                <label class="form-check-label" for="invalidCheck-003">
                                    <p>{{lang('Exposed Brick')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-004" required>
                                <label class="form-check-label" for="invalidCheck-004">
                                    <p>{{lang('Fire Pit')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck--005" required>
                                <label class="form-check-label" for="invalidCheck--005">
                                    <p>{{lang('Fireplace')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="company_payment" type="checkbox" value="Company Payment" id="invalidCheck-006" required>
                                <label class="form-check-label" for="invalidCheck-006">
                                    <p>{{lang('Gazebo')}}</p>
                                </label>
                            </div>
                        </div>
                        <div class='col-12 mt-2'>
                            <p><a href='#'>{{lang('Show All')}}</a></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="position: sticky; bottom: -25; background-color: #fff; z-index: 9999;">
                    <h5 class="modal-title">Clear all</h5>
                </div>
            </div>
        </div>
    </div>
</div>
