<?php

namespace App\Filament\Resources\AdministradoresResource\Pages;

use App\Filament\Resources\AdministradoresResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdministradores extends ListRecords
{
    protected static string $resource = AdministradoresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
