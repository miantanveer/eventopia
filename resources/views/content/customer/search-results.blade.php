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
                    @if(@$type !== 'service')
                    <div class="col-12 col-md-2 col-lg-2 col-xl-1 col-sm-4">
                        <div class="mt-2 mb-2">
                            <button type="button" class="btn btn-outline dropdown-toggle text-dark btn_background w-100"
                                data-bs-toggle="dropdown">
                                {{ lang('Price') }} <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <div class="custom-controls-stacked">
                                    <form action="#" method="get" class="ms-2">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" onclick="selected()" class="custom-control-input"
                                                name="price" value="100">
                                            <span class="custom-control-label">{{ lang('Up to ') }}$100</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" onclick="selected()" class="custom-control-input"
                                                name="price" value="250">
                                            <span class="custom-control-label">$100 {{ lang('to') }} & $250</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" onclick="selected()" class="custom-control-input"
                                                name="price" value="450">
                                            <span class="custom-control-label">$250 {{ lang('to') }} & $450</span>
                                        </label>
                                    </form>
                                </div>
                            </ul>
                        </div>
                    </div>
                    @endif
                    <div class="col-lg-2 col-md-2 col-12 col-xl-2 col-sm-4 ps-0 " @if(@$type == 'service')style="margin-left: 10px"@endif>
                        <div class="mt-2 mb-2">
                            <input type="text" class="form-control btn_background text-dark typeCategories"
                                placeholder="Type">
                            <div class="search-dropdown-results" id="searchResults"></div>
                        </div>
                    </div>
                    @if(@$type !== 'service')

                    <div class="col-lg-2 col-md-2 col-12 col-xl-2 col-sm-4 ps-0">
                        <div class="mt-2 mb-2">
                            <button type="button" class="btn btn-outline dropdown-toggle text-dark btn_background w-100"
                                data-bs-toggle="dropdown">
                                {{ lang('Attendees') }} <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <div class="custom-controls-stacked">
                                    <form action="#" method="get" class="ms-2">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="guests" value="10"
                                                onclick="selected()">
                                            <span class="custom-control-label">{{ lang('0 to 10') }}</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="guests" value="25"
                                                onclick="selected()">
                                            <span class="custom-control-label">{{ lang('11 to 25') }}</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="guests" value="100"
                                                onclick="selected()">
                                            <span class="custom-control-label">{{ lang('51 to 100') }}</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="guests" value="200"
                                                onclick="selected()">
                                            <span class="custom-control-label">{{ lang('Over 100') }}</span>
                                        </label>
                                    </form>
                                </div>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-12 col-xl-2 ps-0">
                        <div class="mt-2">
                            <input type="date" name="date" id="date" class="form-control btn_background">
                        </div>
                    </div>
                    @endif
                    <div class="col-lg-2 col-md-3 col-12 col-xl-2 mb-2 mb-md-0 ps-0">
                        <div class="mt-2">
                            <input type="text" class="form-control btn_background" onblur="selected()" name="keyword"
                                id="keyword" placeholder="Enter a Keyword">
                        </div>
                    </div>
                    <div class="col-lg-1 text-center mt-4 mx-6 form-check form-switch d-lg-block d-none">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                            checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">{{ lang('Map') }}</label>
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
                                    {{ lang('The talent & entertainments you might be looking for?') }}
                                </div>
                                <div class="card-body pt-0 h-100">
                                    <div class="owl-carousel owl-carousel-icons2">
                                        @foreach (@$listing as $value)
                                            @php
                                                $images = $type . 'Images';
                                            @endphp
                                            <div class="item card_height">
                                                <div class="card overflow-hidden border mt-5 mb-0 p-0 bg-white h-100">
                                                    <a href="{{ route('space-details', @$value->id) }}"
                                                        class="h-100"><img class="h-100"
                                                            src="{{ asset(@$value->$images[0]->image) }}"
                                                            alt="img"></a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="row">
                                @if (@$listing == null)
                                    @php
                                        $lat = 0;
                                        $lng = 0;
                                        $title = 0;
                                    @endphp
                                    <div class="text-center">
                                        <h2><strong>{{ lang("We couldn't find any spaces.") }}</strong></h2>
                                    </div>
                                    <div class="card-header border-bottom-0 ms-1 justify-content-center">
                                        {{ lang('Try zooming out or expanding your filter criteria.') }}
                                    </div>
                                @else
                                    <div id="ajax_data" class="row">
                                        @if (@$type == 'space')
                                        @include('content.components.__space')
                                        @elseif (@$type == 'entertainment')
                                        @include('content.components.__entertainment')
                                        @elseif (@$type == 'service')
                                            @include('content.components.__service')
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 mt-5 mt-lg-0" id="map">
            @if (!@$listing)
                <div class="container-fluid">
                    <div class="card custom-card">
                        <div class="card-body map_height overflow-auto" id="mapContainer">
                            <iframe class="gmap_iframe" frameborder="0" scrolling="no" id="gmap_iframe"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            </iframe>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <input type="hidden" id="{{ $type }}_search_url" value="{{ route($type . '_landing_index') }}">
    <input type="hidden" id="search" value="{{ route('search_ajax', $type) }}">

    <!-- ROW-2 END -->
@endsection

@section('scripts')
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC5qN37hurCFwbFsZt2nzzwzGcbSt08R5E">
    </script>
    <script>
        $(document).ready(function() {
            // Create an array to hold marker data
            var markers = [
                @foreach (@$listing as $value)
                    {
                        lat: {{ @$value->lat }},
                        lng: {{ @$value->lng }},
                        price: "SAR {{ @$type == 'space' ? @$value->spaceHaveActivities[0]->rate_per_hour : (@$type == 'service' ? @$value->price : @$value->entertainmentActivities[0]->hourly_rate)  }}"
                    },
                @endforeach
            ];

            // Create a map centered at the specified location
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: {{ @$value->lat }},
                    lng: {{ @$value->lng }}
                },
                zoom: 2
            });

            // Loop through the markers array and create markers for each data point
            markers.forEach(function(markerData) {
                var marker = new google.maps.Marker({
                    position: {
                        lat: markerData.lat,
                        lng: markerData.lng
                    },
                    map: map,
                    title: markerData.price
                });
            });
        });
    </script>

    <!-- OWL CAROUSEL JS-->
    <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>

    <!-- OWL Carousel js -->
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#flexSwitchCheckChecked').on('click', function() {
                $('#mapColumn').toggleClass('d-none');
                $('#galleryColumn').toggleClass('col-lg-12');
            });
        });
    </script>
    <script>
        let categories;
        $(document).ready(function() {
            var id = '{{ @$type }}' + '_search_url';
            var url = $('#' + id).val();
            $.ajax({
                url: url,
                type: "GET",
                success: function(res) {
                    categories = res.data;
                }
            });

            function hideDropdown(resultsDiv, inputDiv) {
                resultsDiv.empty();
                inputDiv.removeClass("data-appended");
                inputDiv.css("border-bottom-left-radius", "13px !important").css("border-bottom-right-radius",
                    "13px !important");
            }

            function setupSpaceSearch(inputId, resultsId) {

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

                        if (filteredCategories.length === 0) {
                            const div = $("<div class='search-drop-popUp text-start ps-5'>");
                            const para = $("<p>").text(
                                "We don't recognize that activity. Try describing it differently or ");
                            const anchor = $(
                                    "<a class='modal-effect' data-bs-target='#popular-catagories-modal' data-bs-toggle='modal'>"
                                )
                                .text('pick from popular activities.').attr("href", "javascript-void(0);");
                            para.append(anchor);
                            div.append(para);
                            searchResults.append(div);
                            $(inputId).parent().addClass("data-appended");
                            $("a[data-select-text]").off('click').on('click', function() {
                                const searchValue = $(this).text();
                                searchInput.val(searchValue);
                                $("#popular-catagories-modal").modal('hide');
                            });
                        }
                    }

                    if (inputValue.length > 0) {
                        searchResults.show();
                    } else {
                        searchResults.hide();
                        $(inputId).parent().removeClass("data-appended");
                        $(inputId).parent().css("border-bottom-left-radius", "13px !important").css(
                            "border-bottom-right-radius", "13px !important");
                    }
                });

                searchResults.on("click", ".search-drop-content", function() {
                    const selectedCategory = $(this).text();
                    searchInput.val(selectedCategory);
                    selected(selectedCategory);
                    searchResults.hide();
                    $(inputId).parent().removeClass("data-appended");
                    $(inputId).parent().css("border-bottom-left-radius", "13px !important").css(
                        "border-bottom-right-radius", "13px !important");
                });

                $(document).click(function(event) {
                    var target = $(event.target);
                    if (!target.closest(resultsId).length && !target.is(inputId)) {
                        hideDropdown(searchResults, $(inputId).parent());
                    }
                });
            }

            setupSpaceSearch(".typeCategories", "#searchResults");
        });

        function selected(input) {
            var url = $('#search').val();
            var selectedPrice = $('input[name="price"]:checked').val();
            var guests = $('input[name="guests"]:checked').val();
            var date = $('input[name="date"]').val();
            var keyword = $('input[name="keyword"]').val();
            $.ajax({
                url: url,
                data: {
                    'type': input,
                    'price': selectedPrice,
                    'attendees': guests,
                    'date': date,
                    'keyword': keyword
                },
                type: "GET",
                success: function(res) {
                    $('#ajax_data').html(res);
                }
            });
        }
    </script>
@endsection
