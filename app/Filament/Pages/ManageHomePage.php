<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use App\Settings\HomePageSettings;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class ManageHomePage extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $settings = HomePageSettings::class;
    protected static ?string $navigationGroup = 'Website Settings';
    protected static ?string $navigationLabel = 'Manage Home Page';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Categories Section')
                    ->schema([
                        TextInput::make('categories_subtitle')
                            ->label('Subtitle')
                            ->maxLength(255),
                        TextInput::make('categories_title')
                            ->label('Title')
                            ->maxLength(255),
                        Toggle::make('categories_show_all')->label('Show All Categories'),
                        TextInput::make('categories_limit')
                            ->numeric()
                            ->minValue(1)
                            ->label('Categories Limit'),
                    ]),

                Section::make('About Section')
                    ->schema([
                        TextInput::make('about_title')
                            ->label('Title')
                            ->required(),
                
                        TextInput::make('about_subtitle')
                            ->label('Subtitle'),
                
                        Textarea::make('about_content')
                            ->label('Content')
                            ->rows(5),
                
                        FileUpload::make('about_image1')
                            ->label('Main Image 1')
                            ->image()
                            ->directory('home/about')
                            ->imagePreviewHeight('150'),
                
                        FileUpload::make('about_image2')
                            ->label('Main Image 2')
                            ->image()
                            ->directory('home/about')
                            ->imagePreviewHeight('150'),
                
                        Repeater::make('percentage_items')
                            ->label('Percentage Items')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title')
                                    ->required(),
                                TextInput::make('percent')
                                    ->label('Percent')
                                    ->numeric()
                                    ->suffix('%')
                                    ->minValue(0)
                                    ->maxValue(100)
                                    ->required(),
                            ])
                            ->default([
                                ['title' => 'Organic Solutions', 'percent' => 83],
                                ['title' => 'Quality Agriculture', 'percent' => 90],
                            ])
                            ->columns(2),
                
                        Toggle::make('experience_enabled')
                            ->label('Show Experience Section')
                            ->default(true),
                
                        TextInput::make('experience_years')
                            ->label('Years of Experience')
                            ->numeric()
                            ->minValue(0),
                
                        FileUpload::make('signature_image')
                            ->label('Signature Image')
                            ->image()
                            ->directory('home/about')
                            ->imagePreviewHeight('100'),
                    ]),
                

                Section::make('Products Section')
                    ->schema([
                        TextInput::make('products_subtitle')
                            ->label('Subtitle')
                            ->maxLength(255),
                        TextInput::make('products_title')
                            ->label('Title')
                            ->maxLength(255),
                        Select::make('products_display_mode')
                            ->options([
                                'latest' => 'Latest',
                                'popular' => 'Popular',
                                'random' => 'Random',
                            ])
                            ->default('latest'),
                        TextInput::make('products_limit')
                            ->numeric()
                            ->minValue(1)
                            ->label('Products Limit'),
                    ]),

                Section::make('What We Provide')
                    ->schema([
                        TextInput::make('provide_subtitle')->label('Subtitle'),
                        TextInput::make('provide_title')->label('Section Title'),
                        Repeater::make('provide_items')
                            ->schema([
                                TextInput::make('title')->required(),
                                Textarea::make('description')->rows(3),
                                FileUpload::make('icon')
                                    ->label('Icon Image')
                                    ->image()
                                    ->directory('home/provide'),
                            ]),
                    ]),

                Section::make('Team / Qualified Farmers')
                    ->schema([
                        TextInput::make('team_title')->label('Section Title'),
                        TextInput::make('team_subtitle')->label('Section Title'),
                        TextInput::make('team_limit')
                            ->numeric()
                            ->minValue(1)
                            ->label('Team Limit'),
                    ]),

                Section::make('Testimonial Section')
                    ->schema([
                        TextInput::make('testimonial_title')->label('Section Title'),
                        TextInput::make('testimonial_subtitle')->label('Subtitle'),
                        Repeater::make('testimonials')
                            ->schema([
                                TextInput::make('name')->required(),
                                TextInput::make('position')->required(),
                                Textarea::make('testimonial')->rows(3),
                                FileUpload::make('image')->label('Image')->image()->directory('home/testimonials'),
                            ]),
                    ]),

                Section::make('FAQ Section')
                    ->schema([
                        TextInput::make('faq_subtitle')->label('Subtitle'),
                        TextInput::make('faq_title')->label('Section Title'),
                        FileUpload::make('faq_image1')->label('FAQ Image 1')->image()->directory('home/faq'),
                        FileUpload::make('faq_image2')->label('FAQ Image 2')->image()->directory('home/faq'),
                        Repeater::make('faqs')
                            ->schema([
                                TextInput::make('question')->required(),
                                Textarea::make('answer')->rows(3),
                            ]),
                    ]),
            ]);
    }
}
