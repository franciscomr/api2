<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('employee_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('username')->after('name')->unique;
            $table->boolean('active')->after('password')->default(1);
            $table->string('avatar')->nullable();
            $table->string('createdBy');
            $table->string('updatedBy');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
