<script>
    'use strict';

    let status = "{{ session('success') ? 'success' : (session('error') ? 'error' : '') }}"
    let message = "{{ session('success') ? session('success') : (session('error') ? session('error') : '') }}"
    let errors = JSON.parse("{{ $errors }}".replaceAll('&quot;', '"'));

    if (status) {
        notif({
            type: status,
            msg: message,
            autohide: true
        });
    }
</script>
