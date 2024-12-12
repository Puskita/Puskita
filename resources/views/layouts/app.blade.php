<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/scripts.js') }}"></script>
    <title>Puskita</title>
</head>
<body>
    <!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <ul class="list-unstyled">
                <li class="mb-3">
                    <a href="#" class="text-decoration-none fw-bold text-dark" onclick="setActive(this)">Dashboard</a>
                </li>
                <li class="mb-3">
                    <a href="#" class="text-decoration-none fw-bold text-dark dropdown-toggle" id="dropdownFarmasi" data-bs-toggle="collapse" data-bs-target="#pasienMenu" aria-expanded="false" onclick="setActive(this)">
                        Pendaftaran Pasien
                    </a>
                    <ul class="collapse list-unstyled ps-3" id="pasienMenu">
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none text-secondary" onclick="setActive(this)">Data Diri Pasien</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none text-secondary" onclick="setActive(this)">Jadwal Dokter</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none text-secondary" onclick="setActive(this)">Bukti Registrasi</a>
                        </li>
                        <li class="mb-2">
                            <a href="/pendaftaranPasien" class="text-decoration-none text-secondary" onclick="setActive(this)">Registrasi</a>
                        </li>
                    </ul>
                </li>
                <li class="mb-3">
                    <a href="#" class="text-decoration-none fw-bold text-dark" onclick="setActive(this)">Informasi Pasien</a>
                </li>
                <li class="mb-3">
                    <a href="#" class="text-decoration-none fw-bold text-dark dropdown-toggle" id="dropdownFarmasi" data-bs-toggle="collapse" data-bs-target="#farmasiMenu" aria-expanded="false" onclick="setActive(this)">
                        Farmasi
                    </a>
                    <ul class="collapse list-unstyled ps-3" id="farmasiMenu">
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none text-secondary" onclick="setActive(this)">Pelayanan Obat</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none text-secondary" onclick="setActive(this)">Daftar Obat</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none text-secondary" onclick="setActive(this)">Penambahan Obat</a>
                        </li>
                    </ul>
                </li>
                <li class="mb-3">
                    <a href="#" class="text-decoration-none fw-bold text-dark dropdown-toggle" id="dropdownFarmasi" data-bs-toggle="collapse" data-bs-target="#kasirMenu" aria-expanded="false" onclick="setActive(this)">
                        Kasir
                    </a>
                    <ul class="collapse list-unstyled ps-3" id="kasirMenu">
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none text-secondary" onclick="setActive(this)">Bukti Pembayaran</a>
                        </li>
                    </ul>
                </li>
                <li class="mb-3">
                    <a href="#" class="text-decoration-none fw-bold text-dark" onclick="setActive(this)">Manajemen</a>
                </li>
                <li>
                    <a href="#" class="text-decoration-none fw-bold text-dark dropdown-toggle" id="dropdownFarmasi" data-bs-toggle="collapse" data-bs-target="#dokterMenu" aria-expanded="false" onclick="setActive(this)">
                        Dokter
                    </a>
                    <ul class="collapse list-unstyled ps-3" id="dokterMenu">
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none text-secondary" onclick="setActive(this)">Catatan Keluhan Pasien</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none text-secondary" onclick="setActive(this)">Resep Obat</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none text-secondary" onclick="setActive(this)">Riwayat Pemeriksaan</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
      </div>
    </nav>
    <!-- Sidebar -->
  
    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button data-mdb-button-init class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
  
        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <p class="h3 text-white">Puskita</p>
        </a>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->
  
  <!--Main layout-->
  <main style="margin-top: 58px;">
    <div class="container pt-4">
        @yield('content')
    </div>
  </main>
  <!--Main layout-->
</body>
</html>