<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaraPanel Framework</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('comming-soon/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('comming-soon/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('comming-soon/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>
    <div class="bg-img1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15"
        style="background-image: url('{{ asset('comming-soon/img/bg01.jpg') }}'); flex-direction:column;">
        <div class="wsize1 bor1 bg1 p-t-175 p-b-45 p-l-15 p-r-15 respon1">
            <div class="wrappic1">
                <img src="{{ asset('logo.png') }}" alt="LaraPanel Logo" width="400">
            </div>

            <p class="txt-center m2-txt1 p-t-33 p-b-68">
                Our website is currently undergoing enhancements and will be back online soon.
            </p>

            <div class="wsize2 flex-w flex-c hsize1 cd100">
                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt1 p-b-9 days">35</span>
                    <span class="s1-txt1">Days</span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt1 p-b-9 hours">17</span>
                    <span class="s1-txt1">Hours</span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt1 p-b-9 minutes">50</span>
                    <span class="s1-txt1">Minutes</span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt1 p-b-9 seconds">39</span>
                    <span class="s1-txt1">Seconds</span>
                </div>
            </div>

            @if (env('SUBSCRIBE_ACTION'))
                <form class="flex-w flex-c-m contact100-form validate-form p-t-55"
                    action="{{ env('SUBSCRIBE_ACTION') }}" data-code="" method="post" target="_blank">
                    <div class="wrap-input100 validate-input where1" data-validate = "Email is required: ex@abc.xyz">
                        <input class="s1-txt2 placeholder0 input100" type="text" name="fields[email]"
                            placeholder="Your Email" required>
                        <span class="focus-input100"></span>
                    </div>
                    <button class="flex-c-m s1-txt3 size3 how-btn trans-04 where1">
                        Get Notified
                    </button>
                </form>

                <p class="s1-txt4 txt-center p-t-10">
                    I promise to <span class="bor2">never</span> spam
                </p>
            @endif

        </div>
        <div style="margin-top: 1em">
            <p>Powered By <a class="bor2" style="color: unset;" href="https://github.com/weprodev/LaraPanel-Framework"
                    target="_blank">LaraPanel Framework</a></p>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('comming-soon/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('comming-soon/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('comming-soon/vendor/countdowntime/moment.min.js') }}"></script>
    <script src="{{ asset('comming-soon/vendor/countdowntime/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('comming-soon/vendor/countdowntime/moment-timezone-with-data.min.js') }}"></script>
    <script src="{{ asset('comming-soon/vendor/countdowntime/countdowntime.js') }}"></script>
    @php
        $endTime = env('RELEASE_DATE') ? Carbon\Carbon::parse(env('RELEASE_DATE')) : \Carbon\Carbon::now()->addDays(35);
    @endphp
    <script>
        $('.cd100').countdown100({
            /*Set Endtime here*/
            /*Endtime must be > current time*/
            endtimeYear: {{ $endTime->year }},
            endtimeMonth: {{ $endTime->month }},
            endtimeDate: {{ $endTime->day }},
            endtimeHours: {{ $endTime->hour }},
            endtimeMinutes: {{ $endTime->minute }},
            endtimeSeconds: {{ $endTime->second }},
            timeZone: ""
            // ex:  timeZone: "America/New_York"
            //go to " http://momentjs.com/timezone/ " to get timezone
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('comming-soon/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('comming-soon/js/main.js') }}"></script>
</body>

</html>
