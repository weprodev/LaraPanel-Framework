<?php

declare(strict_types=1);

namespace App\Models\LaraPanel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use WeProDev\LaraPanel\Infrastructure\User\Model\User as LaraPanelUser;

final class User extends LaraPanelUser
{
    use HasFactory;

    // here you can add more functionality
}
