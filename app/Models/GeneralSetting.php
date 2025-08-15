<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    // Nama tabel
    protected $table = 'general_settings';

    // Primary key (default 'id')
    protected $primaryKey = 'id';

    // Fillable fields (boleh diisi massal)
    protected $fillable = [
        'site_name',
        'site_description',
        'site_logo',
        'site_favicon',
        'site_email',
        'site_phone',
        'site_address',
        'site_city',
        'site_state',
        'site_zip',
        'site_country',
        'social_media',
        'google_analytics',
        'google_tag_manager',
        'google_recaptcha_site_key',
        'google_recaptcha_secret_key',
        'currency',
        'currency_symbol',
        'currency_code',
        'currency_position',
        'currency_format',
        'default_language',
        'default_timezone',
        'default_locale',
        'default_country',
        'default_state',
        'default_city',
        'default_zip',
        'default_address',
        'default_phone',
        'default_email',
    ];

    // Cast sosial media ke array supaya bisa diakses seperti array
    protected $casts = [
        'social_media' => 'array',
        'currency_format' => 'integer',
    ];

    // Default values (opsional, jika ingin fallback)
    protected $attributes = [
        'site_name' => 'Farmix',
        'site_description' => 'Farmix is a platform for buying and selling organic products.',
        'currency' => 'USD',
        'currency_symbol' => '$',
        'currency_code' => 'USD',
        'currency_position' => 'left',
        'currency_format' => 2,
        'default_language' => 'en',
        'default_timezone' => 'UTC',
        'default_locale' => 'en',
    ];
}
