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
        Schema::create('kardexes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients');

            $table->longText('diagnosis');
            $table->string('physician', 255);
            $table->string('special_need', 255);
            $table->string('diet', 255);
            $table->string('iv_fluid', 255);
            $table->string('medicines', 255);
            $table->string('laboratory', 255);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kardexes');
    }
};
