<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen Makan Siang</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-danger text-white text-center">
                        <h4>Form Absen Makan Siang</h4>
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

                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                            </div>

                            <!-- Tanggal -->
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            </div>

                            <!-- Presensi -->
                            <input type="hidden" name="presensi" value="Tidak Hadir"> <!-- Default value -->
                            <div class="form-check container pr-24">
                                <input class="form-check-input" type="checkbox" id="presensi" name="presensi" value="Hadir">
                                <label class="form-check-label pr-10" for="presensi">
                                    Hadir
                                </label>
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
