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
        Schema::create('drivers', function (Blueprint $table) {
         $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique(); // Unique constraint
            $table->string('mobile')->unique(); // Unique constraint
            $table->string('street');
            $table->string('street_code');
            $table->string('city_town_suburb');
            $table->string('postcode_zipcode');
            $table->string('country');
            $table->string('state_region_province');
            $table->string('linkedin_url')->nullable();
            $table->string('requirements');
            $table->json('availability_days')->nullable(); // Store as JSON
            $table->text('driving_experience')->nullable();
            $table->integer('years_with_license')->nullable();
            $table->text('years_driving_commercial')->nullable();
            $table->text('customer_service_experience')->nullable();
            $table->text('skill_level')->nullable();
            $table->text('work_safety')->nullable();
            $table->text('successful_driver')->nullable();
            $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
