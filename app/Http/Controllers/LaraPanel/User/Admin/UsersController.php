<?php

declare(strict_types=1);

namespace App\Http\Controllers\LaraPanel\User\Admin;

use App\Http\Requests\LaraPanel\Requests\Admin\StoreUserRequest;
use App\Http\Requests\LaraPanel\Requests\Admin\UpdateUserRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;
use WeProDev\LaraPanel\Core\Shared\Enum\AlertTypeEnum;
use WeProDev\LaraPanel\Core\User\Enum\UserStatusEnum;
use WeProDev\LaraPanel\Presentation\User\Controller\Admin\UsersController as AdminUsersController;

final class UsersController extends AdminUsersController
{
    /*
    |--------------------------------------------------------------------------
    |   USERS CONTROLLER FOR OVERWRITE IF YOU WANT
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

    // public function index(): View
    // {
    //     // write new logic here

    //     return view($this->baseViewPath . 'index', compact('users'));
    // }

    // public function create(): View
    // {
    //     // write new logic here

    //     return view($this->baseViewPath . 'create')->with([
    //         'statuses' => UserStatusEnum::toArray(),
    //         'roles' => [],
    //         'groups' => [],
    //     ]);
    // }

    // public function edit(string $userUuid): View|RedirectResponse
    // {
    //     // write new logic here

    //     return redirect()->back()->with('message', [
    //         'type' => AlertTypeEnum::DANGER->value,
    //         'text' => __('The user does not exist!'),
    //     ]);
    // }

    // public function store(FormRequest $request): RedirectResponse
    // {
    //     // you can overwrite Form request
    //     // $this->setStoreRequestClass(StoreUserRequest::class);
    //     // parent::store($request);

    //     // Or you can completely change the logic here
    //     // write new logic here

    //     return redirect()->route('lp.admin.user.index')->with('message', [
    //         'type' => AlertTypeEnum::SUCCESS->value,
    //         'text' => __('The user :user has been successfully created!', ['user' => $request->email]),
    //     ]);
    // }

    // public function update(string $userUuid, FormRequest $request): RedirectResponse
    // {
    //     // you can overwrite Form request
    //     // $this->setUpdateRequestClass(UpdateUserRequest::class);
    //     // parent::update($userUuid, $request);

    //     // Or you can completely change the logic here
    //     // write new logic here

    //     return redirect()->back()->with('message', [
    //         'type' => AlertTypeEnum::DANGER->value,
    //         'text' => __('The user does not exist!'),
    //     ]);
    // }

    // public function delete(string $userUuid): RedirectResponse
    // {
    //     // write new logic here

    //     return redirect()->back()->with('message', [
    //         'type' => AlertTypeEnum::DANGER->value,
    //         'text' => __('The user does not exist!'),
    //     ]);
    // }
}
