<?php

declare(strict_types=1);

namespace App\Http\Requests\LaraPanel\Auth;

use WeProDev\LaraPanel\Presentation\User\Requests\Auth\SignUpFormRequest as LaraPanelSignUpFormRequest;

final class SignUpFormRequest extends LaraPanelSignUpFormRequest
{
    /*
    |--------------------------------------------------------------------------
    |   SignUpFormRequest TO OVERWRITE IF YOU WANT
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
