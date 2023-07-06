@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                          <!-- PAGE-HEADER -->
                          <div class="page-header">
                            <h1 class="page-title">Alerts</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Componets</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Alerts</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card border p-0 pb-3">
                                    <div class="card-header border-0 pt-3">
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 24 24"><path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span>
                                        <h4 class="h4 mb-0 mt-3">Warning</h4>
                                        <p class="card-text">Are you sure you want to delete 20 items</p>
                                    </div>
                                    <div class="card-footer text-center border-0 pt-0">
                                        <div class="row">
                                            <div class="text-center">
                                                <a href="javascript:void(0)" class="btn btn-white me-2">cancel</a>
                                                <a href="javascript:void(0)" class="btn btn-danger">delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-3">
                                <div class="card border p-0 pb-3">
                                    <div class="card-header border-0 pt-3">
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 24 24"><path fill="#fad383" d="M15.728,22H8.272a1.00014,1.00014,0,0,1-.707-.293l-5.272-5.272A1.00014,1.00014,0,0,1,2,15.728V8.272a1.00014,1.00014,0,0,1,.293-.707l5.272-5.272A1.00014,1.00014,0,0,1,8.272,2H15.728a1.00014,1.00014,0,0,1,.707.293l5.272,5.272A1.00014,1.00014,0,0,1,22,8.272V15.728a1.00014,1.00014,0,0,1-.293.707l-5.272,5.272A1.00014,1.00014,0,0,1,15.728,22Z"/><circle cx="12" cy="16" r="1" fill="#f7b731"/><path fill="#f7b731" d="M12,13a1,1,0,0,1-1-1V8a1,1,0,0,1,2,0v4A1,1,0,0,1,12,13Z"/></svg></span>
                                        <h4 class="h4 mb-0 mt-3">Alert</h4>
                                        <p class="card-text">Are you sure you want to end current services</p>
                                    </div>
                                    <div class="card-footer text-center border-0 pt-0">
                                        <div class="row">
                                            <div class="text-center">
                                                <a href="javascript:void(0)" class="btn btn-white me-2">cancel</a>
                                                <a href="javascript:void(0)" class="btn btn-warning">End</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-3">
                                <div class="card border p-0 pb-3">
                                    <div class="card-header border-0 pt-3">
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 24 24"><path fill="#13bfa6" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99"/><path fill="#71d8c9" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z"/></svg></span>
                                        <h4 class="h4 mb-0 mt-3">Success</h4>
                                        <p class="card-text">Sent successfully</p>
                                    </div>
                                    <div class="card-footer text-center border-0 pt-0">
                                        <div class="row">
                                            <div class="text-center">
                                                <a href="javascript:void(0)" class="btn btn-success">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card border p-0 pb-3">
                                    <div class="card-header border-0 pt-3">
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#05c3fb" d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z"/></svg></span>
                                        <h4 class="h4 mb-0 mt-3">Processing</h4>
                                        <p class="card-text">Your process currently in progress</p>
                                    </div>
                                    <div class="card-footer text-center border-0 pt-0">
                                        <div class="row">
                                            <div class="text-center">
                                                <a href="javascript:void(0)" class="btn btn-white me-2">cancel</a>
                                                <a href="javascript:void(0)" class="btn btn-secondary">Stop</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Default alerts</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Add <code class="highlighter-rouge">class="alert alert-primary|secondary|success|info|warning|danger"</code> use one of the <b>required</b> class.</p>
                                            <div class="example">
                                                <div class="alert alert-primary" role="alert">
                                                    Primary alert—At vero eos et accusamus praesentium!
                                                </div>
                                                <div class="alert alert-secondary" role="alert">
                                                    Secondary alert—At vero eos et accusamus praesentium!
                                                </div>
                                                <div class="alert alert-success" role="alert">
                                                    Success alert—At vero eos et accusamus praesentium!
                                                </div>
                                                <div class="alert alert-info" role="alert">
                                                    Info alert—At vero eos et accusamus praesentium!
                                                </div>
                                                <div class="alert alert-warning" role="alert">
                                                    Warning alert—At vero eos et accusamus praesentium!
                                                </div>
                                                <div class="alert alert-danger" role="alert">
                                                    Danger alert—At vero eos et accusamus praesentium!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Links in alerts</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Add <code class="highlighter-rouge">.alert-link</code> class to quickly provide matching colored links within any alert</p>
                                            <div class="example">
                                                <div class="alert alert-primary" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Well done!</strong> You successfully read <a href="javascript:void(0)" class="alert-link">this important alert message.</a>
                                                </div>
                                                <div class="alert alert-secondary" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Well done!</strong> You successfully read <a href="javascript:void(0)" class="alert-link">this important alert message.</a>
                                                </div>
                                                <div class="alert alert-success" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Well done!</strong> You successfully read <a href="javascript:void(0)" class="alert-link">this important alert message.</a>
                                                </div>
                                                <div class="alert alert-info" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Heads up!</strong> This<a href="javascript:void(0)" class="alert-link"> alert needs your attention,</a> but it's not super important.
                                                </div>
                                                <div class="alert alert-warning" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Warning! </strong> Better check yourself, you're <a href="javascript:void(0)" class="alert-link">not looking too good.</a>
                                                </div>
                                                <div class="alert alert-danger" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Oh snap!</strong> <a href="javascript:void(0)" class="alert-link">Change a few things up </a>and try submitting again.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-2 CLOSED -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Alert with icon</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Add <code class="highlighter-rouge">.alert-icon</code> class.</p>
                                            <div class="example">
                                                <div class="alert alert-success" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.
                                                </div>
                                                <div class="alert alert-info" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <i class="fa fa-bell-o me-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.
                                                </div>
                                                <div class="alert alert-warning" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <i class="fa fa-exclamation me-2" aria-hidden="true"></i> Warning! Better check yourself, you're not looking too good.
                                                </div>
                                                <div class="alert alert-danger" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <i class="fa fa-frown-o me-2" aria-hidden="true"></i>Oh snap!Change a few things up and try submitting again.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Alert with avatar</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Add <code class="highlighter-rouge">.alert-avatar</code> class.</p>
                                            <div class="example">
                                                <div class="alert alert-avatar alert-primary alert-dismissible">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/14.jpg')}}"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                </div>
                                                <div class="alert alert-avatar  alert-success alert-dismissible">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/5.jpg')}}"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                </div>
                                                <div class="alert alert-avatar  alert-warning alert-dismissible">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/15.jpg')}}"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                </div>
                                                <div class="alert alert-avatar  alert-danger alert-dismissible">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <span class="avatar brround cover-image" data-bs-image-src="{{asset('assets/images/users/6.jpg')}}"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-3 CLOSED -->

                        <!-- ROW-4 OPEN -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Alerts With Icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Add <code class="highlighter-rouge">.alert-avatar</code> class.</p>
                                            <div class="example">
                                                <div class="alert alert-default" role="alert">
                                                    <span class="alert-inner--icon"><i class="fe fe-download"></i></span>
                                                    <span class="alert-inner--text"><strong>Default!</strong> This is a warning alert—check it out that has an icon too!</span>
                                                </div>
                                                <div class="alert alert-primary" role="alert">
                                                    <span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
                                                    <span class="alert-inner--text"><strong>Primary!</strong> This is a warning alert—check it out that has an icon too!</span>
                                                </div>
                                                <div class="alert alert-success" role="alert">
                                                    <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
                                                    <span class="alert-inner--text"><strong>Success!</strong> This is a warning alert—check it out that has an icon too!</span>
                                                </div>
                                                <div class="alert alert-info" role="alert">
                                                    <span class="alert-inner--icon"><i class="fe fe-bell"></i></span>
                                                    <span class="alert-inner--text"><strong>Info!</strong> This is a warning alert—check it out that has an icon too!</span>
                                                </div>
                                                <div class="alert alert-warning" role="alert">
                                                    <span class="alert-inner--icon"><i class="fe fe-info"></i></span>
                                                    <span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out that has an icon too!</span>
                                                </div>
                                                <div class="alert alert-danger mb-0" role="alert">
                                                    <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                                    <span class="alert-inner--text"><strong>Danger!</strong> This is a warning alert—check it out that has an icon too!</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class=" card-title mb-0">Alerts With Icons Dismissing</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Add <code class="highlighter-rouge">.alert-dismissible</code> class.</p>
                                            <div class="example">
                                                <div class="alert alert-default alert-dismissible fade show" role="alert">
                                                    <span class="alert-inner--icon"><i class="fe fe-download"></i></span>
                                                    <span class="alert-inner--text"><strong>Default!</strong> This is a default alert—check it out!</span>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                </div>
                                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                    <span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
                                                    <span class="alert-inner--text"><strong>Primary!</strong> This is a primary alert—check it out!</span>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                </div>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
                                                    <span class="alert-inner--text"><strong>Success!</strong> This is a success alert—check it out!</span>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                </div>
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <span class="alert-inner--icon"><i class="fe fe-info"></i></span>
                                                    <span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out!</span>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                </div>
                                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                    <span class="alert-inner--icon"><i class="fe fe-bell"></i></span>
                                                    <span class="alert-inner--text"><strong>Info!</strong> This is a info alert—check it out!</span>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                </div>
                                                <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                                    <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                                    <span class="alert-inner--text"><strong>Danger!</strong> This is a danger alert—check it out!</span>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-4 CLOSED -->

                        <!-- ROW-5 OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Alerts style</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap mb-4">
                                            <div class="">
                                                <div class="alert alert-success">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 24 24"><path fill="#13bfa6" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99"/><path fill="#71d8c9" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z"/></svg></span>
                                                    <strong>Success Message</strong>
                                                    <hr class="message-inner-separator">
                                                    <p>You successfully read this important alert message.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-wrap mb-4">
                                            <div class="">
                                                <div class="alert alert-info">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 24 24"><path fill="#70a9ee" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#1170e4"/><path fill="#1170e4" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span>
                                                    <strong>Info Message</strong>
                                                    <hr class="message-inner-separator">
                                                    <p>This alert needs your attention, but it's not super important.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-wrap mb-4">
                                            <div class="">
                                                <div class="alert alert-warning">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 24 24"><path fill="#fad383" d="M15.728,22H8.272a1.00014,1.00014,0,0,1-.707-.293l-5.272-5.272A1.00014,1.00014,0,0,1,2,15.728V8.272a1.00014,1.00014,0,0,1,.293-.707l5.272-5.272A1.00014,1.00014,0,0,1,8.272,2H15.728a1.00014,1.00014,0,0,1,.707.293l5.272,5.272A1.00014,1.00014,0,0,1,22,8.272V15.728a1.00014,1.00014,0,0,1-.293.707l-5.272,5.272A1.00014,1.00014,0,0,1,15.728,22Z"/><circle cx="12" cy="16" r="1" fill="#f7b731"/><path fill="#f7b731" d="M12,13a1,1,0,0,1-1-1V8a1,1,0,0,1,2,0v4A1,1,0,0,1,12,13Z"/></svg></span>
                                                    <strong>Warning Message</strong>
                                                    <hr class="message-inner-separator">
                                                    <p>Best check yo self, you're not looking too good</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-wrap">
                                            <div class="">
                                                <div class="alert alert-danger">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 24 24"><path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span>
                                                    <strong>Danger Message</strong>
                                                    <hr class="message-inner-separator">
                                                    <p>Change a few things up and try submitting again.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-5 CLOSED -->

        @endsection

    @section('scripts')



    @endsection
