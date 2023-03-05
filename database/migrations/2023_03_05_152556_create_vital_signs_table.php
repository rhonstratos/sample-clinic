<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vital_signs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients');
            $table->string('physician', 255)->nullable();
            $table->longText('notes')->nullable();

            $table->string('notes', 255)->nullable();
            $table->string('date', 255)->nullable();
            $table->string('weight', 255)->nullable();
            $table->string('temperature', 255)->nullable();
            $table->string('blood_pressure', 255)->nullable();
            $table->string('pulse', 255)->nullable();
            $table->string('respiration', 255)->nullable();
            $table->string('pain', 255)->nullable();
            $table->string('initials', 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vital_signs');
    }
};
