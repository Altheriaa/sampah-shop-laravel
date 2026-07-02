<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data Nasabah</title>
    <style>
        body { font-family: 'Open Sans', sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; font-size: 14px; }
        th, td { border: 1px solid #333; padding: 10px; text-align: left; }
        th { background-color: #e2e8f0; }
        .text-center { text-align: center; }
        h2 { margin-bottom: 5px; }
        p { margin-top: 0; color: #555; }
    </style>
</head>
<body onload="window.print()">
    <div class="text-center">
        <h2>Laporan Data Nasabah</h2>
        <p>Aplikasi Start-Up Bank Sampah Induk Sadar Mandiri</p>
        <hr style="border: 1px solid #333; margin-bottom: 20px;">
    </div>
    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="15%">Kode Anggota</th>
                <th width="25%">Nama Anggota</th>
                <th width="20%">No. Telp</th>
                <th width="20%">Alamat</th>
                <th width="15%">Saldo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nasabah as $index => $row)
            <tr>
                <td class="text-center">{{ $index + 1 }}</td>
                <td>AGT{{ str_pad($row->id_anggota, 4, '0', STR_PAD_LEFT) }}</td>
                <td>{{ $row->nama_anggota }}</td>
                <td>{{ $row->no_hp }}</td>
                <td>{{ $row->alamat }}</td>
                <td>Rp {{ number_format($row->saldo_tabungan, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
