<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('home.testimonial_title', 'Testimonials');
        $this->migrator->add('home.testimonial_subtitle', 'Testimonials');
        $this->migrator->add('home.testimonials', []);
    }
};
