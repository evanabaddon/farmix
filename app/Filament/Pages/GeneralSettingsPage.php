<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use App\Settings\GeneralSettings;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Guava\FilamentIconPicker\Forms\IconPicker;

class GeneralSettingsPage extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel = 'General Settings';
    protected static ?string $navigationGroup = 'Website Settings';

    protected static string $settings = GeneralSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                // ========================
                // General Information
                // ========================
                Section::make('General Information')
                    ->columns(2)
                    ->schema([
                        TextInput::make('site_name')->required()->label('Site Name'),
                        Textarea::make('site_description')->label('Site Description'),
                        FileUpload::make('site_logo')->label('Logo')->image(),
                        FileUpload::make('site_favicon')->label('Favicon')->image(),
                        TextInput::make('site_email')->label('Email')->email(),
                        TextInput::make('site_phone')->label('Phone'),
                        Textarea::make('site_address')->label('Address'),
                        TextInput::make('site_city')->label('City'),
                        TextInput::make('site_state')->label('State'),
                        TextInput::make('site_zip')->label('ZIP Code'),
                        TextInput::make('site_country')->label('Country'),
                        Textarea::make('google_map_iframe')->label('Google Map Iframe')->columnSpanFull()->helperText('Paste the full iframe code from Google Maps here.'),
                    ]),

                // ========================
                // Social Media
                // ========================
                Section::make('Social Media Links')
                    ->columns(2)
                    ->schema([
                        TextInput::make('social_media.facebook')->label('Facebook URL')->url(),
                        TextInput::make('social_media.instagram')->label('Instagram URL')->url(),
                        TextInput::make('social_media.twitter')->label('Twitter URL')->url(),
                        TextInput::make('social_media.tiktok')->label('TikTok URL')->url(),
                        TextInput::make('social_media.youtube')->label('YouTube URL')->url(),
                    ]),

                // ========================
                // Google / Analytics
                // ========================
                Section::make('Google / Analytics')
                    ->columns(2)
                    ->schema([
                        TextInput::make('site_google_analytics')->label('Google Analytics ID'),
                        TextInput::make('site_google_tag_manager')->label('Google Tag Manager ID'),
                        TextInput::make('site_google_recaptcha_site_key')->label('reCAPTCHA Site Key'),
                        TextInput::make('site_google_recaptcha_secret_key')->label('reCAPTCHA Secret Key'),
                    ]),

                // ========================
                // Currency
                // ========================
                Section::make('Currency Settings')
                    ->columns(2)
                    ->schema([
                        TextInput::make('site_currency')->label('Currency'),
                        TextInput::make('site_currency_symbol')->label('Currency Symbol'),
                        TextInput::make('site_currency_code')->label('Currency Code'),
                        Select::make('site_currency_position')
                            ->label('Currency Position')
                            ->options([
                                'left' => 'Left (Rp 1000)',
                                'right' => 'Right (1000 Rp)',
                            ])
                            ->required()
                            ->default('left'),
                        TextInput::make('site_currency_format')->label('Currency Format'),
                    ]),

                // ========================
                // CEO Information
                // ========================
                Section::make('CEO Information')
                ->columns(2)
                ->schema([
                    TextInput::make('ceo_name')->label('CEO Name'),
                    TextInput::make('ceo_designation')->label('Designation'),
                    FileUpload::make('ceo_photo')->label('Photo')->image(),
                    FileUpload::make('ceo_signature')->label('Signature')->image(),
                ]),

                // ========================
                // Working Hours
                // ========================
                Section::make('Working Hours')
                    ->description('Tambahkan hari dan jam kerja perusahaan.')
                    ->schema([
                        Repeater::make('working_hours')
                            ->schema([
                                TextInput::make('day')->required()->placeholder('Contoh: Monday'),
                                TextInput::make('hours')->required()->placeholder('Contoh: 8:00 AM - 6:00 PM'),
                            ])
                            ->columns(2)
                            ->collapsed()
                            ->itemLabel(fn (array $state): ?string => $state['day'] ?? null)
                            ->addActionLabel('Add Day'),
                    ]),

                // ========================
                // Default Locale
                // ========================
                // Section::make('Default Locale')
                //     ->columns(2)
                //     ->schema([
                //         TextInput::make('site_default_language')->label('Default Language'),
                //         TextInput::make('site_default_timezone')->label('Default Timezone'),
                //         TextInput::make('site_default_locale')->label('Default Locale'),
                //         TextInput::make('site_default_country')->label('Default Country'),
                //         TextInput::make('site_default_state')->label('Default State'),
                //         TextInput::make('site_default_city')->label('Default City'),
                //         TextInput::make('site_default_zip')->label('Default ZIP Code'),
                //         TextInput::make('site_default_address')->label('Default Address'),
                //         TextInput::make('site_default_phone')->label('Default Phone'),
                //         TextInput::make('site_default_email')->label('Default Email'),
                //     ]),
            ]);
    }

}
