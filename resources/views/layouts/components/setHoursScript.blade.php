<script>
    // Function to handle the switch toggle
    function handleSwitchToggle(inputId, descriptionClass, contentClass, selectClass, HoursMore) {
        const switchInput = document.getElementById(inputId);
        const switchDescription = document.querySelector(`.${descriptionClass}`);
        const rowContent = document.querySelector(`.${contentClass}`);
        const SelectContent = document.querySelector(`.${selectClass}`);
        const MoreHours = document.querySelector(`.${HoursMore}`);

        switchInput.addEventListener('change', function() {
            if (this.checked) {
                switchDescription.textContent = 'Open'; // Change the text to 'Open' when checked
                rowContent.style.display = 'block'; // Show the contents when checked
                SelectContent.style.display = 'block'; // Show the contents when checked
                MoreHours.style.display = 'block'; // Show the contents when
            } else {
                switchDescription.textContent = 'Close'; // Change the text to 'Close' when unchecked
                rowContent.style.display = 'none'; // Hide the contents when unchecked
                SelectContent.style.display = 'none'; // Hide the contents when unchecked
                MoreHours.style.display = 'none'; // Hide the contents when unchecked
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
    // Add more function calls for other instances, if needed

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
            if (timeInput.checked) {
                selectInput.style.display = 'none';
                HourButton.style.display = 'none';
            }
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
                        var len = $(ShowFullContent).length;
                        console.log(len);
                        var fieldHTML =
                            `<div class="row position-relative">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select name="star-time" class="form-control form-select select2"
                                                    data-bs-placeholder="Select Country"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option value="" selected="" disabled>Start Time</option>
                                                    <option value="9 AM">9 AM</option>
                                                    <option value="10 AM">10 AM</option>
                                                    <option value="11 AM">11 AM</option>
                                                    <option value="12 AM">12 AM</option>
                                                    <option value="1 PM">1 PM</option>
                                                    <option value="2 PM">2 PM</option>
                                                    <option value="3 PM">3 PM</option>
                                                    <option value="4 PM">4 PM</option>
                                                    <option value="5 PM">5 PM</option>
                                                    <option value="6 PM">6 PM</option>
                                                    <option value="7 PM">7 PM</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select name="star-time" class="form-control form-select select2"
                                                    data-bs-placeholder="Select Country"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option value="" selected="" disabled>Start Time</option>
                                                    <option value="9 AM">9 AM</option>
                                                    <option value="10 AM">10 AM</option>
                                                    <option value="11 AM">11 AM</option>
                                                    <option value="12 AM">12 AM</option>
                                                    <option value="1 PM">1 PM</option>
                                                    <option value="2 PM">2 PM</option>
                                                    <option value="3 PM">3 PM</option>
                                                    <option value="4 PM">4 PM</option>
                                                    <option value="5 PM">5 PM</option>
                                                    <option value="6 PM">6 PM</option>
                                                    <option value="7 PM">7 PM</option>
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
                    // $('.remove').on("click", function() {
                    //     $(this).parent().remove();
                    // });
                });
            }
        });


    }
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
