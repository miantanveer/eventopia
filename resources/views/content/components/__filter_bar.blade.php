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
                            <input type="radio" onclick="selected()" class="custom-control-input" name="price" value="100">
                            <span class="custom-control-label">{{ lang('Up to $100') }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="price" value="250">
                            <span class="custom-control-label">{{ lang('$100 to $250') }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="price" value="450">
                            <span class="custom-control-label">{{ lang('$250 to $450') }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="price" value="1000">
                            <span class="custom-control-label">{{ lang('$450+') }}</span>
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
            <button id="typeCategories" class="form-control btn_background w-style span_attendees"> <img src="{{ asset('assets/images/brand/equalizer.png') }}" class="w-5 span_attendees" alt=""> {{
                lang('More filters') }}</button>
        </form>
    </div>

    <div class="col-lg-2 col-md-4 col-sm-6 d-md-block d-none">
        <form class="mt-2">
            <input type="text" name="keyword" class="form-control w-style button-radias btn_background" id="planCatagories" placeholder="{{lang('Enter a Keyword')}}">
            <ul class="dropdown-menu w-100" id="categoryDropdown"></ul>
        </form>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 ps-0">
        <form class="mt-2">
            <input type="text" name="location" class="form-control w-style button-radias btn_background" id="location" placeholder="{{lang('Enter your location')}}">
            <ul class="dropdown-menu w-100" id="categoryDropdown-1"></ul>
        </form>
    </div>

    <div class="col-xl-4 col-lg-2 col-md-2 col-sm-12 col-12 p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="text-end pe-7 pt-1 mt-1 form-check form-switch d-lg-block d-none">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" style="width: 53px; height: 33px;" checked>
                    <label class="form-check-label ms-5 my-3" for="flexSwitchCheckChecked">{{ lang('Map')}}</label>
                </div>
            </div>
        </div>
    </div>
</div>
