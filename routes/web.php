<?php

use Illuminate\Support\Facades\Route;

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
});