<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Filament\Pages\Widgets\PersentaseKeuntunganChart;

class PersentaseKeuntungan extends Page
{
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chart-pie';

    protected string $view = 'filament.pages.persentase-keuntungan';

    protected static \UnitEnum|string|null $navigationGroup = 'Data Laporan';
    protected static ?string $navigationLabel = 'Persentase Keuntungan';
    protected static ?string $title = 'Data Persentase Keuntungan';
    protected static ?int $navigationSort = 4;

    protected function getHeaderWidgets(): array
    {
        return [
            PersentaseKeuntunganChart::class,
        ];
    }
}
