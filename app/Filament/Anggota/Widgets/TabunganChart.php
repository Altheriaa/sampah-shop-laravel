<?php

namespace App\Filament\Anggota\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Pembelian;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TabunganChart extends ChartWidget
{
    protected ?string $heading = 'Grafik Tabungan Masuk (Tahun Ini)';

    protected function getData(): array
    {
        $userId = Auth::id();
        $data = [];
        $labels = [];

        for ($i = 1; $i <= 12; $i++) {
            $sum = Pembelian::where('id_anggota', $userId)
                ->whereIn('tabungan', ['ya', 'Ya'])
                ->whereYear('tanggal', Carbon::now()->year)
                ->whereMonth('tanggal', $i)
                ->sum('total');
            $data[] = $sum;
            $labels[] = Carbon::create()->month($i)->translatedFormat('M');
        }

        return [
            'datasets' => [
                [
                    'label' => 'Total Masuk (Rp)',
                    'data' => $data,
                    'fill' => 'start',
                    'backgroundColor' => 'rgba(14, 165, 233, 0.2)',
                    'borderColor' => '#0ea5e9',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
