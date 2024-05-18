<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $lp['name'] }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet"
        href="{{ asset($lp['directory'] . '/PurpleAdmin/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset($lp['directory'] . '/PurpleAdmin/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset($lp['directory'] . '/PurpleAdmin/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset(config('larapanel.path.favicon')) }}">

    @yield('header')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include($lp['directory'] . '.PurpleAdmin.layouts.top-nav')
        <!-- partial -->

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include($lp['directory'] . '.PurpleAdmin.layouts.side-nav')

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('breadcrumb')

                    @include($lp['directory'] . '.PurpleAdmin.layouts.alert')

                    @yield('content')
                </div>
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <!-- Of courese you can delete our name here :)
                        -> your support and donation will motivate us to improve the package for the future :)
                    -->
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-block">LaraPanel By
                            <a href="https://weprodev.com" target="_blank">WeProDev</a>.</span>
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Theme By <a
                                href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights
                            reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
        </div>
    </div>

    <!-- plugins:js -->
    <script src="{{ asset($lp['directory'] . '/PurpleAdmin/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset($lp['directory'] . '/PurpleAdmin/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset($lp['directory'] . '/PurpleAdmin/js/off-canvas.js') }}"></script>
    <script src="{{ asset($lp['directory'] . '/PurpleAdmin/js/misc.js') }}"></script>
    <!-- endinject -->
    @yield('footer')
</body>

</html>
