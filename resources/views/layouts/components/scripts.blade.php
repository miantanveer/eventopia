    <!-- JQUERY JS -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- INPUT MASK JS-->
    <script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{ asset('assets/plugins/p-scroll/pscroll-1.js') }}"></script>

    <script src="{{ asset('assets/plugins/notify/js/rainbow.js') }}"></script>
    <script src="{{ asset('assets/plugins/notify/js/sample.js') }}"></script>
    <script src="{{ asset('assets/plugins/notify/js/notifIt.js') }}"></script>

    @yield('scripts')

    <!-- Color Theme js -->
    <script src="{{ asset('assets/js/themeColors.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- SWEET-ALERT JS -->
    <script src="{{ asset('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert.js') }}"></script>

    <script>
        function handleNotify(url) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                type: 'GET',
                url: url,
                success: function(res) {
                    $.each(res, function(index, value) {
                        console.log(value);
                        if (value.type === 'service' && value.quote_id) {
                            // Create the HTML for the item
                            var html ='<a class="dropdown-item d-flex" data-bs-toggle="modal" onclick="quoteModal()">';
                            html +='<div class="me-3 notifyimg bg-primary brround box-shadow-primary">';
                            html += '<i class="fe fe-dollar-sign"></i>';
                            html += '</div>';
                            html += '<div class="mt-1">';
                            html += '<h5 class="notification-label mb-1">'+ value.description +'</h5>';
                            html += '<span class="notification-subtext">'+ value.created_at +'</span>';
                            html += '</div>';
                            html += '</a>';

                            // Append the HTML to the #notify_service element
                            $('#notify_service').append(html);
                        }
                    });

                }
            });
        };
    </script>
    <!-- Custom JavaScript code -->
    <script>
        function quoteModal() {
            $('#quote-modal').modal('show');
        };
        $(document).ready(function() {
            $(document).on("submit", "#contactForm", function(e) {
                e.preventDefault();
                $('body').addClass('timer-alert');
                swal({
                    title: "Success.",
                    text: "We will contact you shortly.",
                    timer: 2000,
                    showConfirmButton: false
                });
            });
        });
    </script>
    @if (Auth::check())
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <script>
            'use strict';
            Pusher.logToConsole = true;
            var pusher = new Pusher('2cd8b23ab488aef87078', {
                cluster: 'ap3'
            });
            var channel = pusher.subscribe('notification-channel');
            channel.bind('notification-event', function(data) {
                if (data.message.id == (`{{ auth()->user()->id }}`) && data.message.message == false) {
                    notif({
                        type: 'success',
                        msg: 'You just received a quote request',
                        autohide: true
                    });
                }
            });
        </script>
    @endif
