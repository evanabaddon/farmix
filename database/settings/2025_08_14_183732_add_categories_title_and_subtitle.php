<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('home.categories_title', 'Organic Products');
        $this->migrator->add('home.categories_subtitle', 'Our Categories');
    }
};
