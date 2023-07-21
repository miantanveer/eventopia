@extends('layouts.calendar')

@section('styles')
@endsection

@section('content')
    <!-- ROW-1 -->
    <div class="row mt-5">
        <div class="col-10 m-auto">
            <div class="card" id="modal3">
                <div class="card-body border p-4 pb-5">
                    <div class="text-center mb-4">
                        <h2 class="mx-4 fw-bolder">What are your operating hours?</h2>
                        <p class="mx-4">Operating hours are the days and hours of the week that your space is open to host
                            bookings (i.e. your general availability). Guests
                            will not be able to book times outside of your operating hours. Learn More.</p>
                    </div>
                    <div class="text-start mb-4">
                        <p> Birthday event - 23408 Bernier Cliff Suite 526 </p>
                    </div>
                    <div class="text-start bg-gray-light">
                        <p class="p-5"><i class="mdi mdi-alert-circle"></i> &nbsp; &nbsp; Operating hours end times are
                            restricted to 12 AM for this space type. Read our Social Events Policy for more information.</p>
                    </div>
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
                                                <input type="checkbox" name="custom-switch-checkbox1"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                <span class="custom-switch-description">Open</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="example-radios1"
                                                        value="option1" checked="">
                                                    <span class="custom-control-label">6:00 AM - 12:00 AM</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="example-radios1"
                                                        value="option2">
                                                    <span class="custom-control-label">Set hours</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-6 mt-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="star-time"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Country" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">9 AM</option>
                                                        <option value="">10 AM</option>
                                                        <option value="">11 AM</option>
                                                        <option value="">12 AM</option>
                                                        <option value="">1 PM</option>
                                                        <option value="">2 PM</option>
                                                        <option value="">3 PM</option>
                                                        <option value="">4 PM</option>
                                                        <option value="">5 PM</option>
                                                        <option value="">6 PM</option>
                                                        <option value="">7 PM</option>
                                                        <option value="" selected="" disabled>Start
                                                            Time
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="star-time"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Country" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">9 AM</option>
                                                        <option value="">10 AM</option>
                                                        <option value="">11 AM</option>
                                                        <option value="">12 AM</option>
                                                        <option value="">1 PM</option>
                                                        <option value="">2 PM</option>
                                                        <option value="">3 PM</option>
                                                        <option value="">4 PM</option>
                                                        <option value="">5 PM</option>
                                                        <option value="">6 PM</option>
                                                        <option value="">7 PM</option>
                                                        <option value="" selected="" disabled>End
                                                            Time
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
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
                                                <input type="checkbox" name="custom-switch-checkbox1"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                <span class="custom-switch-description">Open</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios2" value="option1" checked="">
                                                    <span class="custom-control-label">6:00 AM - 12:00 AM</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios2" value="option2">
                                                    <span class="custom-control-label">Set hours</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-6 mt-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="star-time"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Country" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">9 AM</option>
                                                        <option value="">10 AM</option>
                                                        <option value="">11 AM</option>
                                                        <option value="">12 AM</option>
                                                        <option value="">1 PM</option>
                                                        <option value="">2 PM</option>
                                                        <option value="">3 PM</option>
                                                        <option value="">4 PM</option>
                                                        <option value="">5 PM</option>
                                                        <option value="">6 PM</option>
                                                        <option value="">7 PM</option>
                                                        <option value="" selected="" disabled>Start
                                                            Time
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="star-time"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Country" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">9 AM</option>
                                                        <option value="">10 AM</option>
                                                        <option value="">11 AM</option>
                                                        <option value="">12 AM</option>
                                                        <option value="">1 PM</option>
                                                        <option value="">2 PM</option>
                                                        <option value="">3 PM</option>
                                                        <option value="">4 PM</option>
                                                        <option value="">5 PM</option>
                                                        <option value="">6 PM</option>
                                                        <option value="">7 PM</option>
                                                        <option value="" selected="" disabled>End
                                                            Time
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
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
                                                <input type="checkbox" name="custom-switch-checkbox1"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                <span class="custom-switch-description">Open</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios3" value="option1" checked="">
                                                    <span class="custom-control-label">6:00 AM - 12:00 AM</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios3" value="option2">
                                                    <span class="custom-control-label">Set hours</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-6 mt-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="star-time"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Country" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">9 AM</option>
                                                        <option value="">10 AM</option>
                                                        <option value="">11 AM</option>
                                                        <option value="">12 AM</option>
                                                        <option value="">1 PM</option>
                                                        <option value="">2 PM</option>
                                                        <option value="">3 PM</option>
                                                        <option value="">4 PM</option>
                                                        <option value="">5 PM</option>
                                                        <option value="">6 PM</option>
                                                        <option value="">7 PM</option>
                                                        <option value="" selected="" disabled>Start
                                                            Time
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="star-time"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Country" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">9 AM</option>
                                                        <option value="">10 AM</option>
                                                        <option value="">11 AM</option>
                                                        <option value="">12 AM</option>
                                                        <option value="">1 PM</option>
                                                        <option value="">2 PM</option>
                                                        <option value="">3 PM</option>
                                                        <option value="">4 PM</option>
                                                        <option value="">5 PM</option>
                                                        <option value="">6 PM</option>
                                                        <option value="">7 PM</option>
                                                        <option value="" selected="" disabled>End
                                                            Time
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
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
                                                <input type="checkbox" name="custom-switch-checkbox1"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                <span class="custom-switch-description">Open</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios4" value="option1" checked="">
                                                    <span class="custom-control-label">6:00 AM - 12:00 AM</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios4" value="option2">
                                                    <span class="custom-control-label">Set hours</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-6 mt-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="star-time"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Country" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">9 AM</option>
                                                        <option value="">10 AM</option>
                                                        <option value="">11 AM</option>
                                                        <option value="">12 AM</option>
                                                        <option value="">1 PM</option>
                                                        <option value="">2 PM</option>
                                                        <option value="">3 PM</option>
                                                        <option value="">4 PM</option>
                                                        <option value="">5 PM</option>
                                                        <option value="">6 PM</option>
                                                        <option value="">7 PM</option>
                                                        <option value="" selected="" disabled>Start
                                                            Time
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="star-time"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Country" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">9 AM</option>
                                                        <option value="">10 AM</option>
                                                        <option value="">11 AM</option>
                                                        <option value="">12 AM</option>
                                                        <option value="">1 PM</option>
                                                        <option value="">2 PM</option>
                                                        <option value="">3 PM</option>
                                                        <option value="">4 PM</option>
                                                        <option value="">5 PM</option>
                                                        <option value="">6 PM</option>
                                                        <option value="">7 PM</option>
                                                        <option value="" selected="" disabled>End
                                                            Time
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
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
                                                <input type="checkbox" name="custom-switch-checkbox1"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                <span class="custom-switch-description">Open</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios5" value="option1" checked="">
                                                    <span class="custom-control-label">6:00 AM - 12:00 AM</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios5" value="option2">
                                                    <span class="custom-control-label">Set hours</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-6 mt-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="star-time"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Country" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">9 AM</option>
                                                        <option value="">10 AM</option>
                                                        <option value="">11 AM</option>
                                                        <option value="">12 AM</option>
                                                        <option value="">1 PM</option>
                                                        <option value="">2 PM</option>
                                                        <option value="">3 PM</option>
                                                        <option value="">4 PM</option>
                                                        <option value="">5 PM</option>
                                                        <option value="">6 PM</option>
                                                        <option value="">7 PM</option>
                                                        <option value="" selected="" disabled>Start
                                                            Time
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="star-time"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Country" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">9 AM</option>
                                                        <option value="">10 AM</option>
                                                        <option value="">11 AM</option>
                                                        <option value="">12 AM</option>
                                                        <option value="">1 PM</option>
                                                        <option value="">2 PM</option>
                                                        <option value="">3 PM</option>
                                                        <option value="">4 PM</option>
                                                        <option value="">5 PM</option>
                                                        <option value="">6 PM</option>
                                                        <option value="">7 PM</option>
                                                        <option value="" selected="" disabled>End
                                                            Time
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
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
                                                <input type="checkbox" name="custom-switch-checkbox1"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                <span class="custom-switch-description">Open</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios6" value="option1" checked="">
                                                    <span class="custom-control-label">6:00 AM - 12:00 AM</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios6" value="option2">
                                                    <span class="custom-control-label">Set hours</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-6 mt-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="star-time"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Country" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">9 AM</option>
                                                        <option value="">10 AM</option>
                                                        <option value="">11 AM</option>
                                                        <option value="">12 AM</option>
                                                        <option value="">1 PM</option>
                                                        <option value="">2 PM</option>
                                                        <option value="">3 PM</option>
                                                        <option value="">4 PM</option>
                                                        <option value="">5 PM</option>
                                                        <option value="">6 PM</option>
                                                        <option value="">7 PM</option>
                                                        <option value="" selected="" disabled>Start
                                                            Time
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="star-time"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Country" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">9 AM</option>
                                                        <option value="">10 AM</option>
                                                        <option value="">11 AM</option>
                                                        <option value="">12 AM</option>
                                                        <option value="">1 PM</option>
                                                        <option value="">2 PM</option>
                                                        <option value="">3 PM</option>
                                                        <option value="">4 PM</option>
                                                        <option value="">5 PM</option>
                                                        <option value="">6 PM</option>
                                                        <option value="">7 PM</option>
                                                        <option value="" selected="" disabled>End
                                                            Time
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
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
                                                <input type="checkbox" name="custom-switch-checkbox1"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                <span class="custom-switch-description">Open</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios7" value="option1" checked="">
                                                    <span class="custom-control-label">6:00 AM - 12:00 AM</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="example-radios7" value="option2">
                                                    <span class="custom-control-label">Set hours</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-6 mt-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="star-time"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Country" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">9 AM</option>
                                                        <option value="">10 AM</option>
                                                        <option value="">11 AM</option>
                                                        <option value="">12 AM</option>
                                                        <option value="">1 PM</option>
                                                        <option value="">2 PM</option>
                                                        <option value="">3 PM</option>
                                                        <option value="">4 PM</option>
                                                        <option value="">5 PM</option>
                                                        <option value="">6 PM</option>
                                                        <option value="">7 PM</option>
                                                        <option value="" selected="" disabled>Start
                                                            Time
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="star-time"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Country" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">9 AM</option>
                                                        <option value="">10 AM</option>
                                                        <option value="">11 AM</option>
                                                        <option value="">12 AM</option>
                                                        <option value="">1 PM</option>
                                                        <option value="">2 PM</option>
                                                        <option value="">3 PM</option>
                                                        <option value="">4 PM</option>
                                                        <option value="">5 PM</option>
                                                        <option value="">6 PM</option>
                                                        <option value="">7 PM</option>
                                                        <option value="" selected="" disabled>End
                                                            Time
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <hr style="border-top: 1px solid black">
                    <div class="text-end mb-2 mt-5">
                        <div class="btn-list">
                            <a href="#" class="btn ">Back</a>
                            <a href="#" class="btn btn-primary float-sm-end">Done</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END -->
@endsection
