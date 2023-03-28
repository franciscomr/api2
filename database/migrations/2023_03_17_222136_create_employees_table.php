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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('position_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('employeeId')->unique()->nullable();
            $table->unique(array('names', 'firstSurname', 'secondSurname'));
            $table->string('names');
            $table->string('firstSurname');
            $table->string('secondSurname');
            $table->boolean('active')->default(1);
            $table->string('createdBy');
            $table->string('updatedBy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
