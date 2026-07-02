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
        // Change columns to unsigned integer (matching increments/id type)
        // and add foreign keys
        Schema::table('pembelian', function (Blueprint $table) {
            $table->unsignedInteger('id_sampah')->nullable()->change();
            $table->unsignedInteger('id_anggota')->nullable()->change();
            $table->foreign('id_sampah')->references('id_sampah')->on('sampah')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggota')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('penarikan', function (Blueprint $table) {
            $table->unsignedInteger('id_anggota')->nullable()->change();
            $table->foreign('id_anggota')->references('id_anggota')->on('anggota')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('sampah', function (Blueprint $table) {
            $table->unsignedInteger('id_jenis')->nullable()->change();
            $table->foreign('id_jenis')->references('id_jenis')->on('jenis_sampah')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('penjualan', function (Blueprint $table) {
            $table->unsignedInteger('id_sampah')->nullable()->change();
            $table->foreign('id_sampah')->references('id_sampah')->on('sampah')->onUpdate('cascade')->onDelete('cascade');
        });

        if (Schema::hasTable('tabungan')) {
            Schema::table('tabungan', function (Blueprint $table) {
                $table->unsignedInteger('id_user')->nullable()->change();
                $table->foreign('id_user')->references('id_anggota')->on('anggota')->onUpdate('cascade')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pembelian', function (Blueprint $table) {
            $table->dropForeign(['id_sampah']);
            $table->dropForeign(['id_anggota']);
        });

        Schema::table('penarikan', function (Blueprint $table) {
            $table->dropForeign(['id_anggota']);
        });

        Schema::table('sampah', function (Blueprint $table) {
            $table->dropForeign(['id_jenis']);
        });

        Schema::table('penjualan', function (Blueprint $table) {
            $table->dropForeign(['id_sampah']);
        });

        if (Schema::hasTable('tabungan')) {
            Schema::table('tabungan', function (Blueprint $table) {
                $table->dropForeign(['id_user']);
            });
        }
    }
};
