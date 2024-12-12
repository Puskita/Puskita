@extends('layouts.app')
@section('content')

            <div class="col-10 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Jadwal Dokter</h2>
                </div>
                <div class="card mb-4">
                    <div class="card-header bg-success text-white">
                        Jadwal Poli Umum
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sesi</th>
                                    <th>Dokter</th>
                                    <th>Hari</th>
                                    <th>Waktu</th>
                                    <th>Ruangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>dr. Andika Pratama, M.Kes</td>
                                    <td>Senin - Rabu</td>
                                    <td>09.00 - 21.00</td>
                                    <td>001</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>dr. Rian Setiawan, M.Biomed</td>
                                    <td>Kamis - Jumat</td>
                                    <td>07.00 - 20.00</td>
                                    <td>002</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Jadwal Poli Gigi
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sesi</th>
                                    <th>Dokter</th>
                                    <th>Hari</th>
                                    <th>Waktu</th>
                                    <th>Ruangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>drg. Maria Lestari, Sp.PD</td>
                                    <td>Senin - Rabu </td>
                                    <td>10.00 - 16.00</td>
                                    <td>003</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>drg. Budi Santoso, Sp.Pros (Spesialis Prostodonti)</td>
                                    <td>Kamis - Jumat</td>
                                    <td>09.00 - 15.00</td>
                                    <td>004</td>
                                </tr>
                            </tbody>

                            
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Jadwal Poli Lansia
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sesi</th>
                                    <th>Dokter</th>
                                    <th>Hari</th>
                                    <th>Waktu</th>
                                    <th>Ruangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dr. Andini Sari, Sp.PD-KGer</td>
                                    <td>Senin - Rabu </td>
                                    <td>10.00 - 16.00</td>
                                    <td>003</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dr. Siti Aisyah, Sp.Geri</td>
                                    <td>Kamis - Jumat</td>
                                    <td>09.00 - 15.00</td>
                                    <td>004</td>
                                </tr>
                            </tbody>

                            
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-success text-white">
                        Jadwal Poli Kesehatan Ibu dan Anak (KIA)
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sesi</th>
                                    <th>Dokter</th>
                                    <th>Hari</th>
                                    <th>Waktu</th>
                                    <th>Ruangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dr. Rizky Aditya, Sp.OG</td>
                                    <td>Senin - Rabu </td>
                                    <td>10.00 - 16.00</td>
                                    <td>003</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dr. Maya Larasati, Sp.A</td>
                                    <td>Kamis - Jumat</td>
                                    <td>09.00 - 15.00</td>
                                    <td>004</td>
                                </tr>
                            </tbody>

                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
