@extends('layouts.app')

@section('styles')
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">File Manager Details</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Componets</a></li>
                <li class="breadcrumb-item active" aria-current="page">file-manager details</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-xl-8 col-lg-12 col-md-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body p-3">
                    <a href="javascript:void(0)"><img src="{{ asset('assets/images/media/files/img3.jpg') }}" alt="img"
                            class="br-5 w-100"></a>
                </div>
            </div>
            <div class="card custom-card">
                <div class="card-header border-bottom-0">
                    Related Files
                </div>
                <div class="card-body pt-0 h-100">
                    <div class="owl-carousel owl-carousel-icons2">
                        <div class="item">
                            <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                <a href="{{ url('filemanager-details') }}"><img
                                        src="{{ asset('assets/images/media/files/03.jpg') }}" alt="img" height="124"
                                        class="w-100"></a>
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
                        <div class="item">
                            <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                <a href="{{ url('filemanager-details') }}" class="mx-auto my-3"><img
                                        src="{{ asset('assets/images/media/files/pdf.png') }}" alt="img"></a>
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
                        <div class="item">
                            <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                <a href="{{ url('filemanager-details') }}"><img
                                        src="{{ asset('assets/images/media/files/07.jpg') }}" alt="img" height="124"
                                        class="w-100"></a>
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
                        <div class="item">
                            <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                <a href="{{ url('filemanager-details') }}" class="mx-auto my-3"><img
                                        src="{{ asset('assets/images/media/files/excel.png') }}" alt="img"></a>
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
                        <div class="item">
                            <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                <a href="{{ url('filemanager-details') }}"><img
                                        src="{{ asset('assets/images/media/files/06.jpg') }}" alt="img" height="124"
                                        class="w-100"></a>
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
                        <div class="item">
                            <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                <a href="{{ url('filemanager-details') }}" class="mx-auto my-3"><img
                                        src="{{ asset('assets/images/media/files/ppt1.png') }}" alt="img"></a>
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
                        <div class="item">
                            <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                <a href="{{ url('filemanager-details') }}"><img
                                        src="{{ asset('assets/images/media/files/02.jpg') }}" alt="img" height="124"
                                        class="w-100"></a>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <h5 class="mb-3">File details</h5>
                    <div class="">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-bordered text-nowrap">
                                        <tbody>
                                            <tr>
                                                <th>File Name</th>
                                                <td>image.jpg</td>
                                            </tr>
                                            <tr>
                                                <th>Uploaded</th>
                                                <td>10-10-2021</td>
                                            </tr>
                                            <tr>
                                                <th>Size</th>
                                                <td>25 MB</td>
                                            </tr>
                                            <tr>
                                                <th>Dimensions</th>
                                                <td>1000 x 350</td>
                                            </tr>
                                            <tr>
                                                <th>Resolution Unit</th>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <th>File Type</th>
                                                <td>jpg</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-5 text-center">
                                    <button type="button" class="btn btn-icon  btn-primary-light me-2 bradius"><i
                                            class="fe fe-edit"></i></button>
                                    <button type="button" class="btn btn-icon  btn-danger-light me-2 bradius"><i
                                            class="fe fe-trash"></i></button>
                                    <button type="button" class="btn btn-icon  btn-success-light me-2 bradius"><i
                                            class="fe fe-download fs-14"></i></button>
                                    <button type="button" class="btn btn-icon  btn-warning-light bradius"><i
                                            class="fe fe-share-2 fs-14"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card custom-card">
                <div class="card-body pb-0">
                    <h5 class="mb-3">Recent Files</h5>
                    <ul id="lightgallery" class="list-unstyled row">
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0"
                            data-responsive="{{ asset('assets/images/media/files/01.jpg') }}"
                            data-src="{{ asset('assets/images/media/files/01.jpg') }}"
                            data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                            <a href="">
                                <img class="img-responsive br-5" src="{{ asset('assets/images/media/files/01.jpg') }}"
                                    alt="Thumb-1">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0"
                            data-responsive="{{ asset('assets/images/media/files/02.jpg') }}"
                            data-src="{{ asset('assets/images/media/files/02.jpg') }}"
                            data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                            <a href="">
                                <img class="img-responsive br-5" src="{{ asset('assets/images/media/files/02.jpg') }}"
                                    alt="Thumb-2">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0"
                            data-responsive="{{ asset('assets/images/media/files/03.jpg') }}"
                            data-src="{{ asset('assets/images/media/files/03.jpg') }}"
                            data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                            <a href="">
                                <img class="img-responsive br-5" src="{{ asset('assets/images/media/files/03.jpg') }}"
                                    alt="Thumb-1">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0"
                            data-responsive="{{ asset('assets/images/media/files/04.jpg') }}"
                            data-src="{{ asset('assets/images/media/files/04.jpg') }}"
                            data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                            <a href="">
                                <img class="img-responsive br-5" src="{{ asset('assets/images/media/files/04.jpg') }}"
                                    alt="Thumb-2">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0"
                            data-responsive="{{ asset('assets/images/media/files/05.jpg') }}"
                            data-src="{{ asset('assets/images/media/files/05.jpg') }}"
                            data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                            <a href="">
                                <img class="img-responsive br-5" src="{{ asset('assets/images/media/files/05.jpg') }}"
                                    alt="Thumb-1">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0"
                            data-responsive="{{ asset('assets/images/media/files/06.jpg') }}"
                            data-src="{{ asset('assets/images/media/files/06.jpg') }}"
                            data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                            <a href="">
                                <img class="img-responsive br-5" src="{{ asset('assets/images/media/files/06.jpg') }}"
                                    alt="Thumb-2">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->
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
                        <input id="demo" type="file" name="files"
                            accept="image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple>
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
    <!-- GALLERY JS -->
    <script src="{{ asset('assets/plugins/gallery/picturefill.js') }}"></script>
    <script src="{{ asset('assets/plugins/gallery/lightgallery.js') }}"></script>
    <script src="{{ asset('assets/plugins/gallery/lightgallery-1.js') }}"></script>
    <script src="{{ asset('assets/plugins/gallery/lg-pager.js') }}"></script>
    <script src="{{ asset('assets/plugins/gallery/lg-autoplay.js') }}"></script>
    <script src="{{ asset('assets/plugins/gallery/lg-fullscreen.js') }}"></script>
    <script src="{{ asset('assets/plugins/gallery/lg-zoom.js') }}"></script>
    <script src="{{ asset('assets/plugins/gallery/lg-hash.js') }}"></script>
    <script src="{{ asset('assets/plugins/gallery/lg-share.js') }}"></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

    <!-- OWL CAROUSEL JS-->
    <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>

    <!-- OWL Carousel js -->
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
@endsection
