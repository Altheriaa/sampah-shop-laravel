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
        Schema::create('anggota', function (Blueprint $table) { $table->increments('id_anggota'); $table->string('nama_anggota', 50)->nullable(); $table->string('umur', 15)->nullable(); $table->string('jenis_kelamin', 10)->nullable(); $table->text('alamat')->nullable(); $table->string('username', 50)->nullable(); $table->string('password', 255)->nullable(); $table->string('level', 10)->default('anggota')->nullable(); $table->string('no_hp', 120)->nullable(); $table->timestamps(); });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
