<?php

declare(strict_types=1);

namespace App\View\LaraPanel\Components;

use WeProDev\LaraPanel\Infrastructure\Shared\View\BaseComponent;

final class BtnFormDeleteListComponent extends BaseComponent
{
    public function __construct(
        public $action,
        public $label,
        public $formClass = null,
        public $btnClass = null,
        public $icon = null,
        public $permission = null,
        public $method = 'POST',
    ) {
        parent::__construct('btn-form-delete-list');
    }
}

/**
 * HOW TO USE
 *
    <x-btn-form-delete-list
        action="{{ route('lp.admin.user.delete', $item->uuid) }}"
        label="{{ __('Delete') }}"
        formClass="inline-block btn btn-sm"
        btnClass="btn btn-outline-danger btn-sm"
        icon="mdi mdi-delete-forever"
        permission="lp.admin.user.delete" />
 **/
