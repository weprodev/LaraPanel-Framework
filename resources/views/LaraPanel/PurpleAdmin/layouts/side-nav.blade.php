<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @foreach (\WeProDev\LaraNav\Service\LNavService::getNav('SIDE_NAV') as $item)
            @include($lp['directory'] . '.' . $lp['theme'] . '.layouts.link', ['item' => $item])
        @endforeach

        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <a href="{{ url(config('larapanel.path.admin')) }}"
                    class="btn btn-block btn-lg btn-gradient-primary mt-4"><- {{ __('Return Back') }}</a>
            </span>
        </li>
    </ul>
</nav>
