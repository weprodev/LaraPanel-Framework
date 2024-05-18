<nav class="navbar default-layout-navbar col-lg-12 col-12 p-1 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" style="max-width: 75%;" href="#">
            <img src="{{ asset(config('larapanel.path.logo')) }}" alt="logo" />
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item d-none d-lg-block full-screen-link">
                <a class="nav-link">
                    <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                </a>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="{{ url(config('larapanel.auth.signout.url')) }}">
                    <i class="mdi mdi-power"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
