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
        Schema::create('fluid_intakes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients');
            $table->longText('diagnosis')->nullable();

            $table->string('time', 255)->nullable();
            $table->string('oral', 255)->nullable();
            $table->string('parental', 255)->nullable();
            $table->string('total', 255)->nullable();
            $table->string('urine', 255)->nullable();
            $table->string('drainage', 255)->nullable();
            $table->string('others', 255)->nullable();
            $table->string('total', 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fluid_intakes');
    }
};
