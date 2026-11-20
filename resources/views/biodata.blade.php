<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri - Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0">Biodata Diri</h3>
                    <small>Tugas Pemrograman PHP menggunakan Laravel</small>
                </div>
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <img src="{{ asset('rafi.jpg') }}" 
                             alt="Foto Profil Rafi" 
                             class="rounded-circle shadow-sm" 
                             style="width: 130px; height: 130px; object-fit: cover;">
                    </div>

                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th width="35%">Nama Lengkap</th>
                                <td>Muhammad Rafi P</td>
                            </tr>
                            <tr>
                                <th>NRP</th>
                                <td>15-2024126</td>
                            </tr>
                            <tr>
                                <th>Prodi</th>
                                <td>Informatika</td>
                            </tr>
                            <tr>
                                <th>Tempat, Tanggal Lahir</th>
                                <td>Bandung, 10 Januari 2005</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>Kp. Andir Rt 04/14 Kab Bandung Barat</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>muhammad.rafi1@mhs.itenas.ac.id</td>
                            </tr>
                            <tr>
                                <th>Hobi</th>
                                <td>Sepak Bola</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-center text-muted py-3">
                    Dibuat dengan Laravel & Bootstrap 5
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>