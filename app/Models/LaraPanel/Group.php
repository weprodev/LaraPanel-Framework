<?php

declare(strict_types=1);

namespace App\Models\LaraPanel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use WeProDev\LaraPanel\Infrastructure\User\Model\Group as LaraPanelGroup;

final class Group extends LaraPanelGroup
{
    use HasFactory;

    // here you can add more functionality
}
