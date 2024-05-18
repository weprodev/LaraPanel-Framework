<?php

declare(strict_types=1);

namespace App\Http\Controllers\LaraPanel\User\Admin;

use App\Http\Requests\LaraPanel\Requests\Admin\StoreRoleRequest;
use App\Http\Requests\LaraPanel\Requests\Admin\UpdateRoleRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;
use WeProDev\LaraPanel\Core\Shared\Enum\AlertTypeEnum;
use WeProDev\LaraPanel\Core\User\Enum\GuardTypeEnum;
use WeProDev\LaraPanel\Presentation\User\Controller\Admin\RolesController as AdminRolesController;

final class RolesController extends AdminRolesController
{
    /*
    |--------------------------------------------------------------------------
    |   ROLES CONTROLLER FOR OVERWRITE IF YOU WANT
    |--------------------------------------------------------------------------
    |   All of the functions we have commented below, if you want to overwrite
    |   any of them you can uncomment it and write your code.
    |
    |   baseViewPath loads from config file:larapanel.LaraPanel_parent_path and Default: LaraPanel
    */

    /**
     * Below variable are available here
     * $this->baseViewPath
     * $this->permissionRepository
     * $this->roleRepository
     */

    // public function __construct()
    // {
    //     parent::__construct();
    // }

    // public function index(): View
    // {
    //     // write new logic here

    //     return view($this->baseViewPath . 'index')->with([
    //         'roles' => [],
    //     ]);
    // }

    // public function create(): View
    // {
    //     // write new logic here

    //     return view($this->baseViewPath . 'create')->with([
    //         'permissions' => [],
    //         'guards' => $guards,
    //         'defaultGuard' => GuardTypeEnum::default()->value,
    //     ]);
    // }

    // public function edit(int $roleId): View|RedirectResponse
    // {
    //     // write new logic here

    //     return redirect()->route('lp.admin.role.index')->with('message', [
    //         'type' => AlertTypeEnum::DANGER->value,
    //         'text' => __('The role does not exist!'),
    //     ]);
    // }

    // public function store(FormRequest $request): RedirectResponse
    // {
    //     // you can overwrite Form request
    //     // $this->setStoreRequestClass(StoreRoleRequest::class);
    //     // parent::store($request);

    //     // Or you can completely change the logic here
    //     // write new logic here

    //     return redirect()->route('lp.admin.role.index')->with('message', [
    //         'type' => AlertTypeEnum::SUCCESS->value,
    //         'text' => __('The role :role created successfully.', ['role' => $request->title]),
    //     ]);
    // }

    // public function update(int $roleId, FormRequest $request): RedirectResponse
    // {
    //     // you can overwrite Form request
    //     // $this->setUpdateRequestClass(UpdateRoleRequest::class);
    //     // parent::update($roleId, $request);

    //     // Or you can completely change the logic here
    //     // write new logic here

    //     return redirect()->route('lp.admin.role.index')->with('message', [
    //         'type' => AlertTypeEnum::DANGER->value,
    //         'text' => __('The role does not exist!'),
    //     ]);
    // }

    // public function delete(int $roleId): RedirectResponse
    // {
    //     // write new logic here

    //     return redirect()->route('lp.admin.role.index')->with('message', [
    //         'type' => AlertTypeEnum::DANGER->value,
    //         'text' => __('The role does not exist!'),
    //     ]);
    // }
}
