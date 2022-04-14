<?php

use App\Http\Controllers\DashboardController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth']);


Route::get('/kegiatan',function () {
    return view('kegiatan',) ;
})->middleware(['auth'])->name('kegiatan');

Route::get('/pegawai', function () {
    return view('pegawai');
})->middleware(['auth'])->name('pegawai');

Route::get('/profil', function () {
    return view('profil');
})->middleware(['auth'])->name('profil');

Route::get('beri_kegiatan', function () {
    return view('beri_kegiatan');
})->middleware(['auth'])->name('beri_kegiatan');

Route::get('daftar_pegawai', function () {
    return view('daftarpegawai');
})->middleware(['auth'])->name('daftar_pegawai');

Route::get('daftar_kegiatan', function () {
    return view('daftarkegiatan');
})->middleware(['auth'])->name('daftar_kegiatan');

Route::get('angka_kredit', function () {
    return view('angkakredit');
})->middleware(['auth'])->name('angka_kredit');

require __DIR__.'/auth.php';
