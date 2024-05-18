<?php

declare(strict_types=1);

namespace App\Http\Controllers\LaraPanel\User\Auth;

use App\Http\Requests\LaraPanel\Auth\SignInFormRequest;
use WeProDev\LaraPanel\Presentation\User\Controller\Auth\SignInController as AuthSignInController;

final class SignInController extends AuthSignInController
{
    /*
    |--------------------------------------------------------------------------
    |   SignIn CONTROLLER TO OVERWRITE IF YOU WANT
    |--------------------------------------------------------------------------
    |   All of the functions we have commented below, if you want to overwrite
    |   any of them you can uncomment it and write your code.
    |
    |   baseViewPath loads from config file:larapanel.LaraPanel_parent_path and Default: LaraPanel
    */

    /**
     * Below variable are available here
     * $this->baseViewPath
     * $this->userRepository
     */

    // public function __construct()
    // {
    //     parent::__construct();
    // }

    // public function signInForm()
    // {
    /// WRITE YOUR CODE ....
    // }

    // protected function customSignUpHook(SignInFormRequest $request)
    // {
    //     // Custom implementation for signIn
    // }

    //  public function signOut()
    //  {
    /// WRITE YOUR CODE ....
    //  }

}
