<?php

namespace App\Filament\Anggota\Resources\Sampahs\Pages;

use App\Filament\Anggota\Resources\Sampahs\SampahResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSampah extends ViewRecord
{
    protected static string $resource = SampahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
