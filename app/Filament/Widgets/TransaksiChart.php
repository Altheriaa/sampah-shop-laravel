<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Pembelian;
use App\Models\Penjualan;
use Carbon\Carbon;

class TransaksiChart extends ChartWidget
{
    protected ?string $heading = 'Grafik Penjualan dan Pembelian Sampah';
    protected static ?int $sort = 3;
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $year = date('Y');
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        
        $pembelianData = [];
        $penjualanData = [];
        
        for ($i = 1; $i <= 12; $i++) {
            $pembelianData[] = Pembelian::whereYear('tanggal', $year)->whereMonth('tanggal', $i)->count();
            $penjualanData[] = Penjualan::whereYear('tanggal', $year)->whereMonth('tanggal', $i)->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Pembelian',
                    'data' => $pembelianData,
                    'borderColor' => '#3b82f6', // blue
                    'backgroundColor' => '#3b82f6',
                ],
                [
                    'label' => 'Penjualan',
                    'data' => $penjualanData,
                    'borderColor' => '#ef4444', // red
                    'backgroundColor' => '#ef4444',
                ],
            ],
            'labels' => $months,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
