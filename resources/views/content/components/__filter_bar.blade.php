<div class="row mx-2 mb-1">
    <div class="col-xl-1 col-md-2 col-sm-6 d-md-block d-none mt-2 px-0">
        <button type="button" id="guestsButton"
            class="btn btn-outline button-radias w-style dropdown-toggle text-dark btn_background px-0 w-100"
            data-bs-toggle="dropdown">
            {{ lang('Price') }} <span class="caret"></span>
        </button>
        <ul class="dropdown-menu price-nav" id="dropdownMenuPrice" role="menu">
            <div class="custom-controls-stacked">
                <form action="#" method="get" class="ms-2">
                    <div class="px-5 pt-5 pb-2">
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="price"
                                value="100">
                            <span class="custom-control-label">{{ lang('Up to $100') }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="price"
                                value="250">
                            <span class="custom-control-label">{{ lang('$100 to $250') }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="price"
                                value="450">
                            <span class="custom-control-label">{{ lang('$250 to $450') }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="price"
                                value="1000">
                            <span class="custom-control-label">{{ lang('$450+') }}</span>
                        </label>
                    </div>
                    {{-- <div class="row mt-2">
                        <div class="w-45 pe-0">
                            <div class="btn-group w-90">
                                <button type="button"
                                    class="btn btn-outline-default rounded-0 disabled"><b>$</b></button>
                                <input type="text" class="btn btn-outline-default rounded-0" name="priceStart" required
                                    data-parsley-errors-container="#sq_error" value="" id="guestsFrom">
                            </div>
                        </div>
                        <div class="w-10 mt-2 p-0">
                            <b>to</b>
                        </div>
                        <div class="w-45 ps-0">
                            <div class="btn-group w-90">
                                <button type="button"
                                    class="btn btn-outline-default rounded-0 disabled"><b>$</b></button>
                                <input type="text" class="btn btn-outline-default rounded-0" name="priceEnd" required
                                    data-parsley-errors-container="#sq_error" value="" id="guestsTo">
                            </div>
                        </div>
                    </div> --}}
                    <div class="row mt-5 mb-1">
                        <div class="w-50">
                            <a href="#" class="float-start text-dark p-3" id="clearButton1">Clear</a>
                        </div>
                        <div class="w-50">
                            <a onclick="selected()" class="float-end bg-primary py-2 px-5 me-3 text-white"
                                id="doneButton"><b>Done</b></a>
                        </div>
                    </div>
                </form>
            </div>
        </ul>
    </div>
    @if($type !== 'service')
    <div class="col-xl-1 col-lg-2 col-md-2 col-sm-6 d-md-block d-none mt-2 pe-0">
        <button type="button" id="attendeesButton"
            class="btn btn-outline dropdown-toggle w-style button-radias text-dark btn_background"
            data-bs-toggle="dropdown">
            <span class="attendees- span_attendees">{{ lang('Attendees') }}</span> <span class="caret"></span>
        </button>
        <ul class="dropdown-menu price-nav" id="dropdownMenuAttendees" role="menu">
            <div class="custom-controls-stacked">
                <form action="#" method="get" class="ms-2">
                    <div class="px-5 pt-5 pb-2">
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests"
                                value="10">
                            <span class="custom-control-label">{{ lang('1 to 10') }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests"
                                value="25">
                            <span class="custom-control-label">{{ lang('11 to 25') }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests"
                                value="50">
                            <span class="custom-control-label">{{ lang('26 to 50') }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests"
                                value="100">
                            <span class="custom-control-label">{{ lang('51 to 100') }}</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" onclick="selected()" class="custom-control-input" name="guests"
                                value="500">
                            <span class="custom-control-label">{{ lang('Over 100') }}</span>
                        </label>
                    </div>
                    {{-- <div class="row mt-2">
                        <div class="w-100 ms-5 pe-0">
                            <div class="w-100">
                                <input type="number" name="guestsEnd" class="btn btn-outline-default rounded-0"
                                    id="guests">
                            </div>
                        </div>
                    </div> --}}
                    <div class="row mt-5 mb-1">
                        <div class="w-50">
                            <a id="clearButton2" class="float-start text-dark p-3">Clear</a>
                        </div>
                        <div class="w-50">
                            <a onclick="selected()" class="float-end bg-primary py-2 px-5 me-3 text-white"
                                id="doneButton"><b>Done</b></a>
                        </div>
                    </div>
                </form>
            </div>
        </ul>
    </div>

    <div class="col-xl-1 col-md-2 col-sm-6 col-6 pe-0">
        <form action="#" class="mt-2">
            <input id="dateInput" onchange="selected()" type="text"
                class="form-control w-style button-radias btn_background" placeholder="When?"
                onclick="(this.type='date')">
        </form>
    </div>
    @endif

    <div class="col-xl-1 col-lg-2 col-md-2 col-sm-6 col-6 pe-0">
        <form action="#" class="mt-2">
            <button id="typeCategories" class="form-control btn_background w-style span_attendees"> <img
                    src="{{ asset('assets/images/brand/equalizer.png') }}" class="w-5 span_attendees" alt=""> {{
                lang('More filters') }}</button>
        </form>
    </div>

    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 d-md-block d-none">
        <form action="#" class="mt-2">
            <input type="text" class="form-control w-style button-radias btn_background" id="typeCategories"
                placeholder="{{ lang('Enter a Keyword') }}">
        </form>
    </div>
    <div class="col-xl-4 d-xl-block d-none">

    </div>
    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="text-end pe-7 pt-1 mt-1 form-check form-switch d-lg-block d-none">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                        style="width: 53px; height: 33px;" checked>
                    <label class="form-check-label ms-5 my-3" for="flexSwitchCheckChecked">{{ lang('Map')}}</label>
                </div>
            </div>
        </div>
    </div>
</div>