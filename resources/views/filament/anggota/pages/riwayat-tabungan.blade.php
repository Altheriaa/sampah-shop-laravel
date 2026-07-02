<x-filament-panels::page>
    <div class="space-y-6">
        <!-- Saldo Tabungan Box -->
        <div style="background-color: #0ea5e9; border-radius: 8px; padding: 24px; color: white;">
            <h2 style="font-size: 1.5rem; font-weight: 500; margin: 0;">
                Total Saldo Tabungan : Rp {{ number_format($saldo, 0, ',', '.') }}
            </h2>
        </div>

        <!-- Tabel Pembelian (Masuk) -->
        <x-filament::section>
            <x-slot name="heading">
                Data Tabungan (Masuk)
            </x-slot>
            
            <div style="overflow-x: auto;">
                <table style="width: 100%; text-align: left; border-collapse: collapse; font-size: 0.875rem;">
                    <thead style="border-bottom: 2px solid #e5e7eb;">
                        <tr>
                            <th style="padding: 12px 16px; font-weight: 600; text-align: left;">No</th>
                            <th style="padding: 12px 16px; font-weight: 600; text-align: left;">No Transaksi</th>
                            <th style="padding: 12px 16px; font-weight: 600; text-align: left;">Sampah</th>
                            <th style="padding: 12px 16px; font-weight: 600; text-align: left;">Tanggal</th>
                            <th style="padding: 12px 16px; font-weight: 600; text-align: right;">Berat (Kg)</th>
                            <th style="padding: 12px 16px; font-weight: 600; text-align: right;">SubTotal</th>
                        </tr>
                    </thead>
                    <tbody style="border-bottom: 1px solid #e5e7eb;">
                        @php $totalMasuk = 0; @endphp
                        @forelse($pembelians as $index => $row)
                            @php $totalMasuk += $row->total; @endphp
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 12px 16px;">{{ $index + 1 }}</td>
                                <td style="padding: 12px 16px;">BELI{{ str_pad($row->id_pembelian, 4, '0', STR_PAD_LEFT) }}</td>
                                <td style="padding: 12px 16px;">{{ $row->sampah->nama_sampah ?? '-' }}</td>
                                <td style="padding: 12px 16px;">{{ $row->tanggal ? \Carbon\Carbon::parse($row->tanggal)->format('d M Y') : '-' }}</td>
                                <td style="padding: 12px 16px; text-align: right;">{{ $row->berat }}</td>
                                <td style="padding: 12px 16px; text-align: right;">{{ number_format($row->total, 0, ',', '.') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" style="padding: 24px; text-align: center; color: #6b7280;">Belum ada data tabungan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot style="font-weight: bold; background-color: #f9fafb;">
                        <tr>
                            <td colspan="5" style="padding: 12px 16px; text-align: right;">Total Tabungan</td>
                            <td style="padding: 12px 16px; text-align: right;">Rp {{ number_format($totalMasuk, 0, ',', '.') }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </x-filament::section>

        <!-- Tabel Penarikan (Keluar) -->
        <x-filament::section>
            <x-slot name="heading">
                Data Penarikan Tabungan
            </x-slot>
            
            <div style="overflow-x: auto;">
                <table style="width: 100%; text-align: left; border-collapse: collapse; font-size: 0.875rem;">
                    <thead style="border-bottom: 2px solid #e5e7eb;">
                        <tr>
                            <th style="padding: 12px 16px; font-weight: 600; text-align: left;">No</th>
                            <th style="padding: 12px 16px; font-weight: 600; text-align: left;">Tanggal</th>
                            <th style="padding: 12px 16px; font-weight: 600; text-align: right;">Jumlah Penarikan</th>
                        </tr>
                    </thead>
                    <tbody style="border-bottom: 1px solid #e5e7eb;">
                        @php $totalKeluar = 0; @endphp
                        @forelse($penarikans as $index => $row)
                            @php $totalKeluar += $row->jumlah; @endphp
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 12px 16px;">{{ $index + 1 }}</td>
                                <td style="padding: 12px 16px;">{{ $row->tanggal ? \Carbon\Carbon::parse($row->tanggal)->format('d M Y') : '-' }}</td>
                                <td style="padding: 12px 16px; text-align: right;">{{ number_format($row->jumlah, 0, ',', '.') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" style="padding: 24px; text-align: center; color: #6b7280;">Belum ada riwayat penarikan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot style="font-weight: bold; background-color: #f9fafb;">
                        <tr>
                            <td colspan="2" style="padding: 12px 16px; text-align: right;">Total</td>
                            <td style="padding: 12px 16px; text-align: right;">Rp {{ number_format($totalKeluar, 0, ',', '.') }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </x-filament::section>
    </div>
</x-filament-panels::page>
