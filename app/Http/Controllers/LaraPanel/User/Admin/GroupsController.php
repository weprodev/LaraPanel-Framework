<?php

declare(strict_types=1);

namespace App\Http\Controllers\LaraPanel\User\Admin;

use App\Http\Requests\LaraPanel\Requests\Admin\StoreGroupRequest;
use App\Http\Requests\LaraPanel\Requests\Admin\UpdateGroupRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;
use WeProDev\LaraPanel\Core\Shared\Enum\AlertTypeEnum;
use WeProDev\LaraPanel\Presentation\User\Controller\Admin\GroupsController as AdminGroupsController;

final class GroupsController extends AdminGroupsController
{
    /*
    |--------------------------------------------------------------------------
    |   DEPARTMENT CONTROLLER FOR OVERWRITE IF YOU WANT
    |--------------------------------------------------------------------------
    |   All of the functions we have commented below, if you want to overwrite
    |   any of them you can uncomment it and write your code.
    |
    |   baseViewPath loads from config file:larapanel.LaraPanel_parent_path and Default: LaraPanel
    */

    /**
     * Below variable are available here
     * $this->baseViewPath
     * $this->groupRepository
     * $this->userRepository
     */

    // public function __construct()
    // {
    //     parent::__construct();
    // }

    // public function index(): View
    // {
    //     // write new logic here

    //     return view($this->baseViewPath . 'index', compact('groups'));
    // }

    // public function create(): View
    // {
    //     // write new logic here

    //     return view($this->baseViewPath . 'create', compact('groups'));
    // }

    // public function edit(string $groupId): View|RedirectResponse
    // {
    //     // write new logic here

    //     return redirect()->route('lp.admin.group.index')->with('message', [
    //         'type' => AlertTypeEnum::DANGER->value,
    //         'text' => __('The group does not exist!'),
    //     ]);
    // }

    // public function store(FormRequest $request): RedirectResponse
    // {
    //     // you can overwrite Form request
    //     $this->setStoreRequestClass(StoreGroupRequest::class);
    //     parent::store($request);

    //     // Or you can completely change the logic here
    //     // write new logic here

    //     return redirect()->route('lp.admin.group.index')->with('message', [
    //         'type' => AlertTypeEnum::SUCCESS->value,
    //         'text' => __('The group :group created successfully.', ['group' => $request->name]),
    //     ]);
    // }

    // public function update(string $groupId, FormRequest $request): RedirectResponse
    // {
    //     // you can overwrite Form request
    //     $this->setUpdateRequestClass(UpdateGroupRequest::class);
    //     parent::update($groupId, $request);

    //     // Or you can completely change the logic here
    //     // write new logic here

    //     return redirect()->route('lp.admin.group.index')->with('message', [
    //         'type' => AlertTypeEnum::DANGER->value,
    //         'text' => __('The group does not exist!'),
    //     ]);
    // }

    // public function delete(string $groupId): RedirectResponse
    // {
    //     // write new logic here

    //     return redirect()->route('lp.admin.group.index')->with('message', [
    //         'type' => AlertTypeEnum::DANGER->value,
    //         'text' => __('The group does not exist!'),
    //     ]);
    // }
}
