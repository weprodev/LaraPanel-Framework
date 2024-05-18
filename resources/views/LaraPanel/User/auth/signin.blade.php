@extends($lp['directory'] . '.User.auth.master')

@section('header')
    @parent
@endsection

@section('content')
    <h4>{{ __('Get Started!') }}</h4>
    <h6 class="font-weight-light">{{ __('Sign In to continue') }}</h6>

    <form class="pt-3" action="{{ url(config('larapanel.auth.signin.url')) }}" method="post">
        @csrf

        <div class="form-group">
            <label for="username">{{ __('Username') }}</label>
            <input type="{{ config('larapanel.auth.username') == 'EMAIL' ? 'email' : 'text' }}" name="username" autofocus
                class="form-control form-control-lg"
                placeholder="{{ config('larapanel.auth.username') == 'EMAIL' ? __('Your Email') : __('Your Username') }}"
                required>
        </div>
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" name="password" class="form-control form-control-lg" placeholder="{{ __('Password') }}"
                required>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                {{ __('Sign In') }}
            </button>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            {{-- <a href="#" class="auth-link text-black">{{ __('trans.Forgot_password') }}</a> --}}
        </div>

        @if (config('larapanel.auth.signup.enable'))
            <div class="text-center mt-4 font-weight-light">
                {{ __('Don\'t have an account?') }} <a href="{{ url(config('larapanel.auth.signup.url')) }}"
                    class="text-primary">
                    {{ __('Create') }}
                </a>
            </div>
        @endif
    </form>
@endsection
