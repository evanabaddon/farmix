<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'breadcumb_bg_image',
        'breadcumb_title',
        'about_image',
        'about_subtitle',
        'about_title',
        'about_text',
        'author_image',
        'author_name',
        'author_designation',
        'author_signature_image',
        'about_video_image',
        'about_video_url',
        'about_features',
        'process_subtitle',
        'process_title',
        'agricultural_work_steps',
        'history_subtitle',
        'history_title',
        'history_works',
        'counter_bg_image',
        'counter_title',
        'counter_subtitle',
        'counter_button_text',
        'counter_button_url',
        'counters',
        'testimonial_subtitle',
        'testimonial_title',
        'testimonial_image',
        'testimonials',
    ];

    protected $casts = [
        'about_features' => 'array',
        'agricultural_work_steps' => 'array',
        'history_works' => 'array',
        'counters' => 'array',
        'testimonials' => 'array',
    ];
}
