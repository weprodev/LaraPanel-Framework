<?php

declare(strict_types=1);

namespace Database\Seeders;

use WeProDev\LaraPanel\Core\User\Enum\GuardTypeEnum;
use WeProDev\LaraPanel\Infrastructure\User\Seeders\Role\RoleTableSeeder;

final class RoleSeeder extends RoleTableSeeder
{
    // protected $roles = [
    //     [
    //         'name' => 'Admin',
    //         'title' => 'Administrator',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'This role will assign to Administrator',
    //     ],
    //     [
    //         'name' => 'User',
    //         'title' => 'User',
    //         'guard_name' => GuardTypeEnum::WEB->value,
    //         'description' => 'This role will assign to user.',
    //     ],
    // ];
}
