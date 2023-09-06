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
                    @php
                        $langs = \App\Models\Language::get();
                    @endphp
                    @foreach ($langs as $lang)
                    <li class="col-lg-6 mb-2">
                        <a href="{{locale($lang->code)}}"  class="btn btn-country btn-lg btn-block">
                            <span class="country-selector
                            "><img alt=""src="{{ asset($lang->image) }}"class="me-3 language"></span>
                            {{$lang->name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

{{-- Waring Image Modal --}}
<div class="modal fade" id="warning-modal">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body text-center p-4 pb-5">
                <button aria-label="Close" class="btn-close position-absolute" data-bs-dismiss="modal"><span
                        aria-hidden="true">&times;</span></button>
                <i class="icon icon-close fs-70 text-danger lh-1 my-5 d-inline-block"></i>
                    <h2 class="text-danger">Warning!</h2>
                    <h4 class="text-danger">Atleast 4 and maximum 8 images are required.</h4>
                    <button class="btn btn-danger pd-x-25" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- Quote Modal -->
<div class="modal fade" id="quote-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header border-0 mx-auto">
                <div class="text-center align-middle">
                    <h3 class="modal-title fw-bolder">Quotation from Seller</h3>
                    <p>This quote is made for the service <span id="header"></span></p>
                </div>
            </div>
            <div class="modal-body pb-0">
                <div class="row p-4  border-bottom align-items-center">
                    <div class="col-md-3 col-12 ">
                        <h6 class="fw-bolder">Service</h6>
                    </div>
                    <div class="col-12 d-flex d-md-none p-4" id="img"></div>
                    <div class="col-6">
                        <h6 class="fw-bolder">Service type & description </h6>
                    </div>
                    <div class="col-md-3 col-6 text-end">
                        <h6 class="fw-bolder">Amount</h6>
                    </div>
                </div>
                <div class="row p-4  border-bottom align-items-center">
                    <div class="col-3 d-none d-md-flex" id="img1"> 
                    </div>
                    <div class="col-6">
                        <p id="title"></p>
                        <p id="description">Description</p>
                    </div>
                    <div class="col-md-3 col-6 text-end" id="amount"></div>
                </div>
                <div class="row p-4 border-bottom align-items-center">
                    <div class="col-6">
                        <h6 class="fw-bolder">Location </h6>
                    </div>
                    <div class="col-6  text-end" id="location"></div>
                </div>
                <div class="row p-4 border-bottom align-items-center">
                    <div class="col-6">
                        <h6 class="fw-bolder">Wedding Date</h6>
                    </div>
                    <div class="col-6  text-end" id="date"></div>
                </div>
                <div class="row p-4 border-bottom align-items-center">
                    <div class="col-6">
                        <h6 class="fw-bolder">Attendees</h6>
                    </div>
                    <div class="col-6  text-end" id="guests"></div>
                </div>
                <div class="row p-4 border-bottom align-items-center bg-light-gray">
                    <div class="col-6">
                        <h6 class="fw-bolder">Total : </h6>
                    </div>
                    <div class="col-6  text-end" id="total"></div>
                </div>
            </div>
            <div class="modal-footer mx-auto">
                <div id="decline_btn"></div>
                <div id="accept_btn"></div>
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
                    your space</h1><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control btn btn-default rounded-0"
                                    id="exampleInputEmail1" placeholder="Email or phone number">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control btn btn-default rounded-0"
                                    id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label mt-2 mb-2"></label>
                                <a style="height:46px;width:510;background-color:#003B95;color:#FFFFFF"
                                    type="password" class="form-control btn btn-info rounded-0" href="#"
                                    id="exampleInputPassword1">Sign
                                    up</a><br>
                                <p style="height:39px;width:460px;color:#6B6B6B;padding-right:50px;text-align:center">
                                    By clicking Sign up, you agree to <span
                                        style="text-decoration:underline;">Eventopia
                                        Services Agreement and
                                        Privacy Policy.</span></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer mt-0 mb-5">
                <p style="height:39px;width:490px;color:#313131;text-align:center;"> <b>Eventopia will send you
                        deals, inspiration, and marketing emails. You can opt out at any time from your account
                        settings.</b></p><br>

                <label style="height:771;width:600;margin-right:50px;"
                    class="custom-control custom-checkbox mt-4 mb-3">
                    <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                    <span class="custom-control-label">I don't want to receive marketing emails from
                        Eventopia.</span>
                </label>
                <div>
                    <h6 style="height:17;width:216;margin-right:142px;"><b>Already have an account? <span
                                style="color:#006CE4">Login</span></b></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!--account add-entertainment-->
<div class="modal fade" id="add-entertainment">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal">
            <div class="modal-header">
                <h2 class="modal-title text-center text-dark">Create an account to list
                    your space</h2><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body pb-0">
                    <form>
                        <div class="">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control text-start btn btn-default rounded-0"
                                    id="exampleInputEmail1" placeholder="Email or phone number">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control text-start btn btn-default rounded-0"
                                    id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label mt-2 mb-2"></label>
                                <a style="height:46px;width:510;background-color:#003B95;color:#FFFFFF"
                                    type="password" class="form-control btn btn-info rounded-0" href="#"
                                    id="exampleInputPassword1">Sign
                                    up</a><br>
                                <p style="height:39px;width:460px;color:#6B6B6B;padding-right:50px;text-align:center">
                                    By clicking Sign up, you agree to <span
                                        style="text-decoration:underline;">Eventopia
                                        Services Agreement and
                                        Privacy Policy.</span></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer mt-0 mb-5">
                <p style="height:39px;width:490px;color:#313131;text-align:center;"> <b>Eventopia will send you
                        deals, inspiration, and marketing emails. You can opt out at any time from your account
                        settings.</b></p><br>

                <label style="height:771;width:600;margin-right:50px;"
                    class="custom-control custom-checkbox mt-4 mb-3">
                    <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                    <span class="custom-control-label">I don't want to receive marketing emails from
                        Eventopia.</span>
                </label>
                <div>
                    <h6 style="height:17;width:216;margin-right:142px;"><b>Already have an account? <span
                                style="color:#006CE4">Login</span></b></h6>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="popular-catagories-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal">
            <div class="modal-header border-0">
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="p-3">
                    <h2 class="text-center fw-bolder">Popular Activities</h2>
                </div>
                <div class="row">
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text><p>Audio Recording</p></a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text><p>Corporate Event</p></a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text><p>Dinner</p></a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text><p>Film Shoot</p></a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text><p>Fitness Class</p></a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text><p>Meeting</p></a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text><p>Networking Event</p></a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text><p>Party</p></a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text><p>Performance</p></a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text><p>Photo Shoot</p></a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text><p>Pop-Up</p></a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text><p>Retreat</p></a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text><p>Wedding</p></a>
                    </div>
                    <div class="col-6 py-4 px-5 fs-6">
                        <a class="text-dark" href="javascript:void(0);" data-select-text><p>Workshop</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Signup-Modal-->
<div class="modal fade" id="signup-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal">
            <div class="modal-header">
                <h1 style="text-align:center;color:#000017" class="modal-title">Create an account to book
                    a space</h1><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control btn btn-default rounded-0"
                                    id="exampleInputEmail1" placeholder="Email or phone number">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control btn btn-default rounded-0"
                                    id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label mt-2 mb-2"></label>
                                <a style="height:46px;width:510;background-color:#003B95;color:#FFFFFF"
                                    type="password" class="form-control btn btn-info rounded-0" href="#"
                                    id="exampleInputPassword1">Sign up</a><br>
                                <p style="height:39px;width:460px;color:#6B6B6B;padding-right:50px;text-align:center">
                                    By clicking Sign up, you agree to <span
                                        style="text-decoration:underline;">Eventopia Services Agreement and
                                        Privacy Policy.</span></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
