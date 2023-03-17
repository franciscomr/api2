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
            $table->string('employee_identifier')->unique()->nullable();
            $table->unique(array('names', 'first_surname', 'second_surname'));
            $table->string('names');
            $table->string('first_surname');
            $table->string('second_surname');
            $table->boolean('active')->default(1);
            $table->string('created_by');
            $table->string('updated_by');
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
