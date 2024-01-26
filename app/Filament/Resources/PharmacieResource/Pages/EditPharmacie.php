<?php

namespace App\Filament\Resources\PharmacieResource\Pages;

use App\Filament\Resources\PharmacieResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPharmacie extends EditRecord
{
    protected static string $resource = PharmacieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
