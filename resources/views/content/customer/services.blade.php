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

        .btn_background {
            background: white !important;
            border: 1px solid rgba(95, 95, 95, 0.74) !important;
        }

        .card_height {
            height: 100% !important;
        }

        .owl-prev {
            margin-top: -12.4px !important;
        }

        .owl-next {
            margin-top: -12.4px !important;
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

        .search-dropdown-results {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            border: 1px solid #ccc;
            background-color: white;
            z-index: 1000;
            display: none;
            max-height: 150px;
            overflow-y: auto;
        }

        .search-drop-content {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #ccc;
        }

        .search-drop-content:last-child {
            border-bottom: none;
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
                            <button type="button" class="btn btn-outline dropdown-toggle text-dark btn_background w-100"
                                data-bs-toggle="dropdown">
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
                    <div class="col-lg-2 col-md-2 col-12 col-xl-2 col-sm-4 ps-0">
                        <div class="mt-2 mb-2">
                            <input type="text" id="typeCategories" class="form-control btn_background text-dark"
                                placeholder="Type">
                            <div class="search-dropdown-results" id="searchResults"></div>
                        </div>
                    </div>
                    {{-- @dd($data) --}}

                    <div class="col-lg-2 col-md-2 col-12 col-xl-2 col-sm-4 ps-0">
                        <div class="mt-2 mb-2">
                            <button type="button" class="btn btn-outline dropdown-toggle text-dark btn_background w-100"
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
                    <div class="col-lg-2 col-md-3 col-12 col-xl-2 ps-0">
                        <form action="#" class="mt-2">
                            <input type="date" class="form-control btn_background">
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12 col-xl-2 mb-2 mb-md-0 ps-0">
                        <form action="#" class="mt-2">
                            <input type="text" class="form-control btn_background" placeholder="Enter a Keyword">
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
        <div class="col-lg-8 col-12 scroll-dive" id="galleryColumn">
            <div class="container-fluid">
                <div class="card custom-card">
                    <div class="overflow-auto" style="overflow: auto !important;">
                        <div class="container-fluid">
                            <div class="card custom-card">
                                <div class="card-header border-bottom-0">
                                    The talent & entertainments you might be looking for?
                                </div>
                                <div class="card-body pt-0 h-100">
                                    <div class="owl-carousel owl-carousel-icons2">
                                        <div class="item card_height">
                                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white h-100">
                                                <a href="#" class="h-100"><img class="h-100"
                                                        src="{{ asset('assets/images/users/spaces/11.jpg') }}"
                                                        alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="item card_height">
                                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                <a href="#" class=""><img
                                                        src="{{ asset('assets/images/users/spaces/2.jpg') }}"
                                                        alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="item card_height">
                                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                <a href="#" class=""><img
                                                        src="{{ asset('assets/images/users/spaces/3.jpg') }}"
                                                        alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="item card_height">
                                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                <a href="#" class=""><img
                                                        src="{{ asset('assets/images/users/spaces/4.jpg') }}"
                                                        alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="item card_height">
                                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                <a href="#" class=""><img
                                                        src="{{ asset('assets/images/users/spaces/7.jpg') }}"
                                                        alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="item card_height">
                                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                <a href="#" class=""><img
                                                        src="{{ asset('assets/images/users/spaces/9.jpg') }}"
                                                        alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="item card_height">
                                            <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white">
                                                <a href="#" class=""><img
                                                        src="{{ asset('assets/images/users/spaces/3.jpg') }}"
                                                        alt="img"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="row">
                                @if (@$service == null)
                                    @php
                                        $lat = 0;
                                        $lng = 0;
                                        $title = 0;
                                    @endphp
                                    <div class="text-center">
                                        <h2><strong>We couldn't find any spaces.</strong></h2>
                                    </div>
                                    <div class="card-header border-bottom-0 ms-1 justify-content-center">
                                        Try zooming out or expanding your filter criteria.
                                    </div>
                                @else
                                    <div class="card-header border-bottom-0 ms-3">
                                        {{$count}} services found
                                    </div>
                                    @foreach (@$service as $value)
                                        @php
                                            $lat = $value->lat;
                                            $lng = $value->lng;
                                            $title = $value->title;
                                        @endphp
                                        <div class="col-xl-4 col-md-6 col-sm-12">
                                            <div class="card overflow-hidden">
                                                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                                                    <div class="ms-1 card-border float-start">
                                                        <p class="text-dark p-2 bg-primary">From
                                                            SAR{{ @$value->price }}</p>
                                                    </div>
                                                    <div class="me-2 card-background float-end">
                                                        <span class="mini-stat-icon p-0"><i
                                                                class="fa fa-shopping-bag p-3"></i></span>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <img src="{{ asset(@$value->serviceImages[0]->image) }}"
                                                        class="card-img-top" style="width: 200px;padding-top: 10px"
                                                        alt="img">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ @$value->title }}</h5>
                                                        <i class="fa fa-group"></i> 25 &nbsp;
                                                        <i class="fa fa-star" style="color:#f1c40f"></i>
                                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                                        <p>Responds within 1 hour</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 mt-5 mt-lg-0" id="map">
            {{-- <div class="container-fluid">
                <div class="card custom-card">
                    <div class="card-body map_height overflow-auto" id="mapContainer">
                        <iframe class="gmap_iframe" frameborder="0" scrolling="no" id="gmap_iframe" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        </iframe>
                    </div>
                </div> --}}
        </div>
    </div>
    </div>


    <!-- ROW-2 END -->
@endsection

@section('scripts')
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC5qN37hurCFwbFsZt2nzzwzGcbSt08R5E">
    </script>
    <script>
        $(document).ready(function() {
            // Get latitude, longitude, and title from PHP variable
            var lat = {{ $lat }};
            var lng = {{ $lng }};
            var title = "{{ $title }}";
            // Create a map centered at the specified location
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: lat,
                    lng: lng
                },
                zoom: 14
            });
            // Create a marker at the specified location
            var marker = new google.maps.Marker({
                position: {
                    lat: lat,
                    lng: lng
                },
                map: map,
                title: title
            });
        });
    </script>
    <!-- OWL CAROUSEL JS-->
    <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>

    <!-- OWL Carousel js -->
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
    {{-- <script>
        $(document).ready(function() {
            $('#flexSwitchCheckChecked').on('click', function() {
                $('#mapColumn').toggleClass('d-none');
                $('#galleryColumn').toggleClass('col-lg-12');
            });
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            function hideDropdown(resultsDiv, inputDiv) {
                resultsDiv.empty();
            }

            function setupSearch(inputId, resultsId) {
                const categories = [
                    "Live Music",
                    "Dance Performances",
                    "Comedy and Entertainment",
                    "Visual and Performing Arts",
                    "Variety Acts",
                    "Speakers and Presenters",
                    "Interactive Performances",
                    "Cultural Performances",
                ];

                const searchInput = $(inputId);
                const searchResults = $(resultsId);

                searchInput.on("input", function() {
                    const inputValue = this.value.toLowerCase();
                    const filteredCategories = categories.filter(category => category.toLowerCase()
                        .includes(inputValue));
                    const maxResultsToShow = 4;

                    searchResults.html("").css("border-bottom-left-radius", "13px").css(
                        "border-bottom-right-radius", "13px");

                    if (inputValue.length > 0) {
                        filteredCategories.slice(0, maxResultsToShow).forEach(category => {
                            const div = $("<div class='search-drop-content text-start ps-5'>").text(
                                category);
                            searchResults.append(div);
                            $(inputId).parent().addClass("data-appended");
                        });
                    }
                    if (inputValue.length > 0) {
                        searchResults.show();
                    } else {
                        searchResults.hide();
                    }
                });
                searchResults.on("click", ".search-drop-content", function() {
                    const selectedCategory = $(this).text();
                    searchInput.val(selectedCategory);
                    searchResults.hide();
                });
                $(document).click(function(event) {
                    var target = $(event.target);
                    if (!target.closest(resultsId).length && !target.is(inputId)) {
                        hideDropdown(searchResults, $(inputId).parent());
                    }
                });
            }
            setupSearch("#typeCategories", "#searchResults");
        });
    </script>
@endsection
