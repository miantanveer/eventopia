<script>
    function startTime() {
        var selectedValue = $('.start-time-select').val();
        var startSelect1 = $('.start-time-select1');
        var startSelectOptions = $('.start-time-select .option');
        var selectedFound = false;

        startSelect1.empty(); // Clear existing options

        startSelectOptions.each(function() {
            var optionValue = $(this).val();

            if (!selectedFound && optionValue === selectedValue) {
                selectedFound = true;
            }

            if (selectedFound) {
                if (optionValue == selectedValue) {
                    startSelect1.append('<option value="' + optionValue + '" class="option" disabled>' +
                        optionValue + '</option>');
                } else {
                    startSelect1.append('<option value="' + optionValue + '" class="option">' + optionValue +
                        '</option>');
                }
            }
        });
    }


    // Call the startTime() function initially and whenever the select value changes
    $('.start-time-select').on('change', startTime);
    

    function startTimeToggle(iteration) {
        var start_id = 'start-time-select-toggle'+iteration;
        var end_id = 'start-time-select1-toggle'+iteration;
        var selectedValue = $('#'+start_id).val();
        var startSelect1 = $('#'+end_id);
        var startSelectOptions = $('#'+start_id+' .option');
        var selectedFound = false;

        startSelect1.empty(); // Clear existing options

        startSelectOptions.each(function() {
            var optionValue = $(this).val();

            if (!selectedFound && optionValue === selectedValue) {
                selectedFound = true;
            }

            if (selectedFound) {
                if (optionValue == selectedValue) {
                    startSelect1.append('<option value="' + optionValue + '" class="option" disabled>' +
                        optionValue + '</option>');
                } else {
                    startSelect1.append('<option value="' + optionValue + '" class="option">' + optionValue +
                        '</option>');
                }
            }
        });
    }

    // Call the startTime() function initially and whenever the select value changes
    $('.start-time-select-toggle').on('change', startTimeToggle);

    function handleSwitchToggle(inputId, descriptionClass, contentClass, selectClass, HoursMore) {
        const switchInput = document.getElementById(inputId);
        const switchDescription = document.querySelector(`.${descriptionClass}`);
        const rowContent = document.querySelector(`.${contentClass}`);
        const SelectContent = document.querySelector(`.${selectClass}`);
        const MoreHours = document.querySelector(`.${HoursMore}`);

        switchInput.addEventListener('change', function() {
            if (this.checked) {
                switchDescription.textContent = 'Open';
                rowContent.style.display = 'block';
                SelectContent.style.display = 'block';
                MoreHours.style.display = 'block';
            } else {
                switchDescription.textContent = 'Close';
                rowContent.style.display = 'none';
                SelectContent.style.display = 'none';
                MoreHours.style.display = 'none';
            }
        });
    }

    // Call the function for each instance
    handleSwitchToggle('custom-switch-checkbox1', 'custom-switch-description-1', 'row-content-1', 'select-content-1',
        'Add-Hours-1');
    handleSwitchToggle('custom-switch-checkbox2', 'custom-switch-description-2', 'row-content-2', 'select-content-2',
        'Add-Hours-2');
    handleSwitchToggle('custom-switch-checkbox3', 'custom-switch-description-3', 'row-content-3', 'select-content-3',
        'Add-Hours-3');
    handleSwitchToggle('custom-switch-checkbox4', 'custom-switch-description-4', 'row-content-4', 'select-content-4',
        'Add-Hours-4');
    handleSwitchToggle('custom-switch-checkbox5', 'custom-switch-description-5', 'row-content-5', 'select-content-5',
        'Add-Hours-5');
    handleSwitchToggle('custom-switch-checkbox6', 'custom-switch-description-6', 'row-content-6', 'select-content-6',
        'Add-Hours-6');
    handleSwitchToggle('custom-switch-checkbox7', 'custom-switch-description-7', 'row-content-7', 'select-content-7',
        'Add-Hours-7');

    function handleRadioToggle(timeInputId, setHourInputId, selectContentId, addHourBtn, insideHourBtn, showContent) {
        const timeInput = document.getElementById(timeInputId);
        const HourInput = document.getElementById(setHourInputId);
        const selectInput = document.getElementById(selectContentId);
        const HourButton = document.getElementById(addHourBtn);
        const InsideHourButton = document.querySelector(`.${insideHourBtn}`);
        const ShowFullContent = document.getElementById(showContent);

        selectInput.style.display = 'none';
        HourButton.style.display = 'none';
        timeInput.addEventListener('click', function() {
            timeInput.setAttribute('checked', 'true');
            HourInput.removeAttribute('checked');
            selectInput.style.display = 'none';
            HourButton.style.display = 'none';
        });

        HourInput.addEventListener('click', function() {
            timeInput.removeAttribute('checked');
            HourInput.setAttribute('checked', 'true');
            if (HourInput.checked) {
                selectInput.style.display = 'flex';
                HourButton.style.display = 'block';
                $(InsideHourButton).click(function() {
                    var maxGroup = 5;
                    if ($(ShowFullContent).children().length < maxGroup) {
                        var iteration = $(ShowFullContent).children().length;
                        iteration += 1;
                        var fieldHTML = `
                            <div class="row position-relative">
                                <div class="col-6">
                                    <div class="form-group">
                                        <select name="star-time" class="form-control form-select select2" id="start-time-select-toggle`+iteration+`"
                                            data-bs-placeholder="Select Country" tabindex="-1" onchange="startTimeToggle(`+iteration+`)" aria-hidden="true">
                                            <option value="" selected="" disabled>Start Time</option>
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
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <select name="end-time" class="form-control form-select select2 " id="start-time-select1-toggle`+iteration+`"
                                            data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                            <option value="" selected="" disabled>Start Time</option>
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
                                        </select>
                                    </div>
                                </div>
                                <span class="remove"> x </span>
                            </div>`;
                        $(ShowFullContent).append(fieldHTML);
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
    handleRadioToggle('time-radio-1', 'set-hour-radio-1', 'custom-time-selection-1', 'Add-Hours-1', 'addMore-1',
        'showContent-1');
    handleRadioToggle('time-radio-2', 'set-hour-radio-2', 'custom-time-selection-2', 'Add-Hours-2', 'addMore-2',
        'showContent-2');
    handleRadioToggle('time-radio-3', 'set-hour-radio-3', 'custom-time-selection-3', 'Add-Hours-3', 'addMore-3',
        'showContent-3');
    handleRadioToggle('time-radio-4', 'set-hour-radio-4', 'custom-time-selection-4', 'Add-Hours-4', 'addMore-4',
        'showContent-4');
    handleRadioToggle('time-radio-5', 'set-hour-radio-5', 'custom-time-selection-5', 'Add-Hours-5', 'addMore-5',
        'showContent-5');
    handleRadioToggle('time-radio-6', 'set-hour-radio-6', 'custom-time-selection-6', 'Add-Hours-6', 'addMore-6',
        'showContent-6');
    handleRadioToggle('time-radio-7', 'set-hour-radio-7', 'custom-time-selection-7', 'Add-Hours-7', 'addMore-7',
        'showContent-7');
</script>
