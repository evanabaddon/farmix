<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('home.about_image1', null);
        $this->migrator->add('home.about_image2', null);

        $this->migrator->add('home.percentage_items', [
            ['title' => 'Organic Solutions', 'percent' => 83],
            ['title' => 'Quality Agriculture', 'percent' => 90],
        ]);

        $this->migrator->add('home.experience_enabled', true);
        $this->migrator->add('home.experience_years', 12);
        $this->migrator->add('home.signature_image', null);
    }
};
