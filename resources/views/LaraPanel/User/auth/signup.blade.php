@extends($lp['directory'] . '.User.auth.master')

@section('header')
    @parent
@endsection

@section('content')
    <h4>{{ __('New here?') }}</h4>
    <h6 class="font-weight-light">
        {{ __('Signing up is easy. It only takes a few steps') }}
    </h6>

    <form class="pt-3" action="{{ url(config('larapanel.auth.signup.url')) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="first_name">{{ __('First Name') }}</label>
            <input type="text" name="first_name" class="form-control form-control-lg" placeholder="{{ __('First Name') }}"
                autofocus value="{{ old('first_name') }}" required>
        </div>

        <div class="form-group">
            <label for="last_name">{{ __('Last Name') }}</label>
            <input type="text" name="last_name" class="form-control form-control-lg" placeholder="{{ __('Last Name') }}"
                value="{{ old('last_name') }}" required>
        </div>

        <div class="form-group">
            <label for="username">{{ __('Email Address') }}</label>
            <input type="email" name="email" autofocus class="form-control form-control-lg"
                placeholder="{{ __('Your Email') }}" value="{{ old('email') }}" required>
        </div>

        @if (config('larapanel.auth.username') !== 'EMAIL')
            <div class="form-group">
                <label for="username">{{ __('Phone number') }}</label>
                <input type="text" name="mobile" autofocus class="form-control form-control-lg"
                    placeholder="{{ __('Your phone number') }}" value="{{ old('mobile') }}" required>
            </div>
        @endif

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" name="password" class="form-control form-control-lg" placeholder="{{ __('Password') }}"
                required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">{{ __('Password Confirmation') }}</label>
            <input type="password" name="password_confirmation" class="form-control form-control-lg"
                placeholder="{{ __('Password Confirmation') }}" required>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                {{ __('SIGN UP') }}
            </button>
        </div>
        @if (config('larapanel.auth.signin.enable'))
            <div class="text-center mt-4 font-weight-light">
                {{ __('Already have an account?') }}
                <a href="{{ url(config('larapanel.auth.signin.url')) }}" class="text-primary">{{ __('Sign In') }}</a>
            </div>
        @endif
    </form>
@endsection

@section('footer')
    @parent
@endsection
