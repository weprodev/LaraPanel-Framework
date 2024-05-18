<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

if (config('larapanel.auth.enable')) {
    Route::group(
        [
            'namespace' => config('larapanel.namespace.auth'),
            'as' => 'lp.auth.user.',
            'middleware' => ['web', 'guest'],
        ],
        function () {
            // lp.auth.user.sign.in.form
            Route::get(config('larapanel.auth.signin.url'), 'SignInController@signInForm')->name('sign.in.form');
            // lp.auth.user.sign.in
            Route::post(config('larapanel.auth.signin.url'), 'SignInController@signIn')->name('sign.in');
            // lp.auth.user.signup.form
            Route::get(config('larapanel.auth.signup.url'), 'SignUpController@signupForm')->name('signup.form');
            // lp.auth.user.signup
            Route::post(config('larapanel.auth.signup.url'), 'SignUpController@signup')->name('signup');
        }
    );

    Route::group(
        [
            'namespace' => config('larapanel.namespace.auth'),
            'as' => 'lp.auth.user.',
            'middleware' => ['web', 'auth'],
        ],
        function () {
            // lp.auth.user.sign.out
            Route::get(config('larapanel.auth.signout.url'), 'SignInController@signOut')->name('sign.out');
        }
    );
}
