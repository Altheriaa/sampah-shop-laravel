<?php

namespace App\Filament\Anggota\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;
use App\Models\Pembelian;
use App\Models\Penarikan;

class RiwayatTabungan extends Page
{
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-banknotes';
    protected static string|null $navigationLabel = 'Riwayat Tabungan Nasabah';
    protected static string|null $title = 'Tabungan';

    protected string $view = 'filament.anggota.pages.riwayat-tabungan';

    protected function getViewData(): array
    {
        $anggota = Auth::guard('anggota')->user();

        $pembelians = Pembelian::where('id_anggota', $anggota->id_anggota)
            ->whereIn('tabungan', ['ya', 'Ya'])
            ->with('sampah')
            ->orderBy('tanggal', 'desc')
            ->get();

        $penarikans = Penarikan::where('id_anggota', $anggota->id_anggota)
            ->orderBy('tanggal', 'desc')
            ->get();

        return [
            'pembelians' => $pembelians,
            'penarikans' => $penarikans,
            'saldo' => $anggota->saldo_tabungan,
        ];
    }
}
