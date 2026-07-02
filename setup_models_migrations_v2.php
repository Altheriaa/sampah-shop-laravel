<?php

$models = [
    'JenisSampah' => ['jenis_sampah', 'id_jenis'],
    'Sampah' => ['sampah', 'id_sampah'],
    'Anggota' => ['anggota', 'id_anggota'],
    'Pembelian' => ['pembelian', 'id_pembelian'],
    'Penjualan' => ['penjualan', 'id_penjualan'],
    'Penarikan' => ['penarikan', 'id_penarikan'],
    'Tabungan' => ['tabungan', 'id_tabungan']
];

foreach ($models as $model => $config) {
    $table = $config[0];
    $pk = $config[1];
    $file = "app/Models/{$model}.php";
    $content = file_get_contents($file);
    // Replace the previous class body
    $content = preg_replace('/class '.$model.' extends Model\n\{.*?\}/s', "class {$model} extends Model\n{\n    protected \$table = '{$table}';\n    protected \$primaryKey = '{$pk}';\n    protected \$guarded = [];\n}", $content);
    file_put_contents($file, $content);
}

// User model - keep default 'id' but make guarded
$userContent = file_get_contents("app/Models/User.php");
$userContent = preg_replace('/protected \$fillable = \[.*?\];/s', 'protected $guarded = [];', $userContent);
file_put_contents("app/Models/User.php", $userContent);

$schemas = [
    'jenis_sampahs' => '$table->increments("id_jenis"); $table->string("jenis_sampah", 30)->nullable(); $table->timestamps();',
    'sampahs' => '$table->increments("id_sampah"); $table->string("nama_sampah", 50)->nullable(); $table->integer("id_jenis")->nullable(); $table->integer("harga_beli")->nullable(); $table->integer("harga_jual")->nullable(); $table->integer("stok")->nullable(); $table->timestamps();',
    'anggotas' => '$table->increments("id_anggota"); $table->string("nama_anggota", 50)->nullable(); $table->string("umur", 15)->nullable(); $table->string("jenis_kelamin", 10)->nullable(); $table->text("alamat")->nullable(); $table->string("username", 50)->nullable(); $table->string("password", 255)->nullable(); $table->string("level", 10)->default("anggota")->nullable(); $table->string("no_hp", 120)->nullable(); $table->timestamps();',
    'pembelians' => '$table->increments("id_pembelian"); $table->integer("id_sampah")->nullable(); $table->date("tanggal")->nullable(); $table->integer("id_anggota")->nullable(); $table->integer("berat")->nullable(); $table->integer("total")->nullable(); $table->text("ket")->nullable(); $table->string("tabungan", 5)->nullable(); $table->timestamps();',
    'penjualans' => '$table->increments("id_penjualan"); $table->integer("id_sampah")->nullable(); $table->date("tanggal")->nullable(); $table->integer("berat")->nullable(); $table->integer("total")->nullable(); $table->string("petugas", 50)->nullable(); $table->timestamps();',
    'penarikans' => '$table->increments("id_penarikan"); $table->integer("id_anggota")->nullable(); $table->date("tanggal")->nullable(); $table->integer("jumlah")->nullable(); $table->timestamps();',
    'tabungans' => '$table->increments("id_tabungan"); $table->integer("id_user")->nullable(); $table->integer("tabungan")->nullable(); $table->timestamps();',
];

$migrationsDir = 'database/migrations';
$files = scandir($migrationsDir);
foreach ($files as $file) {
    if (strpos($file, 'create_users_table') !== false) {
        $content = file_get_contents("$migrationsDir/$file");
        // Completely replace the up method for users to match both default Laravel and old `users` + `user`
        $newUp = 'public function up(): void
    {
        Schema::create(\'users\', function (Blueprint $table) {
            $table->id();
            $table->string(\'name\');
            $table->string(\'email\')->unique()->nullable();
            $table->timestamp(\'email_verified_at\')->nullable();
            $table->string(\'password\');
            $table->string(\'username\', 30)->nullable();
            $table->string(\'nama_lengkap\', 50)->nullable();
            $table->string(\'jenis_kelamin\', 20)->nullable();
            $table->date(\'tanggal_lahir\')->nullable();
            $table->string(\'alamat\', 100)->nullable();
            $table->string(\'hp\', 20)->nullable();
            $table->string(\'status\', 20)->nullable();
            $table->string(\'foto_user\', 50)->nullable();
            $table->string(\'level\', 20)->nullable();
            $table->string(\'jabatan\', 23)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create(\'password_reset_tokens\', function (Blueprint $table) {
            $table->string(\'email\')->primary();
            $table->string(\'token\');
            $table->timestamp(\'created_at\')->nullable();
        });

        Schema::create(\'sessions\', function (Blueprint $table) {
            $table->string(\'id\')->primary();
            $table->foreignId(\'user_id\')->nullable()->index();
            $table->string(\'ip_address\', 45)->nullable();
            $table->text(\'user_agent\')->nullable();
            $table->longText(\'payload\');
            $table->integer(\'last_activity\')->index();
        });
    }';
        $content = preg_replace('/public function up\(\): void\n\s+\{.*?\}/s', $newUp, $content);
        file_put_contents("$migrationsDir/$file", $content);
    }
    
    foreach ($schemas as $tableName => $schemaDef) {
        if (strpos($file, "create_{$tableName}_table") !== false) {
            $content = file_get_contents("$migrationsDir/$file");
            $correctTable = str_replace('s', '', $tableName);
            if ($tableName == 'jenis_sampahs') $correctTable = 'jenis_sampah';
            $content = preg_replace('/Schema::create\(\''.$correctTable.'\'.*?\{.*?\}\);/s', "Schema::create('$correctTable', function (Blueprint \$table) { $schemaDef });", $content);
            file_put_contents("$migrationsDir/$file", $content);
        }
    }
}
