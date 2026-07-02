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

    protected static function booted()
    {
        static::created(function ($pembelian) {
            if ($pembelian->sampah) {
                $pembelian->sampah->increment('stok', $pembelian->berat);
            }
        });

        static::updated(function ($pembelian) {
            if ($pembelian->isDirty('berat') || $pembelian->isDirty('id_sampah')) {
                if ($pembelian->isDirty('id_sampah')) {
                    $oldSampah = \App\Models\Sampah::find($pembelian->getOriginal('id_sampah'));
                    if ($oldSampah) {
                        $oldSampah->decrement('stok', $pembelian->getOriginal('berat'));
                    }
                    if ($pembelian->sampah) {
                        $pembelian->sampah->increment('stok', $pembelian->berat);
                    }
                } else {
                    $diff = $pembelian->berat - $pembelian->getOriginal('berat');
                    if ($pembelian->sampah) {
                        $pembelian->sampah->increment('stok', $diff);
                    }
                }
            }
        });

        static::deleted(function ($pembelian) {
            if ($pembelian->sampah) {
                $pembelian->sampah->decrement('stok', $pembelian->berat);
            }
        });
    }
}
