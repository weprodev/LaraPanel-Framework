<?php

declare(strict_types=1);

namespace App\Http\Requests\LaraPanel\Auth;

use WeProDev\LaraPanel\Presentation\User\Requests\Auth\SignInFormRequest as LaraPanelSignInFormRequest;

final class SignInFormRequest extends LaraPanelSignInFormRequest
{
    /*
    |--------------------------------------------------------------------------
    |   SignInFormRequest TO OVERWRITE IF YOU WANT
    |--------------------------------------------------------------------------
    |   You can overwrite the sign up validation here.
    */

    // public function rules(): array
    // {
    //     return [
    //         //
    //     ];
    // }
}
