<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('home.products_title', 'Organic Products');
        $this->migrator->add('home.products_subtitle', 'Our Products');
    }
};
