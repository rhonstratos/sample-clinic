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
        Schema::create('discharge_summaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients');

            $table->longText('findings');
            $table->longText('treatment');
            $table->longText('hospital_stay');
            $table->longText('final_diagnosis');
            $table->longText('plan');

            $table->string('signee', 255);
            $table->string('license_no', 255);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discharge_summaries');
    }
};
