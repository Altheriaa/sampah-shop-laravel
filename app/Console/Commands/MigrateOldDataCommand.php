<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateOldDataCommand extends Command
{
    protected $signature = 'app:migrate-old-data';
    protected $description = 'Migrate data from CI3 db_sampah to new Laravel db';

    public function handle()
    {
        $this->info('Starting data migration...');
        
        // 1. Users
        $this->info('Migrating users...');
        $users = \DB::connection('mysql_old')->table('users')->get();
        foreach($users as $u) {
            \App\Models\User::create([
                'id' => $u->id_user,
                'name' => $u->nama_user,
                'email' => str_contains($u->email ?? $u->username, '@') ? ($u->email ?? $u->username) : $u->username . '@sampah.shop',
                'password' => \Hash::make('password123'),
                'username' => $u->username,
                'foto_user' => $u->foto_user,
                'level' => $u->level,
                'jabatan' => $u->jabatan,
            ]);
        }
        
        // 2. Jenis Sampah
        $this->info('Migrating jenis_sampah...');
        $jenis = \DB::connection('mysql_old')->table('jenis_sampah')->get();
        foreach($jenis as $j) {
            \App\Models\JenisSampah::create([
                'id_jenis' => $j->id_jenis,
                'jenis_sampah' => $j->jenis_sampah,
            ]);
        }
        
        // 3. Sampah
        $this->info('Migrating sampah...');
        $sampah = \DB::connection('mysql_old')->table('sampah')->get();
        foreach($sampah as $s) {
            \App\Models\Sampah::create([
                'id_sampah' => $s->id_sampah,
                'nama_sampah' => $s->nama_sampah,
                'id_jenis' => $s->id_jenis,
                'harga_beli' => $s->harga_beli,
                'harga_jual' => $s->harga_jual,
                'stok' => $s->stok,
            ]);
        }
        
        // 4. Anggota
        $this->info('Migrating anggota...');
        $anggota = \DB::connection('mysql_old')->table('anggota')->get();
        foreach($anggota as $a) {
            \App\Models\Anggota::create([
                'id_anggota' => $a->id_anggota,
                'nama_anggota' => $a->nama_anggota,
                'umur' => $a->umur,
                'jenis_kelamin' => $a->jenis_kelamin,
                'alamat' => $a->alamat,
                'username' => $a->username,
                'password' => \Hash::make('password123'),
                'level' => $a->level,
                'no_hp' => $a->no_hp,
            ]);
        }
        
        // 5. Pembelian
        $this->info('Migrating pembelian...');
        $pembelian = \DB::connection('mysql_old')->table('pembelian')->get();
        foreach($pembelian as $p) {
            \App\Models\Pembelian::create([
                'id_pembelian' => $p->id_pembelian,
                'id_sampah' => $p->id_sampah,
                'tanggal' => ($p->tanggal === '0000-00-00' ? null : $p->tanggal),
                'id_anggota' => $p->id_anggota,
                'berat' => $p->berat,
                'total' => $p->total,
                'ket' => $p->ket,
                'tabungan' => $p->tabungan,
            ]);
        }
        
        // 6. Penjualan
        $this->info('Migrating penjualan...');
        $penjualan = \DB::connection('mysql_old')->table('penjualan')->get();
        foreach($penjualan as $p) {
            \App\Models\Penjualan::create([
                'id_penjualan' => $p->id_penjualan,
                'id_sampah' => $p->id_sampah,
                'tanggal' => ($p->tanggal === '0000-00-00' ? null : $p->tanggal),
                'berat' => $p->berat,
                'total' => $p->total,
                'petugas' => $p->petugas,
            ]);
        }
        
        // 7. Penarikan
        $this->info('Migrating penarikan...');
        $penarikan = \DB::connection('mysql_old')->table('penarikan')->get();
        foreach($penarikan as $p) {
            \App\Models\Penarikan::create([
                'id_penarikan' => $p->id_penarikan,
                'id_anggota' => $p->id_anggota,
                'tanggal' => ($p->tanggal === '0000-00-00' ? null : $p->tanggal),
                'jumlah' => $p->jumlah,
            ]);
        }
        
        // 8. Tabungan
        $this->info('Migrating tabungan...');
        $tabungan = \DB::connection('mysql_old')->table('tabungan')->get();
        foreach($tabungan as $t) {
            \App\Models\Tabungan::create([
                'id_tabungan' => $t->id_tabungan,
                'id_user' => $t->id_user,
                'tabungan' => $t->tabungan,
            ]);
        }
        
        $this->info('Data migration completed successfully! All passwords have been reset to: password123');
    }
}
