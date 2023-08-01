            <!--app-sidebar-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar bg-primary">
                    <div class="main-sidemenu">
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group mt-4 ms-3 me-3">
                                    <select name="lisitng" class="form-control text-white form-select select2"
                                        data-bs-placeholder="Select listing">
                                        <option value="br"> Birthday event </option>
                                        <option value="cz">Party</option>
                                        <option value="de">Testing</option>
                                        <option value="pl" selected>Hall</option>
                                    </select>
                                </div>
                            </div>
                            <div class="offset-md-4 col-5">
                                <div class="form-group mt-4 text-md-end">
                                    <a class="btn text-white" href="{{ URL('/operating-hours') }}">Operating Hours</a>
                                    <a class="modal-effect btn bg-white" data-bs-effect="effect-scale"
                                        data-bs-toggle="modal" href="#blockTimeModal">Block Time</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>
            <!--app-sidebar-->
