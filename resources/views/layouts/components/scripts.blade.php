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

    <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

    <!-- TIMEPICKER JS -->
    <script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script>
<!-- DATEPICKER JS -->
    <script src="{{ asset('assets/plugins/date-picker/date-picker.js') }}"></script>
    <script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

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
        function warningModal() {
            $('#warning-modal').modal('show');
        }
    </script>
    <script>
        function quoteModal(url) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                type: 'POST',
                url: url,
                success: function(res) {
                    if(res == ''){
                        notif({
                        type: 'error',
                        msg: 'Something went wrong',
                        autohide: true
                    });
                    }else{
                        $("#quote-modal").modal('show');
                    }
                    var route_name = "{{ route('accept_quote', ['id' => 'route_id']) }}".replace('route_id',
                        res.id);
                    var decline_name = "{{ route('decline_quote', ['id' => 'route_id']) }}".replace('route_id',
                        res.id);
                    $('#img').html('<img src="' + res.service.service_images[0].image + '" alt="">');
                    $('#img1').html('<img src="' + res.service.service_images[0].image + '" alt="">');
                    $('#revise_id').val(res.id);
                    $('#title').html(res.service.title);
                    $('#header').html(res.service.title);
                    $('p#description').text(res.service.description);
                    $('#amount').html(res.amount);
                    $('#date').html(res.date);
                    $('#location').text(res.service.address);
                    $('#guests').html(res.guests);
                    $('#seller_quote_description').html(res.seller_quote_description);
                    $('#total').html(res.amount);
                    $('#decline_btn').html('<a href="' + decline_name +
                        '" class="text-white"><button class="btn btn-white text-danger border-0">Decline</button></a>'
                        );
                    $('#accept_btn').html('<a href="' + route_name +
                        '" class="text-white"><button class="btn btn-primary">Accept</button></a>');
                    $('#revise_btn').html('<button class="btn btn-indigo" id="revisebtn">Revise and Resubmit</button>');
                }
            });
        }
        $(document).on('click','#revisebtn',function(e){
            e.preventDefault();
            id = $('#revise_id').val();
            url = "{{ route('load_accept_quote', ['id' => 'route_id']) }}".replace('route_id', id);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                type: 'POST',
                url: url,
                success: function(res) {
                    route = "{{ route('revise_quote', ['id' => 'route_id']) }}".replace('route_id', $('#revise_id').val());
                    $('#reviseQuoteForm').attr('action', route);
                    $('#revise_date').val(res.date);
                    $('#revise_guests').val(res.guests);
                    if(res.flexible_date == 1) $('#revise_flexible_date').attr('checked',true);
                    $('textarea#revise_description').val(res.description);
                    $('#revise_back_btn').html('<a id="revise_back" class="btn btn-white text-primary border-0">Back</a>');                   
                    $("#quote-modal").modal('hide');
                }
            });
            $('#reviseQuoteModal').modal('show');
        });

        $(document).on('click','#revise_back',function(){
            var route_name = "{{ route('load_accept_quote', ['id' => 'route_id']) }}".replace('route_id', $('#revise_id').val());
            $('#reviseQuoteModal').modal('hide');
            quoteModal(route_name);
        });
    </script>
    <!-- Custom JavaScript code -->
    <script>
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
                if (data.message.id == (`{{ auth()->user()->id }}`) && data.message.message == false && data.message
                    .error == 'Rejected') {
                    notif({
                        type: 'error',
                        msg: 'Quote request declined',
                        autohide: true
                    });
                }
                if (data.message.id == (`{{ auth()->user()->id }}`) && data.message.message == true) {
                    notif({
                        type: 'success',
                        msg: 'Your quote got reply',
                        autohide: true
                    });
                    var route_name = "{{ route('load_accept_quote', ['id' => 'route_id']) }}".replace('route_id', data.message.data_id);
                    quoteModal(route_name);
                }
            });
        </script>
    @endif
   
