<script>
    'use strict';

    let status = "{{ session('success') ? 'success' : (session('error') ? 'danger' : '') }}"
    let message =
        "{{ session('success') ? session('success') : (session('error') ? session('error') : '') }}"
    let icon = status == 'success' ? '<i class="fa fa-check"></i>' : (status == 'danger' ?
        '<i class="fa fa-warning"></i>' : '')
    let errors = JSON.parse("{{ $errors }}".replaceAll('&quot;', '"'));

    if (status) {
        (function() {
            $(function() {
                // return $.growl.notice1({
                //     message: message
                // });
                return $.growl.error1({
                    message: message
                });
            });
        }).call(this);
        console.log(status);
        console.log(message);
    }

    if (Object.keys(errors).length) multipleErrors(errors)

    function notifyError(message) {
        $.notify('<i class="fa fa-warning"></i>' + message, {
            type: 'danger',
            allow_dismiss: true,
            delay: 10000,
            showProgressbar: true,
            timer: 10,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            }
        });
    }

    // function multipleErrors(message){
    //     let errors = '<ul>'
    //     Object.entries(message).forEach(error => {
    //         errors = errors + '<li>' + error[1] + '</li>'
    //     });
    //     errors += '</ul>'
    //     notifyError(errors)
    // }

    // // ServerSide Error + Success
    // function successMessage(message) {
    //     $.notify('<i class="fa fa-check"></i>' + message, {
    //         type: 'success',
    //         allow_dismiss: true,
    //         delay: 10000,
    //         showProgressbar: true,
    //         timer: 10,
    //         animate: {
    //             enter: 'animated fadeInDown',
    //             exit: 'animated fadeOutUp'
    //         }
    //     });
    // }

    // function errorMessage(message) {
    //     if (typeof message == 'string') {
    //         notifyError(message)
    //     } else {
    //         multipleErrors(message)
    //     }
    // }
</script>

<script src="{{ asset('assets/plugins/notify/js/rainbow.js') }}"></script>
<script src="{{ asset('assets/plugins/notify/js/sample.js') }}"></script>
<script src="{{ asset('assets/plugins/notify/js/jquery.growl.js') }}"></script>
<script src="{{ asset('assets/plugins/notify/js/notifIt.js') }}"></script>
