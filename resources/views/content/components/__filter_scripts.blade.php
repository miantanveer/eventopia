<script>
    $(document).ready(function() {
        $('#calendarAndTimePicker').hide();
        $('#selectedDate').click(function() {
            $('.FormBorder').css({
                "border-bottom-left-radius": "0px",
                "border-bottom-right-radius": "0px"
            });
            $('#calendarAndTimePicker').show();
        });
        $(document).click(function(event) {
            var target = $(event.target);
            if (!target.closest('#calendarAndTimePicker').length && !target.is('#selectedDate')) {
                $('#calendarAndTimePicker').hide();
                $('.FormBorder').removeClass("data-appended");
                $('.FormBorder').css({
                    "border-bottom-left-radius": "13px",
                    "border-bottom-right-radius": "13px"
                });
            }
        });
        var date = new Date();
        var today = date.getDate();
        $(".right-button").click({
            date: date
        }, next_year);
        $(".left-button").click({
            date: date
        }, prev_year);
        $(".month").click({
            date: date
        }, month_click);
        $(".months-row")
            .children()
            .eq(date.getMonth())
            .addClass("active-month");
        init_calendar(date);
        var events = check_events(
            today,
            date.getMonth() + 1,
            date.getFullYear()
        );
    });

    function init_calendar(date) {
        $(".tbody-tb").empty();
        var calendar_days = $(".tbody-tb");
        var month = date.getMonth();
        var year = date.getFullYear();
        var day_count = days_in_month(month, year);
        var row = $("<tr class='table-row'></tr>");
        var today = date.getDate();
        date.setDate(1);
        var first_day = date.getDay();
        for (var i = 0; i < 35 + first_day; i++) {
            var day = i - first_day + 1;
            if (i % 7 === 0) {
                calendar_days.append(row);
                row = $("<tr class='table-row'></tr>");
            }
            if (i < first_day || day > day_count) {
                var curr_date = $("<td class='table-date nil'>" + "</td>");
                row.append(curr_date);
            } else {
                var curr_date = $("<td class='table-date'>" + day + "</td>");
                var events = check_events(day, month + 1, year);
                if (today === day && $(".active-date").length === 0) {
                    curr_date.addClass("active-date");
                }
                curr_date.click({
                        events: events,
                        month: months[month],
                        day: day
                    },
                    date_click
                );
                row.append(curr_date);
            }
        }
        calendar_days.append(row);
        $(".year").text(year);
    }

    function days_in_month(month, year) {
        var monthStart = new Date(year, month, 1);
        var monthEnd = new Date(year, month + 1, 1);
        return (monthEnd - monthStart) / (1000 * 60 * 60 * 24);
    }
    var dateInput;

    function date_click(event) {
        $(".active-date").removeClass("active-date");
        $(this).addClass("active-date");
        const day = $(this).text();
        const month = $('.month.active-month').text();
        const year = $('.year').text();
        var fullDate = month + ' ' + day + ', ' + year;
        $('#hiddenDate').val(fullDate);
        $('#start_time').removeAttr('disabled').val("9:00 AM").css('border', '1px solid #898587');
        $('#end_time').removeAttr('disabled').val("9:00 PM").css('border', '1px solid #898587');
        $('.startTime_label').css('color', 'black');
        $('.endTime_label').css('color', 'black');
        updateAppendedValue();
    }

    function month_click(event) {
        var date = event.data.date;
        $(".active-month").removeClass("active-month");
        $(this).addClass("active-month");
        var new_month = $(".month").index(this);
        date.setMonth(new_month);
        init_calendar(date);
    }

    function next_year(event) {
        var date = event.data.date;
        var new_year = date.getFullYear() + 1;
        $("year").html(new_year);
        date.setFullYear(new_year);
        init_calendar(date);
    }

    function prev_year(event) {
        var date = event.data.date;
        var new_year = date.getFullYear() - 1;
        $("year").html(new_year);
        date.setFullYear(new_year);
        init_calendar(date);
    }

    function check_events(day, month, year) {
        var events = [];
        for (var i = 0; i < event_data["events"].length; i++) {
            var event = event_data["events"][i];
            if (
                event["day"] === day &&
                event["month"] === month &&
                event["year"] === year
            ) {
                events.push(event);
            }
        }
        return events;
    }
    var event_data = {
        events: [{
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
                cancelled: true,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
                cancelled: true,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
                cancelled: true,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
                cancelled: true,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
                cancelled: true,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
                cancelled: true,
            },
            {
                occasion: " Repeated Test Event ",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 10,
            },
            {
                occasion: " Test Event",
                invited_count: 120,
                year: 2017,
                month: 5,
                day: 11,
            },
        ],
    };
    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];
    const $startTimeInput = $("#start_time");
    const $endTimeInput = $("#end_time");
    const $appendedValue = $('#selectedDate');

    $startTimeInput.on("change", updateAppendedValue);
    $endTimeInput.on("change", updateAppendedValue);

    function updateAppendedValue() {
        const selectedDate = $("#hiddenDate").val();
        const selectedStartTime = $startTimeInput.val();
        const selectedEndTime = $endTimeInput.val();

        const formattedAppendedValue = `${selectedDate} ${selectedStartTime} to ${selectedEndTime}`;
        $appendedValue.val(formattedAppendedValue);
    }
    $('#clear-button').on('click', function() {
        $appendedValue.val('');
        $('#start_time').attr('disabled', 'true').css('border', '1px solid #e9edf4');
        $('#end_time').attr('disabled', 'true').css('border', '1px solid #e9edf4');
        $('.startTime_label').css('color', '#9fa7af');
        $('.endTime_label').css('color', '#9fa7af');
    });
    
        let categories;
        var id = '{{ @$type }}' + '_search_url';
        var url = $('#' + id).val();            
        $.ajax({
            url: url,
            type: "GET",
            success: function(res) {
                categories = res.data;
            }
        });

    $('#planCatagories').on('input', function() {
        var inputVal = $(this).val().toLowerCase();
        var dropdown = $('#categoryDropdown');

        dropdown.empty();

        if (inputVal !== '') { // Check if input is not empty
            var filteredCategories = categories.filter(function(category) {
                return category.toLowerCase().includes(inputVal);
            });

            // Ensure at least 5 categories are shown
            var minCategoriesToShow = Math.min(filteredCategories.length, 5);

            for (var i = 0; i < minCategoriesToShow; i++) {
                dropdown.append('<li><a class="dropdown-item" href="#">' + filteredCategories[i] + '</a></li>');
            }

            if (minCategoriesToShow > 0) {
                dropdown.show();
            } else {
                dropdown.hide();
            }
        } else {
            dropdown.hide(); // Hide dropdown if input is empty
        }
    });

    $('#categoryDropdown').on('click', 'a', function(e) {
        e.preventDefault();
        var selectedCategory = $(this).text();
        $('#planCatagories').val(selectedCategory);
        selected(selectedCategory);
        $('#categoryDropdown').hide();
    });

    function selected(input,address) {
        $('#dateTimeModal').modal('hide');
        url = $('#search').val();
        selectedPrice = $('input[name="price"]:checked').val();
        guests = $('input[name="guests"]:checked').val();
        var startTime = '';
        var endTime = '';
        $('#start_time').on('change', function() {
            startTime = $(this).val();
        });
        $('#end_time').on('change', function() {
            endTime = $(this).val();
        });
        date = $("#hiddenDate").val();
        $.ajax({
            url: url,
            data: {
                'price': selectedPrice,
                'attendees': guests,
                'date': date,
                'keyword': input,
                'startTime': startTime,
                'endTime': endTime,
                'address': address
            },
            type: "GET",
            success: function(res) {
                $('#ajax_data').html(res.data);
                $('#map').html(res.map);
            }
        });
    }
    
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
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

{{-- Google addresses code --}}
<script>
$(document).ready(function() {
            var autocompleteService = new google.maps.places.AutocompleteService();

            function hideDropdown(resultsDiv, inputDiv) {
                resultsDiv.empty();
                inputDiv.removeClass("data-appended");
                inputDiv.css("border-bottom-left-radius", "13px !important").css("border-bottom-right-radius",
                    "13px !important");
            }

            function setupLocationAutocomplete(inputId, dropdownId) {
                const locationInput = $(inputId);
                const addressDropdown = $(dropdownId);

                locationInput.on('input', function() {
                    var input = $(this).val();
                    if (input === '') {
                        hideDropdown(addressDropdown, locationInput.parent());
                        return;
                    }
                    autocompleteService.getPlacePredictions({
                        input: input
                    }, function(predictions, status) {
                        if (status === google.maps.places.PlacesServiceStatus.OK) {
                            addressDropdown.empty();
                            predictions.forEach(function(prediction) {
                                var addressItem = $(
                                        '<div class="text-start p-3 drop-address-result">')
                                    .text(prediction.description);
                                addressItem.on('click', function() {
                                    locationInput.val(prediction.description);
                                    addressDropdown.empty();
                                    selected('',prediction.description);
                                    locationInput.parent().removeClass(
                                        "data-appended");
                                    locationInput.parent().css(
                                        "border-bottom-left-radius",
                                        "13px !important").css(
                                        "border-bottom-right-radius",
                                        "13px !important");
                                });
                                addressDropdown.append(addressItem);
                                locationInput.parent().addClass("data-appended");
                                locationInput.parent().css("border-bottom-left-radius",
                                    "0px !important").css("border-bottom-right-radius",
                                    "0px !important");
                            });
                        }
                    });
                });

                $(document).click(function(event) {
                    var target = $(event.target);
                    if (!target.closest(dropdownId).length && !target.is(inputId)) {
                        hideDropdown(addressDropdown, locationInput.parent());
                    }
                });
            }

            setupLocationAutocomplete("#location", "#addressDropdown");
        });
</script>