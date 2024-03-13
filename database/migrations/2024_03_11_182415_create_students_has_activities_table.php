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
        Schema::create('students_has_activities', function (Blueprint $table) {
            $table->foreignId('activity_id')->constrained()->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('student_id')->constrained()->onUpdate('restrict')->onDelete('restrict');
            $table->string('grade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_has_activities');
    }
};
