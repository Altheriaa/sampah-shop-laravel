<?php
$models = [
    'JenisSampah' => 'jenis_sampah',
    'Sampah' => 'sampah',
    'Anggota' => 'anggota',
    'Pembelian' => 'pembelian',
    'Penjualan' => 'penjualan',
    'Penarikan' => 'penarikan',
    'Tabungan' => 'tabungan'
];

foreach ($models as $model => $table) {
    $file = "app/Models/{$model}.php";
    $content = file_get_contents($file);
    $content = preg_replace('/class '.$model.' extends Model\n\{/', "class {$model} extends Model\n{\n    protected \$table = '{$table}';\n    protected \$guarded = [];\n", $content);
    file_put_contents($file, $content);
}

// User model
$userContent = file_get_contents("app/Models/User.php");
$userContent = preg_replace('/protected \$fillable = \[.*?\];/s', 'protected $guarded = [];', $userContent);
file_put_contents("app/Models/User.php", $userContent);

$schemas = [
    'jenis_sampahs' => '$table->id(); $table->string("jenis_sampah")->nullable(); $table->timestamps();',
    'sampahs' => '$table->id(); $table->string("nama_sampah")->nullable(); $table->foreignId("id_jenis")->nullable(); $table->integer("harga_beli")->nullable(); $table->integer("harga_jual")->nullable(); $table->integer("stok")->nullable(); $table->timestamps();',
    'anggotas' => '$table->id(); $table->string("nama_anggota")->nullable(); $table->string("umur")->nullable(); $table->string("jenis_kelamin")->nullable(); $table->text("alamat")->nullable(); $table->string("username")->nullable(); $table->string("password")->nullable(); $table->string("level")->nullable(); $table->string("no_hp")->nullable(); $table->timestamps();',
    'pembelians' => '$table->id(); $table->foreignId("id_sampah")->nullable(); $table->date("tanggal")->nullable(); $table->foreignId("id_anggota")->nullable(); $table->integer("berat")->nullable(); $table->integer("total")->nullable(); $table->text("ket")->nullable(); $table->string("tabungan")->nullable(); $table->timestamps();',
    'penjualans' => '$table->id(); $table->foreignId("id_sampah")->nullable(); $table->date("tanggal")->nullable(); $table->integer("berat")->nullable(); $table->integer("total")->nullable(); $table->string("petugas")->nullable(); $table->timestamps();',
    'penarikans' => '$table->id(); $table->foreignId("id_anggota")->nullable(); $table->date("tanggal")->nullable(); $table->integer("jumlah")->nullable(); $table->timestamps();',
    'tabungans' => '$table->id(); $table->foreignId("id_user")->nullable(); $table->integer("tabungan")->nullable(); $table->timestamps();',
];

$migrationsDir = 'database/migrations';
$files = scandir($migrationsDir);
foreach ($files as $file) {
    if (strpos($file, 'create_users_table') !== false) {
        $content = file_get_contents("$migrationsDir/$file");
        $content = str_replace(
            '$table->string(\'email\')->unique();',
            '$table->string(\'email\')->unique()->nullable(); $table->string("nama_lengkap")->nullable(); $table->string("jenis_kelamin")->nullable(); $table->date("tanggal_lahir")->nullable(); $table->string("alamat")->nullable(); $table->string("hp")->nullable(); $table->string("status")->nullable();',
            $content
        );
        file_put_contents("$migrationsDir/$file", $content);
    }
    foreach ($schemas as $tableName => $schemaDef) {
        if (strpos($file, "create_{$tableName}_table") !== false) {
            $content = file_get_contents("$migrationsDir/$file");
            $correctTable = str_replace('s', '', $tableName); // simple hack for these specific names
            if ($tableName == 'jenis_sampahs') $correctTable = 'jenis_sampah';
            $content = preg_replace('/Schema::create\(\''.$tableName.'\'.*?\{.*?\}\);/s', "Schema::create('$correctTable', function (Blueprint \$table) { $schemaDef });", $content);
            $content = preg_replace('/Schema::dropIfExists\(\''.$tableName.'\'\);/', "Schema::dropIfExists('$correctTable');", $content);
            file_put_contents("$migrationsDir/$file", $content);
        }
    }
}
