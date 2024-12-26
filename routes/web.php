<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonografiController;
use App\Http\Controllers\DataPersebaranPendudukController;
use App\Http\Controllers\PopulationDataController;
use App\Http\Controllers\DataKependudukanAgamaController;
use App\Http\Controllers\PendidikanTerakhirController;
use App\Http\Controllers\DataPekerjaanController;

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

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/demografi', function () {
    return view('demografi');
});

Route::get('/kades', function () {
    return view('kades');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/lembaga_detail', function () {
    return view('lembaga_detail');
});

Route::get('/lembaga', function () {
    return view('lembaga');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/monografi_dashboard', function () {
    return view('monografi_dashboard');
});

Route::get('/monografi', function () {
    return view('monografi');
});

Route::get('/pemerintahan', function () {
    return view('pemerintahan');
});


Route::get('/perangkat_desa', function () {
    return view('perangkat_desa');
});

Route::get('/produkhukum', function () {
    return view('produkhukum');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/transparansi', function () {
    return view('transparansi');
});
Route::view('/admin/dashboard', 'admin.dashboard')->name('dashboard');
Route::view('/admin/kades', 'admin.kades')->name('kades');
Route::view('/admin/perangkat-desa', 'admin.perangkat-desa')->name('perangkat-desa');
Route::view('/admin/struktur', 'admin.struktur')->name('struktur');
Route::view('/admin/pemerintahan', 'admin.pemerintahan')->name('pemerintahan');
Route::view('/admin/agenda', 'admin.agenda')->name('agenda');
Route::view('/admin/produk-hukum', 'admin.produk-hukum')->name('produk-hukum');
Route::view('/admin/transparansi', 'admin.transparansi')->name('transparansi');

Route::get('/admin/monografi', [MonografiController::class, 'index'])->name('admin.monografi');
Route::post('/data-persebaran', [DataPersebaranPendudukController::class, 'store'])->name('data-persebaran.store');
Route::get('/data-persebaran/{id}/edit', [DataPersebaranPendudukController::class, 'edit'])->name('data-persebaran.edit');
Route::put('/data-persebaran/{id}', [DataPersebaranPendudukController::class, 'update'])->name('data-persebaran.update');
Route::delete('/data-persebaran/{id}', [DataPersebaranPendudukController::class, 'destroy'])->name('data-persebaran.destroy');


Route::get('/data-populasi', [PopulationDataController::class, 'index'])->name('population.index');
Route::post('/data-populasi', [PopulationDataController::class, 'store'])->name('population.store');
Route::get('/data-populasi/{id}/edit', [PopulationDataController::class, 'edit'])->name('population.edit');
Route::put('/data-populasi/{id}', [PopulationDataController::class, 'update'])->name('population.update');
Route::delete('/data-populasi/{id}', [PopulationDataController::class, 'destroy'])->name('population.destroy');


Route::get('/data-agama', [DataKependudukanAgamaController::class, 'index'])->name('agama.index');
Route::post('/data-agama', [DataKependudukanAgamaController::class, 'store'])->name('agama.store'); 
Route::get('/data-agama/{id}/edit', [DataKependudukanAgamaController::class, 'edit'])->name('agama.edit'); 
Route::put('/data-agama/{id}', [DataKependudukanAgamaController::class, 'update'])->name('agama.update'); 
Route::delete('/data-agama/{id}', [DataKependudukanAgamaController::class, 'destroy'])->name('agama.destroy'); 

Route::get('/data-pendidikan', [PendidikanTerakhirController::class, 'index'])->name('pendidikan_terakhir.index');
Route::post('/data-pendidikan', [PendidikanTerakhirController::class, 'store'])->name('pendidikan_terakhir.store');
Route::get('/data-pendidikan/{id}/edit', [PendidikanTerakhirController::class, 'edit'])->name('pendidikan_terakhir.edit');
Route::put('/data-pendidikan/{id}', [PendidikanTerakhirController::class, 'update'])->name('pendidikan_terakhir.update');
Route::delete('/data-pendidikan/{id}', [PendidikanTerakhirController::class, 'destroy'])->name('pendidikan_terakhir.destroy');

Route::get('/data-pekerjaan', [DataPekerjaanController::class, 'index'])->name('data_pekerjaan.index');
Route::post('/data-pekerjaan', [DataPekerjaanController::class, 'store'])->name('data_pekerjaan.store');
Route::get('/data-pekerjaan/{id}/edit', [DataPekerjaanController::class, 'edit'])->name('data_pekerjaan.edit');
Route::put('/data-pekerjaan/{id}', [DataPekerjaanController::class, 'update'])->name('data_pekerjaan.update');
Route::delete('/data-pekerjaan/{id}', [DataPekerjaanController::class, 'destroy'])->name('data_pekerjaan.destroy');
