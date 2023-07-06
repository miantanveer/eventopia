@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                         <!-- PAGE-HEADER -->
                         <div class="page-header">
                            <h1 class="page-title">Scrollspy</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Scrollspy</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Basic Navbar Scrollspy</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
                                            <a class="navbar-brand" href="javascript:void(0)">Navbar</a>
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#scrollspyHeading1">First</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#scrollspyHeading2">Second</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0)" role="button" aria-expanded="false">Dropdown</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                                                        <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                                            <div id="scrollspyHeading1">
                                                <h4 class="fs-16 fw-semibold">First heading</h4>
                                                <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                    letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            </div>
                                            <div id="scrollspyHeading2">
                                                <h4 class="fs-16 fw-semibold">First heading</h4>
                                                <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                    letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            </div>
                                            <div id="scrollspyHeading3">
                                                <h4 class="fs-16 fw-semibold">First heading</h4>
                                                <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                    letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            </div>
                                            <div id="scrollspyHeading4">
                                                <h4 class="fs-16 fw-semibold">First heading</h4>
                                                <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                    letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            </div>
                                            <div id="scrollspyHeading5">
                                                <h4 class="fs-16 fw-semibold">First heading</h4>
                                                <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                    letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Nested nav Scrollspy</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-0">
                                            <div class="col-lg-4 col-md-12 p-0">
                                                <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch p-3 br-ts-5 br-bs-5">
                                                    <a class="navbar-brand" href="javascript:void(0)">Navbar</a>
                                                    <nav class="nav nav-pills flex-column">
                                                        <a class="nav-link active" href="#item-1">Item 1</a>
                                                        <nav class="nav nav-pills flex-column">
                                                            <a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
                                                            <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
                                                        </nav>
                                                        <a class="nav-link" href="#item-2">Item 2</a>
                                                        <a class="nav-link" href="#item-3">Item 3</a>
                                                        <nav class="nav nav-pills flex-column">
                                                            <a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a>
                                                            <a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a>
                                                        </nav>
                                                    </nav>
                                                </nav>
                                            </div>
                                            <div class="col-lg-8 col-md-12 p-0">
                                                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" class="scrollspy-example-2" data-bs-offset="0" tabindex="0">
                                                    <div id="item-1">
                                                        <h4 class="fs-16 fw-semibold">Item 1</h4>
                                                        <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                    </div>
                                                    <div id="item-1-1">
                                                        <h4 class="fs-16 fw-semibold">Item 1-1</h4>
                                                        <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                    </div>
                                                    <div id="item-1-2">
                                                        <h4 class="fs-16 fw-semibold">item 1-2</h4>
                                                        <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                    </div>
                                                    <div id="item-2">
                                                        <h4 class="fs-16 fw-semibold">Item 2</h4>
                                                        <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                    </div>
                                                    <div id="item-3">
                                                        <h4 class="fs-16 fw-semibold">Item 3</h4>
                                                        <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                    </div>
                                                    <div id="item-3-1">
                                                        <h4 class="fs-16 fw-semibold">Item 3-1</h4>
                                                        <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                    </div>
                                                    <div id="item-3-2">
                                                        <h4 class="fs-16 fw-semibold">Item 3-2</h4>
                                                        <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 END -->

        @endsection

    @section('scripts')



    @endsection
