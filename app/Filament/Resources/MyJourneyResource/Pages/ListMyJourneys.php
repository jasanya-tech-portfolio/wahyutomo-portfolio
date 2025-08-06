<?php

namespace App\Filament\Resources\MyJourneyResource\Pages;

use App\Filament\Resources\MyJourneyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMyJourneys extends ListRecords
{
    protected static string $resource = MyJourneyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
