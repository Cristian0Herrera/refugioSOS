<?php

namespace App\Filament\Resources\RefugiadosResource\Pages;

use App\Filament\Resources\RefugiadosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRefugiados extends EditRecord
{
    protected static string $resource = RefugiadosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
