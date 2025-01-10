<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('home.dashboard');

    Route::get('/user', [UserController::class,'index']);
});

Route::get('/jogging', function () {
    return view('jogging'); // Pastikan jogging.blade.php ada di resources/views/
});

Route::get('/form-absen', function () {
    return view('form-absen'); // Ganti dengan nama file Blade Anda
});

Route::post('/submit-absen', function (Request $request) {
    $data = $request->validate([
        'id_presensi' => 'required',
        'nama' => 'required',
        'tanggal' => 'required|date',
        'presensi' => 'required', // Akan berisi "Hadir" atau "Tidak Hadir"
    ]);

    // Simpan data ke database atau proses sesuai kebutuhan
    return back()->with('success', 'Absen berhasil disimpan!');
});
