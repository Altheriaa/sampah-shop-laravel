<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    protected $guarded = [];

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
