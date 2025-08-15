<?php

namespace App\Filament\Resources\OfferBannerResource\Pages;

use App\Filament\Resources\OfferBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOfferBanners extends ListRecords
{
    protected static string $resource = OfferBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
