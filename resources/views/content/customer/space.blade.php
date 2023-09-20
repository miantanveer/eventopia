@extends('layouts.app')

@section('styles')

<style>
    .button-radias {
        border-radius: 0px;
    }

    .footer {
        display: none;
    }

    .overlay {
        position: absolute;
        color: white;
        top: 80%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 100%;
        font-size: 1.2em;
        font-weight: bolder;
    }

    /* .owl-item:nth-child(2),.owl-item:nth-child(3),.owl-item:nth-child(4){
        margin-right: 25px !important;
    } */

    .new_color-div {
        padding: 10px 0px 1px 0px;
    }

    .new_color {
        background-color: #8559ec;
    }

    .w-style-button {
        width: 125px;
    }

    .w-style {
        width: 100% !important;
        height: 45px !important;
    }

    .nav-style {
        padding: 5.7px !important;
    }


    #typeCategories {
        border-radius: 0px;
        padding: 6px 0px 6px 0px !important;
    }

    .h-card-image {
        height: 200px !important;
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
        height: 750px !important;
    }

    .scroll-dive {
        height: 750px;
        overflow: auto !important;
    }

    .mainContent {
        height: 60vh;
    }

    .span-design {
        border: black solid 5px;
        border-radius: 50%;
    }

    .font_size {
        font-size: 30% !important;
        color: white !important;
    }

    .owl-prev,
    .owl-next {
        display: none !important;
    }

    .card-raduas {
        border-radius: 0px;
    }

    .noti-design {
        border-radius: 50px !important;
    }

    .scroll-dive::-webkit-scrollbar {
        width: 5px;
    }

    .scroll-dive::-webkit-scrollbar-track {
        background-color: rgba(204, 203, 203, 0.795);
    }

    .scroll-dive::-webkit-scrollbar-thumb {
        background-color: #a1a1a1;
        border-radius: 30px;
    }

    .scroll-dive:hover::-webkit-scrollbar-thumb {
        background-color: #a1a1a1;
    }

    .scroll-dive::-webkit-scrollbar-thumb:hover {
        background-color: #797676;
    }

    /* .scroll-dive::-webkit-scrollbar-button:start:decrement {
        content: '▲';
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .scroll-dive::-webkit-scrollbar-button:end:increment {
        content: '▼';
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    } */

    .price-nav {
        left: -12px !important;
        width: 283px !important;
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

    .carousel-wrap {
        margin: 90px auto;
        padding: 0 5%;
        width: 80%;
        position: relative;
    }

    /* fix blank or flashing items on carousel */
    .owl-carousel .item {
        position: relative;
        z-index: 100;
        -webkit-backface-visibility: hidden;
    }

    /* end fix */
    .owl-nav>div {
        margin-top: -26px;
        position: absolute;
        top: 50%;
        color: #cdcbcd;
    }

    .owl-nav i {
        font-size: 52px;
    }

    .owl-nav .owl-prev {
        left: -30px;
    }

    .owl-nav .owl-next {
        right: -30px;
    }

    @media screen and (min-width: 1280px) and (max-width: 1500px) {
        .span_attendees {
            font-size: 90% !important;
        }
    }

    @media screen and (min-width: 992px) and (max-width: 1450px) {
        .item_title {
            font-size: 70% !important;
        }

        .h-card-image {
            height: 100% !important;
        }
    }

    @media screen and (min-width: 0px) and (max-width: 991px) {
        .h-card-image {
            height: 100% !important;
        }
    }
</style>
@endsection

<!-- ROW-1 -->
<div class="bg-white">
    @section('content')
    @include('content.components.__filter_bar')
    <hr class="my-0 bg-dark">
    <!-- ROW-1 END -->

    <!-- ROW-2 -->
    <div class="bg-white h-100 w-100 mainContent">
        <div class="row">
            <div class="col-lg-7 col-12 px-0 scroll-dive" id="galleryColumn">
                <div class="container-fluid p-0">
                    <div class="card custom-card card-raduas">
                        <div class="container-fluid">
                            <div class="border-bottom-0 p-0 ps-6 font_size pt-4">
                                <h4><b style="color:black;">What kind of {{@$type}} are you looking for?</b></h4>
                            </div>
                            <div class="overflow-auto" style="overflow: auto !important;">
                                <div class="card-body pt-2">
                                    <div class="owl-carousel">
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.1.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Storefront</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.2.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Banquet Hall</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.3.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Flex Space</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.7.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Conference Room</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.8.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Performance Hall</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.9.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Meeting Hall</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.10.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Lounge</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.1.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Storefront</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.2.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Banquet Hall</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.8.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Performance Hall</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.7.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Conference Room</h5>
                                            </div>
                                        </div>
                                        <div class="item"><a href="#"><img
                                                    src="{{ asset('assets/images/users/spaces/space.3.jpeg') }}"
                                                    alt="img"></a>
                                            <div class="overlay">
                                                <h5 class="item_title">Flex Space</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="border-bottom-0 ms-5 mb-5">
                                    4,333 party hall spaces near USA
                                </div>
                                <div class="border-bottom-0 new_color-div bg-light-gray ms-5 mb-5">
                                    <p class="mt-1 ms-2"><b
                                            class="text-white new_color px-3 py-2 font_size">NEW</b>&nbsp; Pay
                                        half now, half later! You can now book a space for 50% upfront and pay the rest
                                        at a later time.</p>
                                </div> --}}
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
                                <div class="row">
                                    <div class="col-12 col-md-4 text-md-start text-center">
                                        <p class="text-start ms-3 mt-5">Showing 1-24 of 12647</p>
                                    </div>
                                    <div class="col-12 col-md-5 text-md-start text-center">
                                        <div class="container m-0 pb-5">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link"
                                                        style="border-radius: 50px 0px 0px 50px !important;" href="#"><i
                                                            class="fa fa-angle-double-left nav-style"></i></a></li>
                                                <li class="page-item"><a class="page-link" href="#"><i
                                                            class="fa fa-angle-left  nav-style"></i></a></li>
                                                <li class="page-item"><a class="page-link p-3" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link p-3" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link p-3" href="#">...</a></li>
                                                <li class="page-item"><a class="page-link p-3" href="#">8</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><i
                                                            class="fa fa-angle-right  nav-style"></i></a></li>
                                                <li class="page-item"><a class="page-link"
                                                        style="border-radius: 0px 50px 50px 0px !important;" href="#"><i
                                                            class="fa fa-angle-double-right  nav-style"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr class="bg-dark">
                                <div class="">
                                    <p><a href="#">See all off-site {{@$type}} in Chicago</a></p>
                                    <p class="text-gray font_size">Peerspace is also live in <a href="#"> San Francisco,
                                            Silicon Valley, Los Angeles, </a>and <a href="#">40 more cites</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 mt-5 mt-lg-0 p-0" id="map">
                @if($listing)
                <div class="container-fluid ps-2">
                    <div class="card custom-card">
                        <div class="map_height overflow-auto" id="mapContainer">
                            <iframe class="gmap_iframe" frameborder="0" scrolling="no" id="gmap_iframe" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        </iframe>
                    </div>
                </div>
                @endif
            </div>
            </div>
        </div>
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
                $('#map').toggleClass('d-none');
                $('#galleryColumn').toggleClass('col-lg-12');
            });
        });
</script>
<script>
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
                    selected(selectedCategory);
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

        /* Space ka Values Ko Input Main Store Kerna Ka liya */

        document.addEventListener('DOMContentLoaded', function() {
        var priceRadioButtons = document.querySelectorAll('#dropdownMenuPrice input[type="radio"]');
        var attendeesRadioButtons = document.querySelectorAll('#dropdownMenuAttendees input[type="radio"]');
        var priceButton = document.getElementById('priceButton');
        var attendeesButton = document.getElementById('attendeesButton');

        priceRadioButtons.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                priceButton.innerText = this.nextElementSibling.innerText;
            });
        });

        attendeesRadioButtons.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                attendeesButton.querySelector('.attendees-label').innerText = this.nextElementSibling.innerText;
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var priceFromInput = document.getElementById('priceFrom');
        var priceToInput = document.getElementById('priceTo');
        var priceButton = document.getElementById('priceButton');

        priceFromInput.addEventListener('input', function() {
            updatePriceButton();
        });

        priceToInput.addEventListener('input', function() {
            updatePriceButton();
        });

        function updatePriceButton() {
            var priceFromValue = priceFromInput.value;
            var priceToValue = priceToInput.value;
            var buttonText = "{{ lang('Price') }}";

            if (priceFromValue && priceToValue) {
                buttonText = "$" + priceFromValue + " to $" + priceToValue;
            } else if (priceFromValue) {
                buttonText = "$" + priceFromValue + " and above";
            } else if (priceToValue) {
                buttonText = "Up to $" + priceToValue;
            }

            priceButton.innerText = buttonText;
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
    var attendeesInput = document.getElementById('attendeesInput');
    var attendeesButton = document.getElementById('attendeesButton');

    attendeesInput.addEventListener('input', function() {
        updateAttendeesButton();
    });

    function updateAttendeesButton() {
        var attendeesValue = attendeesInput.value;
        var buttonText = "{{ lang('Attendees') }}";

        if (attendeesValue) {
            buttonText = attendeesValue;
        }

        attendeesButton.querySelector('.attendees-label').innerText = buttonText;
    }
});

    document.getElementById('dateInput').addEventListener('focusout', function() {
        this.type = 'text';
        this.placeholder = 'dd/mm/yyyy';
    });

    document.getElementById('clearButton1').addEventListener('click', function(e) {
    e.preventDefault();
    var attendeesInput = document.getElementById('attendeesInput');
    var priceButton = document.getElementById('priceButton');

    if (attendeesInput.value === '') {
        priceButton.innerHTML = "{{ lang('Price') }} <span class='caret'></span>";
    }

    attendeesInput.value = '';
});

document.getElementById('clearButton2').addEventListener('click', function(e) {
    e.preventDefault();
    var attendeesInput = document.getElementById('attendeesInput');
    var attendeesButton = document.getElementById('attendeesButton');

    if (attendeesInput.value === '') {
        var attendeesLabel = document.querySelector('.attendees-label');
        attendeesLabel.innerHTML = "{{ lang('Attendees') }}";
    }

    attendeesInput.value = '';
});

$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
//   navText: [
//     "<i class='fa fa-caret-left'></i>",
//     "<i class='fa fa-caret-right'></i>"
//   ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})

</script>

@endsection