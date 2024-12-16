<!DOCTYPE html>
<html>
<head>
    <title>Bukti Pembayaran</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Bukti Pembayaran</h2>
    <table>
        <tr>
            <th>No Registrasi:</th>
            <td>{{ $resepObat->keluhan->pendaftaran->noRegistrasi ?? '-' }}</td>
        </tr>
        <tr>
            <th>Nama Pasien:</th>
            <td>{{ $resepObat->keluhan->pendaftaran->dataPasien->namaLengkap ?? '-' }}</td>
        </tr>
        <tr>
            <th>Layanan:</th>
            <td>{{ $layanan }}</td>
        </tr>
        <tr>
            <th>Dokter:</th>
            <td>{{ $resepObat->dokter->namaDokter ?? '-' }}</td>
        </tr>
        <tr>
            <th>Nama Obat:</th>
            <td>{{ $resepObat->obat->namaObat ?? '-' }}</td>
        </tr>
        <tr>
            <th>Harga Obat:</th>
            <td>Rp {{ number_format($resepObat->obat->harga ?? 0, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Jumlah:</th>
            <td>{{ $resepObat->jumlah }}</td>
        </tr>
        <tr>
            <th>Total Harga:</th>
            <td>
                Rp {{ number_format(($resepObat->obat->harga ?? 0) * $resepObat->jumlah, 2, ',', '.') }}
            </td>
        </tr>
        <tr>
            <th>Aturan Pakai:</th>
            <td>{{ $resepObat->aturanPakai }}</td>
        </tr>
    </table>
</body>
</html>
