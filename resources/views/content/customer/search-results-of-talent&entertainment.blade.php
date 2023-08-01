@extends('layouts.app')

@section('styles')

<style>
    .filters {
        border-radius: 12px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        background-color: #F5F9FF;
    }

    .gmap_iframe {
        width: 100% !important;
        height: 117.6vh !important;
    }

    .card-border p {
        border-radius: 10px 0px 10px 0px !important;
        background-color: white !important;
    }

    .card-background span i {
        border-radius: 50%;
        background-color: white !important;
        color: #003B95;
    }

    .card-background span i:hover {
        border-radius: 50%;
        background-color: #003B95 !important;
        color: white !important;
    }

    .card_height {
        height: 100% !important;
    }
   
    .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel .owl-nav button.owl-next {
            z-index: rewert;
        }

    .map_height {
        height: 677px !important;
    }

    .scroll-dive {
        height: 680px;
        overflow: auto !important;
    }

    .scroll-dive::-webkit-scrollbar {
        width: 5px;
    }

    .scroll-dive::-webkit-scrollbar-track {
        background-color: rgba(204, 203, 203, 0.795);
        border-radius: 8px !important;
    }

    .scroll-dive::-webkit-scrollbar-thumb {
        background-color: #727171;
        border-radius: 8px !important;
    }

    .scroll-dive:hover::-webkit-scrollbar-thumb {
        background-color: #727171;
    }
</style>
@endsection

@section('content')
<!-- ROW-1 -->
<div class="row mt-5">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="container-fluid">
            <div class="row filters">
                <div class="col-12 col-md-2 col-lg-2 col-xl-1 col-sm-4">
                    <div class="mt-2 mb-2">
                        <button type="button" class="btn btn-outline-default dropdown-toggle text-dark btn_background w-100" data-bs-toggle="dropdown">
                            Price <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <div class="custom-controls-stacked">
                                <form action="#" method="get" class="ms-2">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
                                        <span class="custom-control-label">Up to $100</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                                        <span class="custom-control-label">$100 to & $250</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option3">
                                        <span class="custom-control-label">$250 to & $450</span>
                                    </label>
                                </form>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12 col-xl-1 col-sm-4">
                    <div class="mt-2 mb-2">
                        <button type="button" class="btn btn-outline-default dropdown-toggle text-dark btn_background w-100" data-bs-toggle="dropdown">
                            Type <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <div class="custom-controls-stacked">
                                <form action="#" method="get" class="ms-2">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
                                        <span class="custom-control-label">Live Music</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                                        <span class="custom-control-label">Dance Performances</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option3">
                                        <span class="custom-control-label">Comedy and Entertainment</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option3">
                                        <span class="custom-control-label">Visual and Performing Arts</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option3">
                                        <span class="custom-control-label">Variety Acts</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option3">
                                        <span class="custom-control-label">Speakers and Presenters</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option3">
                                        <span class="custom-control-label">Interactive Performances</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option3">
                                        <span class="custom-control-label">Cultural Performances</span>
                                    </label>
                                </form>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12 col-xl-2 col-sm-4">
                    <div class="mt-2 mb-2">
                        <button type="button" class="btn btn-outline-default dropdown-toggle text-dark btn_background w-100" data-bs-toggle="dropdown">
                            Attendees <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <div class="custom-controls-stacked">
                                <form action="#" method="get" class="ms-2">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
                                        <span class="custom-control-label">0 to 10</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                                        <span class="custom-control-label">11 to 25</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option3">
                                        <span class="custom-control-label">51 to 100</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option3">
                                        <span class="custom-control-label">Over 100</span>
                                    </label>
                                </form>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12 col-xl-2">
                    <form action="#" class="mt-2">
                        <input type="datetime-local" class="btn btn-outline-default">
                    </form>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xl-1">
                    <div class="btn-group mt-2 mb-2">
                        <button type="button" class="btn btn-outline-default dropdown-toggle" data-bs-toggle="dropdown">
                            Age Range <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <div class="custom-controls-stacked">
                                <form action="#" method="get" class="ms-2">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
                                        <span class="custom-control-label">8 to 15</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                                        <span class="custom-control-label">16 to 25</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option3">
                                        <span class="custom-control-label">26+</span>
                                    </label>
                                </form>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12 col-xl-2 mb-2 mb-md-0">
                    <form action="#" class="mt-2">
                        <input type="text" class="btn btn-outline-default" placeholder="Enter a Keyword">
                    </form>
                </div>
                <div class="col-lg-1 text-center mt-4 mx-6 form-check form-switch d-lg-block d-none">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Map</label>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<!-- ROW-1 END -->

<!-- ROW-2 -->
<div class="row">
    <div class="col-xl-8 col-md-12 scroll-dive" id="galleryColumn">
        <div class="container-fluid">
            <div class="card custom-card">
                
                <div class="overflow-auto" style="overflow: auto !important;">
                    <div class="card-header border-bottom-0">
                        The talent & entertainments you might be looking for?
                    </div>
                    <div class="card-body pt-0 h-100">
                        <div class="owl-carousel owl-carousel-icons2">
                            <div class="item card_height">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white h-100">
                                    <a href="#"><img src="{{ asset('assets/images/users/spaces/11.jpg') }}" alt="img"></a>
                                </div>
                            </div>
                            <div class="item card_height">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <a href="#"><img src="{{ asset('assets/images/users/spaces/2.jpg') }}" alt="img"></a>
                                </div>
                            </div>
                            <div class="item card_height">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <a href="#"><img src="{{ asset('assets/images/users/spaces/3.jpg') }}" alt="img"></a>
                                </div>
                            </div>
                            <div class="item card_height">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <a href="#"><img src="{{ asset('assets/images/users/spaces/4.jpg') }}" alt="img"></a>
                                </div>
                            </div>
                            <div class="item card_height">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <a href="#"><img src="{{ asset('assets/images/users/spaces/7.jpg') }}" alt="img"></a>
                                </div>
                            </div>
                            <div class="item card_height">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <a href="#"><img src="{{ asset('assets/images/users/spaces/9.jpg') }}" alt="img"></a>
                                </div>
                            </div>
                            <div class="item card_height">
                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                    <a href="#"><img src="{{ asset('assets/images/users/spaces/10.jpg') }}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid">
            <div class="card custom-card overflow-auto">
                <div class="card-header border-bottom-0 ms-3">
                    4,333 entertainment & talent near USA
                </div>
                <div class="card-body pt-0" style="height: 630px;overflow:auto !important;">
                    <div class="row" style="overflow: auto !important;">
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card overflow-hidden">
                                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                    <div class="ms-1 card-border float-start">
                                        <p class="text-dark p-2 bg-primary">From SAR40/hour</p>
                                    </div>
                                    <div class="me-2 card-background float-end">
                                        <span class="mini-stat-icon p-0"><i class="fa fa-shopping-bag p-3"></i></span>
                                    </div>
                                </div>
                                <a href="http://eventopia.test/space-details">
                                    <img src="{{ asset('assets/images/users/talents-&-entertainment/bands.png') }}" class="card-img-top" alt="img">
                                    <div class="card-body">
                                        <h5 class="card-title">Bands & Groups</h5>
                                        <i class="fa fa-group"></i> 25 &nbsp;
                                        <i class="fa fa-star" style="color:#f1c40f"></i>
                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                        <p>Responds within 1 hour</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card overflow-hidden">
                                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                    <div class="ms-1 card-border float-start">
                                        <p class="text-dark p-2 bg-primary">From SAR40/hour</p>
                                    </div>
                                    <div class="me-2 card-background float-end">
                                        <span class="mini-stat-icon p-0"><i class="fa fa-shopping-bag p-3"></i></span>
                                    </div>
                                </div>
                                <a href="{{ URL('/space-details') }}">
                                    <img src="{{ asset('assets/images/users//talents-&-entertainment/singer.png') }}" class="card-img-top" alt="img">
                                    <div class="card-body">
                                        <h5 class="card-title">Singers</h5>
                                        <i class="fa fa-group"></i> 25 &nbsp;
                                        <i class="fa fa-star" style="color:#f1c40f"></i>
                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                        <p>Responds within 1 hour</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card overflow-hidden">
                                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                    <div class="ms-1 card-border float-start">
                                        <p class="text-dark p-2 bg-primary">From SAR40/hour</p>
                                    </div>
                                    <div class="me-2 card-background float-end">
                                        <span class="mini-stat-icon p-0"><i class="fa fa-shopping-bag p-3"></i></span>
                                    </div>
                                </div>
                                <a href="{{ URL('/space-details') }}">
                                    <img src="{{ asset('assets/images/users/talents-&-entertainment/children.png') }}" class="card-img-top" alt="img">
                                    <div class="card-body">
                                        <h5 class="card-title">Children's Parties</h5>
                                        <i class="fa fa-group"></i> 33 &nbsp;
                                        <i class="fa fa-star" style="color:#f1c40f"></i>
                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                        <p>Responds within 1 hour</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card overflow-hidden">
                                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                    <div class="ms-1 card-border float-start">
                                        <p class="text-dark p-2 bg-primary">From SAR40/hour</p>
                                    </div>
                                    <div class="me-2 card-background float-end">
                                        <span class="mini-stat-icon p-0"><i class="fa fa-shopping-bag p-3"></i></span>
                                    </div>
                                </div>
                                <a href="{{ URL('/space-details') }}">
                                    <img src="{{ asset('assets/images/users/talents-&-entertainment/children.png') }}" class="card-img-top" alt="img">
                                    <div class="card-body">
                                        <h5 class="card-title">Circus & Acrobatic</h5>
                                        <i class="fa fa-group"></i> 13 &nbsp;
                                        <i class="fa fa-star" style="color:#f1c40f"></i>
                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                        <p>Responds within 1 hour</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card overflow-hidden">
                                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                    <div class="ms-1 card-border float-start">
                                        <p class="text-dark p-2 bg-primary">From SAR40/hour</p>
                                    </div>
                                    <div class="me-2 card-background float-end">
                                        <span class="mini-stat-icon p-0"><i class="fa fa-shopping-bag p-3"></i></span>
                                    </div>
                                </div>
                                <a href="{{ URL('/space-details') }}">
                                    <img src="{{ asset('assets/images/users/talents-&-entertainment/singer.png') }}" class="card-img-top" alt="img">
                                    <div class="card-body">
                                        <h5 class="card-title">Stunning Event Venue</h5>
                                        <i class="fa fa-group"></i> 35 &nbsp;
                                        <i class="fa fa-star" style="color:#f1c40f"></i>
                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                        <p>Responds within 1 hour</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-12 mt-5 mt-lg-0" id="mapColumn">
        <div class="container-fluid">
            <div class="card custom-card">
                <div class="card-body map_height overflow-auto" id="mapContainer">
                    <iframe class="gmap_iframe" frameborder="0" scrolling="no" id="gmap_iframe" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#flexSwitchCheckChecked').on('click', function() {
            $('#mapColumn').toggleClass('d-none');
            $('#galleryColumn').toggleClass('col-lg-12');
        });
    });
</script>

<!-- ROW-2 END -->
@endsection

@section('scripts')
<!-- OWL CAROUSEL JS-->
<script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/owl-carousel.js') }}"></script>

<!-- OWL Carousel js -->
<script src="{{ asset('assets/js/carousel.js') }}"></script>

@endsection