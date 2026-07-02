<!DOCTYPE html>
<html>

<head>
    <title>Cetak Data Sampah</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 14px;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #e2e8f0;
        }

        .text-center {
            text-align: center;
        }

        h2 {
            margin-bottom: 5px;
        }

        p {
            margin-top: 0;
            color: #555;
        }
    </style>
</head>

<body onload="window.print()">
    <div class="text-center">
        <h2>Laporan Data Sampah</h2>
        <p>Aplikasi Start-Up Bank Sampah Induk Sadar Mandiri</p>
        <hr style="border: 1px solid #333; margin-bottom: 20px;">
    </div>
    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="10%">Kode</th>
                <th width="25%">Nama Sampah</th>
                <th width="20%">Jenis Sampah</th>
                <th width="15%">Harga Beli</th>
                <th width="15%">Harga Jual</th>
                <th width="10%">Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sampah as $index => $row)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>KD{{ str_pad($row->id_sampah, 2, '0', STR_PAD_LEFT) }}</td>
                    <td>{{ $row->nama_sampah }}</td>
                    <td>{{ $row->jenisSampah->jenis_sampah ?? '-' }}</td>
                    <td>Rp {{ number_format($row->harga_beli, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($row->harga_jual, 0, ',', '.') }}</td>
                    <td class="text-center">{{ $row->stok }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>