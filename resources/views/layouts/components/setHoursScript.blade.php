<script>
    function startTime(day) {
            var startDay = day + '-start-time';
            var endDay = day + '-end-time';
            var selectedValue = $('#' + startDay).val();
            var startSelect1 = $('#' + endDay);
            var startSelectOptions = $('#' + startDay + ' .option');
            var selectedFound = false;

            startSelect1.empty(); // Clear existing options

            startSelectOptions.each(function() {
                var optionValue = $(this).val();

                if (!selectedFound && optionValue === selectedValue) {
                    selectedFound = true;
                }

                if (selectedFound) {
                    if (optionValue == selectedValue) {
                        startSelect1.append('<option value="' + optionValue +
                            '" class="option" disabled>' +
                            optionValue + '</option>');
                    } else {
                        startSelect1.append('<option value="' + optionValue + '" class="option">' +
                            optionValue +
                            '</option>');
                    }
                }
            });
        }

        // Call the startTime() function initially and whenever the select value changes
        $('#monday-start-time').on('change', function() {
            var day = $(this).data('day');
            startTime(day);
        });

        // Function to handle start time selection

        // Function to handle switch toggle
        function handleSwitchToggle(inputId, descriptionClass, contentClass, selectClass, HoursMore, day) {
            const switchInput = $('#' + inputId);
            const switchDescription = $('.' + descriptionClass);
            const rowContent = $('.' + contentClass);
            const SelectContent = $('.' + selectClass);
            const MoreHours = $('.' + HoursMore);
            var weekDay = day;

            switchInput.on('change', function() {
                if (this.checked) {
                    switchDescription.text('Open');
                    rowContent.css('display', 'block');
                    SelectContent.css('display', 'block');
                    MoreHours.css('display', 'block');
                } else {
                    switchDescription.text('Close');
                    rowContent.css('display', 'none');
                    SelectContent.css('display', 'none');
                    MoreHours.css('display', 'none');
                }
            });
        }

        // Call the handleSwitchToggle function for each instance
        handleSwitchToggle('custom-switch-checkbox1', 'custom-switch-description-1', 'row-content-1',
            'select-content-1',
            'Add-Hours-1', 'monday');
        handleSwitchToggle('custom-switch-checkbox2', 'custom-switch-description-2', 'row-content-2',
            'select-content-2',
            'Add-Hours-2', 'tuesday');
        handleSwitchToggle('custom-switch-checkbox3', 'custom-switch-description-3', 'row-content-3',
            'select-content-3',
            'Add-Hours-3', 'wednesday');
        handleSwitchToggle('custom-switch-checkbox4', 'custom-switch-description-4', 'row-content-4',
            'select-content-4',
            'Add-Hours-4', 'thursday');
        handleSwitchToggle('custom-switch-checkbox5', 'custom-switch-description-5', 'row-content-5',
            'select-content-5',
            'Add-Hours-5', 'friday');
        handleSwitchToggle('custom-switch-checkbox6', 'custom-switch-description-6', 'row-content-6',
            'select-content-6',
            'Add-Hours-6', 'saturday');
        handleSwitchToggle('custom-switch-checkbox7', 'custom-switch-description-7', 'row-content-7',
            'select-content-7',
            'Add-Hours-7', 'sunday');

        // Function to handle radio toggle
        function handleRadioToggle(timeInputId, setHourInputId, selectContentId, addHourBtn, insideHourBtn,showContent, day) {
            const timeInput = $('#' + timeInputId);
            const HourInput = $('#' + setHourInputId);
            const selectInput = $('#' + selectContentId);
            const HourButton = $('#' + addHourBtn);
            const InsideHourButton = $('.' + insideHourBtn);
            const ShowFullContent = $('#' + showContent);
            const weekDay = day;

            selectInput.css('display', 'none');
            HourButton.css('display', 'none');
            timeInput.on('click', function() {
                timeInput.attr('checked', 'true');
                HourInput.removeAttr('checked');
                selectInput.css('display', 'none');
                HourButton.css('display', 'none');
            });

            HourInput.on('click', function() {
                timeInput.removeAttr('checked');
                HourInput.attr('checked', 'true');
                if (HourInput.is(':checked')) {
                    selectInput.css('display', 'flex');
                    HourButton.css('display', 'block');
                    InsideHourButton.on('click', function() {
                        var maxGroup = 5;
                        if (ShowFullContent.children().length < maxGroup) {
                            var iteration = ShowFullContent.children().length;
                            iteration += 1;
                            var fieldHTML = `
                            <div class="row position-relative">
                                <div class="col-6">
                                    <div class="form-group">
                                        <select name="`+weekDay+`_start_time_`+iteration+`" class="form-control form-select select2" id="`+weekDay+`-start-time-toggle-`+iteration+`" onchange="startTimeToggle(`+iteration+`,'`+weekDay+`')">
                                            <option value="9 AM" class="option">9 AM</option>
                                            <option value="10 AM" class="option">10 AM</option>
                                            <option value="11 AM" class="option">11 AM</option>
                                            <option value="12 AM" class="option">12 AM</option>
                                            <option value="1 PM" class="option">1 PM</option>
                                            <option value="2 PM" class="option">2 PM</option>
                                            <option value="3 PM" class="option">3 PM</option>
                                            <option value="4 PM" class="option">4 PM</option>
                                            <option value="5 PM" class="option">5 PM</option>
                                            <option value="6 PM" class="option">6 PM</option>
                                            <option value="7 PM" class="option">7 PM</option>
                                            <option value="8 PM" class="option">8 PM</option>
                                            <option value="9 PM" class="option">9 PM</option>
                                            <option value="10 PM" class="option">10 PM</option>
                                            <option value="11 PM" class="option">11 PM</option>
                                            <option value="12 PM" class="option">12 PM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <select name="` + weekDay + `_end_time_` + iteration +`" class="form-control form-select select2 " id="` + weekDay +`-end-time-toggle-` + iteration + `" data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                            <option value="12 PM" selected="">12 PM</option>
                                        </select>
                                    </div>
                                </div>
                                <span class="remove"> x </span>
                            </div>`;
                            ShowFullContent.append(fieldHTML);
                        } else {
                            alert('Maximum ' + maxGroup + ' are allowed.');
                        }
                        $(document).on('click', '.remove', function() {
                            $(this).parent().remove();
                        });
                    });
                }
            });
        }

        // Call the handleRadioToggle function for each instance
        handleRadioToggle('time-radio-1', 'set-hour-radio-1', 'custom-time-selection-1', 'Add-Hours-1','addMore-1','showContent-1', 'monday');
        handleRadioToggle('time-radio-2', 'set-hour-radio-2', 'custom-time-selection-2', 'Add-Hours-2','addMore-2','showContent-2', 'tuesday');
        handleRadioToggle('time-radio-3', 'set-hour-radio-3', 'custom-time-selection-3', 'Add-Hours-3','addMore-3','showContent-3', 'wednesday');
        handleRadioToggle('time-radio-4', 'set-hour-radio-4', 'custom-time-selection-4', 'Add-Hours-4','addMore-4','showContent-4', 'thursday');
        handleRadioToggle('time-radio-5', 'set-hour-radio-5', 'custom-time-selection-5', 'Add-Hours-5','addMore-5','showContent-5', 'friday');
        handleRadioToggle('time-radio-6', 'set-hour-radio-6', 'custom-time-selection-6', 'Add-Hours-6','addMore-6','showContent-6', 'saturday');
        handleRadioToggle('time-radio-7', 'set-hour-radio-7', 'custom-time-selection-7', 'Add-Hours-7','addMore-7','showContent-7', 'sunday');

        // Function to handle start time toggle
        function startTimeToggle(iteration, weekDay) {
            var start_id = weekDay + '-start-time-toggle-' + iteration;
            var end_id = weekDay + '-end-time-toggle-' + iteration;
            var selectedValue = $('#' + start_id).val();
            var startSelect1 = $('#' + end_id);
            var startSelectOptions = $('#' + start_id + ' .option');
            var selectedFound = false;

            startSelect1.empty(); // Clear existing options

            startSelectOptions.each(function() {
                var optionValue = $(this).val();

                if (!selectedFound && optionValue === selectedValue) {
                    selectedFound = true;
                }

                if (selectedFound) {
                    if (optionValue == selectedValue) {
                        startSelect1.append('<option value="' + optionValue +
                            '" class="option" disabled>' +
                            optionValue + '</option>');
                    } else {
                        startSelect1.append('<option value="' + optionValue + '" class="option">' +
                            optionValue +
                            '</option>');
                    }
                }
            });
        }
</script>
