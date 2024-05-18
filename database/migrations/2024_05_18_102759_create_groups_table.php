<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $tablesInfo = config('larapanel.table');

        $prefix = $tablesInfo['prefix'];
        $groupTableName = $prefix.$tablesInfo['group']['name'];
        Schema::create($groupTableName, function (Blueprint $table) use ($groupTableName) {
            $table->id();
            $table->string('title');
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->timestamps();

            $table->foreign('parent_id')
                ->references('id')
                ->on($groupTableName)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });

        $groupRelationTableName = $prefix.$tablesInfo['model_has_group']['name'];
        Schema::create($groupRelationTableName, function (Blueprint $table) use ($groupTableName) {
            $table->unsignedBigInteger('group_id');
            $table->morphs('groupable');
            $table->timestamp('created_at')->useCurrent();

            $table->index(['groupable_type', 'groupable_id'], 'idx_groupable_key');
            $table->unique(['group_id', 'groupable_id', 'groupable_type'], 'uniq_group_key');

            $table->foreign('group_id')
                ->references('id')
                ->on($groupTableName)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    public function down(): void
    {
        $tablesInfo = config('larapanel.table');
        $prefix = $tablesInfo['prefix'];
        $groupTableName = $prefix.$tablesInfo['group']['name'];
        $groupRelationTableName = $prefix.$tablesInfo['model_has_group']['name'];

        Schema::dropIfExists($groupTableName);
        Schema::dropIfExists($groupRelationTableName);
    }
};
