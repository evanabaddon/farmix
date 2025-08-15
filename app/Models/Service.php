<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'breadcumb_bg_image',
        'breadcumb_title',
        'selling_subtitle',
        'selling_title',
        'selling_features',
        'selling_images',
        'selling_main_image',
        'selling_secondary_image',
        'services',
    ];

    protected $casts = [
        'selling_features' => 'array',
        'selling_images' => 'array',
        'services' => 'array',
    ];
}
