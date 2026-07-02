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
        Schema::create('penjualan', function (Blueprint $table) { $table->increments('id_penjualan'); $table->integer('id_sampah')->nullable(); $table->date('tanggal')->nullable(); $table->integer('berat')->nullable(); $table->integer('total')->nullable(); $table->string('petugas', 50)->nullable(); $table->timestamps(); });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
