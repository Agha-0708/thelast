<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Absen Dhuha</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-danger text-white text-center">
                        <h4>Data Peserta Aktif</h4>
                    </div>
                    <div class="card-body">
                        <form action="/submit-absen" method="POST">
                            <!-- CSRF Token (Laravel specific) -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <!-- ID Presensi -->
                            <div class="mb-3">
                                <label for="id_presensi" class="form-label">ID Presensi</label>
                                <input type="text" class="form-control" id="id_presensi" name="id_presensi" placeholder="Masukkan ID Presensi" required>
                            </div>

                            <!-- ID Card -->
                            <div class="mb-3">
                                <label for="id_card" class="form-label">ID Card</label>
                                <input type="text" class="form-control" id="id_card" name="id_card" placeholder="Masukkan ID Card" required>
                            </div>

                               <!-- Status Keaktifan -->
                               <div class="mb-3">
                                <label for="status_keaktifan" class="form-label">Status Keaktifan</label>
                                <input type="text" class="form-control" id="status_keaktifan" name="status_keaktifan" placeholder="Masukkan Status Keaktifan" required>
                            </div>

                            <!-- Status Kepesertaan -->
                            <div class="mb-3">
                                <label for="status_kepesertaan" class="form-label">Status Kepesertaan</label>
                                <input type="text" class="form-control" id="status_kepesertaan" name="nama" placeholder="Masukkan Status Kepesertaan" required>
                            </div>

                             <!-- Nama -->
                             <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                            </div>

                            <!-- Jenis Kelamin -->
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Masukkan Jenis Kelamin" required>
                            </div>

                               <!-- Nomor Telepon -->
                               <div class="mb-3">
                                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan Nomor Telepon" required>
                            </div>

                            <!-- Asal Instansi -->
                            <div class="mb-3">
                                <label for="asal_instansi" class="form-label">Asal Instansi</label>
                                <input type="text" class="form-control" id="asal_instansi" name="asal_instansi" placeholder="Masukkan Asal Instansi" required>
                            </div>

                     <!-- Tingkat Pendidikan -->
                     <div class="mb-3">
                        <label for="tingkat_pendidikan" class="form-label">Tingkat Pendidikan</label>
                        <input type="text" class="form-control" id="tingkat_pendidikan" name="tingkat_pendidikan" placeholder="Masukkan Tingkat Pendidikan" required>
                    </div>

                    <!-- NIS/NIM -->
                    <div class="mb-3">
                        <label for="nis/nim" class="form-label">NIS/NIM</label>
                        <input type="text" class="form-control" id="nis/nim" name="nis/nim" placeholder="Masukkan NIS/ NIM" required>
                    </div>

                                         <!-- Kompetensi Program Studi -->
                                         <div class="mb-3">
                                            <label for="kompetensi_programstudi" class="form-label">Kompetensi Program Studi</label>
                                            <input type="text" class="form-control" id="kompetensi_programstudi" name="kompetensi_programstudi" placeholder="Masukkan Kompetensi Program Studi" required>
                                        </div>

                                        <!-- Periode Awal -->
                            <div class="mb-3">
                                <label for="periode_awal" class="form-label">Periode Awal</label>
                                <input type="date" class="form-control" id="periode_awal" name="periode_awal" required>
                            </div>

                            <!-- Periode Akhir -->
                            <div class="mb-3">
                                <label for="periode_akhir" class="form-label">Periode Akhir</label>
                                <input type="date" class="form-control" id="periode_akhir" name="periode_akhir" required>
                            </div>
            
                                 <!-- Gedung Penempatan -->
                                 <div class="mb-3">
                                    <label for="gedung_penempatan" class="form-label">Gedung Penempatan</label>
                                    <input type="text" class="form-control" id="gedung_penempatan" name="gedung_penempatan" placeholder="Masukkan Gedung Penempatan" required>
                                </div>
            
                                <!-- Pembimbing Perusahaan -->
                                <div class="mb-3">
                                    <label for="pembimbing_perusahaan" class="form-label">Pembimbing Perusahaan</label>
                                    <input type="text" class="form-control" id="pembimbing_perusahaan" name="pembimbing_perusahaan" placeholder="Masukkan Nama Pembimbing Perusahaan" required>
                                </div>

                                <!-- Unit Penempatan -->
                                <div class="mb-3">
                                    <label for="unit_penempatan" class="form-label">Unit Penempatan</label>
                                    <input type="text" class="form-control" id="unit_penempatan" name="unit_penempatan" placeholder="Masukkan Unit Penempatan" required>
                                </div>
    
                         <!-- Jenis Pekerjaan -->
                         <div class="mb-3">
                            <label for="jenis_pekerjaan" class="form-label">Jenis Pekerjaan </label>
                            <input type="text" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan" placeholder="Masukkan Jenis Pekerjaan " required>
                        </div>
    
                        <!-- Reguler/MSIB/Magenta -->
                        <div class="mb-3">
                            <label for="pembimbing_perusahaan" class="form-label">Reguler/MSIB/Magenta</label>
                            <input type="text" class="form-control" id="reguler_msib_magenta" name="reguler_msib_magenta" placeholder="Masukkan Program" required>
                        </div>


                            <!-- Tombol Submit -->
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
