// Email validation regex pattern
var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

// Phone number validation regex pattern
var phoneRegex = /^\+[0-9]{6,15}$/; // Allow at least 6 digits (including country code)

// Event listener for the email input field
$('#email').on('input', function() {
    var input = $(this).val();
    var emailInput = $(this);

    // Check if the input looks like an email address
    if (emailRegex.test(input)) {
        emailInput.prop('type', 'email');
        emailInput.prop('id', 'email');
        emailInput.prop('name', 'email');
        emailInput.attr('data-parsley-pattern', emailRegex); // Add Parsley validation for email
        $('#email_err').text(''); // Clear any previous error message
    } else if (phoneRegex.test(input)) { // Check if the input looks like a phone number
        emailInput.prop('type', 'tel');
        emailInput.prop('id', 'phone_number');
        emailInput.prop('name', 'phone_number');
        emailInput.attr('data-parsley-pattern', phoneRegex); // Add Parsley validation for email
        $('#email_err').text(''); // Clear any previous error message
    } else {
        // If it doesn't match both email and phone number format, show an error message
        emailInput.prop('type', 'text');
        emailInput.attr('data-parsley-pattern', emailRegex);
        $('#email_err').text('Please enter a valid email address or phone number.');
    }
});
