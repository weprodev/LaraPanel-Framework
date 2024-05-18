<?php

declare(strict_types=1);

use WeProDev\LaraNav\Enum\NavLinkTypeEnum;
use WeProDev\LaraNav\Enum\NavLocationEnum;

return [

    'default' => [
        // laranav.default.directory
        'directory' => 'LaraNav',
    ],

    // laranav.nav
    'nav' => [
        // laranav.nav.SIDE_NAV
        NavLocationEnum::SIDE_NAV->value => [
            [
                'title' => 'Dashboard',
                'type' => NavLinkTypeEnum::ROUTE->value,
                'url' => 'lp.dashboard.panel',
                'active' => true,
                'icon' => 'mdi mdi-home menu-icon',
                'attributes' => [],
                'parent_attributes' => [],
                'children' => [],
                'depth' => 0,
            ],
            [
                'title' => 'Users Management',
                'type' => NavLinkTypeEnum::TOGGLE->value,
                'url' => 'users_management',
                'active' => true,
                'permission' => 'lp.admin.user.index',
                'icon' => 'mdi mdi-account-multiple menu-icon',
                'attributes' => [],
                'parent_attributes' => [],
                'children' => [
                    [
                        'title' => 'Users',
                        'type' => NavLinkTypeEnum::ROUTE->value,
                        'url' => 'lp.admin.user.index',
                        'active' => true,
                        'permission' => 'lp.admin.user.index',
                        'icon' => null,
                        'attributes' => [],
                        'parent_attributes' => [],
                        'children' => [],
                        'depth' => 1,
                    ],
                    [
                        'title' => 'Roles',
                        'type' => NavLinkTypeEnum::ROUTE->value,
                        'url' => 'lp.admin.role.index',
                        'active' => true,
                        'permission' => 'lp.admin.role.index',
                        'icon' => null,
                        'attributes' => [],
                        'parent_attributes' => [],
                        'children' => [],
                        'depth' => 1,
                    ],
                    [
                        'title' => 'Permissions',
                        'type' => NavLinkTypeEnum::ROUTE->value,
                        'url' => 'lp.admin.permission.index',
                        'active' => true,
                        'permission' => 'lp.admin.permission.index',
                        'icon' => null,
                        'attributes' => [],
                        'parent_attributes' => [],
                        'children' => [],
                        'depth' => 1,
                    ],
                    [
                        'title' => 'Groups',
                        'type' => NavLinkTypeEnum::ROUTE->value,
                        'url' => 'lp.admin.group.index',
                        'active' => true,
                        'permission' => 'lp.admin.group.index',
                        'icon' => null,
                        'attributes' => [],
                        'parent_attributes' => [],
                        'children' => [],
                        'depth' => 1,
                    ],
                ],
                'depth' => 0,
            ],
        ],
    ],
];
