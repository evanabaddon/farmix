<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('home.categories_limit', 6);
        $this->migrator->add('home.categories_show_all', true);

        $this->migrator->add('home.about_title', 'About Us');
        $this->migrator->add('home.about_subtitle', '');
        $this->migrator->add('home.about_content', '');
        $this->migrator->add('home.about_image', null);

        $this->migrator->add('home.products_display_mode', 'latest');
        $this->migrator->add('home.products_limit', 6);

        $this->migrator->add('home.provide_title', 'What We Provide');
        $this->migrator->add('home.provide_items', []);

        $this->migrator->add('home.team_title', 'Qualified Farmers');
        $this->migrator->add('home.team_limit', 4);

        $this->migrator->add('home.faq_title', 'Common Questions & Answers');
        $this->migrator->add('home.faqs', []);
    }
};
