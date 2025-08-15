<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HomePageSettings extends Settings
{
    // Categories section
    public string $categories_title = 'Organic Products';
    public string $categories_subtitle = 'Our Categories';
    public int $categories_limit = 6;
    public bool $categories_show_all = true;

    // About section
    public string $about_title = 'About Us';
    public string $about_subtitle = '';
    public string $about_content = '';
    public ?string $about_image1 = null;
    public ?string $about_image2 = null;

    // Progress / Percentage section (array of title & percent)
    public array $percentage_items = [
        ['title' => 'Organic Solutions', 'percent' => 83],
        ['title' => 'Quality Agriculture', 'percent' => 90],
    ];

    // Experience section
    public bool $experience_enabled = true;
    public int $experience_years = 12;
    public ?string $signature_image = null;

    // Products section
    public string $products_title = 'Organic Products';
    public string $products_subtitle = 'Our Products';
    public string $products_display_mode = 'latest'; // latest | featured | random
    public int $products_limit = 8;

    // What We Provide section
    public string $provide_title = 'What We Provide';
    public string $provide_subtitle = 'We Provide';
    public array $provide_items = [];

    // Team section
    public string $team_title = 'Qualified Farmers';
    public string $team_subtitle = 'Our Team';
    public int $team_limit = 4;

    // Testimonial section
    public string $testimonial_title = 'Testimonials';
    public string $testimonial_subtitle = 'Testimonials';
    public array $testimonials = [];

    // FAQ section
    public string $faq_title = 'Common Questions & Answers';
    public string $faq_subtitle = 'FAQ';
    public ?string $faq_image1 = null;
    public ?string $faq_image2 = null;
    public array $faqs = [];

    public static function group(): string
    {
        return 'home';
    }
}
