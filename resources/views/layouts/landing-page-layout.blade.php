<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Eventopia">
    <meta name="author" content="SPRUKO™">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="{{ asset('assets/css/landing-page.css') }}">
    <title>Eventopia | Landing Page</title>
    <link rel="stylesheet" href="{{ asset('assets/css/flatpicker.min.css') }}">
    @include('layouts.components.styles')
    @yield('styles')
</head>

<body class="app sidebar-mini ltr bg-white">
    <!-- global-loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>

    @yield('content')

    @include('layouts.components.modal')

    @yield('modal')

    @include('layouts.components.global-helper')

    @include('layouts.components.dark-footer')

    @include('layouts.components.scripts')

</body>

</html>
