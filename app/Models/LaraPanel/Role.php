<?php

declare(strict_types=1);

namespace App\Models\LaraPanel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use WeProDev\LaraPanel\Infrastructure\User\Model\Role as LaraPanelRole;

final class Role extends LaraPanelRole
{
    use HasFactory;

    // here you can add more functionality
}
