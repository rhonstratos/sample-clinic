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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 255);
            $table->string('mname', 255)->nullable();
            $table->string('lname', 255);
            $table->date('bdate');
            $table->string('birth_place', 255);

            $table->string('contact_num', 255);
            $table->string('nationality', 255);
            $table->string('religion', 255);
            $table->string('civil_status', 255);
            $table->string('sex', 255);
            $table->string('occupation', 255)->nullable();

            $table->longText('perma_address');
            $table->longText('address');
            $table->longText('emergency_contact');

            $table->string('senior_num', 255)->nullable()->unique();
            $table->longText('relatives')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
