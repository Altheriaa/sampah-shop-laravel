<?php

namespace App\Filament\Anggota\Resources\Sampahs\Pages;

use App\Filament\Anggota\Resources\Sampahs\SampahResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSampahs extends ListRecords
{
    protected static string $resource = SampahResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
