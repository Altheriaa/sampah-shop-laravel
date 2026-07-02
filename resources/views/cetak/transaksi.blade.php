<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data Transaksi</title>
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
        <h2>Laporan Data Transaksi (Pembelian Sampah)</h2>
        <p>Aplikasi Start-Up Bank Sampah Induk Sadar Mandiri</p>
        <hr style="border: 1px solid #333; margin-bottom: 20px;">
    </div>
    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="15%">Tanggal</th>
                <th width="25%">Nama Nasabah</th>
                <th width="15%">Total Berat (Kg)</th>
                <th width="20%">Total Bayar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembelian as $index => $row)
            <tr>
                <td class="text-center">{{ $index + 1 }}</td>
                <td>{{ $row->tanggal ? \Carbon\Carbon::parse($row->tanggal)->format('d/m/Y') : '-' }}</td>
                <td>{{ $row->anggota->nama_anggota ?? '-' }}</td>
                <td class="text-center">{{ $row->berat }}</td>
                <td>Rp {{ number_format($row->total, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
