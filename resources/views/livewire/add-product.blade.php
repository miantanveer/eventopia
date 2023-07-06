@extends('layouts.app')

        @section('styles')

        @endsection

            @section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">Add Product</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW-1 OPEN -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Add New Product</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Product Name :</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="Product Name">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Price :</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Categories :</label>
                                                <div class="col-md-9">
                                                    <select name="country" class="form-control form-select select2" data-bs-placeholder="Select Country">
                                                        <option value="br">Electronics</option>
                                                        <option value="cz">Fashion</option>
                                                        <option value="de">Home Decor</option>
                                                        <option value="pl">Furniture</option>
                                                </select>
                                                </div>
                                            </div>

                                            <!-- Row -->
                                            <div class="row">
                                                <label class="col-md-3 form-label mb-4">Product Description :</label>
                                                <div class="col-md-9 mb-4">
                                                    <textarea class="content" name="example"></textarea>
                                                </div>
                                            </div>
                                            <!--End Row-->

                                            <!--Row-->
                                            <div class="row">
                                                <label class="col-md-3 form-label mb-4">Product Upload :</label>
                                                <div class="col-md-9">
                                                    <input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple>
                                                </div>
                                            </div>
                                            <!--End Row-->
                                        </div>
                                        <div class="card-footer">
                                            <!--Row-->
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-9">
                                                    <a href="javascript:void(0)" class="btn btn-primary">Add Product</a>
                                                    <a href="javascript:void(0)" class="btn btn-default float-end">Discard</a>
                                                </div>
                                            </div>
                                            <!--End Row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /ROW-1 CLOSED -->

            @endsection

        @section('scripts')

        <!-- INPUT MASK JS-->
        <script src="{{asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
        <script src="{{asset('assets/js/select2.js')}}"></script>

        <!-- INTERNAL WYSIWYG Editor JS -->
        <script src="{{asset('assets/plugins/wysiwyag/jquery.richtext.js')}} "></script>
        <script src="{{asset('assets/plugins/wysiwyag/wysiwyag.js')}} "></script>

        <!-- INTERNAL File-Uploads Js-->
        <script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

        <!-- Perfect SCROLLBAR JS-->
        <script src="{{asset('assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('assets/plugins/p-scroll/pscroll.js')}}"></script>
        <script src="{{asset('assets/plugins/p-scroll/pscroll-1.js')}}"></script>

        @endsection
