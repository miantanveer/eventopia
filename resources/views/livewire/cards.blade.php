@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                         <!-- PAGE-HEADER -->
                         <div class="page-header">
                            <h1 class="page-title">Cards</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cards</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-xl-4">
                                <div class="card text-primary bg-primary-transparent">
                                    <div class="card-body">
                                        <h4 class="card-title">Primary transparent card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card text-secondary bg-secondary-transparent">
                                    <div class="card-body">
                                        <h4 class="card-title">Secondary transparent card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card text-success bg-success-transparent">
                                    <div class="card-body">
                                        <h4 class="card-title">Success transparent card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card text-danger bg-danger-transparent">
                                    <div class="card-body">
                                        <h4 class="card-title">Danger transparent card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card text-info bg-info-transparent">
                                    <div class="card-body">
                                        <h4 class="card-title">Info transparent card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12  col-xl-4">
                                <div class="card text-warning bg-warning-transparent">
                                    <div class="card-body">
                                        <h4 class="card-title">Warning card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="javascript:void(0)" class="card-link">Card link</a>
                                        <a href="javascript:void(0)" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Card-Header</div>
                                    </div>
                                    <div class="card-body">
                                        <p class="">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-title">Card-footer</div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card text-end">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 CLOSED -->

                        <!-- ROW-3 OPEN -->
                        <div class="row row-cols-4">
                            <div class="col-xl-3 col-sm-12">
                                <div class="card border p-0">
                                    <div class="card-header">
                                        <h3 class="card-title">Contact card</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <span class="avatar avatar-xxl brround cover-image" data-bs-image-src="{{asset('assets/images/users/15.jpg')}}" style="background: url(&quot;{{asset('assets/images/users/15.jpg')}}&quot;) center center;"></span>
                                        <h4 class="h4 mb-0 mt-3">Mike Rowe-Soft</h4>
                                        <p class="card-text">Web designer</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row user-social-detail">
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href=""><i class="fa fa-google"></i></a>
                                            </div>
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href=""><i class="fa fa-facebook"></i></a>
                                            </div>
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href=""><i class="fa fa-twitter"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-3 col-sm-12">
                                <div class="card border p-0">
                                    <div class="card-header">
                                        <h3 class="card-title">Contact card</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <span class="avatar avatar-xxl brround cover-image" data-bs-image-src="{{asset('assets/images/users/15.jpg')}}" style="background: url(&quot;{{asset('assets/images/users/15.jpg')}}&quot;) center center;"></span>
                                        <h4 class="h4 mb-0 mt-3">Laura Norda</h4>
                                        <p class="card-text">Web designer</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row user-social-detail">
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href=""><i class="fa fa-google"></i></a>
                                            </div>
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href=""><i class="fa fa-facebook"></i></a>
                                            </div>
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href=""><i class="fa fa-twitter"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-3 col-sm-12">
                                <div class="card border p-0">
                                    <div class="card-header">
                                        <h3 class="card-title">Contact card</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <span class="avatar avatar-xxl brround cover-image" data-bs-image-src="{{asset('assets/images/users/15.jpg')}}" style="background: url(&quot;{{asset('assets/images/users/15.jpg')}}&quot;) center center;"></span>
                                        <h4 class="h4 mb-0 mt-3">Willie Makit</h4>
                                        <p class="card-text">Web designer</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row user-social-detail">
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href=""><i class="fa fa-google"></i></a>
                                            </div>
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href=""><i class="fa fa-facebook"></i></a>
                                            </div>
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href=""><i class="fa fa-twitter"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-12">
                                <div class="card border p-0">
                                    <div class="card-header">
                                        <h3 class="card-title">Contact card</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <span class="avatar avatar-xxl brround cover-image" data-bs-image-src="{{asset('assets/images/users/15.jpg')}}" style="background: url(&quot;{{asset('assets/images/users/15.jpg')}}&quot;) center center;"></span>
                                        <h4 class="h4 mb-0 mt-3">Don Messwidme</h4>
                                        <p class="card-text">Web designer</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row user-social-detail">
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href=""><i class="fa fa-google"></i></a>
                                            </div>
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href=""><i class="fa fa-facebook"></i></a>
                                            </div>
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href=""><i class="fa fa-twitter"></i></a>
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
                            <div class="col-md-12 col-xl-4">
                                <div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <h4 class="card-title">Primary card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card text-white bg-secondary">
                                    <div class="card-body">
                                        <h4 class="card-title">Secondary card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card text-white bg-success">
                                    <div class="card-body">
                                        <h4 class="card-title">Success card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card text-white bg-danger">
                                    <div class="card-body">
                                        <h4 class="card-title">Danger card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card text-white bg-info">
                                    <div class="card-body">
                                        <h4 class="card-title">Info card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12  col-xl-4">
                                <div class="card text-white bg-warning">
                                    <div class="card-body">
                                        <h4 class="card-title">Warning card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic card</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet </div>
                                    <div class="card-footer">
                                        This is Basic card footer
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header bg-primary br-te-3 br-ts-3">
                                        <h3 class="card-title text-white">Basic color card-header</h3>
                                        <div class="card-options ">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x text-white"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                    <div class="card-footer">
                                        This is Basic card footer
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic color card-footer</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                    <div class="card-footer bg-danger br-be-3 br-bs-3">
                                        <div class="text-white">Basic card footer</div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12  col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Panel with custom buttons</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="btn btn-primary btn-sm">Action 1</a>
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm ms-2">Action 2</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12  col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Card with search form</h3>
                                        <div class="card-options">
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
                                                    <span class="input-group-btn ms-0">
                                                            <button class="btn btn-sm btn-primary" type="submit">
                                                                <span class="fe fe-search text-white"></span>
                                                    </button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12  col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Card with alert</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-alert alert alert-success mb-0">
                                        Adding action was successful
                                    </div>
                                    <div class="card-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12  col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Card with alert</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-alert alert alert-danger mb-0">
                                        Adding action failed
                                    </div>
                                    <div class="card-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12  col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">fullscreen button</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="javascript:void(0)" class="card-options-fullscreen" data-bs-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Card with switch</h3>
                                        <div class="card-options">
                                            <label class="custom-switch m-0">
                                                    <input type="checkbox" value="1" class="custom-switch-input" checked="">
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card card-collapsed">
                                    <div class="card-header">
                                        <h3 class="card-title">Initial collapsed card</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-4 CLOSED -->

                        <!-- ROW-5 OPEN -->
                        <div class="row">
                            <div class="col-xl-4 col-md-12">
                                <div class="card overflow-hidden">
                                    <img src="{{asset('assets/images/media/8.jpg')}}" class="card-img-top" alt="img">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                    <img src="{{asset('assets/images/media/9.jpg')}}" class="card-img-bottom" alt="img">
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <img src="{{asset('assets/images/media/media1.jpg')}}" class="card-img-top" alt="img">
                                    <div class="card-body border-bottom">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <div class="card-body border-top">
                                        <a href="javascript:void(0)" class="card-link">Card link</a>
                                        <a href="javascript:void(0)" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-5 CLOSED -->

                        <!-- ROW-6 OPEN -->
                        <div class="row ">
                            <div class="col-md-12 col-xl-4">
                                <div class="card ">
                                    <div class="card-body text-start">
                                        <blockquote class="quote">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <small class="text-muted">
                                                        so awesome this title <cite title="Source Title">-magna aliqua</cite>
                                                    </small>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card ">
                                    <div class="card-body text-center">
                                        <blockquote class="quote">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <small class="text-muted">
                                                        so awesome this title <cite title="Source Title">-magna aliqua</cite>
                                                    </small>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card ">
                                    <div class="card-body text-end">
                                        <blockquote class="quote">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <small class="text-muted">
                                                        so awesome this title <cite title="Source Title">-magna aliqua</cite>
                                                    </small>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class=" col-xl-4 col-md-12 ">
                                <div class="card m-b-20">
                                    <div class="card-header">
                                        <h3 class="card-title">Card With List</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="visitor-list">
                                            <div class="media m-0 mt-0 border-bottom">
                                                <img class="avatar brround avatar-md me-3" alt="avatra-img" src="{{asset('assets/images/users/18.jpg')}}">
                                                <div class="media-body">
                                                    <a href="" class="text-default fw-semibold">John Paige</a>
                                                    <p class="text-muted ">Uploaded new invoices for RedBus</p>
                                                </div>
                                            </div>
                                            <div class="media mt-2 border-bottom">
                                                <img class="avatar brround avatar-md me-3" alt="avatra-img" src="{{asset('assets/images/users/20.jpg')}}">
                                                <div class="media-body">
                                                    <a href="" class="text-default fw-semibold">Lillian Quinn</a>
                                                    <p class="text-muted">Created new work flow for the current</p>
                                                </div>
                                            </div>
                                            <div class="media mt-2">
                                                <img class="avatar brround avatar-md me-3" alt="avatra-img" src="{{asset('assets/images/users/18.jpg')}}">
                                                <div class="media-body">
                                                    <a href="" class="text-default fw-semibold">Irene Harris</a>
                                                    <p class="text-muted mb-0">Submitted the project schedule to the manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-4 col-md-12">
                                <div class="card m-b-20">
                                    <div class="card-header">
                                        <h3 class="card-title">Sample card</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>Put toy mouse in food bowl run out of litter box at full speed drool but pee in Put toy mouse Put toy mouse the shoe purr when being pet but chew foot.</p>
                                        <p class="mb-0">Scratch the postman wake up lick paw Duis aute irure dolor in reprehenderit wake up owner meow meow lick plastic bags Scratch the postman wake up lick paw wake Duis aute irure dolor having their mate disturbing sleeping
                                            humans.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-4 col-md-12">
                                <div class="card d-flex m-b-20">
                                    <div class="card-header">
                                        <h3 class="card-title">Card with Toolbar</h3>
                                        <div class="card-options">
                                            <a class="text-gray" href="javascript:void(0)">
                                                <i class="mdi mdi-refresh"></i>
                                            </a>
                                            <a class="text-gray" href="javascript:void(0)">
                                                <i class="mdi mdi-bookmark-outline"></i>
                                            </a>
                                            <a class="text-gray" href="javascript:void(0)">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>Put toy mouse in food bowl run out of litter box at full speed drool but pee in Put toy mouse Put toy mouse the shoe purr when being pet but chew foot.</p>
                                        <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit Scratch the postman wake up lick paw wake up owner meow meow lick plastic bags Scratch the postman wake up lick paw wake having their mate disturbing sleeping
                                            humans.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-6 CLOSED -->

                        <!-- ROW-7 OPEN -->
                        <div class="row ">
                            <div class="col-md-12 col-xl-4">
                                <div class="card card-blog-overlay1 overflow-hidden">
                                    <div class="card-body  text-white">
                                        <h3 class="card-title text-white">card-with image</h3>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                    <div class="card-footer  text-white z-index2 border-transparent">
                                        This is Basic card footer
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card card-blog-overlay2  overflow-hidden">
                                    <div class="card-body  text-white">
                                        <h3 class="card-title text-white">card-with image</h3>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                    <div class="card-footer text-white z-index2 border-transparent">
                                        This is Basic card footer
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card card-blog-overlay  overflow-hidden">
                                    <div class="card-header z-index2  border-transparent">
                                        <h3 class="card-title text-white ">card-with image</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x text-white"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body  text-white">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-7 CLOSED -->

                        <!-- ROW-8 OPEN -->
                        <div class="row">
                            <div class="col-md-12  col-xl-6">
                                <div class="card">
                                    <div class="card-status bg-blue br-te-7 br-ts-7"></div>
                                    <div class="card-header">
                                        <h3 class="card-title">Card blue</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-status card-status-left bg-red br-bs-7 br-ts-7"></div>
                                    <div class="card-header">
                                        <h3 class="card-title">Card status on left side</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-8 CLOSED -->

                        <!-- ROW-9 OPEN -->
                        <div class="row">
                            <div class="col-md-12  col-xl-6">
                                <div class="card">
                                    <div class="row g-0">
                                        <div class="col-md-4 pe-3 pe-md-0">
                                            <img src="{{asset('assets/images/media/22.jpg')}}" class="card-img-left h-100" alt="img">
                                        </div>
                                        <div class="col-md-8 ps-3 ps-md-0">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12  col-xl-6">
                                <div class="card">
                                    <div class="row g-0">
                                        <div class="col-md-8 pe-3 pe-md-0">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 ps-3 ps-md-0">
                                            <img src="{{asset('assets/images/media/22.jpg')}}" class="card-img-right h-100" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-9 CLOSED -->

                        <!-- ROW-10 OPEN -->
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="mb-5 card-group overflow-hidden">
                                    <div class="card border-end shadow-none">
                                        <img src="{{asset('assets/images/media/22.jpg')}}" class="card-img-top" alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card border-end shadow-none">
                                        <img src="{{asset('assets/images/media/18.jpg')}}" class="card-img-top" alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card shadow-none">
                                        <img src="{{asset('assets/images/media/6.jpg')}}" class="card-img-top" alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="panel panel-primary">
                                            <div class="tab-menu-heading tab-menu-heading-boxed">
                                                <div class="tabs-menu-boxed">
                                                    <!-- Tabs -->
                                                    <ul class="nav panel-tabs fs-14">
                                                        <li><a href="#activetabs" class="active" data-bs-toggle="tab">Active</a></li>
                                                        <li><a href="#linktabs" data-bs-toggle="tab">Link</a></li>
                                                        <li><a class="disable" href="#disabletabs" data-bs-toggle="tab">Disabled</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body tabs-menu-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="activetabs">
                                                        <h5 class="card-title">Special title treatment 01</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                    <div class="tab-pane" id="linktabs">
                                                        <h5 class="card-title">Special title treatment 02</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                    <div class="tab-pane disabled" id="disabletabs"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <div class="card card-headpills">
                                    <div class="card-header border-bottom">
                                        <ul class="nav nav-pills card-header-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#activepills">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#linkpills">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled" data-bs-toggle="tab" href="#disablepills" tabindex="-1" aria-disabled="true">Disabled</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="activepills">
                                                <h5 class="card-title">Special title treatment 01</h5>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                            <div class="tab-pane" id="linkpills">
                                                <h5 class="card-title">Special title treatment 02</h5>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                            <div class="tab-pane disabled" id="disablepills"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-10 CLOSED -->

        @endsection

    @section('scripts')



    @endsection
