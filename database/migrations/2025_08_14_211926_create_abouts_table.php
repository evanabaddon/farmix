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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            // Header
            $table->string('breadcumb_bg_image')->nullable();
            $table->string('breadcumb_title')->default('About Us');

            // About Section
            $table->string('about_image')->nullable();
            $table->string('about_subtitle')->nullable();
            $table->string('about_title')->nullable();
            $table->longText('about_text')->nullable();
            $table->string('author_name')->nullable();
            $table->string('author_designation')->nullable();
            $table->string('author_image')->nullable();
            $table->string('author_signature_image')->nullable();

            // About Bottom
            $table->string('about_video_image')->nullable();
            $table->string('about_video_url')->nullable();
            $table->json('about_features')->nullable();

            // Process Area
            $table->string('process_subtitle')->nullable();
            $table->string('process_title')->nullable();
            $table->json('agricultural_work_steps')->nullable();

            // History Area
            $table->string('history_subtitle')->nullable();
            $table->string('history_title')->nullable();
            $table->json('history_works')->nullable();

            // Counter Area
            $table->string('counter_bg_image')->nullable();
            $table->string('counter_title')->nullable();
            $table->longText('counter_subtitle')->nullable();
            $table->string('counter_button_text')->nullable();
            $table->string('counter_button_url')->nullable();
            $table->json('counters')->nullable();

            // Testimonial Area
            $table->string('testimonial_subtitle')->nullable();
            $table->string('testimonial_title')->nullable();
            $table->string('testimonial_image')->nullable();
            $table->json('testimonials')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
