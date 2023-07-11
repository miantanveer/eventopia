@extends('layouts.app')

@section('styles')
    <style>
        .filters {
            border-radius: 10px;
            border: 1px solid #003B95;
            background-color: #e3edfdd2;
        }

        .gmap_iframe {
            width: 100% !important;
            height: 150vh !important;
        }

        @media (min-width: 768px) {

            /* show 4 items */
            .carousel-inner .active,
            .carousel-inner .active+.carousel-item,
            .carousel-inner .active+.carousel-item+.carousel-item,
            .carousel-inner .active+.carousel-item+.carousel-item+.carousel-item {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item+.carousel-item {
                transition: none;
            }

            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-prev {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
                position: absolute;
                top: 0;
                right: -25%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* left or forward direction */
            .active.carousel-item-left+.carousel-item-next.carousel-item-left,
            .carousel-item-next.carousel-item-left+.carousel-item,
            .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
            .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item,
            .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* farthest right hidden item must be absolue position for animations */
            .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: 66;
                display: block;
                visibility: visible;
            }

            /* right or prev direction */
            .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
            .carousel-item-prev.carousel-item-right+.carousel-item,
            .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
            .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item,
            .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }
    </style>
@endsection

@section('content')
    <!-- ROW-1 -->
    <div class="row mt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <div class="container-fluid">
                <div class="row filters">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xl-1">
                        <div class="btn-group mt-2 mb-2">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
                                Price <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <div class="custom-controls-stacked">
                                    <form action="#" method="get" class="ms-2">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option1" checked="">
                                            <span class="custom-control-label">Up to $100</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option2">
                                            <span class="custom-control-label">$100 to & $250</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option3">
                                            <span class="custom-control-label">$250 to & $450</span>
                                        </label>
                                    </form>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xl-1">
                        <div class="btn-group mt-2 mb-2">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle"
                                data-bs-toggle="dropdown">
                                Type <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <div class="custom-controls-stacked">
                                    <form action="#" method="get" class="ms-2">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option1" checked="">
                                            <span class="custom-control-label">Live Music</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option2">
                                            <span class="custom-control-label">Dance Performances</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option3">
                                            <span class="custom-control-label">Comedy and Entertainment</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option3">
                                            <span class="custom-control-label">Visual and Performing Arts</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option3">
                                            <span class="custom-control-label">Variety Acts</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option3">
                                            <span class="custom-control-label">Speakers and Presenters</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option3">
                                            <span class="custom-control-label">Interactive Performances</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option3">
                                            <span class="custom-control-label">Cultural Performances</span>
                                        </label>
                                    </form>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xl-1">
                        <div class="btn-group mt-2 mb-2">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle"
                                data-bs-toggle="dropdown">
                                Attendees <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <div class="custom-controls-stacked">
                                    <form action="#" method="get" class="ms-2">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option1" checked="">
                                            <span class="custom-control-label">0 to 10</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option2">
                                            <span class="custom-control-label">11 to 25</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option3">
                                            <span class="custom-control-label">51 to 100</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios"
                                                value="option3">
                                            <span class="custom-control-label">Over 100</span>
                                        </label>
                                    </form>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xl-2 ms-lg-5">
                        <form action="#" class="mt-2">
                            <input type="datetime-local" class="form-control bg-transparent border-primary">
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xl-2">
                        <form action="#" class="mt-2">
                            <input type="text" class="form-control bg-transparent border-primary"
                                placeholder="Enter a Keyword">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- ROW-1 END -->

    <!-- ROW-2 -->
    <div class="row">
        <div class="col-xl-8 col-md-12">
            <div class="container-fluid">
                <h5 class="text-start ms-4 mb-3">The talent & entertainments you might be looking for?</h5>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner row w-100 mx-auto">
                        <div class="carousel-item col-md-3 active">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{ asset('assets/images/users/spaces/11.jpg') }}"
                                    alt="Card image cap">
                            </div>
                        </div>
                        <div class="carousel-item col-md-3">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{ asset('assets/images/users/spaces/2.jpg') }}"
                                    alt="Card image cap">
                            </div>
                        </div>
                        <div class="carousel-item col-md-3">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{ asset('assets/images/users/spaces/3.jpg') }}"
                                    alt="Card image cap">
                            </div>
                        </div>
                        <div class="carousel-item col-md-3">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{ asset('assets/images/users/spaces/4.jpg') }}"
                                    alt="Card image cap">
                            </div>
                        </div>
                        <div class="carousel-item col-md-3">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{ asset('assets/images/users/spaces/7.jpg') }}"
                                    alt="Card image cap">
                            </div>
                        </div>
                        <div class="carousel-item col-md-3">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{ asset('assets/images/users/spaces/9.jpg') }}"
                                    alt="Card image cap">
                            </div>
                        </div>
                        <div class="carousel-item col-md-3">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{ asset('assets/images/users/spaces/10.jpg') }}"
                                    alt="Card image cap">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <hr>
            <div class="container-fluid">
                <h5 class="text-start ms-4 mb-3">4,333 party hall spaces near USA</h5>
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card overflow-hidden">
                            <img src="{{ asset('assets/images/users/spaces/2.jpg') }}" class="card-img-top"
                                alt="img">
                            <div class="card-body">
                                <h5 class="card-title">Stunning Studio Great For Private Classes</h5>
                                <i class="fa fa-group"></i> 25 &nbsp;
                                <i class="fa fa-star" style="color:#f1c40f"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <p>Responds within 1 hour</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card overflow-hidden">
                            <img src="{{ asset('assets/images/users/spaces/3.jpg') }}" class="card-img-top"
                                alt="img">
                            <div class="card-body">
                                <h5 class="card-title">Stunning Event Venue</h5>
                                <i class="fa fa-group"></i> 25 &nbsp;
                                <i class="fa fa-star" style="color:#f1c40f"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <p>Responds within 1 hour</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card overflow-hidden">
                            <img src="{{ asset('assets/images/users/spaces/4.jpg') }}" class="card-img-top"
                                alt="img">
                            <div class="card-body">
                                <h5 class="card-title">Stunning Studio Great For Private Classes</h5>
                                <i class="fa fa-group"></i> 33 &nbsp;
                                <i class="fa fa-star" style="color:#f1c40f"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <p>Responds within 1 hour</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card overflow-hidden">
                            <img src="{{ asset('assets/images/users/spaces/5.jpg') }}" class="card-img-top"
                                alt="img">
                            <div class="card-body">
                                <h5 class="card-title">Stunning Event Venue</h5>
                                <i class="fa fa-group"></i> 13 &nbsp;
                                <i class="fa fa-star" style="color:#f1c40f"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <p>Responds within 1 hour</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card overflow-hidden">
                            <img src="{{ asset('assets/images/users/spaces/9.jpg') }}" class="card-img-top"
                                alt="img">
                            <div class="card-body">
                                <h5 class="card-title">Great Space for Events</h5>
                                <i class="fa fa-group"></i> 35 &nbsp;
                                <i class="fa fa-star" style="color:#f1c40f"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <p>Responds within 1 hour</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card overflow-hidden">
                            <img src="{{ asset('assets/images/users/spaces/7.jpg') }}" class="card-img-top"
                                alt="img">
                            <div class="card-body">
                                <h5 class="card-title">Stunning Event Venue</h5>
                                <i class="fa fa-group"></i> 77 &nbsp;
                                <i class="fa fa-star" style="color:#f1c40f"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <p>Responds within 1 hour</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <iframe class="gmap_iframe" frameborder="0" scrolling="no" id="gmap_iframe" marginheight="0"
                marginwidth="0"
                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe>
        </div>
    </div>
    <!-- ROW-2 END -->
@endsection

@section('scripts')
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script> --}}
    <script>
        $(document).ready(function() {
            $("#myCarousel").on("slide.bs.carousel", function(e) {
                var $e = $(e.relatedTarget);
                var idx = $e.index();
                var itemsPerSlide = 4;
                var totalItems = $(".carousel-item").length;

                if (idx >= totalItems - (itemsPerSlide - 1)) {
                    var it = itemsPerSlide - (totalItems - idx);
                    for (var i = 0; i < it; i++) {
                        // append slides to end
                        if (e.direction == "left") {
                            $(".carousel-item")
                                .eq(i)
                                .appendTo(".carousel-inner");
                        } else {
                            $(".carousel-item")
                                .eq(0)
                                .appendTo($(this).find(".carousel-inner"));
                        }
                    }
                }
            });
        });
    </script>
@endsection
