@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">File Manager</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Componets</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">file-manager</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row row-sm">
                            <div class="col-lg-5 col-xl-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <button class="btn btn-primary btn-block" data-bs-target="#createfile" data-bs-toggle="modal"><i class="fe fe-plus me-1"></i> Create New File</button>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="list-group list-group-transparent mb-0 file-manager">
                                            <div class="d-flex">
                                                <div>
                                                    <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0">
                                                        <i class="fe fe-image fs-18 me-2 text-success p-2"></i>Images
                                                    </a>
                                                </div>
                                                <div class="text-end ms-auto mt-3">
                                                    <span class="fs-11  text-dark">20 MB</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs mb-3 ms-2">
                                                <div class="progress-bar bg-green" style="width: 30%;"></div>
                                            </div>
                                            <div class="d-flex">
                                                <div>
                                                    <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0">
                                                        <i class="fe fe-video fs-18 me-2 text-secondary p-2"></i>Videos
                                                    </a>
                                                </div>
                                                <div class="text-end ms-auto mt-3">
                                                    <span class="fs-11  text-dark">32.5 MB</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs mb-3 ms-2">
                                                <div class="progress-bar bg-secondary" style="width: 40%;"></div>
                                            </div>
                                            <div class="d-flex">
                                                <div>
                                                    <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0">
                                                        <i class="fe fe-file-text fs-18 me-2 text-primary p-2"></i> Docs
                                                    </a>
                                                </div>
                                                <div class="text-end ms-auto mt-3">
                                                    <span class="fs-11  text-dark">14.2 MB</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs mb-3 ms-2">
                                                <div class="progress-bar bg-primary" style="width: 25%;"></div>
                                            </div>
                                            <div class="d-flex">
                                                <div>
                                                    <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0">
                                                        <i class="fe fe-music fs-18 me-2 text-warning p-2"></i> Music
                                                    </a>
                                                </div>
                                                <div class="text-end ms-auto mt-3">
                                                    <span class="fs-11  text-dark">13 MB</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs mb-3 ms-2">
                                                <div class="progress-bar bg-warning" style="width: 30%;"></div>
                                            </div>
                                            <div class="d-flex">
                                                <div>
                                                    <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0">
                                                        <i class="fe fe-download fs-18 me-2 text-info p-2"></i> Downloads
                                                    </a>
                                                </div>
                                                <div class="text-end ms-auto mt-3">
                                                    <span class="fs-11  text-dark">19.3 MB</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs mb-3 ms-2">
                                                <div class="progress-bar bg-info" style="width: 40%;"></div>
                                            </div>
                                            <div class="d-flex">
                                                <div>
                                                    <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0">
                                                        <i class="fe fe-grid fs-18 me-2 text-danger p-2"></i> More
                                                    </a>
                                                </div>
                                                <div class="text-end ms-auto mt-3">
                                                    <span class="fs-11  text-dark">23 MB</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs mb-3 ms-2">
                                                <div class="progress-bar bg-danger" style="width: 45%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="list-group list-group-transparent mb-0">
                                            <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0 py-2">
                                                <span class="text-primary me-2 fs-12"><i class="fe fe-circle"></i></span>Remote Control
                                            </a>
                                            <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0 py-2">
                                                <span class="text-secondary me-2 fs-12"><i class="fe fe-circle"></i></span>Google Drive
                                            </a>
                                            <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0 py-2">
                                                <span class="text-danger me-2 fs-12"><i class="fe fe-circle"></i></span>FTP Files
                                            </a>
                                            <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0 py-2">
                                                <span class="text-warning me-2 fs-12"><i class="fe fe-circle"></i></span>Transfer files
                                            </a>
                                            <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0 py-2">
                                                <span class="text-success me-2 fs-12"><i class="fe fe-circle"></i></span>Deep Clean
                                            </a>
                                            <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0 py-2">
                                                <span class="text-info me-2 fs-12"><i class="fe fe-circle"></i></span>Favourities
                                            </a>
                                            <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0 py-2">
                                                <span class="text-pink me-2 fs-12"><i class="fe fe-circle"></i></span>Settings
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" class="file-manager-image"><img src="{{asset('assets/images/media/folder1.png')}}" alt="img"></a>
                                            <h3 class="ms-3 mt-5 fw-semibold">467 Files</h3>
                                            <div class="ms-5 ms-auto">
                                                <a href="javascript:void(0)" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical fs-18"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="javascript:void(0)">Internal Storage</a></li>
                                                    <li><a href="javascript:void(0)">External Storage</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs mb-3">
                                            <div class="progress-bar bg-warning" style="width: 60%;"></div>
                                        </div>
                                        <div class="">
                                            <div class="d-flex">
                                                <div class="d-flex">
                                                    <div>
                                                        <h6 class="mt-2"><i class="fe fe-circle text-success fs-12"></i> Total Storage</h6>
                                                        <span class="text-muted">128 GB</span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto my-auto">
                                                    <h6 class="mt-2"><i class="fe fe-circle text-danger fs-12"></i> Used</h6>
                                                    <span class="text-muted">100 GB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-xl-9">
                                <div class="row row-sm">
                                    <div class="text-dark mb-2 ms-1 fs-20 fw-semibold">All Folders</div>
                                    <div class="col-xl-3 col-md-6 col-sm-6">
                                        <div class="card pos-relative">
                                            <a href="{{url('filemanager-list')}}" class="open-file"></a>
                                            <div class="card-body px-4 pt-4 pb-2">
                                                <div class="d-flex">
                                                    <span class="bg-primary-transparent border border-primary brround">
                                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                            <path fill="#645acf" d="M9.3 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4H10L12 6H20C21.1 6 22 6.9 22 8V14.6C20.6 13.6 18.9 13 17 13C13.5 13 10.4 15.1 9.1 18.3L8.8 19L9.1 19.7C9.2 19.8 9.2 19.9 9.3 20M23 19C22.1 21.3 19.7 23 17 23S11.9 21.3 11 19C11.9 16.7 14.3 15 17 15S22.1 16.7 23 19M19.5 19C19.5 17.6 18.4 16.5 17 16.5S14.5 17.6 14.5 19 15.6 21.5 17 21.5 19.5 20.4 19.5 19M17 18C16.4 18 16 18.4 16 19S16.4 20 17 20 18 19.6 18 19 17.6 18 17 18" />
                                                        </svg>
                                                    </span>
                                                    <div class="ms-auto mt-1 file-dropdown">
                                                        <a href="javascript:void(0)" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer border-top-0">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="text-primary">Videos</h5>
                                                        <p class="text-muted fs-13 mb-0">35 Files</p>
                                                    </div>
                                                    <div class="ms-auto mt-4">
                                                        <h6 class="">23 MB</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-6">
                                        <div class="card pos-relative">
                                            <a href="{{url('filemanager-list')}}" class="open-file"></a>
                                            <div class="card-body px-4 pt-4 pb-2">
                                                <div class="d-flex">
                                                    <span class="bg-danger-transparent border border-danger brround">
                                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                            <path fill="#e82646" d="M19,20H4C2.89,20 2,19.1 2,18V6C2,4.89 2.89,4 4,4H10L12,6H19A2,2 0 0,1 21,8H21L4,8V18L6.14,10H23.21L20.93,18.5C20.7,19.37 19.92,20 19,20Z" />
                                                        </svg>
                                                    </span>
                                                    <div class="ms-auto mt-1 file-dropdown">
                                                        <a href="javascript:void(0)" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer border-top-0">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="text-danger">PPT</h5>
                                                        <p class="text-muted fs-13 mb-0">25 Files</p>
                                                    </div>
                                                    <div class="ms-auto mt-4">
                                                        <h6 class="">15 MB</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-6">
                                        <div class="card pos-relative">
                                            <a href="{{url('filemanager-list')}}" class="open-file"></a>
                                            <div class="card-body px-4 pt-4 pb-2">
                                                <div class="d-flex">
                                                    <span class="bg-success-transparent border border-success brround">
                                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                            <path fill="#09ad95" d="M10 4L12 6H20C21.1 6 22 6.89 22 8V18C22 19.1 21.1 20 20 20H4C2.89 20 2 19.1 2 18L2 6C2 4.89 2.89 4 4 4H10M19 9H15.5V13.06L15 13C13.9 13 13 13.9 13 15C13 16.11 13.9 17 15 17C16.11 17 17 16.11 17 15V11H19V9Z" />
                                                        </svg>
                                                    </span>
                                                    <div class="ms-auto mt-1 file-dropdown">
                                                        <a href="javascript:void(0)" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer border-top-0">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="text-teal">Music</h5>
                                                        <p class="text-muted fs-13 mb-0">25 Files</p>
                                                    </div>
                                                    <div class="ms-auto mt-4">
                                                        <h6 class="">15 MB</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-6">
                                        <div class="card pos-relative">
                                            <a href="{{url('filemanager-list')}}" class="open-file"></a>
                                            <div class="card-body px-4 pt-4 pb-2">
                                                <div class="d-flex">
                                                    <span class="bg-pink-transparent border border-pink brround">
                                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                            <path fill="#fc5296" d="M10,4L12,6H20A2,2 0 0,1 22,8V18A2,2 0 0,1 20,20H4C2.89,20 2,19.1 2,18V6C2,4.89 2.89,4 4,4H10M12.46,10.88L14.59,13L12.46,15.12L13.88,16.54L16,14.41L18.12,16.54L19.54,15.12L17.41,13L19.54,10.88L18.12,9.46L16,11.59L13.88,9.46L12.46,10.88Z" />
                                                        </svg>
                                                    </span>
                                                    <div class="ms-auto mt-1 file-dropdown">
                                                        <a href="javascript:void(0)" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer border-top-0">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="text-pink">XLS</h5>
                                                        <p class="text-muted fs-13 mb-0">25 Files</p>
                                                    </div>
                                                    <div class="ms-auto mt-4">
                                                        <h6 class="">15 MB</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-6">
                                        <div class="card pos-relative">
                                            <a href="{{url('filemanager-list')}}" class="open-file"></a>
                                            <div class="card-body px-4 pt-4 pb-2">
                                                <div class="d-flex">
                                                    <span class="bg-warning-transparent border border-warning brround">
                                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                            <path fill="#f7b731" d="M19,20H4C2.89,20 2,19.1 2,18V6C2,4.89 2.89,4 4,4H10L12,6H19A2,2 0 0,1 21,8H21L4,8V18L6.14,10H23.21L20.93,18.5C20.7,19.37 19.92,20 19,20Z" />
                                                        </svg>
                                                    </span>
                                                    <div class="ms-auto mt-1 file-dropdown">
                                                        <a href="javascript:void(0)" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer border-top-0">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="text-warning">PDF</h5>
                                                        <p class="text-muted fs-13 mb-0">25 Files</p>
                                                    </div>
                                                    <div class="ms-auto mt-4">
                                                        <h6 class="">15 MB</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-6">
                                        <div class="card pos-relative">
                                            <a href="{{url('filemanager-list')}}" class="open-file"></a>
                                            <div class="card-body px-4 pt-4 pb-2">
                                                <div class="d-flex">
                                                    <span class="bg-secondary-transparent border border-secondary brround">
                                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                            <path fill="#05c3fb" d="M20,6H12L10,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V8A2,2 0 0,0 20,6M15,16H6V14H15V16M18,12H6V10H18V12Z" />
                                                        </svg>
                                                    </span>
                                                    <div class="ms-auto mt-1 file-dropdown">
                                                        <a href="javascript:void(0)" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer border-top-0">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="text-secondary">TXT</h5>
                                                        <p class="text-muted fs-13 mb-0">25 Files</p>
                                                    </div>
                                                    <div class="ms-auto mt-4">
                                                        <h6 class="">15 MB</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-6">
                                        <div class="card pos-relative">
                                            <a href="{{url('filemanager-list')}}" class="open-file"></a>
                                            <div class="card-body px-4 pt-4 pb-2">
                                                <div class="d-flex">
                                                    <span class="bg-danger-transparent border border-orange brround">
                                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                            <path fill="#fc7303" d="M5,17L9.5,11L13,15.5L15.5,12.5L19,17M20,6H12L10,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V8A2,2 0 0,0 20,6Z" />
                                                        </svg>
                                                    </span>
                                                    <div class="ms-auto mt-1 file-dropdown">
                                                        <a href="javascript:void(0)" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer border-top-0">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="text-orange">Images</h5>
                                                        <p class="text-muted fs-13 mb-0">21 Files</p>
                                                    </div>
                                                    <div class="ms-auto mt-4">
                                                        <h6 class="">19 MB</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-6">
                                        <div class="card pos-relative">
                                            <a href="{{url('filemanager-list')}}" class="open-file"></a>
                                            <div class="card-body px-4 pt-4 pb-2">
                                                <div class="d-flex">
                                                    <span class="bg-info-transparent border border-info brround">
                                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                            <path fill="#1170e4" d="M20 6H12L10 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V8C22 6.9 21.1 6 20 6M18 12H16V14H18V16H16V18H14V16H16V14H14V12H16V10H14V8H16V10H18V12Z" />
                                                        </svg>
                                                    </span>
                                                    <div class="ms-auto mt-1 file-dropdown">
                                                        <a href="javascript:void(0)" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer border-top-0">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="text-info">ZIP</h5>
                                                        <p class="text-muted fs-13 mb-0">22 Files</p>
                                                    </div>
                                                    <div class="ms-auto mt-4">
                                                        <h6 class="">10 MB</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-dark mb-2 ms-1 fs-20 fw-semibold">Files</div>
                                <div class="row row-sm">
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}" class="mx-auto my-3"><img src="{{asset('assets/images/media/files/pdf.png')}}" alt="img"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h5 class="mb-0 fw-semibold text-break">file.pdf</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">32 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}"><img src="{{asset('assets/images/media/files/07.jpg')}}" alt="img" class="w-100 file-manager-list" ></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h5 class="mb-0 fw-semibold text-break">image1.jpg</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">76 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}" class="mx-auto my-3"><img src="{{asset('assets/images/media/files/excel.png')}}" alt="img"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h5 class="mb-0 fw-semibold text-break">excel.xls</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">34 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}"><img src="{{asset('assets/images/media/files/06.jpg')}}" alt="img" class="w-100 file-manager-list"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h5 class="mb-0 fw-semibold text-break">nature.jpg</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">66 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}" class="mx-auto my-3"><img src="{{asset('assets/images/media/files/ppt1.png')}}" alt="img"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h5 class="mb-0 fw-semibold text-break">demo.ppt</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">67 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}" class="mx-auto my-3"><img src="{{asset('assets/images/media/file-video.png')}}" alt="img"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h5 class="mb-0 fw-semibold text-break">video.mp4</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto mt-3">
                                                        <span class="text-muted mb-0">320 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}" class="mx-auto my-3"><img src="{{asset('assets/images/media/files/word.png')}}" alt="img"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h5 class="mb-0 fw-semibold text-break">word.doc</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">320 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}"><img src="{{asset('assets/images/media/files/01.jpg')}}" alt="img" class="w-100 file-manager-list"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h5 class="mb-0 fw-semibold text-break">mountain.jpg</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">320 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}" class="mx-auto my-3"><img src="{{asset('assets/images/media/files/pdf.png')}}" alt="img"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h5 class="mb-0 fw-semibold text-break">file.pdf</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">32 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}" class="mx-auto my-3"><img src="{{asset('assets/images/media/files/excel.png')}}" alt="img"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h5 class="mb-0 fw-semibold text-break">excel.xls</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">34 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}"><img src="{{asset('assets/images/media/files/02.jpg')}}" alt="img" class="w-100 file-manager-list"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="d-flex">
                                                        <h5 class="mb-0 fw-semibold text-break">image1.jpg</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">76 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}" class="mx-auto my-3"><img src="{{asset('assets/images/media/files/ppt1.png')}}" alt="img"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h5 class="mb-0 fw-semibold text-break">profile.ppt</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">67 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}"><img src="{{asset('assets/images/media/files/04.jpg')}}" alt="img" class="w-100 file-manager-list"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h5 class="mb-0 fw-semibold text-break">image2.jpg</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">66 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}"><img src="{{asset('assets/images/media/files/05.jpg')}}" alt="img" class="w-100 file-manager-list"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h5 class="mb-0 fw-semibold text-break">nature.jpg</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">66 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}" class="mx-auto my-3"><img src="{{asset('assets/images/media/files/zip1.png')}}" alt="img"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h5 class="mb-0 fw-semibold text-break">exe.zip</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">320 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- End Row -->

        @endsection

        @section('modal')

                        <!-- Modal -->
                        <div class="modal" id="createfile">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title">Add New File</h6>
                                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <input id="demo" type="file" name="files" accept="image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn ripple btn-primary" type="button">Add</button>
                                        <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->

        @endsection

    @section('scripts')

    <!-- INTERNAL File-Uploads Js-->
    <script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

    @endsection
