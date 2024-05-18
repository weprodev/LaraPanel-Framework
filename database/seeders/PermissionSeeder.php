<?php

declare(strict_types=1);

namespace Database\Seeders;

use WeProDev\LaraPanel\Core\User\Enum\GuardTypeEnum;
use WeProDev\LaraPanel\Infrastructure\User\Seeders\Permission\PermissionTableSeeder;

final class PermissionSeeder extends PermissionTableSeeder
{
    // protected $permissions = [
    //     [
    //         'name' => 'admin.manager',
    //         'title' => 'Admin Panel',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'This permission is for access to admin panel.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     [
    //         'name' => 'lp.dashboard.panel',
    //         'title' => 'Dashboard Panel',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'This permission is for access to dashboard panel.',
    //         'module' => 'User',
    //         'roles' => ['Admin', 'User'],
    //     ],

    //     // Users permissions
    //     [
    //         'name' => 'lp.admin.user.index',
    //         'title' => 'Display users',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The admin panel\'s user list can be viewed with this permission.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     [
    //         'name' => 'lp.admin.user.create',
    //         'title' => 'Create user',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The user is able to add new users with this ability.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     [
    //         'name' => 'lp.admin.user.edit',
    //         'title' => 'Edit user',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The user is able to edit users with this ability.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     [
    //         'name' => 'lp.admin.user.delete',
    //         'title' => 'Delete user',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The user is able to delete users with this ability.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     // Roles Permission
    //     [
    //         'name' => 'lp.admin.role.index',
    //         'title' => 'Display roles',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The admin panel\'s roles list can be viewed with this permission.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     [
    //         'name' => 'lp.admin.role.create',
    //         'title' => 'Create roles',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The user is able to add new roles with this ability.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     [
    //         'name' => 'lp.admin.role.edit',
    //         'title' => 'Edit roles',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The user is able to edit roles with this ability.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     [
    //         'name' => 'lp.admin.role.delete',
    //         'title' => 'Delete roles',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The user is able to delete roles with this ability.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     // Permissions' permissions
    //     [
    //         'name' => 'lp.admin.permission.index',
    //         'title' => 'Display permissions',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The admin panel\'s permissions list can be viewed with this permission.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     [
    //         'name' => 'lp.admin.permission.create',
    //         'title' => 'Create permissions',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The user is able to add new permissions with this ability.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     [
    //         'name' => 'lp.admin.permission.edit',
    //         'title' => 'Edit permissions',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The user is able to edit permissions with this ability.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     [
    //         'name' => 'lp.admin.permission.delete',
    //         'title' => 'Delete permissions',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The user is able to delete permissions with this ability.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     // Group permissions
    //     [
    //         'name' => 'lp.admin.group.index',
    //         'title' => 'Display groups',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The admin panel\'s groups list can be viewed with this permission.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     [
    //         'name' => 'lp.admin.group.create',
    //         'title' => 'Create groups',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The user is able to add new groups with this ability.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     [
    //         'name' => 'lp.admin.group.edit',
    //         'title' => 'Edit groups',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The user is able to edit groups with this ability.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    //     [
    //         'name' => 'lp.admin.group.delete',
    //         'title' => 'Delete groups',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'The user is able to delete groups with this ability.',
    //         'module' => 'User',
    //         'roles' => ['Admin'],
    //     ],
    // ];
}
