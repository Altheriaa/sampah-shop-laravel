<?php

namespace App\Filament\Pages\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Pembelian;
use App\Models\Penjualan;

class PersentaseKeuntunganChart extends ChartWidget
{
    protected ?string $heading = 'Persentase Keuntungan (Berdasarkan Selisih)';
    protected ?string $maxHeight = '400px';

    protected function getData(): array
    {
        $totalNasabah = Pembelian::sum('total') ?? 0;
        $totalPengelola = Penjualan::sum('total') ?? 0;

        return [
            'datasets' => [
                [
                    'label' => 'Total (Rp)',
                    'data' => [$totalPengelola, $totalNasabah],
                    'backgroundColor' => [
                        '#60a5fa', // Blue for pengelola
                        '#38bdf8', // Light blue for nasabah
                    ],
                ],
            ],
            'labels' => ['Keuntungan Pengelola', 'Keuntungan Nasabah'],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
