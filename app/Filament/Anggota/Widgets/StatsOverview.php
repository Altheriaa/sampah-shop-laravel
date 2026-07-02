<?php

namespace App\Filament\Anggota\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $totalSampah = \App\Models\Sampah::count();
        $totalPembelian = \App\Models\Pembelian::count();
        $totalPenjualan = \App\Models\Penjualan::count();
        $totalNasabah = \App\Models\Anggota::count();

        return [
            Stat::make('Data Sampah', $totalSampah)
                ->description('Jenis sampah terdaftar')
                ->descriptionIcon('heroicon-m-archive-box')
                ->color('info')
                ->url('/admin/sampahs'),
            Stat::make('Pembelian Sampah', $totalPembelian)
                ->description('Total transaksi pembelian')
                ->descriptionIcon('heroicon-m-shopping-cart')
                ->color('success')
                ->url('/admin/pembelians'),
            Stat::make('Penjualan', $totalPenjualan)
                ->description('Total transaksi penjualan')
                ->descriptionIcon('heroicon-m-currency-dollar')
                ->color('warning')
                ->url('/admin/penjualans'),
            Stat::make('Total Nasabah', $totalNasabah)
                ->description('Nasabah terdaftar')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('danger')
                ->url('/admin/anggotas'),
        ];
    }
}
