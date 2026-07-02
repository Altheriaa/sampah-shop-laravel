<?php

namespace App\Filament\Anggota\Resources\Sampahs\Pages;

use App\Filament\Anggota\Resources\Sampahs\SampahResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSampah extends EditRecord
{
    protected static string $resource = SampahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
