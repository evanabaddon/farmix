<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;
use Spatie\LaravelSettings\Attributes\Setting;

class GeneralSettings extends Settings
{
    #[Setting('general.site_name')]
    public string $site_name = 'TlogoNdalem';

    #[Setting('general.site_description')]
    public string $site_description = 'TlogoNdalem is a platform for buying and selling organic products.';

    #[Setting('general.site_logo')]
    public ?string $site_logo = null;

    #[Setting('general.site_favicon')]
    public ?string $site_favicon = null;

    #[Setting('general.site_email')]
    public string $site_email = 'info@tlogondalem.co.id';

    #[Setting('general.site_phone')]
    public string $site_phone = '+1234567890';

    #[Setting('general.site_address')]
    public string $site_address = '123 Main St, Anytown, USA';

    #[Setting('general.site_city')]
    public string $site_city = 'Anytown';

    #[Setting('general.site_state')]
    public string $site_state = 'CA';

    #[Setting('general.site_zip')]
    public string $site_zip = '12345';

    #[Setting('general.site_country')]
    public string $site_country = 'USA';

    // Sosial media sebagai array dinamis
    #[Setting('general.social_media', cast: 'array')]
    public array $social_media = [
        'facebook' => 'https://www.facebook.com/tlogondalem',
        'instagram' => 'https://www.instagram.com/tlogondalem',
        'twitter' => 'https://www.twitter.com/tlogondalem',
        'tiktok' => 'https://www.tiktok.com/@tlogondalem',
        'youtube' => 'https://www.youtube.com/channel/UC1234567890',
    ];


    // Google / Analytics
    #[Setting('general.site_google_analytics')]
    public ?string $site_google_analytics = null;

    #[Setting('general.site_google_tag_manager')]
    public ?string $site_google_tag_manager = null;

    #[Setting('general.site_google_recaptcha_site_key')]
    public ?string $site_google_recaptcha_site_key = null;

    #[Setting('general.site_google_recaptcha_secret_key')]
    public ?string $site_google_recaptcha_secret_key = null;

    // Currency
    #[Setting('general.site_currency')]
    public string $site_currency = 'USD';

    #[Setting('general.site_currency_symbol')]
    public string $site_currency_symbol = '$';

    #[Setting('general.site_currency_code')]
    public string $site_currency_code = 'USD';

    #[Setting('general.site_currency_position')]
    public string $site_currency_position = 'left';

    #[Setting('general.site_currency_format')]
    public string $site_currency_format = '2';

    // Default locale
    #[Setting('general.site_default_language')]
    public string $site_default_language = 'en';

    #[Setting('general.site_default_timezone')]
    public string $site_default_timezone = 'UTC';

    #[Setting('general.site_default_locale')]
    public string $site_default_locale = 'en';

    #[Setting('general.site_default_country')]
    public string $site_default_country = 'USA';

    #[Setting('general.site_default_state')]
    public string $site_default_state = 'CA';

    #[Setting('general.site_default_city')]
    public string $site_default_city = 'Anytown';

    #[Setting('general.site_default_zip')]
    public string $site_default_zip = '12345';

    #[Setting('general.site_default_address')]
    public string $site_default_address = '123 Main St';

    #[Setting('general.site_default_phone')]
    public string $site_default_phone = '+1234567890';

    #[Setting('general.site_default_email')]
    public string $site_default_email = 'info@farmix.com';

    #[Setting('general.ceo_name')]
    public ?string $ceo_name;

    #[Setting('general.ceo_designation')]
    public ?string $ceo_designation;

    #[Setting('general.ceo_photo')]
    public ?string $ceo_photo;

    #[Setting('general.ceo_signature')]
    public ?string $ceo_signature;

    #[Setting('general.working_hours')]
    public array $working_hours;

    #[Setting('general.google_map_iframe')]
    public ?string $google_map_iframe;

    public static function group(): string
    {
        return 'general';
    }
}
