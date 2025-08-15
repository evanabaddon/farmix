<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\OfferBanner;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OfferBannerResource\Pages;
use App\Filament\Resources\OfferBannerResource\RelationManagers;

class OfferBannerResource extends Resource
{
    protected static ?string $model = OfferBanner::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?string $navigationGroup = 'Product';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('subtitle')->required()->maxLength(255),
                TextInput::make('title')->required()->maxLength(255),
                Textarea::make('text')->nullable()->columnSpanFull(),
                TextInput::make('price_old')->label('Old Price')->nullable(),
                TextInput::make('price_new')->label('New Price')->nullable(),
                TextInput::make('link')->label('Button Link')->nullable()->url(),
                FileUpload::make('background_image')->image()->directory('banners')->nullable(),
                FileUpload::make('offer_image')->image()->directory('banners')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('subtitle'),
                TextColumn::make('price_new')->label('Price'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOfferBanners::route('/'),
            'create' => Pages\CreateOfferBanner::route('/create'),
            'edit' => Pages\EditOfferBanner::route('/{record}/edit'),
        ];
    }
}
