<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('Authentication') . '|' . env('APP_NAME') }}</title>
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset($lp['directory'] . '/' . $lp['theme'] . '/css/style.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset(config('larapanel.path.favicon')) }}" />
    @yield('header')
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        @include($lp['directory'] . '.' . $lp['theme'] . '.layouts.alert')

                        <div class="auth-form-light text-left p-5">
                            <a href="{{ url('/') }}" class="brand-logo"> <img
                                    src="{{ asset(config('larapanel.path.logo')) }}"></a>
                            <br>

                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    @yield('footer')
</body>

</html>
