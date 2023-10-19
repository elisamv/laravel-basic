<?php

use App\Http\Controllers\LombaController;
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

Route::get('/', [LombaController::class, "index"]); // Mengarahkan ke URL utama

Route::get('/create', [LombaController::class, 'create']); // Mengarahkan ke halaman pembuatan entri baru

Route::get('/kelas', [LombaController::class, 'index'])->name('kelas.index'); // Mengarahkan ke tampilan daftar mata kuliah

Route::post('/kelas', [LombaController::class, 'store'])->name('kelas.store');

Route::get('/kelas/{kelas}/edit', [LombaController::class, 'edit'])->name('kelas.edit'); // Mengarahkan ke halaman pengeditan

Route::post('/kelas/{kelas}', [LombaController::class, 'update'])->name('kelas.update'); // Menyimpan pembaruan data
Route::put('/kelas/{kelas}', [LombaController::class, 'update']); // Alternatif untuk menyimpan pembaruan data

Route::delete('/kelas/{kelas}', [LombaController::class, 'destroy'])->name('kelas.destroy'); // Menghapus data

Route::get('/kelas/{kelas}', [LombaController::class, 'show'])->name('kelas.show'); // Mengarahkan ke tampilan detail mata kuliah



Route::get('/Tentang', function () {
    return view('Tentang');
});

Route::get('/Kontak', function () {
    return view('Kontak');
});