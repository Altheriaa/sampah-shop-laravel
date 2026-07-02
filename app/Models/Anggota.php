<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Panel;

class Anggota extends Authenticatable implements FilamentUser, HasName
{
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    protected $guarded = [];

    public function canAccessPanel(Panel $panel): bool
    {
        return $panel->getId() === 'anggota';
    }

    public function getFilamentName(): string
    {
        return $this->nama_anggota ?? 'Anggota';
    }

    public function pembelian()
    {
        return $this->hasMany(\App\Models\Pembelian::class, 'id_anggota', 'id_anggota');
    }

    public function penarikan()
    {
        return $this->hasMany(\App\Models\Penarikan::class, 'id_anggota', 'id_anggota');
    }

    public function getSaldoTabunganAttribute()
    {
        $masuk = \App\Models\Pembelian::where('id_anggota', $this->id_anggota)
            ->whereIn('tabungan', ['ya', 'Ya'])
            ->sum('total');
        $keluar = \App\Models\Penarikan::where('id_anggota', $this->id_anggota)
            ->sum('jumlah');
        return $masuk - $keluar;
    }
}
