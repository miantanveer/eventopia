<div class="mt-3">
    <ul class="list-group">
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    {{lang('Monday')}}
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="custom-switch form-switch me-5">
                            <input type="checkbox" name="monday" id="custom-switch-checkbox1" value="monday"
                                class="custom-switch-input"  {{@$time->monday == 'monday' ? 'checked' : ''}}>
                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                            <span class="custom-switch-description-1">{{lang('Close')}}</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 row-content-1 hide-on-switch" style="display: none">
                    <div class="form-group">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="monday_radio" value="0"
                                    id="time-radio-1"   {{@$time->monday_radio == 0 ? 'checked' : ''}}>
                                <span class="custom-control-label">{{lang('6:00 AM - 12:00
                                    AM')}}</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="monday_radio" value="1"
                                    id="set-hour-radio-1"   {{@$time->monday_radio == 1 ? 'checked' : ''}}>
                                <span class="custom-control-label">{{lang('Set hours')}}</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6 mt-2 select-content-1">
                    <div class="row" id="custom-time-selection-1">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="monday_start_time"
                                    class="form-control form-select select2 select2-hidden-accessible"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('Start Time')}}</option>
                                    <option value="9 AM" {{@$time->monday_start_time == '9 AM' ? 'checked' : ''}}>{{lang('9 AM')}}</option>
                                    <option value="10 AM" {{@$time->monday_start_time == '10 AM' ? 'checked' : ''}}>{{lang('10 AM')}}</option>
                                    <option value="11 AM" {{@$time->monday_start_time == '11 AM' ? 'checked' : ''}}>{{lang('11 AM')}}</option>
                                    <option value="12 AM" {{@$time->monday_start_time == '12 AM' ? 'checked' : ''}}>{{lang('12 AM')}}</option>
                                    <option value="1 PM" {{@$time->monday_start_time == '1 PM' ? 'checked' : ''}}>{{lang('1 PM')}}</option>
                                    <option value="2 PM" {{@$time->monday_start_time == '2 PM' ? 'checked' : ''}}>{{lang('2 PM')}}</option>
                                    <option value="3 PM" {{@$time->monday_start_time == '3 PM' ? 'checked' : ''}}>{{lang('3 PM')}}</option>
                                    <option value="4 PM" {{@$time->monday_start_time == '4 PM' ? 'checked' : ''}}>{{lang('4 PM')}}</option>
                                    <option value="5 PM" {{@$time->monday_start_time == '5 PM' ? 'checked' : ''}}>{{lang('5 PM')}}</option>
                                    <option value="6 PM" {{@$time->monday_start_time == '6 PM' ? 'checked' : ''}}>{{lang('6 PM')}}</option>
                                    <option value="7 PM" {{@$time->monday_start_time == '7 PM' ? 'checked' : ''}}>{{lang('7 PM')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="monday_end_time"
                                    class="form-control form-select select2 select2-hidden-accessible"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('End Time')}}</option>
                                    <option value="9 AM" {{@$time->monday_end_time == '9 AM' ? 'checked' : ''}}>{{lang('9 AM')}}</option>
                                    <option value="10 AM" {{@$time->monday_end_time == '10 AM' ? 'checked' : ''}}>{{lang('10 AM')}}</option>
                                    <option value="11 AM" {{@$time->monday_end_time == '11 AM' ? 'checked' : ''}}>{{lang('11 AM')}}</option>
                                    <option value="12 AM" {{@$time->monday_end_time == '12 AM' ? 'checked' : ''}}>{{lang('12 AM')}}</option>
                                    <option value="1 PM" {{@$time->monday_end_time == '1 PM' ? 'checked' : ''}}>{{lang('1 PM')}}</option>
                                    <option value="2 PM" {{@$time->monday_end_time == '2 PM' ? 'checked' : ''}}>{{lang('2 PM')}}</option>
                                    <option value="3 PM" {{@$time->monday_end_time == '3 PM' ? 'checked' : ''}}>{{lang('3 PM')}}</option>
                                    <option value="4 PM" {{@$time->monday_end_time == '4 PM' ? 'checked' : ''}}>{{lang('4 P')}}M</option>
                                    <option value="5 PM" {{@$time->monday_end_time == '5 PM' ? 'checked' : ''}}>{{lang('5 PM')}}</option>
                                    <option value="6 PM" {{@$time->monday_end_time == '6 PM' ? 'checked' : ''}}>{{lang('6 PM')}}</option>
                                    <option value="7 PM" {{@$time->monday_end_time == '7 PM' ? 'checked' : ''}}>{{lang('7 PM')}}</option>
                                </select>
                            </div>
                        </div>
                        <div id="showContent-1"></div>
                    </div>
                    <div class="ps-0" id="Add-Hours-1">
                        <a class="btn btn-white addMore-1 text-dark">{{lang('Add hours')}}</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    {{lang('Tuesday')}}
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="custom-switch form-switch me-5">
                            <input type="checkbox" name="tuesday" id="custom-switch-checkbox2" value="tuesday"
                                class="custom-switch-input" {{@$time->tuesday == 'tuesday' ? 'checked' : ''}}>
                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                            <span class="custom-switch-description-2">{{lang('Close')}}</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 row-content-2 hide-on-switch" style="display: none">
                    <div class="form-group">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="tuesday_radio" value="0"
                                    id="time-radio-2"  {{@$time->tuesday_radio == 0 ? 'checked' : ''}}>
                                <span class="custom-control-label">{{lang('6:00 AM - 12:00')}}
                                    AM</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="tuesday_radio"
                                    id="set-hour-radio-2" value="1"  {{@$time->tuesday_radio == 1 ? 'checked' : ''}}>
                                <span class="custom-control-label">{{lang('Set hours')}}</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 mt-2 select-content-2">
                    <div class="row" id="custom-time-selection-2">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="tuesday_start_time"
                                    class="form-control form-select select2 select2-hidden-accessible"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('Start Time')}}</option>
                                    <option value="9 AM" {{@$time->tuesday_start_time == '9 AM' ? 'checked' : ''}}>{{lang('9 AM')}}</option>
                                    <option value="10 AM" {{@$time->tuesday_start_time == '10 AM' ? 'checked' : ''}}>{{lang('10 AM')}}</option>
                                    <option value="11 AM" {{@$time->tuesday_start_time == '11 AM' ? 'checked' : ''}}>{{lang('11 AM')}}</option>
                                    <option value="12 AM" {{@$time->tuesday_start_time == '12 AM' ? 'checked' : ''}}>{{lang('12 AM')}}</option>
                                    <option value="1 PM" {{@$time->tuesday_start_time == '1 PM' ? 'checked' : ''}}>{{lang('1 PM')}}</option>
                                    <option value="2 PM" {{@$time->tuesday_start_time == '2 PM' ? 'checked' : ''}}>{{lang('2 PM')}}</option>
                                    <option value="3 PM" {{@$time->tuesday_start_time == '3 PM' ? 'checked' : ''}}>{{lang('3 PM')}}</option>
                                    <option value="4 PM" {{@$time->tuesday_start_time == '4 PM' ? 'checked' : ''}}>{{lang('4 PM')}}</option>
                                    <option value="5 PM" {{@$time->tuesday_start_time == '5 PM' ? 'checked' : ''}}>{{lang('5 PM')}}</option>
                                    <option value="6 PM" {{@$time->tuesday_start_time == '6 PM' ? 'checked' : ''}}>{{lang('6 PM')}}</option>
                                    <option value="7 PM" {{@$time->tuesday_start_time == '7 PM' ? 'checked' : ''}}>{{lang('7 PM')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="tuesday_end_time"
                                    class="form-control form-select select2 select2-hidden-accessible"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('End Time')}}</option>
                                    <option value="9 AM" {{@$time->tuesday_end_time == '9 AM' ? 'checked' : ''}}>{{lang('9 AM')}}</option>
                                    <option value="10 AM" {{@$time->tuesday_end_time == '10 AM' ? 'checked' : ''}}>{{lang('10 AM')}}</option>
                                    <option value="11 AM" {{@$time->tuesday_end_time == '11 AM' ? 'checked' : ''}}>{{lang('11 AM')}}</option>
                                    <option value="12 AM" {{@$time->tuesday_end_time == '12 AM' ? 'checked' : ''}}>{{lang('12 AM')}}</option>
                                    <option value="1 PM" {{@$time->tuesday_end_time == '1 PM' ? 'checked' : ''}}>{{lang('1 PM')}}</option>
                                    <option value="2 PM" {{@$time->tuesday_end_time == '2 PM' ? 'checked' : ''}}>{{lang('2 PM')}}</option>
                                    <option value="3 PM" {{@$time->tuesday_end_time == '3 PM' ? 'checked' : ''}}>{{lang('3 PM')}}</option>
                                    <option value="4 PM" {{@$time->tuesday_end_time == '4 PM' ? 'checked' : ''}}>{{lang('4 PM')}}</option>
                                    <option value="5 PM" {{@$time->tuesday_end_time == '5 PM' ? 'checked' : ''}}>{{lang('5 PM')}}</option>
                                    <option value="6 PM" {{@$time->tuesday_end_time == '6 PM' ? 'checked' : ''}}>{{lang('6 PM')}}</option>
                                    <option value="7 PM" {{@$time->tuesday_end_time == '7 PM' ? 'checked' : ''}}>{{lang('7 PM')}}</option>
                                </select>
                            </div>
                        </div>
                        <div id="showContent-2"></div>
                    </div>
                    <div class="ps-0" id="Add-Hours-2">
                        <a class="btn btn-white addMore-2 text-dark">{{lang('Add hours')}}</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    {{lang('Wednesday')}}
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="custom-switch form-switch me-5">
                            <input type="checkbox" name="wednesday" {{@$time->wednesday == 'wednesday' ? 'checked' : ''}} id="custom-switch-checkbox3" value="wednesday"
                                class="custom-switch-input" >
                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                            <span class="custom-switch-description-3">{{lang('Close')}}</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 row-content-3 hide-on-switch" style="display: none">
                    <div class="form-group">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="wednesday_radio"
                                    value="0" id="time-radio-3" {{@$time->wednesday == 0 ? 'checked' : ''}}>
                                <span class="custom-control-label">{{lang('6:00 AM - 12:00
                                    AM')}}</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="wednesday_radio"
                                    id="set-hour-radio-3" value="1" {{@$time->wednesday == 1 ? 'checked' : ''}}>
                                <span class="custom-control-label">{{lang('Set hours')}}</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 mt-2 select-content-3">
                    <div class="row" id="custom-time-selection-3">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="wednesday_start_time"
                                    class="form-control form-select select2 select2-hidden-accessible"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('Start Time')}}</option>
                                    <option value="9 AM" {{@$time->wednesday_start_time == '9 AM' ? 'checked' : ''}}>{{lang('9 AM')}}</option>
                                    <option value="10 AM" {{@$time->wednesday_start_time == '10 AM' ? 'checked' : ''}}>{{lang('10 AM')}}</option>
                                    <option value="11 AM" {{@$time->wednesday_start_time == '11 AM' ? 'checked' : ''}}>{{lang('11 AM')}}</option>
                                    <option value="12 AM" {{@$time->wednesday_start_time == '12 AM' ? 'checked' : ''}}>{{lang('12 AM')}}</option>
                                    <option value="1 PM" {{@$time->wednesday_start_time == '1 PM' ? 'checked' : ''}}>{{lang('1 PM')}}</option>
                                    <option value="2 PM" {{@$time->wednesday_start_time == '2 PM' ? 'checked' : ''}}>{{lang('2 PM')}}</option>
                                    <option value="3 PM" {{@$time->wednesday_start_time == '3 PM' ? 'checked' : ''}}>{{lang('3 PM')}}</option>
                                    <option value="4 PM" {{@$time->wednesday_start_time == '4 PM' ? 'checked' : ''}}>{{lang('4 PM')}}</option>
                                    <option value="5 PM" {{@$time->wednesday_start_time == '5 PM' ? 'checked' : ''}}>{{lang('5 PM')}}</option>
                                    <option value="6 PM" {{@$time->wednesday_start_time == '6 PM' ? 'checked' : ''}}>{{lang('6 PM')}}</option>
                                    <option value="7 PM" {{@$time->wednesday_start_time == '7 PM' ? 'checked' : ''}}>{{lang('7 PM')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="wednesday_end_time"
                                    class="form-control form-select select2 select2-hidden-accessible"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('End Time')}}</option>
                                    <option value="9 AM" {{@$time->wednesday_end_time == '9 AM' ? 'checked' : ''}}>{{lang('9 AM')}}</option>
                                    <option value="10 AM" {{@$time->wednesday_end_time == '10 AM' ? 'checked' : ''}}>{{lang('10 AM')}}</option>
                                    <option value="11 AM" {{@$time->wednesday_end_time == '11 AM' ? 'checked' : ''}}>{{lang('11 A')}}M</option>
                                    <option value="12 AM" {{@$time->wednesday_end_time == '12 AM' ? 'checked' : ''}}>{{lang('12 AM')}}</option>
                                    <option value="1 PM" {{@$time->wednesday_end_time == '1 PM' ? 'checked' : ''}}>{{lang('1 PM')}}</option>
                                    <option value="2 PM" {{@$time->wednesday_end_time == '2 PM' ? 'checked' : ''}}>{{lang('2 PM')}}</option>
                                    <option value="3 PM" {{@$time->wednesday_end_time == '3 PM' ? 'checked' : ''}}>{{lang('3 PM')}}</option>
                                    <option value="4 PM" {{@$time->wednesday_end_time == '4 PM' ? 'checked' : ''}}>{{lang('4 PM')}}</option>
                                    <option value="5 PM" {{@$time->wednesday_end_time == '5 PM' ? 'checked' : ''}}>{{lang('5 PM')}}</option>
                                    <option value="6 PM" {{@$time->wednesday_end_time == '6 PM' ? 'checked' : ''}}>{{lang('6 PM')}}</option>
                                    <option value="7 PM" {{@$time->wednesday_end_time == '7 PM' ? 'checked' : ''}}>{{lang('7 PM')}}</option>
                                </select>
                            </div>
                        </div>
                        <div id="showContent-3"></div>
                    </div>
                    <div class="ps-0" id="Add-Hours-3">
                        <a class="btn btn-white addMore-3 text-dark">{{lang('Add hours')}}</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    {{lang('Thursday')}}
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="custom-switch form-switch me-5">
                            <input type="checkbox" name="thursday" id="custom-switch-checkbox4"
                                class="custom-switch-input" value="thursday" {{@$time->thursday == 'thursday' ? 'checked' : ''}}>
                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                            <span class="custom-switch-description-4">{{lang('Close')}}</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 row-content-4 hide-on-switch" style="display: none">
                    <div class="form-group">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="thursday_radio"
                                    value="0" id="time-radio-4"  {{@$time->thursday_radio == 0 ? 'checked' : ''}}>
                                <span class="custom-control-label">{{lang('6:00 AM - 12:00
                                    AM')}}</span>
                            </label>
                            <label class="custom-control custom-radio" id="btn1">
                                <input type="radio" class="custom-control-input" name="thursday_radio"
                                    id="set-hour-radio-4" value="1"  {{@$time->thursday_radio == 1 ? 'checked' : ''}}>
                                <span class="custom-control-label">{{lang('Set hours')}}</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 mt-2 select-content-4">
                    <div class="row" id="custom-time-selection-4">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="thursday_start_time"
                                    class="form-control form-select select2 select2-hidden-accessible"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('Start Time')}}</option>
                                    <option value="9 AM" {{@$time->thursday_start_time == '9 AM' ? 'checked' : ''}}>{{lang('9 AM')}}</option>
                                    <option value="10 AM" {{@$time->thursday_start_time == '10 AM' ? 'checked' : ''}}>{{lang('10 AM')}}</option>
                                    <option value="11 AM" {{@$time->thursday_start_time == '11 AM' ? 'checked' : ''}}>{{lang('11 AM')}}</option>
                                    <option value="12 AM" {{@$time->thursday_start_time == '12 AM' ? 'checked' : ''}}>{{lang('12 AM')}}</option>
                                    <option value="1 PM" {{@$time->thursday_start_time == '1 PM' ? 'checked' : ''}}>{{lang('1 PM')}}</option>
                                    <option value="2 PM" {{@$time->thursday_start_time == '2 PM' ? 'checked' : ''}}>{{lang('2 PM')}}</option>
                                    <option value="3 PM" {{@$time->thursday_start_time == '3 PM' ? 'checked' : ''}}>{{lang('3 PM')}}</option>
                                    <option value="4 PM" {{@$time->thursday_start_time == '4 PM' ? 'checked' : ''}}>{{lang('4 PM')}}</option>
                                    <option value="5 PM" {{@$time->thursday_start_time == '5 PM' ? 'checked' : ''}}>{{lang('5 PM')}}</option>
                                    <option value="6 PM" {{@$time->thursday_start_time == '6 PM' ? 'checked' : ''}}>{{lang('6 PM')}}</option>
                                    <option value="7 PM" {{@$time->thursday_start_time == '7 PM' ? 'checked' : ''}}>{{lang('7 PM')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="thursday_end_time"
                                    class="form-control form-select select2 select2-hidden-accessible"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('End Time')}}</option>
                                    <option value="9 AM" {{@$time->thursday_end_time == '9 AM' ? 'checked' : ''}}>{{lang('9 AM')}}</option>
                                    <option value="10 AM" {{@$time->thursday_end_time == '10 AM' ? 'checked' : ''}}>{{lang('10 AM')}}</option>
                                    <option value="11 AM" {{@$time->thursday_end_time == '11 AM' ? 'checked' : ''}}>{{lang('11 AM')}}</option>
                                    <option value="12 AM" {{@$time->thursday_end_time == '12 AM' ? 'checked' : ''}}>{{lang('12 AM')}}</option>
                                    <option value="1 PM" {{@$time->thursday_end_time == '1 PM' ? 'checked' : ''}}>{{lang('1 PM')}}</option>
                                    <option value="2 PM" {{@$time->thursday_end_time == '2 PM' ? 'checked' : ''}}>{{lang('2 P')}}M</option>
                                    <option value="3 PM" {{@$time->thursday_end_time == '3 PM' ? 'checked' : ''}}>{{lang('3 PM')}}</option>
                                    <option value="4 PM" {{@$time->thursday_end_time == '4 PM' ? 'checked' : ''}}>{{lang('4 PM')}}</option>
                                    <option value="5 PM" {{@$time->thursday_end_time == '5 PM' ? 'checked' : ''}}>{{lang('5 PM')}}</option>
                                    <option value="6 PM" {{@$time->thursday_end_time == '6 PM' ? 'checked' : ''}}>{{lang('6 PM')}}</option>
                                    <option value="7 PM" {{@$time->thursday_end_time == '7 PM' ? 'checked' : ''}}>{{lang('7 PM')}}</option>
                                </select>
                            </div>
                        </div>
                        <div id="showContent-4"></div>
                    </div>
                    <div class="ps-0" id="Add-Hours-4">
                        <a class="btn btn-white addMore-4 text-dark">{{lang('Add hours')}}</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    {{lang('Friday')}}
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="custom-switch form-switch me-5">
                            <input type="checkbox" name="friday" id="custom-switch-checkbox5"
                                class="custom-switch-input" value="friday" {{@$time->friday == 'friday' ? 'checked' : ''}}>
                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                            <span class="custom-switch-description-5">{{lang('Close')}}</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 row-content-5 hide-on-switch" style="display: none">
                    <div class="form-group">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="friday_radio"
                                    value="0" id="time-radio-5"  {{@$time->friday_radio == 0 ? 'checked' : ''}}>
                                <span class="custom-control-label">{{lang('6:00 AM - 12:00
                                    AM')}}</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="friday_radio"
                                    id="set-hour-radio-5" value="1"  {{@$time->friday_radio == 1 ? 'checked' : ''}}>
                                <span class="custom-control-label">{{lang('Set hours')}}</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 mt-2 select-content-5">
                    <div class="row" id="custom-time-selection-5">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="friday_start_time"
                                    class="form-control form-select select2 select2-hidden-accessible"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>Start Time</option>
                                    <option value="9 AM" {{@$time->friday_start_time == '9 AM' ? 'checked' : ''}}>{{lang('9 AM')}}</option>
                                    <option value="10 AM" {{@$time->friday_start_time == '10 AM' ? 'checked' : ''}}>{{lang('10 AM')}}</option>
                                    <option value="11 AM" {{@$time->friday_start_time == '11 AM' ? 'checked' : ''}}>{{lang('11 AM')}}</option>
                                    <option value="12 AM" {{@$time->friday_start_time == '12 AM' ? 'checked' : ''}}>{{lang('12 AM')}}</option>
                                    <option value="1 PM" {{@$time->friday_start_time == '1 PM' ? 'checked' : ''}}>{{lang('1 PM')}}</option>
                                    <option value="2 PM" {{@$time->friday_start_time == '2 PM' ? 'checked' : ''}}>{{lang('2 PM')}}</option>
                                    <option value="3 PM" {{@$time->friday_start_time == '3 PM' ? 'checked' : ''}}>{{lang('3 PM')}}</option>
                                    <option value="4 PM" {{@$time->friday_start_time == '4 PM' ? 'checked' : ''}}>{{lang('4 PM')}}</option>
                                    <option value="5 PM" {{@$time->friday_start_time == '5 PM' ? 'checked' : ''}}>{{lang('5 PM')}}</option>
                                    <option value="6 PM" {{@$time->friday_start_time == '6 PM' ? 'checked' : ''}}>{{lang('6 PM')}}</option>
                                    <option value="7 PM" {{@$time->friday_start_time == '7 PM' ? 'checked' : ''}}>{{lang('7 PM')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="friday_end_time"
                                    class="form-control form-select select2 select2-hidden-accessible"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('End Time')}}</option>
                                    <option value="9 AM" {{@$time->friday_end_time == '9 AM' ? 'checked' : ''}}>{{lang('9 AM')}}</option>
                                    <option value="10 AM" {{@$time->friday_end_time == '10 AM' ? 'checked' : ''}}>{{lang('10 AM')}}</option>
                                    <option value="11 AM" {{@$time->friday_end_time == '11 AM' ? 'checked' : ''}}>{{lang('11 AM')}}</option>
                                    <option value="12 AM" {{@$time->friday_end_time == '12 AM' ? 'checked' : ''}}>{{lang('12 AM')}}</option>
                                    <option value="1 PM" {{@$time->friday_end_time == '1 PM' ? 'checked' : ''}}>{{lang('1 PM')}}</option>
                                    <option value="2 PM" {{@$time->friday_end_time == '2 PM' ? 'checked' : ''}}>{{lang('2 PM')}}</option>
                                    <option value="3 PM" {{@$time->friday_end_time == '3 PM' ? 'checked' : ''}}>{{lang('3 PM')}}</option>
                                    <option value="4 PM" {{@$time->friday_end_time == '4 PM' ? 'checked' : ''}}>{{lang('4 PM')}}</option>
                                    <option value="5 PM" {{@$time->friday_end_time == '5 PM' ? 'checked' : ''}}>{{lang('5 PM')}}</option>
                                    <option value="6 PM" {{@$time->friday_end_time == '6 PM' ? 'checked' : ''}}>{{lang('6 PM')}}</option>
                                    <option value="7 PM" {{@$time->friday_end_time == '7 PM' ? 'checked' : ''}}>{{lang('7 PM')}}</option>
                                </select>
                            </div>
                        </div>
                        <div id="showContent-5"></div>
                    </div>
                    <div class="ps-0" id="Add-Hours-5">
                        <a class="btn btn-white addMore-5 text-dark">{{lang('Add hours')}}</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    {{lang('Saturday')}}
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="custom-switch form-switch me-5">
                            <input type="checkbox" name="saturday" id="custom-switch-checkbox6"
                                class="custom-switch-input" value="saturday" {{@$time->saturday == 'saturday' ? 'checked' : ''}}>
                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                            <span class="custom-switch-description-6">{{lang('Close')}}</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 row-content-6 hide-on-switch" style="display: none">
                    <div class="form-group">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="saturday_radio"
                                    value="0" id="time-radio-6"  {{@$time->saturday_radio == 0 ? 'checked' : ''}}>
                                <span class="custom-control-label">{{lang('6:00 AM - 12:00
                                    AM')}}</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="saturday_radio"
                                    id="set-hour-radio-6" value="1" {{@$time->saturday_radio == 1 ? 'checked' : ''}}>
                                <span class="custom-control-label">{{lang('Set hours')}}</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 mt-2 select-content-6">
                    <div class="row" id="custom-time-selection-6">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="saturday_start_time"
                                    class="form-control form-select select2 select2-hidden-accessible"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('Start Time')}}</option>
                                    <option value="9 AM" {{@$time->saturday_start_time == '9 AM' ? 'checked' : ''}}>{{lang('9 AM')}}</option>
                                    <option value="10 AM" {{@$time->saturday_start_time == '10 AM' ? 'checked' : ''}}>{{lang('10 AM')}}</option>
                                    <option value="11 AM" {{@$time->saturday_start_time == '11 AM' ? 'checked' : ''}}>{{lang('11 AM')}}</option>
                                    <option value="12 AM" {{@$time->saturday_start_time == '12 AM' ? 'checked' : ''}}>{{lang('12 AM')}}</option>
                                    <option value="1 PM" {{@$time->saturday_start_time == '1 PM' ? 'checked' : ''}}>{{lang('1 PM')}}</option>
                                    <option value="2 PM" {{@$time->saturday_start_time == '2 PM' ? 'checked' : ''}}>{{lang('2 PM')}}</option>
                                    <option value="3 PM" {{@$time->saturday_start_time == '3 PM' ? 'checked' : ''}}>{{lang('3 PM')}}</option>
                                    <option value="4 PM" {{@$time->saturday_start_time == '4 PM' ? 'checked' : ''}}>{{lang('4 PM')}}</option>
                                    <option value="5 PM" {{@$time->saturday_start_time == '5 PM' ? 'checked' : ''}}>{{lang('5 PM')}}</option>
                                    <option value="6 PM" {{@$time->saturday_start_time == '6 PM' ? 'checked' : ''}}>{{lang('6 PM')}}</option>
                                    <option value="7 PM" {{@$time->saturday_start_time == '7 PM' ? 'checked' : ''}}>{{lang('7 PM')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="saturday_end_time"
                                    class="form-control form-select select2 select2-hidden-accessible"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('End Time')}}</option>
                                    <option value="9 AM" {{@$time->saturday_end_time == '9 AM' ? 'checked' : ''}}>{{lang('9 AM')}}</option>
                                    <option value="10 AM" {{@$time->saturday_end_time == '10 AM' ? 'checked' : ''}}>{{lang('10 AM')}}</option>
                                    <option value="11 AM" {{@$time->saturday_end_time == '11 AM' ? 'checked' : ''}}>{{lang('11 AM')}}</option>
                                    <option value="12 AM" {{@$time->saturday_end_time == '12 AM' ? 'checked' : ''}}>{{lang('12 AM')}}</option>
                                    <option value="1 PM" {{@$time->saturday_end_time == '1 PM' ? 'checked' : ''}}>{{lang('1 PM')}}</option>
                                    <option value="2 PM" {{@$time->saturday_end_time == '2 PM' ? 'checked' : ''}}>{{lang('2 PM')}}</option>
                                    <option value="3 PM" {{@$time->saturday_end_time == '3 PM' ? 'checked' : ''}}>{{lang('3 PM')}}</option>
                                    <option value="4 PM" {{@$time->saturday_end_time == '4 PM' ? 'checked' : ''}}>{{lang('4 PM')}}</option>
                                    <option value="5 PM" {{@$time->saturday_end_time == '5 PM' ? 'checked' : ''}}>{{lang('5 PM')}}</option>
                                    <option value="6 PM" {{@$time->saturday_end_time == '6 PM' ? 'checked' : ''}}>{{lang('6 PM')}}</option>
                                    <option value="7 PM" {{@$time->saturday_end_time == '7 PM' ? 'checked' : ''}}>{{lang('7 PM')}}</option>
                                </select>
                            </div>
                        </div>
                        <div id="showContent-6"></div>
                    </div>
                    <div class="ps-0" id="Add-Hours-6">
                        <a class="btn btn-white addMore-6 text-dark">{{lang('Add hour')}}s</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    {{lang('Sunday')}}
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="custom-switch form-switch me-5">
                            <input type="checkbox" name="sunday" id="custom-switch-checkbox7" value="sunday"
                                class="custom-switch-input" {{@$time->sunday == 'sunday' ? 'checked' : ''}}>
                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                            <span class="custom-switch-description-7">{{lang('Close')}}</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 row-content-7 hide-on-switch" style="display: none">
                    <div class="form-group">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="sunday_radio"
                                    value="0" id="time-radio-7"  {{@$time->sunday_radio == 0 ? 'checked' : ''}}>
                                <span class="custom-control-label">{{lang('6:00 AM - 12:00
                                    AM')}}</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="sunday_radio"
                                    id="set-hour-radio-7" value="1" {{@$time->sunday_radio == 1 ? 'checked' : ''}}>
                                <span class="custom-control-label">{{lang('Set hours')}}</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 mt-2 select-content-7">
                    <div class="row" id="custom-time-selection-7">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="sunday_start_time"
                                    class="form-control form-select select2 select2-hidden-accessible"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('Start Time')}}</option>
                                    <option value="9 AM" {{@$time->sunday_start_time == '9 AM' ? 'checked' : ''}}>{{lang('9 AM')}}</option>
                                    <option value="10 AM" {{@$time->sunday_start_time == '10 AM' ? 'checked' : ''}}>{{lang('10 AM')}}</option>
                                    <option value="11 AM" {{@$time->sunday_start_time == '11 AM' ? 'checked' : ''}}>{{lang('11 AM')}}</option>
                                    <option value="12 AM" {{@$time->sunday_start_time == '12 AM' ? 'checked' : ''}}>{{lang('12 AM')}}</option>
                                    <option value="1 PM" {{@$time->sunday_start_time == '1 PM' ? 'checked' : ''}}>{{lang('1 PM')}}</option>
                                    <option value="2 PM" {{@$time->sunday_start_time == '2 PM' ? 'checked' : ''}}>{{lang('2 PM')}}</option>
                                    <option value="3 PM" {{@$time->sunday_start_time == '3 PM' ? 'checked' : ''}}>{{lang('3 PM')}}</option>
                                    <option value="4 PM" {{@$time->sunday_start_time == '4 PM' ? 'checked' : ''}}>{{lang('4 PM')}}</option>
                                    <option value="5 PM" {{@$time->sunday_start_time == '5 PM' ? 'checked' : ''}}>{{lang('5 PM')}}</option>
                                    <option value="6 PM" {{@$time->sunday_start_time == '6 PM' ? 'checked' : ''}}>{{lang('6 PM')}}</option>
                                    <option value="7 PM" {{@$time->sunday_start_time == '7 PM' ? 'checked' : ''}}>{{lang('7 PM')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="sunday_end_time"
                                    class="form-control form-select select2 select2-hidden-accessible"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('End Time')}}</option>
                                    <option value="9 AM" {{@$time->sunday_end_time == '9 AM' ? 'checked' : ''}}>{{lang('9 AM')}}</option>
                                    <option value="10 AM" {{@$time->sunday_end_time == '10 AM' ? 'checked' : ''}}>{{lang('10 AM')}}</option>
                                    <option value="11 AM" {{@$time->sunday_end_time == '11 AM' ? 'checked' : ''}}>{{lang('11 AM')}}</option>
                                    <option value="12 AM" {{@$time->sunday_end_time == '12 AM' ? 'checked' : ''}}>{{lang('12 AM')}}</option>
                                    <option value="1 PM" {{@$time->sunday_end_time == '1 PM' ? 'checked' : ''}}>{{lang('1 PM')}}</option>
                                    <option value="2 PM" {{@$time->sunday_end_time == '2 PM' ? 'checked' : ''}}>{{lang('2 PM')}}</option>
                                    <option value="3 PM" {{@$time->sunday_end_time == '3 PM' ? 'checked' : ''}}>{{lang('3 PM')}}</option>
                                    <option value="4 PM" {{@$time->sunday_end_time == '4 PM' ? 'checked' : ''}}>{{lang('4 PM')}}</option>
                                    <option value="5 PM" {{@$time->sunday_end_time == '5 PM' ? 'checked' : ''}}>{{lang('5 PM')}}</option>
                                    <option value="6 PM" {{@$time->sunday_end_time == '6 PM' ? 'checked' : ''}}>{{lang('6 PM')}}</option>
                                    <option value="7 PM" {{@$time->sunday_end_time == '7 PM' ? 'checked' : ''}}>{{lang('7 PM')}}</option>
                                </select>
                            </div>
                        </div>
                        <div id="showContent-7"></div>
                    </div>
                    <div class="ps-0" id="Add-Hours-7">
                        <a class="btn btn-white addMore-7 text-dark">{{lang('Add hours')}}</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
