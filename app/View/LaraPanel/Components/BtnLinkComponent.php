<?php

declare(strict_types=1);

namespace App\View\LaraPanel\Components;

use WeProDev\LaraPanel\Infrastructure\Shared\View\BaseComponent;

final class BtnLinkComponent extends BaseComponent
{
    public function __construct(
        public $href,
        public $label,
        public $icon = null,
        public $class = null,
        public $permission = null
    ) {
        parent::__construct('btn-link');
    }
}

/**
 * HOW TO USE
 *
     <x-btn-link
        href="{{ route('lp.admin.permission.create') }}"
        label="{{ __('New permission') }}"
        class="btn btn-outline-primary btn-icon-text float-right btn-sm mb-2"
        icon="mdi mdi-playlist-plus"
        permission="lp.admin.permission.create" />
 **/
