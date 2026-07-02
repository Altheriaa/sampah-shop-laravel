<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    protected $table = 'sampah';
    protected $primaryKey = 'id_sampah';
    protected $guarded = [];

    public function jenisSampah()
    {
        return $this->belongsTo(\App\Models\JenisSampah::class, 'id_jenis', 'id_jenis');
    }
}
