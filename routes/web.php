<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Mapel\MapelController;
use App\Http\Controllers\Pengguna\PenggunaController;

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('tambah',[PenggunaController::class, 'tambah'])->name('tambah');
Route::get('pengguna',[PenggunaController::class, 'pengguna'])->name('pengguna');
Route::post('tambah.save',[PenggunaController::class, 'save'])->name('save');
Route::get('edit.data/{id?}',[PenggunaController::class, 'edit'])->name('edit');
Route::post('update.data/{id}',[PenggunaController::class, 'update'])->name('update');
Route::get('hapus.data/{id?}',[PenggunaController::class, 'hapus'])->name('hapus');

Route::get('mapel',[MapelController::class, 'mapel'])->name('mapel');
Route::get('tambah-mapel',[MapelController::class, 'tambah'])->name('tambah-mapel');
Route::post('save.mapel',[MapelController::class, 'save'])->name('save-mapel');
Route::get('edit.data-mapel/{id?}',[MapelController::class, 'edit'])->name('edit-mapel');
Route::post('update.data-mapel/{id}',[MapelController::class, 'update'])->name('update-mapel');
Route::get('hapus.data-mapel/{id?}',[MapelController::class, 'hapus'])->name('hapus-mapel');

Route::get('login', [AuthController::class,'login'])->name('login');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');
Route::get('register',[AuthController::class,'daftar'])->name('register');
Route::post('register.post',[AuthController::class, 'register'])->name('register.post');
Route::post('login.post',[AuthController::class, 'LoginPost'])->name('login.post');