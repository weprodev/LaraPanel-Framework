<?php

declare(strict_types=1);

namespace App\Models\LaraPanel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use WeProDev\LaraPanel\Infrastructure\User\Model\Permission as LaraPanelPermission;

final class Permission extends LaraPanelPermission
{
    use HasFactory;

    // here you can add more functionality
}
