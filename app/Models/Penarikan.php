<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penarikan extends Model
{
    protected $table = 'penarikan';
    protected $primaryKey = 'id_penarikan';
    protected $guarded = [];

    public function anggota()
    {
        return $this->belongsTo(\App\Models\Anggota::class, 'id_anggota', 'id_anggota');
    }
}
