<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;


    
    Route::get('/login', [Logincontroller::class,'showLogin'])->name('login');
    Route::post('/actionLogin', [Logincontroller::class,'actionLogin'])->name('actionLogin');
    Route::get('/logout', [Logincontroller::class,'Logout'])->name('Logout');

    Route::middleware(['auth'])->group(function(){

    Route::get( '/', [DashboardController::class,'index']);
    Route::get('/user', [UserController::class,'index']);
    Route::get('/user/tambah', [UserController::class,'create']);
    Route::post('/user/simpan', [UserController::class,'store']);
    Route::get('/user/{id}/edit', [UserController::class,'edit']);
    Route::post('/user/{id}/update', [UserController::class,'update']);
    Route::get('/user/{id}/delete', [UserController::class,'destroy']);




Route::get('/jogging', function () {
    return view('absen_maintenance.jogging'); 


Route::get('/dhuha', function () {
    return view('absen_maintenance.dhuha'); 


Route::get('/lunch', function () {
    return view('absen_maintenance.lunch'); 


Route::get('/zumat', function () {
    return view('absen_maintenance.zumat'); 


Route::get('/zumnin', function () {
    return view('absen_maintenance.zumnin'); 


Route::get('/saction', function () {
    return view('absen_maintenance.saction'); 


Route::get('/paktif', function () {
    return view('absen_maintenance.paktif'); 



Route::get('/form-absen', function () {
    return view('form-absen'); // Ganti dengan nama file Blade Anda


Route::post('/submit-absen', function (Request $request) {
    $data = $request->validate([
        'id_presensi' => 'required',
        'nama' => 'required',
        'tanggal' => 'required|date',
        'presensi' => 'required', // Akan berisi "Hadir" atau "Tidak Hadir"
    

    // Simpan data ke database atau proses sesuai kebutuhan
    return back()->with('success', 'Absen berhasil disimpan!');
});
