<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    protected $guarded = [];

    public function getSaldoTabunganAttribute()
    {
        $masuk = \App\Models\Pembelian::where('id_anggota', $this->id_anggota)
            ->where('tabungan', 'ya')
            ->sum('total');
        $keluar = \App\Models\Penarikan::where('id_anggota', $this->id_anggota)
            ->sum('jumlah');
        return $masuk - $keluar;
    }
}
