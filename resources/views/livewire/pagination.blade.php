@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Pagination</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Componets</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pagination</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic pagination</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Pagination to indicate a series of related content exists across multiple pages.</p>
                                        <div class="pagination-wrapper">
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination mb-0">
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0)">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0)">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0)">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0)">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0)">5</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a aria-label="Next" class="page-link" href="javascript:void(0)"><i class="fa fa-angle-right"></i></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <!-- pagination-wrapper -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Active pagination</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Use <code class="highlighter-rouge">.active</code> to indicate the current page.</p>
                                        <ul class="pagination">
                                            <li class="page-item page-prev">
                                                <a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                            <li class="page-item page-next">
                                                <a class="page-link" href="javascript:void(0)">Next</a>
                                            </li>
                                        </ul>
                                        <!-- pagination-wrapper -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Disable Pagination</h3>
                                    </div>
                                    <div class="card-body ">
                                        <p>Use <code class="highlighter-rouge">.disabled</code> for links that appear un-clickable.</p>
                                        <ul class="pagination mg-b-0 page-0 ">
                                            <li class="page-item">
                                                <a aria-label="Last" class="page-link" href="javascript:void(0)"><i class="fa fa-angle-double-left"></i></a>
                                            </li>
                                            <li class="page-item">
                                                <a aria-label="Next" class="page-link" href="javascript:void(0)"><i class="fa fa-angle-left"></i></a>
                                            </li>

                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">2</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link hidden-xs-down" href="javascript:void(0)">4</a>
                                            </li>

                                            <li class="page-item">
                                                <a aria-label="Next" class="page-link" href="javascript:void(0)"><i class="fa fa-angle-right"></i></a>
                                            </li>
                                            <li class="page-item">
                                                <a aria-label="Last" class="page-link" href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- pagination-wrapper -->
                                </div>
                                <!-- section-wrapper -->
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Pagination Samples</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Pagination to indicate a series of related content exists across multiple pages.</p>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6">
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination pagination-success mb-1">
                                                        <li class="page-item page-0">
                                                            <a aria-label="Next" class="page-link" href="javascript:void(0)"><i class="fa fa-angle-left"></i></a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a aria-label="Last" class="page-link" href="javascript:void(0)"><i class="fa fa-angle-double-left"></i></a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a class="page-link" href="javascript:void(0)">4</a>
                                                        </li>
                                                        <li class="page-item disabled"><span class="page-link">...</span></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0)">10</a>
                                                        </li>
                                                        <li class="page-item page-0">
                                                            <a aria-label="Next" class="page-link" href="javascript:void(0)"><i class="fa fa-angle-right"></i></a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a aria-label="Last" class="page-link" href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination mb-1">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                                                <i class="fa fa-angle-left"></i>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                                                <i class="fa fa-angle-right"></i>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                        <!-- pagination-wrapper -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Pagination Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Use <code class="highlighter-rouge">.pagination-lg</code> or <code class="highlighter-rouge">.pagination-sm</code> for additional sizes.</p>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination pagination-lg">
                                                <li class="page-item page-prev">
                                                    <a class="page-link" href="javascript:void(0)" tabindex="-1"><i class="fa fa-angle-left"></i></a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item page-next">
                                                    <a class="page-link" href="javascript:void(0)"><i class="fa fa-angle-right"></i></a>
                                                </li>
                                            </ul>
                                        </nav><br>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item page-prev">
                                                    <a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                                <li class="page-item page-next">
                                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Pagination Alignments</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Change the alignment of pagination components with <b>flexbox Utilities</b></p>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                        <i class="fa fa-angle-left"></i>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">
                                                        <i class="fa fa-angle-right"></i>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav><br>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                        <i class="fa fa-angle-left"></i>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">
                                                        <i class="fa fa-angle-right"></i>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav><br>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-end">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                        <i class="fa fa-angle-left"></i>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">
                                                        <i class="fa fa-angle-right"></i>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End  Row -->

        @endsection

    @section('scripts')



    @endsection
