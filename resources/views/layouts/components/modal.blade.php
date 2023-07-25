        <!-- Country-selector modal-->
        <div class="modal fade" id="country-selector">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content country-select-modal">
                    <div class="modal-header">
                        <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <ul class="row p-3">
                            <li class="col-lg-6 mb-2">
                                <a href="#" class="btn btn-country btn-lg btn-block active">
                                    <span class="country-selector"><img alt="" src="{{ asset('assets/images/flags/us_flag.jpg') }}" class="me-3 language"></span>USA
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="#" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{ asset('assets/images/flags/italy_flag.jpg') }}" class="me-3 language"></span>Italy
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="#" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{ asset('assets/images/flags/sa.svg') }}" class="me-3 language"></span>Arabic
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="#" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{ asset('assets/images/flags/spain_flag.jpg') }}" class="me-3 language"></span>Spain
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="#" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{ asset('assets/images/flags/india_flag.jpg') }}" class="me-3 language"></span>India
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="#" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{ asset('assets/images/flags/french_flag.jpg') }}" class="me-3 language"></span>French
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="#" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{ asset('assets/images/flags/russia_flag.jpg') }}" class="me-3 language"></span>Russia
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="#" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{ asset('assets/images/flags/germany_flag.jpg') }}" class="me-3 language"></span>Germany
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="#" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{ asset('assets/images/flags/argentina.jpg') }}" class="me-3 language"></span>Argentina
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="#" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{ asset('assets/images/flags/malaysia.jpg') }}" class="me-3 language"></span>Malaysia
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="#" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{ asset('assets/images/flags/turkey.jpg') }}" class="me-3 language"></span>Turkey
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
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
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
            </div>
        </div>
        <!-- Country-selector modal-->

       <!--account list-space-->
        <div class="modal fade" id="my-modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content country-select-modal">
                    <div class="modal-header">
                        <h1 style="text-align:center;color:#000017" class="modal-title">Create an account to list
                            your space</h1><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <form>
                                <div class="">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label"></label>
                                        <input type="email" class="form-control btn btn-default rounded-0" id="exampleInputEmail1" placeholder="Email or phone number">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="form-label"></label>
                                        <input type="password" class="form-control btn btn-default rounded-0" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="form-label mt-2 mb-2"></label>
                                        <a style="height:46px;width:510;background-color:#003B95;color:#FFFFFF" type="password" class="form-control btn btn-info rounded-0" href="#" id="exampleInputPassword1">Sign up</a><br>
                                        <p style="height:39px;width:460px;color:#6B6B6B;padding-right:50px;text-align:center">By clicking Sign up, you agree to <span style="text-decoration:underline;">Eventopia Services Agreement and Privacy Policy.</span></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer mt-0 mb-5">
                        <p style="height:39px;width:490px;color:#313131;text-align:center;"> <b>Eventopia will send you deals, inspiration, and marketing emails. You can opt out at any time from your account settings.</b></p><br>

                        <label style="height:771;width:600;margin-right:50px;" class="custom-control custom-checkbox mt-4 mb-3">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                            <span class="custom-control-label">I don't want to receive marketing emails from Eventopia.</span>
                        </label>
                        <div>
                            <h6 style="height:17;width:216;margin-right:142px;"><b>Already have an account? <span style="color:#006CE4">Login</span></b></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>