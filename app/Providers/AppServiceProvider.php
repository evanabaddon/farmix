<?php

namespace App\Providers;

use App\Models\Category;
use Filament\Support\Assets\Css;
use App\Settings\GeneralSettings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentAsset;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FilamentAsset::register([
            Css::make('fontawesome', public_path('assets/css/fontawesome.min.css')),
        ]);
        View::share('generalSettings', app(GeneralSettings::class));
        View::share('categories', Category::all());
    }
}
