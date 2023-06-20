<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
//pegawai
Route::get('/data-pegawai', [App\Http\Controllers\PegawaiController::class, 'index'])->name('data-pegawai');
Route::get('/input-pegawai', [App\Http\Controllers\PegawaiController::class, 'create'])->name('input-pegawai');
Route::post('/simpan-pegawai', [App\Http\Controllers\PegawaiController::class, 'store'])->name('simpan-pegawai');
Route::get('/ubah-pegawai/{id}', [App\Http\Controllers\PegawaiController::class, 'edit'])->name('ubah-pegawai');
Route::post('/update-pegawai/{id}', [App\Http\Controllers\PegawaiController::class, 'update'])->name('update-pegawai');
Route::get('/hapus-pegawai/{id}', [App\Http\Controllers\PegawaiController::class, 'destroy'])->name('hapus-pegawai');

// supplier
Route::get('/data-supplier', [App\Http\Controllers\SupplierController::class, 'index'])->name('data-supplier');
Route::get('/input-supplier', [App\Http\Controllers\SupplierController::class, 'create'])->name('input-supplier');
Route::post('/simpan-supplier', [App\Http\Controllers\SupplierController::class, 'store'])->name('simpan-supplier');
Route::get('/ubah-supplier/{id}', [App\Http\Controllers\SupplierController::class, 'edit'])->name('ubah-supplier');
Route::post('/update-supplier/{id}', [App\Http\Controllers\SupplierController::class, 'update'])->name('update-supplier');
Route::get('/hapus-supplier/{id}', [App\Http\Controllers\SupplierController::class, 'destroy'])->name('hapus-supplier');

// obat
Route::get('/data-obat', [App\Http\Controllers\ObatController::class, 'index'])->name('data-obat');
Route::get('/input-obat', [App\Http\Controllers\ObatController::class, 'create'])->name('input-obat');
Route::post('/simpan-obat', [App\Http\Controllers\ObatController::class, 'store'])->name('simpan-obat');
Route::get('/ubah-obat/{id}', [App\Http\Controllers\ObatController::class, 'edit'])->name('ubah-obat');
Route::post('/update-obat/{id}', [App\Http\Controllers\ObatController::class, 'update'])->name('update-obat');
Route::get('/hapus-obat/{id}', [App\Http\Controllers\ObatController::class, 'destroy'])->name('hapus-obat');

// Transaksi
Route::get('/data-transaksi', [App\Http\Controllers\TransaksiController::class, 'index'])->name('data-transaksi');
Route::get('/input-transaksi', [App\Http\Controllers\DetailTransaksiController::class, 'index'])->name('input-transaksi');
Route::post('/simpan-transaksi', [App\Http\Controllers\DetailTransaksiController::class, 'store'])->name('simpan-transaksi');

//Detail Transaksi
Route::get('/hapus-detail-transaksi/{id}', [App\Http\Controllers\DetailTransaksiController::class, 'destroy'])->name('hapus-detail-transaksi');
// Route::get('/hapus-transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy'])->name('hapus-transaksi');
