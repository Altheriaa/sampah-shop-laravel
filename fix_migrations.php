<?php
$schemas = [
    "jenis_sampahs" => "\$table->increments('id_jenis'); \$table->string('jenis_sampah', 30)->nullable(); \$table->timestamps();",
    "sampahs" => "\$table->increments('id_sampah'); \$table->string('nama_sampah', 50)->nullable(); \$table->integer('id_jenis')->nullable(); \$table->integer('harga_beli')->nullable(); \$table->integer('harga_jual')->nullable(); \$table->integer('stok')->nullable(); \$table->timestamps();",
    "anggotas" => "\$table->increments('id_anggota'); \$table->string('nama_anggota', 50)->nullable(); \$table->string('umur', 15)->nullable(); \$table->string('jenis_kelamin', 10)->nullable(); \$table->text('alamat')->nullable(); \$table->string('username', 50)->nullable(); \$table->string('password', 255)->nullable(); \$table->string('level', 10)->default('anggota')->nullable(); \$table->string('no_hp', 120)->nullable(); \$table->timestamps();",
    "pembelians" => "\$table->increments('id_pembelian'); \$table->integer('id_sampah')->nullable(); \$table->date('tanggal')->nullable(); \$table->integer('id_anggota')->nullable(); \$table->integer('berat')->nullable(); \$table->integer('total')->nullable(); \$table->text('ket')->nullable(); \$table->string('tabungan', 5)->nullable(); \$table->timestamps();",
    "penjualans" => "\$table->increments('id_penjualan'); \$table->integer('id_sampah')->nullable(); \$table->date('tanggal')->nullable(); \$table->integer('berat')->nullable(); \$table->integer('total')->nullable(); \$table->string('petugas', 50)->nullable(); \$table->timestamps();",
    "penarikans" => "\$table->increments('id_penarikan'); \$table->integer('id_anggota')->nullable(); \$table->date('tanggal')->nullable(); \$table->integer('jumlah')->nullable(); \$table->timestamps();",
    "tabungans" => "\$table->increments('id_tabungan'); \$table->integer('id_user')->nullable(); \$table->integer('tabungan')->nullable(); \$table->timestamps();",
];
$migrationsDir = "database/migrations";
$files = scandir($migrationsDir);
foreach ($files as $file) {
    foreach ($schemas as $tableName => $schemaDef) {
        if (strpos($file, "create_{$tableName}_table") !== false) {
            $content = file_get_contents("$migrationsDir/$file");
            $correctTable = substr($tableName, 0, -1);
            if ($tableName == "jenis_sampahs") $correctTable = "jenis_sampah";
            $content = preg_replace("/Schema::create\('".$correctTable."'.*?\{.*?\}\);/s", "Schema::create('$correctTable', function (Blueprint \$table) { $schemaDef });", $content);
            file_put_contents("$migrationsDir/$file", $content);
        }
    }
}
