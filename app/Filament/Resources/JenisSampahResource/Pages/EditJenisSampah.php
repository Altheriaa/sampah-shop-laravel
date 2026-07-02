<?php

namespace App\Filament\Resources\JenisSampahResource\Pages;

use App\Filament\Resources\JenisSampahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisSampah extends EditRecord
{
    protected static string $resource = JenisSampahResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
