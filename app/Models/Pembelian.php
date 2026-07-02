<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelian';
    protected $primaryKey = 'id_pembelian';
    protected $guarded = [];

    public function anggota()
    {
        return $this->belongsTo(\App\Models\Anggota::class, 'id_anggota', 'id_anggota');
    }

    public function sampah()
    {
        return $this->belongsTo(\App\Models\Sampah::class, 'id_sampah', 'id_sampah');
    }
}
