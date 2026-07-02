<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembelian', function (Blueprint $table) { $table->increments('id_pembelian'); $table->integer('id_sampah')->nullable(); $table->date('tanggal')->nullable(); $table->integer('id_anggota')->nullable(); $table->integer('berat')->nullable(); $table->integer('total')->nullable(); $table->text('ket')->nullable(); $table->string('tabungan', 5)->nullable(); $table->timestamps(); });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian');
    }
};
