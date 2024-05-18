<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $tableNames = config('permission.table_names');

        if (empty($tableNames)) {
            throw new Exception('Error: config/permission.php not loaded. Run [php artisan config:clear] and try again.');
        }

        Schema::table($tableNames['permissions'], function (Blueprint $table) {
            $table->string('title', 30)->nullable();
            $table->string('module', 30)->nullable();
            $table->string('description', 255)->nullable();
        });

        Schema::table($tableNames['roles'], function (Blueprint $table) {
            $table->string('title', 30)->nullable();
            $table->string('description', 255)->nullable();
        });
    }

    public function down(): void
    {
        $tableNames = config('permission.table_names');

        if (empty($tableNames)) {
            throw new Exception('Error: config/permission.php not loaded. Run [php artisan config:clear] and try again.');
        }

        Schema::table($tableNames['permissions'], function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('module');
            $table->dropColumn('description');
        });

        Schema::table($tableNames['roles'], function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('description');
        });
    }
};
