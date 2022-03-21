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


Route::get('/tambah_kegiatan', function () {
    return view('tambah_kegiatan',);
})->middleware(['auth'])->name('tambah_kegiatan');

Route::get('/tambah_operator', function () {
    return view('tambah_operator');
})->middleware(['auth'])->name('tambah_operator');

Route::get('/profil', function () {
    return view('profil');
})->middleware(['auth'])->name('profil');


require __DIR__.'/auth.php';
