<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use WeProDev\LaraPanel\Core\Shared\Enum\LanguageEnum;
use WeProDev\LaraPanel\Core\User\Enum\UserStatusEnum;

return new class extends Migration
{
    public function up(): void
    {
        $tableName = config('larapanel.table.prefix').config('larapanel.table.user.name');
        Schema::create($tableName, function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('language', 3)->default(LanguageEnum::default()->value);
            $table->string('mobile')->nullable()->unique();
            $table->string('status')->default(UserStatusEnum::PENDING->value)
                ->comment(implode(', ', UserStatusEnum::toArray()));
            $table->dateTime('email_verified_at')->nullable();
            $table->dateTime('mobile_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        $tableName = config('larapanel.table.prefix').config('larapanel.table.user.name');
        Schema::dropIfExists($tableName);
    }
};
