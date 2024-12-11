<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Puskita</title>
    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #2ecc71;
            color: white;
            padding-top: 15px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #27ae60;
        }
        .header {
            background-color: #2ecc71;
            height: 60px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        .main-content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 sidebar">
            <h3 class="text-center">PUSKITA</h3>
            <a href="#">Dashboard</a>
            <a href="#">Pendaftaran Pasien</a>
            <a href="#">Informasi Pasien</a>
            <a href="#pelayananObat" class="dropdown-toggle" data-bs-toggle="collapse">Farmasi</a>
                <ul class="collapse list-style-none" id="pelayananObat">
                    <li><a href="#">Pelayanan Obat</a></li>
                    <li><a href="#">Daftar Obat</a></li>
                    <li><a href="#">Penambahan Obat</a></li>
                </ul>
            <a href="#">Kasir</a>
            <a href="#manajemen" class="dropdown-toggle" data-bs-toggle="collapse">Manajemen</a>
                <ul class="collapse" id="manajemen">
                    <li><a href="#">Catatan Diagnosa Pasien</a></li>
                    <li><a href="#">Input Resep Obat</a></li>
                    <li><a href="#">Input Jadwal Dokter</a></li>
                </ul>
            <a href="#dokter" class="dropdown-toggle" data-bs-toggle="collapse">Dokter</a>
                <ul class="collapse" id="dokter">
                    <li><a href="#">Catatan Keluhan Pasien</a></li>
                    <li><a href="resep_obat.php">Resep Obat</a></li>
                    <li><a href="riwayatpem.php">Riwayat Pemeriksaan</a></li>
                </ul>
        </nav>

        <!-- Main content -->
        <div class="col-md-10">
            <div class="header">
                <h5>Admin</h5>
                <img src="https://via.placeholder.com/50" alt="profile" class="rounded-circle">
            </div>

            <div class="main-content bg-white mt-4 p-5">
                <!-- Placeholder for content -->
                @yield('content')
            </div>
        </div>
    </div>
</div>

</body>
</html>