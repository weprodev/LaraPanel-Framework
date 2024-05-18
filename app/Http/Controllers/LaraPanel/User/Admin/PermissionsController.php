<?php

declare(strict_types=1);

namespace App\Http\Controllers\LaraPanel\User\Admin;

use App\Http\Requests\LaraPanel\Requests\Admin\StorePermissionRequest;
use App\Http\Requests\LaraPanel\Requests\Admin\UpdatePermissionRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;
use WeProDev\LaraPanel\Core\Shared\Enum\AlertTypeEnum;
use WeProDev\LaraPanel\Core\User\Enum\GuardTypeEnum;
use WeProDev\LaraPanel\Presentation\User\Controller\Admin\PermissionsController as AdminPermissionsController;

final class PermissionsController extends AdminPermissionsController
{
    /*
    |--------------------------------------------------------------------------
    |   PERMISSIONS CONTROLLER FOR OVERWRITE IF YOU WANT
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
     */

    // public function __construct()
    // {
    //     parent::__construct();
    // }

    // public function index(): View
    // {
    //     // write new logic here

    //     return view($this->baseViewPath . 'index', compact('permissions'));
    // }

    // public function create(): View
    // {
    //     // write new logic here

    //     return view($this->baseViewPath . 'create')->with([
    //         'guards' => $guards,
    //         'defaultGuard' => GuardTypeEnum::default()->value,
    //         'modules' => $modules,
    //         'defaultModule' => config('larapanel.permission.module.default', end($modules)),
    //     ]);
    // }

    // public function edit(int $permissionId): View|RedirectResponse
    // {
    //     // write new logic here

    //     return redirect()->route('lp.admin.permission.index')->with('message', [
    //         'type' => AlertTypeEnum::DANGER->value,
    //         'text' => __('The permission does not exist!'),
    //     ]);
    // }

    // public function store(FormRequest $request): RedirectResponse
    // {
    //     // you can overwrite Form request
    //     // $this->setStoreRequestClass(StorePermissionRequest::class);
    //     // parent::store($request);

    //     // Or you can completely change the logic here
    //     // write new logic here

    //     return redirect()->route('lp.admin.permission.index')->with('message', [
    //         'type' => AlertTypeEnum::SUCCESS->value,
    //         'text' => __('The permission :permission created successfully!', ['permission' => $request->name]),
    //     ]);
    // }

    // public function update(int $permissionId, FormRequest $request): RedirectResponse
    // {
    //     // you can overwrite Form request
    //     // $this->setUpdateRequestClass(UpdatePermissionRequest::class);
    //     // parent::update($permissionId, $request);

    //     // Or you can completely change the logic here
    //     // write new logic here

    //     return redirect()->route('lp.admin.permission.index')->with('message', [
    //         'type' => AlertTypeEnum::DANGER->value,
    //         'text' => __('The permission does not exist!'),
    //     ]);
    // }

    // public function delete(int $permissionId): RedirectResponse
    // {
    //     // write new logic here

    //     return redirect()->route('lp.admin.permission.index')->with('message', [
    //         'type' => AlertTypeEnum::DANGER->value,
    //         'text' => __('The permission does not exist!'),
    //     ]);
    // }
}
