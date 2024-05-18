<?php

declare(strict_types=1);

namespace App\Http\Controllers\LaraPanel\User\Auth;

use App\Http\Requests\LaraPanel\Auth\SignUpFormRequest;
use WeProDev\LaraPanel\Presentation\User\Controller\Auth\SignUpController as AuthSignUpController;

final class SignUpController extends AuthSignUpController
{
    /*
    |--------------------------------------------------------------------------
    |   SignUp CONTROLLER TO OVERWRITE IF YOU WANT!
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
     * $this->roleRepository
     */

    // public function __construct()
    // {
    //     parent::__construct();
    // }

    // public function signUpForm()
    // {
    // }

    // protected function customSignUpHook(SignUpFormRequest $request)
    // {
    //     // Custom implementation for signUp
    // }
}
