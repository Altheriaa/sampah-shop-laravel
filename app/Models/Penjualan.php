<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';
    protected $primaryKey = 'id_penjualan';
    protected $guarded = [];

    public function sampah()
    {
        return $this->belongsTo(\App\Models\Sampah::class, 'id_sampah', 'id_sampah');
    }

    protected static function booted()
    {
        static::created(function ($penjualan) {
            if ($penjualan->sampah) {
                $penjualan->sampah->decrement('stok', $penjualan->berat);
            }
        });

        static::updated(function ($penjualan) {
            if ($penjualan->isDirty('berat') || $penjualan->isDirty('id_sampah')) {
                if ($penjualan->isDirty('id_sampah')) {
                    $oldSampah = \App\Models\Sampah::find($penjualan->getOriginal('id_sampah'));
                    if ($oldSampah) {
                        $oldSampah->increment('stok', $penjualan->getOriginal('berat'));
                    }
                    if ($penjualan->sampah) {
                        $penjualan->sampah->decrement('stok', $penjualan->berat);
                    }
                } else {
                    $diff = $penjualan->berat - $penjualan->getOriginal('berat');
                    if ($penjualan->sampah) {
                        $penjualan->sampah->decrement('stok', $diff);
                    }
                }
            }
        });

        static::deleted(function ($penjualan) {
            if ($penjualan->sampah) {
                $penjualan->sampah->increment('stok', $penjualan->berat);
            }
        });
    }
}
