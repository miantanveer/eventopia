<div class="mt-3">
    <ul class="list-group">
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    Monday
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="custom-switch form-switch me-5">
                            <input type="checkbox" name="monday" id="custom-switch-checkbox1" value="monday"
                                class="custom-switch-input" {{ @$time->monday == 'monday' ? 'checked' : '' }}>
                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                            <span class="custom-switch-description-1">Close</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 row-content-1 hide-on-switch" style="display: none">
                    <div class="form-group">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="monday_radio" value="0"
                                    id="time-radio-1"   {{@$time->monday_radio == 0 ? 'checked' : ''}}>
                                <span class="custom-control-label">6:00 AM - 12:00
                                    AM</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="monday_radio" value="1"
                                    id="set-hour-radio-1"   {{@$time->monday_radio == 1 ? 'checked' : ''}}>
                                <span class="custom-control-label">Set hours</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6 mt-2 select-content-1">
                    <div class="row" id="custom-time-selection-1">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="monday_start_time_0"
                                    class="form-control form-select select2 select2-hidden-accessible" id="monday-start-time"
                                    data-bs-placeholder="Select Country" onchange="startTime('monday')" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('Start Time')}}</option>
                                    <option value="9 AM" class="option">9 AM</option>
                                    <option value="10 AM" class="option">10 AM</option>
                                    <option value="11 AM" class="option">11 AM</option>
                                    <option value="12 AM" class="option">12 AM</option>
                                    <option value="1 PM" class="option">1 PM</option>
                                    <option value="2 PM" class="option">2 PM</option>
                                    <option value="3 PM" class="option">3 PM</option>
                                    <option value="4 PM" class="option">4 PM</option>
                                    <option value="5 PM" class="option">5 PM</option>
                                    <option value="6 PM" class="option">6 PM</option>
                                    <option value="7 PM" class="option">7 PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="monday_end_time_0"
                                    class="form-control form-select select2 select2-hidden-accessible" id="monday-end-time"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('End Time')}}</option>
                                    <option value="9 AM" class="option">9 AM</option>
                                    <option value="10 AM" class="option">10 AM</option>
                                    <option value="11 AM" class="option">11 AM</option>
                                    <option value="12 AM" class="option">12 AM</option>
                                    <option value="1 PM" class="option">1 PM</option>
                                    <option value="2 PM" class="option">2 PM</option>
                                    <option value="3 PM" class="option">3 PM</option>
                                    <option value="4 PM" class="option">4 PM</option>
                                    <option value="5 PM" class="option">5 PM</option>
                                    <option value="6 PM" class="option">6 PM</option>
                                    <option value="7 PM" class="option">7 PM</option>
                                </select>
                            </div>
                        </div>
                        <div id="showContent-1" class="start-time-select2"></div>
                    </div>
                    <div class="ps-0" id="Add-Hours-1">
                        <a class="btn btn-white addMore-1 text-dark">Add hours</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    Tuesday
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="custom-switch form-switch me-5">
                            <input type="checkbox" name="tuesday" id="custom-switch-checkbox2" value="tuesday"
                                class="custom-switch-input" {{ @$time->tuesday == 'tuesday' ? 'checked' : '' }}>
                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                            <span class="custom-switch-description-2">Close</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 row-content-2 hide-on-switch" style="display: none">
                    <div class="form-group">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="tuesday_radio" value="0"
                                    id="time-radio-2"  {{@$time->tuesday_radio == 0 ? 'checked' : ''}}>
                                <span class="custom-control-label">6:00 AM - 12:00
                                    AM</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="tuesday_radio"
                                    id="set-hour-radio-2" value="1"  {{@$time->tuesday_radio == 1 ? 'checked' : ''}}>
                                <span class="custom-control-label">Set hours</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 mt-2 select-content-2">
                    <div class="row" id="custom-time-selection-2">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="tuesday_start_time_0"
                                    class="form-control form-select select2 select2-hidden-accessible" id="tuesday-start-time"
                                    data-bs-placeholder="Select Country" onchange="startTime('tuesday')" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('Start Time')}}</option>
                                    <option value="9 AM" class="option">9 AM</option>
                                    <option value="10 AM" class="option">10 AM</option>
                                    <option value="11 AM" class="option">11 AM</option>
                                    <option value="12 AM" class="option">12 AM</option>
                                    <option value="1 PM" class="option">1 PM</option>
                                    <option value="2 PM" class="option">2 PM</option>
                                    <option value="3 PM" class="option">3 PM</option>
                                    <option value="4 PM" class="option">4 PM</option>
                                    <option value="5 PM" class="option">5 PM</option>
                                    <option value="6 PM" class="option">6 PM</option>
                                    <option value="7 PM" class="option">7 PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="tuesday_end_time_0"
                                    class="form-control form-select select2 select2-hidden-accessible" id="tuesday-end-time"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('End Time')}}</option>
                                    <option value="9 AM" class="option">9 AM</option>
                                    <option value="10 AM" class="option">10 AM</option>
                                    <option value="11 AM" class="option">11 AM</option>
                                    <option value="12 AM" class="option">12 AM</option>
                                    <option value="1 PM" class="option">1 PM</option>
                                    <option value="2 PM" class="option">2 PM</option>
                                    <option value="3 PM" class="option">3 PM</option>
                                    <option value="4 PM" class="option">4 PM</option>
                                    <option value="5 PM" class="option">5 PM</option>
                                    <option value="6 PM" class="option">6 PM</option>
                                    <option value="7 PM" class="option">7 PM</option>
                                </select>
                            </div>
                        </div>
                        <div id="showContent-2"></div>
                    </div>
                    <div class="ps-0" id="Add-Hours-2">
                        <a class="btn btn-white addMore-2 text-dark">Add hours</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    Wednesday
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="custom-switch form-switch me-5">
                            <input type="checkbox" name="wednesday"
                                {{ @$time->wednesday == 'wednesday' ? 'checked' : '' }} id="custom-switch-checkbox3"
                                value="wednesday" class="custom-switch-input">
                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                            <span class="custom-switch-description-3">Close</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 row-content-3 hide-on-switch" style="display: none">
                    <div class="form-group">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="wednesday_radio"
                                    value="0" id="time-radio-3" {{@$time->wednesday == 0 ? 'checked' : ''}}>
                                <span class="custom-control-label">6:00 AM - 12:00
                                    AM</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="wednesday_radio"
                                    id="set-hour-radio-3" value="1" {{@$time->wednesday == 1 ? 'checked' : ''}}>
                                <span class="custom-control-label">Set hours</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 mt-2 select-content-3">
                    <div class="row" id="custom-time-selection-3">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="wednesday_start_time"
                                    class="form-control form-select select2 select2-hidden-accessible" id="wednesday-start-time"
                                    data-bs-placeholder="Select Country" onchange="startTime('wednesday')" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('Start Time')}}</option>
                                    <option value="9 AM" class="option">9 AM</option>
                                    <option value="10 AM" class="option">10 AM</option>
                                    <option value="11 AM" class="option">11 AM</option>
                                    <option value="12 AM" class="option">12 AM</option>
                                    <option value="1 PM" class="option">1 PM</option>
                                    <option value="2 PM" class="option">2 PM</option>
                                    <option value="3 PM" class="option">3 PM</option>
                                    <option value="4 PM" class="option">4 PM</option>
                                    <option value="5 PM" class="option">5 PM</option>
                                    <option value="6 PM" class="option">6 PM</option>
                                    <option value="7 PM" class="option">7 PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="wednesday_end_time"
                                    class="form-control form-select select2 select2-hidden-accessible" id="wednesday-end-time"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('End Time')}}</option>
                                    <option value="9 AM" class="option">9 AM</option>
                                    <option value="10 AM" class="option">10 AM</option>
                                    <option value="11 AM" class="option">11 AM</option>
                                    <option value="12 AM" class="option">12 AM</option>
                                    <option value="1 PM" class="option">1 PM</option>
                                    <option value="2 PM" class="option">2 PM</option>
                                    <option value="3 PM" class="option">3 PM</option>
                                    <option value="4 PM" class="option">4 PM</option>
                                    <option value="5 PM" class="option">5 PM</option>
                                    <option value="6 PM" class="option">6 PM</option>
                                    <option value="7 PM" class="option">7 PM</option>
                                </select>
                            </div>
                        </div>
                        <div id="showContent-3"></div>
                    </div>
                    <div class="ps-0" id="Add-Hours-3">
                        <a class="btn btn-white addMore-3 text-dark">Add hours</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    Thursday
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="custom-switch form-switch me-5">
                            <input type="checkbox" name="thursday" id="custom-switch-checkbox4"
                                class="custom-switch-input" value="thursday"
                                {{ @$time->thursday == 'thursday' ? 'checked' : '' }}>
                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                            <span class="custom-switch-description-4">Close</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 row-content-4 hide-on-switch" style="display: none">
                    <div class="form-group">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="thursday_radio"
                                    value="0" id="time-radio-4"  {{@$time->thursday_radio == 0 ? 'checked' : ''}}>
                                <span class="custom-control-label">6:00 AM - 12:00
                                    AM</span>
                            </label>
                            <label class="custom-control custom-radio" id="btn1">
                                <input type="radio" class="custom-control-input" name="thursday_radio"
                                    id="set-hour-radio-4" value="1"  {{@$time->thursday_radio == 1 ? 'checked' : ''}}>
                                <span class="custom-control-label">Set hours</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 mt-2 select-content-4">
                    <div class="row" id="custom-time-selection-4">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="thursday_start_time"
                                    class="form-control form-select select2 select2-hidden-accessible" id="thursday-start-time"
                                    data-bs-placeholder="Select Country" onchange="startTime('thursday')" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('Start Time')}}</option>
                                    <option value="9 AM" class="option">9 AM</option>
                                    <option value="10 AM" class="option">10 AM</option>
                                    <option value="11 AM" class="option">11 AM</option>
                                    <option value="12 AM" class="option">12 AM</option>
                                    <option value="1 PM" class="option">1 PM</option>
                                    <option value="2 PM" class="option">2 PM</option>
                                    <option value="3 PM" class="option">3 PM</option>
                                    <option value="4 PM" class="option">4 PM</option>
                                    <option value="5 PM" class="option">5 PM</option>
                                    <option value="6 PM" class="option">6 PM</option>
                                    <option value="7 PM" class="option">7 PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="thursday_end_time"
                                    class="form-control form-select select2 select2-hidden-accessible" id="thursday-end-time"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('End Time')}}</option>
                                    <option value="9 AM" class="option">9 AM</option>
                                    <option value="10 AM" class="option">10 AM</option>
                                    <option value="11 AM" class="option">11 AM</option>
                                    <option value="12 AM" class="option">12 AM</option>
                                    <option value="1 PM" class="option">1 PM</option>
                                    <option value="2 PM" class="option">2 PM</option>
                                    <option value="3 PM" class="option">3 PM</option>
                                    <option value="4 PM" class="option">4 PM</option>
                                    <option value="5 PM" class="option">5 PM</option>
                                    <option value="6 PM" class="option">6 PM</option>
                                    <option value="7 PM" class="option">7 PM</option>
                                </select>
                            </div>
                        </div>
                        <div id="showContent-4"></div>
                    </div>
                    <div class="ps-0" id="Add-Hours-4">
                        <a class="btn btn-white addMore-4 text-dark">Add hours</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    Friday
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="custom-switch form-switch me-5">
                            <input type="checkbox" name="friday" id="custom-switch-checkbox5"
                                class="custom-switch-input" value="friday"
                                {{ @$time->friday == 'friday' ? 'checked' : '' }}>
                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                            <span class="custom-switch-description-5">Close</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 row-content-5 hide-on-switch" style="display: none">
                    <div class="form-group">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="friday_radio"
                                    value="0" id="time-radio-5"  {{@$time->friday_radio == 0 ? 'checked' : ''}}>
                                <span class="custom-control-label">6:00 AM - 12:00
                                    AM</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="friday_radio"
                                    id="set-hour-radio-5" value="1"  {{@$time->friday_radio == 1 ? 'checked' : ''}}>
                                <span class="custom-control-label">Set hours</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 mt-2 select-content-5">
                    <div class="row" id="custom-time-selection-5">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="friday_start_time"
                                    class="form-control form-select select2 select2-hidden-accessible" id="friday-start-time"
                                    data-bs-placeholder="Select Country" onchange="startTime('friday')" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('Start Time')}}</option>
                                    <option value="9 AM" class="option">9 AM</option>
                                    <option value="10 AM" class="option">10 AM</option>
                                    <option value="11 AM" class="option">11 AM</option>
                                    <option value="12 AM" class="option">12 AM</option>
                                    <option value="1 PM" class="option">1 PM</option>
                                    <option value="2 PM" class="option">2 PM</option>
                                    <option value="3 PM" class="option">3 PM</option>
                                    <option value="4 PM" class="option">4 PM</option>
                                    <option value="5 PM" class="option">5 PM</option>
                                    <option value="6 PM" class="option">6 PM</option>
                                    <option value="7 PM" class="option">7 PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="friday_end_time"
                                    class="form-control form-select select2 select2-hidden-accessible" id="friday-end-time"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('End Time')}}</option>
                                    <option value="9 AM" class="option">9 AM</option>
                                    <option value="10 AM" class="option">10 AM</option>
                                    <option value="11 AM" class="option">11 AM</option>
                                    <option value="12 AM" class="option">12 AM</option>
                                    <option value="1 PM" class="option">1 PM</option>
                                    <option value="2 PM" class="option">2 PM</option>
                                    <option value="3 PM" class="option">3 PM</option>
                                    <option value="4 PM" class="option">4 PM</option>
                                    <option value="5 PM" class="option">5 PM</option>
                                    <option value="6 PM" class="option">6 PM</option>
                                    <option value="7 PM" class="option">7 PM</option>
                                </select>
                            </div>
                        </div>
                        <div id="showContent-5"></div>
                    </div>
                    <div class="ps-0" id="Add-Hours-5">
                        <a class="btn btn-white addMore-5 text-dark">Add hours</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    Saturday
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="custom-switch form-switch me-5">
                            <input type="checkbox" name="saturday" id="custom-switch-checkbox6"
                                class="custom-switch-input" value="saturday"
                                {{ @$time->saturday == 'saturday' ? 'checked' : '' }}>
                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                            <span class="custom-switch-description-6">Close</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 row-content-6 hide-on-switch" style="display: none">
                    <div class="form-group">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="saturday_radio"
                                    value="0" id="time-radio-6"  {{@$time->saturday_radio == 0 ? 'checked' : ''}}>
                                <span class="custom-control-label">6:00 AM - 12:00
                                    AM</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="saturday_radio"
                                    id="set-hour-radio-6" value="1" {{@$time->saturday_radio == 1 ? 'checked' : ''}}>
                                <span class="custom-control-label">Set hours</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 mt-2 select-content-6">
                    <div class="row" id="custom-time-selection-6">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="saturday_start_time"
                                    class="form-control form-select select2 select2-hidden-accessible" id="saturday-start-time"
                                    data-bs-placeholder="Select Country" onchange="startTime('saturday')" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('Start Time')}}</option>
                                    <option value="9 AM" class="option">9 AM</option>
                                    <option value="10 AM" class="option">10 AM</option>
                                    <option value="11 AM" class="option">11 AM</option>
                                    <option value="12 AM" class="option">12 AM</option>
                                    <option value="1 PM" class="option">1 PM</option>
                                    <option value="2 PM" class="option">2 PM</option>
                                    <option value="3 PM" class="option">3 PM</option>
                                    <option value="4 PM" class="option">4 PM</option>
                                    <option value="5 PM" class="option">5 PM</option>
                                    <option value="6 PM" class="option">6 PM</option>
                                    <option value="7 PM" class="option">7 PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="saturday_end_time"
                                    class="form-control form-select select2 select2-hidden-accessible" id="saturday-end-time"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('End Time')}}</option>
                                    <option value="9 AM" class="option">9 AM</option>
                                    <option value="10 AM" class="option">10 AM</option>
                                    <option value="11 AM" class="option">11 AM</option>
                                    <option value="12 AM" class="option">12 AM</option>
                                    <option value="1 PM" class="option">1 PM</option>
                                    <option value="2 PM" class="option">2 PM</option>
                                    <option value="3 PM" class="option">3 PM</option>
                                    <option value="4 PM" class="option">4 PM</option>
                                    <option value="5 PM" class="option">5 PM</option>
                                    <option value="6 PM" class="option">6 PM</option>
                                    <option value="7 PM" class="option">7 PM</option>
                                </select>
                            </div>
                        </div>
                        <div id="showContent-6"></div>
                    </div>
                    <div class="ps-0" id="Add-Hours-6">
                        <a class="btn btn-white addMore-6 text-dark">Add hours</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    Sunday
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="custom-switch form-switch me-5">
                            <input type="checkbox" name="sunday" id="custom-switch-checkbox7" value="sunday"
                                class="custom-switch-input" {{ @$time->sunday == 'sunday' ? 'checked' : '' }}>
                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                            <span class="custom-switch-description-7">Close</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 row-content-7 hide-on-switch" style="display: none">
                    <div class="form-group">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="sunday_radio"
                                    value="0" id="time-radio-7"  {{@$time->sunday_radio == 0 ? 'checked' : ''}}>
                                <span class="custom-control-label">6:00 AM - 12:00
                                    AM</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="sunday_radio"
                                    id="set-hour-radio-7" value="1" {{@$time->sunday_radio == 1 ? 'checked' : ''}}>
                                <span class="custom-control-label">Set hours</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 mt-2 select-content-7">
                    <div class="row" id="custom-time-selection-7">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="sunday_start_time"
                                    class="form-control form-select select2 select2-hidden-accessible" id="sunday-start-time"
                                    data-bs-placeholder="Select Country" onchange="startTime('sunday')" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('Start Time')}}</option>
                                    <option value="9 AM" class="option">9 AM</option>
                                    <option value="10 AM" class="option">10 AM</option>
                                    <option value="11 AM" class="option">11 AM</option>
                                    <option value="12 AM" class="option">12 AM</option>
                                    <option value="1 PM" class="option">1 PM</option>
                                    <option value="2 PM" class="option">2 PM</option>
                                    <option value="3 PM" class="option">3 PM</option>
                                    <option value="4 PM" class="option">4 PM</option>
                                    <option value="5 PM" class="option">5 PM</option>
                                    <option value="6 PM" class="option">6 PM</option>
                                    <option value="7 PM" class="option">7 PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="sunday_end_time"
                                    class="form-control form-select select2 select2-hidden-accessible" id="sunday-end-time"
                                    data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>{{lang('End Time')}}</option>
                                    <option value="9 AM" class="option">9 AM</option>
                                    <option value="10 AM" class="option">10 AM</option>
                                    <option value="11 AM" class="option">11 AM</option>
                                    <option value="12 AM" class="option">12 AM</option>
                                    <option value="1 PM" class="option">1 PM</option>
                                    <option value="2 PM" class="option">2 PM</option>
                                    <option value="3 PM" class="option">3 PM</option>
                                    <option value="4 PM" class="option">4 PM</option>
                                    <option value="5 PM" class="option">5 PM</option>
                                    <option value="6 PM" class="option">6 PM</option>
                                    <option value="7 PM" class="option">7 PM</option>
                                </select>
                            </div>
                        </div>
                        <div id="showContent-7"></div>
                    </div>
                    <div class="ps-0" id="Add-Hours-7">
                        <a class="btn btn-white addMore-7 text-dark">Add hours</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
