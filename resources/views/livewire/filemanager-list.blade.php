@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">File Manager List</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Componets</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">file-manager List</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row row-sm">
                            <div class="col-lg-12 col-xl-12">
                                <div class="row row-sm">
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}"><img src="{{asset('assets/images/media/files/03.jpg')}}" alt="img" class="file-manager-list w-100"></a>
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
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
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
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}"><img src="{{asset('assets/images/media/files/07.jpg')}}" alt="img" class="file-manager-list w-100"></a>
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
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
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
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}"><img src="{{asset('assets/images/media/files/06.jpg')}}" alt="img" class="file-manager-list w-100"></a>
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
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
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
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}"><img src="{{asset('assets/images/media/files/02.jpg')}}" alt="img" class="file-manager-list w-100"></a>
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
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
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
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
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
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}"><img src="{{asset('assets/images/media/files/01.jpg')}}" alt="img" class="file-manager-list w-100"></a>
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
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
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
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
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
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
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
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('filemanager-details')}}"><img src="{{asset('assets/images/media/files/04.jpg')}}" alt="img" class="file-manager-list w-100"></a>
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
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
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
