<!-- Country-selector modal-->
<div class="modal fade" id="country-selector">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal">
            <div class="modal-header">
                <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <ul class="row p-3">
                    <li class="col-lg-6 mb-2">
                        <a href="#" class="btn btn-country btn-lg btn-block active">
                            <span class="country-selector"><img alt=""
                                    src="{{ asset('assets/images/flags/us_flag.jpg') }}"
                                    class="me-3 language"></span>USA
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="#" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="{{ asset('assets/images/flags/italy_flag.jpg') }}"
                                    class="me-3 language"></span>Italy
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="#" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt="" src="{{ asset('assets/images/flags/sa.svg') }}"
                                    class="me-3 language"></span>Arabic
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="#" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="{{ asset('assets/images/flags/spain_flag.jpg') }}"
                                    class="me-3 language"></span>Spain
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="#" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="{{ asset('assets/images/flags/india_flag.jpg') }}"
                                    class="me-3 language"></span>India
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="#" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="{{ asset('assets/images/flags/french_flag.jpg') }}"
                                    class="me-3 language"></span>French
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="#" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="{{ asset('assets/images/flags/russia_flag.jpg') }}"
                                    class="me-3 language"></span>Russia
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="#" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="{{ asset('assets/images/flags/germany_flag.jpg') }}"
                                    class="me-3 language"></span>Germany
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="#" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="{{ asset('assets/images/flags/argentina.jpg') }}"
                                    class="me-3 language"></span>Argentina
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="#" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="{{ asset('assets/images/flags/malaysia.jpg') }}"
                                    class="me-3 language"></span>Malaysia
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="#" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="{{ asset('assets/images/flags/turkey.jpg') }}"
                                    class="me-3 language"></span>Turkey
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="blockTimeModal">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <div class="text-center m-auto">
                    <h4 class="modal-title fw-bolder">Block time</h4>
                    <p class="mx-2">Your space will be marked unavailable.</p>
                </div>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-5">
                            <div class="input-group">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                    </div><input type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-2 text-center">
                            <h6 class="mt-3">To</h6>
                        </div>
                        <div class="col-5">
                            <div class="input-group">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                    </div><input type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-3 text-start">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox2"
                                    value="option2">
                                <span class="custom-control-label">All Day</span>
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-5 text-start">
                            <div class="form-group w-100">
                                <label for="Title" class="form-label">Title</label>
                                <div class="form-group ">
                                    <input type="text" class="form-control" id="Title" name="Title">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-3">
                            <button class="btn w-100 btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Country-selector modal-->

        <!-- Quote Modal -->

        <!-- Modal -->
        <div class="modal fade" id="quote-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-white text-danger border-0" data-bs-dismiss="modal">Decline</button>
                        <button class="btn btn-primary">Accept</button>
                    </div>
                </div>
            </div>
        </div>
