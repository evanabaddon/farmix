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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            // Header Section
            $table->string('breadcumb_bg_image')->nullable();
            $table->string('breadcumb_title')->nullable();

            // Selling Area Section
            $table->string('selling_subtitle')->nullable();
            $table->string('selling_title')->nullable();
            $table->json('selling_features')->nullable();
            $table->json('selling_images')->nullable();
            $table->string('selling_main_image')->nullable();
            $table->string('selling_secondary_image')->nullable();
            
            // Service List Section
            $table->json('services')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
