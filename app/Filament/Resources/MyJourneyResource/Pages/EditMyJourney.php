<?php

namespace App\Filament\Resources\MyJourneyResource\Pages;

use App\Filament\Resources\MyJourneyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMyJourney extends EditRecord
{
    protected static string $resource = MyJourneyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
