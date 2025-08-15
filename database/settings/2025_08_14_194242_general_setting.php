<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Farmix');
        $this->migrator->add('general.site_description', 'Farmix is a platform for buying and selling organic products.');
        $this->migrator->add('general.site_logo', null);
        $this->migrator->add('general.site_favicon', null);
        $this->migrator->add('general.site_email', 'info@farmix.com');
        $this->migrator->add('general.site_phone', '+1234567890');
        $this->migrator->add('general.site_address', '123 Main St, Anytown, USA');
        $this->migrator->add('general.site_city', 'Anytown');
        $this->migrator->add('general.site_state', 'CA');
        $this->migrator->add('general.site_zip', '12345');
        $this->migrator->add('general.site_country', 'USA');
        $this->migrator->add('general.social_media', [
            'facebook' => 'https://www.facebook.com/farmix',
            'twitter' => 'https://www.twitter.com/farmix',
            'instagram' => 'https://www.instagram.com/farmix',
            'linkedin' => 'https://www.linkedin.com/company/farmix',
            'youtube' => 'https://www.youtube.com/channel/UC1234567890',
        ]);        
        $this->migrator->add('general.site_google_analytics', null);
        $this->migrator->add('general.site_google_tag_manager', null);
        $this->migrator->add('general.site_google_recaptcha_site_key', null);
        $this->migrator->add('general.site_google_recaptcha_secret_key', null);
        $this->migrator->add('general.site_currency', 'USD');
        $this->migrator->add('general.site_currency_symbol', '$');
        $this->migrator->add('general.site_currency_code', 'USD');
        $this->migrator->add('general.site_currency_position', 'left');
        $this->migrator->add('general.site_currency_format', '2');
        $this->migrator->add('general.site_default_language', 'en');
        $this->migrator->add('general.site_default_timezone', 'UTC');
        $this->migrator->add('general.site_default_locale', 'en');
        $this->migrator->add('general.site_default_country', 'USA');
        $this->migrator->add('general.site_default_state', 'CA');
        $this->migrator->add('general.site_default_city', 'Anytown');
        $this->migrator->add('general.site_default_zip', '12345');
        $this->migrator->add('general.site_default_address', '123 Main St');
        $this->migrator->add('general.site_default_phone', '+1234567890');
        $this->migrator->add('general.site_default_email', 'info@farmix.com');
    }
};
